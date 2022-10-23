<?php
session_start();
$level = $_SESSION['level'];
$tiket = $_SESSION['login'];
if($tiket!='OK'){
	echo '<script>window.alert("Silahkan login terlebih dahulu!")</script>';
	echo '<script>window.location.href="login.php"</script>';
}
include 'koneksi.php';
$tampil = $koneksi->query("select * from buku");

?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body class="text">
<?php
//memanggil koneksi
include 'koneksi.php';
//menampilkan data
$tampil = $koneksi->query("select * from buku");
?>
<link rel="stylesheet" type="text/css" href="kamu.css">
	<table border="1" class="kk">
		<tr class="atas">
			<th>ID_BUKU</th>
			<th>JUDUL</th>
			<th>DESKRIPSI</th>
			<th>PENULIS</th>
			<th>PENERBIT</th>
			<th>TAHUN TERBIT</th>
			<th>KATEGORI</th>
			<?php if($level=='admin'){ ?>
			<th colspan="2">AKSI</th>
		<?php }?>
		</tr>
<?php foreach($tampil as $baris){ ?>		
		<tr class="tengah">
			<td class="tengah"><?=$baris['Id_buku']?></td>
			<td class="tengah"><?=$baris['Judul']?></td>
			<td class="tengah"><?=$baris['Deskripsi']?></td>
			<td class="tengah"><?=$baris['Penulis']?></td> 
			<td class="tengah"><?=$baris['Penerbit']?></td>
			<td class="tengah"><?=$baris['Tahun_terbit']?></td>
			<td class="tengah"><?=$baris['Kategori']?></td>
			<?php if($level=='admin'){ ?>
			<td class="hapus"><a href="hapus.php?Id_buku=<?=$baris['Id_buku']?>"><button>Hapus</button></a></td>
			<td class="ubah"><a href="ubah.php?Id_buku=<?=$baris['Id_buku']?>"><button>Edit</button></a></td>
			<?php } ?>
		</tr>
<?php } ?>
<?php if($level=='admin'){ ?>
             <a href="tambah.php"><button>Input data</button></a>
<?php } ?>
	</table>
	<button><a class="btn btn-danger" href="logout.php">Logout</a></button>
</body>
</html>
