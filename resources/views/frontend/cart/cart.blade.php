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
                            <tr class="cart-row cart-flex position-relative">
                                <td class="cart-delete text-center small-hide"><a href="#" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a></td>
                                <td class="cart-image cart-flex-item">
                                    <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload" data-src="{{asset('frontend/assests/images/products/product1-120x170.jpg')}}" src="{{asset('frontend/assests/images/products/product1-120x170.jpg')}}" alt="Sunset Sleep Scarf Top" width="120" height="170" /></a>
                                </td>
                                <td class="cart-meta small-text-left cart-flex-item">
                                    <div class="list-view-item-title">
                                        <a href="#">Oxford Cuban Shirt</a>
                                    </div>
                                    <div class="cart-meta-text">
                                        Color: Black<br>Size: Small<br>Qty: 2
                                    </div>
                                    <div class="cart-price d-md-none">
                                        <span class="money fw-500">LKR 99.00</span>
                                    </div>
                                </td>
                                <td class="cart-price cart-flex-item text-center small-hide">
                                    <span class="money">LKR 99.00</span>
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
                                    <span class="money fw-500">LKR 198.00</span>
                                </td>
                            </tr>
                            <tr class="cart-row cart-flex position-relative">
                                <td class="cart-delete text-center small-hide"><a href="#" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a></td>
                                <td class="cart-image cart-flex-item">
                                    <a href="#"><img class="cart-image rounded-0 blur-up lazyload" data-src="{{asset('frontend/assests/images/products/product2-120x170.jpg')}}" src="{{asset('frontend/assests/images/products/product2-120x170.jpg')}}" alt="Sunset Sleep Scarf Top" width="120" height="170" /></a>
                                </td>
                                <td class="cart-meta small-text-left cart-flex-item">
                                    <div class="list-view-item-title">
                                        <a href="#">Cuff Beanie Cap</a>
                                    </div>
                                    <div class="cart-meta-text">
                                        Color: Black<br>Size: Small<br>Qty: 1
                                    </div>
                                    <div class="cart-price d-md-none">
                                        <span class="money fw-500">LKR 128.00</span>
                                    </div>
                                </td>
                                <td class="cart-price cart-flex-item text-center small-hide">
                                    <span class="money">LKR 128.00</span>
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
                                    <span class="money fw-500">LKR 128.00</span>
                                </td>
                            </tr>
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
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">LKR 226.00</span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon Discount</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">-LKR 25.00</span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">LKR 10.00</span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">Free shipping</span></span>
                        </div>
                        <div class="row g-0 pt-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b class="money">LKR 311.00</b></span>
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

                <?php
                for ($i = 0; $i < 8; $i++) {
                    echo '<div class="item col-item">';

                    @include('frontend.cart.product-loop-item');

                    echo '</div>';
                }
                ?>

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