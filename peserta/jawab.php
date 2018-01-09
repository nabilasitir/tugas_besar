 <?php
                        include "../koneksi/login.php";
                        mysql_connect("localhost","root","");
                        mysql_select_db("gouinbdg");

                    
                         if(isset($_POST['submit'])){
                                $pilihan=$_POST["pilihan"];
                                $id_soal=$_POST["id"];
                                $jumlah=$_POST["jumlah"];
                
                                $score=0;
                                $benar=0;
                                $salah=0;
                                $kosong=0;
                            for ($i=0;$i<$jumlah;$i++){
                                 //id nomor soal
                                $nomor=$id_soal[$i];
                    
                                //jika user tidak memilih jawaban
                                if (empty($pilihan[$nomor])){
                                $kosong++;
                            }else{
                                    //jawaban dari user
                                    $jawaban=$pilihan[$nomor];
                        
                        //cocokan jawaban user dengan jawaban di database
                        $query=mysql_query("select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                        $cek=mysql_num_rows($query);
                        
                        if($cek){
                            //jika jawaban cocok (benar)
                            $benar++;
                        }else{
                            //jika salah
                            $salah++;
                        }
                        
                    } 
                        //cek hasil
                            $result     =mysql_query("select * from tbl_soal WHERE aktif='Y'");
                            $jumlah_soal=mysql_num_rows($result);
                            $score      = 100/$jumlah_soal*$benar;
                            $hasil      = number_format($score,1);
                }
                    //simpan 
                    if(isset($_POST['simpan'])){ 
                        $link = mysqli_connect("localhost", "root", "", "gouinbdg") or die (mysqli_error());
                        $sql =mysql_query("insert into jawaban values( '$_POST[id_jawaban]', '$_SESSION[id_peserta]', '$_POST[benar]', '$_POST[salah]', '$_POST[kosong]', '$_POST[jumlah_soal]'), '$_POST[nilai]', 'CURRENT_DATE()'");
                        $query = $link->query($sql);
                    }
                    else { }
          }

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
            <div class="col-sm-18 text-left"> 
                  <hr>
            </div>
            <div class="container">
                <div class="panel panel-default">
                <div class="panel-heading"><h2>Hasil Latihan</h2></div>
                <div class="panel-body" >
                    <form id="signupform" class="signUpEl form-horizontal" role="form" autocomplete="off" method="POST">
                        <div class="form-group">
                            <div class="col-sm-9 col-lg-6">
                               <?php

                                //Lakukan Penyimpanan Kedalam Database
                                echo " 
                                <tr>
                                    <td>Jumlah Jawaban Benar  </td><td> : $benar </td>
                                </tr><br>
                                <tr>
                                    <td>Jumlah Jawaban Salah  </td><td> : $salah</td>
                                </tr><br>
                                <tr>
                                    <td>Jumlah Jawaban Kosong </td><td> : $kosong</td>
                                </tr><br>
                                <tr>
                                    <td>Jumlah Nilai </td><td> : $hasil</td>
                                </tr><br>
                                </table></div>";
                            ?>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-2">
                                <input class="btn btn-default" name="simpan" type="submit" value="Selesai Test">
                        </div>
                        </div>                               
                    </form>
                </div>
              </div>
            </div>
        </div>
    </body>
</html>