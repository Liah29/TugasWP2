<body bgcolor="#65a9d7">
<?php
include "koneksi.php";

if(!empty($_GET['id']))
{
 $link=koneksi_db();

 $nim=$_GET['id'];
 
 $query="SELECT * FROM t_mahasiswa WHERE nim='$nim'";
 $sql=mysqli_query($link,$query);
 $data=mysqli_fetch_array($sql);
 unlink("./img/foto_mhs/".$data['foto']);
 
 $sql1="DELETE FROM t_mahasiswa where nim='$nim'";
 $res=mysqli_query($link,$sql1);
 
 if($res)
 {
 	echo "<center><h1>Sukses menghapus data mahasiswa $nim</h1><br>";
	echo "untuk melihatnya silahkan klik<br> <a href='tampil_mahasiswa.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal menghapus data mahasiswa $nim</h1><br>";
	echo "Error : ".mysql_error($link);
	echo "<br>Kembali<br> <a href='../hallecturer.php'</a>
	</center>";
 }
}
?>
</body>