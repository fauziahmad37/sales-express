		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" id="print_area">
                  <div class="x_title">
                    <h4>Detail Pembayaran Invoice #<?php echo $data['invoice_number'];?></h4>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" >
					<div class="card col-md-10 col-sm-12 col-xs-12"> 							
						<table class="table borderless" style="width:100%">
							<tr>
								<td style="padding:0px !important" width="130px"><small>Nama Kustomer</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['nama_customer'];?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>
							<?php 
							if(
								$data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER
								|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE
							) {
							echo '<tr>
									<td style="padding:0px !important"><small>Pool</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small>'.$data['pool'].'</small></td>
									<td style="padding:0px !important"></td>								
								</tr>';
							}
							?>
							<tr>
								<td style="padding:0px !important"><small>Workshop</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['workshop'];?></small></td>
								<td style="padding:0px !important"></td>								
							</tr>													
							<tr>
								<td style="padding:0px !important"><small>Model Kendaraan</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['brand'].' '.$data['model'];?></small></td>
								<td style="padding:0px !important"></td>								
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Nomor Polisi</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['no_polisi'];?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Nomor Rangka</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['no_rangka'];?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>								
							<tr>
								<td style="padding:0px !important"><small>Nomor Mesin</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['no_mesin'];?></small></td>
								<td style="padding:0px !important"></td>								
							</tr>	
							<?php 
								if(
								$data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER
								|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE
							) {							
								echo '<tr>
									<td style="padding:0px !important"><small>Nomor Pintu</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small>'.$data['no_pintu'].'</small></td>		
									<td style="padding:0px !important"></td>						
								</tr>';
							}
							?>										
							<tr>
								<td style="padding:0px !important"><small>Tahun Kendaraan</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['tahun'];?></small></td>
								<td style="padding:0px !important"></td>								
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Nomor WO</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['wo_number'];?></small></td>
								<td style="padding:0px !important"></td>								
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Tanggal / Jam WO dicetak</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo date('d M Y / H:i:s', strtotime($data['tgl_wo_dicetak']));?></small></td>								
								<td style="padding:0px !important"></td>
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Pembuat WO</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo array_get($users, $data['wo_creator'], 'id', 'username');?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>
						 	<tr>
						 		<td colspan="4">
									<table class="table borderless">
										<tbody>
										<?php 
										$total_billing = 0;
										$total_servis = 0;
										echo '<tr><td colspan="5" style="padding:0px !important;text-align:center"><small><strong>Rincian Servis</strong></small></td></tr>';
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
											<td colspan="4" style="padding:0px !important;text-align:right"><small><strong>Subtotal Biaya Servis</strong></small></td>
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($total_servis).'</strong></small></td>
										</tr>';
										
										$total_billing += $total_servis;
										
										$total_barang = 0;
										if(Count($dataSupply) > 0){
											echo '<tr><td><br/></td></tr>';
											echo '<tr><td colspan="5" style="padding:0px !important;text-align:center"><small><strong>Pembelian Barang</strong></small></td></tr>';
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
												<td colspan="4" style="padding:0px !important;text-align:right"><small><strong>Subtotal Pembelian Barang</strong></small></td>
												<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($total_barang).'</strong></small></td>
											</tr>';										
										}
										
										$total_billing += $total_barang;
										$ppn = $total_billing * Admin::PPN_VAL / 100;
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="4" style="padding:0px !important;text-align:right"><small><strong>PPN '.Admin::PPN_VAL.'%</strong></small></td>
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($ppn).'</strong></small></td>
										</tr>';
										
										$total_billing += $ppn;
										$sisaTagihan = $total_billing - $data['total_payment'];
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><small><strong>Total Tagihan</strong></small></td>total
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($total_billing).'</strong></small></td></tr>
											<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><small><strong>Sisa Tagihan</strong></small></td>
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($sisaTagihan).'</strong></small></td>
										</tr>';							
										?>																										                		                		
									</table>
								</td>
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Status Pembayaran</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo ($data['lunas'] == 1 ? 'Lunas' : 'Belum Lunas');?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Jenis Pembayaran</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo ($data['tipe_pembayaran'] == 1 ? 'Tunai' : 'Tabungan');?></small></td>
								<td style="padding:0px !important"></td>								
							</tr>

							<tr>
								<td style="padding:0px !important"><small>Jumlah Pembayaran</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small>Rp <?php echo number_format($detail['total_payment']);?></small></td>
								<td style="padding:0px !important"></td>
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Tanggal Pembayaran</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo date('d M Y / H:i:s', strtotime($data['dt_lunas']));?></small></td>		
								<td style="padding:0px !important"></td>						
							</tr>
							<tr>
								<td style="padding:0px !important"><small>Penerima Pembayaran</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo array_get($users, $data['receiver_id'], 'id', 'username');?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>
						</table>

						<span class="left col-md-6 text-center">
							<br/><small>Dicetak oleh:</small><br/><br/><br/><small></small>
							<br/><small><strong><?php echo $this->user['full_name']; ?></strong></small>
						</span>
						<span class="col-md-6 text-center" style="float:right">
							<br/><small>Diterima oleh:</small><br/><br/><br/>
							<br/><small><strong>Pengemudi</strong></small>
						</span>
					</div>
				  </div>  
				  	<div class="row no-print">
						<div class="col-xs-12">
							<?php 					
							if($this->user['id_privilege'] == Admin::ADMINISTRATOR
								|| $this->user['id_privilege'] == Admin::CASHIER)
								 ?><a class="btn btn-info pull-center"  href="<?php echo site_url('/Payment/print_detail_invoice/'.$data['id_invoice']);?>" target="_blank"  role = "button">Cetak Detail Invoice</a>   	<?php	
							?>
						</div>
					</div>
            	</div>
            </div>
          </div>
		</div>
	  </div>
	</div>

<script>
	$(document).ready(function() {     	
    } );

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
<!-- /Datatables -->

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

