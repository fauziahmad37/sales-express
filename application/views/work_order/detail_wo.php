		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile" id="printable">
                <div class="x_title">
					<table style="width:100%">
						<tr>
							<td><?php
								  if($data['status'] !== 'Pending'){
									echo '<h2>Work Order #'.$data['wo_number'].'</h2>';                  
								  }
								  ?>
							</td>
							<td>Tabungan : <?php if($data['type_of_payment'] == 4 || $data['type_of_payment'] == 1){
													echo 0;
												} else if($data['type_of_payment'] == 2){
													if($tabungan == ''){
														echo 'tabungan tidak ditemukan' ;
													} else {
														echo ($tabungan); 
													}
												}
							
							
							// if($tabungan == ''){ 
													
												// }else{ 
													// echo ($tabungan); 
												//} ?>
							</td>
						</tr>
					</table>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content"> 
                	<h4>Status Work Order : <?php echo $data['status'];?></h4>
                	<h4><?php // print_r($data);?></h4>
					<div class="x_panel tile">
						<div class="x_title">
						  <h2>Data Mobil</h2>
						  <?php
						  	if($data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER && (
						  		$this->user['id_privilege'] == Admin::ADMINISTRATOR
						  		|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
						  		|| $this->user['id_privilege'] == Admin::WORKSHOP_SPV
						  		|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR					  								  								  		
						  	)){
								//echo '<div id="ajax-modal-tabungan" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>';						  	
							  	//echo '<ul class="nav navbar-right panel_toolbox"><li><button class="btn btn-info no-print" onclick="cek_tabungan()">Cek Saldo Tabungan</button></li></ul>';
							}
						  ?>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<!-- <div class="card col-md-6 col-sm-6 col-xs-12"> 		 -->
							<div class="col-md-6 col-sm-6 col-xs-12"> 					
								<table class="table borderless" style="width:100%">
									<tr>
										<td style="padding:0px !important"><small>Jenis Kustomer</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['jenis_customer']?></small></td>

										<td style="padding:0px !important"><small>Nama</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['customer']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Model</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['brand']; echo " "; echo $data['model']; ?></small></td>
										
										<td style="padding:0px !important"><small>Pool</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['pool'] ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Warna</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['warna']; ?></small></td>

										<td style="padding:0px !important"><small>No Pintu</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['no_pintu']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>No Rangka</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['no_rangka']; ?></small></td>
										
										<td style="padding:0px !important"><small>Alamat</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo nl2br($data['alamat_cust']); ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>No Mesin</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['no_mesin']; ?></small></td>
										
										<td style="padding:0px !important"><small>No Telp 1</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['telp_cust1']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>No Polisi</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['no_polisi']; ?></small></td>

										<td style="padding:0px !important"><small>No Telp 2</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['telp_cust2']; ?></small></td>
									</tr>
								</table>
							</div>
						</div>
					</div>               
					<div class="x_panel tile">
						<div class="x_title">
						  <h2>Data Work Order</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="col-md-6 col-sm-6 col-xs-12"> 
								<table class="table borderless" style="width:100%">
								<tr>
									<td style="padding:0px !important"><small>Jenis Pembayaran</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['jenis_pembayaran']; ?></small></td>

									<td style="padding:0px !important"><small>Keluhan Pelanggan</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo nl2br($data['request']); ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>Jenis Pekerjaan</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['tipe']; ?></small></td>
									
									<td style="padding:0px !important"><small>Saran Perbaikan Pelanggan</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo nl2br($data['suggestion']); ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>Mulai</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['start_dt']; ?></small></td>
									
									<td style="padding:0px !important"><small>Main Problem</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['problem']; ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>Estimasi Selesai</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['end_dt']; ?></small></td>

									<td style="padding:0px !important"><small>Service Advisor</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['full_name']; ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>Odo KM</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo number_format($data['odo_km']); ?></small></td>

									<td style="padding:0px !important"><small>Teknisi</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['teknisi']; ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>KM Perbaikan Selanjutnya</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo number_format($data['next_odo_km']); ?></small></td>
								</tr>
								</table>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12"> 
								<table class="table borderless" style="width:100%">
								</table>
							</div>
						</div>
					</div>
					<div class="x_panel tile">
						<div class="x_title">
						  <h2>Data Estimasi</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div id="ajax-modal-cancel" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>						
							<div id="ajax-modal-servis" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
							<div id="ajax-modal-detail" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>							
							<div id="ajax-modal-jasa" class="modal fade" role="dialog" tabindex="1" aria-hidden="true" style="display: none;z-index=10;"></div>
							<div id="ajax-modal-sparepart" class="modal fade" role="dialog" tabindex="1" aria-hidden="true" style="display: none;z-index=1050;"></div>							
							<div id="ajax-modal-material" class="modal fade" role="dialog" tabindex="1" aria-hidden="true" style="display: none;z-index=1050;"></div>														
							<div class="col-md-12 col-sm-12 col-xs-12 table-responsive"> 
								<div class="row">
								<?php
									$total_biaya = 0;
									$ct = 1;
									echo '
									<table class="table text-center borderless" style="width:100%;">
										<thead><tr>
											<th class="text-center">No.</th>
											<th class="text-center">Jenis Servis</th>
											<th class="text-center">Kode</th>
											<th class="text-center">Deskripsi</th>
											<th class="text-center">Qty / Jam</th>
											<th class="text-center">Harga per Qty / Jam</th>
											<th class="text-center">Sub Total Biaya</th>';
										if(($data['status'] === 'Pending') && (
											$this->user['id_privilege'] == Admin::ADMINISTRATOR
											|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
											|| $this->user['id_privilege'] == Admin::WORKSHOP_SPV
											|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR																																	
											)) {
											echo '<th class="text-center">#</th>';
										}
										echo '</tr></thead>
										<tbody>';
									foreach((Array) $data_service_est AS $key => $val){
											echo '<tr><td style="padding:0px !important">'.number_format($ct).'</td>
											<td style="padding:0px !important">'.$val['jenis_servis'].'</td>';
											if($val['id_jenis_servis'] == Admin::JENIS_SERVIS_JASA) { //JASA
												echo '<td style="padding:0px !important">'.$val['lts_code'].'</td>
												<td style="padding:0px !important">'.$val['description'].'</td>
												<td style="padding:0px !important" class="text-right">'.($val['qty']).'</td>
												<td style="padding:0px !important" class="text-right">'.number_format($val['price_qty']).'</td>';
											} else if($val['id_jenis_servis'] == Admin::JENIS_SERVIS_SPAREPART) { //SPAREPART
												echo '<td style="padding:0px !important">'.$val['kode_part'].'</td>
												<td style="padding:0px !important">'.$val['sparepart'].'</td>
												<td style="padding:0px !important" class="text-right">'.($val['qty']).'</td>
												<td style="padding:0px !important" class="text-right">'.number_format($val['price_qty']).'</td>';
											} else if($val['id_jenis_servis'] == Admin::JENIS_SERVIS_MATERIAL) { //MATERIAL
												echo '<td style="padding:0px !important">'.$val['kode_material'].'</td>
												<td style="padding:0px !important">'.$val['material'].'</td>
												<td style="padding:0px !important" class="text-right">'.($val['qty']).'</td>
												<td style="padding:0px !important" class="text-right">'.number_format($val['price_qty']).'</td>';
											}
											echo '<td style="padding:0px !important" class="text-right">'.number_format($val['total_price']).'</td>';
											if(($data['status'] === 'Pending') && (
												$this->user['id_privilege'] == Admin::ADMINISTRATOR
												|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
												|| $this->user['id_privilege'] == Admin::WORKSHOP_SPV
												|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR																																	
												)) {
												echo '<td class="text-center"><button class="btn btn-xs btn-info no-print" onclick="edit_estimation('.$val['id'].');">Edit</button>
												<button class="btn btn-xs btn-danger no-print" onclick="delete_estimation('.$val['id'].');">Hapus</button></td>';
											}
											echo'</tr>';									
										$ct++;
										$total_biaya += $val['total_price'];
									}
									$ppn = $total_biaya * Admin::PPN_VAL / 100;
									$total_biaya += $ppn;
									echo '</tbody><tfoot>
									<tr><td style="padding:0px !important" colspan="6"><b>PPN '.Admin::PPN_VAL.'%</b></td><td style="padding:0px !important" class="text-right"><b>'.number_format($ppn).'</b></td></tr>
									<tr><td style="padding:0px !important" colspan="6"><b>TOTAL ESTIMASI BIAYA</b></td><td style="padding:0px !important" class="text-right"><b>'.number_format($total_biaya).'</b></td></tr>
									</tfoot></table>';
								?>
								</div>
								<div class="row">
									<?php
									if(($data['status'] === 'Pending') && (
											$this->user['id_privilege'] == Admin::ADMINISTRATOR
											|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
											|| $this->user['id_privilege'] == Admin::WORKSHOP_SPV
											|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR																																	
											)) {
										 echo '<button class="btn btn-info no-print" id="add_new_estimation">Tambah Estimasi</button>';
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="x_panel tile <?php echo ($data['status'] === 'Pending' ? 'hidden' : '');?>">
						<div class="x_title">
						  <h2>Detail Pekerjaan</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="col-md-12 col-sm-12 col-xs-12 table-responsive"> 
								<div class="row">
								<?php
									$ct_detail = 1;
									$all_finish = true;
									echo '<table class="table borderless text-center" id="table_detail_pekerjaan" style="width:100%;">
											<thead><tr>
											<th class="text-center">No.</th>
											<th class="text-center">Kode LTS</th>
											<th class="text-center">Deskripsi</th>
											<th class="text-center">Flat Rate</th>
											<th class="text-center">Harga per Jam</th>
											<th class="text-center">Sub Total Biaya</th>
											<th class="text-center">Waktu Pengerjaan</th>											
											<th class="text-center">Teknisi</th>											
											<th class="text-center">Status</th>';
									if(($data['status'] === 'Aktif') && (
										$this->user['id_privilege'] == Admin::ADMINISTRATOR 
										|| $this->user['id_privilege'] == Admin::FOREMAN 
										|| $this->user['id_privilege'] == Admin::TOWING_LEADER
										)) {
										echo '<th class="text-center">#</th>';
										echo '<th class="text-center">#</th>';										
									}
									echo '</thead><tbody>';
									foreach((Array) $data_service_detail AS $key => $val){
										echo '<tr><td style="padding:0px !important">'.number_format($ct_detail).'</td>
										<td style="padding:0px !important">'.$val['lts_code'].'</td>
										<td style="padding:0px !important">'.$val['description'].'</td>
										<td style="padding:0px !important" class="text-right">'.number_format($val['qty']).'</td>
										<td style="padding:0px !important" class="text-right">'.number_format($val['price_qty']).'</td>
										<td style="padding:0px !important" class="text-right">'.number_format($val['total_price']).'</td>
										<td style="padding:0px !important" class="text-right" name="'.$val['id'].'" id="elapsed_'.$ct_detail.'">'.(strtotime_to_time($val['elapsed'])).'</td>										
										<td style="padding:0px !important" class="text-right">'.($val['teknisi']).'</td>											
										<td style="padding:0px !important" id="status_txt_'.$val['id'].'" class="status_txt_detail_pekerjaan">'.$val['status'].'</td>';
										if(($data['status'] === 'Aktif') && (
											$this->user['id_privilege'] == Admin::ADMINISTRATOR 
											|| $this->user['id_privilege'] == Admin::FOREMAN 
											|| $this->user['id_privilege'] == Admin::TOWING_LEADER
											)) {
												echo '<td><button class="btn btn-sm btn-success no-print '.($val['status'] !== 'Berjalan' ? 'hide' : '').'" 
													id="btn_selesai_'.$val['id'].'" onclick="end_detail('.$val['id'].');">Selesai</button>'.
												'<button class="btn btn-sm btn-dark no-print '.($val['status'] !== 'Belum Mulai' ? 'hide' : '').'" 
													id="btn_mulai_'.$val['id'].'" onclick="start_detail('.$val['id'].');">Mulai</button>'.
												'<button class="btn btn-sm btn-warning no-print '.($val['status'] !== 'Selesai' ? 'hide' : '').'" 
													id="btn_restart_'.$val['id'].'" onclick="start_detail('.$val['id'].');">Mulai Lagi</button></td>'.														
												'<td><button class="btn btn-xs btn-info no-print" onclick="edit_detail('.$val['id'].');">Edit</button>
												<button class="btn btn-xs btn-danger no-print" onclick="delete_detail('.$val['id'].');">Hapus</button>
												</td>';
										}
										echo'</tr>';											
										if($val['status'] !== 'Selesai') $all_finish = false;
										$ct_detail++;
									}
									echo '</tbody></table>';
								?>
								</div>
								<div class="row">
									<?php
									if(($data['status'] === 'Aktif') && (
										$this->user['id_privilege'] == Admin::ADMINISTRATOR 
										|| $this->user['id_privilege'] == Admin::FOREMAN 
										|| $this->user['id_privilege'] == Admin::TOWING_LEADER
										)) {
										 echo '<button class="btn btn-info no-print" id="add_new_detail">Tambah Pekerjaan</button>';
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="x_panel tile <?php echo ($data['status'] === 'Pending' ? 'hidden' : '');?>">
						<div class="x_title">
						  <h2>Detail Pembelian Barang</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="col-md-12 col-sm-12 col-xs-12 table-responsive"> 
								<div class="row">
								<?php
									$ct_supply = 1;
									$all_finish = true;
									echo '<table class="table borderless text-center" id="table_detail_pekerjaan" style="width:100%;">
											<thead><tr>
											<th class="text-center">No.</th>
											<th class="text-center">Jenis Barang</th>
											<th class="text-center">Kode Barang</th>
											<th class="text-center">Nama Barang</th>
											<th class="text-center">Qty</th>
											<th class="text-center">Harga / Qty</th>
											<th class="text-center">Sub Total Biaya</th>';
									echo '</thead><tbody>';
									foreach((Array) $dataSupply AS $key => $val){
										$is_sparepart = $val['material'] == null;
										$sub_total_harga_supply = $val['harga_satuan'] * $val['qty'];
										echo '<tr><td style="padding:0px !important">'.number_format($ct_supply).'</td>
										<td style="padding:0px !important">'.($is_sparepart ? 'Sparepart' : 'Material').'</td>
										<td style="padding:0px !important">'.($is_sparepart ? $val['kode_part'] : $val['kode_material']).'</td>
										<td style="padding:0px !important">'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>
										<td style="padding:0px !important" class="text-right">'.($val['qty']).'</td>
										<td style="padding:0px !important" class="text-right">'.number_format($val['harga_satuan']).'</td>
										<td style="padding:0px !important" class="text-right">'.number_format($sub_total_harga_supply).'</div>';
										echo'</tr>';											
										$ct_supply++;
									}
									echo '</tbody></table>';
								?>
								</div>
							</div>
						</div>
					</div>
					</div>
				  <?php
					if($data['status'] === 'Cancel'){
						echo '<h4>Alasan Cancel :</h4><p>'.nl2br($data['cancel_reason']).'</p>';				
					}              
				  ?>					
                </div>
              </div>
            </div>
        <?php 
        	if($data['status'] === 'Aktif' && (
				$this->user['id_privilege'] == Admin::ADMINISTRATOR 
				|| $this->user['id_privilege'] == Admin::FOREMAN 
				|| $this->user['id_privilege'] == Admin::TOWING_LEADER
				)) {
				echo '<button class="btn btn-success no-print" '.(!$all_finish ? 'disabled' : '').' id="selesai_btn")>Selesai</button>';
			} 
			if($data['status'] === 'Aktif' && (
				$this->user['id_privilege'] == Admin::ADMINISTRATOR
				|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
				|| $this->user['id_privilege'] == Admin::WORKSHOP_SPV
				|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR																																	
				)) {                
				?><a class="btn btn-info pull-center"  href="<?php echo site_url('/Work_order/print_detail_wo/'.$data['id']);?>" target="_blank"  role = "button">Cetak Work Order</a>   	<?php	
				echo '<button class="btn btn-danger no-print" id="pending_cancel_btn">Cancel</button>';
			} 
			if($data['status'] === 'Pending') {
				echo '<button class="btn btn-success no-print" id="pending_btn" >Buat WO</button>';
				 ?><a class="btn btn-info pull-center"  href="<?php echo site_url('/Work_order/print_detail_wo/'.$data['id']);?>" target="_blank"  role = "button">Cetak Work Order</a>   	<?php	
			} 
			if($data['status'] === 'Pending Cancel' && $this->user['id_privilege'] == Admin::ADMINISTRATOR) {
				echo '<h4>Alasan Cancel :</h4><p>'.nl2br($data['cancel_reason']).'</p>';
				echo '<button class="btn btn-primary no-print" id="cancel_btn">Approved to Cancel</button>';
			}
			if($data['status'] === 'Selesai' && (
				$this->user['id_privilege'] == Admin::ADMINISTRATOR 
				|| $this->user['id_privilege'] == Admin::ADMIN_BILLING
				|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR
				)) {
				echo '<button class="btn btn-primary no-print" id="close_btn">Close WO</button>';
			}
			if($data['status'] === 'Closed'){
				 ?><a class="btn btn-info pull-center"  href="<?php echo site_url('/Work_order/print_detail_wo/'.$data['id']);?>" target="_blank"  role = "button">Cetak Work Order</a>   	<?php		
			}
		?>
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
	<script src="<?php echo base_url('/assets/js/jquery.redirect.js');?>"></script>	
	
	<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
	<!-- Datatables -->
	
    <script>
    	var ct_detail = <?php echo $ct_detail;?>;
		$(document).ready(function() {
			var $modal = $("#ajax-modal-servis"); 
			$("#add_new_estimation").on("click", function(){
				$modal.html("");
				$modal.modal();
				$modal.load('<?php echo site_url('/Work_order/new_estimation');?>',{"id_wo": <?php echo $id_wo;?>, "id_jenis_car": <?php echo $data['id_jenis_car'];?>, 
					"id_model": <?php echo $data['id_model'];?>, "id_jenis_customer" : <?php echo $data['id_jenis_customer'];?>});
			});
			$("#add_new_detail").on("click", function(){
				$('#ajax-modal-detail').html("");			
				$('#ajax-modal-detail').modal();
				$('#ajax-modal-detail').load('<?php echo site_url('/Work_order/new_detail');?>',{"id_wo": <?php echo $id_wo;?>, 
					"id_jenis_car": <?php echo $data['id_jenis_car'];?>, "id_jenis_customer" : <?php echo $data['id_jenis_customer'];?>});
			});
		});
		 
       function edit_estimation(id){
			$("#ajax-modal-servis").html("");
			$("#ajax-modal-servis").modal();
			$("#ajax-modal-servis").load('<?php echo site_url('/Work_order/new_estimation');?>',{"id_wo": <?php echo $id_wo;?>, 
				"id_servis_estimation" : id, "id_model": <?php echo $data['id_model'];?>, "id_jenis_car": <?php echo $data['id_jenis_car'];?>, 
				"id_jenis_customer": <?php echo $data['id_jenis_customer'];?>});
       }
       
       function delete_estimation(id){
       		if(window.confirm("Hapus Estimasi ini?") == true){
				$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'delete' : id});							
       		}
       }
       
       function edit_detail(id){
			$("#ajax-modal-detail").html("");
			$("#ajax-modal-detail").modal();
			$("#ajax-modal-detail").load('<?php echo site_url('/Work_order/new_detail');?>',{"id_wo": <?php echo $id_wo;?>, 
				"id_servis_detail" : id, "id_jenis_car": <?php echo $data['id_jenis_car'];?>, "id_jenis_customer" : <?php echo $data['id_jenis_customer'];?>});
       }

