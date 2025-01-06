<?php

require '../koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $target_dana = $_POST['target_dana'];
    
    // Menghandle upload gambar
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    // Menentukan folder tujuan untuk menyimpan file
    $upload_folder = __DIR__ . '/../uploads/';
    
    // Buat path lengkap untuk menyimpan file
    $gambar_path = $upload_folder . basename($gambar);

    // Pastikan folder upload ada
    if (!is_dir($upload_folder)) {
        mkdir($upload_folder, 0755, true); // Buat folder jika belum ada
    }
    
    // Memindahkan file gambar ke folder upload
    if (move_uploaded_file($gambar_tmp, $gambar_path)) {
        // Simpan hanya path relatif ke database
        $gambar_db_path = 'uploads/' . basename($gambar);

        // Query untuk menyimpan data campaign
        $sql = "INSERT INTO campaign (gambar, judul, keterangan, target_dana, dana_terkumpul) 
                VALUES ('$gambar_db_path', '$judul', '$keterangan', '$target_dana', 0.00)";
        
        if ($koneksi->query($sql) === TRUE) {
            echo "Campaign berhasil ditambahkan!";
            header("Location: ../campaign.php"); // Mengarahkan ke halaman utama setelah sukses
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }
    } else {
        echo "Gambar gagal diupload.";
    }
}

// Tutup koneksi
$koneksi->close();
?>
