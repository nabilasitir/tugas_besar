<!DOCTYPE html>
<html lang="en">
<head>
  <title>GoUINBdg</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">GoUINBdg</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active" ><a href='index.php'>Beranda</a></li>
            <li><a href="tentang.php">Tentang</a></li>
  		      <li><a href="panduan.php">Panduan</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
    		   <li><a href="peserta/sign-up_peserta.php">Sign-Up <span class="glyphicon glyphicon-user"></span></a></li>
    		   <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span><span class="caret"></span></a>
        			<ul class="dropdown-menu">
        			  <li><a href="peserta/login_peserta.php">Peserta</a></li>
        			  <li><a href="admin/login_admin.php">Admin</a></li>
        			</ul>
            </li>
        </ul>
  			
      </div>
    </div>
</nav>
<div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="aset/img/g2.png" alt="GoUINBdg1" style="width:100%;">
        </div>

        <div class="item">
          <img src="aset/img/g3.jpg" alt="GoUINBdg2" style="width:100%;">
        </div>
  	  
      <div class="item">
          <img src="aset/img/uin.jpg" alt="GoUINBdg3" style="width:100%;">
        </div>
       </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

<div class="container-fluid">
  <div class="row content">
   <div class="col-sm-12">
      <hr>
      <h1>GoUINBdg</h1>
              <p> Kalau kamu tahun ini lulus SMA dan mau kuliah di universitas atau perguruan tinggi keagamaan Islam, maka UIN SGD Bandung ini bisa menjadi salah satu pilihan kamu. Selain terkenal sebagai universitas yang memiliki kualitas pendidikan tinggi, Universitas Islam Negeri Bandung ini juga memiliki delapan fakultas dan puluhan program studi yang bisa kamu pilih. Cara untuk bisa mendaftar masuk Universitas Islam Negeri Bandung ini cukup banyak. Kamu bisa menempuh jalur SNMPTB, SBMPTN, SPAN-PTKIN, UM-PTKIN, dan juga melalui jalur mandiri.
			        </p>
			        <br>
			        <p> GoUINBdg adalah sebuah website yang menyajikan layanan bimbingan berbasis online untuk masuk UIN Bandung. Setiap calon mahasiswa yang mengikuti bimbingan akan diberi latihan soal dan akan mendapatkan review dari hasil ujiannya.</p>	
      <br><br>
      <br> 
      <div class="container-fluid bg-grey">
          
      <div class="row">
        <div class="col-sm-4" style="background-color: #999999; height: 300px; padding: 80px;">
          <p style=" letter-spacing: 1px; line-height: 2.0;">Contact us and we'll get back to you within 24 hours.</p>
          <p style=" letter-spacing: 1px; line-height: 2.0;"><span class="glyphicon glyphicon-map-marker"></span>Bandung, Indonesia</p>
          <p style=" letter-spacing: 1px; line-height: 2.0;"><span class="glyphicon glyphicon-phone"></span>08133772312</p>
          <p style=" letter-spacing: 1px; line-height: 2.0;"><span class="glyphicon glyphicon-envelope"></span> go.uinbdg@gmail.com</p>

        </div>
        <div class="col-sm-8" style="height: 300px; background-color:#cccccc;">
          <h2 class="text-rigth" style="color:black;">KIRIM PESAN</h2>
            <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
              <div class="col-sm-12 form-group">
          		<script>
          			function myFunction() {
          				document.getElementById("demo").innerHTML ="terkirim";
          			}
          			function myFunction2() {
          				document.getElementById("tanggal").innerHTML = Date();
          			}
          		</script>
                     <input class="btn btn-default" name="login" type="button" value="Send" onclick="myFunction();myFunction2();">
                		 <p id="demo" style="color:white; letter-spacing: 1px; line-height: 2.0;"></p>
                		 <p id="tanggal" style="color:white; letter-spacing: 1px; line-height: 2.0;"></p>  
              </div>
          </div>
    </div>
  </div>
</div> 
<style>
    footer{
      height: 30%;
      background-color: black;
    }
    footer .glyphicon {
        font-size: 350px;
        margin-bottom: 40px;
    }
</style>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top"></a>
  <p style="color:white; letter-spacing: 1px; line-height: 2.0;">coppyright 2017 | created by GoUINBdg </p>
</footer> 
</body>
</html>
