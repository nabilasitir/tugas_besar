
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
          <li class="active"><a href='index.php'>Beranda</a></li>
          <li><a href="tentang.php">Tentang</a></li>
          <li><a href="panduan.php">Panduan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="peserta/sign-up_peserta.php">Sign-Up <span class="glyphicon glyphicon-user"></span></a></li>
         <li   class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span><span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="peserta/login_peserta.php">Peserta</a></li>
          <li><a href="admin/login_admin.php">Admin</a></li>
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
    <div class="col-sm-3 sidenav">
      <br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">GoUIN Link</a></li>
        <li><a href="jurusan.php">Fakultas dan Jurusan UIN Bandung</a></li>
        <li><a href="jalur_masuk.php">Jalur Masuk</a></li>
       
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
   <div class="col-sm-9">
      <hr>
      <h2>GoUINBdg</h2>
            <p> GoUINBdg adalah sebuah website yang menyajikan layanan bimbingan berbasis online untuk masuk UIN Bandung. Setiap calon mahasiswa yang mengikuti bimbingan akan diberi latihan soal dan akan mendapatkan review dari hasil ujiannya.</p>
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
