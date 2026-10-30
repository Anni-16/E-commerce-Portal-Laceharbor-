@extends('frontend.layouts.master')

@section('content')

<!-- BREADCRUMBS -->
<div class="breadcrumb-bar">
    <a href="{{ url('/') }}">Home</a><span>/</span> Size Guide
</div>

<!-- MAIN SECTION -->
<section class="size-guide-section">
    <div class="size-guide-grid">

        <!-- LEFT COLUMN: Charts & How to Measure -->
        <div class="charts-col reveal-left">
            <h1>Find Your <span>Perfect Fit</span></h1>

            <div class="size-chart-images">
                <div class="size-chart-image-card">
                    <h2>Bra Set Size Guide</h2>
                    <img src="https://snazzyway.com/storage/uploads/2023/04/size-chart-2.png" alt="Bra set size chart" />
                </div>
                <div class="size-chart-image-card">
                    <h2>Panty Size Guide</h2>
                    <img src="https://snazzyway.com/storage/uploads/2023/04/Snazzyway-Panty-Size-Chart.png" alt="Panty size chart" />
                </div>
                <div class="size-chart-image-card">
                    <h2>Garter Size Chart</h2>
                    <img src="https://snazzyway.com/storage/uploads/2023/04/Snazzyway-Garter-Size-Chart.png" alt="Garter size chart" />
                </div>
            </div>

            <!-- Tabs -->
            <div class="size-tabs">
                <button class="size-tab-btn active" data-tab="bras">Bras</button>
                <button class="size-tab-btn" data-tab="panties">Panties</button>
                <button class="size-tab-btn" data-tab="nightwear">Nightwear</button>
            </div>

            <!-- Tab 1: Bras -->
            <div class="size-table-container active" id="bras-table-container">
                <table class="size-table">
                    <thead>
                        <tr>
                            <th>Standard Band (IN)</th>
                            <th>Underbust (IN)</th>
                            <th>US / UK Band Size</th>
                            <th>EU Band Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>32</td>
                            <td>27" - 28"</td>
                            <td>32</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>29" - 30"</td>
                            <td>34</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>31" - 32"</td>
                            <td>36</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>33" - 34"</td>
                            <td>38</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>35" - 36"</td>
                            <td>40</td>
                            <td>90</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tab 2: Panties -->
            <div class="size-table-container" id="panties-table-container">
                <table class="size-table">
                    <thead>
                        <tr>
                            <th>LACEHARBOR Size</th>
                            <th>Waist (IN)</th>
                            <th>Hips (IN)</th>
                            <th>US Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>S</td>
                            <td>25" - 27"</td>
                            <td>35" - 37"</td>
                            <td>4 - 6</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>28" - 30"</td>
                            <td>38" - 40"</td>
                            <td>8 - 10</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>31" - 33"</td>
                            <td>41" - 43"</td>
                            <td>12 - 14</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>34" - 36"</td>
                            <td>44" - 46"</td>
                            <td>16 - 18</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tab 3: Nightwear -->
            <div class="size-table-container" id="nightwear-table-container">
                <table class="size-table">
                    <thead>
                        <tr>
                            <th>LACEHARBOR Size</th>
                            <th>Bust (IN)</th>
                            <th>Waist (IN)</th>
                            <th>Hips (IN)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>S</td>
                            <td>33" - 34"</td>
                            <td>25" - 26"</td>
                            <td>35" - 36"</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>35" - 36"</td>
                            <td>27" - 28"</td>
                            <td>37" - 38"</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>37" - 38"</td>
                            <td>29" - 30"</td>
                            <td>39" - 40"</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>39" - 40"</td>
                            <td>31" - 32"</td>
                            <td>41" - 42"</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- How to Measure Guide -->
            <div class="measuring-guide-box">
                <h3>How To Measure</h3>

                <div class="measure-step">
                    <h4>1. Underbust (Band)</h4>
                    <p>Wrap a soft measuring tape snugly around your ribcage, directly under your bust. Keep the tape parallel to the ground.</p>
                </div>

                <div class="measure-step">
                    <h4>2. Overbust (Bust)</h4>
                    <p>Measure across the fullest part of your bust, holding the tape loosely so it doesn't compress your skin.</p>
                </div>

                <div class="measure-step">
                    <h4>3. Waist &amp; Hips</h4>
                    <p>Measure your natural waistline (narrowest part above your navel) and hips (widest part around your glutes).</p>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN: Bra Size Calculator -->
        <div class="calculator-col reveal-right">
            <h3>Bra Size Calculator</h3>
            <p class="calc-desc">Enter your ribcage and bust measurements to estimate your recommended size.</p>

            <form id="braSizeCalcForm">

                <div class="form-group" style="position: relative; margin-bottom: 25px;">
                    <label for="underbustVal" style="display:block; margin-bottom:8px; font-size:0.9rem; font-weight:500;">1. Underbust (Ribcage) in inches</label>
                    <input type="number" step="0.1" id="underbustVal" placeholder="e.g. 30" style="width:100%; padding:14px; border:1px solid var(--light-gray); outline:none; background:#fbfbfb; border-radius:4px; font-family:inherit;" required />
                </div>

                <div class="form-group" style="position: relative; margin-bottom: 25px;">
                    <label for="overbustVal" style="display:block; margin-bottom:8px; font-size:0.9rem; font-weight:500;">2. Overbust (Fullest Bust) in inches</label>
                    <input type="number" step="0.1" id="overbustVal" placeholder="e.g. 34.5" style="width:100%; padding:14px; border:1px solid var(--light-gray); outline:none; background:#fbfbfb; border-radius:4px; font-family:inherit;" required />
                </div>

                <button type="submit" class="contact-submit-btn">Calculate My Size</button>

            </form>

            <!-- Result Box -->
            <div class="calc-result-box" id="calcResultBox">
                <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; color: var(--gray);">Your Suggested Size</span>
                <div class="result-val" id="calcResultText">34B</div>
                <p class="result-advice" id="calcResultAdvice"></p>
            </div>
        </div>

    </div>
</section>

@endsection