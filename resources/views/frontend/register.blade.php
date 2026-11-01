@extends('frontend.layouts.master')

@section('content')

<div class="login-section">

    <!-- Left Side -->
    <div class="login-content">
        <span class="small-title">JOIN LACEHARBOR</span>

        <h1>Create Your <span>Account</span></h1>

        <p>
            Sign up to enjoy exclusive offers, track your orders,
            save your wishlist and explore luxury fashion collections.
        </p>

        <form id="registerForm" onsubmit="handleRegister(event)">

            <div class="name-row">
                <div class="input-box">
                    <input type="text" id="firstName" placeholder="First Name" required />
                </div>
                <div class="input-box">
                    <input type="text" id="lastName" placeholder="Last Name" required />
                </div>
            </div>

            <div class="input-box">
                <input type="email" id="email" placeholder="Email Address" required />
            </div>

            <div class="input-box">
                <input type="tel" id="phone" placeholder="Phone Number (optional)" />
            </div>

            <div class="input-box">
                <input type="password" id="password" placeholder="Create Password" oninput="checkStrength(this.value)" required />
                <button type="button" class="eye-btn" onclick="togglePass('password', this)">
                    <i class="fas fa-eye-slash"></i>
                </button>
                <div class="strength-bar">
                    <div class="strength-fill" id="strengthFill"></div>
                </div>
                <p class="strength-text" id="strengthText"></p>
            </div>

            <div class="input-box">
                <input type="password" id="confirmPassword" placeholder="Confirm Password" required />
                <button type="button" class="eye-btn" onclick="togglePass('confirmPassword', this)">
                    <i class="fas fa-eye-slash"></i>
                </button>
            </div>

            <div class="terms-row">
                <input type="checkbox" id="terms" required />
                <label for="terms">
                    I agree to the <a href="{{ route('terms-conditions') }}">Terms & Conditions</a> and <a href="{{ route('privacy-policy') }}">Privacy Policy</a> of LACEHARBOR
                </label>
            </div>

            <button class="login-btn" type="submit">Create Account</button>

        </form>

        <div class="divider">OR SIGN UP WITH</div>

        <div class="social-btns">
            <button class="social-btn">
                <img src="https://www.google.com/favicon.ico" alt="Google" /> Google
            </button>

        </div>

        <div class="bottom-text">
            Already have an account? <a href="{{ route('login') }}">Sign In</a>
        </div>

    </div>

    <!-- Right Side -->
    <div class="login-image">
        <div class="image-box">
            <img src="{{ asset('front-end/image/index/singup.png') }}" alt="LACEHARBOR Fashion" />
        </div>
    </div>
</div>

@endsection