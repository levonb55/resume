<?php

namespace App\Http\Controllers;

use App\Billing\StripeGateway;
use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Webpatser\Countries\Countries;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        $countries = Countries::select('full_name', 'iso_3166_2')->get();
        return view('checkouts.checkout', compact('countries'));
    }

    public function postCheckout(CheckoutRequest $request, StripeGateway $stripeGateway)
    {
        $user = auth()->user();

        try {
            $charge = $stripeGateway->charge($request, $user);

            $credential = $user->credential;
            $credential->update([
                'pdf' => ++$credential->pdf,
                'word' => ++$credential->word,
                'txt' => ++$credential->txt
            ]);

            Order::create([
                'user_id' => $user->id,
                'payment_id' => $charge->id
            ]);

            return redirect()->route('resume-review')->with('payment-success', 'You successfully made a payment!');

        } catch (\Exception $e) {
            return back()->with('payment-error', $e->getMessage());
        }
    }
}
