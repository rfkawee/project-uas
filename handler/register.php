<?php
   require '../koneksi.php';
   $fullname =  $_POST["fullName"];
   $email =  $_POST["email"];  
   $password =  $_POST["password"];
   $user = $_POST["jenis_user"];


   //2. Buat query untuk simpan data
   $password_acak = password_hash($password, PASSWORD_DEFAULT);

   $sql = "INSERT INTO user (nama, email, password, jenis_user) VALUES ('$fullname', '$email', '$password_acak', '$user')";
  
   if (mysqli_query($koneksi, $sql)) {
      echo "Akun Berhasil Di Buat";
      header("location: ../index.php");
   } else {
      echo "Akun Gagal Di Buat, karena error:". $sql . "<br>" . mysqli_error($conn);
   }
      

   
      ?>