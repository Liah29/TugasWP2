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
<form method="post" action="cari_mahasiswa.php">
Cari Mahasiswa Berdasarkan Nama 
<input type="text" class="textbox" name="txtcari"/>
<input type="submit" value="Cari" class="cari" /> 
</form>
</div>
<hr />

<div id="isi_content">
<?php
	$sql="select * from t_mahasiswa";
	$res=mysqli_query($link,$sql);
?>

	<center>
	<table id="table-tampil">
	<thead>
		<tr>
			<th>No</th>
			<th>NIM </th>
			<th>Nama</th> 
			<th>TTL</th> 
			<th>Tgl Lahir</th> 
			<th>Alamat</th> 
			<th>Foto</th> 
			<th colspan="2">Aksi</th>
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
			<td><?php echo "$data[ttl]";?></td>
			<td><?php echo "$data[tgl_lahir]";?></td>
			<td><?php echo "$data[alamat]";?></td>
			<td><img src="img/foto_mhs/<?php echo "$data[foto]";?>" witdh="100px" height="100px"></td>
			<td><a href="ubah_mahasiswa.php?id=<?php echo "$data[nim]";?>"><img src="../img/ubah.gif"></a></td>
			<td><a href="proses_hapus_mahasiswa.php?id=<?php echo "$data[nim]";?>" onclick="return confirm('Anda Yakin Akan Menghapus Data Mahasiswa ini ??')" > <img src="../img/hapus.gif" ></a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
	</table>
	<br>
	<p><a href ="../hallecturer.php">Menu Utama</a> || <a href ="tampil_nilai.php">Lihat Nilai</a></p>
	</div>