<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class IndexController extends Controller
{

    // Home

    public function Home()
    {
        $product = Product::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();

        return view('frontend.index', compact('product'));
    }

    public function userAuthlogin()
    {
        return view('frontend.auth.login');
    }

    public function userAuthregister()
    {
        return view('frontend.auth.register');
    }

    public function loginSubmit(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|exists:users,email',
            'password' => 'required|min:4',
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'status' => 'active'])) {
            Session::put('user', $request['email']);
            request()->session()->flash('success', 'Successfully login');
            return redirect()->route('Home');
        } else {
            request()->session()->flash('error', 'Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }

    public function registerSubmit(Request $request)
    {
        // return $request->all();

        $this->validate($request, [
            'name' => 'string|required|min:2',
            'email' => 'string|required|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        $data = $request->all();
        // dd($data);
        $check = $this->create($data);
        Session::put('user', $data['email']);
        if ($check) {
            request()->session()->flash('success', 'Successfully registered');
            return redirect()->route('user.authlogin');
        } else {
            request()->session()->flash('error', 'Please try again!');
            return back();
        }
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => 'active'
        ]);
    }

    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success', 'Logout successfully');
        return back();
    }

    public function Shop()
    {
        return view('frontend.pages.shop');
    }

    public function SingleProduct($slug)
    {
        // return $slug;
        // $product = Product::where(['status' => 'active'])->orderBy('id', 'DESC')->limit('15')->get();
        // return view('frontend.pages_main.single_product_main',compact('product'));

        $product = Product::where('slug', $slug)->first();
        if ($product) {
            return view('frontend.pages.single_product', compact('product'));
        } else {
            return 'Product details not found';
        }
    }

    public function myaccount()
    {
        return view('frontend.pages.my-account');
    }
}
