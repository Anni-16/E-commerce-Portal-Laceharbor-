@extends('frontend.layouts.master')

@section('content')

<section class="full-width-hero hero-carousel" aria-label="Featured banner carousel">
    <div class="hero-carousel-container">
        <div class="hero-slide active" style="background-image: url('{{ asset('front-end/image/index/2.png') }}');">
            <a href="{{ route('product-category') }}" class="hero-slide-link" aria-label="Shop featured collection"></a>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('front-end/image/index/3.png') }}');">
            <a href="{{ route('product-category') }}" class="hero-slide-link" aria-label="Shop special launch offer"></a>
        </div>

        <div class="hero-slide" style="background-image: url('{{ asset('front-end/image/index/1.png') }}');">
            <a href="{{ route('product-category') }}" class="hero-slide-link" aria-label="Shop launch offer"></a>
        </div>
    </div>
    <button class="hero-carousel-arrow hero-prev" id="heroPrev" aria-label="Previous banner">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="hero-carousel-arrow hero-next" id="heroNext" aria-label="Next banner">
        <i class="fas fa-chevron-right"></i>
    </button>
    <div class="hero-carousel-dots" id="heroCarouselDots"></div>
</section>

<!-- STATS BAR -->
<section class="stats-bar reveal">
    <div class="stat-item">
        <h3>50K+</h3>
        <p>Happy Customers</p>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
        <h3>2000+</h3>
        <p>Snazzyway Styles</p>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
        <h3>3 Brands</h3>
        <p>SOIE, Enamor &amp; Clovia Vibe</p>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
        <h3>4.9★</h3>
        <p>Average Rating</p>
    </div>
</section>

<!-- MARQUEE -->
<div class="marquee-wrap">
    <div class="marquee-track">
        <span>SOIE LUXURY SILK</span><span>★</span>
        <span>ENAMOR FABULOUS FIT</span><span>★</span>
        <span>CLOVIA JOYFUL BRALETTES</span><span>★</span>
        <span>GEN-Z TRENDY ERA</span><span>★</span>
        <span>SNAZZYWAY EXCLUSIVE DATA</span><span>★</span>
        <span>FLAT 40% OFF</span><span>★</span>
        <span>SOIE LUXURY SILK</span><span>★</span>
        <span>ENAMOR FABULOUS FIT</span><span>★</span>
        <span>CLOVIA JOYFUL BRALETTES</span><span>★</span>
        <span>GEN-Z TRENDY ERA</span><span>★</span>
    </div>
</div>

