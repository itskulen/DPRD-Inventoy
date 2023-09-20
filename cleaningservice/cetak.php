<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
   
  
</head>
<body>
    <center>
        <h2>KARTU INVENTARIS RUANGAN</h2>
    </center>
    <table border="0">
<tbody style="font-size: small;">
<tr>
    <td>PROVINSI   </td>
    <td>:</td>
    <td>DAERAH ISTIMEWA YOGYAKARTA</td>
</tr>
<tr>
    <td>KABUPATEN/KOTA</td>
    <td>:</td>
    <td>YOGYAKARTA</td>
</tr>
<tr>
    <td>UNIT</td>
    <td>:</td>
    <td>PEMERINTAH PROVINSI DIY</td>
</tr>
<tr>
    <td>SATUAN KERJA</td>
    <td>:</td>
    <td>SEKRETARIAT DPRD PROVINSI DIY</td>
</tr>

</tbody>
</table>
<center>
    <h4>BAGIAN CLEANING SERVICE </h4>
</center></br></br>
    <div class="table-responsive">
                                <table width="100%" cellspacing="10" rules = "all">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama</th>
                                            <th>Merek</th>
                                            <th>Bahan</th>
                                            <th>Jumlah</th>
                                            <th>Tahun</th>
                                            <th>Kondisi</th>
                                            <th>Keterangan</th>
                                            <th>gambar</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php
                                    include '../koneksi.php';
                                    $no=1;
                                    $data= mysqli_query($koneksi,"SELECT*FROM cs");
                                    while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                        <tr align="center">
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $d['kode_brg']; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['merek']; ?></td>
                                            <td><?php echo $d['bahan']; ?></td>
                                            <td><?php echo $d['jumlah']; ?></td>
                                            <td><?php echo $d['tahun']; ?></td>
                                            <td><?php echo $d['kondisi']; ?></td>
                                            <td><?php echo $d['keterangan']; ?></td>
                                            <td><img src="<?php echo $d['gambar']; ?>" width="25"></td>
                                        </tr>
                                       <?php
                                    }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                            <script>
                                window.print();
                            </script>
       <BR/>    
       <BR/>   
       <BR/>   	
<div>
	<div style="width:400px;float:right">
    <center>
		Mengetahui</br>
        Sekretaris DPRD Provinsi DIY
                                </br>
                                </br>
                                </br>
                                </br>
        <b>HARYANTA, S.H.<hr></b>
        NIP. 19631009 199303 1 007
		</center>
	</div>
	
</div>
</body>
 
</html>