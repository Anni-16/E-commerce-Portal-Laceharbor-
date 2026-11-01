@extends('frontend.layouts.master')

@section('content')

<!-- BREADCRUMBS -->
<div class="breadcrumb-bar">
    <a href="{{ url('/') }}">Home</a><span>/</span> Privacy Policy
</div>

<!-- CONTENT SECTION -->
<section class="policy-section">
    <div class="policy-grid">

        <!-- SIDEBAR TOC -->
        <aside class="policy-sidebar reveal-left">
            <h3>Table of Contents</h3>
            <ul class="policy-toc">
                <li><a href="#intro" class="policy-toc-link active">1. Introduction</a></li>
                <li><a href="#data-collect" class="policy-toc-link">2. Data We Collect</a></li>
                <li><a href="#data-use" class="policy-toc-link">3. How We Use Data</a></li>
                <li><a href="#data-share" class="policy-toc-link">4. Data Sharing</a></li>
                <li><a href="#cookies" class="policy-toc-link">5. Cookies &amp; Tracking</a></li>
                <li><a href="#user-rights" class="policy-toc-link">6. Your Rights</a></li>
                <li><a href="#contact" class="policy-toc-link">7. Contact Us</a></li>
            </ul>
        </aside>

        <!-- DOCUMENT CONTENT -->
        <div class="policy-content reveal-right">
            <h1>Privacy Policy</h1>
            <p class="policy-last-updated">Last Updated: June 18, 2026</p>

            <div class="policy-content-section" id="intro">
                <h2>1. Introduction</h2>
                <p>Welcome to LACEHARBOR. We respect your privacy and are committed to protecting your personal data. This privacy policy informs you about how we look after your personal data when you visit our website, purchase products, or engage with our styling services.</p>
                <p>Please read this privacy policy carefully to understand how we collect, store, share, and protect your information.</p>
            </div>

            <div class="policy-content-section" id="data-collect">
                <h2>2. Data We Collect</h2>
                <p>We may collect, use, store and transfer different kinds of personal data about you, including:</p>
                <ul>
                    <li><strong>Identity Data:</strong> First name, last name, username, title, and gender.</li>
                    <li><strong>Contact Data:</strong> Billing address, delivery address, email address, and telephone numbers.</li>
                    <li><strong>Financial &amp; Transaction Data:</strong> Payment details, products purchased, transaction histories, and measurements/size profiles provided for sizing guides.</li>
                    <li><strong>Technical Data:</strong> IP address, browser type and version, time zone setting, operating system, and platform details.</li>
                </ul>
            </div>

            <div class="policy-content-section" id="data-use">
                <h2>3. How We Use Data</h2>
                <p>We only use your personal data when the law allows us to. Most commonly, we use your data in the following circumstances:</p>
                <ul>
                    <li>To register you as a new customer and manage your account.</li>
                    <li>To process and deliver your orders, including managing payments, fees, refunds, and returns.</li>
                    <li>To recommend sizing options and fit recommendations suited to your styling profiles.</li>
                    <li>To notify you about changes to our terms, privacy policies, or products.</li>
                    <li>To deliver relevant website content, newsletters, and promotional offers.</li>
                </ul>
            </div>

            <div class="policy-content-section" id="data-share">
                <h2>4. Data Sharing</h2>
                <p>We do not sell your personal data to third parties. We may share your data with trusted partners under strict privacy rules, including:</p>
                <ul>
                    <li>Delivery couriers and logistics partners to dispatch your orders.</li>
                    <li>Payment gateways to securely process transactions.</li>
                    <li>Technical support providers that maintain our hosting, database, and marketing engines.</li>
                    <li>Regulatory authorities if legally mandated or necessary to protect rights.</li>
                </ul>
            </div>

            <div class="policy-content-section" id="cookies">
                <h2>5. Cookies &amp; Tracking</h2>
                <p>Our website uses cookies to distinguish you from other users. This helps us to provide you with a smooth browsing experience and allows us to improve our platform. Cookies also manage items in your cart and wishlist locally on your browser.</p>
                <p>You can set your browser to refuse all or some browser cookies, or to alert you when websites set or access cookies. However, if you disable cookies, some parts of this website may become inaccessible or fail to function properly.</p>
            </div>

            <div class="policy-content-section" id="user-rights">
                <h2>6. Your Rights</h2>
                <p>Under data protection laws, you have rights in relation to your personal data, including the right to request access, correction, erasure, restriction, transfer, or withdrawal of consent. If you wish to exercise any of these rights, please contact our concierge support desk.</p>
            </div>

            <div class="policy-content-section" id="contact">
                <h2>7. Contact Us</h2>
                <p>If you have any questions about this privacy policy, including requests to exercise your legal rights, please contact us at:</p>
                <p><strong>Email:</strong> <a href="mailto:privacy@LACEHARBORfashion.com">privacy@LACEHARBORfashion.com</a></p>
                <p><strong>Address:</strong> Privacy &amp; Legal Desk, LACEHARBOR, Galleria Luxury Mall, Connaught Place, New Delhi - 110001</p>
            </div>

        </div>

    </div>
</section>

@endsection