<?php
  include ('function.php'); 
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>UTS PEMROGRAMAN WEB</title>
        <meta charset="UTF-8">
        <meta name="author" content="Dwi Wahyu Effendi">
        <link rel="shortcut icon" href="assets/img/LOGO.png">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    <nav class="navbar navbar-dark fixed-top bg-danger justify-content-center p-0">
      <a class="navbar-brand" href="#">
        <h1><img src="assets/img/logo.png" alt="Logo" style="width:40px;">  Barokah Minimarket</h1>
      </a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:60px;">
                <li class="nav-item">
                    <a class="nav-link btn-outline-dark active" href="<?php echo "index.php"; ?>">Lihat Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-dark active" href="<?php echo "form.php"; ?>">Tambah Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-dark active" href="<?php echo "search.php"; ?>">Search Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-dark active" href="<?php echo "filter.php"; ?>">Filter Data</a>
                </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php 
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Inventaris berhasil di-update</div>';
              }
              elseif($status=='error'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Inventaris gagal di-update</div>';
              }
            }
           ?>

          <h2></h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>SKU</th>
                  <th>NAMA BARANG</th>
                  <th>KATEGORI</th>
                  <th>JUMLAH STOK</th>
                  <th>HARGA SATUAN</th>
                  <th>OPSI</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $query = "SELECT * FROM barang";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['SKU'];  ?></td>
                    <td><?php echo $data['namaBarang'];  ?></td>
                    <td><?php echo $data['kategori'];  ?></td>
                    <td><?php echo $data['stok'];  ?></td>
                    <td><?php echo $data['hargaSatuan'];  ?></td>
                    <td>
                      <a href="<?php echo "update.php?SKU=".$data['SKU']; ?>" class="btn navbar-dark btn-outline-dark btn-sm"> Update</a>
                      <a href="<?php echo "delete.php?SKU=".$data['SKU']; ?>" class="btn navbar-dark btn-outline-dark btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    </body>
</html>