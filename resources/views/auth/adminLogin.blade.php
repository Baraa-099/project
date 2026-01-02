{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
login with admin
    <form method="POST" action="{{ route('save.admin.login') }}">
        @csrf


        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

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
            <h2>EstateHub</h2>
            <h3>Sign In</h3>
            <p class="subtitle">Enter your credentials to access your account</p>


{{--  --}}



            {{-- Laravel Login Form --}}
            <form method="POST" action="{{ route('save.admin.login') }}">
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
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                </div>

                <button type="submit">Sign In</button>
            </form>

            <p class="register">
                Don't have an account?
                <a href="{{ route('register') }}">Create one</a>
            </p>
        </div>
    </div>

</div>

</body>
</html>
