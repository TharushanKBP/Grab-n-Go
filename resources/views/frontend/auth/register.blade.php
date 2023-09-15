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
                        <h1>Create an Account</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>My Account</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Create an
                            Account</span></div>
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
                        <form method="POST" action="{{ route('register.submit') }}" class="customer-form">
                            <h2 class="text-center fs-4 mb-4">Sign Up</h2>
                            {{@csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="CustomerUsername" class="d-none">Username <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Enter your User Name">
                                </div>
                                <div class="form-group col-12">
                                    <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-12">
                                    <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                    <input type="password" class="form-control" id="password" placeholder="Create Password" name="password">
                                </div>
                                <div class="form-group col-12">
                                    <label for="CustomerConfirmPassword" class="d-none">Confirm Password <span class="required">*</span></label>
                                    <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="password_confirmation">
                                </div>
                                <div class="form-group col-12">
                                    <div class="login-remember-forgot d-flex justify-content-between align-items-center">
                                        <div class="agree-check customCheckbox">
                                            <input id="agree" name="agree" type="checkbox" value="agree" required />
                                            <label for="agree"> I agree to terms & Privacy Policy.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12 mb-0">
                                    <input type="submit" class="btn btn-primary btn-lg w-100" value="Register" />
                                </div>
                            </div>

                            <div class="login-divide"><span class="login-divide-text">OR</span></div>

                            <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">Already have an
                                account? <a href="{{route('user.authlogin')}}" class="btn-link">Login now</a></div>
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