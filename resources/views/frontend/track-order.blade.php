@extends('frontend.layouts.master')

@section('content')

<!-- BREADCRUMBS -->
<div class="breadcrumb-bar">
    <a href="{{ url('/') }}">Home</a><span>/</span> Track Order
</div>

<!-- TRACKING CONTENT -->
<section class="track-section">
    <div class="track-container">

        <div class="track-header reveal">
            <h1>Track Your <span>Shipment</span></h1>
            <p>Follow the real-time journey of your LACEHARBOR styling package from our atelier to your doorstep.</p>
        </div>

        <!-- Tracking Lookup Form Card -->
        <div class="track-lookup-card reveal">
            <h3>Order Status Lookup</h3>
            <form id="luxuryTrackForm">

                <div style="margin-bottom: 25px; position: relative;">
                    <input type="text" id="trackOrderId" placeholder="Order ID (e.g. LX-8291)" style="width:100%; padding:14px; border:1px solid var(--light-gray); outline:none; background:#fbfbfb; border-radius:4px; font-family:inherit;" required />
                </div>

                <div style="margin-bottom: 25px; position: relative;">
                    <input type="email" id="trackEmail" placeholder="Email Address registered with order" style="width:100%; padding:14px; border:1px solid var(--light-gray); outline:none; background:#fbfbfb; border-radius:4px; font-family:inherit;" required />
                </div>

                <button type="submit" class="contact-submit-btn">Track Order</button>

            </form>
        </div>

        <!-- DYNAMIC TRACKING RESULTS (hiddem by default) -->
        <div class="tracking-results-box" id="trackResultsBox">

            <!-- Header summary -->
            <div class="tracking-info-header">
                <div>
                    <h4>Order Tracked</h4>
                    <p id="outOrderId"></p>
                </div>
                <div>
                    <h4>Status</h4>
                    <p id="outStatus" style="font-weight:600; color:var(--accent-dark);"></p>
                </div>
                <div>
                    <h4>Shipping Carrier</h4>
                    <p id="outCarrier"></p>
                </div>
                <div>
                    <h4>Est. Delivery Date</h4>
                    <p id="outEstDate" style="font-weight:600; color:var(--black);"></p>
                </div>
            </div>

            <!-- Progress Timeline -->
            <div class="tracking-timeline">
                <div class="timeline-progress-bar" id="timelineProgressBar"></div>

                <div class="timeline-step">
                    <div class="timeline-dot"><i class="fa-solid fa-receipt"></i></div>
                    <span class="timeline-label">Order Placed</span>
                </div>

                <div class="timeline-step">
                    <div class="timeline-dot"><i class="fa-solid fa-box"></i></div>
                    <span class="timeline-label">Processing</span>
                </div>

                <div class="timeline-step">
                    <div class="timeline-dot"><i class="fa-solid fa-truck"></i></div>
                    <span class="timeline-label">Shipped</span>
                </div>

                <div class="timeline-step">
                    <div class="timeline-dot"><i class="fa-solid fa-house-chimney-user"></i></div>
                    <span class="timeline-label">Delivered</span>
                </div>
            </div>

            <!-- Order items summary -->
            <div class="tracking-details-card">
                <h3>Shipment Details</h3>
                <div class="track-items-list" id="trackItemsList">
                    <!-- Dynamically populated rows go here -->
                </div>

                <!-- Map simulation -->
                <div class="map-mockup-box">
                    <i class="fa-solid fa-location-dot map-glow-pin"></i>
                    <div class="map-glow-dot"></div>
                </div>
            </div>

        </div>

    </div>
</section>


@endsection