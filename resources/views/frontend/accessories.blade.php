@extends('frontend.layouts.master')

@section('content')

<!-- PAGE BANNER -->
<div class="page-banner">
    <div>
        <p class="hero-sub" style="margin-bottom:8px">LACEHARBOR Collection</p>
        <h1>Shop <span>Accessories</span></h1>
    </div>
    <div class="breadcrumb">
        <a href="{{ url('/') }}">Home</a><span>/</span>
        <a href="{{ route('product-category') }}">Shop</a><span>/</span>
        Accessories
    </div>
</div>

<!-- MARQUEE -->
<div class="marquee-wrap">
    <div class="marquee-track">
        <span>JEWELLERY</span><span>★</span>
        <span>BAGS & WALLETS</span><span>★</span>
        <span>HAIR ACCESSORIES</span><span>★</span>
        <span>FREE SHIPPING ₹999+</span><span>★</span>
        <span>JEWELLERY</span><span>★</span>
        <span>BAGS & WALLETS</span><span>★</span>
        <span>HAIR ACCESSORIES</span><span>★</span>
        <span>FREE SHIPPING ₹999+</span><span>★</span>
    </div>
</div>

<!-- CATEGORY TABS -->
<div class="cat-tabs">
    <button class="cat-tab active" onclick="filterCat(this, 'all')">All</button>
    <button class="cat-tab" onclick="filterCat(this, 'jewellery')">Jewellery</button>
    <button class="cat-tab" onclick="filterCat(this, 'bags')">Bags & Wallets</button>
    <button class="cat-tab" onclick="filterCat(this, 'hair')">Hair Accessories</button>
    <button class="cat-tab" onclick="filterCat(this, 'scarves')">Scarves & Wraps</button>
    <button class="cat-tab" onclick="filterCat(this, 'belts')">Belts</button>
</div>

<!-- TOOLBAR -->
<div class="products-toolbar">
    <div class="toolbar-left">Showing <strong id="visibleCount">12</strong> of <strong>12</strong> products</div>
    <div class="toolbar-right">
        <select class="sort-select" id="sortSelect">
            <option>Sort by: Latest</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Top Rated</option>
        </select>
        <div class="view-toggle">
            <button class="active" id="gridBtn" title="Grid View"><i class="fas fa-th"></i></button>
            <button id="listBtn" title="List View"><i class="fas fa-list"></i></button>
        </div>
    </div>
</div>

<!-- PRODUCTS -->
<section class="products-section">
    <div class="cat-products-grid" id="productsGrid">

        <div class="product-card" data-cat="jewellery" data-price="799">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=500&q=80" alt="Pearl Necklace Set" />
                <span class="badge">Hot</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Pearl Necklace Set</h4>
                <div class="product-price"><span class="price">₹799</span><span class="old-price">₹1,299</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="jewellery" data-price="599">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?w=500&q=80" alt="Gold Hoop Earrings" />
                <span class="badge">New</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Gold Hoop Earrings</h4>
                <div class="product-price"><span class="price">₹599</span><span class="old-price">₹899</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="jewellery" data-price="1299">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1611591437281-460bfbe1220a?w=500&q=80" alt="Layered Bracelet Set" />
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Layered Bracelet Set</h4>
                <div class="product-price"><span class="price">₹1,299</span><span class="old-price">₹1,799</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="bags" data-price="2499">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=500&q=80" alt="Leather Tote Bag" />
                <span class="badge">New</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Leather Tote Bag</h4>
                <div class="product-price"><span class="price">₹2,499</span><span class="old-price">₹3,499</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="bags" data-price="1899">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=500&q=80" alt="Mini Sling Bag" />
                <span class="badge sale">Sale</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Mini Sling Bag</h4>
                <div class="product-price"><span class="price">₹1,899</span><span class="old-price">₹2,699</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="bags" data-price="999">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500&q=80" alt="Quilted Wallet" />
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Quilted Wallet</h4>
                <div class="product-price"><span class="price">₹999</span><span class="old-price">₹1,399</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="hair" data-price="349">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1512207736890-6ffed8a84e8d?w=500&q=80" alt="Satin Scrunchie Set" />
                <span class="badge">New</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Satin Scrunchie Set</h4>
                <div class="product-price"><span class="price">₹349</span><span class="old-price">₹549</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="hair" data-price="699">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=500&q=80" alt="Pearl Hair Pins" />
                <span class="badge">Hot</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Pearl Hair Pins</h4>
                <div class="product-price"><span class="price">₹699</span><span class="old-price">₹999</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="hair" data-price="499">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1595475207225-428b62bda831?w=500&q=80" alt="Embellished Headband" />
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Embellished Headband</h4>
                <div class="product-price"><span class="price">₹499</span><span class="old-price">₹749</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="scarves" data-price="1199">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1520903920243-00d872a2d1c9?w=500&q=80" alt="Silk Printed Scarf" />
                <span class="badge">New</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Silk Printed Scarf</h4>
                <div class="product-price"><span class="price">₹1,199</span><span class="old-price">₹1,699</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="scarves" data-price="899">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=500&q=80" alt="Pashmina Wrap" />
                <span class="badge sale">Sale</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Pashmina Wrap</h4>
                <div class="product-price"><span class="price">₹899</span><span class="old-price">₹1,299</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

        <div class="product-card" data-cat="belts" data-price="749">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1603487742131-4160ec999306?w=500&q=80" alt="Slim Leather Belt" />
                <span class="badge">New</span>
                <div class="product-actions">
                    <button><i class="fas fa-heart"></i></button>
                    <button onclick="window.location='{{ route('products-details') }}'"><i class="fas fa-eye"></i></button>
                </div>
            </div>
            <div class="product-info">
                <p class="product-brand">LACEHARBOR</p>
                <h4>Slim Leather Belt</h4>
                <div class="product-price"><span class="price">₹749</span><span class="old-price">₹1,099</span></div>
                <a href="{{ route('products-details') }}" class="shop-link">Shop Now →</a>
            </div>
        </div>

    </div>

    <!-- PAGINATION -->
    <div class="pagination">
        <button class="prev-next">← Prev</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button class="prev-next">Next →</button>
    </div>
</section>


@endsection