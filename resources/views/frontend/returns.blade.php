@extends('frontend.layouts.master')

@section('content')

<!-- BREADCRUMBS -->
<div class="breadcrumb-bar">
    <a href="{{ url('/') }}">Home</a><span>/</span> Returns
</div>

<!-- RETURNS CONTENT -->
<section class="returns-section">
    <div class="returns-container">

        <div class="returns-header reveal">
            <h1>Easy Returns &amp; <span>Refunds</span></h1>
            <p>If you're not completely satisfied with your purchase, our returns service is quick, easy, and completely free within 15 days.</p>
        </div>

        <!-- Quick policies -->
        <div class="returns-policy-cards reveal">
            <div class="policy-card">
                <i class="fa-solid fa-calendar-days"></i>
                <h3>15-Day Return Window</h3>
                <p>Request return or exchange requests within 15 days of order delivery date.</p>
            </div>
            <div class="policy-card">
                <i class="fa-solid fa-truck-ramp-box"></i>
                <h3>Free Home Pickup</h3>
                <p>We pick up the package directly from your address at zero shipping cost to you.</p>
            </div>
            <div class="policy-card">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <h3>Quick Refunds</h3>
                <p>Refunds are initiated instantly to your wallet/bank accounts once items clear pickup checks.</p>
            </div>
        </div>

        <!-- Main returns form card -->
        <div class="returns-form-card reveal">
            <form id="returnsWorkflowForm" onsubmit="return false;">

                <!-- STEP 1: Enter details -->
                <div class="returns-step active" id="returnsStep1">
                    <h3>Initiate Return Request</h3>

                    <div style="margin-bottom: 25px; position: relative;">
                        <input type="text" id="retOrderId" placeholder="Order ID (e.g. LX-2025-4921)" style="width:100%; padding:14px; border:1px solid var(--light-gray); outline:none; background:#fbfbfb; border-radius:4px; font-family:inherit;" required />
                    </div>

                    <div style="margin-bottom: 25px; position: relative;">
                        <input type="email" id="retEmail" placeholder="Email Address registered with order" style="width:100%; padding:14px; border:1px solid var(--light-gray); outline:none; background:#fbfbfb; border-radius:4px; font-family:inherit;" required />
                    </div>

                    <button type="button" class="contact-submit-btn" id="returnsNextBtn">Find Order Details</button>
                </div>

                <!-- STEP 2: Select items & reasons -->
                <div class="returns-step" id="returnsStep2">
                    <h3>Select Items to Return</h3>
                    <p style="color:var(--gray); font-size:0.9rem; margin-bottom:20px; text-align:center;">Check the products you wish to return from the order list below.</p>

                    <div class="returns-item-select-grid" id="returnsItemsList">
                        <!-- Dynamically rendered checklist goes here -->
                    </div>

                    <div class="select-wrapper">
                        <label for="returnReason">Reason for Return</label>
                        <select id="returnReason" required>
                            <option value="" disabled selected>Choose a return reason...</option>
                            <option value="too-small">Fit was too small / tight</option>
                            <option value="too-large">Fit was too large / loose</option>
                            <option value="defective">Received product with manufacturing defect</option>
                            <option value="wrong-item">Received wrong item or incorrect size</option>
                            <option value="disliked">Product quality or style not as expected</option>
                        </select>
                    </div>

                    <button type="button" class="contact-submit-btn" id="returnsSubmitBtn">Submit Return Request</button>
                </div>

                <!-- STEP 3: Success barcode and pickup -->
                <div class="returns-step" id="returnsStep3">
                    <div class="returns-success-card">
                        <i class="fa-solid fa-circle-check"></i>
                        <h3>Return Request Approved</h3>
                        <p style="color:var(--gray); margin-bottom: 20px;">Your request for Order ID <strong id="successOrderId" style="color:var(--black)"></strong> has been registered.</p>

                        <div class="returns-barcode-box">
                            <div class="barcode-mock" id="successBarcode">||||9301288391204||||</div>
                            <div class="barcode-sub">RETURN PRE-PAID PICKUP SLIP</div>
                        </div>

                        <div style="text-align: left; background: #faf8f5; padding: 25px; border-radius: 4px; margin-top: 20px;">
                            <h4 style="margin-bottom: 12px; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">What happens next?</h4>
                            <ul style="padding-left: 20px; color: var(--gray); line-height: 1.7; font-size: 0.9rem;">
                                <li>A return associate will arrive at your shipping address within 24-48 hours.</li>
                                <li>Please ensure products are packed in original condition with tags attached.</li>
                                <li>Show the digital barcode/pickup slip to the executive at pick up.</li>
                                <li>Refunds will be processed to the original mode of payment within 3 business days.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>
</section>

@endsection