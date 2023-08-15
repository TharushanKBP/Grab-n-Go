@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Add Shipping</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Shipping</li>
                        <li class="breadcrumb-item active">Add Shipping</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('shipping.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputTitle" class="col-form-label">Type <span class="text-danger">*</span></label>
                                <input id="inputTitle" type="text" name="type" placeholder="Enter title" value="{{old('type')}}" class="form-control">
                                @error('type')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-form-label">Price <span class="text-danger">*</span></label>
                                <input id="price" type="number" name="price" placeholder="Enter price" value="{{old('price')}}" class="form-control">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="active">-- Status --</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    $('#lfm').filemanager('image');
</script>

<script>
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: "Write short description.....",
            tabsize: 2,
            height: 150
        });
    });
</script>

@endsection