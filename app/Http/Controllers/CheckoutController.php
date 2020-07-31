<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = \Stripe\Charge::create([
                'amount' => Cart::total() * 100,
                'currency' => 'eur',
                'description' => 'Paiement',
                'source' => $request->stripeToken,
                'receipt_email' => $request->email,
                'metadata' => [
                    'owner' => $request->name,
                    'products' => Cart::content()->toJson(),
                ],
            ]);

            return redirect()->route('checkout.success')->with('success', 'Paiement has been accepted !');
        }
        catch(\Stripe\Exception\CardErrorException $e) {
            throw $e;
        }
    }

    public function success()
    {
        if(!session()->has('success')) {
            return redirect()->route('home');
        }

        return view('success');
    }
}
