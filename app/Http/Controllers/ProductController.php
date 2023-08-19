<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::getAllProduct();
        // return $products;
        return view('backend.product.index')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = Brand::get();
        $category = Category::where('is_parent', 1)->get();
        // return $category;
        return view('backend.product.create')->with('category', $category)->with('brand', $brand);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'photo' => 'string|required',
            'stock' => "required|numeric",
            'cat_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'child_cat_id' => 'nullable|exists:categories,id',
            // 'is_featured' => 'sometimes|in:1',
            'all_backorders' => 'required|in:Do_not_allow,Allow_but_notify_customer,allow',
            'status' => 'required|in:active,inactive',
            'regular_price' => 'required|numeric',
            'membership_price' => 'required|numeric',
            'day' => "required|numeric",
            'discount' => 'nullable|numeric'
        ]);

        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $data['is_featured'] = $request->input('is_featured', 0);
        $size = $request->input('size');
        if ($size) {
            $data['size'] = implode(',', $size);
        } else {
            $data['size'] = '';
        }
        // return $size;
        // return $data;
        $status = Product::create($data);
        if ($status) {
            request()->session()->flash('success', 'Product Successfully added');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::get();
        $product = Product::findOrFail($id);
        $category = Category::where('is_parent', 1)->get();
        $item = Product::where('id', $id)->get();
        // return $items;
        return view('backend.product.edit')->with('product', $product)
            ->with('brand', $brand)
            ->with('category', $category)->with('item', $item);
    }

    public function autoSearch(Request $request)
    {
        $query = $request->get('term', '');
        $product = Product::where('title', 'LIKE', '%' . $query . '%')->get();

        $data = array();
        foreach ($product as $product) {
            $data[] = array('value' => $product->title, 'id' => $product->id);
        }
        if (count($data)) {
            return $data;
        } else {
            return ['value' => "No Result Found", 'id' => ''];
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $product = Product::where('title', 'LIKE', '%' . $query . '%')->orderBy('id', 'DESC')->paginate(12);
        return view('backend.product.index', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'photo' => 'string|required',
            'stock' => "required|numeric",
            'cat_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'child_cat_id' => 'nullable|exists:categories,id',
            // 'is_featured' => 'sometimes|in:1',
            'all_backorders' => 'required|in:Do_not_allow,Allow_but_notify_customer,allow',
            'status' => 'required|in:active,inactive',
            'regular_price' => 'required|numeric',
            'membership_price' => 'required|numeric',
            'day' => "required|numeric",
            'discount' => 'nullable|numeric'
        ]);

        $data = $request->all();
        $data['is_featured'] = $request->input('is_featured', 0);
        $size = $request->input('size');
        if ($size) {
            $data['size'] = implode(',', $size);
        } else {
            $data['size'] = '';
        }
        // return $data;
        $status = $product->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Product Successfully updated');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $status = $product->delete();

        if ($status) {
            request()->session()->flash('success', 'Product successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting product');
        }
        return redirect()->route('product.index');
    }
}
