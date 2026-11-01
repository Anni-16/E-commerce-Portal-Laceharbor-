@extends('frontend.layouts.master')

@section('content')

<!-- BREADCRUMBS -->
<div class="breadcrumb-bar">
    <a href="{{ url('/') }}">Home</a><span>/</span> Terms of Service
</div>

<!-- CONTENT SECTION -->
<section class="policy-section">
    <div class="policy-grid">

        <!-- SIDEBAR TOC -->
        <aside class="policy-sidebar reveal-left">
            <h3>Table of Contents</h3>
            <ul class="policy-toc">
                <li><a href="#acceptance" class="policy-toc-link active">1. Acceptance of Terms</a></li>
                <li><a href="#eligibility" class="policy-toc-link">2. Eligibility &amp; Accounts</a></li>
                <li><a href="#purchases" class="policy-toc-link">3. Purchases &amp; Payments</a></li>
                <li><a href="#intellectual-prop" class="policy-toc-link">4. Intellectual Property</a></li>
                <li><a href="#prohibited-uses" class="policy-toc-link">5. Prohibited Uses</a></li>
                <li><a href="#liability" class="policy-toc-link">6. Limit of Liability</a></li>
                <li><a href="#governing-law" class="policy-toc-link">7. Governing Law</a></li>
            </ul>
        </aside>

        <!-- DOCUMENT CONTENT -->
        <div class="policy-content reveal-right">
            <h1>Terms of Service</h1>
            <p class="policy-last-updated">Last Updated: June 18, 2026</p>

            <div class="policy-content-section" id="acceptance">
                <h2>1. Acceptance of Terms</h2>
                <p>By accessing and using the website of LACEHARBOR ("Site", "we", "us", or "our"), you agree to be bound by these Terms of Service. If you do not agree to all of these terms, please do not use the Site.</p>
                <p>We reserve the right to update or modify these Terms at any time without prior notice. Your continued use of the Site following any changes constitutes your agreement to follow and be bound by the Terms as modified.</p>
            </div>

            <div class="policy-content-section" id="eligibility">
                <h2>2. Eligibility &amp; Accounts</h2>
                <p>By using this Site, you represent that you are at least the age of majority in your state or province of residence. To access certain features of the Site, you may be required to register an account.</p>
                <p>You agree to provide accurate, current, and complete information during registration, and to maintain the security of your password and accept all risks of unauthorized access to your account.</p>
            </div>

            <div class="policy-content-section" id="purchases">
                <h2>3. Purchases &amp; Payments</h2>
                <p>All prices displayed on the Site are in Indian Rupees (INR) and are inclusive of GST unless specified otherwise. We reserve the right to refuse or cancel any order for any reason, including errors in product pricing or availability.</p>
                <p>By submitting a payment, you warrant that you are authorized to use the designated payment method and authorize us to charge your order amount (including shipping and taxes, if applicable) to that payment method.</p>
            </div>

            <div class="policy-content-section" id="intellectual-prop">
                <h2>4. Intellectual Property</h2>
                <p>All content on this Site, including text, graphics, logos, images, code, and stylesheets, is the property of LACEHARBOR and is protected by copyright, trademark, and other intellectual property laws. You are granted a limited license to access and print pages for personal, non-commercial use only.</p>
            </div>

            <div class="policy-content-section" id="prohibited-uses">
                <h2>5. Prohibited Uses</h2>
                <p>You agree not to use the Site to:</p>
                <ul>
                    <li>Engage in any unlawful activities or solicit others to perform unlawful acts.</li>
                    <li>Infringe upon or violate our intellectual property rights or the rights of others.</li>
                    <li>Transmit viruses, malware, or any other type of malicious code that could affect website functionality.</li>
                    <li>Collect or track the personal information of other users of the Site.</li>
                </ul>
            </div>

            <div class="policy-content-section" id="liability">
                <h2>6. Limit of Liability</h2>
                <p>In no event shall LACEHARBOR, its directors, employees, or partners, be liable for any direct, indirect, incidental, punitive, or consequential damages arising from your use of the Site, products purchased, or styling advice provided.</p>
            </div>

            <div class="policy-content-section" id="governing-law">
                <h2>7. Governing Law</h2>
                <p>These Terms of Service and any separate agreements shall be governed by and construed in accordance with the laws of India, with exclusive jurisdiction in the courts of New Delhi, India.</p>
            </div>

        </div>

    </div>
</section>


@endsection