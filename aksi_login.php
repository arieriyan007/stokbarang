<?php 
include "koneksi.php";

session_start();

$email  = $_POST['email'];
$pass   = $_POST['password'];

$cek = mysqli_query ($koneksi, "SELECT * FROM login WHERE email='$email' and password='$pass'");
$hitung = mysqli_num_rows($cek);
if ($hitung > 0) {
    $data_user              = mysqli_fetch_assoc($cek);
    $_SESSION['id']         = $data_user['id'];
    $_SESSION['email']      = $email;
    $_SESSION['status']     = "berhasil";

    header("location:admin/index.php?pesan=login");
} else {
    header("location:login.php?status=gagal");
}
?>