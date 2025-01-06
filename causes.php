<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Capital community care</title>

    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
    
<!--header-->
<?php
    require 'header.php';
?>
<!-- //header -->
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Causes</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->
<!--/causes-sec-->

<?php require './handler/view_causes.php'?>

<div class="w3-services py-5">
    <div class="container py-lg-4 py-md-3">
        <div class="row w3-services-grids">
            <?php if (!empty($campaigns)): ?>
                <?php foreach ($campaigns as $campaign): ?>
                    <div class="col-lg-4 col-md-6 causes-grid">
                        <div class="causes-grid-info">
                            <a href="donation_page.php?id=<?= $campaign['no']; ?>" class="cause-title-wrap">
                                <p class="title">Campaign</p>
                                <h4 class="cause-title"><?= htmlspecialchars($campaign['judul']); ?></h4>
                                <p class="counter-inherit">
                                    Rp<?= number_format($campaign['dana_terkumpul'], 0, ',', '.'); ?> Donated of 
                                    Rp<?= number_format($campaign['target_dana'], 0, ',', '.'); ?>
                                </p>
                            </a>
                            <div class="barWrapper my-4">
                                <div class="progress-box">
                                    <?php
                                    $progress = ($campaign['dana_terkumpul'] / $campaign['target_dana']) * 100;
                                    ?>
                                    <div class="progress" data-value="<?= round($progress); ?>">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?= round($progress); ?>" 
                                             aria-valuemin="0" aria-valuemax="100" style="width: <?= round($progress); ?>%;">
                                            <div class="value-holder"><span class="value"><?= round($progress); ?>%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="donation_page.php?id=<?= $campaign['no']; ?>">
                                <img src="<?= htmlspecialchars($campaign['gambar']); ?>" class="img-fuild radius-image-full" alt="">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Tidak ada campaign untuk ditampilkan.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- footer 14 -->
<div class="w3l-footer-main">
    <div class="w3l-sub-footer-content">
        <section class="_form-3">
            <div class="form-main">
                <div class="container">
                 
                </div>
            </div>
        </section>
        <!-- Footers-14 -->
        <footer class="footer-14">
            <div id="footers14-block">
                <div class="container">
                    <div class="footers20-content">
                        <div class="d-grid grid-col-4 grids-content">
                            <div class="column">
                                <h4>Our Address</h4>
                                  <p>Unit 1, 46-48 Colbee Court, Phillip, ACT 2606</p>
                            </div>
                            <div class="column">
                                <h4>Call Us</h4>
                                <p>Available 09:00 am -17:00 pm</p>
                                <p><a href="tel:+9876543210">98-76-54-32-10</a></p>
                            </div>
                            <div class="column">
                                <h4>Mail Us</h4>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                                <p><a href="mailto:no.reply@example.com">no.reply@example.com</a></p>
                            </div>
                            <div class="column">
                                <h4>Follow Us On</h4>
                                <ul>
                                    <li><a href="#facebook"><span class="fa fa-facebook"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fa fa-linkedin"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fa fa-twitter"
                                                aria-hidden="true"></span></a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footers14-bottom d-flex justify-content-center">
                        <div class="copyright">
                            <p>© 2022 Save Poor. All rights reserved. Design by <a href="https://api.whatsapp.com/send?phone=9074397747&text=If%20you%20want%20website%20Contact%20me%20,%20Just%20Hy"
                                target="_blank">Basil Pulikuth</a></p>
                        </div>
                        <!-- <div class="language-select d-flex">
                            <span class="fa fa-language" aria-hidden="true"></span>
                            <select>
                                <option>English</option>
                                <option>Estonina</option>
                                <option>Deutsch</option>
                                <option>Nederlan;ds</option>
                            </select>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                &uarr;
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };
  
                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }
  
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
  
        </footer>
        <!-- Footers-14 -->
    </div>
  </div>
  <!-- //footer 14 -->

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