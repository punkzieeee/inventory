<!doctype html>
<html class="no-js" lang="en">

<?php 
	include 'cek.php';
	include '../dbconnect.php';
	?>

<html>
<head>
<title>*Data Stock Barang</title>
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>

</head>

<body>
		<div class="container">
			<h2>Stock Barang</h2>
			<h4>(Inventory)</h4>
				<div class="data-tables datatable-dark">
					<table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Nama Barang</th>
												<th>S/N</th>
												<th>Deskripsi</th>
                                                <th>Kondisi</th>
												<th>Lokasi</th>
												<th>Gambar</th>
												
												<!--<th>Opsi</th>-->
											</tr></thead><tbody>
											<?php 
											$brgs=mysqli_query($conn,"SELECT * from sstock_brg order by nama ASC");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){
												$idb = $p['idx'];
                                                $detail = mysqli_query($conn,"SELECT * from sgrouping WHERE idx = '$idb'");
												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $p['nama'] ?></td>
													<td><?php echo $p['serial'] ?></td>
													<td><ul style="list-style-type: circle;"><?php while ($list=mysqli_fetch_array($detail)) {
                                                        echo "<li>".$list['nama_brg']." - ".$list['serial_brg']."</li>";
                                                    } ?></ul></td>
                                                    <td><?php echo $p['kondisi'] ?></td>
													<td><?php echo $p['lokasi'] ?></td>
                                                    <td><?php 
                                                    if (!is_null($p['gambar'])) {
                                                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $p['gambar'] ).'" height="100" width="100" \/>';
                                                    }
                                                    ?></td>
												</tr>		
												<?php 
											}
											?>
										</tbody>
										</table>
								</div>
						</div>
	
<script>
$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
           'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

	

</body>

</html>