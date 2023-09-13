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


            <!-- User_Profile -->
            <div class="account-area">
                <div class="user-thumbnail">
                    <img src="{{asset('frontend/assests/images/PT.jpeg')}}" alt="">
                </div>
                <ul class="user-meta-dropdown">
                    @auth
                    <li class="user-title"><span>Hello,</span> Pasindu</li>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="order-list.html">Orders List</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="{{route('user.logout')}}"><i class="icofont-logout"></i> Logout</a></li>
                    @else
                    <li><a href="{{route('user.auth')}}"></li>Login & Register</li>
                    @endauth
                </ul>
            </div>

            <!-- Wishlist -->
            <div class="wishlist-area">
                <a href="wishlist.html" class="wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
            </div>



            <div class="cart-area">
                <div class="cart--btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="cart_quantity">{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()}}</span>
                </div>

                <!-- Cart Dropdown Content -->
                <div class="cart-dropdown-content">
                    <ul class="cart-list">

                        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $product)
                        <li>
                            <div class="cart-item-desc">
                                <a href="#" class="image">
                                    <img src="{{$product->model->photo}}" class="cart-thumb" alt="">
                                </a>
                                <div>
                                    <a href="{{route('SingleProduct',$product->model->slug)}}">{{$product->name}}</a>
                                    <p>{{$product->qty}} x - <span class="price">LKR {{number_format($product->price,2)}}</span></p>
                                </div>
                            </div>
                            <span class="dropdown-product-remove"><i class="fa fa-bitbucket" aria-hidden="true"></i></span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="cart-pricing my-4">
                        <ul>
                            <li>
                                <span>Sub Total:</span>
                                <span>LKR{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span>
                            </li>
                            <!-- <li>
                                <span>Shipping:</span>
                                <span>$30.00</span>
                            </li> -->
                            <li>
                                <span>Total:</span>
                                <span>LKR{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-box">
                        <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                    </div>
                </div>
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