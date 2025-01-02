<?php

$koneksi =  mysqli_connect("localhost", "root", "", "donation_db");

if(mysqli_connect_error()) {
    die("Database Bermasalah");
   }

?>