<body bgcolor="#65a9d7">
<?php
include "../koneksi.php";
if(!empty($_GET['id']))
{

//pengisian var
 $id=$_GET['id'];

//koneksi database
 $link=koneksi_db();
 $sql="DELETE FROM user WHERE kd_mk='$id'";
 $res=mysqli_query($link,$sql);
 
 if($res)
 {
 	echo "<center><h1>Sukses Menghapus data mata kuliah $id</h1><br>";
	echo "Silahkan klik<br> 
	<a href='tampil_mata_kuliah.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal Menghapus data mata kuliah $id</h1><br>";
	echo "Error : ".mysql_error($link);
	echo "<br>Kembali<br> 
	<a href='hallecturer.php'>Link ini</a></center>";
 }
}
?>
</body>