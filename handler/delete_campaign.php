<?php
require '../koneksi.php'; // Pastikan file ini terhubung ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['no'])) {
    $id_campaign = intval($_POST['no']);

    // Query untuk menghapus data
    $query = "DELETE FROM campaign WHERE no = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id_campaign);

    if ($stmt->execute()) {
        // Redirect kembali ke halaman campaign
        header("Location: ../campaign.php");
        exit;
    } else {
        echo "Error: " . $koneksi->error;
    }

    $stmt->close();
    $koneksi->close();
}
