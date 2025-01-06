<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Azzam's Fundraiser</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-2.css">
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  </head>
  <body>

    <!-- Header -->

<?php
    require 'header.php';
?>
     
    
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a href="causes.php" class="btn btn-primary stretched-link">Kembali</a>
        <span class="navbar-brand mb-0 h1 mx-auto">Help From Injuries</span>
      </div>
    </nav>
    <div class="img-donate">
      <img src="assets/images/blog1.jpg" alt="" class="img-blog1" />
    </div>

    <!-- Donation Progress Section -->
    <div class="container my-5">
      <h3>Donasi Terkumpul</h3>
      <div class="progress mb-4">
        <div
          class="progress-bar"
          role="progressbar"
          style="width: 70%"
          aria-valuenow="70"
          aria-valuemin="0"
          aria-valuemax="100">
          70% Funded
        </div>
      </div>
      <p>We are so close! Your support is making a big difference.</p>
    </div>

    <!-- Story Section -->
    <div class="container my-5" id="story">
      <h3>The Story</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
       <!-- Button Donate -->
    <div class="text-center mt-5">
      </div>
      <a href="payment.php"><button type="submit" class="btn btn-success btn-lg">Donasi Sekarang</button>
      </a></div>
    </div>

    
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
      <p>&copy; Alwi | All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

    <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
    <script src="assets/js/owl.carousel.js"></script>

    <!-- script for banner slider-->
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          dots: false,
          margin: 0,
          nav: true,
          responsiveClass: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1
            },
            480: {
              items: 1
            },
            667: {
              items: 1
            },
            1000: {
              items: 1
            }
          }
        })
      })
    </script>
    <!-- //script -->

    <!-- script for tesimonials carousel slider -->
    <script>
      $(document).ready(function () {
        $("#owl-demo1").owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1
            },
            736: {
              items: 1
            },
            1000: {
              items: 2,
              loop: false
            }
          }
        })
      })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <script src="assets/js/counter.js"></script>

    <!--/MENU-JS-->
    <script>
      $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
          $("#site-header").addClass("nav-fixed");
        } else {
          $("#site-header").removeClass("nav-fixed");
        }
      });

      //Main navigation Active Class Add Remove
      $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
      });
      $(document).on("ready", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
        $(window).on("resize", function () {
          if ($(window).width() > 991) {
            $("header").removeClass("active");
          }
        });
      });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->


  </body>
</html>
