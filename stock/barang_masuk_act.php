<?php 
include '../dbconnect.php';
$barang=$_POST['barang']; // ini ID barang nya
$explode=explode("/", $barang);
$idx=$explode[0]; //id dari stock
$id=$explode[1]; //id dari grouping
$idk=$explode[2];
$tanggal=$_POST['tanggal'];
$kondisi = $_POST['kondisi'];
$admin = $_POST['admin'];
$ket=$_POST['ket'];
$action="Stock Masuk";

$query1 = mysqli_query($conn,"update sstock_brg set kondisi='$kondisi' where idx='$barang'");
$query2 = mysqli_query($conn,"insert into sbrg_masuk (idx,idg,tgl_msk,kondisi,admin_msk,keterangan,action) values('$idx','$id','$tanggal','$kondisi','$admin','$ket','$action')");
$query3 = mysqli_query($conn,"update sbrg_keluar set status='Kembali' where id='$idk'");

if($query1 && $query2 && $query3){
    echo " <div class='alert alert-success'>
    <strong>Success!</strong> Redirecting you back in 1 seconds.
  </div>
<meta http-equiv='refresh' content='1; url= masuk.php'/>  ";
} else {
    echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= masuk.php'/> ";
}


?>

<html>
<head>
  <title>Barang Masuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>