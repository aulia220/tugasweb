<?php
include ("connect.php"); //koneksi kedatabase

//variabel untuk menampung data yang diinputkan
$kode		= $_POST["kode"];
$nama		= $_POST ["nama"];
$deskripsi  = $_POST["deskripsi"];
$stok 	    = $_POST ["stok"];
$harga	    = $_POST ["harga"];
$berat      = $_POST ["berat"];

//kondisi jika data masih ada data yang kosong harus diisi dulu
if (trim ($kode)==""){
	echo "Kode masih kosong, isi dengan benar";
	}
	elseif (trim($nama)=="") {
		echo "Nama masih kosong, isi dengan benar";
	}
	elseif (trim($deskripsi)==""){
		echo "Deskripsi masih kosong, isi dengan benar";
	}
	elseif (trim($stok)=="") {
		echo "Stok masih kosong, isi dengan benar";
	}
	elseif (trim($harga)=="") {
		echo "Harga masih kosong, isi dengan benar";
	}
	elseif (trim($berat)=="") {
		echo "Berat masih kosong, isi dengan benar";
	}
	else{
$input="insert into barang (kode,nama,deskripsi,stok,harga,berat)
		values ('$kode','$nama','$deskripsi','$stok','$harga','$berat')";
$hasil = mysql_query ($input,$conn);
header("location:tampil.php");
	}
?>
