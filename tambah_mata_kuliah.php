<?php
	include('cekstudent.php');
	include "koneksi.php";
	$link=koneksi_db();
?>
<center>
	<div id="judul">Tambah Mata Kuliah</div>
</center>
<hr>
<form enctype="multipart/form-data" method="post" action="proses_tambah_mata_kuliah.php">
<table width="auto" border="0">
	<tr align="left">
    	<th><label>Nama Mahasiswa</label></th>
        <td><label>:</label></td>
        <td>
          <select class="cmbbox" name="nim">
            <option value="0">--Pilih M.K--</option>
            <?php
            $nim = $_SESSION['username'];
              $sql1 = "SELECT * FROM t_mahasiswa where nim=$nim ";
              $res = mysqli_query($link,$sql1);
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