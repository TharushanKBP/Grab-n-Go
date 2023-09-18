@extends('frontend.layouts.master')

@section('content')

<!-- Body Container -->
<div id="page-content">
  <!--Page Header-->
  <div class="page-header text-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <!--Breadcrumbs-->
          <div class="breadcrumbs">
            <a href="" title="Back to the home page">Home</a><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Single Product</span>
          </div>
          <!--End Breadcrumbs-->
        </div>
      </div>
    </div>
  </div>
  <!--End Page Header-->

  <!--Main Content-->
  <div class="container">
    <!--Product Content-->
    <div class="product-single">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
          <div class="product-sticky-style">
            <!-- Product Horizontal -->
            <div class="product-details-img product-thumb-left-style d-flex justify-content-center">
              <!-- Product Thumb -->
              <div class="product-thumb thumb-left">

                <div id="gallery" class="product-thumb-vertical h-100">
                  @php
                  $photo=explode(',',$product->photo)
                  @endphp
                  @foreach($photo as $key=>$photo)
                  <a data-image="" data-zoom-image="" class="slick-slide slick-cloned active">
                    <img class="blur-up lazyload rounded-0" data-src="" src="{{$photo}}" alt="product" width="625" height="808" />
                  </a>
                  @endforeach
                </div>

              </div>
              <!-- End Product Thumb -->

              <!-- Product Main -->
              <div class="zoompro-wrap product-zoom-right rounded-0">
                <!-- Product Image -->
                @php
                $photo=explode(',',$product->photo)
                @endphp
                @foreach($photo as $key=>$photo)
                <div class="carousel-item {{$key==0 ? 'active' : ''}}">
                  <a class="gallery_img" href="{{$photo}}" title="{{$product->title}}">
                    <img class="d-block w-100" src="{{$photo}}" alt="{{$product->title}}">
                  </a>
                </div>
                @endforeach
                <!-- End Product Image -->
              </div>
              <!-- End Product Main -->
            </div>
            <!-- End Product Horizontal -->

            <!-- Social Sharing -->
            <div class="social-sharing d-flex-center justify-content-center mt-3 mt-md-4 lh-lg">
              <span class="sharing-lbl fw-600">Share :</span>
              <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title">Facebook</span></a>
              <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"><i class="icon anm anm-twitter"></i><span class="share-title">Tweet</span></a>
              <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"><i class="icon anm anm-pinterest-p"></i>
                <span class="share-title">Pin it</span></a>
              <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"><i class="icon anm anm-linkedin-in"></i><span class="share-title">Linkedin</span></a>
              <a href="#" class="d-flex-center btn btn-link btn--share share-email"><i class="icon anm anm-envelope-l"></i><span class="share-title">Email</span></a>
            </div>
            <!-- End Social Sharing -->
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
          <!-- Product Details -->
          <div class="product-single-meta">
            <div class="product-main-subtitle mb-3 d-flex-center">
              <div class="product-labels position-static d-inline-flex">
                <span class="lbl pr-label1 mb-0">Best seller</span>
              </div>
              <span class="label-text ms-2 d-none">in Fashion</span>
            </div>
            <h2 class="product-main-title">{{$product->title}}</h2>
            <!-- Product Reviews -->
            <div class="product-review d-flex-center mb-3">
              <div class="reviewStar d-flex-center">
                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span class="caption ms-2">24 Reviews</span>
              </div>
              <a class="reviewLink d-flex-center" href="#reviews">Write a Review</a>
            </div>
            <!-- End Product Reviews -->
            <!-- Product Price -->
            <div class="product-price d-flex-center my-3">
              <span class="price">LKR {{$product->regular_price}}.00</span>
            </div>
            <!-- End Product Price -->
            <!-- Sort Description -->
            <div class="sort-description mb-3">
              {!! html_entity_decode($product->description)!!}
            </div>
            <!-- End Sort Description -->
            <!--Product Availability-->
            <div class="product-availability p-0 m-0 mb-3 position-static col-lg-9">
              <div class="lh-1 d-flex justify-content-between">
                <div class="text-sold fw-600">
                  Currently, <strong class="text-link">16</strong> items are in
                  stock!
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!--End Product Availability-->
            <!-- Product Sold -->
            <div class="orderMsg d-flex-center mb-3" data-user="23" data-time="24">
              <i class="icon anm anm-medapps"></i>
              <p class="m-0">
                <strong class="items">8</strong> Sold in last
                <strong class="time">14</strong> hours
              </p>
              <p id="quantity_message" class="ms-2 ps-2 border-start">
                Hurry up! only <span class="items fw-bold">4</span> products
                left in stock!
              </p>
            </div>
            <!-- End Product Sold -->
          </div>
          <!-- End Product Details -->

          <!-- Product Form -->
          <form method="post" action="#" class="product-form product-form-border hidedropdown">
            <!-- Swatches -->
            <div class="product-swatches-option">
              <!-- Swatches Color -->
              <!-- <div class="product-item swatches-image w-100 mb-4 swatch-0 option1" data-option-index="0">
                <label class="label d-flex align-items-center">Color:<span class="slVariant ms-1 fw-bold">Blue</span></label>
                <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                  <li class="swatch x-large available active blue">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span>
                  </li>
                  <li class="swatch x-large available black">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span>
                  </li>
                  <li class="swatch x-large available purple">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Purple"></span>
                  </li>
                  <li class="swatch x-large available green">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span>
                  </li>
                  <li class="swatch x-large soldout yellow">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span>
                  </li>
                </ul>
              </div> -->
              <!-- End Swatches Color -->
              <!-- Swatches Size -->
              <!-- <div class="product-item swatches-size w-100 mb-4 swatch-1 option2" data-option-index="1">
                <label class="label d-flex align-items-center">Size:<span class="slVariant ms-1 fw-bold">S</span>
                  <a href="#sizechart-modal" class="text-link sizelink text-muted size-chart-modal" data-bs-toggle="modal" data-bs-target="#sizechart_modal">Size Guide</a></label>
                <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                  <li class="swatch x-large soldout">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span>
                  </li>
                  <li class="swatch x-large available active">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span>
                  </li>
                  <li class="swatch x-large available">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span>
                  </li>
                  <li class="swatch x-large available">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span>
                  </li>
                  <li class="swatch x-large available">
                    <span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span>
                  </li>
                </ul>
              </div> -->
              <!-- End Swatches Size -->
            </div>
            <!-- End Swatches -->

            <!-- Product Action -->
            <div class="product-action w-100 d-flex-wrap my-3 my-md-4">
              <!-- Product Quantity -->
              <div class="product-form-quantity d-flex-center">
                <div class="qtyField">
                  <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                  <input type="text" name="quantity" value="1" class="product-form-input qty" />
                  <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                </div>
              </div>
              <!-- End Product Quantity -->
              <!-- Product Add -->
              <div class="product-form-submit addcart fl-1 ms-3">
                <button type="submit" name="add" class="btn btn-secondary product-form-cart-submit">
                  <span>Add to cart</span>
                </button>
              </div>
              <!-- Product Add -->
              <!-- Product Buy -->
              <div class="product-form-submit buyit fl-1 ms-3">
                <button type="submit" class="btn btn-primary proceed-to-checkout">
                  <span>Buy it now</span>
                </button>
              </div>
              <!-- End Product Buy -->
            </div>
            <!-- End Product Action -->

            <!-- Product Info link -->
            <p class="infolinks d-flex-center justify-content-between">
              <a class="text-link wishlist" href=""><i class="icon anm anm-heart-l me-2"></i>
                <span>Add to Wishlist</span></a>
              <a class="text-link compare" href="compare-style1.html"><i class="icon anm anm-sync-ar me-2"></i>
                <span>Add to Compare</span></a>
              <a href="#shippingInfo-modal" class="text-link shippingInfo" data-bs-toggle="modal" data-bs-target="#shippingInfo_modal"><i class="icon anm anm-paper-l-plane me-2"></i>
                <span>Delivery &amp; Returns</span></a>
              <a href="#productInquiry-modal" class="text-link emaillink me-0" data-bs-toggle="modal" data-bs-target="#productInquiry_modal"><i class="icon anm anm-question-cil me-2"></i>
                <span>Enquiry</span></a>
            </p>
            <!-- End Product Info link -->
          </form>
          <!-- End Product Form -->

          <!-- Product Info -->
          <div class="product-info">
            <div class="freeShipMsg featureText mb-2">
              <i class="icon anm anm-shield-check-r"></i><b class="freeShip">1</b> Year Brand Warranty
            </div>
            <div class="freeShipMsg featureText mb-2">
              <i class="icon anm anm-sync-ar"></i><b class="freeShip">30</b> Day
              Return Policy
            </div>
            <div class="freeShipMsg featureText mb-3">
              <i class="icon anm anm-podcast-r"></i>Cash on Delivery available
            </div>
            <p class="product-stock d-flex">
              Availability:
              <span class="pro-stockLbl ps-0">
                <span class="d-flex-center stockLbl instock text-uppercase">In stock</span>
              </span>
            </p>
            <p class="product-vendor">
              Vendor:<span class="text"><a href="#">Panta</a></span>
            </p>
            <p class="product-type">
              Product Type:<span class="text">Tops</span>
            </p>
            <p class="product-sku">SKU:<span class="text">RF104</span></p>
          </div>
          <!-- End Product Info -->

          <!-- Product Info -->
          <div class="trustseal-img mt-3 mt-md-4">
            <img src="{{asset('frontend/assests/images/icons/powerby-cards.jpg')}}" alt="powerby cards" width="470" />
          </div>
          <!-- End Product Info -->
        </div>
      </div>
    </div>
    <!--Product Content-->

    <!--Product Tabs-->
    <div class="tabs-listing section pb-0">
      <ul class="product-tabs list-unstyled d-flex-wrap border-bottom d-none d-md-flex">
        <li rel="description" class="active">
          <a class="tablink">Description</a>
        </li>
        <li rel="additionalInformation">
          <a class="tablink">Additional Information</a>
        </li>
        <li rel="size-chart"><a class="tablink">Size Chart</a></li>
        <li rel="shipping-return">
          <a class="tablink">Shipping &amp; Return</a>
        </li>
        <li rel="reviews"><a class="tablink">Reviews</a></li>
      </ul>

      <div class="tab-container">
        <!--Description-->
        <h3 class="tabs-ac-style d-md-none active" rel="description">
          Description
        </h3>
        <div id="description" class="tab-content">
          <div class="product-description">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in some
                  form, by injected humour, or randomised words which don't look
                  even slightly believable.
                </p>
                <h4 class="mb-3">Features</h4>
                <ul class="checkmark-info">
                  <li>
                    High quality fabric, very comfortable to touch and wear.
                  </li>
                  <li>
                    This cardigan sweater is cute for no reason,perfect for
                    travel and casual.
                  </li>
                  <li>
                    It can tie in front-is forgiving to you belly or tie behind.
                  </li>
                  <li>Light weight and perfect for layering.</li>
                </ul>
                <p>
                  The standard chunk of Lorem Ipsum used since the 1500s is
                  reproduced below for those interested. Sections 1.10.32 and
                  1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are
                  also reproduced in their exact original form, accompanied by
                  English versions from the 1914 translation by H. Rackham.
                </p>
              </div>

              <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="video-popup-content position-relative">
                  <a href="#productVideo-modal" class="popup-video video-button d-flex align-items-center justify-content-center rounded-0" data-bs-toggle="modal" data-bs-target="#productVideo_modal" title="View Video">
                    <img class="rounded-0 w-100 d-block blur-up lazyload" data-src="{{asset('frontend/assests/images/content/product-detail-img-1.jpg')}}" src="{{asset('frontend/assests/images/content/product-detail-img-1.jpg')}}" alt="image" width="550" height="660" />
                    <i class="icon anm anm-play-cir"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End Description-->

        <!--Additional Information-->
        <h3 class="tabs-ac-style d-md-none" rel="additionalInformation">
          Additional Information
        </h3>
        <div id="additionalInformation" class="tab-content">
          <div class="product-description">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4 mb-md-0">
                <div class="table-responsive">
                  <table class="table table-bordered align-middle table-part mb-0">
                    <tr>
                      <th>Color</th>
                      <td>Black, White, Blue, Red, Gray</td>
                    </tr>
                    <tr>
                      <th>Product Dimensions</th>
                      <td>15 x 15 x 3 cm; 250 Grams</td>
                    </tr>
                    <tr>
                      <th>Date First Available</th>
                      <td>14 May 2023</td>
                    </tr>
                    <tr>
                      <th>Manufacturer‏</th>
                      <td>Fashion and Retail Limited</td>
                    </tr>
                    <tr>
                      <th>Department</th>
                      <td>Men Shirt</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End Additional Information-->

        <!--Size Chart-->
        <h3 class="tabs-ac-style d-md-none" rel="size-chart">Size Chart</h3>
        <div id="size-chart" class="tab-content">
          <h4 class="mb-2">Ready to Wear Clothing</h4>
          <p class="mb-4">
            This is a standardised guide to give you an idea of what size you
            will need, however some brands may vary from these conversions.
          </p>
          <div class="size-chart-tbl table-responsive px-1">
            <table class="table-bordered align-middle mb-0">
              <thead>
                <tr>
                  <th>Size</th>
                  <th>XXS - XS</th>
                  <th>XS - S</th>
                  <th>S - M</th>
                  <th>M - L</th>
                  <th>L - XL</th>
                  <th>XL - XXL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>UK</th>
                  <td>6</td>
                  <td>8</td>
                  <td>10</td>
                  <td>12</td>
                  <td>14</td>
                  <td>16</td>
                </tr>
                <tr>
                  <th>US</th>
                  <td>2</td>
                  <td>4</td>
                  <td>6</td>
                  <td>8</td>
                  <td>10</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th>Italy (IT)</th>
                  <td>38</td>
                  <td>40</td>
                  <td>42</td>
                  <td>44</td>
                  <td>46</td>
                  <td>48</td>
                </tr>
                <tr>
                  <th>France (FR/EU)</th>
                  <td>34</td>
                  <td>36</td>
                  <td>38</td>
                  <td>40</td>
                  <td>42</td>
                  <td>44</td>
                </tr>
                <tr>
                  <th>Denmark</th>
                  <td>32</td>
                  <td>34</td>
                  <td>36</td>
                  <td>38</td>
                  <td>40</td>
                  <td>42</td>
                </tr>
                <tr>
                  <th>Russia</th>
                  <td>40</td>
                  <td>42</td>
                  <td>44</td>
                  <td>46</td>
                  <td>48</td>
                  <td>50</td>
                </tr>
                <tr>
                  <th>Germany</th>
                  <td>32</td>
                  <td>34</td>
                  <td>36</td>
                  <td>38</td>
                  <td>40</td>
                  <td>42</td>
                </tr>
                <tr>
                  <th>Japan</th>
                  <td>5</td>
                  <td>7</td>
                  <td>9</td>
                  <td>11</td>
                  <td>13</td>
                  <td>15</td>
                </tr>
                <tr>
                  <th>Australia</th>
                  <td>6</td>
                  <td>8</td>
                  <td>10</td>
                  <td>12</td>
                  <td>14</td>
                  <td>16</td>
                </tr>
                <tr>
                  <th>Korea</th>
                  <td>33</td>
                  <td>44</td>
                  <td>55</td>
                  <td>66</td>
                  <td>77</td>
                  <td>88</td>
                </tr>
                <tr>
                  <th>China</th>
                  <td>160/84</td>
                  <td>165/86</td>
                  <td>170/88</td>
                  <td>175/90</td>
                  <td>180/92</td>
                  <td>185/94</td>
                </tr>
                <tr>
                  <th>Jeans</th>
                  <td>24-25</td>
                  <td>26-27</td>
                  <td>27-28</td>
                  <td>29-30</td>
                  <td>31-32</td>
                  <td>32-33</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--End Size Chart-->

        <!--Shipping &amp; Return-->
        <h3 class="tabs-ac-style d-md-none" rel="shipping-return">
          Shipping &amp; Return
        </h3>
        <div id="shipping-return" class="tab-content">
          <h4 class="pb-1">Shipping &amp; Return</h4>
          <ul class="checkmark-info">
            <li>Dispatch: Within 24 Hours</li>
            <li>1 Year Brand Warranty</li>
            <li>
              Free shipping across all products on a minimum purchase of LKR 50.
            </li>
            <li>International delivery time - 7-10 business days</li>
            <li>Cash on delivery might be available</li>
            <li>Easy 30 days returns and exchanges</li>
          </ul>
          <h4 class="pt-1">Free and Easy Returns</h4>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.
          </p>
          <h4 class="pt-1">Special Financing</h4>
          <p>
            There are many variations of passages of Lorem Ipsum available, but
            the majority have suffered alteration in some form, by injected
            humour, or randomised words which don't look even slightly
            believable. If you are going to use a passage.
          </p>
        </div>
        <!--End Shipping &amp; Return-->

        <!--Review-->
        <h3 class="tabs-ac-style d-md-none" rel="reviews">Review</h3>
        <div id="reviews" class="tab-content">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
              <div class="ratings-main">
                <div class="avg-rating d-flex-center mb-3">
                  <h4 class="avg-mark">4.5</h4>
                  <div class="avg-content ms-3">
                    <p class="text-rating">Average Rating</p>
                    <div class="ratings-full product-review">
                      <a class="reviewLink d-flex-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span class="caption ms-2">24 Ratings</span></a>
                    </div>
                  </div>
                </div>

                <div class="ratings-list">
                  <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0">
                      <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></a>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%"></div>
                    </div>
                    <div class="progress-value">99%</div>
                  </div>
                  <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0">
                      <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></a>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                    <div class="progress-value">75%</div>
                  </div>
                  <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0">
                      <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                    <div class="progress-value">50%</div>
                  </div>
                  <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0">
                      <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                    <div class="progress-value">25%</div>
                  </div>
                  <div class="ratings-container d-flex align-items-center mt-1">
                    <div class="ratings-full product-review m-0">
                      <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%"></div>
                    </div>
                    <div class="progress-value">05%</div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="spr-reviews">
                <h3 class="spr-form-title">Customer Reviews</h3>
                <div class="review-inner">
                  <div class="spr-review d-flex w-100">
                    <div class="spr-review-profile flex-shrink-0">
                      <img class="blur-up lazyload" data-src="{{asset('frontend/assests/images/users/testimonial2.jpg')}}" src="{{asset('frontend/assests/images/users/testimonial2.jpg')}}" alt="" width="200" height="200" />
                    </div>
                    <div class="spr-review-content flex-grow-1">
                      <div class="d-flex justify-content-between flex-column mb-2">
                        <div class="title-review d-flex align-items-center justify-content-between">
                          <h5 class="spr-review-header-title text-transform-none mb-0">
                            Eleanor Pena
                          </h5>
                          <span class="product-review spr-starratings m-0"><span class="reviewLink"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i></span></span>
                        </div>
                      </div>
                      <b class="head-font">Good and High quality</b>
                      <p class="spr-review-body">
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour.
                      </p>
                    </div>
                  </div>
                  <div class="spr-review d-flex w-100">
                    <div class="spr-review-profile flex-shrink-0">
                      <img class="blur-up lazyload" data-src="{{asset('frontend/assests/images/users/testimonial1.jpg')}}" src="{{asset('frontend/assests/images/users/testimonial1.jpg')}}" alt="" width="200" height="200" />
                    </div>
                    <div class="spr-review-content flex-grow-1">
                      <div class="d-flex justify-content-between flex-column mb-2">
                        <div class="title-review d-flex align-items-center justify-content-between">
                          <h5 class="spr-review-header-title text-transform-none mb-0">
                            Courtney Henry
                          </h5>
                          <span class="product-review spr-starratings m-0"><span class="reviewLink"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></span></span>
                        </div>
                      </div>
                      <b class="head-font">Feature Availability</b>
                      <p class="spr-review-body">
                        The standard chunk of Lorem Ipsum used since the 1500s
                        is reproduced below for those interested. Sections
                        1.10.32 and 1.10.33
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
              <form method="post" action="#" class="product-review-form new-review-form">
                <h3 class="spr-form-title">Write a Review</h3>
                <p>
                  Your email address will not be published. Required fields are
                  marked *
                </p>
                <fieldset class="row spr-form-contact">
                  <div class="col-sm-6 spr-form-contact-name form-group">
                    <label class="spr-form-label" for="nickname">Name <span class="required">*</span></label>
                    <input class="spr-form-input spr-form-input-text" id="nickname" type="text" name="name" required />
                  </div>
                  <div class="col-sm-6 spr-form-contact-email form-group">
                    <label class="spr-form-label" for="email">Email <span class="required">*</span></label>
                    <input class="spr-form-input spr-form-input-email" id="email" type="email" name="email" required />
                  </div>
                  <div class="col-sm-6 spr-form-review-title form-group">
                    <label class="spr-form-label" for="review">Review Title
                    </label>
                    <input class="spr-form-input spr-form-input-text" id="review" type="text" name="review" />
                  </div>
                  <div class="col-sm-6 spr-form-review-rating form-group">
                    <label class="spr-form-label">Rating</label>
                    <div class="product-review pt-1">
                      <div class="review-rating">
                        <a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 spr-form-review-body form-group">
                    <label class="spr-form-label" for="message">Body of Review
                      <span class="spr-form-review-body-charactersremaining">(1500) characters remaining</span></label>
                    <div class="spr-form-input">
                      <textarea class="spr-form-input spr-form-input-textarea" id="message" name="message" rows="3"></textarea>
                    </div>
                  </div>
                </fieldset>
                <div class="spr-form-actions clearfix">
                  <input type="submit" class="btn btn-primary spr-button spr-button-primary" value="Submit Review" />
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--End Review-->
      </div>
    </div>
    <!--End Product Tabs-->
  </div>
  <!--End Main Content-->

  <!--Related Products-->
  <section class="section product-slider pb-0">
    <div class="container container-1330">
      <div class="section-header">
        <h2>You May Also Like</h2>
      </div>

      <div class="product-slider-4items gp15 arwOut5 hov-arrow circle-arrow grid-products pro-hover3">

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
                  <a href="#" data-quantity="1" data-product-id="{{$nproduct->id}}" class="add_to_cart" id="add_to_cart{{$nproduct->id}}">Add to Cart</a>
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

          @endforeach
          @endif

        </div>

        <div class="view-collection text-center mt-4 mt-md-5 d-none">
          <a href="#" class="btn btn-secondary btn-lg">View Collection</a>
        </div>
      </div>
  </section>
  <!--End Related Products-->
</div>
<!-- End Body Container -->

@endsection