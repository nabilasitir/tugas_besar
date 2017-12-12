<?php
include('login.php'); // Memasuk-kan skrip Login 
peserta();
if(isset($_SESSION['login_user'])){
header("location: peserta.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bimbingan Testing Masuk UIN Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="aset/css/bootstrap.min.css" type="text/css">
	<script src="aset/js/jquery.min.js"></script>
	<script src="aset/js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">GoUINBdg</a>
		</div>
		<ul class="nav navbar-nav">
		  <li><a href="index.php">Beranda</a></li>
		  <li><a href="tentang.php">Tentang</a></li>
		  <li><a href="panduan.php">Panduan</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
		   <li><a href="sign-up_peserta.php">Sign-Up <span class="glyphicon glyphicon-user"></span></a></li>
		   <li  class="active" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span><span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li class="active"><a href="#">Peserta</a></li>
			  <li><a href="login_admin.php">Admin</a></li>
			</ul>
		  </li>
		</ul>
	  </div>
	</nav>
  
	<div class="container">
	  <div class="panel panel-default">
		<div class="panel-heading"><h2>Login Peserta <h2></div>
		<div class="panel-body" >
			<form class="form-horizontal" role="form" id="fmLogin" autocomplete="off" method="post">
				<div class="form-group">
					<label for="email" class="col-md-3 col-sm-3 col-lg-2 control-label">Email</label>
					<div class="col-sm-5 col-md-4 col-lg-3">
						<input type="email" class="form-control" id="email" required name="email" placeholder="Email">
					</div>
				</div>
                <div class="form-group">
					<label for="password" class="col-md-3 col-sm-3 col-lg-2 control-label">Password</label>
					<div class="col-sm-5 col-md-4 col-lg-3">
						<input  class="form-control" id="password" name="password" placeholder="**********" type="password">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-9">
						<input class="btn btn-default" name="login" type="submit" value="Login">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-lg-2"></div>
					<div class="col-md-6 col-sm-6 col-md-6" style="margin-bottom:100px">
						<a href="/forget-password">Lupa Password?</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-lg-2"></div>
					<div class="col-md-6 col-sm-6 col-md-6">
						<a href="sign-up_peserta.html">Sign-up</a> jika belum terdaftar sebagai member.
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>

</body>
</html>

