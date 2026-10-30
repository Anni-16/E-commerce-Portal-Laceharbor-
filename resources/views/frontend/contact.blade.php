@extends('frontend.layouts.master')

@section('content')

<!-- BREADCRUMBS -->
<div class="breadcrumb-bar">
    <a href="{{ url('/') }}">Home</a><span>/</span> Contact Us
</div>

<!-- MAIN SECTION -->
<section class="contact-section">
    <div class="contact-grid">

        <!-- LEFT COLUMN: Contact Info -->
        <div class="contact-info-col reveal-left">
            <div class="contact-header">
                <h1>Connect With <span>LACEHARBOR</span></h1>
                <p>Whether you require size styling, orders support, or business consultations, our team of concierges and stylists are ready to assist you.</p>
            </div>

            <div class="info-cards">

                <div class="info-card">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <h4>Our Atelier</h4>
                        <p>108, Galleria Luxury Mall, Level 2<br />Connaught Place, New Delhi - 110001</p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <h4>Email Support</h4>
                        <p><a href="mailto:concierge@LACEHARBORfashion.com">concierge@LACEHARBORfashion.com</a></p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <h4>Stylist Consultation</h4>
                        <p><a href="tel:+911140003000">+91 11 4000 3000</a> (Mon-Sat, 9AM-7PM)</p>
                    </div>
                </div>

            </div>

            <!-- Pulse concierge card -->
            <div class="concierge-card">
                <h4><span class="status-dot"></span> Digital Concierge Online</h4>
                <p>Live stylists are currently active. Fill in the message form or email us directly, and you will receive a curated response within 2 hours.</p>
            </div>
        </div>

        <!-- RIGHT COLUMN: Contact Form -->
        <div class="contact-form-col reveal-right">
            <h3>Send A Message</h3>
            <form id="luxuryContactForm">

                <div class="form-group">
                    <input type="text" placeholder="Your Full Name" required />
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Your Email Address" required />
                </div>

                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject / Query Category" required />
                </div>

                <div class="form-group">
                    <textarea placeholder="Write your styling or support query here..." required></textarea>
                </div>

                <button type="submit" class="contact-submit-btn">Send Message</button>

            </form>
        </div>

    </div>
</section>

@endsection