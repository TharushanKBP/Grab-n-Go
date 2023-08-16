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
                                <label for="inputTitle" class="col-form-label">Name</label>
                                <input id="inputTitle" type="text" name="name" placeholder="Enter name" value="{{$user->name}}" class="form-control">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="col-form-label">Email</label>
                                <input id="inputEmail" type="email" name="email" placeholder="Enter email" value="{{$user->email}}" class="form-control">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                 <label for="inputPassword" class="col-form-label">Password</label>
                                 <input id="inputPassword" type="password" name="password" placeholder="Enter password"  value="{{$user->password}}" class="form-control">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div> --}}

                    <div class="form-group">
                        <label for="inputPhoto" class="col-form-label">Photo</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$user->photo}}">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    @php
                    $roles=DB::table('users')->select('role')->where('id',$user->id)->get();
                    // dd($roles);
                    @endphp
                    <div class="form-group">
                        <label for="role" class="col-form-label">Role</label>
                        <select name="role" class="form-control">
                            <option value="">-- Select Role --</option>
                            @foreach($roles as $role)
                            <option value="{{$role->role}}" {{(($role->role=='admin') ? 'selected' : '')}}>Admin</option>
                            <option value="{{$role->role}}" {{(($role->role=='user') ? 'selected' : '')}}>User</option>
                            @endforeach
                        </select>
                        @error('role')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                            <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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