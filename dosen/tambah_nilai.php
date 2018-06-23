<?php
	
	include "../koneksi.php";
	$link=koneksi_db();
?>
<center>
	<div id="judul">Tambah Nilai</div>
</center>
<hr>
<form enctype="multipart/form-data" method="post" action="proses_tambah_nilai.php">
<table width="auto" border="0">
	<tr align="left">
    	<th width="117" scope="row"><label>NIM</label></th>
        <td width="14"><label>:</label></td>
        <td width="145">
          <select class="cmbbox" name="nim">
            <option value="0">--Pilih Mahasiswa--</option>
            <?php
              //manggil data mahasiswa
              $sql = "SELECT * FROM t_mahasiswa ";
              $res = mysqli_query($link,$sql);
              while($data=mysqli_fetch_array($res))
              { 
                echo "<option value=\"$data[nim]\"> $data[nim] - $data[nama] </option>";
              }
            ?>
          </select>
        </td>
    </tr>
    <tr align="left">
    	<th><label>Nama M.K</label></th>
        <td><label>:</label></td>
        <td>
          <select class="cmbbox" name="kd_mk">
            <option value="0">--Pilih M.K--</option>
            <?php
              $sql1 = "SELECT * FROM t_mata_kuliah ";
              $res = mysqli_query($link,$sql1);
              while($data=mysqli_fetch_array($res))
              { 
                echo "<option value=\"$data[kd_mk]\"> $data[kd_mk] - $data[nama_mk] </option>";
              }
            ?>
          </select>
        </td>
     </tr>
     <tr align="left">
      <th><label>Kehadiran</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" name="kehadiran"><td>
     </tr>
     <tr align="left">
      <th><label>Tugas 1</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" name="tugas1"></td>
     </tr>
     <tr align="left">
      <th><label>Tugas 2</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" name="tugas2"></td>
     </tr>
     <tr align="left">
      <th><label>Tugas 3</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" name="tugas3"></td>
     </tr>
     <tr align="left">
      <th><label>UTS</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" name="uts"></td>
     </tr>
     <tr align="left">
      <th><label>UAS</label></th>
        <td><label>:</label></td>
        <td><input size="3" type="text" class="textbox" name="uas"></td>
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