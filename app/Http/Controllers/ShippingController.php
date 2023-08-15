<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;


class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipping = Shipping::orderBy('id', 'DESC')->paginate(10);
        return view('backend.shipping.index')->with('shipping', $shipping);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.shipping.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'string|required',
            'price' => 'nullable|numeric',
            'status' => 'required|in:active,inactive'
        ]);
        $data = $request->all();
        // return $data;
        $status = Shipping::create($data);
        if ($status) {
            request()->session()->flash('success', 'Shipping successfully created');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('shipping.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shipping = Shipping::find($id);
        if (!$shipping) {
            request()->session()->flash('error', 'Shipping not found');
        }
        return view('backend.shipping.edit')->with('shipping', $shipping);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shipping = Shipping::find($id);
        $this->validate($request, [
            'type' => 'string|required',
            'price' => 'nullable|numeric',
            'status' => 'required|in:active,inactive'
        ]);
        $data = $request->all();
        // return $data;
        $status = $shipping->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Shipping successfully updated');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('shipping.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shipping = Shipping::find($id);
        if ($shipping) {
            $status = $shipping->delete();
            if ($status) {
                request()->session()->flash('success', 'Shipping successfully deleted');
            } else {
                request()->session()->flash('error', 'Error, Please try again');
            }
            return redirect()->route('shipping.index');
        } else {
            request()->session()->flash('error', 'Shipping not found');
            return redirect()->back();
        }
    }
}
