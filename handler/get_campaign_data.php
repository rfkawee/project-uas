<?php
require 'koneksi.php'; // Pastikan file koneksi sudah sesuai

// Query untuk mengambil data dari tabel campaign
$query = "SELECT * FROM campaign";
$result = $koneksi->query($query);

$campaigns = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $campaigns[] = $row; // Menyimpan setiap baris data ke array
    }
}

// Tutup koneksi
$koneksi->close();

// Mengembalikan data dalam bentuk array
return $campaigns;
?>
