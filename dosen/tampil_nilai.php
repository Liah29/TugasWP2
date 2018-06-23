<?php
	include('../ceklecturer.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="judul"></div>
<div id="cari">
<form method="post" action="cari_nilai.php">
Cari Nilai Berdasarkan Nama Mahasiswa 
<input type="text" class="textbox" name="txtcari"/>
<input type="submit" value="Cari" class="cari"> 
</form>
</div>
<hr />

<div id="isi_content">
<?php
	$sql="SELECT t_nilai.*,t_mahasiswa.nama,t_mata_kuliah.nama_mk FROM t_nilai INNER JOIN t_mahasiswa ON t_nilai.nim=t_mahasiswa.nim INNER JOIN t_mata_kuliah ON t_nilai.kd_mk=t_mata_kuliah.kd_mk";
	$res=mysqli_query($link,$sql);
?>

	<center>
	<table id="table-tampil">
	<thead>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kode M.K</th> 
			<th>Nama M.K</th> 
			<th>Kehadiran</th> 
			<th>Tugas 1</th> 
			<th>Tugas 2</th> 
			<th>Tugas 3</th> 
			<th>UTS</th> 
			<th>UAS</th> 
			<th>Nilai Kehadiran</th> 
			<th>Nilai Tugas</th> 
			<th>Nilai UTS</th> 
			<th>Nilai UAS</th> 
			<th>Nilai Akhir</th> 
			<th>Indeks</th> 
			<th>Keterangan</th> 
			<th colspan="2"> Aksi </th>
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
			<td><?php echo "$data[nim]";?></td>
			<td><?php echo "$data[nama]";?></td>
			<td><?php echo "$data[kd_mk]";?></td>
			<td><?php echo "$data[nama_mk]";?></td>
			<td><?php echo round("$data[kehadiran]",2);?></td>
			<td><?php echo round("$data[tugas_1]",2);?></td>
			<td><?php echo round("$data[tugas_2]",2);?></td>
			<td><?php echo round("$data[tugas_3]",2);?></td>
			<td><?php echo round("$data[uts]",2);?></td>
			<td><?php echo round("$data[uas]",2);?></td>
			<td><?php echo round("$data[nilai_kehadiran]",2);?></td>
			<td><?php echo "$data[nilai_tugas]";?></td>
			<td><?php echo "$data[nilai_uts]";?></td>
			<td><?php echo "$data[nilai_uas]";?></td>
			<td><?php echo round("$data[nilai_akhir]",2);?></td>
			<td><?php echo "$data[indeks]";?></td>
			<td><?php echo "$data[ket]";?></td>
			<td><a href="ubah_nilai.php?id=<?php echo "$data[nim]";?>"><img src="../img/ubah.gif"></a></td>
			<td><a href="proses_hapus_nilai.php?id=<?php echo "$data[nim]";?>"><img src="../img/hapus.gif"></a></td>
			
		</tr>
		<?php
			}
		?>
	</tbody>
	</table>
	<br>
	<p><a href ="../hallecturer.php">Menu Utama</a> || <a href ="tampil_mata_kuliah.php">Lihat Matakuliah</a></p>
	</div>