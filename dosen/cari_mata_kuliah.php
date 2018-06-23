<?php
	include('../ceklecturer.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="judul">Tampil Data Mata Kuliah <?php echo $_POST['txtcari'];?></div>
<div id="cari">
<form method="post" action="cari_mata_kuliah.php">
Cari M.K Berdasarkan Nama M.K
<input type="text" class="textbox" name="txtcari"/>
<input type="submit" value="Cari" class="cari"> 
</form>
</div>
<hr />

<div id="isi_content">
<?php
	$sql="select * from t_mata_kuliah where nama_mk LIKE '%".$_POST['txtcari']."%'";
	$res=mysqli_query($link,$sql);
	$banyak_data = mysqli_num_rows($res);
?>
	<label> Ditemukan = <?php echo $banyak_data ;?></label>
	<br/><br/>
	<center>
	<table id="table-tampil">
	<thead>
		<tr>
			<th>No</th>
			<th> Kode Mata Kuliah </th>
			<th>Nma Mata Kuliah</th> 
		</tr>
	</thead>
	<tbody>
	<?php
	$no=0;
	while ($data=mysqli_fetch_array($res))
	{
		$no++;
	?>
		<tr>
			<td><?php echo "$no";?></td>
			<td><?php echo "$data[kd_mk]";?></td>
			<td><?php echo "$data[nama_mk]";?></td>
			<td><a href="?menu=mata_kuliah&action=ubah&id=<?php echo "$data[kd_mk]";?>"><img src="img/ubah.gif"></a></td>
			<td><a href="proses_hapus_mata_kuliah.php?id=$data[kd_mk]"><img src="img/hapus.gif"></a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
	</table>
	<p><a href ="../hallecturer.php">Menu Utama</a> || <a href ="tampil_nilai.php">Lihat nilai</a></p>
	</div>