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
        <h5 class="mb-1">Buat akun anda</h5>
        <!-- <p class="text-muted"></p> -->
      </div>
      <form action="handler/register.php" method="POST">
        <div class="input-group mb-1">
            <div class="form-floating"> <input id="registerFullName" type="text" class="form-control" placeholder="" name="fullName"> <label for="registerFullName">Nama Lengkap</label> </div>
      
        </div>
        <div class="input-group mb-1">
            <div class="form-floating"> <input id="registerEmail" type="email" class="form-control" placeholder="" name="email"> <label for="registerEmail">Email</label> </div>
            
        </div>
        <div class="input-group mb-1">
            <div class="form-floating"> <input id="registerPassword" type="password" class="form-control" placeholder="" name="password" required> <label for="registerPassword">Password</label> </div>           
        </div> <!--begin::Row-->

        <!-- <div class="input-group mb-1">
          <div class="form-floating">
            <select class="form-select" aria-label="Default select example " name="jenis_user">
              <option name="donatur" selected>Donatur</option>
              <option name="admin" value="1">Penggalang Dana</option>
            </select>
          </div>
        </div> -->

        <div class="input-group mb-1">
          <div class="form-floating">
            <select class="form-select" id="jenisUser" name="jenis_user" required>
              <option value="donatur" selected>Donatur</option>
              <option value="admin">Penggalang Dana</option>
            </select>
          </div>
        </div>
        

        
        <div class="row">
            <div class="col-8 d-inline-flex align-items-center">
                <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="checkbox"> <label class="form-check-label" for="flexCheckDefault">
                        I agree to the <a href="#">terms</a> </label> </div>
            </div> <!-- /.col -->
            <div class="col-4">
                <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Daftar</button> </div>
            </div> <!-- /.col -->
        </div> <!--end::Row-->
    </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
