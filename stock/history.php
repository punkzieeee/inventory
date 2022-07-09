<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek.php';
	?>

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
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
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
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
    <!-- preloader area start -->
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
							<li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-exchange-vertical"></i><span>Transaksi Data
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="masuk.php">Barang Masuk / Kembali</a></li>
                                    <li><a href="keluar.php">Barang Keluar</a></li>
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
                            <li class="active">
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
                                <li><span>History</span></li>
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
									<h2>History</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
										 <table id="dataTable3" class="table table-hover"><thead class="thead-dark">  
										<tr>
										 <th>No.</th>
										 <th>History</th>
                                         <th>Admin</th>
										 <th>Tanggal</th>
										 <th>Set Barang</th>
                                         <th>Deskripsi</th>
										</tr></thead><tbody>
										<?php
										$hasil=mysqli_query ($conn,"SELECT * FROM sbrg_masuk ORDER BY tgl_msk DESC");
                                        $i = 1;
                                        while ($b = mysqli_fetch_array($hasil)){ 
                                            $idb = $b['idx'];
                                            $id = $b['id'];
                                            $idg = $b['idg'];
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $b['action']; ?></td>
                                                <td><?php echo $b['admin_msk']; ?></td>
                                                <td><?php $tanggals=$b['tgl_msk']; echo date("d-M-Y", strtotime($tanggals)) ?></td>
                                                <?php 
                                                if ($idg == 0) { 
                                                    $brg=mysqli_query($conn, "SELECT * FROM sstock_brg WHERE idx=$idb");
                                                    $detail = mysqli_query($conn,"SELECT * from sgrouping WHERE idx = '$idb'"); 
                                                    while ($b=mysqli_fetch_array($brg)) { ?>
                                                    <td><?php echo $b['nama']." (".$b['serial'].")" ; ?></td>
                                                <?php } ?>
                                                    <td><ul style="list-style-type: circle;"><?php while ($list=mysqli_fetch_array($detail)) {
                                                        echo "<li>".$list['nama_brg']." (".$list['serial_brg'].")</li>";
                                                    } ?></ul></td>
                                                <?php                                                
                                                } else {
                                                    $brg=mysqli_query($conn, "SELECT * FROM sstock_brg st, sgrouping sg WHERE st.idx=$idb AND sg.idg=$idg AND sg.idx=st.idx");
                                                    while ($b=mysqli_fetch_array($brg)) { ?>
                                                        <td><?php echo $b['nama']." (".$b['serial'].")" ; ?></td>
                                                        <td><?php echo $b['nama_brg']." (".$b['serial_brg'].")" ; ?></td>    
            								<?php
                                                    }
                                                }   
                                                 ?>
                                            </tr>
                                        <?php
                                            $i++;
										}
                                        $hasil=mysqli_query ($conn,"SELECT * FROM sbrg_keluar ORDER BY tgl_klr DESC");
                                        while ($b = mysqli_fetch_array($hasil)){ 
                                            $idb = $b['idx'];
                                            $id = $b['id'];
                                            $idg = $b['idg'];
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $b['action']; ?></td>
                                                <td><?php echo $b['admin_klr']; ?></td>
                                                <td><?php $tanggals=$b['tgl_klr']; echo date("d-M-Y", strtotime($tanggals)) ?></td>
                                                <?php 
                                                if ($idg == 0) { 
                                                    $brg=mysqli_query($conn, "SELECT * FROM sstock_brg WHERE idx=$idb");
                                                    $detail = mysqli_query($conn,"SELECT * from sgrouping WHERE idx = '$idb'"); 
                                                    while ($b=mysqli_fetch_array($brg)) { ?>
                                                    <td><?php echo $b['nama']." (".$b['serial'].")" ; ?></td>
                                                <?php } ?>
                                                    <td><ul style="list-style-type: circle;"><?php while ($list=mysqli_fetch_array($detail)) {
                                                        echo "<li>".$list['nama_brg']." (".$list['serial_brg'].")</li>";
                                                    } ?></ul></td>
                                            <?php                                                
                                            } else {
                                                $brg=mysqli_query($conn, "SELECT * FROM sstock_brg st, sgrouping sg WHERE st.idx=$idb AND sg.idg=$idg AND sg.idx=st.idx");
                                                while ($b=mysqli_fetch_array($brg)) { ?>
                                                    <td><?php echo $b['nama']." (".$b['serial'].")" ; ?></td>
                                                    <td><?php echo $b['nama_brg']." (".$b['serial_brg'].")" ; ?></td>    
                                            <?php
                                                }
                                            } ?>
                                            </tr>
                                        <?php
                                            $i++;
                                        }
                                        $hasil=mysqli_query ($conn,"SELECT * FROM sstock_brg ORDER BY tgl DESC");
                                        while ($b = mysqli_fetch_array($hasil)){ 
                                            $idb = $b['idx'];
                                            $detail = mysqli_query($conn,"SELECT * from sgrouping WHERE idx = '$idb'");
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $b['action']; ?></td>
                                                <td><?php echo $b['admin']; ?></td>
                                                <td><?php $tanggals=$b['tgl']; echo date("d-M-Y", strtotime($tanggals)) ?></td>
                                                <td><?php echo $b['nama']." (".$b['serial'].")" ; ?></td>
                                                <td><ul style="list-style-type: circle;"><?php while ($list=mysqli_fetch_array($detail)) {
                                                    echo "<li>".$list['nama_brg']." (".$list['serial_brg'].")</li>";
                                                } ?></ul></td>
                                            </tr>
                                        <?php
                                            $i++;
                                        } ?>
                                        </tbody>
										</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>PT. Dirgantara Indonesia</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
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