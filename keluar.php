<?php
session_start();     /*untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser.*/
session_destroy();   /*semua session yang telah di buat dan di inisialisasi akan di destroy atau di hancurkan.*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <title>Notifikasi Keluar</title>
</head>
<body>
    <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
    <h1 class="display-5 fw-bold text-white">Anda Telah Keluar</h1>
    <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4 text-white">Silahkan Klik Tombol dibawah ini untuk login kembali</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="index.php" class="btn btn-outline-info btn-lg" role="button">Login</a>
    </div>
    </div>
    </div>
    </div>
    <center><p class="mt-5 mb-3 text-dark">&copy;Steven @2022-2023</p></center>
</body>
</html>