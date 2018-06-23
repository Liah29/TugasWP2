<?php
	include('../cekadmin.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<center>
	<div id="judul">Tambah Hak Akses</div>
</center>
<hr>
<form enctype="multipart/form-data" method="post" action="proses_tambah_akses.php">
<table width="auto" border="0">
	<tr align="left">
    	<th><label>Username</label></th>
        <td><label>:</label></td>
        <td>
          <select class="cmbbox" name="username">
            <option value="0">--Pilih M.K--</option>
            <?php
            
              $sql1 = "SELECT * FROM t_mahasiswa ";
              $res = mysqli_query($link,$sql1);
              while($data=mysqli_fetch_array($res))
              { 
                echo "<option value=\"$data[nim]\"> $data[nim]  </option>";
              }
            ?>
          </select>
        </td>
     </tr>
    <tr align="left">
    	<th><label>Password</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="password"></td>
     </tr>
     <tr align="left">
    	<th><label>Level</label></th>
        <td><label>:</label></td>
        <td>
          <select class="cmbbox" name="level">
            <option value="0">--Pilih level--</option>
            <option value="Administrator">Administrator</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
          </select>
        </td>
     </tr>

     <tr align="left">
      <th><label>Img</label></th>
        <td><label>:</label></td>
        <td><input type="file" class="file" name="img"></td>
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