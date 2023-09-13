@extends('frontend.layouts.master')

@section('content')

<main>
    <div class="main-content">

        <div class="container">
            <div class="row">
                <div class="flex3">
                    <div id="slideshow" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                        <div class="carousel-inner">

                            @if(count($banner)>0)

                            @foreach($banner as $banner)

                            <!-- Slide 1 -->
                            <div class="carousel-item active slide-item" style="background-image: url({{$banner->photo}});">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 slide-content">
                                            <div class="inner-content">
                                                <h2>{{$banner->title}}</h2>
                                                <p>{!! html_entity_decode($banner->description)!!}</p>
                                                <button class="btn btn-primary">Shop Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            @endif

                            <!-- Add more slides as needed -->
                        </div>

                        <!-- <ol class="carousel-indicators">
                            <li data-bs-target="#slideshow" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#slideshow" data-bs-slide-to="1"></li> -->
                        <!-- Add more navigation dots as needed -->
                        <!-- </ol> -->
                    </div>
                </div>


                @if(count($banners)>0)

                @foreach($banners as $banners)

                <div class="flex2">
                    <div class="hero-promo" style="background-image: url({{$banners->photo}});">
                        <div class="inner-content-hero">
                            <span>{!! html_entity_decode($banners->description)!!}</span>
                            <h2>{{$banners->title}}</h2>
                            <button class="btn btn-primary">15% OFF</button>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif


            </div>
        </div>
    </div>

    @include('frontend.pages.category-slider')
    @include('frontend.pages.product-slider')
    @include('frontend.pages.hot-offers')

</main>

@endsection