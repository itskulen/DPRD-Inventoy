<?php 
// koneksi database
include "../koneksi.php";
session_start();

mysqli_query($koneksi,"DELETE from driver where id='$_GET[id]'");
$_SESSION["sukses"] = 'Data Berhasil Dihapus';
// mengalihkan halaman kembali ke index.php
header("location: index.php")

 ?>