<!-- GEN-Z YOUTH TRENDS COLLECTION -->
<section class="genz-section reveal" id="genz">
    <div class="genz-header">
        <span class="genz-badge-pill"><i class="fa-solid fa-bolt"></i> Gen-Z Trendy Era</span>
        <h2 class="section-title" style="margin-bottom:12px;">Gen-Z Youth &amp; Aesthetic Collection</h2>
        <p class="genz-sub">Bold colors, wireless bralettes, mesh crops &amp; Y2K loungewear designed for Gen-Z vibes.</p>
    </div>
    <div class="genz-grid">

        <div class="genz-card">
            <div class="genz-img-wrap">
                <img src="{{ asset('front-end/image/product/bralett.png') }}" alt="Gen-Z Mesh Bralette" />
            </div>
            <div class="genz-info">
                <h4>Y2K Aesthetic Lace Bralette Set</h4>
                <div class="genz-price-row">
                    <div>
                        <span class="genz-price">₹599</span>
                        <span class="genz-old-price">₹899</span>
                    </div>
                    <button class="add-to-cart"
                        onclick="addItemToCart('genz-01', 'Y2K Aesthetic Lace Bralette Set', 'https://snazzyway.com/storage/uploads/menus/1771925363_699d6f730d503.png', 599, 'Lilac Purple', 'Free Size')">Add</button>
                </div>
            </div>
        </div>

        <div class="genz-card">
            <div class="genz-img-wrap">
                <img src="{{ asset('front-end/image/product/wirefreesignaturelacebrset.png') }}" alt="Neon Pop Bra Set" />
            </div>
            <div class="genz-info">
                <h4>Neon Cotton Crop Wireless Bra</h4>
                <div class="genz-price-row">
                    <div>
                        <span class="genz-price">₹499</span>
                        <span class="genz-old-price">₹749</span>
                    </div>
                    <button class="add-to-cart"
                        onclick="addItemToCart('genz-02', 'Neon Cotton Crop Wireless Bra', 'https://snazzyway.com/storage/uploads/menus/1771999814_699e924643f93.png', 499, 'Neon Pink', '32B')">Add</button>
                </div>
            </div>
        </div>

        <div class="genz-card">
            <div class="genz-img-wrap">
                <img src="{{ asset('front-end/image/product/gymbra.png') }}" alt="Athleisure Ribbed Sports Set" />
            </div>
            <div class="genz-info">
                <h4>Athleisure Ribbed Crop &amp; Shorts</h4>
                <div class="genz-price-row">
                    <div>
                        <span class="genz-price">₹649</span>
                        <span class="genz-old-price">₹999</span>
                    </div>
                    <button class="add-to-cart"
                        onclick="addItemToCart('genz-03', 'Athleisure Ribbed Crop &amp; Shorts', 'https://snazzyway.com/storage/uploads/menus/1771924678_699d6cc671148.png', 649, 'Mint Green', 'M')">Add</button>
                </div>
            </div>
        </div>

        <div class="genz-card">
            <div class="genz-img-wrap">
                <img src="{{ asset('front-end/image/product/silkbraset.png') }}" alt="Pastel Satin Lounge Set" />
            </div>
            <div class="genz-info">
                <h4>Pastel Satin Camisole &amp; Shorts</h4>
                <div class="genz-price-row">
                    <div>
                        <span class="genz-price">₹799</span>
                        <span class="genz-old-price">₹1,199</span>
                    </div>
                    <button class="add-to-cart"
                        onclick="addItemToCart('genz-04', 'Pastel Satin Camisole &amp; Shorts', 'https://snazzyway.com/storage/uploads/menus/1772001329_699e983144e47.png', 799, 'Blush Rose', 'S')">Add</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CATEGORIES (SNAZZYWAY DATA) -->
<section class="categories pt-5" id="categories">
    <div class="categories-header">
        <span class="genz-badge-pill"><i class="fa-solid fa-layer-group"></i> Curated Collections</span>
        <h2 class="section-title reveal" style="margin-bottom:12px;">Shop by Category</h2>
        <p class="categories-subtitle">Discover styles made for every mood, moment, and kind of confidence.</p>
    </div>
    <div class="cat-grid">
        <div class="cat-card large reveal-left">
            <img src="{{ asset('front-end/image/index/BraPantySets.png') }}" alt="Bra Panty Sets" />
            <div class="cat-overlay">
                <h3>Bra Panty Sets</h3>
                <a href="{{ route('product-category') }}">Explore Sets →</a>
            </div>
        </div>
        <div class="cat-card reveal-zoom delay-100">
            <img src="{{ asset('front-end/image/index/Trendy Bralettes.png') }}" alt="Trendy Bralettes" />
            <div class="cat-overlay">
                <h3>Trendy Bralettes</h3>
                <a href="{{ route('product-category') }}">Explore Bralettes →</a>
            </div>
        </div>
        <div class="cat-card reveal-zoom delay-200">
            <img src="{{ asset('front-end/image/index/bridalcollection.png') }}" alt="Bridal Collection" />
            <div class="cat-overlay">
                <h3>Bridal Collection</h3>
                <a href="{{ route('product-category') }}">Explore Bridal →</a>
            </div>
        </div>
    </div>
</section>

