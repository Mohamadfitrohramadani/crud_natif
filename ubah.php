<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit data</title>
	<link rel="stylesheet" type="text/css" href="ubah.css">

</head>
<body class="text">
	<button><a href="index.php">Back</a></button>
<?php
	$Id_buku 	    = $_GET['Id_buku'];
	$koneksi		= new mysqli('localhost','root','','perpustakaan');
	$data 			= $koneksi->query("select * from buku where Id_buku ='$Id_buku'");
	$tampil 		= $data->fetch_assoc();
?>
 	

<form method="POST">
	<input type="text" name="Id_buku" placeholder="ID Buku" value="<?=$tampil['Id_buku']?>"><br>
	<input type="text" name="Judul" placeholder="JUDUL" value="<?=$tampil['Judul']?>"><br>
	<input type="text" name="Penulis" placeholder="PENULIS" value="<?=$tampil['Penulis']?>"><br>
	<input type="text" name="Penerbit" placeholder="PENERBIT" value="<?=$tampil['Penerbit']?>"><br>
	<input type="text" name="Tahun_terbit" placeholder="TAHUN TERBIT" value="<?=$tampil['Tahun_terbit']?>"><br>
	<input type="text" name="Kategori" placeholder="KATEGORI" value="<?=$tampil['Kategori']?>"><br>

	
	<br>
	
	<input type="submit" name="ubah">


</form>
<?php

if(isset($_POST['ubah'])){


	 $Id_buku = $_POST['Id_buku'];
	$Judul = $_POST['Judul'];
	$Penulis = $_POST['Penulis'];
	$Penerbit = $_POST['Penerbit'];
	$Tahun_terbit = $_POST['Tahun_terbit'];
	$Kategori = $_POST['Kategori'];
	

	$koneksi = new mysqli('localhost','root','','perpustakaan');
	$sql = "update buku set
			
			Id_buku = '$Id_buku',
			Judul = '$Judul',
			Penulis = '$Penulis',
			Penerbit = '$Penerbit',
			Tahun_terbit = '$Tahun_terbit',
			Kategori = '$Kategori' where Id_buku='$Id_buku'";
	$koneksi = $koneksi->query($sql);
	//setelah memasukan data redirect ke index/tampil data
	echo "<script>window.location.href='index.php'</script>";	
}
?> 
</body>
</html>