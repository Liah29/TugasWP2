<body bgcolor="#65a9d7">
<?php
include "../koneksi.php";

if(!empty($_POST['username']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $level=$_POST['level'];
 
 $img=$_FILES['img']['name'];
 $tmp=$_FILES['img']['tmp_name'];
 $uploadir='./img/foto_akses/';
 $password_file=$username.'.jpg';
 $alamatfile=$uploadir.$password_file;

 if(move_uploaded_file($tmp, $alamatfile)){
 $link=koneksi_db();
 $sql="insert into user (username,password,level,img) values ('$username','$password','$level','$img');";
 $res=mysqli_query($link,$sql);
 }
 if($res)
 {
 	echo "<center><h1>Sukses menambah data akses $username - $password </h1><br>";
	echo "untuk melihatnya silahkan klik<br> <a href='tampil_akses.php'>Link ini</a></center>";
 }
 else
 {
	echo "<center><h1>Gagal menambah data akses $username - $password</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br>Kembali<br> <a href='tampil_akses.php'>Link ini</a>
	</center>";
 }
}
?>
</body>
