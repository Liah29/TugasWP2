<body bgcolor="#65a9d7">
<?php
include "../koneksi.php";
if(!empty($_POST['kd_mk']))
{

//pengisian var
 $kd_mk=$_POST['kd_mk'];
 $nama_mk=$_POST['nama_mk'];

//koneksi database
 $link=koneksi_db();
 $sql="UPDATE t_mata_kuliah SET kd_mk='$kd_mk', nama_mk='$nama_mk' WHERE kd_mk='$kd_mk'";
 $res=mysqli_query($link,$sql);
 
 if($res)
 {
 	echo "<center><h1>Sukses Mengubah data mata kuliah $kd_mk</h1><br>";
	echo "Silahkan klik<br> 
	<a href='tampil_mata_kuliah.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal Menghapus data mata kuliah $kd_mk</h1><br>";
	echo "Error : ".mysql_error($link);
	echo "<br>Kembali<br> 
	<a href='tampil_mata_kuliah.php'>Link ini</a></center>";
 }
}
?>
</body>