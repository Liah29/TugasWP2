<center>
	<div id="judul">Tambah Mahasiswa</div>
</center>
<hr>
<form enctype="multipart/form-data" method="post" action="proses_tambah_mahasiswa.php">
<table width="auto" border="0">
	<tr align="left">
    	<th width="117" scope="row"><label>NIM</label></th>
        <td width="14"><label>:</label></td>
        <td width="145"><input type="text" class="textbox" name="nim"></td>
    </tr>
    <tr align="left">
    	<th><label>Nama</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="nama"></td>
     </tr>
    <tr align="left">
      <th><label>TTL</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="ttl"></td>
     </tr>
     <tr align="left">
      <th><label>TGL lahir</label></th>
        <td><label>:</label></td>
        <td><input type="date" class="textbox" name="tgl_lahir"></td>
     </tr>
     <tr align="left">
      <th><label>Alamat</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="alamat"></td>
     </tr>
     <tr align="left">
      <th><label>Foto</label></th>
        <td><label>:</label></td>
        <td><input type="file" class="file" name="foto"></td>
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