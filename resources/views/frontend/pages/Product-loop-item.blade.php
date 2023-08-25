<link href="{{asset('frontend/assests/css/product-loop-item.css')}}" rel="stylesheet">

<div class="loop-wrapper">
    <div class="product-image" style="background-image: url({{$product->photo}});">
        <span class="product-discount">{{$product->discount}}% off</span>
        <a href="#" class="add-to-wishlist"><i class="fa-regular fa-heart"></i></a>
    </div>

    <div class="product-details-wrapper">
        <div class="product-meta">
            <span class="product-category">Electronics</span>
            <h2 class="product-title">{{$product->title}}</h2>
            <span class="regular-price">Rs. {{$product->regular_price}}.00</span>
            <span class="member-price">Rs. {{$product->membership_price}}.00 <span class="member-price-inner">/ for members<span></span>
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