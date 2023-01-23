<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <title>Form Daftar</title>
</head>
<body>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Aplikasi Buku Tamu</h1>
        <p class="col-lg-10 fs-4">Selamat Datang di Aplikasi Buku Tamu berbasis web. Kami menyimpan data berupa data tamu yang hendak berkunjung. Jika anda belum mendaftar silahkan klik menu Daftar di form sebelah kanan anda. Jika anda sudah terdaftar silahkan klik tombol Login</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="proses_daftar.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="Silahkan Isi Username Anda" name="username" required>
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda" name="password" required>
            <label for="password">Password</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" aria-label="Default select example" required="required" name="jenis_kelamin">
              <option selected disabled value="">Silahkan Pilih Gender</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="alamat" placeholder="Silahkan Isi Alamat Anda" name="alamat" required>
            <label for="alamat">Alamat</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" aria-label="Default select example" required="required" name="akses">
              <option selected disabled value="">Silahkan Pilih Akses</option>
              <option value="Admin">Admin</option>
              <option value="Client">Client</option>
            </select>
          </div>
          <button class="btn btn-lg btn-success" type="submit" name="daftar">Daftar</button>
          <a href="index.php" class="btn btn-lg btn-primary" type="button">Login</a>
          <hr class="my-4">
          <small class="text-muted">&copy;By Kreasi Opensource @2022</small>
        </form>
      </div>
    </div>
  </div>
</body>
</html>