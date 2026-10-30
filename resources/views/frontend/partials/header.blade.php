  <!-- TOP BAR -->
  <div class="topbar">
      Free shipping on orders above ₹999 &nbsp;|&nbsp; Use code <strong>LACEHARBOR10</strong> for 10% off
  </div>
  <header class="luxury-navbar">
      <div class="nav-icons left-icons"><a href="#" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></a>
      </div>
      <ul class="nav-menu nav-menu-left">
          <li><a href="{{ route('new-arrivals') }}">New</a></li>
          <li class="has-dropdown"><a href="{{ route('product-category') }}">Bras <i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown">
                  <li><a href="{{ route('product-category') }}">✨ All Bras</a></li>
                  <li><a href="#">Padded Bras</a></li>
                  <li><a href="#">Non-Padded Bras</a></li>
                  <li><a href="#">Sports Bras</a></li>
                  <li><a href="#">Wireless Bras</a></li>
                  <li><a href="#">T-Shirt Bras</a></li>
              </ul>
          </li>
          <li class="has-dropdown"><a href="{{ route('product-category') }}">Panties <i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown">
                  <li><a href="{{ route('product-category') }}">🌸 All Panties</a></li>
                  <li><a href="#">Bikini</a></li>
                  <li><a href="#">Hipster</a></li>
                  <li><a href="#">Thongs</a></li>
                  <li><a href="#">Boy Shorts</a></li>
                  <li><a href="#">High Waist</a></li>
              </ul>
          </li>
      </ul>
      <a href="index.html" class="logo"><img src="{{ asset('front-end/image/logo.jpeg') }}" alt="LACEHARBOR" class="logo-img" /></a>
      <ul class="nav-menu nav-menu-right">
          <li class="has-dropdown"><a href="{{ route('product-category') }}">Nightwear <i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown">
                  <li><a href="{{ route('product-category') }}">🌙 All Nightwear</a></li>
                  <li><a href="#">Night Suits</a></li>
                  <li><a href="#">Nighty &amp; Gowns</a></li>
                  <li><a href="#">Sleep Shorts</a></li>
                  <li><a href="#">Robes</a></li>
                  <li><a href="#">Camisoles</a></li>
              </ul>
          </li>
          <li><a href="sale.html">Sale</a></li>
          <li><a href="#">Accessories</a></li>
      </ul>
      <div class="nav-icons right-icons">
          <a href="login.html" aria-label="Account"><i class="fa-regular fa-user"></i></a>
          <div class="mini-cart-wrap" id="miniWishWrap">
              <button class="cart mini-cart-btn" id="miniWishBtn" aria-label="Wishlist"><i
                      class="fa-regular fa-heart"></i><span id="navWishCount">0</span></button>
              <div class="mini-cart-dropdown" id="miniWishDropdown">
                  <div class="mc-header"><span>Wishlist (<span id="mwCount">0</span>)</span><a href="wishlist.html"
                          class="mc-view-all">View All</a></div>
                  <div class="mc-items" id="mwItems"></div>
                  <div class="mc-footer"><a href="wishlist.html" class="mc-checkout-btn">View Wishlist</a></div>
              </div>
          </div>
          <div class="mini-cart-wrap" id="miniCartWrap">
              <button class="cart mini-cart-btn" id="miniCartBtn" aria-label="Shopping Bag"><i
                      class="fa-solid fa-bag-shopping"></i><span id="navCartCount">0</span></button>
              <div class="mini-cart-dropdown" id="miniCartDropdown">
                  <div class="mc-header"><span>My Cart (<span id="mcCount">0</span>)</span><a href="cart.html"
                          class="mc-view-all">View All</a></div>
                  <div class="mc-items" id="mcItems"></div>
                  <div class="mc-footer">
                      <div class="mc-total"><span>Total</span><strong id="mcTotal">₹0</strong></div><a href="cart.html"
                          class="mc-checkout-btn">Go to Cart</a>
                  </div>
              </div>
          </div>
      </div>
      <button class="mobile-toggle" id="mobileHamburger" aria-label="Menu"><i class="fas fa-bars"></i></button>
  </header>


  <!-- ======== Mobile Toggle ======= -->
  <div class="menu-overlay" id="menuOverlay"></div>
  <div class="mobile-menu-container" id="mobileMenuDrawer">
      <button class="close-mobile-menu" id="closeMobileMenu"><i class="fas fa-times"></i></button>
      <ul class="mobile-nav-menu" id="mobileNavList">
          <li><a href="new-aarawel.html">New Arrivals</a></li>
          <li class="mobile-has-dropdown">
              <div class="mobile-menu-link-wrapper"><a href="{{ route('product-category') }}" class="mobile-parent-link">Bras</a><button
                      class="mobile-dropdown-toggle" data-target="mob-bras"><i class="fas fa-chevron-down"></i></button></div>
              <ul class="dropdown-mobile" id="mob-bras">
                  <li><a href="{{ route('product-category') }}">✨ All Bras</a></li>
                  <li><a href="#">Padded Bras</a></li>
                  <li><a href="#">Non-Padded Bras</a></li>
                  <li><a href="#">Sports Bras</a></li>
                  <li><a href="#">Wireless Bras</a></li>
                  <li><a href="#">T-Shirt Bras</a></li>
              </ul>
          </li>
          <li class="mobile-has-dropdown">
              <div class="mobile-menu-link-wrapper"><a href="{{ route('product-category') }}" class="mobile-parent-link">Panties</a><button
                      class="mobile-dropdown-toggle" data-target="mob-panties"><i class="fas fa-chevron-down"></i></button></div>
              <ul class="dropdown-mobile" id="mob-panties">
                  <li><a href="{{ route('product-category') }}">🌸 All Panties</a></li>
                  <li><a href="#">Bikini</a></li>
                  <li><a href="#">Hipster</a></li>
                  <li><a href="#">Thongs</a></li>
                  <li><a href="#">Boy Shorts</a></li>
                  <li><a href="#">High Waist</a></li>
              </ul>
          </li>
          <li class="mobile-has-dropdown">
              <div class="mobile-menu-link-wrapper"><a href="{{ route('product-category') }}" class="mobile-parent-link">Nightwear</a><button
                      class="mobile-dropdown-toggle" data-target="mob-nightwear"><i class="fas fa-chevron-down"></i></button>
              </div>
              <ul class="dropdown-mobile" id="mob-nightwear">
                  <li><a href="{{ route('product-category') }}">🌙 All Nightwear</a></li>
                  <li><a href="#">Night Suits</a></li>
                  <li><a href="#">Nighty &amp; Gowns</a></li>
                  <li><a href="#">Sleep Shorts</a></li>
                  <li><a href="#">Robes</a></li>
                  <li><a href="#">Camisoles</a></li>
              </ul>
          </li>
          <li><a href="sale.html">Sale <span
                      style="font-size:12px;background:#d56d90;color:#fff;padding:2px 8px;border-radius:20px;margin-left:10px;">-20%</span></a>
          </li>
          <li><a href="#">Accessories</a></li>
      </ul>
      <div class="mobile-footer-links">
          <a href="login.html"><i class="fa-regular fa-user"></i> My Account</a>
          <a href="wishlist.html"><i class="fa-regular fa-heart"></i> Wishlist</a>
          <a href="#"><i class="fa-solid fa-tag"></i> Offers</a>
      </div>
  </div>