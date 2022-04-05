<!-- main-header opened -->
<div class="main-header nav nav-item hor-header top-header">
    <div class="container">
        <div class="main-header-left ">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="#">
                <img src="/assets/img/brand/logo-white.png" class="desktop-dark">
                <img src="/assets/img/brand/logo.png" class="desktop-logo">
                <img src="/assets/img/brand/favicon.png" class="desktop-logo-1">
                <img src="/assets/img/brand/favicon-white.png" class="desktop-logo-dark">
            </a>
            @include('vendor.valex.header.search')
        </div><!-- search -->
        <a class="header-brand header-brand2 d-none d-lg-block" href="#">
            <img src="/assets/img/brand/logo-white.png" class="desktop-dark">
            <img src="/assets/img/brand/logo.png" class="desktop-logo">
            <img src="/assets/img/brand/favicon.png" class="desktop-logo-1">
            <img src="/assets/img/brand/favicon-white.png" class="desktop-logo-dark">
        </a>
        <div class="main-header-right">
            @include('vendor.valex.header.flag')
            <div class="nav nav-item  navbar-nav-right ml-auto">
            @include('vendor.valex.header.search-mobile')
            @include('vendor.valex.header.message')
            @include('vendor.valex.header.notif')
                
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
                </div>
            @include('vendor.valex.header.profile')
                <div class="dropdown main-header-message right-toggle">
                    <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-header -->