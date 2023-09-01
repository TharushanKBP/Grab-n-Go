<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('frontend/assests/css/login_style.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/376e5f6ada.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="container">

        <div class="from-box">

            <img src="{{asset('frontend/assests/images/site-logo.png')}}" class="logo">

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email / Username" required autocomplete="email" autofocus>
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

            <from action="#" method="post">

                <img src="{{asset('frontend/assests/images/site-logo.png')}}" class="logo">


                <div class="input-group">

                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="Enter you name" required />
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter you email" required />
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Create password" required />
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="confirm_password" placeholder="Confirm password" required />
                    </div>

                    <button class="button">Signup</button>

                    <div class="login_signup">
                        Already have an account? <a href="#" id="login">Login</a>

                    </div>

                </div>

            </from>
        </div>

    </section>

</body>

<script src="{{asset('frontend/assests/js/script.js')}}"></script>

</html>