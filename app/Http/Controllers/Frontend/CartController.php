<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartStore(Request $request)
    {
        $product_qty = $request->input('product_qty');
        $product_id = $request->input('product_id');

        $product = Product::find($product_id); // Use Laravel's find method

        if (!$product) {
            return response()->json(['status' => false, 'message' => 'Product not found']);
        }

        $result = Cart::instance('shopping')
            ->add($product_id, $product->title, $product_qty, $product->regular_price)
            ->associate('App\Models\Product');

        $response = [
            'status' => $result ? true : false,
            'product_id' => $product_id,
            'total' => Cart::subtotal(),
            'cart_count' => Cart::instance('shopping')->count(),
            'message' => $result ? "Item was added to your cart" : "Failed to add item"
        ];

        if ($request->ajax()) {
            $header = view('frontend.layouts.header')->render();
            $response['header'] = $header;
        }

        return response()->json($response); // Use Laravel's in-built JSON response method
    }

    public function cartDelete(Request $request)
    {
    }
}
