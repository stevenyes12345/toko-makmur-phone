<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $nama_order = $_POST['supplier'];
 $jenis_order = $_POST['product_name'];
 $total_order1 = $_POST['price'];
 $total_order2 = $_POST['jumlah'];
 $total_order3 = $_POST['tahun_pembelian'];


 $upd_barang = mysqli_query($koneksi,"UPDATE pembelian SET supplier='$nama_order' , product_name='$jenis_order' , price='$total_order1',  jumlah='$total_order2', tahun_pembelian='$total_order3'    WHERE id='$id' ");
 header('Location:pembelian.php');
 ?>