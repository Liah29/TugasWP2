<?php
	include('../cekadmin.php');
	include "../koneksi.php";
	$link=koneksi_db();
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="judul"></div>
<div id="cari">
<form method="post" action="cari_mata_kuliah.php">
Cari akses
<input type="text" class="textbox" name="txtcari"/>
<input type="submit" value="Cari" class="cari"> 
</form>
</div>
<hr />

<div id="isi_content">
<?php
	$sql="select * from user";
	$res=mysqli_query($link,$sql);
?>

	<center>
	<table id="table-tampil">
	<thead>
		<tr>
			<th>No</th>
			<th>User Name </th>
			<th>Password</th> 
			<th>level </th>
			<th>Photo </th>
			<th>Password</th> 
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
			<td><?php echo "$data[username]";?></td>
			<td><?php echo "$data[password]";?></td>
			<td><?php echo "$data[level]";?></td>
			<td><img src="img/foto_akses/<?php echo "$data[img]";?>" witdh="100px" height="100px"></td>
			<td><a href="ubah_akses.php?id=<?php echo "$data[username]";?>"><img src="../img/ubah.gif"></a></td>
			<td><a href="proses_hapus_akses.php?id=<?php echo "$data[kd_mk]";?>"><img src="../img/hapus.gif"></a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
	</table>
	<p><a href ="../haladmin.php">Menu Utama</a> || <a href ="tampil_akses.php">Lihat nilai</a></p>
	</div>