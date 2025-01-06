<?php require './handler/history_donate_campaign.php'?>


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
    require 'handler/view_donate_page.php';
?>
     
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a href="causes.php" class="btn btn-primary stretched-link">Kembali</a>
        <span class="navbar-brand mb-0 h1 mx-auto">Help From Injuries</span>
      </div>
    </nav>
    <div class="img-donate">
    <img src="<?= htmlspecialchars($campaign['gambar']) ?>" alt="<?= htmlspecialchars($campaign['judul']) ?>" class="img-blog1" />
    </div>

    <!-- Donation Progress Section -->
    <div class="container my-5">
    <h3>Donasi Terkumpul</h3>
    <div class="progress mb-4">
        <div class="progress-bar" 
             role="progressbar" 
             style="width: <?= round($progress) ?>%" 
             aria-valuenow="<?= round($progress) ?>" 
             aria-valuemin="0" 
             aria-valuemax="100">
            <?= round($progress) ?>% Funded
        </div>
    </div>
    <p>Target: Rp <?= number_format($campaign['target_dana'], 0, ',', '.') ?></p>
    <p>Terkumpul: Rp <?= number_format($campaign['dana_terkumpul'], 0, ',', '.') ?></p>
</div>

<!-- Story Section -->
<div class="container my-5" id="story">
    <h3><?= htmlspecialchars($campaign['judul']) ?></h3>
    <p><?= nl2br(htmlspecialchars($campaign['keterangan'])) ?></p>
    
    <!-- Button Donate -->
    <div class="text-center mt-5">
        <a href="payment.php?id=<?= $campaign_id ?>">
            <button type="button" class="btn btn-success btn-lg">Donasi Sekarang</button>
        </a>
    </div>

    <!-- History Donasi -->
      <div class="container my-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-4">Para Donatur (<?= $total_donasi ?>)</h5>
                <ul class="list-group list-group-flush">
                    <?php if ($total_donasi > 0): ?>
                        <?php while ($row = $donasi->fetch_assoc()): ?>
                            <?php
                            // Calculate time difference
                            $tanggal_donasi = new DateTime($row['tanggal_donasi']);
                            $now = new DateTime();
                            $interval = $now->diff($tanggal_donasi);
                            
                            if ($interval->d == 0) {
                                $time_ago = "Hari ini";
                            } elseif ($interval->d < 7) {
                                $time_ago = $interval->d . " hari yang lalu";
                            } else {
                                $time_ago = floor($interval->d/7) . " minggu yang lalu";
                            }
                            ?>
                            <li class="list-group-item d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <span class="fw-bold text-primary d-block"><?= htmlspecialchars($row['nama_donatur']) ?></span>
                                    <small class="text-muted"><?= $time_ago ?></small>
                                </div>
                                <span class="fw-semibold">Donasi Rp <?= number_format($row['jumlah'], 0, ',', '.') ?></span>
                            </li>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <li class="list-group-item text-center">Belum ada donasi</li>
                    <?php endif; ?>
                </ul>
                <?php if ($total_donasi > 5): ?>
                    <button class="btn btn-primary w-100 mt-3">Lihat lebih banyak</button>
                <?php endif; ?>
            </div>
          </div>  
        </div>
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
