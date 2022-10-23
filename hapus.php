<?php
// include database connection file
include("koneksi.php");
 
// Get id from URL to delete that user
$Id_buku = $_GET['Id_buku'];
 
// Delete user row from table based on given id
$hapus     = $koneksi->query("delete from buku where Id_buku=$Id_buku");
 echo "<script>window.location.href='index.php'</script>";
 
?>