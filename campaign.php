
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/css/adminlte.min.css">
  <!-- icon -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .main-sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
        }
        .content-wrapper {
            margin-left: 250px; /* Width of sidebar */
            min-height: calc(100vh - 57px); /* Subtract navbar height */
            background: #f4f6f9;
        }
    </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Beranda</a>
      </li>
    </ul>

  <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./assets/images/dashboard/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./assets/images/dashboard/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./dashboard_admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statistik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./campaign.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Campaign Saya</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./create_campaign.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buat Campaign</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaturan Akun</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  

  <!-- Main content -->
  <div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Campaign</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 5%">No</th>
                <th style="width: 15%">Gambar</th>
                <th style="width: 15%">Judul</th>
                <th style="width: 25%">Keterangan</th>
                <th style="width: 15%">Target Dana</th>
                <th style="width: 15%">Dana Terkumpul</th>
                <th style="width: 10%">Action</th>
              </tr>
            </thead>

            <?php
            // Mengambil data dari file PHP
            require './handler/get_campaign_data.php'; // Memuat data campaign
            $campaigns = include './handler/get_campaign_data.php'; // Memastikan data ada
            ?>

             <tbody>
              <?php if (!empty($campaigns)): ?>
                <?php foreach ($campaigns as $index => $campaign): ?>
                  <tr>
                    <td name="no"><?= $index + 1; ?></td>
                    <td name="gambar">
                      <img src="<?= htmlspecialchars($campaign['gambar']); ?>" alt="Campaign Image" class="img-thumbnail" style="width: 100px">
                    </td>
                    <td name="judul"><?= htmlspecialchars($campaign['judul']); ?></td>
                    <td name="keterangan"><?= htmlspecialchars($campaign['keterangan']); ?></td>
                    <td name="target_dana">Rp <?= number_format($campaign['target_dana'], 0, ',', '.'); ?></td>
                    <td name="dana_terkumpul">Rp <?= number_format($campaign['dana_terkumpul'], 0, ',', '.'); ?></td>
                    <td>
                    <a href="edit_campaign.php?no=<?= $campaign['no'] ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                      <form action="./handler/delete_campaign.php" method="POST" style="display: inline;">
                        <input type="hidden" name="no" value="<?= $campaign['no']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="7" style="text-align: center;">Tidak ada data campaign.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/js/adminlte.min.js"></script>
<!-- AdminLTE -->
<script src="./assets/js/adminlte.js"></script>
    
</body>
</html>
