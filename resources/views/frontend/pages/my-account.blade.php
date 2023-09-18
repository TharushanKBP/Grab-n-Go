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
                        <h1>My Account</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="" title="Back to the home page">Home</a><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>My Account</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4 mb-lg-0">
                <!-- Dashboard sidebar -->
                <div class="dashboard-sidebar bg-block">
                    <div class="profile-top text-center mb-4 px-3">
                        <div class="profile-image mb-3">
                            <img class="rounded-circle blur-up lazyload" data-src="assests/images/users/user-img3.jpg" src="assests/images/users/user-img3.jpg" alt="user" width="130" />
                        </div>
                        <div class="profile-detail">
                            <h3 class="mb-1">Jecno Janesen</h3>
                            <p class="text-muted">info@example.com</p>
                        </div>
                    </div>
                    <div class="dashboard-tab">
                        <ul class="nav nav-tabs flex-lg-column border-bottom-0" id="top-tab" role="tablist">
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#info" class="nav-link active">Account Info</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#address" class="nav-link">Address Book</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#orders" class="nav-link">My Orders</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#orderstracking" class="nav-link">Orders tracking</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#wishlist" class="nav-link">My Wishlist</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#payment" class="nav-link">Saved Cards</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#profile" class="nav-link">Profile</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#security" class="nav-link">Settings</a> </li>
                            <li class="nav-item"><a href="" class="nav-link">Log Out</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- End Dashboard sidebar -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                <div class="dashboard-content tab-content h-100" id="top-tabContent">
                    <!-- Account Info -->
                    <div class="tab-pane fade h-100 show active" id="info">
                        <div class="account-info h-100">
                            <div class="welcome-msg mb-4">
                                <h2>Hello, <span class="text-primary">Jecno Janesen</span></h2>
                                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent
                                    account activity and update your account information. Select a link below to view or
                                    edit information.</p>
                            </div>

                            <div class="row g-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-1 mb-4">
                                <div class="counter-box">
                                    <div class="bg-block d-flex-center flex-nowrap">
                                        <img class="blur-up lazyload" data-src="assests/images/icons/sale.png" src="assests/images/icons/sale.png" alt="icon" width="64" height="64" />
                                        <div class="content">
                                            <h3 class="fs-5 mb-1 text-primary">238</h3>
                                            <p>Total Order</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="counter-box">
                                    <div class="bg-block d-flex-center flex-nowrap">
                                        <img class="blur-up lazyload" data-src="assests/images/icons/homework.png" src="assests/images/icons/homework.png" alt="icon" width="64" height="64" />
                                        <div class="content">
                                            <h3 class="fs-5 mb-1 text-primary">124</h3>
                                            <p>Pending Orders</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="counter-box">
                                    <div class="bg-block d-flex-center flex-nowrap">
                                        <img class="blur-up lazyload" data-src="assests/images/icons/order.png" src="assests/images/icons/order.png" alt="icon" width="64" height="64" />
                                        <div class="content">
                                            <h3 class="fs-5 mb-1 text-primary">102</h3>
                                            <p>Awaiting Payments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="account-box">
                                <h3 class="mb-3">Account Information</h3>
                                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                    <div class="box-info mb-4">
                                        <div class="box-title d-flex-center">
                                            <h4>Contact Information</h4> <a href="#" class="btn-link ms-auto">Edit</a>
                                        </div>
                                        <div class="box-content mt-3">
                                            <h5>Hema Jecno</h5>
                                            <p class="mb-2">info@example.com</p>
                                            <p><a href="#" class="btn-link">Change Password</a></p>
                                        </div>
                                    </div>
                                    <div class="box-info mb-4">
                                        <div class="box-title d-flex-center">
                                            <h4>Newsletters</h4> <a href="#" class="btn-link ms-auto">Edit</a>
                                        </div>
                                        <div class="box-content mt-3">
                                            <p>You are currently not subscribed to any newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-info mb-4">
                                    <div class="box-title d-flex-center">
                                        <h4>Address Book</h4> <a href="#" class="btn-link ms-auto">Edit</a>
                                    </div>
                                    <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                        <div class="box-content mt-3">
                                            <h5>Default Billing Address</h5>
                                            <address class="mb-2">123, The Company Name Inc, <br />Street Road City
                                                name, <br />State name and Zip code.</address>
                                            <p><a href="#" class="btn-link">Edit Address</a></p>
                                        </div>
                                        <div class="box-content mt-3">
                                            <h5>Default Shipping Address</h5>
                                            <address class="mb-2">You have not set a default shipping address.</address>
                                            <p><a href="#" class="btn-link">Edit Address</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Account Info -->

                    <!-- Address Book -->
                    <div class="tab-pane fade h-100" id="address">
                        <div class="address-card mt-0 h-100">
                            <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">Address Book</h2>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNewModal"><i class="icon anm anm-plus-r me-1"></i> Add
                                    New</button>
                                <!-- New Address Modal -->
                                <div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="addNewModalLabel">Address details</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="add-address-from" method="post" action="#">
                                                    <div class="form-row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                                        <div class="form-group">
                                                            <label for="new-name" class="d-none">Name</label>
                                                            <input name="name" placeholder="Name" value="" id="new-name" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-type" class="d-none">Address type <span class="required">*</span></label>
                                                            <select name="new_type_id" id="new-type">
                                                                <option value="">Select Address type</option>
                                                                <option value="home">Home</option>
                                                                <option value="office">Office</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-company" class="d-none">Company</label>
                                                            <input name="company" placeholder="Company" value="" id="new-company" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-apartment" class="d-none">Apartment <span class="required">*</span></label>
                                                            <input name="apartment" placeholder="Apartment" value="" id="new-apartment" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-street-address" class="d-none">Street
                                                                Address <span class="required">*</span></label>
                                                            <input name="street_address" placeholder="Street Address" value="" id="new-street-address" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-city" class="d-none">City <span class="required">*</span></label>
                                                            <input name="city" placeholder="City" value="" id="new-city" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-postcode" class="d-none">Post Code <span class="required">*</span></label>
                                                            <input name="postcode" placeholder="Post Code" value="" id="new-postcode" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-telephone" class="d-none">Telephone <span class="required">*</span></label>
                                                            <input name="telephone" placeholder="Telephone" value="" id="new-telephone" type="tel">
                                                        </div>
                                                        <div class="form-group mb-md-0">
                                                            <label for="new-zone" class="d-none">Region / State <span class="required">*</span></label>
                                                            <select name="new_zone_id" id="new-zone">
                                                                <option value="">Select Region / State</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="new-country" class="d-none">Country <span class="required">*</span></label>
                                                            <select name="new_country_id" id="new-country">
                                                                <option value="">Select Country</option>
                                                                <option value="AI" label="Anguilla">Anguilla</option>
                                                                <option value="AG" label="Antigua and Barbuda">Antigua
                                                                    and Barbuda</option>
                                                                <option value="AR" label="Argentina">Argentina</option>
                                                                <option value="AW" label="Aruba">Aruba</option>
                                                                <option value="BS" label="Bahamas">Bahamas</option>
                                                                <option value="BB" label="Barbados">Barbados</option>
                                                                <option value="BZ" label="Belize">Belize</option>
                                                                <option value="BM" label="Bermuda">Bermuda</option>
                                                                <option value="BO" label="Bolivia">Bolivia</option>
                                                                <option value="BR" label="Brazil">Brazil</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn btn-primary m-0"><span>Add
                                                        Address</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End New Address Modal -->
                            </div>

                            <div class="address-book-section">
                                <div class="row g-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                    <div class="address-select-box active">
                                        <div class="address-box bg-block">
                                            <div class="top d-flex-justify-center justify-content-between mb-3">
                                                <h5 class="m-0">Hema Jecno</h5>
                                                <span class="product-labels start-auto end-0"><span class="lbl pr-label1">Home</span></span>
                                            </div>
                                            <div class="middle">
                                                <div class="address mb-2 text-muted">
                                                    <address class="m-0">123, The Company Name Inc, <br />Street Road
                                                        City name, <br />State name and Zip code.</address>
                                                </div>
                                                <div class="number">
                                                    <p>Mobile: <a href="tel:401234567890">(+40) 123 456 7890</a></p>
                                                </div>
                                            </div>
                                            <div class="bottom d-flex-justify-center justify-content-between">
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm" data-bs-toggle="modal" data-bs-target="#addEditModal">Edit</button>
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="address-select-box">
                                        <div class="address-box bg-block">
                                            <div class="top d-flex-justify-center justify-content-between mb-3">
                                                <h5 class="m-0">Hema Jecno</h5>
                                                <span class="product-labels start-auto end-0"><span class="lbl pr-label4">Office</span></span>
                                            </div>
                                            <div class="middle">
                                                <div class="address mb-2 text-muted">
                                                    <address class="m-0">123, The Company Name Inc, <br />Street Road
                                                        City name, <br />State name and Zip code.</address>
                                                </div>
                                                <div class="number">
                                                    <p>Mobile: <a href="tel:401234567890">(+40) 123 456 7890</a></p>
                                                </div>
                                            </div>
                                            <div class="bottom d-flex-justify-center justify-content-between">
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm" data-bs-toggle="modal" data-bs-target="#addEditModal">Edit</button>
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Address Modal -->
                                <div class="modal fade" id="addEditModal" tabindex="-1" aria-labelledby="addEditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="addEditModalLabel">Edit Address details</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="edit-address-from" method="post" action="#">
                                                    <div class="form-row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                                        <div class="form-group">
                                                            <label for="edit-name" class="d-none">Name</label>
                                                            <input name="name" placeholder="Name" value="" id="edit-name" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-type" class="d-none">Address type <span class="required">*</span></label>
                                                            <select name="edit_type_id" id="edit-type">
                                                                <option value="">Select Address type</option>
                                                                <option value="home">Home</option>
                                                                <option value="office">Office</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-company" class="d-none">Company</label>
                                                            <input name="company" placeholder="Company" value="" id="edit-company" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-apartment" class="d-none">Apartment <span class="required">*</span></label>
                                                            <input name="apartment" placeholder="Apartment" value="" id="edit-apartment" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-street-address" class="d-none">Street
                                                                Address <span class="required">*</span></label>
                                                            <input name="street_address" placeholder="Street Address" value="" id="edit-street-address" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-city" class="d-none">City <span class="required">*</span></label>
                                                            <input name="city" placeholder="City" value="" id="edit-city" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-postcode" class="d-none">Post Code <span class="required">*</span></label>
                                                            <input name="postcode" placeholder="Post Code" value="" id="edit-postcode" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-telephone" class="d-none">Telephone <span class="required">*</span></label>
                                                            <input name="telephone" placeholder="Telephone" value="" id="edit-telephone" type="tel">
                                                        </div>
                                                        <div class="form-group mb-md-0">
                                                            <label for="edit-zone" class="d-none">Region / State <span class="required">*</span></label>
                                                            <select name="edit_zone_id" id="edit-zone">
                                                                <option value="">Select Region / State</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="edit-country" class="d-none">Country <span class="required">*</span></label>
                                                            <select name="edit_country_id" id="edit-country">
                                                                <option value="">Select Country</option>
                                                                <option value="AI" label="Anguilla">Anguilla</option>
                                                                <option value="AG" label="Antigua and Barbuda">Antigua
                                                                    and Barbuda</option>
                                                                <option value="AR" label="Argentina">Argentina</option>
                                                                <option value="AW" label="Aruba">Aruba</option>
                                                                <option value="BS" label="Bahamas">Bahamas</option>
                                                                <option value="BB" label="Barbados">Barbados</option>
                                                                <option value="BZ" label="Belize">Belize</option>
                                                                <option value="BM" label="Bermuda">Bermuda</option>
                                                                <option value="BO" label="Bolivia">Bolivia</option>
                                                                <option value="BR" label="Brazil">Brazil</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn btn-primary m-0"><span>Save
                                                        Address</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edit Address Modal -->
                            </div>
                        </div>
                    </div>
                    <!-- End Address Book -->

                    <!-- My Orders -->
                    <div class="tab-pane fade h-100" id="orders">
                        <div class="orders-card mt-0 h-100">
                            <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">My Orders</h2>
                            </div>

                            <div class="table-bottom-brd table-responsive">
                                <table class="table align-middle text-center order-table">
                                    <thead>
                                        <tr class="table-head text-nowrap">
                                            <th scope="col">image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product1-120x170.jpg" src="assests/images/products/product1-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12301</span></td>
                                            <td><span class="name">Oxford Cuban Shirt</span></td>
                                            <td><span class="price fw-500">LKR 99.00</span></td>
                                            <td><span class="badge rounded-pill bg-success custom-badge">Shipped</span>
                                            </td>
                                            <td><a href="product-layout1.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product2-120x170.jpg" src="assests/images/products/product2-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12302</span></td>
                                            <td><span class="name">Cuff Beanie Cap</span></td>
                                            <td><span class="price fw-500">LKR 128.00</span></td>
                                            <td><span class="badge rounded-pill bg-danger custom-badge">Pending</span>
                                            </td>
                                            <td><a href="product-layout2.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product3-120x170.jpg" src="assests/images/products/product3-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12303</span></td>
                                            <td><span class="name">Flannel Collar Shirt</span></td>
                                            <td><span class="price fw-500">LKR 114.00</span></td>
                                            <td><span class="badge rounded-pill bg-dark custom-badge">Processing</span>
                                            </td>
                                            <td><a href="product-layout3.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product4-120x170.jpg" src="assests/images/products/product4-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12304</span></td>
                                            <td><span class="name">Cotton Hooded Hoodie</span></td>
                                            <td><span class="price fw-500">LKR 198.00</span></td>
                                            <td><span class="badge rounded-pill bg-secondary custom-badge">Canceled</span>
                                            </td>
                                            <td><a href="product-layout4.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End My Orders -->

                    <!-- Orders tracking -->
                    <div class="tab-pane fade h-100" id="orderstracking">
                        <div class="orders-card mt-0 h-100">
                            <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">Orders tracking</h2>
                            </div>

                            <form class="orderstracking-from" method="post" action="#">
                                <p class="mb-3">To track your order please enter your OrderID in the box below and press
                                    "Track" button. This was given to you on your receipt and in the confirmation email
                                    you should have received.</p>
                                <div class="row align-items-center">
                                    <div class="form-group col-md-5 col-lg-5">
                                        <label for="orderId" class="d-none">Order ID <span class="required-f">*</span></label>
                                        <input name="orderId" placeholder="Order ID" value="" id="orderId" type="text" required>
                                    </div>
                                    <div class="form-group col-md-5 col-lg-5">
                                        <label for="billingEmail" class="d-none">Billing email <span class="required-f">*</span></label>
                                        <input name="billingEmail" placeholder="Billing email" value="" id="billingEmail" type="text" required>
                                    </div>
                                    <div class="form-group col-md-2 col-lg-2">
                                        <button type="submit" class="btn rounded w-100"><span>Track</span></button>
                                    </div>
                                </div>
                            </form>

                            <div class="row mt-2">
                                <div class="col-sm-12">
                                    <h3>Status for order no: 000123</h3>
                                    <!-- Status Order -->
                                    <div class="row mt-3">
                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="product-img mb-3 mb-sm-0">
                                                <img class="rounded-0 blur-up lazyload" data-src="assests/images/products/orders-tracking-product.jpg" src="assests/images/products/orders-tracking-product.jpg" alt="product" title="" width="545" height="700" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-9 col-sm-8">
                                            <div class="tracking-detail d-flex-center">
                                                <ul>
                                                    <li>
                                                        <div class="left"><span>Order name</span></div>
                                                        <div class="right"><span>Cuff Beanie Cap</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="left"><span>customer number</span></div>
                                                        <div class="right"><span>000123</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="left"><span>order date</span></div>
                                                        <div class="right"><span>14 Nov 2021</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="left"><span>Ship Date</span></div>
                                                        <div class="right"><span>16 Nov 2021</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="left"><span>shipping address</span></div>
                                                        <div class="right"><span>55 Gallaxy Enque, 2568 steet, 23568
                                                                NY</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="left"><span>Carrier</span></div>
                                                        <div class="right"><span>Ipsum</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="left"><span>carrier tracking number</span></div>
                                                        <div class="right"><span>000123</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 mt-4 mt-lg-0">
                                            <div class="tracking-map map-section ratio ratio-16x9 h-100">
                                                <iframe src="https://www.google.com/maps/embed?pb=" allowfullscreen="" height="650"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Status Order -->
                                    <!-- Tracking Steps -->
                                    <div class="tracking-steps nav mt-5 mb-4 clearfix">
                                        <div class="step done"><span>order placed</span></div>
                                        <div class="step done"><span>preparing to ship</span></div>
                                        <div class="step current"><span>shipped</span></div>
                                        <div class="step"><span>delivered</span></div>
                                    </div>
                                    <!-- End Tracking Steps -->
                                    <!-- Order Table -->
                                    <div class="table-bottom-brd table-responsive">
                                        <table class="table align-middle text-center order-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Location</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>14 May 2023</td>
                                                    <td>08.00 AM</td>
                                                    <td><span class="badge rounded-pill bg-success custom-badge">Shipped</span>
                                                    </td>
                                                    <td>Canada</td>
                                                </tr>
                                                <tr>
                                                    <td>15 May 2023</td>
                                                    <td>12.00 AM</td>
                                                    <td><span class="badge rounded-pill bg-dark custom-badge">Shipping
                                                            info received</span></td>
                                                    <td>California</td>
                                                </tr>
                                                <tr>
                                                    <td>16 May 2023</td>
                                                    <td>10.00 AM</td>
                                                    <td><span class="badge rounded-pill bg-secondary custom-badge">Origin
                                                            scan</span></td>
                                                    <td>Landon</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Order Table -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Orders tracking -->

                    <!-- My Wishlist -->
                    <div class="tab-pane fade h-100" id="wishlist">
                        <div class="orders-card mt-0 h-100">
                            <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">My Wishlist</h2>
                            </div>

                            <div class="table-bottom-brd table-responsive">
                                <table class="table align-middle text-center order-table">
                                    <thead>
                                        <tr class="table-head text-nowrap">
                                            <th scope="col">Image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product1-120x170.jpg" src="assests/images/products/product1-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12301</span></td>
                                            <td><span class="name">Oxford Cuban Shirt</span></td>
                                            <td><span class="price fw-500">LKR 99.00</span></td>
                                            <td><a href="cart-style1.html" class="btn btn-md text-nowrap">Add to
                                                    Cart</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product2-120x170.jpg" src="assests/images/products/product2-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12302</span></td>
                                            <td><span class="name">Cuff Beanie Cap</span></td>
                                            <td><span class="price fw-500">LKR 128.00</span></td>
                                            <td><a href="cart-style1.html" class="btn btn-md text-nowrap">Add to
                                                    Cart</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product3-120x170.jpg" src="assests/images/products/product3-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12303</span></td>
                                            <td><span class="name">Flannel Collar Shirt</span></td>
                                            <td><span class="price fw-500">LKR 114.00</span></td>
                                            <td><a href="cart-style1.html" class="btn btn-md text-nowrap">Add to
                                                    Cart</a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="blur-up lazyload" data-src="assests/images/products/product4-120x170.jpg" src="assests/images/products/product4-120x170.jpg" width="50" alt="product" title="product" /></td>
                                            <td><span class="id">#12304</span></td>
                                            <td><span class="name">Cotton Hooded Hoodie</span></td>
                                            <td><span class="price fw-500">LKR 198.00</span></td>
                                            <td><a href="cart-style1.html" class="btn btn-md text-nowrap">Add to
                                                    Cart</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End My Wishlist -->

                    <!-- Saved Cards -->
                    <div class="tab-pane fade h-100" id="payment">
                        <div class="banks-card mt-0 h-100">
                            <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">Saved Cards</h2>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCardModal"><i class="icon anm anm-plus-r me-1"></i> Add
                                    New</button>
                                <!-- New Card Modal -->
                                <div class="modal fade" id="addCardModal" tabindex="-1" aria-labelledby="addCardModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="addCardModalLabel">Cards details</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="add-card-from" method="post" action="#">
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <label for="card-number" class="d-none">Card Number</label>
                                                            <input name="card-number" placeholder="Card Number" value="" id="card-number" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="bank-card" class="d-none">Card <span class="required">*</span></label>
                                                            <select id="bank-card" class="form-control">
                                                                <option value="0" label="Select a card" selected="selected">Select a card</option>
                                                                <option value="visa">Visa</option>
                                                                <option value="mastercard">Mastercard</option>
                                                                <option value="american_Express">American Express
                                                                </option>
                                                                <option value="discover">Discover</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="cvv-code" class="d-none">CVV Code <span class="required">*</span></label>
                                                            <input name="cvv-code" placeholder="CVV Code" value="" id="cvv-code" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-md-0">
                                                            <label for="card-month" class="d-none">Month <span class="required">*</span></label>
                                                            <select id="card-month" class="form-control">
                                                                <option value="0" label="Select a month" selected="selected">Select a month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-0">
                                                            <label for="card-year" class="d-none">Year <span class="required">*</span></label>
                                                            <select id="card-year" class="form-control">
                                                                <option value="0" label="Select a year" selected="selected">Select a year</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn btn-primary m-0"><span>Add
                                                        Card</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End New Card Modal -->
                            </div>

                            <div class="bank-book-section">
                                <div class="row g-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                    <div class="address-select-box active">
                                        <div class="address-box bg-block">
                                            <div class="top bank-logo d-flex-justify-center justify-content-between mb-3">
                                                <img src="assests/images/icons/bank-logo1.png" class="bank-logo" width="40" alt="" />
                                                <img src="assests/images/icons/visa-logo.png" class="network-logo" width="50" alt="" />
                                            </div>
                                            <div class="middle">
                                                <div class="card-number mb-3">
                                                    <h6>Card Number</h6>
                                                    <p class="text-muted">3742 4545 5400 126</p>
                                                </div>
                                                <div class="name-validity d-flex-justify-center justify-content-between">
                                                    <div class="left">
                                                        <h6>Name on card</h6>
                                                        <p class="text-muted">Hema Jecno</p>
                                                    </div>
                                                    <div class="right">
                                                        <h6>Validity</h6>
                                                        <p class="text-muted">XX/XX</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom d-flex-justify-center justify-content-between">
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm" data-bs-toggle="modal" data-bs-target="#editCardModal">Edit</button>
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="address-select-box">
                                        <div class="address-box bg-block">
                                            <div class="top bank-logo d-flex-justify-center justify-content-between mb-3">
                                                <img src="assests/images/icons/bank-logo2.png" class="bank-logo" width="100" alt="" />
                                                <img src="assests/images/icons/visa-logo.png" class="network-logo" width="50" alt="" />
                                            </div>
                                            <div class="middle">
                                                <div class="card-number mb-3">
                                                    <h6>Card Number</h6>
                                                    <p class="text-muted">3742 4545 5400 126</p>
                                                </div>
                                                <div class="name-validity d-flex-justify-center justify-content-between">
                                                    <div class="left">
                                                        <h6>Name on card</h6>
                                                        <p class="text-muted">Hema Jecno</p>
                                                    </div>
                                                    <div class="right">
                                                        <h6>Validity</h6>
                                                        <p class="text-muted">XX/XX</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom d-flex-justify-center justify-content-between">
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm" data-bs-toggle="modal" data-bs-target="#editCardModal">Edit</button>
                                                <button type="button" class="bottom-btn btn btn-gray btn-sm">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Bank card Modal -->
                                <div class="modal fade" id="editCardModal" tabindex="-1" aria-labelledby="editCardModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editCardModalLabel">Edit Card details</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="add-card-from" method="post" action="#">
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <label for="editCard-number" class="d-none">Card
                                                                Number</label>
                                                            <input name="editCard-number" placeholder="Card Number" value="" id="editCard-number" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editBank-card" class="d-none">Card <span class="required">*</span></label>
                                                            <select id="editBank-card" class="form-control">
                                                                <option value="0" label="Select a card" selected="selected">Select a card</option>
                                                                <option value="visa">Visa</option>
                                                                <option value="mastercard">Mastercard</option>
                                                                <option value="american_Express">American Express
                                                                </option>
                                                                <option value="discover">Discover</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label for="editCvv-code" class="d-none">CVV Code <span class="required">*</span></label>
                                                            <input name="editCvv-code" placeholder="CVV Code" value="" id="editCvv-code" type="text" />
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-md-0">
                                                            <label for="editCard-month" class="d-none">Month <span class="required">*</span></label>
                                                            <select id="editCard-month" class="form-control">
                                                                <option value="0" label="Select a month" selected="selected">Select a month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-0">
                                                            <label for="editCard-year" class="d-none">Year <span class="required">*</span></label>
                                                            <select id="editCard-year" class="form-control">
                                                                <option value="0" label="Select a year" selected="selected">Select a year</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="submit" class="btn btn-primary m-0"><span>Save
                                                        Card</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edit Bank card Modal -->
                            </div>
                        </div>
                    </div>
                    <!-- End Saved Cards -->

                    <!-- Profile -->
                    <div class="tab-pane fade h-100" id="profile">
                        <div class="profile-card mt-0 h-100">
                            <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">Profile</h2>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i class="icon anm anm-plus-r me-1"></i>
                                    Edit</button>
                            </div>
                            <div class="profile-book-section mb-4">
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Company name</h6>
                                    </div>
                                    <div class="right">
                                        <p>Fashion Store</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Email address</h6>
                                    </div>
                                    <div class="right">
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Phone number</h6>
                                    </div>
                                    <div class="right">
                                        <p>(+40) 123 456 7890</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">City / State</h6>
                                    </div>
                                    <div class="right">
                                        <p>California, Barbados</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Country / Region</h6>
                                    </div>
                                    <div class="right">
                                        <p>United States Of America</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Street address</h6>
                                    </div>
                                    <div class="right">
                                        <p>The Company Name Inc</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Zip code</h6>
                                    </div>
                                    <div class="right">
                                        <p>2356830</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Category</h6>
                                    </div>
                                    <div class="right">
                                        <p>Clothing</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Year established</h6>
                                    </div>
                                    <div class="right">
                                        <p>2023</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Total employees</h6>
                                    </div>
                                    <div class="right">
                                        <p>58 - 100 People</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Profile Modal -->
                            <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="editProfileModalLabel">Edit Profile details</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="edit-profile-from" method="post" action="#">
                                                <div class="form-row">
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                                        <div class="profileImg img-thumbnail shadow bg-white rounded-circle d-flex-justify-center position-relative mx-auto">
                                                            <img src="assests/images/users/user-img3.jpg" class="rounded-circle" alt="profile" width="200" height="200" />
                                                            <div class="thumb-edit">
                                                                <label for="profileUpload" class="d-flex-center justify-content-center position-absolute top-0 start-100 translate-middle p-2 rounded-circle shadow btn btn-secondary mt-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="icon anm anm-pencil-ar an-1x"></i></label>
                                                                <input type="file" id="profileUpload" class="image-upload d-none" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-Companyname" class="d-none">Company
                                                            name</label>
                                                        <input name="editProfile-Companyname" placeholder="Company name" value="" id="editProfile-Companyname" type="text" />
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-Emailaddress" class="d-none">Email
                                                            address</label>
                                                        <input name="editProfile-Emailaddress" placeholder="Email address" value="" id="editProfile-Emailaddress" type="email" />
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-Phonenumber" class="d-none">Phone
                                                            number</label>
                                                        <input name="editProfile-Phonenumber" placeholder="Phone number" value="" id="editProfile-Phonenumber" type="text" />
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-zone" class="d-none">City / State <span class="required">*</span></label>
                                                        <select name="editProfile_zone_id" id="editProfile-zone">
                                                            <option value="">Select Region / State</option>
                                                            <option value="AL">Alabama</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="CA">California</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-country" class="d-none">Country / Region
                                                            <span class="required">*</span></label>
                                                        <select name="editProfile_country_id" id="editProfile-country">
                                                            <option value="">Select Country / Region</option>
                                                            <option value="AI" label="Anguilla">Anguilla</option>
                                                            <option value="AG" label="Antigua and Barbuda">Antigua and
                                                                Barbuda</option>
                                                            <option value="AR" label="Argentina">Argentina</option>
                                                            <option value="AW" label="Aruba">Aruba</option>
                                                            <option value="BS" label="Bahamas">Bahamas</option>
                                                            <option value="BB" label="Barbados">Barbados</option>
                                                            <option value="BZ" label="Belize">Belize</option>
                                                            <option value="BM" label="Bermuda">Bermuda</option>
                                                            <option value="BO" label="Bolivia">Bolivia</option>
                                                            <option value="BR" label="Brazil">Brazil</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-Streetaddress" class="d-none">Street
                                                            address</label>
                                                        <input name="editProfile-Streetaddress" placeholder="Street address" value="" id="editProfile-Streetaddress" type="text" />
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-Zipcode" class="d-none">Zip code</label>
                                                        <input name="editProfile-Zipcode" placeholder="Zip code" value="" id="editProfile-Zipcode" type="text" />
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <label for="editProfile-Category" class="d-none">Category</label>
                                                        <input name="editProfile-Category" placeholder="Phone number" value="" id="editProfile-Category" type="text" />
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-md-0">
                                                        <label for="editProfile-YearEstablished" class="d-none">Year
                                                            Established</label>
                                                        <input name="editProfile-YearEstablished" placeholder="YearEstablished" value="" id="editProfile-YearEstablished" type="text" />
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12 mb-0">
                                                        <label for="editProfile-TotalEmployees" class="d-none">Zip
                                                            code</label>
                                                        <input name="editProfile-TotalEmployees" placeholder="Zip code" value="" id="editProfile-TotalEmployees" type="text" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="submit" class="btn btn-primary m-0"><span>Save
                                                    Profile</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Edit Profile Modal -->

                            <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">Login details</h2>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editLoginModal"><i class="icon anm anm-plus-r me-1"></i>
                                    Edit</button>
                            </div>
                            <div class="profile-login-section">
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Email address</h6>
                                    </div>
                                    <div class="right">
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Phone number</h6>
                                    </div>
                                    <div class="right">
                                        <p>(+40) 123 456 7890</p>
                                    </div>
                                </div>
                                <div class="details d-flex align-items-center mb-2">
                                    <div class="left">
                                        <h6 class="mb-0 body-font fw-500">Password</h6>
                                    </div>
                                    <div class="right">
                                        <p>xxxxxxx</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Login details Modal -->
                            <div class="modal fade" id="editLoginModal" tabindex="-1" aria-labelledby="editLoginModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="editLoginModalLabel">Edit Login details</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="edit-Loginprofile-from" method="post" action="#">
                                                <div class="form-row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1">
                                                    <div class="form-group">
                                                        <label for="editLogin-Emailaddress" class="d-none">Email address
                                                            <span class="required">*</span></label>
                                                        <input name="editLogin-Emailaddress" placeholder="Email address" value="" id="editLogin-Emailaddress" type="email" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editLogin-Phonenumber" class="d-none">Phone number
                                                            <span class="required">*</span></label>
                                                        <input name="editLogin-Phonenumber" placeholder="Phone number" value="" id="editLogin-Phonenumber" type="text" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editLogin-Password" class="d-none">Current Password
                                                            <span class="required">*</span></label>
                                                        <input name="editLogin-Password" placeholder="Current Password" value="" id="editLogin-Password" type="password" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editLogin-NewPassword" class="d-none">New Password
                                                            <span class="required">*</span></label>
                                                        <input name="editLogin-NewPassword" placeholder="New Password" value="" id="editLogin-NewPassword" type="password" />
                                                        <small class="form-text text-muted">Your password must be 8-20
                                                            characters long, contain letters and numbers, and must not
                                                            contain spaces, special characters.</small>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label for="editLogin-Verify" class="d-none">Verify <span class="required">*</span></label>
                                                        <input name="editLogin-Verify" placeholder="Verify" value="" id="editLogin-Verify" type="text" />
                                                        <small class="form-text text-muted">To confirm, type the new
                                                            password again.</small>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="submit" class="btn btn-primary m-0"><span>Save
                                                    changes</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Edit Login details Modal -->
                        </div>
                    </div>
                    <!-- End Profile -->

                    <!-- Security -->
                    <div class="tab-pane fade h-100" id="security">
                        <div class="settings-card mt-0 h-100">
                            <div class="dashboard-title d-flex-justify-center justify-content-between mb-4">
                                <h2 class="mb-0">Settings</h2>
                            </div>

                            <div class="settings-book-section dashboard-detail">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="account-setting">
                                            <h4 class="mb-3">Notifications</h4>
                                            <div class="account-detail form-group">
                                                <div class="customCheckbox clearfix mb-2">
                                                    <input name="NotificationsAC" id="n1" value="1" checked="checked" type="checkbox" />
                                                    <label for="n1" class="mb-0">Allow Desktop Notifications</label>
                                                </div>
                                                <div class="customCheckbox clearfix mb-2">
                                                    <input name="NotificationsAC" id="n2" value="2" type="checkbox" />
                                                    <label for="n2" class="mb-0">Enable Notifications</label>
                                                </div>
                                                <div class="customCheckbox clearfix mb-2">
                                                    <input name="NotificationsAC" id="n3" value="3" type="checkbox" />
                                                    <label for="n3" class="mb-0">Get notification for my own
                                                        activity</label>
                                                </div>
                                                <div class="customCheckbox clearfix mb-2">
                                                    <input name="NotificationsAC" id="n4" value="4" type="checkbox" />
                                                    <label for="n4" class="mb-0">Receive offers from our
                                                        partners</label>
                                                </div>
                                                <div class="customCheckbox clearfix mb-2">
                                                    <input name="NotificationsAC" id="n5" value="5" type="checkbox" />
                                                    <label for="n5" class="mb-0">Sign up for our newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="account-setting">
                                            <h4 class="mb-3">Deactivate account</h4>
                                            <div class="account-detail form-group">
                                                <div class="customRadio clearfix mb-2">
                                                    <input name="DeactivateAC" id="d1" value="1" checked="checked" type="radio" />
                                                    <label for="d1" class="mb-0">I have a privacy concern</label>
                                                </div>
                                                <div class="customRadio clearfix mb-2">
                                                    <input name="DeactivateAC" id="d2" value="2" type="radio" />
                                                    <label for="d2" class="mb-0">This is temporary</label>
                                                </div>
                                                <div class="customRadio clearfix mb-2">
                                                    <input name="DeactivateAC" id="d3" value="3" type="radio" />
                                                    <label for="d3" class="mb-0">Other</label>
                                                </div>
                                                <button type="button" class="btn btn-sm my-2">Deactivate
                                                    Account</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-setting">
                                    <h4 class="mb-3">Delete account</h4>
                                    <div class="account-detail form-group">
                                        <div class="customRadio clearfix mb-2">
                                            <input name="DeleteAC" id="da1" value="1" checked="checked" type="radio" />
                                            <label for="da1" class="mb-0">No longer usable</label>
                                        </div>
                                        <div class="customRadio clearfix mb-2">
                                            <input name="DeleteAC" id="da2" value="2" type="radio" />
                                            <label for="da2" class="mb-0">Want to switch on other account</label>
                                        </div>
                                        <div class="customRadio clearfix mb-2">
                                            <input name="DeleteAC" id="da3" value="3" type="radio" />
                                            <label for="da3" class="mb-0">Other</label>
                                        </div>
                                        <button type="button" class="btn btn-sm my-2">Delete Account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Security -->
                </div>
            </div>
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->


@endsection