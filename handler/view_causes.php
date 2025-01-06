<?php
require_once 'koneksi.php';

// Query campaign data with error checking
$query = "SELECT * FROM campaign";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($koneksi));
}

$campaigns = [];
while ($row = mysqli_fetch_assoc($result)) {
    $campaigns[] = $row;
}

// Debug output
if (empty($campaigns)) {
    error_log("No campaigns found in database");
}
?>