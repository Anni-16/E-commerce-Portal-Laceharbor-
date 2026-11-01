@extends('frontend.layouts.master')

@section('content')

    <div class="login-section">
        <!-- Left Side -->
        <div class="login-content">
            <span class="small-title">WELCOME BACK</span>
            <h1>Sign In To <span>LACEHARBOR</span></h1>
            <p>
                Access your account and discover new arrivals,
                exclusive offers and luxury fashion collections.
            </p>
            <form>
                <div class="input-box">
                    <input type="email" placeholder="Email Address">
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password">
                </div>
                <div class="options">
                    <label>
                        <input type="checkbox">
                        Remember me
                    </label>
                    <a href="{{ route('forget-password') }}">Forgot Password?</a>
                </div>
                <button class="login-btn">
                    Sign In
                </button>
            </form>
            <div class="bottom-text">
                Don't have an account?
                <a href="{{ route('register') }}">Create Account</a>
            </div>
        </div>


        <!-- Right Side -->
        <div class="login-image">
            <div class="image-box">
                <img src="{{ asset('front-end/image/index/login.png') }}" alt="">
            </div>
        </div>
    </div>

@endsection