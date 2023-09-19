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
                        <h1>Shop</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <!--Category Slider-->
        <div class="collection-slider-6items gp10 slick-arrow-dots sub-collection section pt-0">

        </div>
        <!--End Category Slider-->
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                <div class="closeFilter d-block d-lg-none"><i class="icon anm anm-times-r"></i></div>
                <div class="sidebar-tags sidebar-sticky clearfix">
                    <!--Filter By-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Filter By</h2>
                        </div>
                        <div class="widget-content filterby filterDD">
                            <ul class="items tags-list d-flex-wrap">
                                <li class="item"><a href="#;" class="rounded-5"><span class="filter-value">Women</span><i class="icon anm anm-times-r"></i></a>
                                </li>
                                <li class="item"><a href="#;" class="rounded-5"><span class="filter-value">Blue</span><i class="icon anm anm-times-r"></i></a></li>
                                <li class="item"><a href="#;" class="rounded-5"><span class="filter-value">XL</span><i class="icon anm anm-times-r"></i></a></li>
                            </ul>
                            <a href="#;" class="btn btn-sm brd-link">Clear All</a>
                        </div>
                    </div>
                    <!--End Filter By-->
                    <!--Categories-->
                    <div class="sidebar-widget clearfix categories filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Categories</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="sidebar-categories scrollspy morelist clearfix">
                                <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Clothing</a>
                                    <ul class="sublinks">
                                        <li class="lvl2 sub-level sub-sub-level"><a href="#;" class="site-nav">Men</a>
                                            <ul class="sublinks">
                                                <li class="lvl3"><a href="#" class="site-nav">Shirt <span class="count">(25)</span></a></li>
                                                <li class="lvl3"><a href="#" class="site-nav">Jeans <span class="count">(6)</span></a></li>
                                                <li class="lvl3"><a href="#" class="site-nav">Shoes <span class="count">(9)</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl2"><a href="#" class="site-nav">Women <span class="count">(14)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">Child <span class="count">(26)</span></a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Jewellery</a>
                                    <ul class="sublinks">
                                        <li class="lvl2"><a href="#" class="site-nav">Ring <span class="count">(12)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">Neckalses <span class="count">(15)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">Eaarings <span class="count">(18)</span></a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Accessories <span class="count">(14)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Shoes <span class="count">(18)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Electronic <span class="count">(22)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Cosmetics <span class="count">(27)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form class="widget-content price-filter filterDD" action="#" method="post">
                            <div id="slider-range" class="mt-2"></div>
                            <div class="row">
                                <div class="col-6"><input id="amount" type="text" /></div>
                                <div class="col-6 text-right"><button class="btn btn-sm">filter</button></div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Color Swatches-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Color</h2>
                        </div>
                        <div class="widget-content filter-color filterDD">
                            <ul class="swacth-list swatches d-flex-center clearfix pt-0">
                                <li class="swatch large radius available active"><img src="assests/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" />
                                </li>
                                <li class="swatch large radius available"><img src="assests/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" />
                                </li>
                                <li class="swatch large radius available"><img src="assests/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" />
                                </li>
                                <li class="swatch large radius available"><img src="assests/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Red" /></li>
                                <li class="swatch large radius available black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span></li>
                                <li class="swatch large radius available red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Red"></span></li>
                                <li class="swatch large radius available blue"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span></li>
                                <li class="swatch large radius available pink"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink"></span></li>
                                <li class="swatch large radius available gray"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray"></span></li>
                                <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                <li class="swatch large radius available orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Orange"></span></li>
                                <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Size Swatches-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Size</h2>
                        </div>
                        <div class="widget-content filter-size filterDD">
                            <ul class="swacth-list size-swatches d-flex-center clearfix">
                                <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="X">X</span></li>
                                <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XLL">XLL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XXL">XXL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="25">25</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="35">35</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Product Brands-->
                    <div class="sidebar-widget filterBox filter-widget brand-filter">
                        <div class="widget-title">
                            <h2>Brands</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="avone" id="avone"><label for="avone"><span></span>Avone</label></li>
                                <li><input type="checkbox" value="diva" id="diva"><label for="diva"><span></span>Diva</label></li>
                                <li><input type="checkbox" value="optimal" id="optimal"><label for="optimal"><span></span>Optimal</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Product Brands-->
                    <!--Product Tags-->
                    <div class="sidebar-widget filterBox filter-widget product-tag">
                        <div class="widget-title">
                            <h2>Product Tags</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="tags-list product-tags d-flex-wrap clearfix">
                                <li class="item active"><a class="rounded-5" href="#">Women</a></li>
                                <li class="item"><a class="rounded-5" href="#">Shoes</a></li>
                                <li class="item"><a class="rounded-5" href="#">Beauty</a></li>
                                <li class="item"><a class="rounded-5" href="#">Accessories</a></li>
                                <li class="item"><a class="rounded-5" href="#">$100 - $400</a></li>
                                <li class="item"><a class="rounded-5" href="#">Above $800</a></li>
                                <li class="item"><a class="rounded-5" href="#">Black</a></li>
                                <li class="item"><a class="rounded-5" href="#">Blue</a></li>
                                <li class="item"><a class="rounded-5" href="#">Red</a></li>
                                <li class="item"><a class="rounded-5" href="#">M</a></li>
                                <li class="item"><a class="rounded-5" href="#">XS</a></li>
                            </ul>
                            <span class="btn btn-sm brd-link btnview">View all</span>
                        </div>
                    </div>
                    <!--End Product Tags-->
                    <!--Banner-->
                    <div class="sidebar-widget static-banner p-0">
                        <a href=""><img class="rounded-0 blur-up lazyload" data-src="assests/images/banners/shop-banner.jpg" src="assests/images/banners/shop-banner.jpg" alt="image" width="274" height="367"></a>
                    </div>
                    <!--End Banner-->
                </div>
            </div>
            <!--End Sidebar-->

            <!--Products-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                <!--Toolbar-->
                <div class="toolbar toolbar-wrapper shop-toolbar">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                            <button type="button" class="btn btn-filter icon anm anm-sliders-hr d-inline-flex d-lg-none me-2"><span class="d-none">Filter</span></button>
                            <div class="filters-item d-flex align-items-center">
                                <label class="mb-0 me-2 d-none d-lg-inline-block">View as:</label>
                                <div class="grid-options view-mode d-flex">
                                    <a class="icon-mode mode-list d-block" data-col="1"></a>
                                    <a class="icon-mode mode-grid grid-2 d-block" data-col="2"></a>
                                    <a class="icon-mode mode-grid grid-3 d-md-block" data-col="3"></a>
                                    <a class="icon-mode mode-grid grid-4 d-lg-block active" data-col="4"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center product-count order-0 order-md-1 mb-3 mb-sm-0">
                            <span class="toolbar-product-count">Showing: 15 products</span>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                            <div class="filters-item d-flex align-items-center">
                                <label for="ShowBy" class="mb-0 me-2 text-nowrap d-none d-sm-inline-flex">Show:</label>
                                <select name="ShowBy" id="ShowBy" class="filters-toolbar-show">
                                    <option value="title-ascending" selected="selected">10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>30</option>
                                </select>
                            </div>
                            <div class="filters-item d-flex align-items-center ms-2 ms-lg-3">
                                <label for="SortBy" class="mb-0 me-2 text-nowrap d-none">Sort by:</label>
                                <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                    <option value="featured" selected="selected">Featured</option>
                                    <option value="best-selling">Best selling</option>
                                    <option value="title-ascending">Alphabetically, A-Z</option>
                                    <option value="title-descending">Alphabetically, Z-A</option>
                                    <option value="price-ascending">Price, low to high</option>
                                    <option value="price-descending">Price, high to low</option>
                                    <option value="created-ascending">Date, old to new</option>
                                    <option value="created-descending">Date, new to old</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Toolbar-->

                <!--Product Grid-->
                <div class="grid-products grid-view-items">
                    <div class="row col-row product-options row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">

                    </div>

                    <!-- Pagination -->
                    <nav class="clearfix pagination-bottom">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#"><i class="icon anm anm-angle-left-l"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon anm anm-angle-right-l"></i></a></li>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                </div>
                <!--End Product Grid-->
            </div>
            <!--End Products-->
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->

@endsection