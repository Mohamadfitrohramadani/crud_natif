<?php
session_start();
$tiket = $_SESSION['login'];
if($tiket!='OK'){
	echo '<script>window.alert("Silahkan login terlebih dahulu!")</script>';
	echo '<script>window.location.href="login.php"</script>';
}
include 'koneksi.php';
$tampil = $conn->query("select * from tbl_barang");

?>
<a class="btn btn-primary" href="tambah.php">Tambah</a>
<table class="table table-bordered table-hover">
	<tr>
		<th>ID BARANG</th>
		<th>NAMA BARANG</th>
		<th>HARGA</th>
		<th>BERAT</th>
		<th>STOK</th>
		<th>AKSI</th>
	</tr>
<?php foreach($tampil as $baris){?>
	<tr>
		<td><?=$baris['id_barang']?></td>
		<td><?=$baris['nama_barang']?></td>
		<td><?=$baris['harga']?></td>
		<td><?=$baris['berat']?></td>
		<td><?=$baris['stok']?></td>
		<td>
			<a class="btn btn-warning"  href="edit.php?id_barang=<?=$baris['id_barang']?>">Edit</a>
			<a class="btn btn-danger"  href="delete.php?ini=<?=$baris['id_barang']?>">Delete</a></td>
	</tr>
<?php } ?>
</table>

<a class="btn btn-danger" href="logout.php">Logout</a>