<body bgcolor="#65a9d7">
<?php
include "../koneksi.php";
 	$link=koneksi_db();

if(!empty($_POST['username']))
{
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$level=$_POST['level'];
 	
   
 	//validasi update img
   if(empty($_FILES['img']['name'])){
 	$sql="UPDATE t_mahasiswa SET  username='$username', password='$password', level='$level'  WHERE username='$username'";
	$res=mysqli_query($link,$sql);
   }else{
   	//hapus img
   	$query="SELECT * FROM user WHERE username='$username'";
 	$sql=mysqli_query($link,$query);
 	$data=mysqli_fetch_array($sql);
 	unlink("./img/img_akses/".$data['img']);
 	
 	//update img
	$img=$_FILES['img']['name'];
 	$tmp=$_FILES['img']['tmp_name'];
 	$uploadir='./img/img_akses/';
 	$password_file=$username.'.jpg';
 	$alamatfile=$uploadir.$password_file;
	move_uploaded_file($tmp, $alamatfile);
	$sql="UPDATE user SET  username='$username', password='$password', level='$level' WHERE username='$username'";
	$res=mysqli_query($link,$sql);
  }


 if($res)
 {
 	echo "<center><h1>Sukses mengubah data akses $username - $password </h1><br>";
	echo "untuk melihatnya silahkan klik<br> <a href='tampil_akses.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal mengubah data akses $username - $password</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br>Kembali<br> <a href='tampil_akses.php'>Link ini</a>
	</center>";
 }
}
?>
</body>
