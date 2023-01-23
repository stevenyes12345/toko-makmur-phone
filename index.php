<?php
session_start();
if(isset($_SESSION['username'])) {
    header('location:proses_login.php'); 
  }
    require_once("koneksi.php");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <title>Form Login</title>
</head>
<body>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">toko Makmur Phone</h1>
        <p class="col-lg-10 fs-4">Selamat Datang di Aplikasi Toko Makmur Phone berbasis web. Kami menyimpan data Handphone terkini yg lagi trending. Jika anda belum mendaftar silahkan klik menu Daftar di form sebelah kanan anda. Jika anda sudah punya akun silahkan isi Username dan Password dan klik tombol Login</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="proses_login.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="Silahkan Isi Username Anda" name="username">
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda" name="password">
            <label for="password">Password</label>
          </div>
          <button class="btn btn-lg btn-success" type="submit">Masuk</button>
          <a href="daftar.php" class="btn btn-lg btn-primary" type="button">Daftar</a>
          <hr class="my-4">
          <small class="text-muted">&copy;steven yesaya @2022</small>
        </form>
      </div>
    </div>
  </div>
</body>
</html>