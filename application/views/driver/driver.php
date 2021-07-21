<style>
.overview h3 {
    font-weight: 300;
    margin-top: 15px;
    margin: 10px 0 0 0;
}

.overview h4 {
    font-weight: bold!important;
    font-size: 40px;
    margin-top: 0;
}

.user-pad {
    padding: 20px 25px;
}

.user-details {
    background: #eee;
    min-height: 333px;
}
</style>


<!-- page content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>Data Driver </h2>
					<div class="clearfix"></div>
                </div>
				
				<div class="x_content">
					<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
						<div class="profile_img">
							<div id="crop-avatar">
								<img class="img-responsive avatar-view" src="<?php echo base_url('/uploads/photo/NIK_'.$data['ktp_number'].'.jpg');?>" alt="Avatar" title="Change the avatar">
							</div>
						</div>
						<h3><?php echo $data['name'];?></h3>
						<ul class="list-unstyled user_data">
							<li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $data['domicile_address'];?></li>
							<li class="fa fa-phone user-profile-icon"><i></i> <?php echo $data['phone'];?></li>
							<li class="m-top-xs">
								<i class="fa fa-check user-profile-icon"></i> <?php echo $data['status'];?></li>
						</ul>
						
					</div>
					
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="profile_title">
							<div class="col-md-6">
								<h2>Detail</h2>
							</div>
						</div>
						<br>
						<div class="col-md-6">
							<ul class="list-unstyled user_data">
							<li><h4>Kip Number : <?php echo $data['kip_number'];?></h4></li>
							<li><h4>Tanggal Input : <?php echo date_format(date_create($data['created_dt']), 'd/m/y g:i:A');?></h4></li>
							<li><h4>Email : <?php echo $data['email'];?></h4></li>
							<li><h4>Rekening : <?php echo $data['bank_account_number'];?></h4></li>
							
						</ul>
						</div>
						
						
					</div>
					<div class="row overview user-details">
						<div class="col-md-4 user-pad text-center">
							<h3>JAMINAN</h3>
							<h4><?php echo number_format($data['amount_akhir']);?></h4>
						</div>
						<div class="col-md-4 user-pad text-center">
							<h3>CICILAN SERAGAM</h3>
							<h4><?php echo number_format($data['amount_seragam']);?></h4>
						</div>
					</div>
				</div>
				
				
			</div>
			
			
		
		</div>
		
	</div>
	
<!-- ============================================== TAB MENU ======================================== -->	
	
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Settings</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab_content1" id="spj-tab" role="tab" data-toggle="tab" aria-expanded="true">Spj</a></li>				
							<li role="presentation"><a href="#tab_content2" id="model-tab" role="tab" data-toggle="tab" aria-expanded="true">Jaminan</a></li>
							<li role="presentation"><a href="#tab_content3" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Seragam</a></li>
						</ul>
					</div>
					
					<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="spj-tab">
							<table id="table1" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>No</td>
										<td>No Pintu</td>										
										<td>No SPJ</td>										
										<td>No Setoran</td>										
										<td>Tanggal SPJ</td>	
										<td>Tipe</td>									
										<td>Tagihan Wajib</td>
										<td>Status</td>
										<td>Total Tagihan</td>
										<td>Denda</td>
										<td>Payment Total</td>
										<td>Payment Via Cash</td>
										<td>Payment Via Jaminan</td>
										<td>Payment Via CT</td>
										<td>Payment Via Charge Room</td>
										<td>Payment Via EDC</td>
									</tr>
								</thead>
								<tbody>
								<?php
									$a = 1;
									foreach((Array) $arrSpj AS $key => $val){
										echo "<tr>
												<td>".$a."</td>
												<td>".$val['no_pintu']."</td>
												<td>".$val['doc_number']."</td>
												<td>".$val['doc_setoran']."</td>
												<td>".$val['tanggal_spj']."</td>
												<td>".$val['tipe_rental']."</td>
												<td>".$val['tagihan_wajib']."</td>
												<td>".$val['status']."</td>
												<td>".$val['total_tagihan']."</td>
												<td>".$val['denda']."</td>
												<td>".$val['payment_total']."</td> 
												<td>".$val['payment_via_cash']."</td> 
												<td>".$val['payment_via_tabungan']."</td> 
												<td>".$val['payment_via_ct']."</td> 
												<td>".$val['payment_via_charge_room']."</td> 
												<td>".$val['payment_via_edc']."</td>
											</tr>";
											$a++;
									}
									
								?>
								</tbody>
							</table>
							
						</div>
					
						<div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="model-tab">
							<table id="table2" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Doc Number</td>
										<td>Keterangan</td>
										<td>Jaminan Awal</td>										
										<td>Pemotongan / Penambahan</td>
										<td>Jaminan Akhir</td>
										<td>Tanggal</td>
										<td>Nama Pool</td>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach((Array) $arrJaminan AS $key => $val){
									echo "<tr>
											<td>".$val['doc_number']."</td>
											<td>".$val['keterangan']."</td>
											<td>".$val['amount_awal']."</td>
											<td>".$val['amount']."</td>
											<td>".$val['amount_akhir']."</td>
											<td>".$val['created']."</td>
											<td>".$val['name']."</td>
										</tr>";
									}
									?>
								</tbody>
							</table>
							
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content3" aria-labelledby="warna-tab">
							<table id="table3" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Doc Number</td>
										<td>Keterangan</td>
										<td>Tanggal</td>
										<td>Amount Awal</td>
										<td>Amount</td>
										<td>Amount Akhir</td>
										<td>Nama Pool</td>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach((Array) $arrSeragam AS $key => $val){
											echo "<tr>
													<td>".$val['doc_number']."</td>
													<td>".$val['keterangan']."</td>
													<td>".$val['created']."</td>
													<td>".$val['amount_awal']."</td>
													<td>".$val['amount']."</td>
													<td>".$val['amount_akhir']."</td>
													<td>".$val['name']."</td>
												</tr>";
										}
									?>
								</tbody>
							</table>
						
						</div>
						
					</div>
                </div>  
			</div>
		</div>
	</div>
	
</div>

<div class="right_col" role="main">
	
</div>

<!-- /page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/buttons.dataTables.min.css');?>" rel="stylesheet">		
<!-- jQuery -->
<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Datatables -->

<script>
	$(document).ready(function(){
		$('#table1').dataTable();
		$('#table2').dataTable();
		$('#table3').dataTable();
		$('#table4').dataTable();
		$('#table5').dataTable();
		$('#table6').dataTable();		   		   
	});
</script>