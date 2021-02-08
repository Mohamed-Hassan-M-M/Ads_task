<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="{{route('website.home')}}" class="h2 mb-0" @if(\Illuminate\Support\Facades\Request::is('user/*')) style="color: #007bff !important;" @endif >Finances<span class="text-primary">.</span> </a></h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="{{route('website.home')}}" class="nav-link" >Home</a></li>
                        <li class="has-children">
                            <a href="#about-section" class="nav-link" >About Us</a>
                            <ul class="dropdown">
                                <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                                <li><a href="#services-section" class="nav-link">Services</a></li>
                            </ul>
                        </li>
                        <li><a href="#blog-section" class="nav-link" >Blog</a></li>
                        <li><a href="#contact-section" class="nav-link" >Contact</a></li>
                        @auth
                            <li class="has-children">
                                <a class="nav-link" style="font-weight: bolder;color: forestgreen !important;">{{auth('web')->user()->name}}</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('user.logout')}}" class="nav-link">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{route('user.login')}}" class="nav-link">Login</a>|<a href="{{route('user.register')}}" class="nav-link">Register</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3" @if(\Illuminate\Support\Facades\Request::is('user/*')) style="color: #000 !important;" @endif ></span></a></div>

        </div>
    </div>

</header>
@if(\Illuminate\Support\Facades\Request::is('/*'))
</div>
@endif
