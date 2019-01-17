<?php
include 'config.php';

// mengaktifkan session
session_start();

//cek apakah user telah login,jika belum login maka dialihkan ke halaman login
if($_SESSION['status'] != "login"){
	header("location:index.php");
}

//menampilkan pesan selamat datang
echo "Hai,Selamat Datang". $_SESSION['username'];
header("location:tampil.php");

?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>