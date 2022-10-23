<?php
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-image: url();">
	<div class="container">
    <div class="row">
  	<div class="col-sm-6">
			
			<div class="card">
				<h5 class="card-header"></h5>
				<div class="card-body" style="text-align: center;">
				<form method="POST" class="text">
					<img src="lgg.jpeg" height="80px" class="logo">
					<h3 class="tengah">Silahkan login!!</h3>
					<div class="form-group">
						<input class="form-control" type="text" name="username" placeholder="Username">
						<br>
					</div>
					<div class="form-group"><br>
						<input class="form-control" type="password" name="password" placeholder="Password">
						<br>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="login" value="Login">
					</div>
				</form>
				</div>
			</div>
			
	</div>
	</div>
	</div>
</body>
</html>
<?php
//jika tombol login diklik
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek = $koneksi->query("select * from tbl_user where username='$username' and password='$password'")->num_rows;
	$ambil_level = $koneksi->query("select * from tbl_user where username='$username' and password='$password'")->fetch_assoc();
	$level = $ambil_level['level'];

	//exit($level);
	//jika cek lebih dari 0 maka arahkan ke index
	//jika cek = 0 munculkan pesan data yg anda masukkan salah
	if($cek>0){
		$_SESSION['login']='OK';
		$_SESSION['level']=$level;
		//exit($_SESSION['login']);
		echo '<script>window.location.href="index.php"</script>';
	}else{
		echo '<script>window.alert("Data yg anda masukkan salah!")</script>';
	}
}
