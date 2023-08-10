@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Banners</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Banners</li>
                        <li class="breadcrumb-item active">Edit Banner</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <form method="post" action="{{route('banner.update',$banner->id)}}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                                <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$banner->title}}" class="form-control">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputDesc" class="col-form-label">Description</label>
                                <textarea class="form-control" id="description" name="description">{{$banner->description}}</textarea>
                                @error('description')
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
                                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$banner->photo}}">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                @error('photo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="condition" class="col-form-label">Condition <span class="text-danger">*</span></label>
                                <select name="condition" class="form-control">
                                    <option value="banner" {{(($banner->condition=='banner') ? 'selected' : '')}}>Banner</option>
                                    <option value="promo" {{(($banner->condition=='promo') ? 'selected' : '')}}>Promo</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="active" {{(($banner->status=='active') ? 'selected' : '')}}>Active</option>
                                    <option value="inactive" {{(($banner->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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