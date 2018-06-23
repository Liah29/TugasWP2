<body bgcolor="#65a9d7">
<?php
include "../koneksi.php";

if(!empty($_POST['nim']))
{
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $ttl=$_POST['ttl'];
 $tgl_lahir=$_POST['tgl_lahir'];
 $alamat=$_POST['alamat'];
 $foto=$_FILES['foto']['name'];
 $tmp=$_FILES['foto']['tmp_name'];
 $uploadir='./img/foto_mhs/';
 $nama_file=$nim.'.jpg';
 $alamatfile=$uploadir.$nama_file;

 if(move_uploaded_file($tmp, $alamatfile)){
 $link=koneksi_db();
 $sql="insert into t_mahasiswa (nim,nama,ttl,tgl_lahir,alamat,foto) values ('$nim','$nama','$ttl','$tgl_lahir','$alamat','$nama_file');";
 $res=mysqli_query($link,$sql);
 }
 if($res)
 {
 	echo "<center><h1>Sukses menambah data mahasiswa $nim - $nama </h1><br>";
	echo "untuk melihatnya silahkan klik<br> <a href='tampil_mahasiswa.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal menambah data mahasiswa $nim - $nama</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br>Kembali<br> <a href='tampil_mahasiswa.php'>Link ini</a>
	</center>";
 }
}
?>
</body>
