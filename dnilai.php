
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
		  <li><a href="index.php">Beranda</a></li>
		</ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Menu Admin</a></li>
        <li><a href="dsoal.php">Data Soal </a></li>
        <li><a href="dnilai.php">Data Nilai</a></li>
        <li><a href="dpeserta.php">Data Peserta</a></li>
      </ul><br>
    </div>
   <div class="col-sm-9">
      <hr>
      <h2>GoUINBdg</h2>
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

</body>
</html>
