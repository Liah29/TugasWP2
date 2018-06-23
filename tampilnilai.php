<?php
include "koneksi.php";
$link=koneksi_db();
include "cekstudent.php";
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php
    $nim = $_SESSION['username'];
	$sql="SELECT t_nilai.*,t_mahasiswa.nama,t_mata_kuliah.nama_mk FROM t_nilai 
    INNER JOIN t_mahasiswa ON t_nilai.nim=t_mahasiswa.nim 
    INNER JOIN t_mata_kuliah ON t_nilai.kd_mk=t_mata_kuliah.kd_mk
    where t_nilai.nim = $nim";
	$res=mysqli_query($link,$sql);
?>
<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4 align="center">Daftar Nilai Mahasiswa</h4>
        <?php
        $nim = $_SESSION['username'];
        echo"<h4 align ='center'>Nilai untuk NIM : $nim</h4>";
        ?><br>
        <br>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
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
			<td><a href="?menu=nilai&action=ubah&id=<?php echo "$data[nim]";?>"><img src="img/ubah.gif"></a></td>
			<td><a href="proses_hapus_nilai.php?id=<?php echo "$data[nim]";?>"><img src="img/hapus.gif"></a></td>
			
		</tr>
		<?php
			}
		?>
   
       
    </tbody>
     
</table>


                
            </div>
            
        </div>
        
	</div><br>
    <p><a href ="index.php">Menu Utama</a> || <a href ="tampilmatkul.php">Lihat Mata Kuliah</a></p>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    