//       function retur_detail(id){
//       		$("#ajax-modal-detail").html("");
//       		$("#ajax-modal-detail").modal();
//       		$("#ajax-modal-detail").load('<?php echo site_url('/Work_order/new_retur'); ?>',{"id_wo": <?php echo $id_wo; ?>, "id_faktur_pengambilan":id});
//       }
       
       function delete_detail(id){
       		if(window.confirm("Hapus Pekerjaan ini?") == true){
				$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'delete_detail' : id});							
       		}
       }
       
       // function cek_tabungan(){
			// $("#ajax-modal-tabungan").html("");
			// $("#ajax-modal-tabungan").modal();
			// $("#ajax-modal-tabungan").load('<?php echo site_url('/Work_order/cek_tabungan');?>',{"id_car": <?php echo $data['id_car'];?>});
		// }


       function start_detail(id){
       		var btn_start = 'btn_mulai_'+id;
       		var btn_restart = 'btn_restart_'+id;       		
       		var btn_end = 'btn_selesai_'+id;      
       		var status_txt = 'status_txt_'+id;
       		var obj = {action : 'start', id_detail : id}
       		$.ajax({
				url: "<?php echo site_url('/Work_order/jobs/');?>",
				type: "POST",
				data: obj ,
				success: function (response) {
				   // you will get response from your php page (what you echo or print)                 
					new PNotify({
					  title: "Sukses",
					  type: "success",
					  text: "Detail Pekerjaan Dimulai!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "green",
					  styling: "bootstrap3"
					});
					$('#'+btn_start).addClass('hide');
					$('#'+btn_restart).addClass('hide');					
					$('#'+btn_end).removeClass('hide');
					$('#'+status_txt).html('Berjalan');
					$('#selesai_btn').prop("disabled", true);
				},
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				   new PNotify({
					  title: "Gagal",
					  type: "alert",
					  text: "Detail Pekerjaan Gagal Terupdate!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "red",
					  styling: "bootstrap3"
					});
				}


			});
       }
       
       function end_detail(id){
       		var btn_restart = 'btn_restart_'+id;
       		var btn_end = 'btn_selesai_'+id; 
       		var status_txt = 'status_txt_'+id;       		      		       		
       		var obj = {action : 'end', id_detail : id}
       		$.ajax({
				url: "<?php echo site_url('/Work_order/jobs/');?>",
				type: "POST",
				data: obj ,
				success: function (response) {
				   // you will get response from your php page (what you echo or print)                 
					new PNotify({
					  title: "Sukses",
					  type: "success",
					  text: "Detail Pekerjaan Selesai!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "green",
					  styling: "bootstrap3"
					});
					$('#'+btn_restart).removeClass('hide');
					$('#'+btn_end).addClass('hide');
					$('#'+status_txt).html('Selesai');	
					
					//CHECK ALL FINISHED
					var all_finished = true;
					$(".status_txt_detail_pekerjaan").each (function () {
					  if($(this).html() !== 'Selesai'){
					  	all_finished = false;;
					  }
					});
					if(all_finished){
						$('#selesai_btn').prop("disabled", false);
					}					
				},
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				   new PNotify({
					  title: "Gagal",
					  type: "alert",
					  text: "Detail Pekerjaan Gagal Terupdate!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "red",
					  styling: "bootstrap3"
					});
				}
			});
       }
       
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
		
		$("#pending_btn").on("click", function(){
			var jenisPembayaran = <?php echo $data['type_of_payment'] ?>;
			var getWoSelesai = '<?php echo $getWoSelesai['status']?>';
			
			if(getWoSelesai == 'Selesai' || getWoSelesai == 'Aktif'){
				alert('Status WO dengan No Pintu Ini Belum di Close Sebelumnya!');
			}else{
				//0 belum lunas, 1 lunas
				var lunas = 0;
				lunas = <?php if($getInvoiceLunas == ''){
								echo 1;
							}else{
								echo $getInvoiceLunas['lunas'];
							} 
						?>;

				if(lunas == 0){
					alert('Invoice dengan No Pintu Ini belum Lunas!');
				}else{
					//1 tunai, 2 tabungan
					if(jenisPembayaran == 2){
						var total = 0;
						var tabungan = 0;
						total = <?php echo ($total_biaya) ?>;
						tabungan = <?php //print_r($tabungan); 
										if($data['type_of_payment'] == 4 || $data['type_of_payment'] == 1){
											echo 100000000;
										} else if($data['type_of_payment'] == 2){
											if($tabungan == ''){
												echo 'tabungan tidak ditemukan' ;
											} else {
												echo ($tabungan);
											}
										}
										
									?>;
						if (tabungan < total){
							alert('tabungan tidak mencukupi, total tabungan = '+tabungan);
						}else{
							if(window.confirm("Buat WO?") == true){
									$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'aktif' : <?php echo $id_wo;?>});
			       				}
						}
						
					} else {
						if(window.confirm("Buat WO?") == true){
							$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'aktif' : <?php echo $id_wo;?>});
						}
					}
				}

				
			}












			// if(jenisPembayaran == 2){
			// 	var total = 0;
			// 	var tabungan = 0;
			// 	total = <?php //echo ($total_biaya) ?>;
			// 	tabungan = <?php //if($tabungan==''){
			// 						echo 0;
			// 					}else{
			// 						foreach ((Array)$tabungan as $key => $val) {
			// 							$saldo = ($val['TAB_SALDO']);
			// 							echo $saldo;
			// 						}
			// 					}
			// 					?>;
			// 	if (tabungan < total){
			// 		alert('tabungan tidak mencukupi, total tabungan = '+tabungan);
			// 	}else{
			// 		if(window.confirm("Buat WO?") == true){
			// 				$.redirect('<?php //echo site_url("/Work_order/detail/".$id_wo);?>', {'aktif' : <?php //echo $id_wo;?>});
	  //      				}
			// 	}
				
			// } else {
			// 	if(window.confirm("Buat WO?") == true){
			// 		$.redirect('<?php //echo site_url("/Work_order/detail/".$id_wo);?>', {'aktif' : <?php //echo $id_wo;?>});
   // 				}
			// }

		});

		$("#pending_cancel_btn").on("click", function(){
			$("#ajax-modal-cancel").html("");
			$("#ajax-modal-cancel").modal();
			$("#ajax-modal-cancel").load('<?php echo site_url('/Work_order/cancel_wo/');?>',{"id_wo": <?php echo $id_wo;?>});
		});
		
		$("#cancel_btn").on("click", function(){
			if(window.confirm("Approved to Cancel?") == true){
				$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'approved_cancel' : <?php echo $id_wo;?>});		
       		}
		});
		
		$("#selesai_btn").on("click", function(){
			if(window.confirm("WO Sudah Selesai?") == true){
				$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'selesai' : <?php echo $id_wo;?>});							
       		}
		});
		
		$("#close_btn").on("click", function(){
			if(window.confirm("Apakah Data di WO Sudah Sesuai?") == true){
				$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'close_wo' : <?php echo $id_wo;?>});							
       		}
		});
		
		var ajaxObj = { //Object to save cluttering the namespace.
			options: {
				url: "<?php echo site_url('/Work_order/get_time_detail/'.$id_wo);?>", 
				dataType: "json" //The type of data tp be returned by the server.
			},
			delay: 60000, //(milliseconds) the interval between successive gets.
			errorCount: 0, //running total of ajax errors.
			errorThreshold: 5, //the number of ajax errors beyond which the get cycle should cease.
			ticker: null, //setTimeout reference - allows the get cycle to be cancelled with clearTimeout(ajaxObj.ticker);
			get: function () { //a function which initiates 
				if (ajaxObj.errorCount < ajaxObj.errorThreshold) {
					ajaxObj.ticker = setTimeout(getElapsedData, ajaxObj.delay);
				}
			},
			fail: function (jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);
				ajaxObj.errorCount++;
			}
		};
		
		function getElapsedData() {
			$.ajax(ajaxObj.options)
				.done(update_elapsed) //fires when ajax returns successfully
			.fail(ajaxObj.fail) //fires when an ajax error occurs
			.always(ajaxObj.get); //fires after ajax success or ajax error
		}
		
		<?php if($data['status'] === 'Aktif'){
			echo 'ajaxObj.get();';
		}
		?>
		
		function update_elapsed(objs){
			$.each(objs, function (j, obj) {
				for(var i = 1 ;i < ct_detail;i++){
					if($('#elapsed_'+i).attr('name') === ''+obj.id){
						$('#elapsed_'+i).html(obj.elapsed);
						break;
					}
				}  
        	});
		}
		
    </script>
    <!-- /Datatables -->
