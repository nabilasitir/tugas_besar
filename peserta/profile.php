
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
	 <div class="jumbotron">
	  <div class="container text-center">
	    <h1>GoUINBdg</h1>      
	    <p>Selamat Datang!</p>
	  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GoUINBdg</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href='index.php'>Beranda</a></li>  
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="materi.php">Materi Latihan</a></li>
              <li  ><a href="latihan.php?tahun=2014">Latihan Soal</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          	<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Your Account<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-user">
            	<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                <li class="divider"></li>
                <li><a href="../koneksi/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
           </ul></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading"><h2>Your Profile! <h2></div>
    <div class="panel-body" >
      <form class="form-horizontal" role="form" id="fmLogin" autocomplete="off" method="post">
        <?php
          $connection = mysql_connect("localhost", "root", "");
          $db = mysql_select_db("gouinbdg", $connection);

              $query = mysql_query("select * from peserta", $connection);

              $jumlah = mysql_num_rows($query);

              $row=mysql_fetch_array($query);
              if (isset($_POST['login'])){
                  $nama=$_POST['nama'];
                  $email=$_POST['email'];
                  $tgl_lahir=$_POST['tgl_lahir'];
                  $alamat=$_POST['alamat'];
                  $password=$_POST['password'];

                  $query = mysql_query("UPDATE peserta SET nama='$nama', email='$email', tgl_lahir='$tgl_lahir', alamat='$alamat', password='$password' WHERE nama='$nama';  ", $connection);
                  //$jumlah = mysql_num_rows($query);
                  
                  if($query){
                    echo "<script language='javascript'>";
                    echo "alert('Data Berhasil Diedit!!')";
                    echo "</script>";
                  }else{
                    echo "<script language='javascript'>";
                    echo "alert('Data Gagal Diedit!!')";
                    echo "</script>";
                  }
              }       
              
                 
          ?>    
              <div class="form-group">
                <label for="email" class="col-md-3 col-sm-3 col-lg-2 control-label">Nama</label>
                <div class="col-sm-5 col-md-4 col-lg-3">
                  <input type="text" class="form-control" id="nama" required name="nama" placeholder="Nama" value='<?php echo $row['nama']; ?>'>
                </div>
              </div>
       
        
        <div class="form-group">
          <label for="email" class="col-md-3 col-sm-3 col-lg-2 control-label">Email</label>
          <div class="col-sm-5 col-md-4 col-lg-3">
            <input type="email" class="form-control" id="email" required name="email" placeholder="Email" value='<?php echo $row['email']; ?>'>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-md-3 col-sm-3 col-lg-2 control-label">Tanggal Lahir</label>
          <div class="col-sm-5 col-md-4 col-lg-3">
            <input type="text" class="form-control" id="tgl_lahir" required name="tgl_lahir" placeholder="Tangal Lahir" value='<?php echo $row['tgl_lahir']; ?>'>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-md-3 col-sm-3 col-lg-2 control-label">Alamat</label>
          <div class="col-sm-5 col-md-4 col-lg-3">
            <input type="text" class="form-control" id="alamat" required name="alamat" placeholder="Alamat" value='<?php echo $row['alamat']; ?>'>
          </div>
        </div>
        <div class="form-group">
        <label for="password" class="col-md-3 col-sm-3 col-lg-2 control-label">Password</label>
        <div class="col-sm-5 col-md-4 col-lg-3">
            <input  class="form-control" id="password" name="password" placeholder="password" type="password" value='<?php echo $row['password']; ?>'>
        </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-9">
            <input class="btn btn-default" name="login" type="submit" value="Save">
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>