 <aside class="zentic-sidebar" id="zenticSidebar">
     <div class="sidebar-brand">
         <a href="{{ route('backend.dashboard') }}" class="brand-link">
             <div class="brand-icon">
                 <img src="{{ asset('back-end/images/logo.png') }}" alt="Laceharbor" style="width: 40px; height: 40px;">
             </div>
             <div class="brand-text">
                 <span class="brand-name">Lace<span>harbor</span></span>
             </div>
         </a>
         <button class="sidebar-close-btn d-lg-none" id="sidebarClose"><i class="icon-x"></i></button>
     </div>

     <nav class="sidebar-nav">
         <div class="nav-section">
             <ul class="nav-list">
                 <li class="nav-item">
                     <a href="{{ route('backend.dashboard') }}"
                         class="nav-link {{ request()->routeIs('backend.dashboard') ? 'active' : '' }}">
                         <i class="icon-shopping-bag nav-icon"></i>
                         <span class="nav-text">Dashboard</span>
                     </a>
                 </li>

                 <li class="nav-item has-dropdown {{ request()->routeIs('backend.edit-about-page') ? 'active' : '' }}">
                     <a href="#" class="nav-link nav-dropdown-toggle {{ request()->routeIs('backend.edit-about-page') ? 'active' : '' }}">
                         <i class="icon-file nav-icon"></i>
                         <span class="nav-text">Static Pages</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>

                     <ul class="nav-dropdown-menu">
                         <li>
                             <a href="{{ route('backend.edit-about-page') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-about-page') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>About Us
                             </a>
                         </li>

                         <li>
                             <a href="{{ route('backend.edit-shipping-delivery-page') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-shipping-delivery-page') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Shipping & Delivery
                             </a>
                         </li>

                         <li>
                             <a href="{{ route('backend.edit-returns-exchanges-page') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-returns-exchanges-page') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Returns & Exchanges
                             </a>
                         </li>

                         <li>
                             <a href="{{ route('backend.edit-contact-us-page') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-contact-us-page') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Contacts Us
                             </a>
                         </li>

                         <li>
                             <a href="{{ route('backend.edit-privacy-policy-page') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-privacy-policy-page') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Privacy Policy
                             </a>
                         </li>

                         <li>
                             <a href="{{ route('backend.edit-terms-conditions-page') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-terms-conditions-page') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Terms & Conditions
                             </a>
                         </li>

                         <li>
                             <a href="{{ route('backend.edit-social-media-page') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-social-media-page') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Social Media
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('backend.manage-banner') }}"
                         class="nav-link {{ request()->routeIs('backend.manage-banner') ? 'active' : '' }}">
                         <i class="icon-images nav-icon"></i>
                         <span class="nav-text">Manage Banner</span>
                     </a>
                 </li>

                 <li class="nav-item has-dropdown {{ request()->routeIs('backend.mange-faq-categories') ? 'active' : '' }}">
                     <a href="#" class="nav-link nav-dropdown-toggle {{ request()->routeIs('backend.manage-faq-categories') ? 'active' : '' }}">
                         <i class="icon-circle-help nav-icon"></i>
                         <span class="nav-text">Manage FAQ's</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>

                     <ul class="nav-dropdown-menu">
                         <li>
                             <a href="{{ route('backend.manage-faq-categories') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.manage-faq-categories') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Add Categories
                             </a>
                         </li>

                         <li>
                             <a href="{{ route('backend.manage-faq') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.manage-faq') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Add FAQ's
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('backend.manage-blogs') }}"
                         class="nav-link {{ request()->routeIs('backend.manage-blogs') ? 'active' : '' }}">
                         <i class="icon-message-square nav-icon"></i>
                         <span class="nav-text">Manage Blogs</span>
                     </a>
                 </li>

                 <li class="nav-item has-dropdown {{ request()->routeIs('backend.manage-size-guide') ? 'active' : '' }}">
                     <a href="#" class="nav-link nav-dropdown-toggle {{ request()->routeIs('backend.manage-size-guide') ? 'active' : '' }}">
                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                         <span class="nav-text">Manage Products Setting</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>

                     <ul class="nav-dropdown-menu">
                         <li>
                             <a href="{{ route('backend.manage-size-guide') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.manage-size-guide') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Add Size Guide
                             </a>
                         </li>
                     </ul>
                 </li>


                 <li class="nav-item has-dropdown {{ request()->routeIs('backend.edit-all-pages-seo') ? 'active' : '' }}">
                     <a href="#" class="nav-link nav-dropdown-toggle {{ request()->routeIs('backend.edit-all-pages-seo') ? 'active' : '' }}">
                         <i class="fa-solid fa-magnifying-glass-chart nav-icon"></i>
                         <span class="nav-text">Manage SEO Setting</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>

                     <ul class="nav-dropdown-menu">
                         <li>
                             <a href="{{ route('backend.edit-all-pages-seo') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-all-pages-seo') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>All Pages SEO
                             </a>
                         </li>
                         <li>
                             <a href="{{ route('backend.edit-gtm-tag') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.edit-gtm-tag') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>GTM Tag
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="nav-item has-dropdown {{ request()->routeIs('backend.add-country') ? 'active' : '' }}">
                     <a href="#" class="nav-link nav-dropdown-toggle {{ request()->routeIs('backend.add-country') ? 'active' : '' }}">
                         <i class="fa-solid fa-gears nav-icon"></i>
                         <span class="nav-text">Manage Website Setting</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>

                     <ul class="nav-dropdown-menu">
                         <li>
                             <a href="{{ route('backend.manage-country') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.manage-country') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Add Country
                             </a>
                         </li>
                         <li>
                             <a href="{{ route('backend.manage-state') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.manage-state') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>Add State
                             </a>
                         </li>
                         <li>
                             <a href="{{ route('backend.general-setting') }}"
                                 class="nav-link nav-sublink d-flex align-items-center gap-2 {{ request()->routeIs('backend.general-setting') ? 'active' : '' }}">
                                 <span class="nav-sub-dot"></span>General Setting
                             </a>
                         </li>

                     </ul>
                 </li>

             </ul>
         </div>

         <!-- <div class="nav-section">
             <span class="nav-section-label">Manage website Settings<i class="icon-chevron-down nav-section-arrow"></i></span>
             <ul class="nav-list">
                 <li class="nav-item has-dropdown">
                     <a href="#" class="nav-link nav-dropdown-toggle">
                         <i class="icon-file nav-icon"></i>
                         <span class="nav-text">Static Pages</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>
                     <ul class="nav-dropdown-menu">
                         <li>
                             <a href="about.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>About Us</a>
                         </li>
                         <li>
                             <a href="settings.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Shipping & Delivery</a>
                         </li>
                         <li>
                             <a href="reports.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Returns & Exchanges</a>
                         </li>
                         <li>
                             <a href="notifications-page.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Contacts Us</a>
                         </li>
                         <li>
                             <a href="blank.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Privacy Policy</a>
                         </li>
                         <li>
                             <a href="all-pages.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Terms & Services</a>
                         </li>
                         <li>
                             <a href="all-pages.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Social Media</a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div> -->

         <div class="nav-section">
             <span class="nav-section-label">Ecommerce<i class="icon-chevron-down nav-section-arrow"></i></span>
             <ul class="nav-list">
                 <li class="nav-item">
                     <a href="ecommerce-dashboard.html" class="nav-link">
                         <i class="icon-shopping-bag nav-icon"></i>
                         <span class="nav-text">Ecommerce Dashboard</span>

                     </a>
                 </li>
                 <li class="nav-item has-dropdown">
                     <a href="#" class="nav-link nav-dropdown-toggle">
                         <i class="icon-box nav-icon"></i>
                         <span class="nav-text">Products</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>
                     <ul class="nav-dropdown-menu">
                         <li><a href="product-list.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Product List</a></li>
                         <li><a href="add-product.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Add Product</a></li>
                     </ul>
                 </li>
                 <li class="nav-item has-dropdown">
                     <a href="#" class="nav-link nav-dropdown-toggle">
                         <i class="icon-tags nav-icon"></i>
                         <span class="nav-text">Categories</span>
                         <i class="icon-chevron-down nav-dropdown-arrow"></i>
                     </a>
                     <ul class="nav-dropdown-menu">
                         <li><a href="category-list.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Category List</a></li>
                         <li><a href="add-category.html" class="nav-link nav-sublink d-flex align-items-center gap-2"><span
                                     class="nav-sub-dot"></span>Add Category</a></li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="order-list.html" class="nav-link">
                         <i class="icon-shopping-cart nav-icon"></i>
                         <span class="nav-text">Orders</span>

                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="customer-list.html" class="nav-link">
                         <i class="icon-users-round nav-icon"></i>
                         <span class="nav-text">Customers</span>

                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="reviews.html" class="nav-link">
                         <i class="icon-star nav-icon"></i>
                         <span class="nav-text">Manage Reviews</span>

                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="referrals.html" class="nav-link">
                         <i class="icon-handshake nav-icon"></i>
                         <span class="nav-text">Referrals</span>

                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="ecommerce-settings.html" class="nav-link">
                         <i class="icon-store nav-icon"></i>
                         <span class="nav-text">Store Settings</span>

                     </a>
                 </li>
             </ul>
         </div>
     </nav>


     <div class="sidebar-user" id="sidebarUserTrigger">
         <img class="sidebar-user-avatar" src="{{ asset('back-end/images/logo.png') }}" data-size="40" alt="LaceHarbor" />
         <div class="sidebar-user-info">
             <span class="sidebar-user-name">Laceharbor</span>
             <span class="sidebar-user-role">Super Admin</span>
         </div>
         <button class="sidebar-user-settings" id="sidebarUserBtn"><i class="icon-ellipsis-vertical"></i></button>
         <!-- Sidebar profile popup -->
         <div class="sidebar-profile-popup" id="sidebarProfilePopup">
             <div class="spp-header">
                 <div class="spp-avatar">
                     <img class="avatar-gen-img" src="{{ asset('back-end/images/logo.png') }}" data-size="40" alt="LaceHarbor" />
                 </div>
                 <div class="spp-info">
                     <span class="spp-name">Laceharbor</span>
                     <span class="spp-subtitle">Open profile settings</span>
                 </div>
                 <button class="spp-close" id="sidebarProfileClose"><i class="icon-x"></i></button>
             </div>
             <div class="spp-body">
                 <a href="profile.html" class="spp-item"><i class="icon-circle-user"></i> My Profile</a>
                 <a href="settings.html" class="spp-item"><i class="icon-settings"></i> Account Settings</a>
                 <hr class="spp-divider">
                 <a href="login.html" class="spp-item spp-danger"><i class="icon-log-out"></i> Sign Out</a>
             </div>
         </div>
     </div>
 </aside>