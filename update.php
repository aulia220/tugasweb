<?php
include ("connect.php"); //koneksi kedatabase

//variabel untuk menampung data yang diinputkan
$kode		= $_POST["kode"];
$nama		= $_POST ["nama"];
$deskripsi  = $_POST["deskripsi"];
$stok 	    = $_POST ["stok"];
$harga	    = $_POST ["harga"];
$berat      = $_POST ["berat"];

$ubah=("update barang set kode='$kode',nama='$nama', deskripsi='$deskripsi', stok='$stok', harga='$harga',berat='$berat' where kode='$kode'");
$hasil = mysql_query($ubah,$conn);
		header("location: tampil.php?pesan=update");

?>