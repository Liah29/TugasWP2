<body bgcolor="#65a9d7">
<?php
include "koneksi.php";
if(!empty($_GET['id']))
{

//pengisian var
 $nim=$_GET['id'];

//koneksi database
 $link=koneksi_db();
 $sql="DELETE FROM t_nilai WHERE nim='$nim'";
 $res=mysqli_query($link,$sql);
 
 if($res)
 {
 	echo "<center><h1>Sukses Menghapus data nilai $nim</h1><br>";
	echo "Silahkan klik<br> 
	<a href='tampil_nilai.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal Menghapus data nilai $nim</h1><br>";
	echo "Error : ".mysql_error($link);
	echo "<br>Kembali<br> 
	<a href='hallecturer.php'>Link ini</a></center>";
 }
}
?>
</body>