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
    <td colspan="9." align="center"><a href="tambah_pembayaran.php"  class="glyphicon glyphicon-plus">TAMBAHKAN DATA </a></td></tr>
    <td>id</TD>
        <td>product name</TD>
        <td>price</td>
        <td>jumlah</td>
        <td>via</td>
        <td colspan="2" align="center">aksi</td>
        </tr>
        <?php 
        include "koneksi.php";
        $data = mysqli_query($koneksi,"SELECT * FROM pembayaran");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $d['id'];?></TD> 
        <td><?php echo $d['product_name'];?></TD> 
        <td><?php echo $d['price'];?></TD>
        <td><?php echo $d['jumlah'];?></TD>
        <td><?php echo $d['via'];?></TD> 
        <td><a href="upd_pembayaran.php?update=<?php echo $d['id'];?>" class="glyphicon glyphicon-pencil">update</td></a>
        <td><a href="delete_pembayaran.php?delete=<?php echo $d['id'];?>" class="glyphicon glyphicon-remove">delete</td></a>
        <?php 
       } ?>
    </table>
    <a href="dashboard.php">back</a>
</html>