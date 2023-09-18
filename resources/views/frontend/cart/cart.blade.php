@extends('frontend.layouts.master')

@section('content')

<!-- Body Container -->
<div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title">
                        <h1>Shopping Cart</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="#" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Shopping Cart</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <div class="row">
            <!--Cart Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
                    <i class="align-middle icon anm anm-truck icon-large me-2"></i><strong class="text-uppercase">Congratulations!</strong> You've got free shipping!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <!--End Alert msg-->

                <!--Cart Form-->
                <form action="#" method="post" class="cart-table table-bottom-brd">
                    <table class="table align-middle">
                        <thead class="cart-row cart-header small-hide position-relative">
                            <tr>
                                <th class="action">&nbsp;</th>
                                <th colspan="2" class="text-start">Product</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $total = 0 @endphp
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp

                            <tr class="cart-row cart-flex position-relative">
                                <td class="cart-delete text-center small-hide"><a href="#" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a></td>
                                <td class="cart-image cart-flex-item">
                                    <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload" data-src="{{asset('frontend/assests/images/products/product1-120x170.jpg')}}" src="{{asset('frontend/assests/images/products/product1-120x170.jpg')}}" alt="Sunset Sleep Scarf Top" width="120" height="170" /></a>
                                </td>
                                <td class="cart-meta small-text-left cart-flex-item">
                                    <div class="list-view-item-title">
                                        <a href="#">{{ $details['product_name'] }}</a>
                                    </div>
                                    <div class="cart-meta-text">
                                        Qty: {{ $details['quantity'] }}
                                    </div>
                                    <div class="cart-price d-md-none">
                                        <span class="money fw-500">LKR 99.00</span>
                                    </div>
                                </td>
                                <td class="cart-price cart-flex-item text-center small-hide">
                                    <span class="money">LKR {{ $details['price'] }}</span>
                                </td>
                                <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                    <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                            <input class="cart-qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*" />
                                            <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                </td>
                                <td class="cart-price cart-flex-item text-center small-hide">
                                    <span class="money fw-500">LKR {{ $total }}</span>
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-start"><a href="#" class="btn btn-outline-secondary btn-sm cart-continue"><i class="icon anm anm-angle-left-r me-2 d-none"></i> Continue shopping</a>
                                </td>
                                <td colspan="3" class="text-end">
                                    <button type="submit" name="clear" class="btn btn-outline-secondary btn-sm small-hide"><i class="icon anm anm-times-r me-2 d-none"></i> Clear Shoping Cart</button>
                                    <button type="submit" name="update" class="btn btn-secondary btn-sm cart-continue ms-2"><i class="icon anm anm-sync-ar me-2 d-none"></i> Update Cart</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
                <!--End Cart Form-->

                <!--Note with Shipping estimates-->
                <div class="row my-4 pt-3">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-12 cart-col">
                        <div class="cart-note mb-4">
                            <h5>Add a note to your order</h5>
                            <label for="cart-note">Notes about your order, e.g. special notes for delivery.</label>
                            <textarea name="note" id="cart-note" class="form-control cart-note-input" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-12 cart-col">
                        <div class="cart-discount">
                            <h5>Discount Codes</h5>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <div class="input-group0">
                                        <input class="form-control" type="text" name="coupon" required />
                                        <input type="submit" class="btn text-nowrap mt-3" value="Apply Coupon" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                        <div id="shipping-calculator" class="mt-4 mt-lg-0">
                            <h5>Get shipping estimates</h5>
                            <form class="estimate-form row row-cols-lg-3 row-cols-md-3 row-cols-1" action="#" method="post">
                                <div class="form-group">
                                    <label for="address_country">Province</label>
                                    <input type="text" class="province-input" id="province-input">
                                </div>
                                <div class="form-group">
                                    <label for="address_province">District</label>
                                    <input type="text" class="district-input" id="district-input">
                                </div>
                                <div class="form-group">
                                    <label for="address_zip">Postal/Zip Code</label>
                                    <input type="text" id="address_zip" name="address[zip]" />
                                </div>
                                <div class="actionRow">
                                    <input type="button" class="btn btn-secondary get-rates" value="Calculate shipping" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Note with Shipping estimates-->
            </div>
            <!--End Cart Content-->

            <!--Cart Sidebar-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                <div class="cart-info sidebar-sticky">
                    <div class="cart-order-detail cart-col">
                        <div class="row g-0 border-bottom pb-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money"></span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon Discount</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money"></span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money"></span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">Free shipping</span></span>
                        </div>
                        <div class="row g-0 pt-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b class="money">LKR {{ $total }}</b></span>
                        </div>

                        <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p>
                        <p class="cart-shipping fst-normal freeShipclaim"><i class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE</p>
                        <div class="customCheckbox cart-tearm">
                            <input type="checkbox" value="allen-vela" id="cart-tearm">
                            <label for="cart-tearm">I agree with the terms and conditions</label>
                        </div>
                        <a href="#" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">Proceed
                            To Checkout</a>
                        <div class="paymnet-img text-center"><img src="{{asset('frontend/assests/images/icons/safepayment.png')}}" alt="Payment" width="299" height="28" /></div>
                    </div>
                </div>
            </div>
            <!--End Cart Sidebar-->
        </div>
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
                                    <span class="price old-price"></span><span class="price">Rs.{{$nproduct->regular_price}}.00</span>
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

@section('scripts')
<script type="text/javascript">
    $(".cart_update").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: "{{ route('update_cart') }}",
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function(e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Do you really want to remove?")) {
            $.ajax({
                url: "{{route('remove_from_cart')}}",
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
@endsection