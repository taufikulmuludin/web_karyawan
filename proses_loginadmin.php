<?php
include"koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan

$username=$_POST['username'];
$password=($_POST['password']); //engencrypssi password
$tampil= mysqli_query($koneksi,"select*from admin where username= '$username' and password='$password'"); //menocokan data yangndiinput dengan data yang ada di tabel
$jumlahdata= mysqli_num_rows($tampil);
$admin=mysqli_fetch_array($tampil);
if($jumlahdata>0) //apabila datanya diketemukan
{
session_start(); //skrip memulai sesi
$_SESSION['id_admin']=$admin['id_admin']; //memasukan nilai sesi dari nilai di tabel member
$_SESSION['nama_lengkap']=$admin['nama_lengkap'];
$_SESSION['loginadmin']=1;
header('location:dashboard.php');
}							
	else
{
msgbox("gagal login");
}
?>
