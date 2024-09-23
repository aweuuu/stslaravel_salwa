<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profile</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/about">About Me</a></li>
          <li><a href="/projek">Projek</a></li>
          <li><a href="/kontak">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>
 <!-- Services Section -->
 <section id="services" class="services section light-background">

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
<h2>Proyek</h2>
<p>ini adalah beberapa hasil projek yang pernah saya buat</p>
</div><!-- End Section Title -->

<div class="container">

<div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

 <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
   <li data-filter="*" class="filter-active">All</li>
 </ul><!-- End Portfolio Filters -->

 <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
     <img src="assets/img/portfolio/projek1.jpg" class="img-fluid" alt="">
     <div class="portfolio-info">
       <h4>Projek artikel 1</h4>
       <p>Membuat projek membuat artikel berita menggunakan laravel</p>
       <a href="assets/img/portfolio/projek1.jpg" title="projek1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
     </div>
   </div><!-- End Portfolio Item -->

   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
     <img src="assets/img/portfolio/projek2.jpg" class="img-fluid" alt="">
     <div class="portfolio-info">
       <h4>projek peminjaman 2</h4>
       <p>Membuat projek peminjaman barang menggunakan php native untuk tugas akhir semester di kls11</p>
       <a href="assets/img/portfolio/projek2.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
     </div>
   </div><!-- End Portfolio Item -->

   

   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
     <img src="assets/img/portfolio/projek3.jpeg" class="img-fluid" alt="">
     <div class="portfolio-info">
       <h4>Projek Profile 2</h4>
       <p>Lorem ipsum, dolor sit amet consectetur</p>
       <a href="assets/img/portfolio/projek3.jpeg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
     </div>
   </div><!-- End Portfolio Item -->

  
 </div><!-- End Portfolio Container -->

</div>

</div>

</section><!-- /Portfolio Section -->

 <!-- Scroll Top -->
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

        </body>
        </html>