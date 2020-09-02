<?php
$koneksi=mysqli_connect("localhost","root","t3ammangr0v3","pelayanan");

if (mysqli_connect_errno()){
	echo"Koneksi ke database gagal".mysqli_connect_error();
	}
?>