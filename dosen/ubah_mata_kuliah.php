<?php
	include('../ceklecturer.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<center>
	<div id="judul">Ubah Mata Kuliah</div>
  <br>
  <font size="2"><?php echo $_GET['id'] ;?></font>
</center>
<hr>
<?php
  $sql="SELECT * FROM t_mata_kuliah WHERE kd_mk='".$_GET['id']."'";
  $res=mysqli_query($link,$sql);
  $data=mysqli_fetch_array($res);
?>
<form enctype="multipart/form-data" method="post" action="proses_ubah_mata_kuliah.php">
<table width="auto" border="0">
	<tr align="left">
    	<th width="117" scope="row"><label>Kode M.K</label></th>
        <td width="14"><label>:</label></td>
        <td width="145"><input type="text" class="textbox" name="kd_mk" value="<?php echo $data['kd_mk'];?>" readonly="readonly"></td>
    </tr>
    <tr align="left">
    	<th><label>Nama M.K</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="nama_mk" value="<?php echo $data['nama_mk'];?>"></td>
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