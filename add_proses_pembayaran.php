<?php
   include "koneksi.php";
   $random_data_id = random_int(100000000,999999999); 
   $value_id = $random_data_id; 
   $value_nama_cek = $_POST['product_name'];
   $value_nama1_cek = $_POST['price'];
   $value_bagian_cek = $_POST['jumlah'];
   $value_bagian2_cek = $_POST['via'];
   

   $cek_id = mysqli_query($koneksi,"select *  from pembayaran where id = '$random_data_id'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into pembayaran values('$value_id', '$value_nama_cek ', '$value_nama1_cek ',' $value_bagian_cek', '$value_bagian2_cek' )"
   );

   header('Location:pembayaran.php');
   ?>