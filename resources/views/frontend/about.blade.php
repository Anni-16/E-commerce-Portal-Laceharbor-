@extends('frontend.layouts.master')

@section('content')

<section class="about-hero">
    <div class="about-hero-image">
        <img src="{{ asset('front-end/image/index/Front_fudge_109e3b37-2f77-4970-b3e6-7dfe9358d81f.webp') }}" alt="LaceHarbor intimate wear collection" />
        <div class="about-hero-overlay">
            <p class="about-kicker">Our story</p>
            <h1>About <span>LaceHarbor</span></h1>
            <p class="about-subtitle">Where Comfort Meets Confidence</p>
        </div>
    </div>
</section>

<section class="about-copy-section">
    <div class="about-intro reveal">
        <p class="about-kicker">Comfort, considered</p>
        <h2>Essentials designed for the way you live</h2>
        <p>Welcome to <strong>LaceHarbor</strong>, your destination for premium lingerie, intimate wear, and everyday essentials for women and men. We believe confidence begins with comfort, and everyone deserves beautifully crafted essentials that fit perfectly and feel exceptional.</p>
        <p>Our collections bring together modern design, premium fabrics, and considered details to help you feel your best every day.</p>
    </div>

    <div class="about-story reveal">
        <div class="about-story-image">
            <img src="{{ asset('front-end/image/index/debby-ledet-2ZXVU3BJzN4-unsplash.jpg') }}" alt="LaceHarbor design and fabric details" />
        </div>
        <div class="about-story-copy">
            <p class="about-kicker">The LaceHarbor point of view</p>
            <h2>Beautiful basics, made to feel like you</h2>
            <p>We curate lingerie, nightwear, innerwear, and everyday essentials with a focus on fit, softness, and lasting quality. Every style is chosen to make daily dressing feel more personal, comfortable, and confident.</p>
            <p>From easy everyday layers to intimate pieces for something special, LaceHarbor makes room for every mood and every body.</p>
        </div>
    </div>

    <div class="about-block about-vision reveal">
        <p class="about-kicker">Our direction</p>
        <h2>Our Vision</h2>
        <ul class="about-list">
            <li>Make premium intimate wear comfortable and accessible.</li>
            <li>Offer thoughtful styles for women and men.</li>
            <li>Celebrate individuality through fit, fabric, and design.</li>
            <li>Build a shopping experience rooted in care and trust.</li>
        </ul>
    </div>


    <div class="about-offer reveal">
        <div>
            <p class="about-kicker">Curated for every day</p>
            <h2>What We Offer</h2>
        </div>
        <ul class="about-list feature-list">
            <li>Women's lingerie and intimate collections</li>
            <li>Bras, panties, and coordinated sets</li>
            <li>Nightwear, sleepwear, and everyday basics</li>
            <li>Men's innerwear and essentials</li>
            <li>Premium gift collections and new arrivals</li>
        </ul>
    </div>

    <div class="about-block about-promise reveal">
        <p class="about-kicker">Our promise</p>
        <h2>Feel comfortable. Feel confident.</h2>
        <p>Every product at LaceHarbor is selected with care for quality, comfort, and value. We are committed to secure shopping, reliable service, and a customer experience that feels as considered as our collections.</p>
        <p class="highlight-tag">Wear Confidence Every Day</p>
    </div>

    <div class="about-block about-expertise reveal">
        <p class="about-kicker">The details matter</p>
        <h2>Our Expertise</h2>
        <div class="expertise-grid">
            <div>
                <h3>Premium Materials</h3>
                <p>Soft, durable fabrics selected for comfort and everyday wear.</p>
            </div>
            <div>
                <h3>Thoughtful Design</h3>
                <p>Modern silhouettes and details that feel effortless and flattering.</p>
            </div>
            <div>
                <h3>Reliable Quality</h3>
                <p>Carefully considered products that bring lasting value to your wardrobe.</p>
            </div>
        </div>
    </div>
</section>

@endsection