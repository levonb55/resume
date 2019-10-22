<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        return view('checkouts.checkout');
    }

    public function postCheckout(CheckoutRequest $request)
    {
        $userEmail = auth()->user()->email;
        try {
            Stripe::setApiKey(config('services.stripe.secret'));

            $charge = Charge::create([
                'amount' => 29.99 *100,
                'currency' => 'USD',
                'source' => $request->input('stripeToken'),
                'receipt_email' => $userEmail,
                'description' => 'Charge for ' . $userEmail,
            ]);

            $credential = auth()->user()->credential;
            $credential->update([
                'pdf' => ++$credential->pdf,
                'word' => ++$credential->word,
                'txt' => ++$credential->txt
            ]);

            Order::create([
                'user_id' => auth()->id(),
                'payment_id' => $charge->id
            ]);

            return redirect()->route('resume-review')->with('payment-success', 'You successfully made a payment!');

        } catch (\Exception $e) {
            return back()->with('payment-error', $e->getMessage());
        }
    }
}
