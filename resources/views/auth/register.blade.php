
{{-- 00000000000000000000000000000000000000000000000000 --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rigister</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="container">

    <!-- Left Section -->
    <div class="left">
        <div class="overlay">
            <h1>Hi</h1>
            <p>Access your property portfolio and manage your listings with ease.</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="right">
        <div class="form-box">

            <h2 style="font-size: 30px">Register</h2>
            <p class="subtitle">Enter your credentials to access your account</p>


@if ($errors->any())
    <div  id="error-alert" style="
        background:#ffe5e5;
        color:#b30000;
        padding:12px;
        border-radius:6px;
        margin-bottom:15px;
        font-size:14px;
    ">
        {{ $errors->first() }}
    </div>
@endif




            {{-- Laravel Login Form --}}
 <form method="POST" action="{{ route('register') }}">
             @csrf



                <label>Name</label>
                <input
                    type="text"
                    name="name"
                    placeholder="name"
                    required
                >
                <label>Email Address</label>
                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    required
                >

                <label>Password</label>
                <input
                    type="password"
                    name="password"

                    placeholder="Password"
                    required
                >
                <label>Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"

                   placeholder="Password"
                    required
                >

                <div class="options">
                   <p></p>
                         <a  href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
                </div>
                <button type="submit">REGISTER</button>
            </form>


        </div>
    </div>

</div>
<script>
    setTimeout(function () {
        const alert = document.getElementById('error-alert');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';

            setTimeout(() => alert.remove(), 500);
        }
    }, 3000); 
</script>

</body>
</html>

