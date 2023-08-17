@extends('backend.layouts.master')
@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Brands</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Brands</li>
                        <li class="breadcrumb-item active">Edit Brand</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{route('brand.update',$brand->id)}}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                                <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$brand->title}}" class="form-control">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="active" {{(($brand->status=='active') ? 'selected' : '')}}>Active</option>
                                    <option value="inactive" {{(($brand->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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