<!-- GEN Z DUAL SHOWCASE BANNER SECTION (USER DESIGN MATCH) -->
<section class="genz-banner-wrapper reveal" id="genzShowcase">
    <div class="genz-showcase-grid">
        <div class="genz-intro-image">
            <img src="{{ asset('front-end/image/index/bridal.png') }}" alt="Comfort and support bralette" />
        </div>
        <div class="genz-banner-panel">
            <img src="{{ asset('front-end/image/index/bralette.png') }}" alt="Gen Z Bralette Energy &amp; Comfort Support" class="genz-banner-img" />
        </div>
    </div>
</section>


<section class="editorial-fit-section reveal" id="styleFinder">
    <div class="split-photo-layout">
        <div class="split-photo-copy">
            <span class="split-photo-eyebrow">LaceHarbor Essentials</span>
            <h2>Wear Confidence Every Day</h2>
            <p>Thoughtfully designed intimate wear that brings together effortless comfort, beautiful detail, and confidence
                in every moment.</p>
            <a href="products.html" class="split-photo-link">Explore the collection <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="split-photo-panel tall-panel left-panel">
            <img src="{{ asset('front-end/image/index/dailytop.png') }}" alt="Lace lingerie collection" />
        </div>
        <div class="split-photo-panel small-panel">
            <img src="{{ asset('front-end/image/index/daily2.png') }}" alt="Comfortable everyday lingerie" />
        </div>
        <div class="split-photo-panel tall-panel right-panel">
            <img src="{{ asset('front-end/image/index/daily1.png') }}" alt="Premium fashion styling" />
        </div>
    </div>
</section>

<!-- FEATURED PRODUCTS (SNAZZYWAY DATA) -->
<section class="products" id="products">
    <div class="products-header">
        <span class="genz-badge-pill"><i class="fa-solid fa-star"></i> Signature Selection</span>
        <h2 class="section-title reveal" style="margin-bottom:12px;">Featured Lingerie Collection</h2>
        <p class="products-subtitle">Explore timeless essentials and statement styles selected for your everyday
            confidence.</p>
    </div>
    <div class="products-grid">

        <div class="product-card" data-price="799">
            <div class="product-img-wrap">
                <img src="{{ asset('front-end/image/product/3.png') }}" alt="Silk Bra Set" />
                <span class="badge">SOIE Luxe</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">SNAZZYWAY</p>
                <h4>Luxe Silk Satin Bra &amp; Panty Set</h4>
                <div class="product-price">
                    <span class="price">₹799</span>
                    <span class="old-price">₹1,299</span>
                </div>
                <button class="add-to-cart"
                    onclick="addItemToCart('silk-set-01', 'Luxe Silk Satin Bra &amp; Panty Set', 'https://snazzyway.com/storage/uploads/menus/1772001329_699e983144e47.png', 799, 'Crimson Red', '34B')">Add
                    to Cart</button>
            </div>
        </div>

        <div class="product-card" data-price="999">
            <div class="product-img-wrap">
                <img src="{{ asset('front-end/image/product/1.png') }}" alt="Bridal Bra Set" />
                <span class="badge sale">Sale</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">SNAZZYWAY</p>
                <h4>Bridal Embroidered Lace Push-Up Set</h4>
                <div class="product-price">
                    <span class="price">₹999</span>
                    <span class="old-price">₹1,599</span>
                </div>
                <button class="add-to-cart"
                    onclick="addItemToCart('bridal-set-02', 'Bridal Embroidered Lace Push-Up Set', 'https://snazzyway.com/storage/uploads/menus/1771990907_699e6f7b6e892.png', 999, 'Blush Pink', '32C')">Add
                    to Cart</button>
            </div>
        </div>

        <div class="product-card" data-price="499">
            <div class="product-img-wrap">
                <img src="{{ asset('front-end/image/product/2.png') }}" alt="Padded Push Up Bra" />
                <span class="badge">Enamor Fit</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">SNAZZYWAY</p>
                <h4>Seamless Everyday Push-Up Contour Bra</h4>
                <div class="product-price">
                    <span class="price">₹499</span>
                    <span class="old-price">₹799</span>
                </div>
                <button class="add-to-cart"
                    onclick="addItemToCart('everyday-bra-03', 'Seamless Everyday Push-Up Contour Bra', 'https://snazzyway.com/storage/uploads/menus/1771924600_699d6c784c0a6.png', 499, 'Nude Beige', '34C')">Add
                    to Cart</button>
            </div>
        </div>

        <div class="product-card" data-price="699">
            <div class="product-img-wrap">
                <img src="{{ asset('front-end/image/product/4.png') }}" alt="Floral Bralette" />
                <span class="badge">Clovia Trendy</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">SNAZZYWAY</p>
                <h4>Wireless Floral Lace Bralette &amp; Panty</h4>
                <div class="product-price">
                    <span class="price">₹699</span>
                    <span class="old-price">₹1,099</span>
                </div>
                <button class="add-to-cart"
                    onclick="addItemToCart('bralette-set-04', 'Wireless Floral Lace Bralette &amp; Panty', 'https://snazzyway.com/storage/uploads/menus/1771925363_699d6f730d503.png', 699, 'Black Lace', 'Free Size')">Add
                    to Cart</button>
            </div>
        </div>

    </div>
