<?php 
// koneksi database
include "../koneksi.php";

//nangkep data dari form
$id = $_POST['id'];
$kode_brg = $_POST['kode_brg'];
$nama = $_POST['nama'];
$merek = $_POST['merek'];
$bahan = $_POST['bahan'];
$jumlah = $_POST['jumlah'];
$tahun = $_POST['tahun'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];
$oldimage=$_POST['oldimage'];
 
// update data ke database
if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
			$newimage="uploads/".$_FILES['image']['name'];
			unlink($oldimage);
			move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
		}
		else{
			$newimage=$oldimage;
		}
		$query="UPDATE bapemperda SET kode_brg=?,nama=?,merek=?,bahan=?,jumlah=?,kondisi=?,tahun=?,keterangan=?,gambar=? WHERE id=?";
		$stmt=$koneksi->prepare($query);
		$stmt->bind_param("ssssssssss",$kode_brg,$nama,$merek,$bahan,$jumlah,$kondisi,$tahun,$keterangan,$newimage,$id);
		$stmt->execute();
// mengalihkan halaman kembali ke index.php
header("location: index.php")
 
?>