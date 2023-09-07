<html>

<head>

    <title>:: GRAB-N-GO :: Home</title>
    <link rel="shortcut icon" href="{{asset('frontend/assests/images/GNG-FAVICON.png')}}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="{{asset('frontend/assests/css/header-style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assests/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assests/css/index.css')}}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-2" style="width: 20%;">
                    <!-- Site Logo -->
                    <img src="{{asset('frontend/assests/images/site-logo.png')}}" alt="Logo" class="site-logo">
                </div>
                <div class="col-4" style="width: 45%;">
                    <!-- Search Box -->
                    <div class="input-group">
                        <select class="form-select input-style span-font" style="width: 25%; border-right: none;">
                            <option value="">All Categories</option>
                            <option value="">Category 2</option>
                            <option value="">Category 3</option>
                            <!-- Add more categories as needed -->
                        </select>
                        <input type="text" class="form-control input-style" placeholder="Search Something..." style="width: 60%; border-left: none; border-right: none;">
                        <span class="input-group-text input-style span-font" style="border-left: none;">
                            <i class="fas fa-search input-style span-font"></i>
                        </span>
                    </div>
                </div>
                <div class="col-2" style="width: 15%; display: flex; flex-direction: column; align-items: left; justify-content: center; gap: 0px;">
                    <!-- Contact Number -->
                    <span class="span-font">Inquiries and Support</span>
                    <span class="span-font">+1234567890</span>
                </div>
                <!-- <div class="col-2" style="width: 20%; display: flex; gap: 40px; color: #000;"> -->
                <!-- Icon Group (User, Wishlist, Cart) -->
                <!-- <a href="{{route('user.auth')}}" class="fas fa-user" style="display: flex; align-items: center; color:#000"></a>
                    <a class="fas fa-heart" style="display: flex; align-items: center; color:#000"></a>
                    <span style="text-align: right; display: flex; align-items: center; font-size: 12px;"><i class="fas fa-shopping-cart" style="font-size: 16px; position: relative;"><span class="product-count" style="font-size: 10px; background-color: #ffc107; color: #fff; padding: 4px 6px; border-radius: 50%; position: absolute; top: -10; left: -10;">2</span></i>&nbsp &nbsp &nbsp &nbsp My Cart </br>LKR 2500</span>
                </div> -->

                <div class="col-2" style="width: 20%; display: flex;">
                    <!-- Wishlist -->
                    <div class="wishlist-area">
                        <a href="wishlist.html" class="wishlist-btn"><i class="icofont-heart"></i></a>
                    </div>

                    <div class="cart-area">
                        <div class="cart--btn"><i class="icofont-cart"></i> <span class="cart_quantity">2</span>
                        </div>

                        <!-- Cart Dropdown Content -->
                        <div class="cart-dropdown-content">
                            <ul class="cart-list">
                                <li>
                                    <div class="cart-item-desc">
                                        <a href="#" class="image">
                                            <img src="./assests/images/product-img/top-1.png" class="cart-thumb" alt="">
                                        </a>
                                        <div>
                                            <a href="#">Kid's Fashion</a>
                                            <p>1 x - <span class="price">$32.99</span></p>
                                        </div>
                                    </div>
                                    <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                </li>
                                <li>
                                    <div class="cart-item-desc">
                                        <a href="#" class="image">
                                            <img src="./assests/images/product-img/best-4.png" class="cart-thumb" alt="">
                                        </a>
                                        <div>
                                            <a href="#">Headphone</a>
                                            <p>2x - <span class="price">$49.99</span></p>
                                        </div>
                                    </div>
                                    <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                </li>
                            </ul>
                            <div class="cart-pricing my-4">
                                <ul>
                                    <li>
                                        <span>Sub Total:</span>
                                        <span>$822.96</span>
                                    </li>
                                    <li>
                                        <span>Shipping:</span>
                                        <span>$30.00</span>
                                    </li>
                                    <li>
                                        <span>Total:</span>
                                        <span>$856.63</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-box">
                                <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                            </div>
                        </div>
                    </div>

                    <!-- User_Profile -->
                    <div class="account-area">
                        <div class="user-thumbnail">
                            <img src="{{asset('frontend/assests/images/PT.jpeg')}}" alt="">
                        </div>
                        <ul class="user-meta-dropdown">
                            <li class="user-title"><span>Hello,</span> Pasindu</li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="order-list.html">Orders List</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="login.html"><i class="icofont-logout"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-2" style="width: 20%; justify-content: left; padding-left: 30px;">
                        <!-- Categories Button -->
                        <button type="button" class="button-style-primary"><i class="fa fa-bars icon-style"></i>&nbsp &nbsp All Categories &nbsp &nbsp<i class="fa fa-angles-down icon-style"></i></button>
                    </div>
                    <div class="col-8" style="width: 60%;">
                        <!-- Navigation Menu -->
                        <nav class="navbar navbar-expand">
                            <!-- Add your navigation links here -->
                            <a href="{{route('Shop')}}">New Products</a>
                            <a>Best Seller</a>
                            <a>Promotions</a>
                            <a>Special Price</a>
                            <a>Offers</a>
                        </nav>
                    </div>
                    <div class="col-2" style="width: 20%; justify-content: right; padding-right: 30px;">
                        <!-- "Become a Member" Button -->
                        <button type="button" class="button-style-primary">Become a Member</button>
                    </div>
                </div>
            </div>
    </header>