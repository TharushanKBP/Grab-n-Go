<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::orderBy('id', 'DESC')->paginate();
        return view('backend.brand.index')->with('brand', $brand);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|required',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Brand::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        // return $data;
        $status = Brand::create($data);
        if ($status) {
            request()->session()->flash('success', 'Brand successfully created');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function autoSearch(Request $request)
    {
        $query = $request->get('term', '');
        $brand = Brand::where('title', 'LIKE', '%' . $query . '%')->get();

        $data = array();
        foreach ($brand as $brand) {
            $data[] = array('value' => $brand->title, 'id' => $brand->id);
        }
        if (count($data)) {
            return $data;
        } else {
            return ['value' => "No Result Found", 'id' => ''];
        }
    }

    //search brand

    public function search(Request $request)
    {
        $query = $request->input('query');
        $brand = Brand::where('title', 'LIKE', '%' . $query . '%')->orderBy('id', 'DESC')->paginate(12);
        return view('backend.brand.index', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            request()->session()->flash('error', 'Brand not found');
        }
        return view('backend.brand.edit')->with('brand', $brand);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id);
        $this->validate($request, [
            'title' => 'string|required',
        ]);
        $data = $request->all();

        $status = $brand->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Brand successfully updated');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $status = $brand->delete();
            if ($status) {
                request()->session()->flash('success', 'Brand successfully deleted');
            } else {
                request()->session()->flash('error', 'Error, Please try again');
            }
            return redirect()->route('brand.index');
        } else {
            request()->session()->flash('error', 'Brand not found');
            return redirect()->back();
        }
    }
}
