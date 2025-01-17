<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/images/it_logo-removebg-preview.png" type="image/x-icon">
    <title>Save Poor - Charity Category Responsive Website Template | Home : W3layouts</title>

    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">

    </head>
<body>

<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke">
      <h1><a class="navbar-brand mr-lg-5" href="index.php">
        <img src="assets/images/it_logo-removebg-preview.png" class="logo" alt="Your logo" title="Your logo" /> Capital  
        </a></h1>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav w-100">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="about.php">Tentang Kami</a>
          </li>
          <li class="nav-item @@causes__active">
            <a class="nav-link" href="causes.php">Donasikan</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.php">Kontak</a>
          </li>
         
          <li class="ml-lg-auto mr-lg-0 m-auto">
            <!--/search-right-->
            
          <!--//search-right-->
          </li>
    
        </ul> 
        
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= htmlspecialchars($_SESSION['nama']) ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="userDropdown" style="background-color: white;">
                    <li><a class="dropdown-item" href="dashboard_admin.php">Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="handler/logout.php">Logout</a></li>
                </ul>
            </div>
        <?php else: ?>
            <a href="login.php"><button type="button" class="btn btn-success">Login</button></a>
        <?php endif; ?>
      </div>
     
      
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->

      
    </nav>
  </div>
</header>
<!-- //header -->
  
</body>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/theme-change.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>

</html>