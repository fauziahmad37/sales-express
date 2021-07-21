<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url('/assets/images/icon.png');?>" />
    <title>Sales</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('/assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('/assets/css/nprogress.css');?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('/assets/css/blue.css');?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('/assets/css/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('/assets/css/jqvmap.min.css');?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('/assets/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('/assets/css/boards.css');?>" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- sidebar menu -->
            <div class="navbar nav_title" style="border: 0;">
				<!-- h4 id="time_span" class="text-center" style="color:white;"></h4 -->	
            </div>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <?php
                	echo '<li><a href="'.site_url("/").'"><i class="fa fa-home"></i> Home</a></li>';
					
// =========================================================================================================================
// ================================================== MASTER ===============================================================
					if(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
						$this->user['id_privilege'] == Admin::SALES_MANAGER ||
						$this->user['id_privilege'] == Admin::SALES_ADMIN ||
						$this->user['id_privilege'] == Admin::SALES 
					){
						echo '<li>
								<a><i class="fa fa fa-bank"></i> Master</a>
								<ul class="nav child_menu" width="100%">
									<li><a href="'.site_url("/Vehicle/list_vehicle").'"><i class="fa fa-cab"></i>Vehicle </a></li>
								  	<li><a href="'.site_url("/Customer/").'"><i class="fa fa-user"></i>Customer </a></li>
							';
							if($this->user['id_privilege'] == Admin::ADMINISTRATOR){
								echo '
									<li><a href="'.site_url("/Users").'"><i class="fa fa-users"></i> Users</a></li>';
							}
							echo '
								</ul>
							</li>';
					}

// =========================================================================================================================
// ================================================== Customer ===============================================================

					// if(
					// 	$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
					// 	$this->user['id_privilege'] == Admin::SALES_ADMIN ||
					// 	$this->user['id_privilege'] == Admin::SALES 
					// ){
					// 	echo '<li>
					// 			<a><i class="fa fa fa-bank"></i> Master</a>
					// 			<ul class="nav child_menu" width="100%">
					// 				<li><a href="'.site_url("/Customer/").'"><i class="fa fa-cab"></i>Customer </a></li>
					// 		';
					// 		echo '
					// 			</ul>
					// 		</li>';
					// }

// =========================================================================================================================
// ================================================== APPROVAL =============================================================

					// if(
					// 	$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
					// 	$this->user['id_privilege'] == Admin::AREA_MANAGER
					// ){
					// 	echo '<li>
					// 			<a><i class="fa fa fa-key	"></i>Approval</a>
					// 			<ul class="nav child_menu" width="100%">
					// 				<li><a href="'.site_url("/Driver/list_driver_registration").'"><i class="fa fa-cab"></i>Approval New Driver</a></li>';
							
									
					// 	echo		'<li><a href="'.site_url("/Vehicle/vehicle_approval").'"><i class="fa fa-cab"></i>Approval New Vehicle</a></li>									
					// 			</ul>
					// 		</li>';
					// }
					
// =========================================================================================================================
// ================================================== SKH ==================================================================

					if(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
						$this->user['id_privilege'] == Admin::SALES_MANAGER ||
						$this->user['id_privilege'] == Admin::SALES_ADMIN ||
						$this->user['id_privilege'] == Admin::SALES 
					){
						echo '<li>
								<a><i class="fa fa fa-cab"></i> SKH</a>
								<ul class="nav child_menu" width="100%">';
								if(
									$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
									$this->user['id_privilege'] == Admin::SALES_MANAGER ||
									$this->user['id_privilege'] == Admin::SALES_ADMIN ||
									$this->user['id_privilege'] == Admin::SALES 
								){
						echo	   '<li><a href="'.site_url("/Skh").'">Create Surat Kesepakatan Harga</a></li>
									<li><a href="'.site_url("/Payment").'">Payment Skh</a></li>
						';
								}
								
								
						echo	   '</ul>
							</li>';
					}

					if(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
						$this->user['id_privilege'] == Admin::SALES_MANAGER ||
						$this->user['id_privilege'] == Admin::SALES_ADMIN ||
						$this->user['id_privilege'] == Admin::SALES 
					){
						echo '<li>
							<a href="'.site_url("/Phk").'"><i class="fa fa fa-cab"></i>Pengajuan Harga Dasar Khusus</a>

						</li>';
					}

// =========================================================================================================================
// ================================================== CHECKER ==============================================================
					
					// if(
					// 	$this->user['id_privilege'] == Admin::ADMINISTRATOR || 
					// 	$this->user['id_privilege'] == Admin::POOL_HEAD ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
					// 	$this->user['id_privilege'] == Admin::AREA_MANAGER ||
					// 	$this->user['id_privilege'] == Admin::CHECKER
					// 	){
					// 	echo '<li>
					// 		<a><i class=" fa fa-check-circle-o"></i> Checker</a>
					// 		<ul class="nav child_menu" width="100%">
					// 			<li><a href="'.site_url("/Spj/checker_keluar_pool/").'">Checker</a></li>
					// 			<li><a href="'.site_url("/Spj/index_checker/").'">Index Checker</a></li>
					// 			<li><a href="'.site_url("/Spj/report_checker_body/").'">Report Checker Body</a></li>
					// 		</ul>
					// 	</li>';
					// }

// =========================================================================================================================
// ================================================== JAMINAN ==============================================================

					// if(
					// 	$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
					// 	$this->user['id_privilege'] == Admin::POOL_HEAD ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
					// 	$this->user['id_privilege'] == Admin::AREA_MANAGER ||
					// 	$this->user['id_privilege'] == Admin::CASHIER
					// ){
					// 	echo '<li>
					// 			<a><i class="fa fa fa-money"></i>Jaminan</a>
					// 			<ul class="nav child_menu" width="100%">
					// 				<li><a href="'.site_url("/Jaminan").'">Topup Jaminan</a></li>
					// 			</ul>
					// 		</li>';
					// }

// =========================================================================================================================
// ================================================== SERAGAM ==============================================================

					// if(
					// 	$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
					// 	$this->user['id_privilege'] == Admin::POOL_HEAD ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
					// 	$this->user['id_privilege'] == Admin::AREA_MANAGER ||
					// 	$this->user['id_privilege'] == Admin::OPERATIONAL ||
					// 	$this->user['id_privilege'] == Admin::CASHIER
					// ){
					// 	echo '<li>
					// 			<a><i class="fa fa-users"></i>Seragam</a>
					// 			<ul class="nav child_menu" width="100%">
					// 				<li><a href="'.site_url("/Seragam").'">Pengambilan Seragam</a></li>
					// 				<li><a href="'.site_url("/Seragam/index_pembayaran_seragam").'">Pembayaran Seragam</a></li>
					// 			</ul>
					// 		</li>';
					// }					

// =========================================================================================================================
// ================================================== CLOSING ==============================================================

					// if(
					// 	$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
					// 	$this->user['id_privilege'] == Admin::AREA_MANAGER ||
					// 	$this->user['id_privilege'] == Admin::POOL_HEAD ||
					// 	$this->user['id_privilege'] == Admin::CASHIER
					// ){
					// 	echo '<li>
					// 			<a><i class="fa fa fa-bank"></i>Closing</a>
					// 			<ul class="nav child_menu" width="100%">
					// 				<li><a href="'.site_url("/Closing").'">Daily Closing</a></li>
					// 				<li><a href="'.site_url("/Closing/detail").'">Daily Closing Detail</a></li>
					// 			</ul>
					// 		</li>';
					// }

// =========================================================================================================================
// ================================================== REPORT ===============================================================					

					// if(
					// 	$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
					// 	$this->user['id_privilege'] == Admin::CASHIER ||
					// 	$this->user['id_privilege'] == Admin::OPERATIONAL ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
					// 	$this->user['id_privilege'] == Admin::AREA_MANAGER ||
					// 	$this->user['id_privilege'] == Admin::POOL_HEAD
					// ){
					// 	echo '<li>
					// 			<a><i class="fa fa fa-bar-chart"></i>Report</a>
					// 			<ul class="nav child_menu" width="100%">
					// 				<li><a href="'.site_url("/Report/hk").'">HK</a></li>
					// 				<li><a href="'.site_url("/Report/rekap_spj_regular").'">Rekap SPJ Regular</a></li>
					// 				<li><a href="'.site_url("/Report/rekap_spj_tiara").'">Rekap SPJ Tiara</a></li>
					// 				<li><a href="'.site_url("/Report/setoran").'">Setoran</a></li>
					// 			</ul>
					// 		</li>';
					// }		
					
                	

					
					// if(
						// $this->user['id_privilege'] == Admin::ADMINISTRATOR
						// || $this->user['id_privilege'] == Admin::PART_ADMIN
						// || $this->user['id_privilege'] == Admin::FINANCE
						// || $this->user['id_privilege'] == Admin::KAPOOL
						// || $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
						// || $this->user['id_privilege'] == Admin::SCM_ADMIN
						// || $this->user['id_privilege'] == Admin::AKUNTING
						// || $this->user['id_privilege'] == Admin::SERVICE_ADVISOR
						// ){
						// echo '<li><a><i class="fa fa-briefcase"></i> Inventory</a>
								// <ul class="nav child_menu" width="100%">
								  // <li><a href="'.site_url("/Pbag/").'">PBAG</a></li>
								  // <li><a href="'.site_url("/Inventory/").'">Data Stok</a></li>
								  // <li><a href="'.site_url("/Inventory/pengambilan").'">Pengambilan Stok</a></li>
								  // <li><a href="'.site_url('/Inventory/penerimaan').'">Penerimaan Stok</a></li>
								  // <li><a href="'.site_url('/Inventory/pengambilan_barang').'">Report Pengeluaran Barang</a></li>
								  // <li><a href="'.site_url('/Inventory/listInOutInventory').'">Laporan Keluar Masuk Sparepart</a></li>
								  // <li><a href="'.site_url('/Inventory/log_inventory').'">Log Keluar Masuk Sparepart</a></li>
								  // <li><a href="'.site_url('/Inventory/list_rr_eproc').'">List RR eProc</a></li>	
								  // <li><a href="'.site_url("/Inventory/list_stock_sparepart").'">Permintaan Antar Gudang</a></li>
								  // <li><a href="'.site_url("/Inventory/list_transfer_sparepart").'">Pengiriman Antar Gudang</a></li>
								  // <li><a href="'.site_url("/Inventory/list_request_sparepart").'">Penerimaan Antar Gudang</a></li>
								  // <li><a href="'.site_url("/Inventory/outstanding_antar_gudang").'">Outstanding Antar Gudang</a></li>
								  // <li><a href="'.site_url("/Inventory/index_manajemen_loc_part").'">Manajemen Lokasi Part</a></li>
								  // <li><a href="'.site_url("/Retur").'">Retur</a></li>
								  // <li><a href="'.site_url('/Inventory/summary_in_out_barang').'">Summary Report Keluar Masuk Barang</a></li>
								  // <li><a href="'.site_url("/Akunting/laporan_stok").'">Rekapitulasi Penerimaan dan Pengeluaran</a></li>
								  // <li><a href="'.site_url("/Akunting/laporan_stok_detail").'">Laporan Stok</a></li>
								 
								// </ul>
							// </li>';
					// }
					
					// if($this->user['id_privilege'] == Admin::MANAGER_AREA 
					// || $this->user['id_privilege'] == Admin::CEO
					// || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
						// echo '<li><a href="'.site_url("/Inventory").'"><i class="fa fa-bank"></i> Inventory</a></li>';
					// }
					
					// if(
						// $this->user['id_privilege'] == Admin::ADMINISTRATOR
						// ){
						// echo '<li><a><i class="fa fa-briefcase"></i>Finance </a>
								// <ul class="nav child_menu" width="100%">
								  // <li><a href="'.site_url("/Request/").'">Approve</a></li>
								// </ul>
							// </li>';
					// }
					// if(
						// $this->user['id_privilege'] == Admin::ADMINISTRATOR
						// || $this->user['id_privilege'] == Admin::SCM_ADMIN
						// || $this->user['id_privilege'] == Admin::FINANCE
						// || $this->user['id_privilege'] == Admin::FINANCE_HEAD
						// ){
						// echo '<li><a href="'.site_url("/Service").'"><i class="fa fa-pencil-square-o"></i> Jasa</a></li>';
					// }
					// if(
						// $this->user['id_privilege'] == Admin::ADMINISTRATOR
						// || $this->user['id_privilege'] == Admin::SCM_ADMIN
						// || $this->user['id_privilege'] == Admin::FINANCE
						// || $this->user['id_privilege'] == Admin::FINANCE_HEAD
						// ){
						// echo '<li><a href="'.site_url("/Sparepart").'"><i class="fa fa-wrench"></i> Sparepart</a></li>';
					// }
					// if(
						// $this->user['id_privilege'] == Admin::ADMINISTRATOR
						// || $this->user['id_privilege'] == Admin::SCM_ADMIN
						// || $this->user['id_privilege'] == Admin::FINANCE
						// || $this->user['id_privilege'] == Admin::FINANCE_HEAD
						// ){
						// echo '<li><a href="'.site_url("/Material").'"><i class="fa fa-cloud"></i> Material</a></li>';
					// }
					// if(
						// $this->user['id_privilege'] == Admin::ADMINISTRATOR
						// || $this->user['id_privilege'] == Admin::FINANCE
						// || $this->user['id_privilege'] == Admin::SCM_ADMIN
						// || $this->user['id_privilege'] == Admin::AKUNTING
						// || $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
						// ){
						// echo '<li><a><i class="fa fa-calendar-o"></i>Report Akunting</a>
								// <ul class="nav child_menu" width="100%">
								    // <li><a href="'.site_url("/Akunting/").'">Data Invoice Invoice</a></li>
									// <li><a href="'.site_url("/Akunting/detail_pembayaran").'">Detail Pembayaran</a></li>
									// <li><a href="'.site_url("/Akunting/laporan_stok").'">Rekapitulasi Penerimaan & Pengeluaran Barang</a></li>
									// <li><a href="'.site_url("/Akunting/laporan_stok_detail").'">Detail Rekapitulasi Penerimaan & Pengeluaran Barang</a></li>
									// <li><a href="'.site_url("/Akunting/laporan_bulanan").'">Laporan Bulanan</a></li>
									// <li><a href="'.site_url("/Payment").'">Pembayaran Invoice</a></li>
									// <li><a href="'.site_url("/Akunting/transaksi_pemotongan_tabungan").'">Transaksi Pemotongan Tabungan Simtax</a></li>
									// <li><a href="'.site_url("/Akunting/rekapitulasi_pengeluaran_barang").'">Rekapitulasi Pengeluaran Barang</a></li>
								// </ul>
							// </li>';
					// }
					

					if($this->user['id_privilege'] == Admin::ADMINISTRATOR){
						
						// echo '<li><a href="'.site_url("/Settings").'"><i class="fa fa-gear"></i> Settings</a></li>';
					}
					
					
				  ?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
       <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo site_url('/build/images/img.jpg'); ?>" alt=""><?php echo $this->user['full_name']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo site_url('Login/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo site_url('/build/images/img.jpg'); ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo site_url('/build/images/img.jpg');  ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo site_url('/build/images/img.jpg'); ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo site_url('/build/images/img.jpg'); ?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
		<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
        <script>
		  // $(document).ready(function() {
		  // function updateTime(){
				// var currentTime = new Date()
				// var seconds = currentTime.getSeconds()
				// var hours = currentTime.getHours()
				// var minutes = currentTime.getMinutes()
				// if (minutes < 10){
					// minutes = "0" + minutes
				// }
				// if(seconds < 10){
					// seconds = "0" + seconds
				// }
				// var bulan 		= ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember"];
				// var indexBulan 	= currentTime.getMonth();
				// var tanggal 	= currentTime.getDate();
				// var tahun		= currentTime.getFullYear();
				
				// var t_str = hours + ":" + minutes + ":" + seconds;
				// var t_str = tanggal + " "+ bulan[indexBulan]+ " " + tahun+ "<br>" +hours + ":" + minutes + ":" + seconds ;
				// document.getElementById('time_span').innerHTML = t_str;
			// }
			// updateTime();
			// setInterval(updateTime, 1000); 
		   // } ); 
		</script>
        <!-- /top navigation -->

        