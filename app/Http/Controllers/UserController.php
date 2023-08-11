<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->paginate(10);
        return view('backend.user.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'full_name' => 'string|required',
                'username' => 'string|nullable',
                'email' => 'email|required|unique:users,email',
                'password' => 'main:4|required',
                'phone' => 'string|nullable',
                'photo' => 'required',
                'address' => 'string|nullable',
                'role' => 'required|in:admin,vendor,customer',
                'status' => 'required|in:active,inactive',
            ]
        );
        // dd($request->all());
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        // dd($data);
        $status = User::create($data);
        // dd($status);
        if ($status) {
            request()->session()->flash('success', 'Successfully added user');
        } else {
            request()->session()->flash('error', 'Error occurred while adding user');
        }
        return redirect()->route('user.index');
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
        $user = User::findOrFail($id);
        return view('backend.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $this->validate(
            $request,
            [
                'full_name' => 'string|required',
                'username' => 'string|nullable',
                'email' => 'email|required|exists:users,email',
                'phone' => 'string|nullable',
                'photo' => 'required',
                'address' => 'string|nullable',
                'role' => 'required|in:admin,vendor,customer',
                'status' => 'required|in:active,inactive',
            ]
        );
        // dd($request->all());
        $data = $request->all();
        // dd($data);

        $status = $user->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Successfully updated');
        } else {
            request()->session()->flash('error', 'Error occured while updating');
        }
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = User::findorFail($id);
        $status = $delete->delete();
        if ($status) {
            request()->session()->flash('success', 'User Successfully deleted');
        } else {
            request()->session()->flash('error', 'There is an error while deleting users');
        }
        return redirect()->route('user.index');
    }
}
