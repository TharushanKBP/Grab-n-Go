@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Product</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Products</li>
                        <li class="breadcrumb-item active">Product Edit</li>
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" action="{{route('product.update',$product->id)}}">
            @csrf
            @method('PATCH')
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h6>Product description</h6><br>
                            <div class="form-group">
                                <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                                <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{$product->title}}" class="form-control">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h6>Product brand</h6><br>
                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select name="brand_id" class="form-control">
                                    <option value="">--Select Brand--</option>
                                    @foreach($brand as $brand)
                                    <option value="{{$brand->id}}" {{(($product->brand_id==$brand->id)? 'selected':'')}}>{{$brand->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <h6>Product Image</h6><br>

                            <div class="form-group">
                                <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                            <i class="fas fa-image"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$product->photo}}">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                @error('photo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h6>Product data</h6><br>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#General">General</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Inventory">Inventory</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Shipping">Shipping</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Link_Product">Link Product</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-l-0 p-r-0">
                                <div class="tab-pane active" id="General">

                                    <ul class="main-menu metismenu">


                                        <div class="form-group">
                                            <label for="regular_price" class="col-form-label">Regular price <span class="text-danger">*</span></label>
                                            <input id="regular_price" type="number" name="regular_price" placeholder="Enter Regular Price" value="{{$product->regular_price}}" class="form-control">
                                            @error('regular_price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="membership_price" class="col-form-label">Membership price <span class="text-danger">*</span></label>
                                            <input id="membership_price" type="number" name="membership_price" placeholder="Enter Membership Price" value="{{$product->membership_price}}" class="form-control">
                                            @error('membership_price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <!-- <label for="day">Days <span class="text-danger">*</span></label> -->
                                            <!-- <input type="number" name="day" min="0" placeholder="Enter days" value="{{old('day')}}" class="form-control"> -->

                                            <form action="/action_page.php">
                                                <label for="day">Days</label>
                                                <input type="date" id="day" name="day" value="{{$product->day}}" class="form-control">
                                            </form>
                                            @error('day')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="discount" class="col-form-label">Discount(%)</label>
                                            <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount" value="{{$product->discount}}" class="form-control">
                                            @error('discount')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </ul>

                                </div>

                                <div class="tab-pane" id="Inventory">

                                    <ul class="main-menu metismenu">
                                        <div class="form-group">
                                            <label for="stock">Quantity <span class="text-danger">*</span></label>
                                            <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity" value="{{$product->stock}}" class="form-control">
                                            @error('stock')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="all_backorders" class="col-form-label">All backorders?</label>
                                            <select name="all_backorders" class="form-control">
                                                <option value="">-- All backorders --</option>
                                                <option value="Do_not_allow" {{(($product->all_backorders=='Do_not_allow')? 'selected':'')}}>Do not allow</option>
                                                <option value="Allow_but_notify_customer" {{(($product->all_backorders=='Allow_but_notify_customer')? 'selected':'')}}>Allow, but notify customer</option>
                                                <option value="allow" {{(($product->all_backorders=='allow')? 'selected':'')}}>Allow</option>
                                            </select>
                                            @error('all_backorders')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <!-- <div class="form-group">
                                            <label for="sold_individually">Sold individually : </label>
                                            <input type="checkbox" name='sold_individually' id='sold_individually' value='1' checked> Yes
                                        </div> -->

                                    </ul>
                                </div>

                                <div class="tab-pane" id="Shipping">

                                    <ul class="main-menu metismenu">

                                        <!-- <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Weight (kg)</label>
                                            <input id="inputTitle" type="text" name="title" placeholder="0" value="{{old('title')}}" class="form-control">
                                            @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Dimensions (CM)</label>
                                            <input id="inputTitle" type="text" name="title" placeholder="" value="{{old('title')}}" class="form-control">
                                            @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Shipping Class</label>

                                            <select name="brand_id" class="form-control">

                                                <option value="active">-- No Shipping Class --</option>

                                            </select>
                                        </div> -->

                                    </ul>
                                </div>

                                <div class="tab-pane" id="Link_Product">

                                    <ul class="main-menu metismenu">

                                        <!-- not work -->
                                        <!-- <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Upsells</label>
                                            <input id="inputTitle" type="text" name="title" placeholder="Search for a product" value="{{old('title')}}" class="form-control">
                                            @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="inputTitle" class="col-form-label">Cross-sells</label>
                                            <input id="inputTitle" type="text" name="title" placeholder="Search for a product" value="{{old('title')}}" class="form-control">
                                            @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h6>Product category</h6><br>

                            <div class="form-group">
                                <label for="is_featured">Is Featured</label><br>
                                <input type="checkbox" name='is_featured' id='is_featured' value='{{$product->is_featured}}' {{(($product->is_featured) ? 'checked' : '')}}> Yes
                            </div>
                            {{-- {{$category}} --}}

                            <div class="form-group">
                                <label for="cat_id">Category <span class="text-danger">*</span></label>
                                <select name="cat_id" id="cat_id" class="form-control">
                                    <option value="">--Select any category--</option>
                                    @foreach($category as $key=>$cat_data)
                                    <option value='{{$cat_data->id}}' {{(($product->cat_id==$cat_data->id)? 'selected' : '')}}>{{$cat_data->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @php
                            $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();
                            // dd($sub_cat_info);

                            @endphp
                            {{-- {{$product->child_cat_id}} --}}
                            <div class="form-group {{(($product->child_cat_id)? '' : 'd-none')}}" id="child_cat_div">
                                <label for="child_cat_id">Sub Category</label>
                                <select name="child_cat_id" id="child_cat_id" class="form-control">
                                    <option value="">--Select any sub category--</option>

                                </select>
                            </div>

                            <br>
                            <h6>Publish</h6>

                            <div class="form-group">
                                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
                                    <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


@endsection

@section('scripts')

<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
        $('#summary').summernote({
            placeholder: "Write short description.....",
            tabsize: 2,
            height: 100
        });
    });

    $(document).ready(function() {
        $('#description').summernote({
            placeholder: "Write detail description.....",
            tabsize: 2,
            height: 150
        });
    });
</script>

<script>
    $('#cat_id').change(function() {
        var cat_id = $(this).val();
        // alert(cat_id);
        if (cat_id != null) {
            // Ajax call
            $.ajax({
                url: "/admin/category/" + cat_id + "/child",
                data: {
                    _token: "{{csrf_token()}}",
                    id: cat_id
                },
                type: "POST",
                success: function(response) {
                    if (typeof(response) != 'object') {
                        response = $.parseJSON(response)
                    }
                    // console.log(response);
                    var html_option = "<option value=''>----Select sub category----</option>"
                    if (response.status) {
                        var data = response.data;
                        // alert(data);
                        if (response.data) {
                            $('#child_cat_div').removeClass('d-none');
                            $.each(data, function(id, title) {
                                html_option += "<option value='" + id + "'>" + title + "</option>"
                            });
                        } else {}
                    } else {
                        $('#child_cat_div').addClass('d-none');
                    }
                    $('#child_cat_id').html(html_option);
                }
            });
        } else {}
    })
</script>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>



@endsection