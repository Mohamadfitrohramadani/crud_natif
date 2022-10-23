<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>input data</title>
	<link rel="stylesheet" type="text/css" href="tambah.css">
</head>
<body class="text">

<button><a href="index.php">Back</a></button>
<form method="POST" class="atas">
	<label>Id buku :</label>
	<input type="text" name="Id_buku"><br>

	<label>Judul :</label>
	<input type="text" name="Judul" required="required"><br>

	<label>Deskripsi :</label>
	<input type="text" name="Deskripsi"><br>

	<label>Penulis :</label>
	<input type="text" name="Penulis"><br>

	<label>Penerbit :</label>
	<input type="text" name="Penerbit"><br>

	<label>Tahun Terbit :</label>
	<input type="text" name="Tahun_terbit"><br>

	<label>Kategori :</label>
	<input type="text" name="Kategori"><br>
	
	<input type="submit" name="simpan">
</form>
</body>
</html>
<?php 
if(isset($_POST['simpan'])){
	$Id_buku = $_POST['Id_buku'];
	$Judul = $_POST['Judul'];
	$Deskripsi = $_POST['Deskripsi'];
	$Penulis = $_POST['Penulis'];
	$Penerbit = $_POST['Penerbit'];
	$Tahun_terbit = $_POST['Tahun_terbit'];
	$Kategori = $_POST['Kategori'];

	include 'koneksi.php';
	$tambah 	= $koneksi->query("insert into buku values('$Id_buku','$Judul','$Deskripsi','$Penulis','$Penerbit','$Tahun_terbit','$Kategori')");
	echo "<script>window.location.href='index.php'</script>";

}
?>