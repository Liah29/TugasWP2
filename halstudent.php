<?php
include('cekstudent.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Mahasiswa</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#">
                <?php
                $nama = $_SESSION['username'];
                echo "<img style='height: 30px; margin-top: -5px;' src='assets/img/icon/$nama.png' class='img-circle'>";
                ?> 
                <div class="pull-left">
                <p style="margin: -25px 40px 10px;">NIM Anda <?php echo $_SESSION['username']; ?></p>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li></i></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            
        </div>
    </div>
</nav>
<div class="container" style="margin-top:60px"> 

<h2>Menu</h2>
              
              <div class="table-responsive">
                <table class="table table-hover">
                  
                  <tbody>
                    <tr>
                      <td><a href ="tampilmatkul.php"><i class="pull-right glyphicon glyphicon-eye-open"></i></a>
                      <a href ="tambah_mata_kuliah.php"><i class="pull-right fa fa-plus-circle">||</i></a>
                      <a href ="#.php">
                      Matakuliah</a></td>
                    </tr>
                    <tr>
                      <td><a href ="tampilnilai.php"><i class="pull-right glyphicon glyphicon-eye-open"></i></a>
              
                       <a href ="#.php">
                      Lihat Nilai</a></td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
</div>            
</div>  
</body>
</html>