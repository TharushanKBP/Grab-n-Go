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
                        <h1>Login</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>My Account</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Login</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <div class="login-register pt-2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="inner h-100">

                        <form method="POST" action="{{ route('login.submit') }}" class="customer-form">
                            <h2 class="text-center fs-4 mb-3">Sign In</h2>
                            <p class="text-center mb-4">If you have an account with us, please log in.</p>
                            <div class="form-row">
                                @csrf
                                <div class="form-group col-12">
                                    <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required autocomplete="email" autofocus>
                                </div>
                                <div class="form-group col-12">
                                    <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                    <input type="text" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="current-password">
                                </div>
                                <div class="form-group col-12">
                                    <div class="login-remember-forgot d-flex justify-content-between align-items-center">
                                        <div class="remember-check customCheckbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                        </div>
                                        <a href="">Forgot your password?</a>
                                    </div>
                                </div>
                                <div class="form-group col-12 mb-0">
                                    <input type="submit" class="btn btn-primary btn-lg w-100" value="Sign In" />
                                </div>

                            </div>

                            <div class="login-divide"><span class="login-divide-text">OR</span></div>

                            <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Don,t have an account?
                                <a href="{{route('user.authregister')}}" class="btn-link">Sign up now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->

@endsection