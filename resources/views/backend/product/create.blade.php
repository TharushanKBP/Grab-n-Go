@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Product</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Product Add</li>
                    </ul>
                </div>

            </div>
        </div>
        <form method="post" action="{{route('product.store')}}">
            {{csrf_field()}}
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card overflowhidden">

                        <div class="body">
                            <h6>Product description</h6><br>
                            <div class="form-group">
                                <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                                <input id="inputTitle" type="text" name="title" placeholder="Enter title" value="{{old('title')}}" class="form-control">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
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
                                {{-- {{$brand}} --}}

                                <select name="brand_id" class="form-control" multiple>

                                    @foreach($brand as $brand)
                                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <h6>Product Image</h6><br>

                            <div class="form-group">
                                <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
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
                                            <input type="number" name="regular_price" placeholder="Enter Regular Price" value="{{old('regular_price')}}" class="form-control">
                                            @error('regular_price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="membership_price" class="col-form-label">Membership price <span class="text-danger">*</span></label>
                                            <input type="number" name="membership_price" placeholder="Enter Membership Price" value="{{old('membership_price')}}" class="form-control">
                                            @error('membership_price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <!-- <label for="day">Days <span class="text-danger">*</span></label> -->
                                            <!-- <input type="number" name="day" min="0" placeholder="Enter days" value="{{old('day')}}" class="form-control"> -->

                                            <form action="/action_page.php">
                                                <label for="day">Days</label>
                                                <input type="date" id="day" name="day" class="form-control">
                                            </form>

                                            @error('day')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="discount" class="col-form-label">Discount(%)</label>
                                            <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount" value="{{old('discount')}}" class="form-control">
                                            @error('discount')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </ul>

                                </div>

                                <div class="tab-pane" id="Inventory">

                                    <ul class="main-menu metismenu">
                                        <div class="form-group">
                                            <label for="stock">Quantity</label>
                                            <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity" value="{{old('stock')}}" class="form-control">
                                            @error('stock')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="all_backorders" class="col-form-label">All backorders?</label>
                                            <select name="all_backorders" class="form-control">
                                                <option value="active">-- All backorders --</option>
                                                <option value="Do_not_allow">Do not allow</option>
                                                <option value="Allow_but_notify_customer">Allow, but notify customer</option>
                                                <option value="allow">Allow</option>
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
                                <label for="is_featured">Is Featured</label>
                                <input type="checkbox" name='is_featured' id='is_featured' value='1' checked> Yes
                            </div>

                            {{-- {{$category}} --}}

                            <div class="form-group">
                                <label for="cat_id">Category <span class="text-danger">*</span></label>
                                <select name="cat_id" id="cat_id" class="form-control" multiple>

                                    @foreach($category as $key=>$cat_data)
                                    <option value='{{$cat_data->id}}'>{{$cat_data->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group d-none" id="child_cat_div">
                                <label for="child_cat_id">Sub Category</label>
                                <select name="child_cat_id" id="child_cat_id" class="form-control">
                                    <option value="">--Select any category--</option>
                                    {{-- @foreach($parent_cats as $key=>$parent_cat)
                                     <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <br>
                            <h6>Publish</h6>

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
                            <br>
                            <div class="form-group mb-3">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Annual Report <small>Description text here...</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <span class="text-muted">Sales Report</span>
                                <h3 class="text-warning">$4,516</h3>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <span class="text-muted">Annual Revenue </span>
                                <h3 class="text-info">$6,481</h3>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <span class="text-muted">Total Profit</span>
                                <h3 class="text-success">$3,915</h3>
                            </div>
                        </div>
                        <div id="area_chart" class="graph"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis<small>8% High then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="sparkline-pie text-center">6,4,8</div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Sales Income</h2>
                    </div>
                    <div class="body">
                        <h6>Overall <b class="text-success">7,000</b></h6>
                        <div class="sparkline" data-type="line" data-spot-Radius="2" data-highlight-Spot-Color="#445771" data-highlight-Line-Color="#222" data-min-Spot-Color="#445771" data-max-Spot-Color="#445771" data-spot-Color="#445771" data-offset="90" data-width="100%" data-height="95px" data-line-Width="1" data-line-Color="#ffcd55" data-fill-Color="#ffcd55">2,4,3,1,5,7,3,2</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Recent Transactions</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width:60px;">#</th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>Address</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                        <td>Hossein</td>
                                        <td>IPONE-7</td>
                                        <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                        <td>3</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                        <td>$ 356</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                        <td>Camara</td>
                                        <td>NOKIA-8</td>
                                        <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                        <td>3</td>
                                        <td><span class="badge badge-default">Delivered</span></td>
                                        <td>$ 542</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                        <td>Maryam</td>
                                        <td>NOKIA-456</td>
                                        <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                        <td>4</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                        <td>$ 231</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                        <td>Micheal</td>
                                        <td>SAMSANG PRO</td>
                                        <td>508 Virginia Street Chicago, IL 60653</td>
                                        <td>1</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                        <td>$ 601</td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                        <td>Frank</td>
                                        <td>NOKIA-456</td>
                                        <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                        <td>13</td>
                                        <td><span class="badge badge-warning">PENDING</span></td>
                                        <td>$ 128</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>New Orders</h2>
                    </div>
                    <div class="body">
                        <table class="table table-hover">
                            <thead class="thead-success">
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Customers</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>IPONE-7</td>
                                    <td>
                                        <ul class="list-unstyled team-info margin-0">
                                            <li><img src="{{asset('backend/assets/images/xs/avatar1.jpg')}}" title="Avatar" alt="Avatar"></li>
                                            <li><img src="{{asset('backend/assets/images/xs/avatar6.jpg')}}" title="Avatar" alt="Avatar"></li>
                                        </ul>
                                    </td>
                                    <td>$ 356</td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>NOKIA-8</td>
                                    <td>
                                        <ul class="list-unstyled team-info margin-0">
                                            <li><img src="{{asset('backend/assets/images/xs/avatar1.jpg')}}" title="Avatar" alt="Avatar"></li>
                                            <li><img src="{{asset('backend/assets/images/xs/avatar5.jpg')}}" title="Avatar" alt="Avatar"></li>
                                            <li><img src="{{asset('backend/assets/images/xs/avatar6.jpg')}}" title="Avatar" alt="Avatar"></li>
                                        </ul>
                                    </td>
                                    <td>$ 542</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>IPONE-7</td>
                                    <td>
                                        <ul class="list-unstyled team-info margin-0">
                                            <li><img src="{{asset('backend/assets/images/xs/avatar5.jpg')}}" title="Avatar" alt="Avatar"></li>
                                        </ul>
                                    </td>
                                    <td>$ 356</td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>NOKIA-8</td>
                                    <td>
                                        <ul class="list-unstyled team-info margin-0">
                                            <li><img src="{{asset('backend/assets/images/xs/avatar3.jpg')}}" title="Avatar" alt="Avatar"></li>
                                            <li><img src="{{asset('backend/assets/images/xs/avatar2.jpg')}}" title="Avatar" alt="Avatar"></li>
                                        </ul>
                                    </td>
                                    <td>$ 542</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Top Selling Country</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="world-map-markers" class="jvector-map" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        </div> -->

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