<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="style(2).css"/>
	</head>
		<body>
		<h3><p align="center">KELOLA DATA BARANG</p></h3>
		<br>
		<br>
		
		<table width= 80% height= 5% align="center">
			<tr>
				<td><b> Data Barang</td></b>
				<td><p align="right"><a href = "Input.php"><Button class ="btn">TAMBAH</Button></a> 
			</tr>
		
		<br>
		<table width= 80% height= 40% align= "center" border = 1 cellpadding= 0 cellspacing= 0>
			<tr align= "center">
				<td>Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Aksi</td>
			</tr>
			
			<?php
			//koneksi ke database 
			include ("connect.php");
			//mengambil data dari tabel barang
			$tampil= mysql_query("select * from barang ");
			while ($data= mysql_fetch_array ($tampil)){
			?>
			
			<?php session_start();
				if(!isset($_SESSION['username'])){
				header('location:login.php');}
				else { $username = $_SESSION['username'];}
				require_once("config.php");
				$query = mysql_query("SELECT * FROM daftar WHERE username = '$username'");
				$hasil = mysql_fetch_array($query);
			?>
			
			<tr align = "center">
				<td><?php echo $data['kode']; ?> </td>
				<td><?php echo $data['nama']; ?> </td>
				<td><?php echo $data['harga']; ?> </td>
                <td><a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
				<a href ="hapus.php?id=<?php echo $data ['id'];?>"> Hapus</a></td>
			</tr>
			
			<table align="center">
			<br>
			<br>
			<tr>
			<td><p align="center"><a href = "logout.php"><Button class ="btn">LOGOUT</Button></a> 
			</td>
			</tr>
			</table>
			<?php
			}
			?>
		</table>
			
		
	
</body>
</html>