</section>

<!-- FABRIC & COMFORT HIGHLIGHTS -->
<section class="comfort-features reveal" id="comfortHighlights">
    <div class="features-grid">
        <div class="feature-box">
            <i class="fa-solid fa-leaf"></i>
            <div>
                <h4>100% Breathable Cotton &amp; Silk</h4>
                <p>Skin-friendly hypoallergenic fabrics engineered for hot weather comfort.</p>
            </div>
        </div>
        <div class="feature-box">
            <i class="fa-solid fa-wand-magic-sparkles"></i>
            <div>
                <h4>Precision Lift &amp; Zero Sag</h4>
                <p>3D-contoured cups engineered to match Indian women body fits perfectly.</p>
            </div>
        </div>
        <div class="feature-box">
            <i class="fa-solid fa-arrow-rotate-left"></i>
            <div>
                <h4>30-Day Easy Size Swap</h4>
                <p>Hassle-free size exchange guarantee with quick doorstep pick-up.</p>
            </div>
        </div>
        <div class="feature-box">
            <i class="fa-solid fa-box-open"></i>
            <div>
                <h4>100% Discrete Packaging</h4>
                <p>Tamper-proof, plain delivery box protecting your personal privacy.</p>
            </div>
        </div>
    </div>
</section>

<!-- NEW ARRIVALS SLIDER (SNAZZYWAY DATA) -->
<section class="new-arrivals">
    <div class="arrivals-header">
        <span class="genz-badge-pill"><i class="fa-solid fa-sparkles"></i> Fresh Arrivals</span>
        <h2 class="section-title" style="margin-bottom:12px">New Snazzyway Arrivals</h2>
        <p class="arrivals-subtitle">Meet the latest styles curated to refresh your lingerie drawer.</p>
        <a href="new-aarawel.html" class="view-all">View All →</a>
    </div>
    <div class="arrivals-slider">
        <div class="arrival-card">
            <img src="{{ asset('front-end/image/product/new black dress.png') }}" alt="Summer Bra Set" />
            <div class="arrival-info">
                <h4>Summer Breeze Cotton Bra</h4>
                <span>₹549</span>
            </div>
        </div>
        <div class="arrival-card">
            <img src="{{ asset('front-end/image/product/new gen z gym.png') }}" alt="High Impact Sports Bra" />
            <div class="arrival-info">
                <h4>High-Impact Sports Bra</h4>
                <span>₹649</span>
            </div>
        </div>
        <div class="arrival-card">
            <img src="{{ asset('front-end/image/product/new bra st.png') }}" alt="Strapless Convertible Bra" />
            <div class="arrival-info">
                <h4>Strapless Convertible Bra</h4>
                <span>₹599</span>
            </div>
        </div>
        <div class="arrival-card">
            <img src="{{ asset('front-end/image/product/new strap.png') }}" alt="Bridal Gift Pack" />
            <div class="arrival-info">
                <h4>Bridal Lingerie Gift Pack</h4>
                <span>₹1,499</span>
            </div>
        </div>
        <div class="arrivals-promo-copy">
            <span>New season, new confidence</span>
            <h3>Find your next everyday favorite.</h3>
            <p>Soft fabrics, flattering fits, and fresh styles made for every mood.</p>
            <a href="new-aarawel.html">Explore new arrivals <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- PROMO BANNER -->
