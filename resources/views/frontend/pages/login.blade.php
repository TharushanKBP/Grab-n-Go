<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('frontend/assests/css/login_style.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/376e5f6ada.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="container" style="background-image:  linear-gradient(rgba(247, 189, 1, 0.377),rgba(248, 170, 0, 0.288)), url('frontend/assests/images/background.JPG');">
        <div class="from-box">

            <from action="#">

                <img src="{{asset('frontend/assests/images/site-logo.png')}}" class="logo">


                <div class="input-group">

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email / Username">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="text" placeholder="Password">
                    </div>

                    <div class="option-field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember Me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>

                    <button class="button" id="from-open">Login</button>

                    <div class="login_signup">
                        Register for an account? <a href="#" id="signup">Signup</a>

                    </div>

                </div>

            </from>
        </div>

        <div class="from-signup-box">

            <from action="#">

                <img src="{{asset('frontend/assests/images/site-logo.png')}}" class="logo">


                <div class="input-group">

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Enter you email" required />
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="text" placeholder="Create password" required />
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="tezxt" placeholder="Confirm password" required />
                    </div>

                    <button class="button">Signup</button>

                    <div class="login_signup">
                        Already have an account? <a href="#" id="login">Login</a>

                    </div>

                </div>

            </from>
        </div>

    </section>

    <script src="{{asset('frontend/assests/js/script.js')}}"></script>

</body>


</html>