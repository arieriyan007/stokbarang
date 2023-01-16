<?php 
session_start();
date_default_timezone_set("Asia/Makassar");

$koneksi = mysqli_connect("localhost","root","","stokbarang");
if (mysqli_connect_errno()) {
    echo "<div class='alert alert-danger' role='alert'>Koneksi Gagal Kedatabase</div>"; 
} 
?>