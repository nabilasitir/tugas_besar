<?php

class tes extends PHPUnit_Framework_TestCase
{
        function testFile()
        {
                include 'koneksi/koneksi.php';
                $login = mysqli_query($link,"SELECT * FROM admin");
                $user = mysqli_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(1, $content1);
        }

        function testcoba()
        {
                include 'koneksi/koneksi.php';
                $login = mysqli_query($link,"SELECT * FROM admin");
                $user = mysqli_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(2, $content1);
        }
		 function testcoba2()
        {
                include 'koneksi/koneksi.php';
                $login = mysqli_query($link,"SELECT * FROM admin");
                $user = mysqli_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(5, $content1);
        }
		 function testsoal()
        {
                include 'koneksi/koneksi.php';
                $login = mysqli_query($link,"SELECT * FROM tbl_soal");
                $user = mysqli_num_rows($login);
                $content1 = $user;
				
            
                $this->assertEquals(12, $content1);
}
}
?>