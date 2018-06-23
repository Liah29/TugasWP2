<?php
	include('../ceklecturer.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<center>
	<div id="judul">Ubah Nilai</div>
  <br>
  <font size="2"><?php echo $_GET['id'] ;?></font>
</center>
<hr>
<?php
  $sql="SELECT t_nilai.*,t_mahasiswa.nama,t_mata_kuliah.nama_mk FROM t_nilai INNER JOIN t_mahasiswa ON t_nilai.nim=t_mahasiswa.nim INNER JOIN t_mata_kuliah ON t_nilai.kd_mk=t_mata_kuliah.kd_mk WHERE t_nilai.nim='".$_GET['id']."'";
  $res=mysqli_query($link,$sql);
  $data=mysqli_fetch_array($res);
?>
<form enctype="multipart/form-data" method="post" action="proses_ubah_nilai.php">
<table width="auto" border="0">
	<tr align="left">
    	<th width="117" scope="row"><label>NIM</label></th>
        <input type="hidden" name="nim" value="<?php echo $data['nim'];?>">
        <td width="14"><label>:</label></td>
        <td width="145"><input size="30"type="text" class="textbox" value="<?php echo $data['nim'].' - '.$data['nama'];?>" readonly="readonly"></td>
    </tr>
    <tr align="left">
    	<th><label>Nama M.K</label></th>
        <td><label>:</label></td>
        <td><input size="30" type="text" class="textbox" value="<?php echo $data['kd_mk'].' - '.$data['nama_mk'];?>" readonly="readonly"></td>
     </tr>
     <tr align="left">
      <th><label>Kehadiran</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" value="<?php echo $data['kehadiran'];?>" name="kehadiran"><font color="red"><i> *bukan dalam persen</i></font></td>
     </tr>
     <tr align="left">
      <th><label>Tugas 1</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" value="<?php echo $data['tugas_1'];?>" name="tugas1"></td>
     </tr>
     <tr align="left">
      <th><label>Tugas 2</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" value="<?php echo $data['tugas_2'];?>" name="tugas2"></td>
     </tr>
     <tr align="left">
      <th><label>Tugas 3</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" value="<?php echo $data['tugas_3'];?>" name="tugas3"></td>
     </tr>
     <tr align="left">
      <th><label>UTS</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" value="<?php echo $data['uts'];?>" name="uts"></td>
     </tr>
     <tr align="left">
      <th><label>UAS</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" value="<?php echo $data['uas'];?>" name="uas"></td>
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