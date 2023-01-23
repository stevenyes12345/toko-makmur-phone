<html>
    <title>latihan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div>
  <h3 align="center">Toko Makmur Phone</h3>
</div>

    <table  border="0" class="table table-hover table-responsive">
      <tr>
    <td colspan="9." align="center"><a href="tambah_penjualan.php" class="glyphicon glyphicon-plus">TAMBAHKAN DATA </a></td></tr>
        <tr>
        <td>id</td>
        <td>product name</TD>
        <td>category</td>
        <td>price</td>
        <td colspan="2" align="center">aksi</td>
        </tr>
        <?php 
        include "koneksi.php";
        $data = mysqli_query($koneksi,"SELECT * FROM penjualan_phone");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $d['id'];?></TD> 
        <td><?php echo $d['product_name'];?></TD> 
        <td><?php echo $d['category'];?></TD>
        <td><?php echo $d['price'];?></TD>
        <td><a href="upd_penjualan.php?update=<?php echo $d['id'];?>" class="glyphicon glyphicon-pencil">update</td></a>
        <td><a href="delete_penjualan.php?delete=<?php echo $d['id'];?>" class="glyphicon glyphicon-remove">delete</td></a>
        <?php 
       } ?>
    </table>
    <a href="dashboard.php">back</a>
</html>