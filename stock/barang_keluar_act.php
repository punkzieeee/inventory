<?php 
include '../dbconnect.php';
include 'cek.php';

$barang=$_POST['barang']; //id barang
$explode=explode("/", $barang);
$idx=$explode[0]; //id dari stock
$id=$explode[1]; //id dari grouping
$pinjam = $_POST['pinjam'];
$kembali = $_POST['kembali'];
$nik = $_POST['nik'];
$nohp = $_POST['nohp'];
$penerima=$_POST['penerima'];
$ket=$_POST['ket'];
$action="Stock Keluar";
$status="Keluar";
$admin=$_SESSION['user_login'];

$query = mysqli_query($conn,"insert into sbrg_keluar (idx,idg,tgl_klr,kembali,penerima,nik,nohp,keterangan,action,status,admin_klr) values('$idx','$id','$pinjam','$kembali','$penerima','$nik','$nohp','$ket','$action','$status','$admin')");

if($query){
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Redirecting you back in 1 seconds.
  </div>
<meta http-equiv='refresh' content='1; url= keluar.php'/>  ";

} else {
    echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= keluar.php'/> ";
}

?>

<html>
<head>
  <title>Barang Keluar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>