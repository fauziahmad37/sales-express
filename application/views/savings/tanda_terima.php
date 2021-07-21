		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row" id="printable">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tanda Terima</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					<div class="card col-md-12 col-sm-12 col-xs-12"> 							
						<table class="table borderless" style="width:100%">
						<?php							
							echo 							
								"<tr><td>No</td><td>:</td><td>".$data['no_tanda_terima']."</td></tr>".									
								"<tr><td>Nama</td><td>:</td><td>".$data['nama']."</td></tr>".									
								"<tr><td>Pool</td><td>:</td><td>".$data['pool']."</td></tr>".									
								"<tr><td>No Pintu</td><td>:</td><td>".$data['no_pintu']."</td></tr>".
								"<tr><td>No Rangka</td><td>:</td><td>".$data['no_rangka']."</td></tr>".
								"<tr><td>No Polisi</td><td>:</td><td>".$data['no_polisi']."</td></tr>".																
								"<tr><td>Jumlah Tabungan</td><td>:</td><td>".number_format($data['amount'])."</td></tr>".
								"<tr><td>Note</td><td>:</td><td>".nl2br($data['note'])."</td></tr>".
								"<tr><td>Diterima Oleh</td><td>:</td><td>".$data['receiver']."</td></tr>".
								"<tr><td>Tanggal</td><td>:</td><td>".date('d M Y H:i:s', strtotime($data['dt']))."</td></tr>"								
								;
						?>
						</table>
					</div>
				  </div>  
            	</div>
            </div>
          </div>
          <button class="btn btn-primary" id="print_btn">Print</button>
          <button class="btn btn-warning" id="back_btn">Lihat Detail Transaksi</button>
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
    	<script src="<?php echo base_url('/assets/js/jquery.redirect.js');?>"></script>    	
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {  
      	$("#print_btn").on("click", function(){
			var printContents = document.getElementById('printable').innerHTML;
			 var originalContents = document.body.innerHTML;
			 var w = window.open();
				w.document.write(
						   '<html><header><link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet" media="all"></header>'+
							   '<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">'+
							   '<link href="<?php echo base_url('/assets/css/boards.css');?>" rel="stylesheet"></header><body style="background-color:white;margin-auto">'+									   
							   printContents+
						   '</body></html>');
				w.document.close();
				w.focus();
				setTimeout(function () { // necessary for Chrome
					w.print();
					w.close();
				}, 500);
		});	
		$("#back_btn").on("click", function(){
			$.redirect('<?php echo site_url('/Savings/detail/');?>', {'id_car': <?php echo $data['id_car'];?>});
		});
        } );
    </script>
    <!-- /Datatables -->
