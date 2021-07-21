		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile" id="print_area">

            	

                <div class="x_title">
                  <div class="x_panel">
					  <div class="x_title">
						<h2>Supply Slip</h2>
						<span class="right"><a href="<?php echo site_url('/Inventory/pengambilan');?>" class="btn btn-danger no-print">List Pengambilan</a></span>
						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" method="post">
						<div class="col-md-6 col-sm-6 col-xs-12"> 
	            			<table class="table borderless" style="width:100%">
		            			<tr>
		            				<td style="padding:0px !important">Workshop</td>
		            				<td style="padding:0px !important">:</td>
		            				<td style="padding:0px !important"><input type="hidden" class="form-control col-md-7 col-xs-12" id="id_faktur" readonly value="<?php echo $data['id'];?>">
		            				<?php //echo $data['id'];?><?php echo array_get($arrWorkshop, $data['id_workshop'], 'id', 'name');?></td>
		            		
		            			<?php
						  			if($data['active'] == Admin::STATUS_FAKTUR_PUBLISH){
							  			echo '
				            				<td style="padding:0px !important">Nomor Supply Slip</td>
				            				<td style="padding:0px !important">:</td>
				            				<td style="padding:0px !important">'.$data['nomor_referensi'].'</td>
				            			</tr>';
							  		}
						  		?>
		            			<tr>
		            				<td style="padding:0px !important">Nomor WO</td>
		            				<td style="padding:0px !important">:</td>
		            				<td style="padding:0px !important"><?php echo $data['wo_number'];?></td>
		            		<?php
		            		  	if($data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER 
		            		  		|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE
		            		  		|| $data['id_jenis_customer'] == Admin::CUSTOMER_TIPE_TIARA){
		            		  		echo '
		            				<td style="padding:0px !important">No Pintu</td>
		            				<td style="padding:0px !important">:</td>
		            				<td style="padding:0px !important">'.$data['no_pintu'].'</td>';
		            			}
		            		?>
		            			</tr>
		            			<tr>
		            				<td style="padding:0px !important">Tanggal WO</td>
		            				<td style="padding:0px !important">:</td>
		            				<td style="padding:0px !important"><?php echo date('d M Y H:i:s', strtotime($data['created_dt']));?></td>
		            			
		            		<?php
		            			if($data['active'] == Admin::STATUS_FAKTUR_PUBLISH){
						  			echo '
						  				<td style="padding:0px !important">Dicetak Oleh</td>
						  				<td style="padding:0px !important">:</td>
						  				<td style="padding:0px !important">'.array_get($data_user, $data['updated_by'], 'id', 'username').'</td>
						  			</tr>';
						  			echo '<tr>
						  				<td style="padding:0px !important">Dicetak pada</td>
						  				<td style="padding:0px !important">:</td>
						  				<td style="padding:0px !important">'.date('d M Y H:i:s', strtotime($data['updated_dt'])).'</td>
						  				</tr>
						  			';
							  		echo '<a href="javascript:void(0);" class="btn btn-dark no-print" id="print_btn">Cetak</a>';
						  		}else if($data['active'] == Admin::STATUS_FAKTUR_PENDING){
							  		echo '<div class="form-group left">
										<div>
								  			<a href="javascript:void(0);" class="btn btn-success" id="add_new_detail">Tambah Item</a>';
							  		if(Count($data_detail) > 0) {
								 		echo '<a href="'.site_url('/Inventory/publish_pengambilan/'.$data['id']).'" class="btn btn-dark" id="publish_detail" onclick="return confirm(\'Apakah barang sudah sesuai?\')">Cetak Supply Slip</a>';
							  		}
							  		echo '</div>
							  		</div>';
						  		}
						  		  
						  ?>
		            			
		            				
	            			</table>

            			</div>
						  <!-- <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" class="form-control col-md-7 col-xs-12" id="id_faktur" readonly value="<?php //echo $data['id'];?>">
								<input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?php //echo array_get($arrWorkshop, $data['id_workshop'], 'id', 'name');?>">
							</div>
						  </div> -->
						  <!-- <?php
						 // if($data['active'] == Admin::STATUS_FAKTUR_PUBLISH){
						 // echo '<div class="form-group">
							// <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Supply Slip
							// </label>
							// <div class="col-md-6 col-sm-6 col-xs-12">
							// 	<input type="text" id="nomor_referensi" name="nomor_referensi" required="required" 
							// 		value="'.$data['nomor_referensi'].'" class="form-control col-md-7 col-xs-12" readonly>
							// </div>
						 //  </div>';
						  //}
						  ?> -->
						 <!--  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor WO
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="wo_number" name="wo_number" required="required" 
									value="<?php //echo $data['wo_number'];?>" class="form-control col-md-7 col-xs-12" readonly>
							</div>
						  </div> -->
						 <!--  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl">Tanggal WO
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="wo_number" name="wo_number" required="required" 
									value="<?php //echo $data['wo_number'];?>" class="form-control col-md-7 col-xs-12" readonly>
							</div>       
						  </div> -->
						  <!-- <?php 
						  // if($data['active'] == Admin::STATUS_FAKTUR_PENDING){
							 //  echo '<div class="form-group">
								// <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
								//   <a href="javascript:void(0);" class="btn btn-success" id="add_new_detail">Tambah Item</a>';
							 //  if(Count($data_detail) > 0) {
								//   echo '<a href="'.site_url('/Inventory/publish_pengambilan/'.$data['id']).'" class="btn btn-dark" id="publish_detail" onclick="return confirm(\'Apakah barang sudah sesuai?\')">Cetak Supply Slip</a>';
							 //  }
							 //  echo '</div>
							 //  </div>';
						  // } else if($data['active'] == Admin::STATUS_FAKTUR_PUBLISH){
						  // 	echo '<div class="form-group">
								// <label class="control-label col-md-3 col-sm-3 col-xs-12">Dicetak oleh 
								// </label>
								// <div class="col-md-6 col-sm-6 col-xs-12">
								// 	<input type="text" class="form-control col-md-7 col-xs-12" value="'.array_get($data_user, $data['updated_by'], 'id', 'username').'" readonly>
								// </div>
							 //  </div>';
							 //  echo '<div class="form-group">
								// <label class="control-label col-md-3 col-sm-3 col-xs-12">Dicetak pada 
								// </label>
								// <div class="col-md-6 col-sm-6 col-xs-12">
								// 	<input type="text" class="form-control col-md-7 col-xs-12" value="'.date('d M Y H:i:s', strtotime($data['updated_dt'])).'" readonly>
								// </div>
							 //  </div>';
							 //  echo '<a href="javascript:void(0);" class="btn btn-dark no-print" id="print_btn">Cetak</a>';
						 // }
						  ?> -->
						</form>
					</div>  
					</div>                                                   
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                	<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                	<div id="ajax-modal-detail" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
                	<div id="ajax-modal-barang" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>                	
					  <table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Jenis Barang</th>
								<th class="text-center">Kode Barang</th>
								<th class="text-center">Nama Barang</th>
								<th class="text-center">Qty</th>								                    		              		
								<th class="text-center">Harga / Qty</th>
								<th class="text-center">Total</th>
								<!-- <th class="text-center">Lokasi Part</th> -->
							<?php 
								if($data['active'] == Admin::STATUS_FAKTUR_PENDING){	
									echo '<th class="text-center">#</th>';
								}
							?>																																								
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							$total_qty = 0;
							$grand_total = 0;														
							foreach ((Array) $data_detail AS $key => $val) { 
								$is_sparepart = $val['kode_part'] !== null;
								$total = $val['harga_satuan'] * $val['qty'];
								echo '<tr><td style="padding:0px !important">'.$ct.'</td>'.          
								'<td style="padding:0px !important">'.($is_sparepart ? 'Sparepart' : 'Material').'</td>'.          
								'<td style="padding:0px !important">'.($is_sparepart ? $val['kode_part'] : $val['kode_material']).'</td>'.             		       		
								'<td style="padding:0px !important">'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>'.
								'<td style="padding:0px !important" class="text-right">'.($val['qty']).'</td>'.
								'<td style="padding:0px !important" class="text-right">'.number_format($val['harga_satuan']).'</td>'.						
								'<td style="padding:0px !important" class="text-right">'.number_format($total).'</td>';
								// '<td style="padding:0px !important">'.$val['loc_part'].'</td>';
								if($data['active'] == Admin::STATUS_FAKTUR_PENDING){	
									echo '<td style="padding:0px !important">
										<a href="javascript:void(0);" class="btn btn-sm btn-info" onclick="edit_detail('.$val['id'].');">Edit</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="delete_detail('.$val['id'].');">Delete</a>
									</td>';
								}																								
								echo '</tr>';
								$ct++;
								$total_qty += $val['qty'];
								$grand_total += $total;								
							}
							echo '</tbody>';
							if(Count($data_detail) > 0) {
								echo '<tfoot>
									<th style="padding:0px !important" colspan="4" class="text-right">Total Qty</th><th style="padding:0px !important" class="text-right">'.($total_qty).'</th>
									<th style="padding:0px !important" style="padding:0px !important" class="text-right">Grand Total</th><th style="padding:0px !important" class="text-right">'.number_format($grand_total).'</th><th style="padding:0px !important" colspan="2"></th>
									</tfoot>';
							}
						?>
						
					  </table>					  
					</div>
                </div>
              </div>
            </div>
        </div>
		</div>
	  </div>
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
		<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>		
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
      	$("#add_new_detail").on("click", function(){
			$('#ajax-modal-detail').html("");			
			$('#ajax-modal-detail').modal();
			$('#ajax-modal-detail').load('<?php echo site_url('/Inventory/add_new_item_detail_pengambilan');?>',
				{"id_faktur": <?php echo $data['id'];?>, "id_workshop": <?php echo $data['id_workshop'];?>});
		});
        $("#print_btn").on("click",function() {
			 var printContents = document.getElementById('print_area').innerHTML;
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
       } );
       function edit_detail(id){
			$('#ajax-modal-detail').html("");			
			$('#ajax-modal-detail').modal();
			$('#ajax-modal-detail').load('<?php echo site_url('/Inventory/add_new_item_detail_pengambilan/');?>'+id,
				{"id_faktur": <?php echo $data['id'];?>, "id_workshop": <?php echo $data['id_workshop'];?>});
		}
		
		function delete_detail(id){
			if(confirm('Apakah Anda yakin akan menghapus barang ini?')){
				location.replace('<?php echo site_url('/Inventory/delete_detail_pengambilan_barang/'.$data['id']);?>'+'?id='+id);
			}
		}		
    </script>
    <!-- /Datatables -->
