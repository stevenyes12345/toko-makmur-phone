<?php 

$drop = $_GET['delete'];


include('koneksi.php');

//query hapus
$drop = "DELETE FROM pembayaran WHERE id = '$drop' ";

if (mysqli_query($koneksi , $drop)) {
 # redirect ke index.php
 header("location:pembayaran.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>