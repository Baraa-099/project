<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="container">

    <!-- Left Section -->
    <div class="left">
        <div class="overlay">
            <h1>Welcome Back</h1>
            <p>Access your property portfolio and manage your listings with ease.</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="right">
        <div class="form-box">

            <h2 style="font-size: 30px">Log In</h2>
            <p class="subtitle">Enter your credentials to access your account</p>

@if ($errors->any())
    <div id="login-error" style="
        background:#ffe5e5;
        color:#b30000;
        padding:12px;
        border-radius:6px;
        margin-bottom:15px;
        font-size:14px;
        text-align:center;
    ">

        email dosnt exisit
    </div>
@endif





            {{-- Laravel Login Form --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label>Email Address</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >

                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    required
                >

                <div class="options">
                   <p></p>
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                </div>

                <button type="submit">Sign In</button>
            </form>

            <p class="register">
                Don't have an account?
                <a href="{{ route('register') }}">Register Now</a>
            </p>
        </div>
    </div>

</div>
<script>
    setTimeout(() => {
        const alert = document.getElementById('login-error');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000);
</script>

</body>
</html>
