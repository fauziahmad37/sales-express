		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Mobil</h2>
                   
                    <div id="ajax-modal-tabungan" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
					<ul class="nav navbar-right panel_toolbox"><li><button class="btn btn-info no-print" onclick="cek_tabungan()">Cek Saldo Tabungan</button></li></ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					<div class="card col-md-6 col-sm-6 col-xs-12"> 							
						<table class="table borderless" style="width:100%">
						<?php							
							echo 
								"<tr><td>Jenis Mobil</td><td>:</td><td>".$dataCar['jenis_customer']."</td></tr>".
								"<tr><td>Model</td><td>:</td><td>".$dataCar['model']."</td></tr>".
								"<tr><td>Warna</td><td>:</td><td>".$dataCar['warna']."</td></tr>".									
								"<tr><td>No Rangka</td><td>:</td><td>".$dataCar['no_rangka']."</td></tr>".
								"<tr><td>No Mesin</td><td>:</td><td>".$dataCar['no_mesin']."</td></tr>".
								"<tr><td>No Polisi</td><td>:</td><td>".$dataCar['no_polisi']."</td></tr>";
						?>
						</table>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12"> 							
						<table class="table borderless" style="width:100%">
						<?php							
							echo 
								"<tr><td>Nama</td><td>:</td><td>".$dataCar['customer']."</td></tr>".									
								"<tr><td>Pool</td><td>:</td><td>".$dataCar['pool']."</td></tr>".									
								"<tr><td>No Pintu</td><td>:</td><td>".$dataCar['no_pintu']."</td></tr>".
								"<tr><td>Alamat</td><td>:</td><td>".nl2br($dataCar['alamat'])."</td></tr>".
								"<tr><td>No Telp 1</td><td>:</td><td>".$dataCar['no_telepon1']."</td></tr>".
								"<tr><td>No Telp 2</td><td>:</td><td>".$dataCar['no_telepon2']."</td></tr>";
						?>
						</table>
					</div>
				  </div>  
            	</div>
            	
            </div>
          </div>
		</div>
        <!-- /page content -->
			<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
		<!-- jQuery -->
		<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
		<!-- NProgress -->
		<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
    	<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
   		function cek_tabungan(){
			$("#ajax-modal-tabungan").html("");
			$("#ajax-modal-tabungan").modal();
			$("#ajax-modal-tabungan").load('<?php echo site_url('/Work_order/cek_tabungan');?>',{"id_car": <?php echo $id_car; ?>});
		}

    </script>