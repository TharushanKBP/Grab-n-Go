<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}"> -->

    <link href="{{asset('frontend/assests/css/login_style.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/376e5f6ada.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="container">

        <img src="{{asset('frontend/assests/images/background.JPG')}}" class="container">


        <div class="from-box">

            <img src="{{asset('frontend/assests/images/site-logo.png')}}" class="logo">

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email / name" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="option-field">
                    <span class="checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </span>
                    <a href="#" class="forgot_pw">Forgot password?</a>
                </div>

                <button class="button" id="from-open">Login</button>

                <div class="login_signup">
                    Register for an account? <a href="#" id="signup">Signup</a>

                </div>

            </form>

        </div>

        <div class="from-signup-box">

            <img src="{{asset('frontend/assests/images/site-logo.png')}}" class="logo">

            <form method="POST" action="{{ route('register.submit') }}">
                {{@csrf_field()}}

                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Enter your Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" class="form-control" id="password" placeholder="Create Password" name="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="password_confirmation">


                </div>

                <button class="button">Signup</button>

                <div class="login_signup">
                    Already have an account? <a href="#" id="login">Login</a>

                </div>

                </from>
        </div>

    </section>

</body>

<script src="{{asset('frontend/assests/js/script.js')}}"></script>

</html>