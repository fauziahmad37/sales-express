		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" id="print_area">
                  <div class="x_title">
                      <table style="width:100%">
                    <tr>
                    <th><img src="assets/images/logo_express.jpg" alt="Mountain View" align ="left" style="width:200px;height:50px;"></th>
                    <th>Detail Pembayaran Invoice #<?php echo $data['invoice_number'];?>
                  </th> 
                    </tr>
                    </table>
                    <hr>
                    <br>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" >
					<div class="card col-md-10 col-sm-12 col-xs-12"> 							
						<table class="table borderless" style="width:100%;border: 1px solid black">
							<tr>
								<td><small>Nama Kustomer</small></td>
								<td><small>:</small></td>
								<td><small><?php echo $data['nama_customer'];?></small></td>
                                                                
                                                                
								<td style="padding:0px !important"></td>							
							
							<?php 
							if(
								$data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER
								|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE
							) {
							echo '
									<td style="padding:0px !important"><small>Pool</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small>'.$data['pool'].'</small></td>
									<td style="padding:0px !important"></td>								
								</tr>';
							}
							?>
							<tr>
								<td ><small>Workshop</small></td>
								<td ><small>:</small></td>
								<td ><small><?php echo $data['workshop'];?></small></td>
								<td ></td>								
							
								<td ><small>Model </small></td>
								<td ><small>:</small></td>
								<td ><small><?php echo $data['brand'].' '.$data['model'];?></small></td>
								<td ></td>								
							</tr>
							<tr>
								<td ><small>Nomor Polisi</small></td>   
								<td ><small>:</small></td>
								<td ><small><?php echo $data['no_polisi'];?></small></td>	
								<td ></td>							
							
								<td ><small>No Rangka</small></td>
								<td ><small>:</small></td>
								<td ><small><?php echo $data['no_rangka'];?></small></td>	
								<td ></td>							
							</tr>								
							<tr>
								<td ><small>Nomor Mesin</small></td>
								<td ><small>:</small></td>
								<td ><small><?php echo $data['no_mesin'];?></small></td>
								<td ></td>								
								
							<?php 
								if(
								$data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER
								|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE
							) {							
								echo '
									<td style="padding:0px !important"><small>No Pintu</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small>'.$data['no_pintu'].'</small></td>		
									</tr>';
							}
							?>										
                                                        <tr>
								<td style="padding:0px !important"><small>Tahun</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['tahun'];?></small></td>
								<td style="padding:0px !important"></td>								
							
								<td style="padding:0px !important"><small>Nomor WO</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo $data['wo_number'];?></small></td>
								<td style="padding:0px !important"></td>								
                                                        <tr>
								<td style="padding:0px !important"><small>Tanggal WO dicetak</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo date('d M Y / H:i:s', strtotime($data['tgl_wo_dicetak']));?></small></td>								
								<td style="padding:0px !important"></td>
							
								<td style="padding:0px !important"><small>Pembuat WO</small></td>
								<td style="padding:0px !important"><small>:</small></td>
								<td style="padding:0px !important"><small><?php echo array_get($users, $data['wo_creator'], 'id', 'full_name');?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>
                                                </table>
                                            <br>
                                            <br>
                                            <p><strong>Rincian Servis</strong></p>
									<table class="table borderless" style="width: 100%">
										<tbody>
										<?php 
										$total_billing = 0;
										$total_servis = 0;
										
										foreach((Array) $dataPekerjaan AS $key => $val){
											echo '<tr>
												<td ><small>'.$val['description'].'</small></td>
												<td ><small>'.$val['qty'].' X @</small></td>
												<td ><small>Rp '.number_format($val['price_qty']).' =</small></td>									
												<td ><small>Rp '.number_format($val['total_price']).'</small></td>
												<td ></td>                			                			
											</tr>';
											$total_servis += $val['total_price'];
										}
										echo '<tr>
											<td colspan="4" style="padding:0px !important;text-align:right"><small><strong>Subtotal Biaya Servis</strong></small></td>
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($total_servis).'</strong></small></td>
										</tr>';
										
										$total_billing += $total_servis;
										?>
                                                                        </table>
                                            <br>
                                            <br>
                                            <p><strong>Rincian Pembelian Barang</strong></p>
                                            <table class="table borderless" style="width: 100%">
                                                                                    <?php
										$total_barang = 0;
										if(Count($dataSupply) > 0){
											
											foreach((Array) $dataSupply AS $key => $val){
												$is_sparepart = $val['material'] == null;
												$total_harga_supply = $val['harga_satuan'] * $val['qty'];
												echo '<tr style="border: 1px solid black">
													<td ><small>'.($is_sparepart ? $val['sparepart'] : $val['material']).'</small></td>
													<td ><small>'.$val['qty'].' X @</small></td>
													<td ><small>Rp '.number_format($val['harga_satuan']).' =</small></td>									
													<td ><small>Rp '.number_format($total_harga_supply).'</small></td>
													<td ></td>                			                			
												</tr>';
												$total_barang += $total_harga_supply;
											}
											echo '<tr>
												<td colspan="5" style="padding:0px !important;text-align:right"><small><strong>Subtotal Pembelian Barang</strong></small></td>
												<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($total_barang).'</strong></small></td>
											</tr>';										
										}
										
										$total_billing += $total_barang;
										$ppn = $total_billing * Admin::PPN_VAL / 100;
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><small><strong>PPN '.Admin::PPN_VAL.'%</strong></small></td>
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($ppn).'</strong></small></td>
										</tr>';
										
										$total_billing += $ppn;
										$sisaTagihan = $total_billing - $data['total_payment'];
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><small><strong>Total Tagihan</strong></small></td>
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($total_billing).'</strong></small></td></tr>
											<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><small><strong>Sisa Tagihan</strong></small></td>
											<td style="padding:0px !important;text-align:right"><small><strong>Rp '.number_format($sisaTagihan).'</strong></small></td>
										</tr>';							
										?>																										                		                		
									</table>
                                            <br>
                                                                <br>
                                            <table class="table borderless" style="width:100%;border: 1px solid black">
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
								<td style="padding:0px !important"><small><?php echo array_get($users, $data['receiver_id'], 'id', 'full_name');?></small></td>	
								<td style="padding:0px !important"></td>							
							</tr>
						</table>
                                            <br>
                                            <br>
                                            <table width="100%">
                                                <tr align="center">
                                                        <td width="50%">Dicetak oleh :</td>
                                                        <td width="50%">Diterima oleh :</td>
                                                </tr>
                                                <tr  >
                                                    <td><br><br><br></td>
                                                    <td><br><br><br></td>
                                                </tr>
                                                <tr align="center"> 
                                                        <td><?php echo $this->user['full_name']; ?></td>
                                                        <td>Pengemudi</td>
                                                </tr>
						</span>
                                            </tr>
                                                </table>
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

