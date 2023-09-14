<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart()
    {
        return view('frontend.pages.cart');
    }

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
        $id = $request->input('cart_id');
        Cart::instance('shopping')->remove($id);
        $response['status'] = true;
        $response['message'] = "Cart successfully removed";
        $response['total'] = Cart::subtotal();
        $response['cart_count'] = Cart::instance('shopping')->count();

        if ($request->ajax()) {
            $header = view('frontend.layouts.header')->render();
            $response['header'] = $header;
        }

        return response()->json($response); // Use Laravel's in-built JSON response method
    }

    public function cartUpdate(Request $request)
    {
        $this->validate($request, [
            'product_qty' => 'required|numeric',
        ]);

        $rowId = $request->input('rowId');
        $request_quantity = $request->input('product_qty');
        $productQuantity = $request->input('productQuantity');

        if ($request_quantity > $productQuantity) {

            $message = "We currently do not have enough items in stock";
            $response['status'] = false;
        } elseif ($request_quantity < 1) {
            $message = "You can't add less than 1 quantity";
            $response['status'] = false;
        } else {
            Cart::instance('shopping')->update($rowId, $request_quantity);
            $message = "Quantity was updated successfully";
            $response['status'] = true;
            $response['total'] = Cart::subtotal();
            $response['cart_count'] = Cart::instance('shopping')->count();
        }
        if ($request->ajax()) {
            $header = view('frontend.layouts.header')->render();
            $cart_list = view('frontend.layouts._cart_list')->render();
            $response['header'] = $header;
            $response['cart_list'] = $cart_list;
            $response['message'] = $message;
        }

        return response()->json($response); // Use Laravel's in-built JSON response method

    }
}
