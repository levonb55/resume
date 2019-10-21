<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function getCheckout()
    {
        return view('checkouts.checkout');
    }

    public function postCheckout(Request $request)
    {
        return $request->all();
    }
}
