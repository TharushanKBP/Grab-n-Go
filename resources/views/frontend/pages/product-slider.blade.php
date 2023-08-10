<link href="./assests/css/product-slider.css" rel="stylesheet">
<script src="./assests/js/product-slider.js"></script>

<div class="product-slider-main">
    <div class="container">
        <div class="row">
            <div class="product-slider">
                <div class="row product-slider-header">
                    <!-- product Slider Heading and Link (Left side) -->
                    <div class="col-6 slider-up-left">
                        <h3>Top Offers</h3>
                        <a href="#" class="product-offers">All Offers ></a>
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
                        <?php include('product-loop-item.php'); ?>
                    </div>

                    <!--Second Slide-->
                    <div class="ps-single-slide">
                        <?php include('product-loop-item.php'); ?>
                    </div>

                    <!--Third Slide-->
                    <div class="ps-single-slide">
                        <?php include('product-loop-item.php'); ?>
                    </div>

                    <!--Fourth Slide-->
                    <div class="ps-single-slide">
                        <?php include('product-loop-item.php'); ?>
                    </div>

                    <!--Fifth Slide-->
                    <div class="ps-single-slide">
                        <?php include('product-loop-item.php'); ?>
                    </div>

                    <!--Sixth Slide-->
                    <div class="ps-single-slide">
                        <?php include('product-loop-item.php'); ?>
                    </div>

                    <!--Seventh Slide-->
                    <div class="ps-single-slide">
                        <?php include('product-loop-item.php'); ?>
                    </div>

                    <!--Eighth Slide-->
                    <div class="ps-single-slide">
                        <?php include('product-loop-item.php'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>