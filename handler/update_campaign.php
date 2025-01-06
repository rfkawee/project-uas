<?php
require '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no = $_POST['no']; // Changed from id_campaign to no
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $target_dana = $_POST['target_dana'];

    // Proses Gambar
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];
        $upload_folder = __DIR__ . '/../uploads/';
        $gambar_path = $upload_folder . basename($gambar);

        if (!is_dir($upload_folder)) {
            mkdir($upload_folder, 0755, true);
        }

        if (move_uploaded_file($gambar_tmp, $gambar_path)) {
            $gambar_db_path = 'uploads/' . basename($gambar);
        } else {
            echo "Gambar gagal diupload.";
            exit;
        }

        $query = "UPDATE campaign SET judul='$judul', keterangan='$keterangan', target_dana='$target_dana', gambar='$gambar_db_path' WHERE no='$no'";
    } else {
        $query = "UPDATE campaign SET judul='$judul', keterangan='$keterangan', target_dana='$target_dana' WHERE no='$no'";
    }

    if ($koneksi->query($query) === TRUE) {
        header("Location: ../campaign.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>