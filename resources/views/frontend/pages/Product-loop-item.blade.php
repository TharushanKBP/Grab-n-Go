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
        <!-- <div class="product-vendor">{{$product->cat_id}}</div> -->
        <!--End Product Vendor-->
        <div class="product-name-price">
            <!-- Product Name -->
            <div class="product-name">
                <a href="#">{{$product->title}}</a>
            </div>
            <!-- End Product Name -->
            <!-- Product Price -->
            <div class="product-price m-0">
                <span class="price old-price"></span><span class="price">Rs.{{$product->regular_price}}.00</span>
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



