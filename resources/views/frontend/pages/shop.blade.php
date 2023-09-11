<link href="{{asset('frontend/assests/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assests/css/style_sp.css')}}" rel="stylesheet">


<!-- Breadcumb  -->

<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>Shop Grid</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('Shop')}}">Shop Grid</a></li>

                </ol>
            </div>
        </div>
    </div>
</div>



<section class="shop_grid_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- Single Widget -->
                    <div class="widget catagory mb-30">
                        <h6 class="widget-title">Product Categories</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Laptop <span class="text-muted">(109)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Desktop <span class="text-muted">(67)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <!-- <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Kids <span class="text-muted">(89)</span></label>
                            </div> -->
                            <!-- Single Checkbox -->
                            <!-- <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Accessories <span class="text-muted">(425)</span></label>
                            </div> -->
                            <!-- Single Checkbox -->
                            <!-- <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">Fashion <span class="text-muted">(73)</span></label>
                            </div> -->
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="widget price mb-30">
                        <h6 class="widget-title">Filter by Price</h6>
                        <div class="widget-desc">
                            <div class="slider-range">
                                <div data-min="0" data-max="1350" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="range-price">Price: 0 - 1350</div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="widget color mb-30">
                        <h6 class="widget-title">Filter by Color</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label black" for="customCheck6">Black <span class="text-muted">(9)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label pink" for="customCheck7">Pink <span class="text-muted">(6)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label red" for="customCheck8">Red <span class="text-muted">(8)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label purple" for="customCheck9">Purple <span class="text-muted">(4)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label orange" for="customCheck10">Orange <span class="text-muted">(7)</span></label>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="widget brands mb-30">
                        <h6 class="widget-title">Filter by brands</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11">Apple <span class="text-muted">(213)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                <label class="custom-control-label" for="customCheck12">Dell <span class="text-muted">(65)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                <label class="custom-control-label" for="customCheck13">HP <span class="text-muted">(70)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                <label class="custom-control-label" for="customCheck14">Lenovo <span class="text-muted">(104)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                <label class="custom-control-label" for="customCheck15">Asus <span class="text-muted">(71)</span></label>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="widget rating mb-30">
                        <h6 class="widget-title">Average Rating</h6>
                        <div class="widget-desc">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <span class="text-muted">(103)</span></a></li>

                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(78)</span></a></li>

                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(47)</span></a></li>

                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(9)</span></a></li>

                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <span class="text-muted">(3)</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="widget size mb-30">
                        <h6 class="widget-title">Filter by Size</h6>
                        <div class="widget-desc">
                            <ul>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-7 col-md-8 col-lg-9">

                <!-- Shop Top Sidebar -->
                <!-- <div class="shop_top_sidebar_area d-flex flex-wrap align-items-center justify-content-between">
                    <div class="view_area d-flex">
                        <div class="grid_view">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="icofont-layout"></i></a>
                        </div>
                        <div class="list_view ml-3">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="List View"><i class="icofont-listine-dots"></i></a>
                        </div>
                    </div>
                    <select class="small right">
                        <option selected>Short by Popularity</option>
                        <option value="1">Short by Newest</option>
                        <option value="2">Short by Sales</option>
                        <option value="3">Short by Ratings</option>
                    </select>
                </div>  -->

                <div class="shop_grid_product_area">
                    <div class="row justify-content-center">
                        <!-- Single Product -->

                        @if(count($products)>0)

                        @foreach($products as $product)

                        <div class="col-9 col-sm-12 col-md-6 col-lg-4">
                            <div class="single-product-area mb-30">
                                <div class="product_image">
                                    <!-- Product Image -->
                                    @php
                                    $photo=explode(',',$product->photo)
                                    @endphp
                                    <img class="normal_img" src="{{$photo[0]}}" alt="">

                                    <!-- Product Badge -->
                                    <div class="product_badge">
                                        <span>New</span>
                                    </div>

                                    <!-- Wishlist -->
                                    <!-- <div class="product_wishlist">
                                        <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                    </div> -->

                                    <!-- Compare -->
                                    <!-- <div class="product_compare">
                                        <a href="compare.html"><i class="icofont-exchange"></i></a>
                                    </div> -->
                                </div>

                                <!-- Product Description -->
                                <div class="product_description">
                                    <!-- Add to cart -->
                                    <div class="product_add_to_cart">
                                        <a href="#" data-quantity="1" data-product-id="{{$product->id}}" class="add_to_cart" id="add_to_cart{{$product->id}}">Add to Cart</a>
                                    </div>

                                    <!-- Quick View -->
                                    <div class="product_quick_view">
                                        <a href="#" data-toggle="modal" data-target="#quickview">Quick View</a>
                                    </div>

                                    <!-- <p class="brand_name">Top</p> -->
                                    <a href="{{route('SingleProduct',$product->slug)}}">{{$product->title}}</a>
                                    <h6 class="product-price">Rs. {{$product->regular_price}}.00</h6>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @endif

                    </div>
                </div>

                <!-- Shop Pagination Area -->
                <div class="shop_pagination_area mt-30">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).on('click', '.add_to_cart', function(e) {
        e.preventDefault();
        var product_id = $(this).data('product-id');
        var product_qty = $(this).data('quantity');


        var token = "{{csrf_token()}}";
        var path = "{{route('cart.store')}}";

        $.ajax({
            url: path,
            type: "POST",
            dataType: "JSON",
            data: {
                product_id: product_id,
                product_qty: product_qty,
                _token: token,
            },
            beforeSend: function() {
                $('#add_to_cart' + product_id).html('<i class="fa fa-spinner fa-spin"></i> Loading.....');
            },
            success: function(data) {
                console.log(data);
            }
        });
    });
</script>