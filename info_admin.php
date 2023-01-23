<?php 
session_start();

  // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['akses']==""){
  header("location:index.php?pesan=gagal");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="p-5 mb-4 bg-dark rounded-3">
      <div class="container-fluid py-5">
        <center>
        <h1 class="display-5 fw-bold text-white">Notifikasi Masuk Aplikasi</h1>
        </center>
        <center><h2 class="text-primary">Anda Masuk Sebagai <b><?php echo $_SESSION['akses']; ?></h2></center>
        <center><p class="col-md-8 fs-4"></p>
        <p class="text-warning">Silahkan Klik tombol Dasboard untuk masuk Aplikasi</p>
        <a class="btn btn-primary btn-lg" href="dashboard.php" role="button">Dasboard</a>
        <a class="btn btn-danger btn-lg" href="keluar.php" role="button">Keluar</a>
          </center>
      </div>
    </div>
</body>
</html>