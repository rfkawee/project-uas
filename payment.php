<?php
require_once 'koneksi.php';

// Get campaign ID from URL
$campaign_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Query campaign data
$query = "SELECT * FROM campaign WHERE no = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("i", $campaign_id);
$stmt->execute();
$result = $stmt->get_result();
$campaign = $result->fetch_assoc();

if (!$campaign) {
    die("Campaign tidak ditemukan");
}
?>

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
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
            <div class="text-center mb-4">
                <h5 class="mb-1">Selesaikan Donasi</h5>
                <p class="text-muted">Campaign: <?= htmlspecialchars($campaign['judul']) ?></p>
            </div>
            
            <form action="handler/proses_payment.php" method="POST">
                <!-- Hidden campaign_id input -->
                <input type="hidden" name="campaign_id" value="<?= $campaign_id ?>">
                
                <!-- Name input -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Donatur</label>
                    <input type="text" id="name" name="nama_donatur" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                
                <!-- Jumlah input -->
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" id="jumlah" name="jumlah" class="form-control" 
                           placeholder="Masukkan Jumlah Donasi" min="1000" required>
                    <small class="text-muted">Minimum donasi Rp 1.000</small>
                </div>
                
                <!-- Metode Pembayaran -->
                <div class="mb-3">
                    <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                    <select id="metode_pembayaran" name="metode_pembayaran" class="form-select" required>
                        <option selected value="BCA">BCA</option>
                        <option value="BRI">BRI</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="Bank Ganesha">Bank Ganesha</option>
                        <option value="Dana">Dana</option>
                    </select>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Donasikan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
