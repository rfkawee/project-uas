<?php
require 'koneksi.php';

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

// Query donations for this campaign
$query_donasi = "SELECT * FROM donasi WHERE campaign_id = ? ORDER BY tanggal_donasi DESC";
$stmt_donasi = $koneksi->prepare($query_donasi);
$stmt_donasi->bind_param("i", $campaign_id);

if (!$stmt_donasi->execute()) {
    die("Error executing query: " . $stmt_donasi->error);
}

$donasi = $stmt_donasi->get_result();
$total_donasi = $donasi->num_rows;

// Debug output
if ($total_donasi === 0) {
    error_log("No donations found for campaign_id: " . $campaign_id);
}
?>