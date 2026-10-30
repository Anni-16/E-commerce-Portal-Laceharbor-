@extends('frontend.layouts.master')

@section('content')

<!-- BREADCRUMBS -->
<div class="breadcrumb-bar">
    <a href="{{ url('/') }}">Home</a><span>/</span> FAQ
</div>

<!-- HERO & SEARCH -->
<section class="faq-hero">
    <div class="faq-hero-content reveal">
        <h1>How Can We <span>Help You?</span></h1>
        <div class="faq-search-wrap">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="faqSearchInput" placeholder="Search questions, sizing, orders..." />
        </div>
    </div>
</section>

<!-- FAQ ACCORDIONS -->
<section class="faq-container">

    <!-- CATEGORY 1: Shipping -->
    <div class="faq-category reveal">
        <h3 class="faq-category-title">Shipping &amp; Delivery</h3>

        <div class="faq-item">
            <div class="faq-question">
                <h4>What are the shipping charges?</h4>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    We offer free standard shipping on all orders above ₹999. For orders below ₹999, a flat shipping fee of ₹99 is applicable at checkout.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h4>How long will it take for my order to arrive?</h4>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    Standard delivery takes between 3 to 5 business days for major metro cities, and 5 to 7 business days for regional areas. You will receive a tracking link via email/SMS once your order is dispatched.
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORY 2: Returns -->
    <div class="faq-category reveal">
        <h3 class="faq-category-title">Returns &amp; Refunds</h3>

        <div class="faq-item">
            <div class="faq-question">
                <h4>What is the return policy?</h4>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    We provide a 15-day return policy for unworn, unwashed items in their original packaging with tags intact. Please note that for hygiene reasons, panties, custom shapewear, and adhesive products cannot be returned.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <h4>How do I initiate a return?</h4>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    You can request a return directly on our <a href="returns.html">Returns Page</a> by entering your Order ID and Email. A courier representative will pick up the items within 48 hours of approval.
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORY 3: Sizing -->
    <div class="faq-category reveal">
        <h3 class="faq-category-title">Sizing &amp; Fit</h3>

        <div class="faq-item">
            <div class="faq-question">
                <h4>How do I find my correct size?</h4>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    We offer a comprehensive, interactive <a href="size-guide.html">Size Guide</a> that includes measuring tips and a custom Bra Size Calculator. If you're still unsure, you can email or call our style concierges.
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORY 4: Payments -->
    <div class="faq-category reveal">
        <h3 class="faq-category-title">Payments &amp; Promos</h3>

        <div class="faq-item">
            <div class="faq-question">
                <h4>What payment options do you support?</h4>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    We support all major payment modes including Credit/Debit Cards (Visa, Mastercard, RuPay), Net Banking, UPI (Google Pay, PhonePe, Paytm), and Cash on Delivery (COD) for eligible pin codes.
                </div>
            </div>
        </div>
    </div>

    <!-- Empty State -->
    <div class="faq-empty-state" id="faqEmptyState">
        <i class="fa-regular fa-face-frown"></i>
        <p>We couldn't find any questions matching your search. Please try another query or contact support.</p>
    </div>

</section>

@endsection