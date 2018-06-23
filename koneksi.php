<?php
function koneksi_db()
{
	$host ="127.0.0.1";
	$username ="root";
	$password ="";
	$database ="multilogin";

	$link=mysqli_connect($host,$username,$password,$database);

	//$link=mysqli_connect("localhost","root","","atol_10114339");

	if(!$link)
	{
		die("Tidak Bisa  Melakukan Proses Ke Database".mysqli_error());
	}

	return $link;
}
?>