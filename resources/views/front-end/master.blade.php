<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/front-end/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/front-end/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/front-end/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/front-end/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/front-end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/front-end/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/front-end/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/front-end/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/front-end/assets/css/style.css')}}" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  @include('front-end.partials.topbar')

  <!-- ======= Header ======= -->
  @include('front-end.partials.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('front-end.partials.section')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('front-end.partials.about-section')
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    @include('front-end.partials.why-us-section')
   <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    @include('front-end.partials.menu-section')
   <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    @include('front-end.partials.special-section')
    <!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    @include('front-end.partials.event-section')
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    @include('front-end.partials.book-table-section')
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->

    <!-- End Testimonials Section -->
    @include('front-end.partials.testi-section')
    <!-- ======= Gallery Section ======= -->
    @include('front-end.partials.gallery')
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    @include('front-end.partials.chef-section')
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    @include('front-end.partials.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('front-end.partials.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/front-end/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/front-end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/front-end/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/front-end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/front-end/assets/js/main.js')}}"></script>

</body>

</html>