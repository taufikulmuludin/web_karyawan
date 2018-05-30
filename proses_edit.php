
<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $id_karyawan = $_POST['nip'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];

    // buat query update
    $sql = "UPDATE data_karyawan SET nama_lengkap='$nama_lengkap', alamat='$alamat', jenis_kelamin='$jenis_kelamin', email='$email', jabatan='$jabatan' WHERE nip=$nip";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: karyawan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>