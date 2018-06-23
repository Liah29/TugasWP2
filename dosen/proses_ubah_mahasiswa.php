<body bgcolor="#65a9d7">
<?php
include "../koneksi.php";
 	$link=koneksi_db();

if(!empty($_POST['nim']))
{
 	$nim=$_POST['nim'];
 	$nama=$_POST['nama'];
 	$ttl=$_POST['ttl'];
 	$tgl_lahir=$_POST['tgl_lahir'];
 	$alamat=$_POST['alamat'];
   
 	//validasi update foto
   if(empty($_FILES['foto']['name'])){
 	$sql="UPDATE t_mahasiswa SET  nim='$nim', nama='$nama', ttl='$ttl', tgl_lahir='$tgl_lahir', alamat='$alamat'  WHERE nim='$nim'";
	$res=mysqli_query($link,$sql);
   }else{
   	//hapus foto
   	$query="SELECT * FROM t_mahasiswa WHERE nim='$nim'";
 	$sql=mysqli_query($link,$query);
 	$data=mysqli_fetch_array($sql);
 	unlink("./img/foto_mhs/".$data['foto']);
 	
 	//update foto
	$foto=$_FILES['foto']['name'];
 	$tmp=$_FILES['foto']['tmp_name'];
 	$uploadir='./img/foto_mhs/';
 	$nama_file=$nim.'.jpg';
 	$alamatfile=$uploadir.$nama_file;
	move_uploaded_file($tmp, $alamatfile);
	$sql="UPDATE t_mahasiswa SET  nim='$nim', nama='$nama', ttl='$ttl', tgl_lahir='$tgl_lahir', alamat='$alamat', foto='$nama_file' WHERE nim='$nim'";
	$res=mysqli_query($link,$sql);
  }


 if($res)
 {
 	echo "<center><h1>Sukses mengubah data mahasiswa $nim - $nama </h1><br>";
	echo "untuk melihatnya silahkan klik<br> <a href='tampil_mahasiswa.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal mengubah data mahasiswa $nim - $nama</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br>Kembali<br> <a href='tampil_mahasiswa.php'>Link ini</a>
	</center>";
 }
}
?>
</body>
