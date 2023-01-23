
<?php
include "koneksi.php";

$id_update_barang = $_GET['update'];

$upd_barang= mysqli_query($koneksi,"select  *  from pembelian where id ='$id_update_barang' ");
$upd = mysqli_fetch_array($upd_barang);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
</head>
<body >
  <form action="upd_proses_pembelian.php" method="post">
      <table border="0" align="center">
          <tr>
              <td align="center" class="pink">ID</td>
              <td>:</td>
          <td align="center">
              <input readonly type="text" name="id" value="<?php echo $upd['id'];?>">
</td></tr>
<td align="center" class="pink" >supplier</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="supplier" value="<?php echo $upd['supplier'];?>">
</td></tr>
<td align="center" class="pink">product name</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="product_name" value="<?php echo $upd['product_name'];?>">
</td></tr>
<td align="center" class="pink">price</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="price" value="<?php echo $upd['price'];?>">
</td></tr>
<td align="center" class="pink">jumlah</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="jumlah" value="<?php echo $upd['jumlah'];?>">
</td></tr>
<td align="center" class="pink">tahun pembelian</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="tahun_pembelian" value="<?php echo $upd['tahun_pembelian'];?>">
</td></tr>
<tr>
  <td align="center" colspan="3"><input type="submit" value="submit"></td></tr>
      </table>
</body>


