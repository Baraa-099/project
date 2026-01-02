<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="container">

    <!-- Left Section -->
    <div class="left">
        <div class="overlay">
            <h1>Reset Password</h1>
            <p>Create a new strong password to secure your account.</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="right">
        <div class="form-box">

            <h2 style="font-size: 28px">Reset Password</h2>
            <p class="subtitle">Enter your new password below</p>

            {{-- Error Message --}}
            @if ($errors->any())
                <div id="reset-error" style="
                    background:#ffe5e5;
                    color:#b30000;
                    padding:12px;
                    border-radius:6px;
                    margin-bottom:15px;
                    font-size:14px;
                    text-align:center;
                ">
                    {{ $errors->first() }}
                </div>
            @endif

            {{-- Reset Form --}}
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <label>Email Address</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $request->email) }}"
                    required
                >

                <label>New Password</label>
                <input
                    type="password"
                    name="password"
                    required
                >

                <label>Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    required
                >

                <button type="submit">Reset Password</button>
            </form>

            <p class="register">
                Remembered your password?
                <a href="{{ route('login') }}">Log in</a>
            </p>

        </div>
    </div>

</div>

{{-- Auto hide error --}}
<script>
    setTimeout(() => {
        const alert = document.getElementById('reset-error');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 5000);
</script>

</body>
</html>
