<body class="template-index index-demo7">
    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Header-->
        <header class="header header-7">
            <!--Header inner-->
            <div class="header-main d-flex align-items-center">
                <div class="container container-1330">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-4 col-md-5 col-lg-5 col-xl-6 align-self-center icons-col text-left d-xl-none">
                            <!--Mobile Toggle-->
                            <button type="button" class="iconset icon-link ps-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-inline-flex flex-column d-lg-none">
                                <span class="iconCot"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></span>
                                <span class="text d-none">Menu</span>
                            </button>
                            <!--End Mobile Toggle-->
                            <!--Search Mobile-->
                            <div class="search-parent iconset d-xl-none">
                                <div class="site-search">
                                    <a href="#;" class="search-icon icon-link clr-none d-flex" data-bs-toggle="offcanvas" data-bs-target="#search-drawer">
                                        <span class="iconCot"><i class="hdr-icon icon anm anm-search-l"></i></span>
                                        <span class="text d-none d-xl-flex flex-column text-left">Search</span>
                                    </a>
                                </div>
                                <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                                    <div class="container">
                                        <div class="search-header d-flex-center justify-content-between mb-3">
                                            <h3 class="title m-0">What are you looking for?</h3>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="search-body">
                                            <form class="form minisearch" id="header-search" action="#" method="get">
                                                <!--Search Field-->
                                                <div class="d-flex searchField">
                                                    <div class="search-category">
                                                        <select class="rgsearch-category rounded-end-0">
                                                            <option value="0">All Categories</option>
                                                            <option value="1">- All</option>
                                                            <option value="2">- Fashion</option>
                                                            <option value="3">- Shoes</option>
                                                            <option value="4">- Electronic</option>
                                                            <option value="5">- Jewelry</option>
                                                            <option value="6">- Vegetables</option>
                                                            <option value="7">- Furniture</option>
                                                            <option value="8">- Accessories</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-box d-flex fl-1">
                                                        <input type="text" class="input-text rounded-0 border-start-0 border-end-0" placeholder="Search for products..." value="" />
                                                        <button type="submit" class="action search d-flex-justify-center btn btn-primary rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                                    </div>
                                                </div>
                                                <!--End Search Field-->
                                                <!--Search popular-->
                                                <div class="popular-searches d-flex-justify-center mt-3">
                                                    <span class="title fw-600">Trending Now:</span>
                                                    <div class="d-flex-wrap searches-items">
                                                        <a class="text-link ms-2" href="#">Apple,</a>
                                                        <a class="text-link ms-2" href="#">Potatos,</a>
                                                        <a class="text-link ms-2" href="#">Tomato</a>
                                                    </div>
                                                </div>
                                                <!--End Search popular-->
                                                <!--Search products-->
                                                <div class="search-products">
                                                    <ul class="items g-2 g-md-3 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                                                        <li class="item empty w-100 text-center text-muted d-none">You
                                                            don't have any items in your search.</li>
                                                        <li class="item">
                                                            <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                                <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="rounded-4 blur-up lazyload" data-src="{{asset('frontend/assests/images/products/vegetables-product1-120x170.jpg')}}" src="{{asset('frontend/assests/images/products/vegetables-product1-120x170.jpg')}}" alt="image" title="product" width="120" height="170" /></a></div>
                                                                <div class="ms-3 details text-left">
                                                                    <div class="product-name"><a class="item-title" href="product-layout1.html">Fresh Kashmiri
                                                                            Apple</a></div>
                                                                    <div class="product-price"><span class="old-price">LKR 114.00</span><span class="price">LKR 99.00</span></div>
                                                                    <div class="product-review d-flex align-items-center justify-content-start">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                                        <span class="caption hidden ms-2">3
                                                                            reviews</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                                <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="rounded-4 blur-up lazyload" data-src="{{asset('frontend/assests/images/products/vegetables-product2-120x170.jpg')}}" src="{{asset('frontend/assests/images/products/vegetables-product2-120x170.jpg')}}" alt="image" title="product" width="120" height="170" /></a></div>
                                                                <div class="ms-3 details text-left">
                                                                    <div class="product-name"><a class="item-title" href="product-layout1.html">Organic
                                                                            Potatos</a></div>
                                                                    <div class="product-price"><span class="price">LKR 128.00</span></div>
                                                                    <div class="product-review d-flex align-items-center justify-content-start">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                                        <span class="caption hidden ms-2">9
                                                                            reviews</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                                <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="rounded-4 blur-up lazyload" data-src="{{asset('frontend/assests/images/products/vegetables-product3-120x170.jpg')}}" src="{{asset('frontend/assests/images/products/vegetables-product3-120x170.jpg')}}" alt="image" title="product" width="120" height="170" /></a></div>
                                                                <div class="ms-3 details text-left">
                                                                    <div class="product-name"><a class="item-title" href="product-layout1.html">Vegan Fresh
                                                                            Tomato</a></div>
                                                                    <div class="product-price"><span class="price">LKR 99.00</span></div>
                                                                    <div class="product-review d-flex align-items-center justify-content-start">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                                        <span class="caption hidden ms-2">30
                                                                            reviews</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--End Search products-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Search Mobile-->
                            <!--Account Mobile-->
                            <div class="account-parent iconset d-inline-block d-xl-none">
                                <div class="account-link"><span class="iconCot"><i class="hdr-icon icon anm anm-user-al"></i></span></div>
                                <div id="accountBox">
                                    <div class="customer-links">
                                        <ul class="m-0">
                                            <li><a href="login.html"><i class="icon anm anm-sign-in-al"></i>Sign In</a>
                                            </li>
                                            <li><a href="register.html"><i class="icon anm anm-user-al"></i>Register</a>
                                            </li>
                                            <li><a href="my-account.html"><i class="icon anm anm-user-cil"></i>My
                                                    Account</a></li>
                                            <li><a href="wishlist-style1.html"><i class="icon anm anm-heart-l"></i>Wishlist</a></li>
                                            <li><a href="compare-style1.html"><i class="icon anm anm-random-r"></i>Compare</a></li>
                                            <li><a href="login.html"><i class="icon anm anm-sign-out-al"></i>Sign
                                                    out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Account Mobile-->
                        </div>

                        <!--Logo-->
                        <div class="logo col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 align-self-center">
                            <a class="logoImg" href="index.html"><img class="mx-auto mx-xl-0" src="{{asset('frontend/assests/images/site-logo.png')}}" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="140" height="50" /></a>
                        </div>
                        <!--End Logo-->
                        <!--Search Inline-->
                        <div class="col-1 col-sm-1 col-md-1 col-lg-4 col-xl-4 align-self-center d-none d-xl-block">
                            <div class="minisearch-inline">
                                <form class="form minisearch" id="header-search0" action="#" method="get">
                                    <label class="label d-none"><span>Search</span></label>
                                    <!--Search Field-->
                                    <div class="d-flex searchField">
                                        <div class="search-category">
                                            <select class="rgsearch-category rounded-pill rounded-end-0 ps-3">
                                                <option value="0">All Categories</option>
                                                <option value="1">- All</option>
                                                <option value="2">- Fashion</option>
                                                <option value="3">- Shoes</option>
                                                <option value="4">- Electronic</option>
                                                <option value="5">- Jewelry</option>
                                                <option value="6">- Vegetables</option>
                                                <option value="7">- Furniture</option>
                                                <option value="8">- Accessories</option>
                                            </select>
                                        </div>
                                        <div class="input-box d-flex fl-1 position-relative">
                                            <input type="text" class="input-group-field input-text rounded-pill rounded-start-0 border-start-0" placeholder="Search for products, brands..." value="" />
                                            <button type="submit" class="input-group-btn action search d-flex-justify-center text-link"><i class="hdr-icon icon anm anm-search-l me-2"></i></button>
                                        </div>
                                    </div>
                                    <!--End Search Field-->
                                </form>
                            </div>
                        </div>
                        <!--End Search Inline-->
                        <!--Right Icon-->
                        <div class="col-4 col-sm-4 col-md-5 col-lg-5 col-xl-6 align-self-center icons-col text-right">
                            <!--Compare-->
                            <div class="compare-link iconset d-none d-sm-inline-block">
                                <a href="#" class="icon-link clr-none d-flex">
                                    <span class="iconCot"><i class="hdr-icon icon anm anm-random-r"></i><span class="wishlist-count d-xl-none">3</span></span>
                                    <span class="text d-none d-xl-flex flex-column text-left">Compare <small>0
                                            Item</small></span>
                                </a>
                            </div>
                            <!--End Compare-->
                            <!--Wishlist-->
                            <div class="wishlist-link iconset">
                                <a href="#" class="icon-link clr-none d-flex">
                                    <span class="iconCot"><i class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count d-xl-none">5</span></span>
                                    <span class="text d-none d-xl-flex flex-column text-left">Wishlist <small>3
                                            Item</small></span>
                                </a>
                            </div>
                            <!--End Wishlist-->
                            <!--Account desktop-->
                            <div class="account-link iconset d-none d-xl-inline-block">
                                <div class="icon-link clr-none d-flex">
                                    <span class="iconCot"><i class="hdr-icon icon anm anm anm-user-al"></i></span>
                                    @auth
                                    <span class="text d-flex flex-column text-left">My Account<small><a href="{{route('user.logout')}}">Logout</a></small></span>

                                    @else
                                    <span class="text d-flex flex-column text-left">My Account <small><a href="{{route('user.authlogin')}}">Login</a> / <a href="{{route('user.authregister')}}">Register</a></small></span>
                                    @endauth
                                </div>
                            </div>
                            <!--End Account desktop-->
                            <!--Minicart-->
                            <div class="header-cart iconset pe-0">
                                <a href="" class="header-cart btn-minicart icon-link clr-none d-flex" data-bs-toggle="offcanvas" data-bs-target="#minicart-drawer">
                                    <span class="iconCot"><i class="hdr-icon icon anm anm-basket-l"></i><span class="cart-count">{{ count((array) session('cart')) }}</span></span>
                                    <span class="text d-none d-md-flex flex-column text-left">Basket <small class="price text-primary">LKR 234</small></span>
                                </a>
                            </div>
                            <!--End Minicart-->
                        </div>
                        <!--End Right Icon-->
                    </div>
                </div>
            </div>
            <!--End Header inner-->
            <!--Navigation Desktop-->
            <div class="main-menu-outer d-none d-lg-block header-fixed">
                <div class="container container-1330">
                    <div class="menu-outer rounded-4">
                        <div class="row g-0">
                            <div class="col-1 col-sm-1 col-md-1 col-lg-3 align-self-center">
                                <div class="header-vertical-menu toggle">
                                    <h4 class="menu-title d-flex-center body-font"><i class="icon anm anm-bars-r"></i><span class="text">Browse Categories</span>
                                    </h4>
                                    <div class="vertical-menu-content rounded-4 rounded-top-0">
                                        <ul class="menuList">
                                            <li class="has-submenu"><a href="#" class="nav-link">Milks and Dairies</a>
                                                <ul class="megamenu d-flex rounded-4 rounded-start-0">
                                                    <li>
                                                        <h4 class="sub-menu-title">Vegetables</h4>
                                                        <ul>
                                                            <li><a href="shop-right-sidebar.html">New Arrivals</a></li>
                                                            <li><a href="shop-right-sidebar.html">Best Sellers</a></li>
                                                            <li><a href="shop-right-sidebar.html">Trending</a></li>
                                                            <li><a href="shop-right-sidebar.html">Beverages</a></li>
                                                            <li><a href="shop-right-sidebar.html">Spices</a></li>
                                                            <li><a href="shop-right-sidebar.html">Dry Fruits</a></li>
                                                            <li><a href="shop-right-sidebar.html">Seeds</a></li>
                                                            <li><a href="shop-right-sidebar.html">Fresh Fruit</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h4 class="sub-menu-title">Fresh Fruits</h4>
                                                        <ul>
                                                            <li><a href="shop-right-sidebar.html">Sheep milk</a></li>
                                                            <li><a href="shop-right-sidebar.html">Reindeer milk</a></li>
                                                            <li><a href="shop-right-sidebar.html">Sour cream</a></li>
                                                            <li><a href="shop-right-sidebar.html">Processed cheese</a>
                                                            </li>
                                                            <li><a href="shop-right-sidebar.html">Strained yogurt</a>
                                                            </li>
                                                            <li><a href="shop-right-sidebar.html">Vaccenic acid</a></li>
                                                            <li><a href="shop-right-sidebar.html">Whipped cream</a></li>
                                                            <li><a href="shop-right-sidebar.html">Whey protein</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="bannerImg p-0">
                                                        <a href="shop-left-sidebar.html"><img class="rounded-4 rounded-start-0 blur-up lazyload" data-src="{{asset('frontend/assests/images/megamenu/vertical-megamenu-banner4.jpg')}}'" src="{{asset('frontend/assests/images/megamenu/vertical-megamenu-banner4.jpg')}}" alt="banner" width="340" height="330" /></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu"><a href="#" class="nav-link">Vegetables</a>
                                                <ul class="megamenu type2 rounded-4 rounded-start-0">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="sub-menu-title">Accessories</h4>
                                                                <ul>
                                                                    <li><a href="shop-right-sidebar.html">Cream</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Butter</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Yayık
                                                                            ayranı</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Cheese</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Custard</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="sub-menu-title">Kalvdans</h4>
                                                                <ul>
                                                                    <li><a href="shop-right-sidebar.html">Buttermilk</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Chocolate</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Cream
                                                                            cheese</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Evaporated
                                                                            milk</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Eggnog</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="sub-menu-title">Haymilk</h4>
                                                                <ul>
                                                                    <li><a href="shop-right-sidebar.html">Fromage
                                                                            frais</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Frozen
                                                                            custard</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Frozen
                                                                            yogurt</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Goat milk</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Horse milk</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-6">
                                                                <h4 class="sub-menu-title">Malai Paneer</h4>
                                                                <ul>
                                                                    <li><a href="shop-right-sidebar.html">Malaiyo</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Matzoon</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Milk skin</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Mitha Dahi</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Powdered
                                                                            milk</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pt-0">
                                                        <div class="row row-cols-2">
                                                            <div class="banner-botm">
                                                                <a href="shop-left-sidebar.html"><img class="blur-up lazyload" data-src="{{asset('frontend/assests/images/megamenu/vertical-megamenu-banner5.jpg')}}" src="{{asset('frontend/assests/images/megamenu/vertical-megamenu-banner5.jpg')}}" alt="banner" width="368" height="138" /></a>
                                                            </div>
                                                            <div class="banner-botm">
                                                                <a href="shop-left-sidebar.html"><img class="blur-up lazyload" data-src="{{asset('frontend/assests/images/megamenu/vertical-megamenu-banner6.jpg')}}" src="{{asset('frontend/assests/images/megamenu/vertical-megamenu-banner6.jpg')}}" alt="banner" width="368" height="138" /></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu dropdown-in"><a href="#" class="nav-link">Organic
                                                    product</a>
                                                <ul class="dropdown sub-level1 rounded-4 rounded-start-0">
                                                    <li><a href="#;">Accessories</a></li>
                                                    <li class="sub-menu"><a href="#;">Fruit Bars</a>
                                                        <ul class="dropdown sub-level2 rounded-4 rounded-start-0">
                                                            <li><a href="#;">Puffed Snacks</a></li>
                                                            <li><a href="#;">Coconut Water</a></li>
                                                            <li><a href="#;">Freeze Dried</a></li>
                                                            <li><a href="#;">Gluten Cookies</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#;">Fizzy Drinks</a></li>
                                                    <li><a href="#;">Beverages</a></li>
                                                    <li><a href="#;">Fruit Juices</a></li>
                                                    <li><a href="#;">Energy Drinks</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="nav-link">Cosmetics &amp; Beauty</a></li>
                                            <li><a href="#" class="nav-link">Digital Camera</a></li>
                                            <li><a href="#" class="nav-link">Smart Phones</a></li>
                                            <li><a href="#" class="nav-link">Furniture</a></li>
                                            <li><a href="#" class="nav-link">Toys &amp; Game</a></li>
                                            <li><a href="#" class="nav-link">Health &amp; Beauty</a></li>
                                            <li><a href="#" class="nav-link">Gift Ideas</a></li>
                                            <li><a href="#" class="nav-link">Health Care</a></li>
                                            <li>
                                                <ul class="moreSlideOpen">
                                                    <li><a href="#" class="nav-link">Watches</a></li>
                                                    <li><a href="#" class="nav-link">Shoes</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="moreCategories border-0">View All Categories</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 col-sm-1 col-md-1 col-lg-7 align-self-center d-menu-col hdr-menu-left menu-position-left">
                                <nav class="navigation ps-lg-3" id="AccessibleNav">
                                    <ul id="siteNav" class="site-nav medium left">
                                        <li class="lvl1 parent dropdown">
                                            <a href="{{route('Home')}}">Home</a>
                                        </li>
                                        <li class="lvl1 parent megamenu">
                                            <a href="{{route('Shop')}}">Shop</a>
                                        </li>
                                        <li class="lvl1 parent megamenu">
                                            <a href="#">About</a>
                                        </li>
                                        <li class="lvl1 parent dropdown">
                                            <a href="#">Blog</a>
                                        </li>
                                        <li class="lvl1 parent dropdown">
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-1 col-sm-1 col-md-1 col-lg-2 align-self-center text-right">
                                <a href="#" class="store-link text-uppercase">Super Discount <img class="ms-1" src="{{asset('frontend/assests/images/icons/go-shape.png')}}" alt="icon" width="38" height="38" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Navigation Desktop-->
        </header>
        <!--End Header-->

        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper mobileMenu-bg-black" role="navigation">
            <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent dropdown"><a href="#">Browse Categories <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-2">
                        <li><a href="#" class="site-nav">Jewellery <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="lvl-3 dropdown">
                                <li><a href="#" class="site-nav">Diamonds Jewelry <i class="icon anm anm-angle-down-l"></i></a>
                                    <ul class="lvl-4 dropdown">
                                        <li><a href="shop-right-sidebar.html" class="site-nav">New Arrivals</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Best Sellers</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Trending</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Necklaces</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Engagement ring</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Gospel bracelet</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Rosary beads</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav last">Puzzle jewelry</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#" class="site-nav">Diamonds Jewelry <i class="icon anm anm-angle-down-l"></i></a>
                                    <ul class="lvl-4 dropdown">
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Belly chain</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Chatelaine</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Slave bracelet</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Breastplate</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Diamonds</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Perfect rings</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav">Accessories</a></li>
                                        <li><a href="shop-right-sidebar.html" class="site-nav last">Prayer jewelry</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Fashion <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="lvl-3 dropdown">
                                <li><a href="#" class="site-nav">Accessories <i class="icon anm anm-angle-down-l"></i></a>
                                    <ul class="lvl-4 dropdown">
                                        <li><a href="shop-right-sidebar.html">Jackets</a></li>
                                        <li><a href="shop-right-sidebar.html">Dresses</a></li>
                                        <li><a href="shop-right-sidebar.html">Blouses & Tops</a></li>
                                        <li><a href="shop-right-sidebar.html">Skirts</a></li>
                                        <li><a href="shop-right-sidebar.html">Outerwear</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="site-nav">Pullovers <i class="icon anm anm-angle-down-l"></i></a>
                                    <ul class="lvl-4 dropdown">
                                        <li><a href="shop-right-sidebar.html">Pants &amp; Shorts</a></li>
                                        <li><a href="shop-right-sidebar.html">Outerwear</a></li>
                                        <li><a href="shop-right-sidebar.html">Skirts</a></li>
                                        <li><a href="shop-right-sidebar.html">Blouses</a></li>
                                        <li><a href="shop-right-sidebar.html">Dresses</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="site-nav">Handbags <i class="icon anm anm-angle-down-l"></i></a>
                                    <ul class="lvl-4 dropdown">
                                        <li><a href="shop-right-sidebar.html">Jeans</a></li>
                                        <li><a href="shop-right-sidebar.html">Blazers</a></li>
                                        <li><a href="shop-right-sidebar.html">Bracelet</a></li>
                                        <li><a href="shop-right-sidebar.html">Bedding Set</a></li>
                                        <li><a href="shop-right-sidebar.html">Bodysuit</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="site-nav">Dress Material <i class="icon anm anm-angle-down-l"></i></a>
                                    <ul class="lvl-4 dropdown">
                                        <li><a href="shop-right-sidebar.html">Dupatta</a></li>
                                        <li><a href="shop-right-sidebar.html">Doormats</a></li>
                                        <li><a href="shop-right-sidebar.html">Diwan Set</a></li>
                                        <li><a href="shop-right-sidebar.html">Dhotis</a></li>
                                        <li><a href="shop-right-sidebar.html">Face Towels</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Electronics <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="lvl-3 dropdown">
                                <li><a href="shop-right-sidebar.html">Accessories</a></li>
                                <li><a href="#" class="site-nav">Footwear <i class="icon anm anm-angle-down-l"></i></a>
                                    <ul class="lvl-4 dropdown">
                                        <li><a href="shop-right-sidebar.html">Backpacks</a></li>
                                        <li><a href="shop-right-sidebar.html">Wallets</a></li>
                                        <li><a href="shop-right-sidebar.html">Belts</a></li>
                                        <li><a href="shop-right-sidebar.html">Sunglasses</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-right-sidebar.html">Bottom wear</a></li>
                                <li><a href="shop-right-sidebar.html">Cargos</a></li>
                                <li><a href="shop-right-sidebar.html">Track pants</a></li>
                                <li><a href="shop-right-sidebar.html">Winter wear</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Cosmetics &amp; Beauty</a></li>
                        <li><a href="#" class="site-nav">Digital Camera</a></li>
                        <li><a href="#" class="site-nav">Smart Phones</a></li>
                        <li><a href="#" class="site-nav">Furniture</a></li>
                        <li><a href="#" class="site-nav">Toys &amp; Game</a></li>
                        <li><a href="#" class="site-nav">Health &amp; Beauty</a></li>
                        <li><a href="#" class="site-nav">Gift Ideas</a></li>
                        <li><a href="#" class="site-nav">Health Care</a></li>
                        <li><a href="#" class="site-nav">Watches</a></li>
                        <li><a href="#" class="site-nav last">Shoes</a></li>
                    </ul>
                </li>

                <li class="lvl1 parent dropdown"><a href="#">Home</a>
                </li>
                <li class="lvl1 parent megamenu"><a href="">Shop</a>
                </li>
                <li class="lvl1 parent megamenu"><a href="product-layout1.html">About</a>
                </li>
                <li class="lvl1 parent dropdown"><a href="#;">Blog</a>
                </li>
                <li class="lvl1 parent dropdown"><a href="#">Contact</a>
                </li>

                <li class="mobile-menu-bottom">
                    <div class="mobile-links">
                        <ul class="list-inline d-inline-flex flex-column w-100">
                            <li><a href="" class="d-flex align-items-center"><i class="icon anm anm-sign-in-al"></i>Sign
                                    In</a></li>
                            <li><a href="" class="d-flex align-items-center"><i class="icon anm anm-user-al"></i>Register</a></li>
                            <li><a href="" class="d-flex align-items-center"><i class="icon anm anm-user-cil"></i>My
                                    Account</a></li>
                            <li class="title h5">Need Help?</li>
                            <li><a href="tel:+94741792020" class="d-flex align-items-center"><i class="icon anm anm-phone-l"></i>+94741792020</a></li>
                            <li><a href="mailto:info@example.com" class="d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> info@grabandgo.lk</a></li>
                        </ul>
                    </div>
                    <div class="mobile-follow mt-2">
                        <h5 class="title">Follow Us</h5>
                        <ul class="list-inline social-icons d-inline-flex mt-1">
                            <li class="list-inline-item"><a href="#" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--MiniCart Drawer-->
        <div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
            <!--MiniCart Empty-->
            <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                <div class="minicart-header d-flex-center justify-content-between w-100">
                    <h4 class="fs-6 body-font">Your cart (0 Items)</h4>
                    <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                </div>
                <div class="cartEmpty-content mt-4">
                    <i class="icon anm anm-basket-l fs-1 text-muted"></i>
                    <p class="my-3">No Products in the Cart</p>
                    <a href="index.html" class="btn btn-primary cart-btn">Continue shopping</a>
                </div>
            </div>
            <!--End MiniCart Empty-->

            <!--MiniCart Content-->
            <div id="cart-drawer" class="block block-cart">
                <div class="minicart-header">
                    <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                    <h4 class="fs-6 body-font">Your cart (2 Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="m-0 clearfix">
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image rounded-4" href="">
                                
                                
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="">{{ $details['product_name'] }}</a>
                                <!-- <div class="variant-cart my-2">Black / XL</div> -->
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="price">${{ $details['price'] }}</span> * <span class="count"> Quantity: {{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="qtyDetail text-center">
                                <div class="qtyField">
                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                    <input type="text" name="quantity" value="1" class="qty rounded-pill">
                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove "><i class="icon anm anm-times-r cart_remove" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                            </div> -->
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <div class="shipinfo">
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span class="money" data-currency-usd="LKR 199.00" data-currency="USD">LKR 199.00</span> away from
                            <b>Free Shipping</b>
                        </div>
                        <div class="freeShipMsg d-none"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for
                            <b>Free Shipping</b>
                        </div>
                    </div>
                    <div class="subtotal clearfix my-3">
                        <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span class="item product-price">LKR 10.00</span></div>
                        <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span class="item product-price">LKR 0.00</span></div>
                        @php $total = 0
                        @endphp
                        @foreach((array) session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="totalInfo clearfix"><span>Total:</span><span class="item product-price">$ {{ $total }}</span></div>

                    </div>
                    <div class="agree-check customCheckbox">
                        <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                        <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp;
                            conditions</a>
                    </div>
                    <div class="minicart-action d-flex mt-3">
                        <a href="" class="proceed-to-checkout btn btn-outline-secondary rounded-pill w-50 me-1">Check Out</a>
                        <a href="{{route('cart')}}" class="cart-btn btn btn-outline-primary rounded-pill w-50 ms-1">View Cart</a>
                    </div>
                </div>
            </div>
            <!--MiniCart Content-->
        </div>
        <!--End MiniCart Drawer-->