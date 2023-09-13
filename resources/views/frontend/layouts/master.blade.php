@include('frontend.layouts.head')

<header id="header-ajax">
    @include('frontend.layouts.header')
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('frontend.layouts.notification')
        </div>
    </div>
</div>

@yield('content')


@include('frontend.layouts.footer')