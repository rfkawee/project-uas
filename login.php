<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/account.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!-- Login Card -->
    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
      <div class="text-center mb-4">
        <h5 class="mb-1">Selamat Datang</h5>
        <p class="text-muted">Masuk ke akun Anda</p>
      </div>
      <form action="handler/login.php" method="POST">
        <div class="input-group mb-1">
          <div class="form-floating"> <input id="registerEmail" type="email" class="form-control" placeholder="" name="email"> <label for="registerEmail">Email</label> </div>
    
      </div>
      <div class="input-group mb-1">
          <div class="form-floating"> <input id="registerPassword" type="password" class="form-control" placeholder="" name="password" required> <label for="registerPassword">Password</label> </div>           
      </div>  <!--begin::Row-->
        <div class="row">
          <p class="mb-0"> <a href="register.php" class="text-center">
            Buat akun baru
        </a></p>
            <div class="col-8 d-inline-flex align-items-center">
                <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember_me"> <label class="form-check-label" for="flexCheckDefault">
                        Ingat Aku
                    </label> </div>
              </div> <!-- /.col -->
              
            <div class="col-4">
                <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Masuk</button> </div>
            </div> <!-- /.col -->
        </div> <!--end::Row-->
    </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
