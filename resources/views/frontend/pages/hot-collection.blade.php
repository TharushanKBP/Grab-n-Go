<!--Products With Tabs-->
<section class="section product-slider tab-slider-product">
    <div class="container container-1330">
        <div class="section-header">
            <h2>Our Best Products</h2>
        </div>

        <div class="tabs-listing">
            <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase active body-font" id="fruits-tab" data-bs-toggle="tab" data-bs-target="#fruits" type="button" role="tab" aria-controls="fruits" aria-selected="true">Electronics</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase body-font" id="vegetables-tab" data-bs-toggle="tab" data-bs-target="#vegetables" type="button" role="tab" aria-controls="vegetables" aria-selected="false">Clothes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase body-font" id="dryfruits-tab" data-bs-toggle="tab" data-bs-target="#dryfruits" type="button" role="tab" aria-controls="dryfruits" aria-selected="false">Groceries</button>
                </li>
            </ul>

            <div class="tab-content" id="productTabsContent">
                <div class="tab-pane show active" id="fruits" role="tabpanel" aria-labelledby="fruits-tab">
                    <!--Product Grid-->
                    <div class="grid-view-items">
                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">

                            @if(count($product)>0)

                            @foreach($product as $product)
                            <div class="item col-item">
                                @include('frontend.pages.product-loop-item')
                            </div>

                            @endforeach
                            @endif


                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="" class="btn btn-primary btn-lg rounded-pill">Load more</a>
                        </div>
                    </div>
                    <!--End Product Grid-->
                </div>

                <div class="tab-pane" id="vegetables" role="tabpanel" aria-labelledby="vegetables-tab">
                    <!--Product Grid-->
                    <div class="grid-view-items">
                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                            <?php
                            for ($i = 0; $i < 4; $i++) {
                                echo '<div class="item col-item">';
                                @include('frontend.pages.product-loop-item');
                                echo '</div>';
                            }
                            ?>
                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="" class="btn btn-primary btn-lg rounded-pill">Load more
                                Products</a>
                        </div>
                    </div>
                    <!--End Product Grid-->
                </div>

                <div class="tab-pane" id="dryfruits" role="tabpanel" aria-labelledby="dryfruits-tab">
                    <!--Product Grid-->
                    <div class="grid-view-items">
                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                            <?php
                            for ($i = 0; $i < 4; $i++) {
                                echo '<div class="item col-item">';
                                @include('frontend.pages.product-loop-item');
                                echo '</div>';
                            }
                            ?>
                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="" class="btn btn-primary btn-lg rounded-pill">Load more
                                Products</a>
                        </div>
                    </div>
                    <!--End Product Grid-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Products With Tabs-->