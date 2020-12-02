<?php

include 'koneksi.php';
if(isset($_GET['id'])){
	$delete = mysqli_query($conn, "DELETE FROM edukasi WHERE edukasi = '".$_GET['id']."' ");
}