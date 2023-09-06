<link href="{{asset('frontend/assests/css/bootstrap_1.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assests/css/style_sp.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assests/css/product-loop-item.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assests/css/product-slider.css')}}" rel="stylesheet">


<script src="{{asset('frontend/assests/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assests/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assests/js/script_1.js')}}"></script>
<script src="{{asset('frontend/assests/js/product-slider.js')}}"></script>
<script src="{{asset('frontend/assests/js/productinfor.js')}}"></script>
<script src="{{asset('frontend/assests/js/bootstrap.min.js')}}"></script>



<!-- Breadcumb  -->

<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>Product Details</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('Shop')}}">Shop</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="single-product-main">

    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <span class="sp-discount">25% off</span>
                    <div class="img-showcase">
                        <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                        <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                        <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                        <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img src="{{asset('frontend/assests/images/asus-rog-laptop.png')}}" alt="shoe image">
                        </a>
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="sp-title">Dell G3 15 Gaming Laptop</h2>
                <br>
                <div class="product-price">
                    <!-- <p class = "last-price">Price: <span>$257.00</span></p> -->
                    <p class="new-price">Price: <span>$269.00</span></p>
                    <p class="new-price">For Members Price: <span>$249.00 (5%)</span></p>
                </div>

                <div class="product-detail">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Morbi eget mi risus. Etiam fermentum congue massa, at
                        rutrum purus tristique ut. Morbi eget pulvinar magna.
                        Duis diam enim, cursus vitae nisl eu, imperdiet porta urna
                        Maecenas elit mi, volutpat eu porta vel, tincidunt quis liber
                        Duis dolor enim, bibendum vitae tempus quis, rhoncus eget
                        dolor. Suspendisse euismod odio eu commodo vestib

                    </p>

                </div>

                <div class="purchase-info">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btn">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                    <!-- <button type = "button" class = "btn_1">Compare</button>  -->
                </div>
            </div>
        </div>
    </div>


    <div class="product-slider-main">


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_details_tab section_padding_100_0 clearfix">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="product-details-tab">
                            <li class="nav-item">
                                <a href="#description" class="nav-link active" data-toggle="tab" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#reviews" class="nav-link" data-toggle="tab" role="tab">Reviews <span class="text-muted">(3)</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#addi-info" class="nav-link" data-toggle="tab" role="tab">Additional Information</a>
                            </li>
                            <li class="nav-item">
                                <a href="#refund" class="nav-link" data-toggle="tab" role="tab">Return &amp; Cancellation</a>
                            </li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="description">
                                <div class="description_area">
                                    <h5>Description</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nulla similique deserunt nemo ea eum expedita, et repellat repudiandae unde quia molestias deleniti incidunt, ad cupiditate. Corporis ipsam minus officiis neque magni harum accusantium nobis labore veritatis, consectetur ab rerum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Morbi eget mi risus. Etiam fermentum congue massa, at
                                        rutrum purus tristique ut. Morbi eget pulvinar magna.
                                        Duis diam enim, cursus vitae nisl eu, imperdiet porta urna
                                        Maecenas elit mi, volutpat eu porta vel, tincidunt quis liber
                                        Duis dolor enim, bibendum vitae tempus quis, rhoncus eget
                                        dolor. Suspendisse euismod odio eu commodo vestib</p>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <div class="reviews_area">
                                    <ul>
                                        <li>
                                            <div class="single_user_review mb-15">
                                                <div class="review-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span>for Quality</span>
                                                </div>
                                                <div class="review-details">
                                                    <p>by <a href="#">Designing World</a> on <span>12 Sep 2023</span></p>
                                                </div>
                                            </div>
                                            <div class="single_user_review mb-15">
                                                <div class="review-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span>for Design</span>
                                                </div>
                                                <div class="review-details">
                                                    <p>by <a href="#">Designing World</a> on <span>12 Sep 2023</span></p>
                                                </div>
                                            </div>
                                            <div class="single_user_review">
                                                <div class="review-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span>for Value</span>
                                                </div>
                                                <div class="review-details">
                                                    <p>by <a href="#">Designing World</a> on <span>12 Sep 2023</span></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="submit_a_review_area mt-50">
                                    <h4>Submit A Review</h4>
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <span>Your Ratings</span>
                                            <div class="stars">
                                                <input type="radio" name="star" class="star-1" id="star-1">
                                                <label class="star-1" for="star-1">1</label>
                                                <input type="radio" name="star" class="star-2" id="star-2">
                                                <label class="star-2" for="star-2">2</label>
                                                <input type="radio" name="star" class="star-3" id="star-3">
                                                <label class="star-3" for="star-3">3</label>
                                                <input type="radio" name="star" class="star-4" id="star-4">
                                                <label class="star-4" for="star-4">4</label>
                                                <input type="radio" name="star" class="star-5" id="star-5">
                                                <label class="star-5" for="star-5">5</label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nickname</label>
                                            <input type="email" class="form-control_1" id="name" placeholder="Nazrul">
                                        </div>
                                        <div class="form-group">
                                            <label for="options">Reason for your rating</label>
                                            <select class="form-control_1 small right py-0 w-100" id="options">
                                                <option>Quality</option>
                                                <option>Value</option>
                                                <option>Design</option>
                                                <option>Price</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="comments">Comments</label>
                                            <textarea class="form-control_1" id="comments" rows="5" data-max-length="150"></textarea>
                                        </div>
                                        <button type="submit" class="btn_1 btn_1-primary">Submit Review</button>
                                    </form>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="addi-info">
                                <div class="additional_info_area">
                                    <h5>Additional Info</h5>
                                    <p>What should I do if I receive a damaged parcel?
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit impedit similique qui, itaque delectus labore.</span>
                                    </p>
                                    <p>I have received my order but the wrong item was delivered to me.
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quam voluptatum beatae harum tempore, ab?</span>
                                    </p>
                                    <p>Product Receipt and Acceptance Confirmation Process
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus, temporibus soluta impedit minus rerum?</span>
                                    </p>
                                    <p class="mb-0">How do I cancel my order?
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eius eum, minima!</span>
                                    </p>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="refund">
                                <div class="refund_area">
                                    <h6>Return Policy</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, eos eius laboriosam voluptates totam mollitia repellat rem voluptate obcaecati quas fuga similique impedit cupiditate vitae repudiandae. Rem, tenetur placeat!</p>

                                    <h6>Return Criteria</h6>
                                    <ul class="mb-30 ml-30">
                                        <li><i class="icofont-check"></i> Package broken</li>
                                        <li><i class="icofont-check"></i> Physical damage in the product</li>
                                        <li><i class="icofont-check"></i> Software/hardware problem</li>
                                        <li><i class="icofont-check"></i> Accessories missing or damaged etc.</li>
                                    </ul>

                                    <h6>Q. What should I do if I receive a damaged parcel?</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit impedit similique qui, itaque delectus labore.</p>

                                    <h6>Q. I have received my order but the wrong item was delivered to me.</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quam voluptatum beatae harum tempore, ab?</p>

                                    <h6>Q. Product Receipt and Acceptance Confirmation Process</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus, temporibus soluta impedit minus rerum?</p>

                                    <h6>Q. How do I cancel my order?</h6>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eius eum, minima!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-slider-main">
        <div class="container">
            <div class="row">
                <div class="product-slider">
                    <div class="row product-slider-header">
                        <!-- product Slider Heading and Link (Left side) -->
                        <div class="col-6 slider-up-left">
                            <h3>Related Products</h3>
                        </div>

                        <!-- product Slider Navigation Arrows (Right side) -->
                        <div class="slider-buttons slider-up-right">
                            <button class="prev-button-product" data-bs-target="#productCarousel" data-bs-slide="prev">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="next-button-product" data-bs-target="#productCarousel" data-bs-slide="next">
                                <i class="fas fa-chevron-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- product Slider (Second Row) -->
            <div class="row">
                <div class="slider-content-main">
                    <div id="productCarousel">

                        <!--First Slide-->
                        <div class="ps-single-slide">
                            <div class="loop-wrapper">
                                <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                    <span class="product-discount">25% off</span>
                                    <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                </div>

                                <div class="product-details-wrapper">
                                    <div class="product-meta">
                                        <span class="product-category">Electronics</span>
                                        <h2 class="product-title">Asus Rog Laptop</h2>
                                        <span class="regular-price">Rs. 200,000.00</span>
                                        <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                    </div>
                                    <div class="addtocart-wrapper">
                                        <div class="quantity-gruop">
                                            <input type="number" class="item-quantity" value="1">
                                            <span class="total-price">Total : Rs. 190,000.00</span>
                                        </div>
                                        <button class="add-to-cart-button">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Second Slide-->
                        <div class="ps-single-slide">
                            <div class="loop-wrapper">
                                <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                    <span class="product-discount">25% off</span>
                                    <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                </div>

                                <div class="product-details-wrapper">
                                    <div class="product-meta">
                                        <span class="product-category">Electronics</span>
                                        <h2 class="product-title">Asus Rog Laptop</h2>
                                        <span class="regular-price">Rs. 200,000.00</span>
                                        <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                    </div>
                                    <div class="addtocart-wrapper">
                                        <div class="quantity-gruop">
                                            <input type="number" class="item-quantity" value="1">
                                            <span class="total-price">Total : Rs. 190,000.00</span>
                                        </div>
                                        <button class="add-to-cart-button">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Third Slide-->
                        <div class="ps-single-slide">
                            <div class="ps-single-slide">
                                <div class="loop-wrapper">
                                    <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                        <span class="product-discount">25% off</span>
                                        <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                    </div>

                                    <div class="product-details-wrapper">
                                        <div class="product-meta">
                                            <span class="product-category">Electronics</span>
                                            <h2 class="product-title">Asus Rog Laptop</h2>
                                            <span class="regular-price">Rs. 200,000.00</span>
                                            <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                        </div>
                                        <div class="addtocart-wrapper">
                                            <div class="quantity-gruop">
                                                <input type="number" class="item-quantity" value="1">
                                                <span class="total-price">Total : Rs. 190,000.00</span>
                                            </div>
                                            <button class="add-to-cart-button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Fourth Slide-->
                        <div class="ps-single-slide">
                            <div class="ps-single-slide">
                                <div class="loop-wrapper">
                                    <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                        <span class="product-discount">25% off</span>
                                        <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                    </div>

                                    <div class="product-details-wrapper">
                                        <div class="product-meta">
                                            <span class="product-category">Electronics</span>
                                            <h2 class="product-title">Asus Rog Laptop</h2>
                                            <span class="regular-price">Rs. 200,000.00</span>
                                            <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                        </div>
                                        <div class="addtocart-wrapper">
                                            <div class="quantity-gruop">
                                                <input type="number" class="item-quantity" value="1">
                                                <span class="total-price">Total : Rs. 190,000.00</span>
                                            </div>
                                            <button class="add-to-cart-button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Fifth Slide-->
                        <div class="ps-single-slide">
                            <div class="ps-single-slide">
                                <div class="loop-wrapper">
                                    <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                        <span class="product-discount">25% off</span>
                                        <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                    </div>

                                    <div class="product-details-wrapper">
                                        <div class="product-meta">
                                            <span class="product-category">Electronics</span>
                                            <h2 class="product-title">Asus Rog Laptop</h2>
                                            <span class="regular-price">Rs. 200,000.00</span>
                                            <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                        </div>
                                        <div class="addtocart-wrapper">
                                            <div class="quantity-gruop">
                                                <input type="number" class="item-quantity" value="1">
                                                <span class="total-price">Total : Rs. 190,000.00</span>
                                            </div>
                                            <button class="add-to-cart-button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Sixth Slide-->
                        <div class="ps-single-slide">
                            <div class="ps-single-slide">
                                <div class="loop-wrapper">
                                    <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                        <span class="product-discount">25% off</span>
                                        <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                    </div>

                                    <div class="product-details-wrapper">
                                        <div class="product-meta">
                                            <span class="product-category">Electronics</span>
                                            <h2 class="product-title">Asus Rog Laptop</h2>
                                            <span class="regular-price">Rs. 200,000.00</span>
                                            <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                        </div>
                                        <div class="addtocart-wrapper">
                                            <div class="quantity-gruop">
                                                <input type="number" class="item-quantity" value="1">
                                                <span class="total-price">Total : Rs. 190,000.00</span>
                                            </div>
                                            <button class="add-to-cart-button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Seventh Slide-->
                        <div class="ps-single-slide">
                            <div class="ps-single-slide">
                                <div class="loop-wrapper">
                                    <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                        <span class="product-discount">25% off</span>
                                        <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                    </div>

                                    <div class="product-details-wrapper">
                                        <div class="product-meta">
                                            <span class="product-category">Electronics</span>
                                            <h2 class="product-title">Asus Rog Laptop</h2>
                                            <span class="regular-price">Rs. 200,000.00</span>
                                            <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                        </div>
                                        <div class="addtocart-wrapper">
                                            <div class="quantity-gruop">
                                                <input type="number" class="item-quantity" value="1">
                                                <span class="total-price">Total : Rs. 190,000.00</span>
                                            </div>
                                            <button class="add-to-cart-button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Eighth Slide-->
                        <div class="ps-single-slide">
                            <div class="ps-single-slide">
                                <div class="loop-wrapper">
                                    <div class="product-image" style="background-image: url('frontend/assests/images/asus-rog-laptop.png');">
                                        <span class="product-discount">25% off</span>
                                        <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
                                    </div>

                                    <div class="product-details-wrapper">
                                        <div class="product-meta">
                                            <span class="product-category">Electronics</span>
                                            <h2 class="product-title">Asus Rog Laptop</h2>
                                            <span class="regular-price">Rs. 200,000.00</span>
                                            <span class="member-price">Rs. 190,000.00 <span class="member-price-inner">/ for members<span></span>
                                        </div>
                                        <div class="addtocart-wrapper">
                                            <div class="quantity-gruop">
                                                <input type="number" class="item-quantity" value="1">
                                                <span class="total-price">Total : Rs. 190,000.00</span>
                                            </div>
                                            <button class="add-to-cart-button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</div>