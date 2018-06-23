<body bgcolor="#65a9d7">
<?php
include "koneksi.php";

if(!empty($_POST['kd_mk']))
{
 $kd_mk=$_POST['kd_mk'];
 $nim=$_POST['nim'];
 
 
 $link=koneksi_db();
 $sql="insert into matkul_yangdiambil (kd_mk,nim) values ('$kd_mk','$nim');";
 $res=mysqli_query($link,$sql);
 
 if($res)
 {
 	echo "<center><h1>Sukses menambah data matakuliah $kd_mk</h1><br>";
	echo "untuk melihatnya silahkan klik<br> <a href='tampilmatkul.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal Menambah data matakuliah $kd_mk</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br>Kembali<br> <a href='tampilmatkul.php'>Link ini</a>
	</center>";
 }
}
?>
</body>