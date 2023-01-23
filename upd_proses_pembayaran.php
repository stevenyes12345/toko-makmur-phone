<?php
 include 'koneksi.php';

 $id = $_POST['id'];
 $jenis_order = $_POST['product_name'];
 $total_order1 = $_POST['price'];
 $total_order2 = $_POST['jumlah'];
 $total_order3 = $_POST['via'];


 $upd_barang = mysqli_query($koneksi,"UPDATE pembayaran SET product_name='$jenis_order' , price='$total_order1',  jumlah='$total_order2', via='$total_order3'    WHERE id='$id' ");
 header('Location:pembayaran.php');
 ?>