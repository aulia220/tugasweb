<?php
	//koneksi ke database
		include("connect.php");
	if ($_GET) {
		$id=$_GET['id'];
		}
	//menghapus data dari database
		$hapus = mysql_query("delete from barang where id='$id'")or die(mysql_error());
		header("location: tampil.php?pesan=hapus");
?>