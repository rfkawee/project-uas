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
        <h5 class="mb-1">Selesaikan Donasi</h5>
        <!-- <p class="text-muted"></p> -->
      </div>
      <form>
        <!-- Name input -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Donatur</label>
            <input type="text" id="name" class="form-control" placeholder="Masukkan Nama" required>
          </div>
         <!-- Name input -->
         <div class="mb-3">
            <label for="name" class="form-label">Jumlah</label>
            <input type="number" id="name" class="form-control" placeholder="Masukkan Jumlah Donasi" required>
          </div>
        <!-- Jenis akun -->
        <label for="form-select" class="form-label">Metode Pembayaran</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>BCA</option>
            <option value="1">BRI</option>
            <option value="2">Mandiri</option>
            <option value="3">Bank Ganesha</option>
            <option value="4">Dana</option>
          </select>
          <br>
        
        <!-- Submit Button -->
       <a href="login.php"><button type="submit" class="btn btn-primary w-100">Donasikan</button></a> 
        <!-- Link Tambahan -->
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
