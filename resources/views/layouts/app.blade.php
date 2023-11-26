<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('layouts.particles.header')

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.particles.sidebar')
        <div class="content">
            @yield("content")

            @include('layouts.particles.footer')
        </div>
    </div>

    
    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/lib/typed/typed.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>