<?php

	function signup(){
		include "koneksi.php";
		$sql = "insert into peserta (nama,email,tgl_lahir,alamat,password) values( '$_POST[nama]', '$_POST[email]', '$_POST[tgl_lahir]', '$_POST[alamat]', '$_POST[password]')";
		$query = $link->query($sql);

		if($query){
			echo "<script language='javascript'>";
			echo "alert('Data Berhasil Ditambahkan!!')";
			echo "</script>";
		}else{
			echo "<script language='javascript'>";
			echo "alert('Data Gagal Ditambahkan!!')";
			echo "</script>";
		}
	}

	

?>
