<?php 
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM data_karyawan WHERE id='$id'");
header("location:karyawan.php");
 ?>