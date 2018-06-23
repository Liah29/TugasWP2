<?php
include('cekadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin DashBoard</title>
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
                <p style="margin: -25px 40px 10px;">Welcome <i><?php echo $_SESSION['username']; ?></i></p>
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
        
<div class="container" style="margin-top:40px">
  <h2>Kelola Hak Akses</h2>
  <a href = "admin/tampil_akses.php" class="list-group-item">
   Daftar Hak Akses
</a>
           
<h2>Tambah Hak Akses</h2>
  <a href = "admin/tambah_akses.php" class="list-group-item">
   Tambah Hak Akses
</a>
</body>
</html>