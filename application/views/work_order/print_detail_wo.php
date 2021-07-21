<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">
<style>
.tblBorder{
    border-collapse: collapse;
    border: 1px solid black;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
	border-left: 1px solid black;
	border-right: 1px solid black;
}
.uprightTbl * {
    border: none;
    border-collapse: collapse;
    padding: 0;
    margin: 0;
}
</style>

<table style="width:100%" class="uprightTbl">
    <tr class="uprightTbl">
        <th><img src="assets/images/logo_express.jpg" alt="2" style="width:150;height:50px;"></th>
			<?php
			ini_set('display_errors',true);
			?>
            <th><?php
                if($data['status'] !== 'Pending'){
                    echo '<h2>Work Order #'.$data['wo_number'].'</h2>';                  
                }
          	?>
        </th> 
    </tr>
</table>
<table style="width: 100%">
	<tr class="uprightTbl">
		<td> <!--kiri-->
			<table>
				<tr class="uprightTbl"><td><font size="14"><b>PT. EXPRESS TRANSINDO UTAMA</b></font></td></tr>
            	<tr class="uprightTbl"><td><font size="15px"><b>Workshop <?php echo $data['workshop'] ?></b></font></td></tr>
            	<tr class="uprightTbl"><td><font size="12px"><?php echo $data['alamat'] ?></font></td></tr>
			</table>
		</td>
		<td> <!--kanan-->
			<table>
				<tr class="uprightTbl"><td><font size="14"><b><?php echo $data['tipe']; ?></b></font></td></tr>
            	<tr class="uprightTbl"><td><font size="15px"><?php echo $data['jenis_customer']?></font></td></tr>
            	<tr class="uprightTbl"><td><font size="12px">Saldo: </font></td></tr>
			</table>
		</td>
	</tr>
<hr>
</table>
<font><b>Data Mobil</b></font>
<table style="width: 100%; border: 1px solid black">
	<tr class="uprightTbl">
		<td> <!--kiri-->
			<table>
				<tr class="uprightTbl">
					<td><font size="14px">Nama</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['customer']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">Alamat</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo nl2br($data['alamat_cust']); ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">No Telp 1</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['telp_cust1']; ?></font></td>
					
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">No Pintu</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['no_pintu']; ?></font></td>
					
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">No Rangka</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['no_rangka']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">No Mesin</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['no_mesin']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">No Polisi</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['no_polisi']; ?></font></td>
				</tr>
			</table>
		</td>
		<td> <!--kanan-->
			<table>
				<tr class="uprightTbl">
					<td><font size="14px">Model</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['brand']; echo " "; echo $data['model']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">Warna</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['warna']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">Odo KM</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo number_format($data['odo_km']); ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">Mulai</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['start_dt']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">Estimasi Selesai</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['end_dt']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">Service Advisor</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['full_name']; ?></font></td>
				</tr>
				<tr class="uprightTbl">
					<td><font size="14px">Jenis Pembayaran</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo $data['jenis_pembayaran']; ?></font></td>
				</tr>
			</table>
		</td>	
	</tr>
</table>

<font><b>Customer Request</b></font>
<table style="width: 100%; border: 1px solid black">
	<tr class="uprightTbl">
		<td> <!--kiri-->
			<table>
				<tr class="uprightTbl">
					<td><font size="14px">Keluhan Pelanggan</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo nl2br($data['request']); ?></font></td>
				</tr>
			</table>
		</td>
		<td> <!--kanan-->
			<table>
				<tr class="uprightTbl">
					<td><font size="14px">Saran Perbaikan Pelanggan</font></td>
					<td><font size="14px">:</font></td>
					<td><font size="14px"><?php echo nl2br($data['suggestion']); ?></font></td>
				</tr>
			</table>
		</td>	
	</tr>
</table>

<font><b>Data Estimasi</b></font>

