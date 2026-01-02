<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="container">

    <!-- Left Section -->
    <div class="left">
        <div class="overlay">
            <h1>Forgot Password?</h1>
            <p>No worries! Enter your email and we will send you a reset link.</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="right">
        <div class="form-box">

            <h2 style="font-size: 28px">Reset Password</h2>
            <p class="subtitle">Enter your email to receive a reset link</p>

            {{-- Session Status --}}
            @if (session('status'))
                <div style="
                    background:#e6f4ff;
                    color:#055160;
                    padding:12px;
                    border-radius:6px;
                    margin-bottom:15px;
                    font-size:14px;
                    text-align:center;
                ">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Error Message --}}
            @if ($errors->any())
                <div id="forgot-error" style="
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

            {{-- Forgot Password Form --}}
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <label>Email Address</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >
              <p>.</p>
                <button type="submit">Email Password Reset Link</button>
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
        const alert = document.getElementById('forgot-error');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 5000);
</script>

</body>
</html>
