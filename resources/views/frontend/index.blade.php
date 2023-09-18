@extends('frontend.layouts.master')

@section('content')


<!--Home Slideshow-->
<section class="slideshow slideshow-wrapper">
    <div class="container container-1330">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="home-slideshow slideshow-medium slick-arrow-dots circle-arrow">
                    <div class="slide">
                        <div class="slideshow-wrap bg-size rounded-4">
                            <img class="bg-img rounded-4 blur-up lazyload" data-src="{{asset('frontend/assests/images/slideshow/demo7-banner1.jpg')}}" src="{{asset('frontend/assests/images/slideshow/demo7-banner1.jpg')}}" alt="slideshow" title="" width="1148" height="710" />
                            <div class="slideshow-content slideshow-overlay middle-center">
                                <!-- <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style3">
                                        <p class="ss-small-title">Best Selling</p>
                                        <h2 class="ss-mega-title">100% Organic Foods</h2>
                                        <p class="ss-sub-title xs-hide">The more you love your health, more you eat
                                            organic. <br />No medicine can heal you better than organic food does</p>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-primary rounded-pill" href="shop-grid-view.html">Order
                                                Now</a>
                                            <a class="btn btn-primary rounded-pill" href="shop-grid-view.html">Explore
                                                Now</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slideshow-wrap bg-size rounded-4">
                            <img class="bg-img rounded-4 blur-up lazyload" data-src="{{asset('frontend/assests/images/slideshow/demo7-banner2.jpg')}}" src="{{asset('frontend/assests/images/slideshow/demo7-banner2.jpg')}}" alt="slideshow" title="" width="1148" height="710" />
                            <div class="slideshow-content slideshow-overlay middle-left">
                                <!-- <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style3">
                                        <p class="ss-small-title">Fresh Vegetables</p>
                                        <h2 class="ss-mega-title">100% Natural <br>Organic</h2>
                                        <p class="ss-sub-title">Save up to 50% off on your first order</p>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-primary rounded-pill" href="shop-grid-view.html">Shop
                                                Collection</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slideshow-wrap bg-size rounded-4">
                            <img class="bg-img rounded-4 blur-up lazyload" data-src="{{asset('frontend/assests/images/slideshow/demo7-banner3.jpg')}}" src="{{asset('frontend/assests/images/slideshow/demo7-banner3.jpg')}}" alt="slideshow" title="" width="1148" height="710" />
                            <div class="slideshow-content slideshow-overlay middle-right">
                                <!-- <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style3">
                                        <p class="ss-small-title">Best Sellers</p>
                                        <h2 class="ss-mega-title">The best Organic <br />Products Online</h2>
                                        <p class="ss-sub-title">New Launched Let's Try Our Latest Upcoming</p>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-primary rounded-pill" href="shop-grid-view.html">Shop
                                                Collection</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-4 mt-lg-0">
                <div class="collection-banner-grid">
                    <div class="row sp-row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="rounded-4 zoom-scal clr-none">
                                    <div class="img">
                                        <img class="rounded-4 w-100 blur-up lazyload" data-src="{{asset('frontend/assests/images/slideshow/demo7-small-banner1.jpg')}}" src="{{asset('frontend/assests/images/slideshow/demo7-small-banner1.jpg')}}" alt="collection" title="" width="454" height="268" />
                                    </div>
                                    <div class="details middle-left">
                                        <!-- <div class="inner">
                                            <span class="small-title mb-2 text-muted d-block alt-font">Vegetables</span>
                                            <h3 class="title">Fresh & Clean</h3>
                                            <span class="btn btn-outline-secondary rounded-pill mt-3 btn-small">Shop
                                                Now</span>
                                        </div> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="rounded-4 zoom-scal clr-none">
                                    <div class="img">
                                        <img class="rounded-4 w-100 blur-up lazyload" data-src="{{asset('frontend/assests/images/slideshow/demo7-small-banner2.jpg')}}" src="{{asset('frontend/assests/images/slideshow/demo7-small-banner2.jpg')}}" alt="collection" title="" width="454" height="268" />
                                    </div>
                                    <div class="details middle-left">
                                        <!-- <div class="inner">
                                            <span class="small-title mb-2 alt-font text-muted d-block">Popular
                                                Foods</span>
                                            <h3 class="title">Everyday Fresh &amp; <br />Clean with Our <br />Products
                                            </h3>
                                            <span class="btn btn-outline-secondary rounded-pill mt-3 btn-small">Shop
                                                Now</span>
                                        </div> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Home Slideshow-->

