<center>
	<div id="judul">Tambah Mata Kuliah</div>
</center>
<hr>
<form enctype="multipart/form-data" method="post" action="proses_tambah_mata_kuliah.php">
<table width="auto" border="0">
	<tr align="left">
    	<th width="117" scope="row"><label>Kode M.K</label></th>
        <td width="14"><label>:</label></td>
        <td width="145"><input type="text" class="textbox" name="kd_mk"></td>
    </tr>
    <tr align="left">
    	<th><label>Nama M.K</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="nama_mk"></td>
     </tr>
     <tr align="left">
    	<th><label>Tahun</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="Tahun"></td>
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