<?php
include("koneksi.php");
		//session_start(); // Memulai Session
		$error=''; // Variabel untuk menyimpan pesan error
		if (isset($_POST['login'])) {
			if (empty($_POST['email']) || empty($_POST['password'])) {
				$error = "Username or Password is invalid";
			}
			
			else
			{
				// Variabel username dan password
				$username=$_POST['email'];
				$password=$_POST['password'];
				// Membangun koneksi ke database
				$connection = mysql_connect("localhost", "root", "");
				// Mencegah MySQL injection 
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysql_real_escape_string($username);
				$password = mysql_real_escape_string($password);
				// Seleksi Database
				$db = mysql_select_db("gouinbdg", $connection);
				// SQL query untuk memeriksa apakah karyawan terdapat di database?
				$query = mysql_query("select * from peserta where password='$password' AND email='$username'", $connection);
				$data 	= mysqli_fetch_assoc($query);
				$rows = mysql_num_rows($query);
				
				if ($rows>0) {
					$_SESSION['user'] = "HASHMHS";
					$_SESSION['login_user']=$username;
					$_SESSION['id_peserta']=$data['id_peserta'];
					$_SESSION['name'] = $data['nama']; // Membuat Sesi/session
					header("location: ../peserta/latihan.php"); // Mengarahkan ke halaman profil
				} 
				else {
					header("location: ../peserta/latihan.php?error=1");
					
				}
					mysql_close($connection); // Menutup koneksi
			}
		}
		
		else if (isset($_POST['logout'])){
			session_destroy();
			header("Location: ../index.php");
		}
?>