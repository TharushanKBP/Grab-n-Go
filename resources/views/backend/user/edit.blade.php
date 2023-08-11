@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Users</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{route('user.update',$user->id)}}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="full_name" placeholder="Full name" value="{{$user->full_name}}" class="form-control">
                                @error('full_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" placeholder="Username" value="{{$user->username}}" class="form-control">
                                @error('username')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Email Address" value="{{$user->email}}" class="form-control">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" placeholder="Phone" value="{{$user->phone}}" class="form-control">
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" placeholder="Address" value="{{$user->address}}" class="form-control">
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Password" value="{{$user->password}}" class="form-control">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$user->photo}}">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                @error('photo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="condition" class="col-form-label">Role <span class="text-danger">*</span></label>
                                <select name="condition" class="form-control">
                                    <option value="admin" {{(($user->role=='admin') ? 'selected' : '')}}>Admin</option>
                                    <option value="vendor" {{(($user->role=='vendor') ? 'selected' : '')}}>Vendor</option>
                                    <option value="customer" {{(($user->role=='customer') ? 'selected' : '')}}>Customer</option>
                                </select>
                                @error('role')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                                    <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                @endsection

                @section('styles')
                <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
                @endsection
                @section('scripts')
                <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
                <script>
                    $('#lfm').filemanager('image');

                    $(document).ready(function() {
                        $('#description').summernote({
                            placeholder: "Write short description.....",
                            tabsize: 2,
                            height: 150
                        });
                    });
                </script>
                @endsection