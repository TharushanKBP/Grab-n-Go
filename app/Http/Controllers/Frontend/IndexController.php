<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $product = Product::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        return view('frontend.layouts.master', compact('product'));
    }

    public function userAuth()
    {
        return view('frontend.pages.login');
    }
}
