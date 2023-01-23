<?php 
session_start();
$koneksi = mysqli_connect("localhost","root","","phone");

if (isset($_POST['daftar'])) 
{
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$gender = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$akses = $_POST['akses'];

	$query = "INSERT INTO tb_user (username,password,jenis_kelamin,alamat,akses) VALUES('$username','$pass','$gender','$alamat','$akses')";

	$query_start = mysqli_query($koneksi,$query);

	if ($query_start) {
		echo "<script>alert('User Berhasil Didaftarkan !');
		window.location = 'index.php'</script>";
	}else{
		echo "User gagal di daftarkan !, Silahkan Ulangi..";
	}
}
