<!doctype html>
<html class="no-js" lang="en">

<?php 
	include 'cek.php';
	include '../dbconnect.php';
	?>

<html>
<head>
<title>*Data Barang Masuk</title>
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
			<h2>Transaksi Barang : Masuk / Kembali</h2>
			<h4>(Inventory)</h4>
				<div class="data-tables datatable-dark">
					<table class="display" id="dataTable3" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Set Barang</th>
												<th>Barang Yang Masuk</th>
                                                <th>Kondisi</th>
                                                <th>Penerima</th>
												<th>Keterangan</th>
											</tr></thead><tbody>
											<?php 
											$brg=mysqli_query($conn,"SELECT * from sbrg_masuk sb, sstock_brg st where sb.idx=st.idx ORDER BY sb.tgl_msk DESC");
											$no=1;
											while($b=mysqli_fetch_array($brg)){
												$idb = $b['idx'];
                                                $id = $b['id'];
                                                $idg = $b['idg'];
												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php $tanggals=$b['tgl_msk']; echo date("d-M-Y", strtotime($tanggals)) ?></td>
													<<td><?php echo $b['nama'] ?> (<?php echo $b['serial'] ?>)</td>
                                                    <?php 
                                                    if ($idg != 0) { 
                                                        $select = mysqli_fetch_array(mysqli_query($conn,"SELECT * from sgrouping WHERE idx = '$idb' AND idg = '$idg'"));
                                                        ?>
                                                        <td><?php echo $select['nama_brg'] ?> (<?php echo $select['serial_brg'] ?>)</td>
                                                    <?php
                                                    } else { 
                                                        $detail = mysqli_query($conn,"SELECT * from sgrouping WHERE idx = '$idb'");
                                                        ?>
                                                        <td><ul style="list-style-type: circle;"><?php while ($list=mysqli_fetch_array($detail)) {
                                                            echo "<li>".$list['nama_brg']." - ".$list['serial_brg']."</li>";
                                                        } ?></ul></td>
                                                    <?php } ?>
                                                    <td><?php echo $b['kondisi'] ?></td>
                                                    <td><?php echo $b['admin_msk']?></td>
													<td><?php echo $b['keterangan'] ?></td>
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