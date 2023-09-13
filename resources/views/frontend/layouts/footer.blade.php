<footer>
    <div class="up-row">
        <div class="container">
            <div class="row">
                <!-- Icon Box 1 -->
                <div class="col-3">
                    <div class="icon-box">
                        <i class="fas fa-truck-fast"></i>
                        <div class="icon-headings">
                            <h5>Free Shipping</h5>
                            <h6>For orders above 25,000/=</h6>
                        </div>
                    </div>
                </div>
                <!-- Icon Box 2 -->
                <div class="col-3">
                    <div class="icon-box">
                        <i class="fas fa-money-check-dollar"></i>
                        <div class="icon-headings">
                            <h5>Money Guarantee</h5>
                            <h6>30 days money back</h6>
                        </div>
                    </div>
                </div>
                <!-- Icon Box 3 -->
                <div class="col-3">
                    <div class="icon-box">
                        <i class="fas fa-headphones-simple"></i>
                        <div class="icon-headings">
                            <h5>24/7 Support</h5>
                            <h6>Friendly 24/7 support</h6>
                        </div>
                    </div>
                </div>
                <!-- Icon Box 4 -->
                <div class="col-3">
                    <div class="icon-box">
                        <i class="fas fa-credit-card"></i>
                        <div class="icon-headings">
                            <h5>Secure Payment</h5>
                            <h6>All cards accepted</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-row">
        <div class="container">
            <div class="row">
                <!-- First Column -->
                <div class="col-2 logo-group">
                    <!-- Site Logo -->
                    <img src="{{asset('frontend/assests/images/site-logo.png')}}" alt="Logo" class="site-logo">
                    <!-- Small Description -->
                    <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Duis bibend um orci non urna tempor, vitae</p>
                    <!-- Social Media Icons -->
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Middle Column (50%) -->
                <div class="col-6 middle-column">
                    <!-- First Vertical Navigation Menu -->
                    <ul class="nav flex-column">
                        <li class="nav-item main-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Computers</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Groceries</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Clothes</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Books</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                        <!-- Add more menu items as needed -->
                    </ul>

                    <!-- Second Vertical Navigation Menu -->
                    <ul class="nav flex-column">
                        <li class="nav-item main-item">
                            <a class="nav-link" href="#">Sitemap</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Warranty Claims</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Delivery Policy</a>
                        </li>
                        <!-- Add more menu items as needed -->
                    </ul>

                    <!-- Third Vertical Navigation Menu -->
                    <ul class="nav flex-column">
                        <li class="nav-item main-item">
                            <a class="nav-link" href="#">Company</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">T & C</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Our Team</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Media Kit</a>
                        </li>
                        <li class="nav-item menu-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <!-- Add more menu items as needed -->
                    </ul>
                </div>

                <!-- Last Column -->
                <div class="col-2 newsletter-group">
                    <!-- Newsletter Form -->
                    <h5>Subscribe Us</h5>
                    <h6>Receive discounts, offers and news for free</h6>
                    <form action="#" method="post" class="newsletter-form">
                        <input type="email" name="email" placeholder="Your email here..." required class="input-style-newsletter">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/376e5f6ada.js" crossorigin="anonymous"></script>


<script src="{{asset('frontend/assests/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assests/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assests/js/product-slider.js')}}"></script>
<script src="{{asset('frontend/assests/js/productinfor.js')}}"></script>
<script src="{{asset('frontend/assests/js/bootstrap.min.js')}}"></script>

@stack('scripts')
<script>
    setTimeout(function() {
        $('.alert').slideUp();
    }, 4000);
    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
            event.preventDefault();
            event.stopPropagation();

            $(this).siblings().toggleClass("show");


            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

        });
    });
</script>