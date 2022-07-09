<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek.php';

    if(isset($_POST['update'])){
        $id = $_POST['id']; //iddata
        $idx = $_POST['idx']; //idbarang
        $penerima = $_POST['penerima'];
        $keterangan = $_POST['keterangan'];
        $pinjam = $_POST['pinjam'];
        $kembali = $_POST['kembali'];
        $nik = $_POST['nik'];
        $nohp = $_POST['nohp'];

        $updatedata = mysqli_query($conn,"update sbrg_keluar set tgl_klr='$pinjam',kembali='$kembali',penerima='$penerima',nik='$nik',nohp='$nohp',keterangan='$keterangan' where id='$id'");
            
        //cek apakah berhasil
        if ($updatedata){
            echo " <div class='alert alert-success'>
                <strong>Success!</strong> Redirecting you back in 1 seconds.
            </div>
            <meta http-equiv='refresh' content='1; url= keluar.php'/>  ";
        } else { echo "<div class='alert alert-warning'>
            <strong>Failed!</strong> Redirecting you back in 3 seconds.
        </div>
        <meta http-equiv='refresh' content='3; url= keluar.php'/> ";
        }    
    };

    if(isset($_POST['hapus'])){
        $id = $_POST['id'];
        $del = mysqli_query($conn,"delete from sbrg_keluar where id='$id'");
        
        //cek apakah berhasil
        if ($del){
            echo " <div class='alert alert-success'>
                <strong>Success!</strong> Redirecting you back in 1 seconds.
              </div>
            <meta http-equiv='refresh' content='1; url= keluar.php'/>  ";
        } else { echo "<div class='alert alert-warning'>
            <strong>Failed!</strong> Redirecting you back in 1 seconds.
          </div>
         <meta http-equiv='refresh' content='1; url= keluar.php'/> ";
        }
    };
	?>

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><img src="../logo.png" alt="logo" width="100%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="index.php"><i class="ti-pencil-alt"></i><span>Notes</span></a></li>
                            <li>
                                <a href="stock.php"><i class="ti-archive"></i><span>Inventory</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-exchange-vertical"></i><span>Transaksi Data
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="masuk.php">Barang Masuk / Kembali</a></li>
                                    <li class="active"><a href="keluar.php">Barang Keluar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-receipt"></i><span>Kondisi Barang
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="bagus.php">Barang Bagus / Utuh</a></li>
                                    <li><a href="rusak.php">Barang Rusak / Hilang</a></li>
                                </ul>  
                            </li>
                            <li>
                                <a href="history.php"><i class="ti-time"></i><span>History</span></a>
                            </li>
                            <li>
                                <a href="logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <h2>Hi, <?=$_SESSION['user_login'];?>!</h2>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Barang Keluar</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right" style="color:black; padding:0px;">
                            <img src="inven.jpg" width="185px" class="user-name dropdown-toggle" data-toggle="dropdown"\>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Barang Keluar</h2>
									<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah</button>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
										 <table id="dataTable3" class="table table-hover"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>Tanggal Peminjaman</th>
												<th>Tanggal Pengembalian</th>
												<th>Set Barang</th>
                                                <th>Barang Yang Dipinjam</th>
												<th>Peminjam</th>
												<th>NIK</th>
												<th>No.HP</th>
												<th>Keterangan</th>
                                                <th>Status</th>
												<th>Opsi</th>
											</tr></thead><tbody>
											<?php 
											$brg=mysqli_query($conn,"SELECT * FROM sbrg_keluar sb, sstock_brg st where st.idx=sb.idx ORDER BY sb.tgl_klr DESC");
											$no=1;
											while($b=mysqli_fetch_array($brg)){
                                                $idb = $b['idx'];
                                                $id = $b['id'];
                                                $idg = $b['idg'];

												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php $tanggals=$b['tgl_klr']; echo date("d-M-Y", strtotime($tanggals)) ?></td>
													<td><?php $tanggals=$b['kembali']; echo date("d-M-Y", strtotime($tanggals)) ?></td>
                                                    <td><?php echo $b['nama'] ?> (<?php echo $b['serial'] ?>)</td>
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
                                                            echo "<li>".$list['nama_brg']." (".$list['serial_brg'].")</li>";
                                                        } ?></ul></td>
                                                    <?php } ?>
                                                    <td><?php echo $b['penerima'] ?></td>
                                                    <td><?php echo $b['nik'] ?></td>
                                                    <td><?php echo $b['nohp'] ?></td>
													<td><?php echo $b['keterangan'] ?></td>
                                                    <td><?php echo $b['status'] ?></td>
                                                    <td><button data-toggle="modal" data-target="#edit<?=$id;?>" class="btn btn-warning">Edit</button> <button data-toggle="modal" data-target="#del<?=$id;?>" class="btn btn-danger">Delete</button></td>
												</tr>		

                                                <!-- The Modal -->
                                                <div class="modal fade" id="edit<?=$id;?>">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <form method="post">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <div class="modal-body">

                                                            <label for="tanggal">Tanggal Peminjaman</label>
                                                            <input type="date" id="pinjam" name="pinjam" class="form-control" value="<?php echo $b['tgl_klr'] ?>">

                                                            <label for="tanggal">Tanggal Pengembalian</label>
                                                            <input type="date" id="kembali" name="kembali" class="form-control" value="<?php echo $b['kembali'] ?>">
                                                            
                                                            <label for="nama">Barang</label>
                                                            <?php 
                                                            if ($idg != 0) { 
                                                                $select = mysqli_fetch_array(mysqli_query($conn,"SELECT * from sgrouping WHERE idx = '$idb' AND idg = '$idg'"));
                                                                ?>
                                                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $b['nama'] ?> (<?php echo $b['serial'] ?>): <?php echo $select['nama_brg'] ?> - <?php echo $select['serial_brg'] ?>" disabled>
                                                            <?php
                                                            } else { 
                                                                ?>
                                                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $b['nama'] ?> (<?php echo $b['serial'] ?>)" disabled>
                                                            <?php } ?>

                                                            <label for="penerima">Peminjam</label>
                                                            <input type="text" id="penerima" name="penerima" class="form-control" value="<?php echo $b['penerima'] ?>">

                                                            <label for="nik">NIK</label>
                                                            <input type="text" id="nik" name="nik" class="form-control" value="<?php echo $b['nik'] ?>">

                                                            <label for="nohp">No.HP</label>
                                                            <input type="text" id="nohp" name="nohp" class="form-control" value="<?php echo $b['nohp'] ?>">

                                                            <label for="keterangan">Keterangan</label>
                                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="<?php echo $b['keterangan'] ?>">
                                                            <input type="hidden" name="id" value="<?=$id;?>">
                                                            <input type="hidden" name="idx" value="<?=$idb;?>">

                                                            
                                                            </div>
                                                            
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" name="update">Save</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>



                                                    <!-- The Modal -->
                                                    <div class="modal fade" id="del<?=$id;?>">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <form method="post">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Barang <?php echo $b['nama']?></h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus barang ini dari daftar stock?
                                                            <input type="hidden" name="id" value="<?=$id;?>">
                                                            <input type="hidden" name="idx" value="<?=$idb;?>">
                                                            </div>
                                                            
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-success" name="hapus">Hapus</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
												<?php 
											}
											?>
										</tbody>
										</table>
                                    </div></div>
									<a href="exportbrgklr.php" target="_blank" class="btn btn-info">Export Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
            <!-- footer area start-->
            <footer>
                <div class="footer-area">
                    <p>PT. Dirgantara Indonesia</p>
                </div>
            </footer>
            <!-- footer area end-->
        </div>
        <!-- main content area end -->
        
    </div>
    <!-- page container area end -->
	
	<!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Input Barang Keluar</h4>
						</div>
						<div class="modal-body">
                            <form method="get">
                                <input type="radio" id="set" name="amount" value="Set" onChange="this.form.submit();">
                                <label for="set">Set</label>
                                <input type="radio" id="satuan" name="amount" value="Satuan" onChange="this.form.submit();">
                                <label for="satuan">Satuan</label>
                            </form>
							<form action="barang_keluar_act.php" method="post">
								<div class="form-group">
									<label>Tanggal Peminjaman</label>
									<input name="pinjam" type="date" class="form-control" required>
								</div>
                                <div class="form-group">
                                    <label>Tanggal Pengembalian</label>
                                    <input name="kembali" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    
                                </div>
								<div class="form-group">
									<label>Nama Barang</label>
									<select name="barang" class="custom-select form-control" required>
									<option selected>Pilih barang</option>
									<?php
                                    if (isset($_GET['amount'])) {
                                        $amount = $_GET['amount'];
                                        if ($amount == "Set") {
                                            $brg=mysqli_query($conn,"SELECT * FROM sstock_brg WHERE kondisi='Bagus' or kondisi='Utuh' or kondisi='Rusak' ORDER BY nama");
                                            while($d=mysqli_fetch_array($brg)) { ?>
                                                <option value="<?php echo $d['idx'] ?>/0"><?php echo $d['nama'] ?> (<?php echo $d['serial'] ?>)</option>
                                        <?php
                                            }
                                        } elseif ($amount == "Satuan") {
                                            $det=mysqli_query($conn,"select * from sstock_brg st, sgrouping sg where st.idx=sg.idx and (st.kondisi='Bagus' or st.kondisi='Utuh' or st.kondisi='Rusak') order by st.nama ASC") or die(mysqli_error());
                                            while($d=mysqli_fetch_array($det)){
                                            ?>
                                                <option value="<?php echo $d['idx'] ?>/<?php echo $d['idg'] ?>"><?php echo $d['nama'] ?> (<?php echo $d['serial'] ?>): <?php echo $d['nama_brg'] ?> - <?php echo $d['serial_brg'] ?></option>
                                        <?php
                                            }
                                        }
                                    } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Peminjam</label>
									<input name="penerima" type="text" class="form-control" placeholder="Nama peminjam" required>
								</div>
								<div class="form-group">
									<label>NIK</label>
									<input name="nik" type="text" class="form-control" placeholder="Masukan NIK" required>
								</div>
								<div class="form-group">
									<label>No.HP</label>
									<input name="nohp" type="text" class="form-control" placeholder="Masukan No.HP" required>
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<input name="ket" type="text" class="form-control" placeholder="Keterangan">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
	
	<script>
		$(document).ready(function() {
		$('input').on('keydown', function(event) {
			if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
			   var $t = $(this);
			   event.preventDefault();
			   var char = String.fromCharCode(event.keyCode);
			   $t.val(char + $t.val().slice(this.selectionEnd));
			   this.setSelectionRange(1,1);
			}
		});
	
	
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script>
	
    <!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
	<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
	<script>
		$(document).ready(function() {
		$('input').on('keydown', function(event) {
			if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
			   var $t = $(this);
			   event.preventDefault();
			   var char = String.fromCharCode(event.keyCode);
			   $t.val(char + $t.val().slice(this.selectionEnd));
			   this.setSelectionRange(1,1);
			}
		});
	});
	</script>
</body>
</html>