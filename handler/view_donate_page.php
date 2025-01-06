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

// Calculate progress percentage
$progress = ($campaign['dana_terkumpul'] / $campaign['target_dana']) * 100;
?>