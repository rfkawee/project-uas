<?php 
require '../koneksi.php';
session_start();


$emailDariForm = $_POST['email'];
$passwordDariForm = $_POST['password'];

$sql = "SELECT * FROM tb_user WHERE email = '$emailDariForm' ";

$hasilQuery = mysqli_query($koneksi, $sql); //Buat query

$user = mysqli_fetch_assoc($hasilQuery); //Buat ambil data hasil query, menghasilkan array asosiatif

$emailDariDB = $user['email'];
$passwordDariDB = $user['password'];

//Cek NIM
if ($emailDariForm == $emailDariDB) {
    //Cek Password 
    if (password_verify($passwordDariForm, $passwordDariDB)) {
        //Pindah ke halaman dashboard
        header("location: ../index.html"); 
        // session
        $_SESSION['login'] = true;
        $_SESSION['nama'] = $user['nama'];

    }
    else {
        header("location: ../login.html");   
    }
} else {
    echo "Email kamu tidak terdaftar";
}

?>