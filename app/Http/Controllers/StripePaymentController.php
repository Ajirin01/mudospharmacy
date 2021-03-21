<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Cart;
class StripePaymentController extends Controller
{



    public function stripe()
    {
        return view('handcash');
    }



    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => \Cart::getSubTotal(),
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from mudospharmacy.com"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }

}
