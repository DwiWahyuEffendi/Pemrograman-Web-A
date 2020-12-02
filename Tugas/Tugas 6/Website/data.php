<?php

include 'koneksi.php';

$sql = "SELECT * FROM edukasi";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$link_delete = "<a class='hapusData' href='delete.php?id=".$row['id']."'>Delete</a>";
		echo $row['jenjang'].",".$row['tahun'] . ". | $link_delete <br/>";
	}
}