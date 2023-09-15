<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function Cart()
    {
        return view('frontend.cart.cart');
    }

    public function cartStore(Request $request)
    {
        dd($request->all());
    }
}
