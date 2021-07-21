		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">
        <div class="right_col" role="main" id="printable">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel tile" id="print_area">
					<div class="x_title">
					  <h5 style="text-align:center !important;">Invoice Pembayaran Bengkel</h5> 
					  <h5 style="text-align:center !important;">PT Express Mulia Perdana</h5>
					  <div class="clearfix"></div>
					</div>
					<div class="x_content">   
						<table class="table borderless">
							<tr>
								<td style="padding:0px !important"><small>Nomor Invoice</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['invoice_number'];?></small></td>                			                			
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Nomor WO</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['wo_number'];?></small></td>                			                			
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Nama Pelanggan</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['nama_customer'];?></small></td>                			                			
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Nomor Polisi</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['no_polisi'];?></small></td>                			                			
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Nama PT</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['ptfullname'];?></small></td>                			                			
							</tr>
							<?php
								if($data['id_jenis_customer'] <= Admin::CUSTOMER_TIPE_EAGLE){
								echo '<tr>
										<td style="padding:0px !important"><small>Nomor Pintu</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small>'.$data['no_pintu'].'</small></td>                			                			
									</tr>';
								echo '<tr>
										<td style="padding:0px !important"><small>Pool</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small>'.$data['nama'].'</small></td>                			                			
									</tr>';
								}
							?>
							<tr>
								<td style="padding:0px !important"><small>Tanggal Invoice</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo date('d M Y', strtotime($data['created_dt']));?></small></td>                			                			
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Total Tagihan</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo 'Rp '.number_format($data['total_billing']);?></small></td>                			                			
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Jenis Pembayaran</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['jenis_pembayaran'];?></small></td>                			                			
							</tr>																													                		                		
							<tr>
						 		<td colspan="3">
									<table class="table borderless">
										<tbody>
										<?php 
										$total_billing = 0;
										$total_servis = 0;
										echo '<tr><td colspan="5" style="padding:0px !important;text-align:center"><strong><small>Rincian Servis</small></strong></td></tr>';
										foreach((Array) $dataPekerjaan AS $key => $val){
											echo '<tr>
												<td style="padding:0px !important"><small>'.$val['description'].'</small></td>
												<td style="padding:0px !important;text-align:right"><small>'.$val['qty'].' X @</small></td>
												<td style="padding:0px !important;text-align:right"><small>Rp '.number_format($val['price_qty']).' =</small></td>									
												<td style="padding:0px !important;text-align:right"><small>Rp '.number_format($val['total_price']).'</small></td>
												<td></td>                			                			
											</tr>';
											$total_servis += $val['total_price'];
										}
										echo '<tr>
											<td colspan="4" style="padding:0px !important;text-align:right"><strong><small>Subtotal Biaya Servis</small></strong></td>
											<td style="padding:0px !important;text-align:right"><strong><small>Rp '.number_format($total_servis).'</small></strong></td>
										</tr>';
										
										$total_billing += $total_servis;
										$total_barang = 0;
										
										if(Count($dataSupply) > 0){
											echo '<tr><td><br/></td></tr>';
											echo '<tr><td colspan="5" style="padding:0px !important;text-align:center"><strong><small>Pembelian Barang</small></strong></td></tr>';
											foreach((Array) $dataSupply AS $key => $val){
												$is_sparepart = $val['material'] == null;
												$total_harga_supply = $val['harga_satuan'] * $val['qty'];
												echo '<tr>
													<td style="padding:0px !important"><small>'.($is_sparepart ? $val['sparepart'] : $val['material']).'</small></td>
													<td style="padding:0px !important;text-align:right"><small>'.$val['qty'].' X @</small></td>
													<td style="padding:0px !important;text-align:right"><small>Rp '.number_format($val['harga_satuan']).' =</small></td>									
													<td style="padding:0px !important;text-align:right"><small>Rp '.number_format($total_harga_supply).'</small></td>
													<td></td>                			                			
												</tr>';
												$total_barang += $total_harga_supply;
											}
											echo '<tr>
												<td colspan="4" style="padding:0px !important;text-align:right"><strong><small>Subtotal Pembelian Barang</small></strong></td>
												<td style="padding:0px !important;text-align:right"><strong><small>Rp '.number_format($total_barang).'</small></strong></td>
											</tr>';										
										}
										
										$total_billing += $total_barang;										
										$ppn = $total_billing * Admin::PPN_VAL / 100;
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="4" style="padding:0px !important;text-align:right"><strong><small>PPN '.Admin::PPN_VAL.'%</small></strong></td>
											<td style="padding:0px !important;text-align:right"><strong><small>Rp '.number_format($ppn).'</small></strong></td>
										</tr>';
										
										$total_billing += $ppn;
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><strong><small>Total Tagihan</small></strong></td>
											<td style="padding:0px !important;text-align:right"><strong><small>Rp '.number_format($total_billing).'</small></strong></td>
										</tr>';							
										?>																										                		                		
									</table>
								</td>
							</tr>																										                		                		
						</table>
						<span class="left col-md-6 text-center">
							<br/><small>Dicetak oleh:</small><br/><br/><br/><br/><small><?php echo (array_get($dataUser, $data['input_by'], 'id', 'full_name'));?></small>
							<br/><!-- <strong><small><?php //echo $arrPrivilege[array_get($dataUser, $data['input_by'], 'id', 'id_privilege')];?></small></strong> -->
						</span>
						<span class="col-md-6 text-center" style="float:right">
							<br/><small>Diterima oleh:</small><br/><br/><br/>
							<br/><strong><small>Kasir</small></strong>
						</span>
					</div>
				</div>
				<div class="row no-print">
					<div class="col-xs-12">
					<?php 					
					if($this->user['id_privilege'] == Admin::ADMIN_BILLING || $this->user['id_privilege'] == Admin::ADMINISTRATOR)
						echo '<button class="btn btn-default" onclick="printDiv(\'print_area\');"><i class="fa fa-print"></i> Print</button>';
					?>
					</div>
				</div>
				<script>
				function printDiv(divName) {
					 var printContents = document.getElementById(divName).innerHTML;
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
				}
				</script>
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
	
	<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
	<!-- Datatables -->
    
    <!-- /Datatables -->
