<?php
	include "../koneksi/fungsi.php";
	if(isset($_POST['submit'])){ signup(); }
	else { }
?>
<!DOCTYPE html>
<html>

<head>
	<title>Bimbingan Testing Masuk UIN Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../aset/css/bootstrap.min.css" type="text/css">
	<script src="../aset/js/jquery.min.js"></script>
	<script src="../aset/js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">GoUINBdg</a>
		</div>
		<ul class="nav navbar-nav">
		  <li><a href="../index.php">Beranda</a></li>
		  <li><a href="../tentang.php">Tentang</a></li>
		  <li><a href="../panduan.php">Panduan</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
		   <li class="active"><a href="#">Sign-Up <span class="glyphicon glyphicon-user"></span></a></li>
		   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span><span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="login_peserta.php">Peserta</a></li>
			  <li><a href="login_admin.php">Admin</a></li>
			</ul>
		  </li>
		</ul>
	  </div>
	</nav>
  
	<div class="container">
	  <div class="panel panel-default">
		<div class="panel-heading"><h2>Sign-Up</h2></div>
		<div class="panel-body" >
			<form id="signupform" class="signUpEl form-horizontal" role="form" autocomplete="off" method="POST">
				<div class="form-group">
					<label for="name" class="col-md-3 col-sm-3 col-lg-2 control-label">Nama Lengkap</label>
					<div class="col-sm-9 col-lg-6">
						<input type="text" class="form-control" id="name"  name="nama" required placeholder="Nama Lengkap">
					</div>
				</div>
				<div class="form-group">
					<label for="Password" class="col-md-3 col-sm-3 col-lg-2 control-label">Email</label>
					<div class="col-sm-9 col-lg-6">
						<input type="text" class="form-control" id="email" name="email" required placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="tgllhr" class="col-md-3 col-sm-3 col-lg-2 control-label">Tanggal Lahir</label>
					<div class="col-sm-9 col-lg-6">
						<input type="text" class="form-control" id="tgllhr"  name="tgl_lahir" required placeholder="Tanggal Lahir">
					</div>
				</div>
				<div class="form-group">
					<label for="alamat" class="col-md-3 col-sm-3 col-lg-2 control-label">Alamat</label>
					<div class="col-sm-9 col-lg-6">
						<input type="text" class="form-control" id="alamat"  name="alamat" required placeholder="Alamat">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-md-3 col-sm-3 col-lg-2 control-label">Password</label>
					<div class="col-sm-9 col-lg-6">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-9">
						<input class="btn btn-default" name="submit" type="submit" value="Submit">
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-lg-2"></div>
					<div class="col-md-6 col-sm-6 col-md-6" style="margin-bottom:100px">
						Sudah menjadi member? silahkan <a href="login_peserta.php">Log-in di sini</a>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>

</body>
</html>
