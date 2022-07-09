<?php 
include '../dbconnect.php';
include 'cek.php';

$nama=$_POST['nama'];
$serial=$_POST['serial'];
$kondisi = $_POST['kondisi'];
$lokasi=$_POST['lokasi'];
$gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
$action="Input Stock";
$admin=$_SESSION['user_login'];
	  
$query = mysqli_query($conn,"insert into sstock_brg values('','$nama','$serial','$kondisi','$lokasi','$gambar','$action',CURDATE(),'$admin')");

if ($query){
  $number = count($_POST["barang"]);
  $idx = mysqli_insert_id($conn);
  if($number > 0) {  
    for($i=0; $i<$number; $i++) {  
      if(trim($_POST["barang"][$i] != '')) {  
           $sql = "INSERT INTO sgrouping VALUES('','$idx','".mysqli_real_escape_string($conn, $_POST["barang"][$i])."','".mysqli_real_escape_string($conn, $_POST["kode"][$i])."')";  
           mysqli_query($conn, $sql);  
      }  
    }  
  }
  echo " <div class='alert alert-success'>
      <strong>Success!</strong> Redirecting you back in 1 seconds.
    </div>
  <meta http-equiv='refresh' content='1; url= stock.php'/>  ";
} else { echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= stock.php'/> ";
}
 
?>
 
  <html>
<head>
  <title>Tambah Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>