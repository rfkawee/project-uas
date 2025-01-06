<?php
require '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get data from form
    $nama_donatur = $_POST['nama_donatur'];
    $jumlah = $_POST['jumlah'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $campaign_id = $_POST['campaign_id']; // Add this to your payment form

    try {
        // Start transaction
        $koneksi->begin_transaction();

        // Insert donation data
        $query_donasi = "INSERT INTO donasi (nama_donatur, jumlah, metode_pembayaran, campaign_id) 
                        VALUES (?, ?, ?, ?)";
        $stmt_donasi = $koneksi->prepare($query_donasi);
        $stmt_donasi->bind_param("sdsi", $nama_donatur, $jumlah, $metode_pembayaran, $campaign_id);
        $stmt_donasi->execute();

        // Update campaign's dana_terkumpul
        $query_update = "UPDATE campaign 
                        SET dana_terkumpul = dana_terkumpul + ? 
                        WHERE no = ?";
        $stmt_update = $koneksi->prepare($query_update);
        $stmt_update->bind_param("di", $jumlah, $campaign_id);
        $stmt_update->execute();

        // Commit transaction
        $koneksi->commit();

        header("Location: ../causes.php");
        exit();

    } catch (Exception $e) {
        // Rollback on error
        $koneksi->rollback();
        echo "Error: " . $e->getMessage();
    }

    $stmt_donasi->close();
    $stmt_update->close();
    $koneksi->close();
} else {
    echo "Metode pengiriman tidak valid.";
}
?>