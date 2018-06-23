<?php
	include('../cekadmin.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<center>
    <div id="judul">Ubah Data</div>
  <br>
  <font size="2"><?php echo $_GET['id'] ;?></font>
</center>
<hr>
<?php
  $sql="SELECT * FROM user WHERE username='".$_GET['id']."'";
  $res=mysqli_query($link,$sql);
  $data=mysqli_fetch_array($res);
?>
<form enctype="multipart/form-data" method="post" action="proses_ubah_akses.php">
<table width="auto" border="0">
	<tr align="left">
    	<th width="117" scope="row"><label>User Name</label></th>
        <td width="14"><label>:</label></td>
        <td width="145"><input type="text" class="textbox" name="username" value="<?php echo $data['username'];?>"readonly="readonly"></td>
    </tr>
    <tr align="left">
    	<th><label>Password</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="password" value="<?php echo $data['password'];?>"></td>
     </tr>
    <tr align="left">
      <th><label>level</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="level" value="<?php echo $data['level'];?>"></td>
     </tr>
    
      <th><label>Foto</label></th>
        <td><label>:</label></td>
        <td><img src="img/foto_akses/<?php echo "$data[img]";?>" witdh="50px" height="50px">
        <input type="file" class="file" name="foto" value="<?php echo $data['img'];?>"></td>
     </tr>
 <th colspan="3">
 </th>
  <tr>
  	<th colspan="3">
    	<input type="submit" value="Submit" class="tombol">
        <input type="reset" value="Reset" class="tombol">
    </th>
  </tr>
</table>
</form>