<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $banner = Banner::where(['status' => 'active', 'condition' => 'banner'])->orderBy('id', 'DESC')->limit('5')->get();
        $banners = Banner::where(['status' => 'active', 'condition' => 'promo'])->orderBy('id', 'DESC')->limit('5')->get();
        $product = Product::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();

        return view('frontend.layouts.master', compact('banner', 'banners', 'product'));
    }

    public function userAuth()
    {
        return view('frontend.pages.login');
    }
}
