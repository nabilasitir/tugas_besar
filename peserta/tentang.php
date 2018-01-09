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
   <div  class="jumbotron" style="heigth:30%;">
    <div style="heigth:30%; padding=0px; margin=0px 0px;" class="container text-center">
      <h1>GoUINBdg</h1>      
      <p>Selamat Datang!</p> 
    </div>
</div>

<nav  class="navbar navbar-inverse" style="heigth:30%; padding=0px; margin=0px 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GoUINBdg</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href='index.php'>Beranda</a></li>  
        <li class="active"><a href="tentang.php">Tentang</a></li>
        <li><a href="materi.php">Materi Latihan</a></li>
        <li><a href="latihan.php?tahun=2014">Latihan Soal</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Your Account<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu dropdown-user">
                  <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="../koneksi/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                  </li>
             </ul>
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
          <img src="../aset/img/g2.png" alt="GoUINBdg1" style="width:100%;">
        </div>

        <div class="item">
          <img src="../aset/img/g3.jpg" alt="GoUINBdg2" style="width:100%;">
        </div>
      
      <div class="item">
          <img src="../aset/img/uin.jpg" alt="GoUINBdg3" style="width:100%;">
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
    <div class="col-sm-3 sidenav">
      <br>
     <ul class="nav nav-pills nav-stacked" style="border='10px black solid;'">
        <li class="active"><a href="#section1">Menu Peserta</a></li>
        <li><a href="materi.php">Materi Latihan</a></li>
        <li><a href="latihan.php?tahun=2014">Latihan Soal</a></li>
        <li><a href="profile.php">Profile</a></li>
      </ul><br>
    </div>
   <div class="col-sm-9">
      <hr>
      <h2>Beranda GoUINBdg</h2>
            <p> Kalau kamu tahun ini lulus SMA dan mau kuliah di universitas atau perguruan tinggi keagamaan Islam, maka UIN SGD Bandung ini bisa menjadi salah satu pilihan kamu. Selain terkenal sebagai universitas yang memiliki kualitas pendidikan tinggi, Universitas Islam Negeri Bandung ini juga memiliki delapan fakultas dan puluhan program studi yang bisa kamu pilih. Cara untuk bisa mendaftar masuk Universitas Islam Negeri Bandung ini cukup banyak. Kamu bisa menempuh jalur SNMPTB, SBMPTN, SPAN-PTKIN, UM-PTKIN, dan juga melalui jalur mandiri.
      </p>
      <br>
      <p> GoUINBdg adalah sebuah website yang menyajikan layanan bimbingan berbasis online untuk masuk UIN Bandung. Setiap calon mahasiswa yang mengikuti bimbingan akan diberi latihan soal dan akan mendapatkan review dari hasil ujiannya.</p>
      
      <br><br>
      
      
 <br> 
 <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Bandung, Indonesia</p>
      <p><span class="glyphicon glyphicon-phone"></span>08133772312</p>
      <p><span class="glyphicon glyphicon-envelope"></span> go.uinbdg@gmail.com</p>
    </div>
    <div class="col-sm-7">
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
    <button type="button"
        onclick="myFunction();myFunction2();">Send</button>
    <p id="demo"></p>
    <p id="tanggal"></p>  
        </div>
      </div>
    </div>
  </div>
</div> 
 <style>
footer .glyphicon {
    font-size: 350px;
    margin-bottom: 40px;
    color: #f4511e;
}
</style>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top"></a>
  <p>coppyright 2017 | created by GoUINBdg </p>
</footer> 

</body>
</html>
