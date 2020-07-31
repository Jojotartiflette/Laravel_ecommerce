<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $products = Product::all();

        return view('home', [
            'products' => $products,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function orders()
    {
        return view('orders');
    }
}