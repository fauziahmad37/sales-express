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
                    <th><font size="14">Detail Pembayaran Invoice #<?php echo $data['invoice_number'];?></font>
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
								<td>Nama Kustomer</td>
								<td>:</td>
								<td><?php echo $data['nama_customer'];?></td>
                                                                
                                                                
								<td></td>							
							
							<?php 
							if(
								$data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER
								|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE
							) {
							echo '
									<td>Pool</td>
									<td>:</td>
									<td>'.$data['pool'].'</td>
									<td></td>								
								</tr>';
							}
							?>
							<tr>
								<td >Workshop</td>
								<td >:</td>
								<td ><?php echo $data['workshop'];?></td>
								<td ></td>								
							
								<td >Model</td>
								<td >:</td>
								<td ><?php echo $data['brand'].' '.$data['model'];?></td>
								<td ></td>								
							</tr>
							<tr>
								<td >Nomor Polisi</td>   
								<td >:</td>
								<td ><?php echo $data['no_polisi'];?></td>	
								<td ></td>							
							
								<td >No Rangka</td>
								<td >:</td>
								<td ><?php echo $data['no_rangka'];?></td>	
								<td ></td>							
							</tr>								
							<tr>
								<td >Nomor Mesin</td>
								<td >:</td>
								<td ><?php echo $data['no_mesin'];?></td>
								<td ></td>								
								
							<?php 
								if(
								$data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER
								|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE
							) {							
								echo '
									<td>No Pintu</td>
									<td>:</td>
									<td>'.$data['no_pintu'].'</td>		
									</tr>';
							}
							?>										
							<tr>
								<td>Tahun</td>
								<td>:</td>
								<td><?php echo $data['tahun'];?></td>
								<td></td>								
							
								<td>Nomor WO</td>
								<td>:</td>
								<td><?php echo $data['wo_number'];?></td>
								<td</td>								
                                                        <tr>
								<td>Tanggal WO dicetak</td>
								<td>:</td>
								<td><?php echo date('d M Y / H:i:s', strtotime($data['tgl_wo_dicetak']));?></td>								
								<td></td>
							
								<td>Pembuat WO</td>
								<td>:</td>
								<td><?php echo array_get($users, $data['wo_creator'], 'id', 'full_name');?></td>	
								<td></td>							
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
												<td >'.$val['description'].'</td>
												<td >'.$val['qty'].' X @</td>
												<td >Rp '.number_format($val['price_qty']).' =</td>									
												<td >Rp '.number_format($val['total_price']).'</td>
												<td ></td>                			                			
											</tr>';
											$total_servis += $val['total_price'];
										}
										echo '<tr>
											<td colspan="4" style="padding:0px !important;text-align:right"><strong>Subtotal Biaya Servis</strong></td>
											<td style="padding:0px !important;text-align:right"><strong>Rp '.number_format($total_servis).'</strong></td>
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
													<td >'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>
													<td >'.$val['qty'].' X @</td>
													<td >Rp '.number_format($val['harga_satuan']).' =</td>									
													<td >Rp '.number_format($total_harga_supply).'</td>
													<td ></td>                			                			
												</tr>';
												$total_barang += $total_harga_supply;
											}
											echo '<tr>
												<td colspan="5" style="padding:0px !important;text-align:right"><strong>Subtotal Pembelian Barang</strong></td>
												<td style="padding:0px !important;text-align:right"><strong>Rp '.number_format($total_barang).'</strong></td>
											</tr>';										
										}
										
										$total_billing += $total_barang;
										$ppn = $total_billing * Admin::PPN_VAL / 100;
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><strong>PPN '.Admin::PPN_VAL.'%</strong></td>
											<td style="padding:0px !important;text-align:right"><strong>Rp '.number_format($ppn).'</strong></td>
										</tr>';
										
										$total_billing += $ppn;
										$sisaTagihan = $total_billing - $data['total_payment'];
										echo '<tr><td><br/></td></tr>';										
										echo '<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><strong>Total Tagihan</strong></td>
											<td style="padding:0px !important;text-align:right"><strong>Rp '.number_format($total_billing).'</strong></td></tr>
											<tr>
											<td colspan="5" style="padding:0px !important;text-align:right"><strong>Sisa Tagihan</strong></td>
											<td style="padding:0px !important;text-align:right"><strong>Rp '.number_format($sisaTagihan).'</strong></td>
										</tr>';							
										?>																										                		                		
									</table>
                                            <br>
                                                                <br>
                                            <table class="table borderless" style="width:100%;border: 1px solid black">
							<tr>
								<td><font size="13">Status Pembayaran</font></td>
								<td><font size="13">:</font></td>
								<td><font size="13"></font><?php echo ($data['lunas'] == 1 ? 'Lunas' : 'Belum Lunas');?></td>	
								<td></td>							
							</tr>
							<tr>
								<td><font size="13">Tabungan Awal</font></td>
								<td><font size="13">:</font></td>
								<td><font size="13">Rp. <?php echo number_format($data['tab_awal']);?></font></td>	
								<td></td>							
							</tr>
							<tr>
								<td><font size="13">Jenis Pembayaran</font></td>
								<td><font size="13">:</font></td>
								<td><font size="13"><?php echo ($data['tipe_pembayaran'] == 1 ? 'Tunai' : 'Tabungan');?></font></td>
								<td</td>								
							</tr>

							<tr>
								<td><font size="13">Jumlah Pembayaran</font></td>
								<td><font size="13">:</font></td>
								<td><font size="13">Rp <?php echo number_format($detail['total_payment']);?></font></td>
								<td></td>
							</tr>
							<tr>
								<td><font size="13">Tanggal Pembayaran</font></td>
								<td><font size="13">:</font></td>
								<td><font size="13"><?php echo date('d M Y / H:i:s', strtotime($data['dt_lunas']));?></font></td>		
								<td></td>						
							</tr>
							<tr>
								<td><font size="13">Penerima Pembayaran</font></td>
								<td><font size="13">:</font></td>
								<td><font size="13"><?php echo array_get($users, $data['receiver_id'], 'id', 'full_name');?></font></td>	
								<td></td>							
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

