<?php
	function peserta() {
		session_start(); // Memulai Session
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
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Membuat Sesi/session
			header("location: latihan.php"); // Mengarahkan ke halaman profil
		} else {
			header("location: latihan.php?error=1");
		}
			mysql_close($connection); // Menutup koneksi
		}
		}
		else if (isset($_POST['logout'])){
			session_destroy();
			header("Location: index.php");
		}
	}

	function admin() {
		session_start(); // Memulai Session
		$error=''; // Variabel untuk menyimpan pesan error
		if (isset($_POST['login'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
		}
		else
		{
		// Variabel username dan password
		$username=$_POST['username'];
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
		$query = mysql_query("select * from admin where password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Membuat Sesi/session
			header("location: latihan.php"); // Mengarahkan ke halaman profil
		} else {
			header("location: latihan.php?error=1");
		}
			mysql_close($connection); // Menutup koneksi
		}
		}
		else if (isset($_POST['logout'])){
			session_destroy();
			header("Location: index.php");
		}
	}
?>