<?php
	
	$server		= "localhost"; // sesuaikan alamat server anda
	$user		= "root"; // sesuaikan user web server anda
	$password	= ""; // sesuaikan password web server anda
	$database	= "kampus"; // sesuaikan database web server anda
		
	$con = mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_errno()){
	echo "Gagal koneksi ke database";
}else{
	echo "Berhasil koneksi ke database";
}