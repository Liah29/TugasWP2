<?php
	include('../ceklecturer.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<center>
    <div id="judul">Ubah Mahasiswa</div>
  <br>
  <font size="2"><?php echo $_GET['id'] ;?></font>
</center>
<hr>
<?php
  $sql="SELECT * FROM t_mahasiswa WHERE nim='".$_GET['id']."'";
  $res=mysqli_query($link,$sql);
  $data=mysqli_fetch_array($res);
?>
<form enctype="multipart/form-data" method="post" action="proses_ubah_mahasiswa.php">
<table width="auto" border="0">
	<tr align="left">
    	<th width="117" scope="row"><label>NIM</label></th>
        <td width="14"><label>:</label></td>
        <td width="145"><input type="text" class="textbox" name="nim" value="<?php echo $data['nim'];?>"readonly="readonly"></td>
    </tr>
    <tr align="left">
    	<th><label>Nama</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="nama" value="<?php echo $data['nama'];?>"></td>
     </tr>
    <tr align="left">
      <th><label>TTL</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="ttl" value="<?php echo $data['ttl'];?>"></td>
     </tr>
     <tr align="left">
      <th><label>TGL lahir</label></th>
        <td><label>:</label></td>
        <td><input type="date" class="textbox" name="tgl_lahir" value="<?php echo $data['tgl_lahir'];?>"></td>
     </tr>
     <tr align="left">
      <th><label>Alamat</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="alamat" value="<?php echo $data['alamat'];?>"></td>
     </tr>
     <tr align="left">
      <th><label>Foto</label></th>
        <td><label>:</label></td>
        <td><img src="img/foto_mhs/<?php echo "$data[foto]";?>" witdh="50px" height="50px">
        <input type="file" class="file" name="foto" value="<?php echo $data['foto'];?>"></td>
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