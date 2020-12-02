<?php 
  include 'koneksi.php'; 

  if(isset($_POST['id'])){
    $id = $_POST['id'];
    $jenjang = $_POST['jenjang'];
    $tahun = $_POST['tahun'];
    $sql = "INSERT INSERT edukasi VALUES ('$id','$jenjang','$tahun')";
    if(mysqli_query($conn,$sql)){
      echo "BERHASIL MENAMBAH DATA RIWAYAT PENDIDIKAN";
    }else{
      echo "ERROR MENAMBAH DATA RIWAYAT PENDIDIKAN <br/>".mysqli_error($conn);
    }
  }
?>