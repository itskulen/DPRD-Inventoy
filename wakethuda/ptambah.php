<?php
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
$gambar=$_FILES['image']['name'];
		$upload="uploads/".$gambar;


            $query="INSERT INTO wakethuda(id,kode_brg,nama,merek,bahan,jumlah,tahun,kondisi,keterangan,gambar)VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmt=$koneksi->prepare($query);
		$stmt->bind_param("ssssssssss",$id,$kode_brg,$nama,$merek,$bahan,$jumlah,$tahun,$kondisi,$keterangan,$upload);
		$stmt->execute();
		move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        header("location: index.php")

//        mysqli_query($koneksi,"insert into it values('$id','$kode_brg','$nama','$merek','$bahan','$jumlah','$kondisi','$gambar','$keterangan')");

?>

