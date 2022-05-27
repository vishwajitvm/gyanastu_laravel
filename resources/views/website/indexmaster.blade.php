<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/fontawesome.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/flaticon.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/Style2.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/dark.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />
    <title>Gyanastu </title>
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/images/fav icon gyanastu.png')}}">

    <style>
      
    </style>

</head>


<body>
    <!-- loader -->
    @include('website.body.loader')
    <!--  loader clos -->

    <!-- POP UP -->
    {{-- @include('website.body.popup_query_form') --}}

    <!--popup form-->

    <!-- Navbar form closed -->
    @include('website.body.header')
    <!--navbar end-->

    <!--content-section-->
    <main>
        @yield('website')
    </main>
    <!--content-->



    <!-- footer area  -->
    @include('website.body.footer')
    <!--footer end-->




    <a href="#" class="scroll-top wow animate__animated animate__bounceInDown">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>

    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        window.addEventListener("load", function () {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup").style.display = "block";
                },
                2000
            )
        });


        document.querySelector("#close").addEventListener("click", function () {
            document.querySelector(".popup").style.display = "none";
        });
    </script>
</body>

<!-- Mirrored from templates.hibootstrap.com/edvi/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 10:45:05 GMT -->

</html>