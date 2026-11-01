   <header class="zentic-topbar">
       <div class="topbar-left">
           <a href="index.html" class="brand-link d-lg-none d-block">
               <div class="brand-icon">
                   <img src="{{ asset('back-end/images/logo.png') }}" alt="LaceHarbor" style="width: 32px; height: 32px;">
               </div>
           </a>
           <button class="sidebar-toggle-btn" id="sidebarToggle"><i class="icon-menu"></i></button>
       </div>
       <div class="topbar-center">
           <div class="topbar-search">
               <i class="icon-search search-icon"></i>
               <input type="text" class="search-input" placeholder="Search anything… (Ctrl+K)" id="globalSearch">
               <kbd class="search-kbd">Ctrl+K</kbd>
           </div>
       </div>
       <div class="topbar-right">
           <div class="lang-switcher">
               <a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer">
                   <button class="lang-btn" title="Change language">
                       <img src="{{ asset('back-end/images/LaceHarbor.png') }}" alt="Visit Website" class="lang-flag-btn">
                       <span class="lang-label">Visit Website</span>
                       <i class="icon-globe"></i>
                   </button>
               </a>
           </div>
           <div class="topbar-divider-none"></div>
           <button class="topbar-btn header-icon" id="themeToggle" title="Toggle theme">
               <i class="icon-moon" id="themeIcon"></i>
           </button>
           <div class="topbar-divider"></div>
           <div class="topbar-user position-relative">
               <img class="avatar-gen-img topbar-user-avatar" src="{{ asset('back-end/images/logo.png') }}" data-size="36"
                   alt="Laceharbor" />
               <div class="user-dropdown-menu">
                   <div class="user-dropdown-header">
                       <img class="avatar-gen-img udm-avatar" src="{{ asset('back-end/images/logo.png') }}" data-size="40"
                           alt="Laceharbor" />
                       <div class="udm-info">
                           <p class="user-dropdown-name">Laceharbor</p>
                           <p class="user-dropdown-email">admin@laceharbor.com</p>
                       </div>
                   </div>
                   <div class="udm-body">
                       <a href="profile.html" class="user-dropdown-item"><i class="icon-circle-user"></i><span>My
                               Profile</span></a>
                       <a href="settings.html" class="user-dropdown-item"><i class="icon-settings"></i><span>Account
                               Settings</span></a>
                       <hr class="user-dropdown-divider">
                       <a href="login.html" class="user-dropdown-item danger"><i class="icon-log-out"></i><span>Sign
                               Out</span></a>
                   </div>
               </div>
           </div>
       </div>
   </header>