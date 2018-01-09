<?php
		mysql_connect("localhost","root","");
		mysql_select_db("gouinbdg");
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
					<li><a href='index.php'>Beranda </a></li> 
 
		  			<li><a href="tentang.php">Tentang</a></li>
		  			<li><a href="materi.php">Materi Latihan</a></li>
      				<li class="active" ><a href="latihan.php?tahun=2014">Latihan Soal</a></li>
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
		<div class="container-fluid text-center">    
		  	<div class="row content">
			     <div class="col-sm-3 sidenav">
				      <br>
					      <ul class="nav nav-pills nav-stacked">
					      	<?php
							$tahun = $_GET['tahun'];
					      		if($tahun==2014){
					      	?>
					        <li class="active"><a href="latihan.php?tahun=2014">Tahun 2014</a></li>
					        <li><a href="latihan.php?tahun=2015">Tahun 2015</a></li>
					        <li><a href="latihan.php?tahun=2016">Tahun 2016</a></li>
					      	<?php
					      		}elseif($tahun==2015){
					      	?>
					        <li><a href="latihan.php?tahun=2014">Tahun 2014</a></li>
					        <li class="active"><a href="latihan.php?tahun=2015">Tahun 2015</a></li>
					        <li><a href="latihan.php?tahun=2016">Tahun 2016</a></li>
					      	<?php
					      		}elseif($tahun==2016){
					      	?>
					        <li><a href="latihan.php?tahun=2014">Tahun 2014</a></li>
					        <li><a href="latihan.php?tahun=2015">Tahun 2015</a></li>
					        <li class="active"><a href="latihan.php?tahun=2016">Tahun 2016</a></li>
					        <?php
					    	}
					        ?>
					      </ul>
					  <br>
			    </div>
			    <div class="col-sm-8 text-left"> 
			      <hr>
			      <h3>Soal Latihan </h3>
			      <p>Silahkan Kerjakan Soal!</p>
     	 			<?php						  
						echo "<div style='width:100%; padding=10px 10px;  overflow:scroll; height:700px;'>";
						echo '<table width="90%"; padding="10px 10px">';
							if ($tahun==2014){
								$hasil=mysql_query("select * from tbl_soal WHERE aktif='Y' and mata_pelajaran='matematika' and tahun=$tahun ORDER BY RAND ()");
					    		$jumlah=mysql_num_rows($hasil);
					    		$urut=0;
					    
					   			 	while($row =mysql_fetch_array($hasil))
					        		{
							            $id=$row["id_soal"];
							            $pertanyaan=$row["soal"];
							            $pilihan_a=$row["a"];
							            $pilihan_b=$row["b"];
							            $pilihan_c=$row["c"];
							            $pilihan_d=$row["d"]; 
					            
					?>
					   		<form name="form1" method="post" action="jawab.php">
						        <input type="hidden" name="id[]" value=<?php echo $id; ?>>
						        <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
						        <tr>
						            <td width="20" margin="10px"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
						            <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
						        </tr>
					<?php
					        if (!empty($row["gambar"])) {
						        echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
					        }
					?>
					        	<tr>
						            <td height="25"><font color="#000000">&nbsp;</font></td>
						            <td><font color="#000000">
						               A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
						               <?php echo "$pilihan_a";?></font> </td>
					       		</tr>
					        	<tr>
						            <td><font color="#000000">&nbsp;</font></td>
						            <td><font color="#000000">
						               B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
						                <?php echo "$pilihan_b";?></font> </td>
					        	</tr>
					        	<tr>
						            <td><font color="#000000">&nbsp;</font></td>
						            <td><font color="#000000">
						              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
						              <?php echo "$pilihan_c";?></font> </td>
					       		</tr>
					        	<tr>
						            <td><font color="#000000">&nbsp;</font></td>
						            <td><font color="#000000">
						              D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
						              <?php echo "$pilihan_d";?></font> </td>
					        	</tr>
					            
					<?php
					   		}
					?>
					        <tr>
					            <td>&nbsp;</td>
					            <td>
					            	<div class=" col-sm-1">
										<input height="25" class="btn btn-default" name="submit" type="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
									</div>
					            </td>
					        </tr>
					            </table>
						</form>
					<?php
					   		}
					   	
					   	else if ($tahun==2015){
					   			$hasil=mysql_query("select * from tbl_soal WHERE aktif='Y'  ORDER BY RAND ()");
					    		$jumlah=mysql_num_rows($hasil);
					    		$urut=0;
					    
					   			 	while($row =mysql_fetch_array($hasil))
					        		{
							            $id=$row["id_soal"];
							            $pertanyaan=$row["soal"];
							            $pilihan_a=$row["a"];
							            $pilihan_b=$row["b"];
							            $pilihan_c=$row["c"];
							            $pilihan_d=$row["d"]; 
						?>
									<form name="form1" method="post" action="jawab.php">
								        <input type="hidden" name="id[]" value=<?php echo $id; ?>>
								        <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
								        <tr>
								            <td width="20" margin="10px"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
								            <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
								        </tr>
						<?php
							        if (!empty($row["gambar"])) {
								        echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
							        }
						?>
										<tr>
								            <td height="25"><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								               A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
								               <?php echo "$pilihan_a";?></font> </td>
					       				</tr>
					        			<tr>
								            <td><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								               B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
								                <?php echo "$pilihan_b";?></font> </td>
					        			</tr>
					        			<tr>
								            <td><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
								              <?php echo "$pilihan_c";?></font> </td>
					       				</tr>
					        			<tr>
								            <td><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								              D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
								              <?php echo "$pilihan_d";?></font> </td>
					        			</tr>
					        <?php
					   				}
					   		?>
										<tr>
					            			<td>&nbsp;</td>
					           				 <td>
					            				<div class=" col-sm-1">
													<input height="25" class="btn btn-default" name="submit" type="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
												</div>
					            			</td>
					        			</tr>
					            </table>
							</form>
							<?php
					   		}
					   		else if ($tahun==2016){
					   			$hasil=mysql_query("select * from tbl_soal WHERE aktif='Y'  ORDER BY RAND ()");
					    		$jumlah=mysql_num_rows($hasil);
					    		$urut=0;
					    
					   			 	while($row =mysql_fetch_array($hasil))
					        		{
							            $id=$row["id_soal"];
							            $pertanyaan=$row["soal"];
							            $pilihan_a=$row["a"];
							            $pilihan_b=$row["b"];
							            $pilihan_c=$row["c"];
							            $pilihan_d=$row["d"]; 
							?>
									<form name="form1" method="post" action="jawab.php">
								        <input type="hidden" name="id[]" value=<?php echo $id; ?>>
								        <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
								        <tr>
								            <td width="20" margin="10px"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
								            <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
								        </tr>
							<?php
							        if (!empty($row["gambar"])) {
								        echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
							        }
							?>
										<tr>
								            <td height="25"><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								               A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
								               <?php echo "$pilihan_a";?></font> </td>
					       				</tr>
					        			<tr>
								            <td><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								               B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
								                <?php echo "$pilihan_b";?></font> </td>
					        			</tr>
					        			<tr>
								            <td><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
								              <?php echo "$pilihan_c";?></font> </td>
					       				</tr>
					        			<tr>
								            <td><font color="#000000">&nbsp;</font></td>
								            <td><font color="#000000">
								              D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
								              <?php echo "$pilihan_d";?></font> </td>
					        			</tr>
					        	<?php
					   				}
					   			?>
										<tr>
					            			<td>&nbsp;</td>
					           				 <td>
					            				<div class=" col-sm-1">
													<input height="25" class="btn btn-default" name="submit" type="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
												</div>
					            			</td>
					        			</tr>
					            </table>
							</form>
							<?php
								}
							?>
			    </div>
		  	</div>
		</div>
	</body>
</html>