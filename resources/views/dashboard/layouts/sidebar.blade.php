<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Feature</div>
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    History
                </a>
                @can('customer')
                <a class="nav-link {{ Request::is('dashboard/reviews*') ? 'active' : '' }}" href="/dashboard/reviews">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-star"></i></div>
                    Review
                </a>    
                @endcan
                @can('admin')
                <div class="sb-sidenav-menu-heading">Admin Feature</div>
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="/dashboard/products">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-camera"></i></div>
                    Products
                </a>
                <a class="nav-link {{ Request::is('dashboard/booking-list*') ? 'active' : '' }}" href="/dashboard/booking-list">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                    Booking List
                </a>
                @endcan
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>