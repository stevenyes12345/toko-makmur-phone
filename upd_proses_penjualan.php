<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $nama_order = $_POST['product_name'];
 $jenis_order = $_POST['category'];
 $total_order = $_POST['price'];


 $upd_barang = mysqli_query($koneksi,"UPDATE penjualan_phone SET product_name='$nama_order' , category='$jenis_order' , price='$total_order'  WHERE id='$id' ");
 header('Location:penjualan hp.php');
 ?>