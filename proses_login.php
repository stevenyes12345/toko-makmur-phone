<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	
	if($data['akses']=="admin"){

		
		$_SESSION['username'] = $username;
		$_SESSION['akses'] = "admin";
		
		header("location:info_admin.php");

	}else if($data['akses']=="client"){
		
		$_SESSION['username'] = $username;
		$_SESSION['akses'] = "client";
		
		header("location:info_client.php");

    }else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
	
}else{
	header("location:index.php?pesan=gagal");
}

?>