<link href="{{asset('frontend/assests/css/hot-offers.css')}}" rel="stylesheet">

<div class="hot-offers-main">
    <div class="container">
        <div class="row offer-title-row">
            <h3 class="offer-title">Hot Offers</h3>
        </div>
        <div class="banner-row">
            <div class="offer-banner-row">

                <div class="offer-banner" id="offer-banner-2" style="background-image: url('frontend/assests/images/offer-slider-2.png');">
                    <span class="up-heading">Up to</span>
                    <span class="discount-heading">20% off</span>
                    <span class="description">On Your Daily Needs</span>
                    <button class="banner-button">Shop Now</button>
                </div>

                <div class="offer-product-row">

                    @include('frontend.pages.offer-product-loop');
                    @include('frontend.pages.offer-product-loop');
                    @include('frontend.pages.offer-product-loop');
                    @include('frontend.pages.offer-product-loop');

                </div>

            </div>

            <div class="offer-banner-row">

                <div class="offer-banner" id="offer-banner-1" style="background-image: url('frontend/assests/images/offer-slider-1.png');">
                    <span class="up-heading">Up to</span>
                    <span class="discount-heading">20% off</span>
                    <span class="description">On Your Daily Needs</span>
                    <button class="banner-button">Shop Now</button>
                </div>

                <div class="offer-product-row">
                    <?php
                    for ($x = 1; $x <= 4; $x++) {
                        @include('frontend.pages.offer-product-loop');
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>