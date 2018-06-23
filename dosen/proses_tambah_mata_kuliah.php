<body bgcolor="#65a9d7">
<?php
include "../koneksi.php";

if(!empty($_POST['kd_mk']))
{
 $kd_mk=$_POST['kd_mk'];
 $nama_mk=$_POST['nama_mk'];
 $Tahun=$_POST['Tahun'];
 
 $link=koneksi_db();
 $sql="insert into t_mata_kuliah (kd_mk,nama_mk,Tahun) values ('$kd_mk','$nama_mk','$Tahun');";
 $res=mysqli_query($link,$sql);
 
 if($res)
 {
 	echo "<center><h1>Sukses menambah data matakuliah $nama_mk</h1><br>";
	echo "untuk melihatnya silahkan klik<br> <a href='tampil_mata_kuliah.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal Menambah data matakuliah $nama_mk</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br>Kembali<br> <a href='tampil_mata_kuliah.php'>Link ini</a>
	</center>";
 }
}
?>
</body>