<div class="right_col" role="main">
  	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel tile" id="printable">
                <div class="x_content"> 
					<div class="x_panel tile">
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
									<table class="tblBorder" id="table_detail_service_estimasi" style="width:100%">
										<thead><tr>
											<th class="tblBorder"><font size="14px">No.</font></th>
											<th class="tblBorder"><font size="14px">Jenis Servis</font></th>
											<th class="tblBorder"><font size="14px">Kode</font></th>
											<th class="tblBorder"><font size="14px">Deskripsi</font></th>
											<th class="tblBorder"><font size="14px">Qty / Jam</font></th>
											<th class="tblBorder"><font size="14px">Harga per Qty / Jam</font></th>
											<th class="tblBorder"><font size="14px">Sub Total Biaya</font></th>';
										if(($data['status'] === 'Pending') && (
											$this->user['id_privilege'] == Admin::ADMINISTRATOR
											|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
											|| $this->user['id_privilege'] == Admin::WORKSHOP_SPV
											|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR																																	
											)) {
											
										}
										echo '</tr></thead>
										<tbody>';
									foreach((Array) $data_service_est AS $key => $val){
											echo '<tr class="tblBorder" align="center"><td class="tblBorder"><font size="14px">'.number_format($ct).'</font></td>
											<td class="tblBorder"><font size="14px">'.$val['jenis_servis'].'</font></td>';
											if($val['id_jenis_servis'] == Admin::JENIS_SERVIS_JASA) { //JASA
												echo '<td class="tblBorder"><font size="14px">'.$val['lts_code'].'</font></td>
												<td class="tblBorder"><font size="14px">'.$val['description'].'</font></td>
												<td class="tblBorder"><font size="14px">'.number_format($val['qty']).'</font></td>
												<td class="tblBorder"><font size="14px">'.number_format($val['price_qty']).'</font></td>';
											} else if($val['id_jenis_servis'] == Admin::JENIS_SERVIS_SPAREPART) { //SPAREPART
												echo '<td class="tblBorder"><font size="14px">'.$val['kode_part'].'</font></td>
												<td class="tblBorder"><font size="14px">'.$val['sparepart'].'</font></td>
												<td class="tblBorder"><font size="14px">'.number_format($val['qty'],2).'</font></td>
												<td class="tblBorder"><font size="14px">'.number_format($val['price_qty']).'</font></td>';
											} else if($val['id_jenis_servis'] == Admin::JENIS_SERVIS_MATERIAL) { //MATERIAL
												echo '<td class="tblBorder"><font size="14px">'.$val['kode_material'].'</font></td>
												<td class="tblBorder"><font size="14px">'.$val['material'].'</font></td>
												<td class="tblBorder"><font size="14px">'.number_format($val['qty']).'</font></td>
												<td class="tblBorder"><font size="14px">'.number_format($val['price_qty']).'</font></td>';
											}
											echo '<td class="tblBorder"><font size="14px">'.number_format($val['total_price']).'</font></td>';
											if(($data['status'] === 'Pending') && (
												$this->user['id_privilege'] == Admin::ADMINISTRATOR
												|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
												|| $this->user['id_privilege'] == Admin::WORKSHOP_SPV
												|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR																																	
												)) {
												
											}
											echo'</tr>';									
										$ct++;
										$total_biaya += $val['total_price'];
									}
									$ppn = $total_biaya * Admin::PPN_VAL / 100;
									$total_biaya += $ppn;
									echo '</tbody><tfoot>
									<tr class="tblBorder"><td class="tblBorder" colspan="6"><font size="14px"><b>PPN '.Admin::PPN_VAL.'%</b></font></td><td class="tblBorder"><font size="14px"><b>'.number_format($ppn).'</b></font></td></tr>
									<tr class="tblBorder"><td class="tblBorder" colspan="6"><font size="14px"><b>TOTAL ESTIMASI BIAYA</b></font></td><td class="tblBorder"><font size="14px"><b>'.number_format($total_biaya).'</b></font></td></tr>
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
										 
									}
									?>
								</div>
							</div>
						</div>
					</div>

					</div>			
                </div>
              </div>
            </div>
        </div>
<br>
<font><b>Term & Condition :</b></font>
<table style="width: 100%; border: 1px solid black">
	<tr class="uprightTbl">
		<td>
			 <font size="12px">- Pembayaran dan pembelian part sesuai SK Direksi No: 0009/SK-DIR/OPS/IV/2017</font>
		</td>
	</tr>
	<tr class="uprightTbl">
		<td>
			 <font size="12px">- Jaminan Service Umum 1.000 km atau 5 hari (Tune Up, Ganti Kopling, Service Rem, Ganti Oli, Suspensi)</font>
		</td>
	</tr>
	<tr class="uprightTbl">
		<td>
			 <font size="12px">- Jaminan Engine Overhoul 5.000 Km atau 25 Hari</font>
		</td>
	</tr>
</table>
<br>
<br>
<table style="width: 100%">
	<tr align="center">
		<td>Customer</td>
		<td>Service Advisor</td>
	</tr>
	<tr align="center">
		<td><br><br></td>
		<td><br><br></td>
		<td><br><br></td>
		<td><br><br></td>
	</tr>
	<tr align="center">
		<td>(.................)</td>
		<td>(<?php echo $data['full_name']; ?>)</td>
	</tr>
</table>



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
       
       function delete_detail(id){
       		if(window.confirm("Hapus Pekerjaan ini?") == true){
				$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'delete_detail' : id});							
       		}
       }
       
       function cek_tabungan(){
			$("#ajax-modal-tabungan").html("");
			$("#ajax-modal-tabungan").modal();
			$("#ajax-modal-tabungan").load('<?php echo site_url('/Work_order/cek_tabungan');?>',{"id_car": <?php echo $data['id_car'];?>});
		}


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
			if(jenisPembayaran == '1'){
				if (window.confirm("Buat WO?") == true) {
					$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo) ?>', {'aktif' : <?php echo $id_wo; ?>});
				} 
			} else {
				var jenisCustomer =  '<?php echo $data['jenis_customer'] ?>';
				if(jenisCustomer == 'Reguler'){
					var total = 0;
					var tabungan = 0;
					total = <?php echo $total_biaya ?>;
					tabungan = <?php echo '1000000'
									// foreach ((Array)$jsonTab as $key => $value) {
		       //         					echo $value['TAB_SALDO'];
	        //          				}
								?>;

					if (tabungan < total){
						alert('tabungan tidak mencukupi, total tabungan = '+tabungan);
					}else{
						if(window.confirm("Buat WO?") == true){
							$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'aktif' : <?php echo $id_wo;?>});
	       				}
					}
				}else{
					if(window.confirm("Buat WO?") == true){
						$.redirect('<?php echo site_url("/Work_order/detail/".$id_wo);?>', {'aktif' : <?php echo $id_wo;?>});
	       			}
				}
			}

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