<section class="promo-banner reveal">
    <div class="promo-content">


        <a href="{{ route('product-category') }}" class="btn-primary"></a>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials">
    <div class="testimonials-header">
        <span class="genz-badge-pill"><i class="fa-solid fa-heart"></i> Loved By You</span>
        <h2 class="section-title reveal" style="margin-bottom:12px;">What Our Customers Say</h2>
        <p class="testimonials-subtitle">Real words from customers who found their perfect fit with us.</p>
    </div>
    <div class="testi-grid">
        <div class="testi-card reveal delay-100">
            <div class="stars">★★★★★</div>
            <p>"The SOIE-inspired silk set is incredibly soft and elegant. Fast delivery from Snazzyway collection!"</p>
            <div class="testi-author">
                <img src="https://i.pravatar.cc/40?img=1" alt="User" />
                <span>Priya Sharma</span>
            </div>
        </div>
        <div class="testi-card reveal delay-200">
            <div class="stars">★★★★★</div>
            <p>"Enamor contour fit bra gives amazing support! Fits perfectly and looks super premium."</p>
            <div class="testi-author">
                <img src="https://i.pravatar.cc/40?img=5" alt="User" />
                <span>Ananya Verma</span>
            </div>
        </div>
        <div class="testi-card reveal delay-300">
            <div class="stars">★★★★☆</div>
            <p>"Love Clovia-inspired bralettes! Colorful, comfortable and great quality."</p>
            <div class="testi-author">
                <img src="https://i.pravatar.cc/40?img=9" alt="User" />
                <span>Sneha Kapoor</span>
            </div>
        </div>
    </div>
</section>

<!-- CONTINUOUS VIDEO SHOWCASE -->
<section class="video-showcase reveal" id="videoShowcase">
    <video class="video-showcase-player" autoplay muted loop playsinline preload="metadata"
        poster="{{ asset('front-end/image/index/Untitleddesign.png') }}">
        <source src="{{ asset('front-end/image/index/109f65d4f2a14d3f92e286b955eb455b.HD-1080p-7.2Mbps-88828922.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
</section>

<!-- LOOKBOOK GALLERY -->
<section class="lookbook">
    <div class="lookbook-header">
        <span class="genz-badge-pill"><i class="fa-solid fa-camera-retro"></i> Style Inspiration</span>
        <h2 class="section-title reveal" style="margin-bottom:12px;">The Lingerie Lookbook</h2>
        <p class="lookbook-sub">Curated styles combining SOIE, Enamor &amp; Clovia inspirations with Snazzyway data.</p>
    </div>
    <div class="lookbook-grid">

        <div class="look-item look-tall reveal-left">
            <img src="{{ asset('front-end/image/index/Effortlesscomfort..png') }}" alt="SOIE Silk Luxe" />
            <div class="look-label">
                <a href="{{ route('product-category') }}">Shop Silk →</a>
            </div>
        </div>

        <div class="look-item reveal-zoom delay-100">
            <img src="{{ asset('front-end/image/index/desined.png') }}" alt="Enamor Fit" />
            <div class="look-label">
                <a href="{{ route('product-category') }}">Shop Fit →</a>
            </div>
        </div>

        <div class="look-item reveal-zoom delay-200">
            <img src="{{ asset('front-end/image/index/coradenes.png') }}" alt="Clovia Vibes" />
            <div class="look-label">
                <a href="{{ route('product-category') }}">Shop Vibes →</a>
            </div>
        </div>

        <div class="look-item look-wide reveal-right">
            <img src="{{ asset('front-end/image/index/OWNYOURLOOK.png') }}" alt="Bridal Elegance" />
            <div class="look-label">
                <a href="{{ route('product-category') }}">Shop Bridal →</a>
            </div>
        </div>

    </div>
