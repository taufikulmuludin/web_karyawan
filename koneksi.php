<?php

$server   = 'localhost';
$database = 'db_karyawan';
$username     = 'root';
$password = '';

$koneksi = mysqli_connect($server,$username,$password) or die("koneksi server gagal");

if($koneksi){
		mysqli_select_db($koneksi, $database) or die ("koneksi database gagal");
}
?>