<?php
   include "koneksi.php";
   $random_data_id = random_int(100000000,999999999); 
   $value_id = $random_data_id; 
   $value_nama_cek = $_POST['supplier'];
   $value_nama1_cek = $_POST['product_name'];
   $value_bagian_cek = $_POST['price'];
   $value_bagian2_cek = $_POST['jumlah'];
   $value_bagian3_cek = $_POST['tahun_pembelian'];
   

   $cek_id = mysqli_query($koneksi,"select *  from pembelian where id = '$random_data_id'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into pembelian values('$value_id', '$value_nama_cek ', '$value_nama1_cek ',' $value_bagian_cek', '$value_bagian2_cek', $value_bagian3_cek)"
   );

   header('Location:pembelian.php');
   ?>