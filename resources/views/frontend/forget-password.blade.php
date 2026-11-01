@extends('frontend.layouts.master')

@section('content')

<main class="forgot-page">
    <section class="forgot-card" aria-labelledby="forgot-title">
        <div class="forgot-content">
            <a class="back-link" href="{{ route('login') }}"><i class="fas fa-arrow-left"></i> Back to sign in</a>
            <span class="small-title">ACCOUNT RECOVERY</span>
            <h1 id="forgot-title">Forgot Your <span>Password?</span></h1>
            <p class="intro">Enter the email address linked to your LACEHARBOR account and we will send you a password reset link.</p>

            <form id="forgotForm">
                <label for="email">Email Address</label>
                <input id="email" name="email" type="email" placeholder="you@example.com" autocomplete="email" required />
                <button class="reset-btn" type="submit">Send Reset Link</button>
            </form>
            <p class="form-message" id="formMessage" role="status" aria-live="polite"></p>
            <p class="account-prompt">Remember your password? <a href="{{ route('login') }}">Sign In</a></p>
        </div>
        <div class="forgot-image">
            <img src="{{ asset('front-end/image/index/login.png') }}" alt="LACEHARBOR fashion collection" />
        </div>
    </section>
</main>

@endsection