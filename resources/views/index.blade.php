<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign in/up</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="register-form">
                @csrf
                <h1>Create Account</h1>
                <input type="text" name="name-register" placeholder="Name" id="name-register" />
                <input type="email" name="email-register" placeholder="Email" id="email-register" />
                <input type="password" name="password-register" placeholder="Password" id="password-register" />
                <button id="register">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form id="login-form">
                @csrf
                <h1>Sign in</h1>
                <input type="email" name="email-login" placeholder="Email" id="email-login" />
                <input type="password" name="password-login" placeholder="Password" id="password-login" />
                <button id="login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>