<div class="category-slider-main">
    <div class="container">
        <div class="row">
            <div class="category-slider">
                <div class="row category-slider-header">
                    <!-- Category Slider Heading and Link (Left side) -->
                    <div class="col-6 slider-up-left">
                        <h2>Browse Our Categories</h2>
                    </div>

                    <!-- Category Slider Navigation Arrows (Right side) -->
                    <div class="slider-buttons slider-up-right">
                        <button class="prev-button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="next-button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category Slider (Second Row) -->
        <div class="row">
            <div class="slider-content-main">
                <div id="categoryCarousel">

                    <!--First Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(54.3% 54.3% at 71.26% 74.91%, #1EF2BF 0%, #21C79F 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Groceries</h2>
                        </div>
                    </div>

                    <!--Second Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(59.04% 59.04% at 67.18% 74.95%, #F8847C 0%, #F9574C 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Computers</h2>
                        </div>
                    </div>

                    <!--Third Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(55.04% 55.04% at 74.5% 55.32%, #FFD36C 0%, #FFC12F 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Accessories</h2>
                        </div>
                    </div>

                    <!--Fourth Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(76.4% 76.4% at 72.7% 66.55%, #2F4A6B 0%, #1A324F 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Clothes</h2>
                        </div>
                    </div>

                    <!--Fifth Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(54.3% 54.3% at 71.26% 74.91%, #1EF2BF 0%, #21C79F 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Groceries</h2>
                        </div>
                    </div>

                    <!--Sixth Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(59.04% 59.04% at 67.18% 74.95%, #F8847C 0%, #F9574C 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Computers</h2>
                        </div>
                    </div>

                    <!--Seventh Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(55.04% 55.04% at 74.5% 55.32%, #FFD36C 0%, #FFC12F 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Accessories</h2>
                        </div>
                    </div>

                    <!--Eighth Slide-->
                    <div class="cs-single-slide" style="background: radial-gradient(76.4% 76.4% at 72.7% 66.55%, #2F4A6B 0%, #1A324F 100%);">
                        <div class="cs-slide-content">
                            <span>New Arrival</span>
                            <h2>Clothes</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--Products Slider-->
<section class="section product-slider pb-0">
    <div class="container container-1330">
        <div class="section-header">
            <h2>Top Offers</h2>
        </div>

        <div class="product-slider-4items gp15 arwOut5 hov-arrow circle-arrow grid-products pro-hover3">
            @if(count($product)>0)

            @foreach($product as $product)

            <div class="item col-item">

                <div class="product-box">
                    <!-- Start Product Image -->
                    <div class="product-image">
                        <!-- Start Product Image -->
                        <a href="#" class="product-img rounded-4">
                            @php
                            $photo=explode(',',$product->photo)
                            @endphp
                            <!-- Image -->
                            <img class="primary rounded-4 blur-up lazyload" data-src="{{$photo[0]}}" src="{{$photo[0]}}" alt="Product" title="Product" width="400" height="400" />
                            <!-- End Image -->
                            <!-- Hover Image -->
                            <img class="hover rounded-4 blur-up lazyload" data-src="{{$photo[1]}}" src="{{$photo[1]}}" alt="Product" title="Product" width="400" height="400" />
                            <!-- End Hover Image -->
                        </a>
                        <!-- End Product Image -->
                        <!-- Product label -->
                        <div class="product-labels round-pill"><span class="lbl pr-label4">Sale</span></div>
                        <!-- End Product label -->
                    </div>
                    <!-- End Product Image -->
                    <!-- Start Product Details -->
                    <div class="product-details text-left">
                        <!--Product Vendor-->
                        <div class="product-vendor">Vegetables</div>
                        <!--End Product Vendor-->
                        <div class="product-name-price">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="{{route('SingleProduct',$product->slug)}}">{{$product->title}}</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price m-0">
                                <span class="price">LKR.{{$product->regular_price}}.00</span>
                            </div>
                            <!-- End Product Price -->
                        </div>
                        <!-- Product Review -->
                        <div class="product-review">
                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                            <span class="caption hidden ms-1">3 Reviews</span>
                        </div>
                        <!-- End Product Review -->
                        <!--Product Button-->
                        <div class="button-bottom-action style1">
                            <div class="button-left">
                                <!--Cart Button-->

                                <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>

                                <!--End Cart Button-->
                            </div>
                            <div class="button-right">
                                <!--Quick View Button-->
                                <a href="#" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View"><i class="icon anm anm-search-plus-l"></i></span>
                                </a>
                                <!--End Quick View Button-->
                                <!--Wishlist Button-->
                                <a href="#" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i></a>
                                <!--End Wishlist Button-->
                                <!--Compare Button-->
                                <a href="#" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Compare"><i class="icon anm anm-random-r"></i></a>
                                <!--End Compare Button-->
                            </div>
                        </div>
                        <!--End Product Button-->
                    </div>
                    <!-- End product details -->
                </div>

            </div>

            @endforeach
            @endif

        </div>

        <div class="view-collection text-center mt-4 mt-md-5 d-none">
            <a href="#" class="btn btn-secondary btn-lg">View Collection</a>
        </div>
    </div>
</section>
<!--End Products Slider-->


<!--Parallax Banner-->
<div class="section parallax-banner-style1 py-0">
    <div class="hero hero-large hero-overlay bg-size">
        <img class="bg-img" src="{{asset('frontend/assests/images/parallax/demo7-parallax-banner.jpg')}}" alt="parallax-banner" width="1920" height="645" />
        <div class="hero-inner d-flex-justify-center">
            <div class="container">
                <div class="wrap-text mx-auto text-center">
                    <h1 class="hero-title">Super Deals Of The Week <br><span class="text-primary">50% OFF</span></h1>
                    <!--Countdown Timer-->
                    <div class="hero-saleTime dark saleTime-circle d-flex-justify-center text-center" data-countdown="2023/10/01"></div>
                    <!--End Countdown Timer-->
                    <p class="hero-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text</p>
                    <a href="" class="hero-btn btn btn-primary rounded-pill">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Parallax Banner-->



<!--Products With Tabs-->
<section class="section product-slider tab-slider-product">
    <div class="container container-1330">
        <div class="section-header">
            <h2>Our Best Products</h2>
        </div>

        <div class="tabs-listing">
            <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase active body-font" id="fruits-tab" data-bs-toggle="tab" data-bs-target="#fruits" type="button" role="tab" aria-controls="fruits" aria-selected="true">Electronics</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase body-font" id="vegetables-tab" data-bs-toggle="tab" data-bs-target="#vegetables" type="button" role="tab" aria-controls="vegetables" aria-selected="false">Clothes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase body-font" id="dryfruits-tab" data-bs-toggle="tab" data-bs-target="#dryfruits" type="button" role="tab" aria-controls="dryfruits" aria-selected="false">Groceries</button>
                </li>
            </ul>

            <div class="tab-content" id="productTabsContent">
                <div class="tab-pane show active" id="fruits" role="tabpanel" aria-labelledby="fruits-tab">
                    <!--Product Grid-->
                    <div class="grid-view-items">
                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">

                            @php
                            $new_products=\App\Models\Product::where(['status'=>'active'])->orderBy('id','DESC')->limit('10')->get();
                            @endphp

                            @if(count($new_products)>0)

                            @foreach($new_products as $nproduct)

                            <div class="item col-item">

                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="#" class="product-img rounded-4">
                                            @php
                                            $photo=explode(',',$nproduct->photo)
                                            @endphp
                                            <!-- Image -->
                                            <img class="primary rounded-4 blur-up lazyload" data-src="{{$photo[0]}}" src="{{$photo[0]}}" alt="Product" title="Product" width="400" height="400" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-4 blur-up lazyload" data-src="{{$photo[1]}}" src="{{$photo[1]}}" alt="Product" title="Product" width="400" height="400" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!-- Product label -->
                                        <div class="product-labels round-pill"><span class="lbl pr-label4">Sale</span></div>
                                        <!-- End Product label -->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-left">
                                        <!--Product Vendor-->
                                        <!-- <div class="product-vendor">{{$product->cat_id}}</div> -->
                                        <!--End Product Vendor-->
                                        <div class="product-name-price">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="#">{{$nproduct->title}}</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price m-0">
                                                <span class="price old-price"></span><span class="price">LKR.{{$nproduct->regular_price}}.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                        </div>
                                        <!-- Product Review -->
                                        <div class="product-review">
                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                            <span class="caption hidden ms-1">3 Reviews</span>
                                        </div>
                                        <!-- End Product Review -->
                                        <!--Product Button-->
                                        <div class="button-bottom-action style1">
                                            <div class="button-left">
                                                <!--Cart Button-->
                                                <a href="#" data-quantity="1" data-product-id="{{$product->id}}" class="add_to_cart" id="add_to_cart{{$product->id}}">Add to Cart</a>
                                                <!--End Cart Button-->
                                            </div>
                                            <div class="button-right">
                                                <!--Quick View Button-->
                                                <a href="#" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View"><i class="icon anm anm-search-plus-l"></i></span>
                                                </a>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <a href="#" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i></a>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <a href="#" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Compare"><i class="icon anm anm-random-r"></i></a>
                                                <!--End Compare Button-->
                                            </div>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="" class="btn btn-primary btn-lg rounded-pill">Load more</a>
                        </div>
                    </div>
                    <!--End Product Grid-->
                </div>

                <div class="tab-pane" id="vegetables" role="tabpanel" aria-labelledby="vegetables-tab">
                    <!--Product Grid-->
                    <div class="grid-view-items">
                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">


                            <div class="item col-item">
                                <!-- add -->
                            </div>


                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="" class="btn btn-primary btn-lg rounded-pill">Load more Products</a>
                        </div>
                    </div>
                    <!--End Product Grid-->
                </div>

                <div class="tab-pane" id="dryfruits" role="tabpanel" aria-labelledby="dryfruits-tab">
                    <!--Product Grid-->
                    <div class="grid-view-items">
                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">


                            <div class="item col-item">
                                <!-- add -->
                            </div>


                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="" class="btn btn-primary btn-lg rounded-pill">Load more Products</a>
                        </div>
                    </div>
                    <!--End Product Grid-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Products With Tabs-->





@endsection