<!doctype html>
<html lang="en">
@include('website.includes.head')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="site-wrap">
    @include('website.includes.header')

    @include('website.includes.navbar')

    @yield('content')

    @include('website.includes.footer')
</div> <!-- .site-wrap -->
@include('website.includes.script')
@yield('script')
</body>
</html>