</section>

<!-- FULL-WIDTH VISUAL HERO CTA IMAGE BANNER -->
<section class="visual-hero-cta reveal" id="visualCtaBanner">
    <div class="visual-cta-content">
        <p>Discover SOIE Silk Luxury, ENAMOR Precision Fit &amp; CLOVIA Gen-Z Bralette Energy</p>
        <a href="{{ route('product-category') }}" class="visual-cta-btn">Shop The Collection →</a>
    </div>
</section>

<!-- VISUAL INSTAGRAM IMAGE GALLERY SECTION -->
<section class="visual-gallery-section reveal" id="visualGallery">
    <div class="gallery-header">
        <span class="gallery-insta-handle"><i class="fab fa-instagram"></i> @LACEHARBOR_SNAZZYWAY</span>
        <h2 class="section-title" style="margin-bottom:8px;">#LACEHARBORVibes Gallery 📸</h2>
        <p style="color:#666; font-size:0.95rem;">Real customer photos &amp; aesthetic Gen-Z trend inspirations.</p>
    </div>
    <div class="gallery-grid">

        <div class="gallery-card">
            <img src="{{ asset('front-end/image/product/6.png') }}" alt="SOIE Silk Luxe Look" />
            <div class="gallery-overlay">
                <span class="gallery-handle">@soie.luxe</span>
                <div class="gallery-bottom">
                    <span class="gallery-likes"><i class="fas fa-heart"></i> 2.8k</span>
                    <a href="{{ route('product-category') }}" class="gallery-shop-link">Shop →</a>
                </div>
            </div>
        </div>

        <div class="gallery-card">
            <img src="{{ asset('front-end/image/product/7.png') }}" alt="Bridal Lace Look" />
            <div class="gallery-overlay">
                <span class="gallery-handle">@bridal.glow</span>
                <div class="gallery-bottom">
                    <span class="gallery-likes"><i class="fas fa-heart"></i> 3.4k</span>
                    <a href="{{ route('product-category') }}" class="gallery-shop-link">Shop →</a>
                </div>
            </div>
        </div>

        <div class="gallery-card">
            <img src="{{ asset('front-end/image/product/9.png') }}" alt="Gen Z Bralette Energy" />
            <div class="gallery-overlay">
                <span class="gallery-handle">@genz.bralette</span>
                <div class="gallery-bottom">
                    <span class="gallery-likes"><i class="fas fa-heart"></i> 4.1k</span>
                    <a href="{{ route('product-category') }}" class="gallery-shop-link">Shop →</a>
                </div>
            </div>
        </div>

        <div class="gallery-card">
            <img src="{{ asset('front-end/image/product/8.png') }}" alt="Enamor Fit Look" />
            <div class="gallery-overlay">
                <span class="gallery-handle">@enamor.comfort</span>
                <div class="gallery-bottom">
                    <span class="gallery-likes"><i class="fas fa-heart"></i> 1.9k</span>
                    <a href="{{ route('product-category') }}" class="gallery-shop-link">Shop →</a>
                </div>
            </div>
        </div>

        <div class="gallery-card">
            <img src="{{ asset('front-end/image/product/5.png') }}" alt="Neon Pop Lounge" />
            <div class="gallery-overlay">
                <span class="gallery-handle">@clovia.pop</span>
                <div class="gallery-bottom">
                    <span class="gallery-likes"><i class="fas fa-heart"></i> 2.6k</span>
                    <a href="{{ route('product-category') }}" class="gallery-shop-link">Shop →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection