<!DOCTYPE html>
<html lang="en">

@include('user.components.parts.page_head')


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('user.components.parts.top')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('user.components.parts.header')

    <!-- Navbar End -->



    @yield('content')


    <!-- Footer Start -->
    @include('user.components.parts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @include('user.components.parts.js')
</body>

</html>