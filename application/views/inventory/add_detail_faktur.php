		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <div class="x_panel">
					  <div class="x_title">
						<h2>Penerimaan Stok Gudang</h2>
						<span class="right"><a href="<?php echo site_url('/Inventory/penerimaan');?>" class="btn btn-danger">List Penerimaan</a></span>
						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" method="post">
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" class="form-control col-md-7 col-xs-12" id="id_faktur" readonly value="<?php echo $data['id'];?>">
								<input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?php echo array_get($arrWorkshop, $data['id_workshop'], 'id', 'name');?>">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Referensi <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nomor_referensi" name="nomor_referensi" required="required" 
									value="<?php echo $data['nomor_referensi'];?>" class="form-control col-md-7 col-xs-12"
									<?php echo ($data['active'] == Admin::STATUS_FAKTUR_PUBLISH ? 'readonly':'')?>>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl">Tanggal Penerimaan<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							 <div class="input-group date form_date col-md-4" data-date-format="yyyy-mm-dd" data-link-field="dtp_input1">
								<input class="form-control inputdate" size="auto" type="text" name="tgl" id="tgl" value="<?php echo $data['tgl'];?>" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
							</div>
							</div>       
						  </div>
						  <?php 
						  if($data['active'] == Admin::STATUS_FAKTUR_PENDING){
							  echo '<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
								  <a href="javascript:void(0);" class="btn btn-info" id="update_detail">Update Nomor dan Tanggal</a>
								  <a href="javascript:void(0);" class="btn btn-success" id="add_new_detail">Tambah Item</a>';
							  if(Count($data_detail) > 0) {
								  echo '<a href="'.site_url('/Inventory/publish_penerimaan/'.$data['id']).'" class="btn btn-dark" id="publish_detail" onclick="return confirm(\'Apakah semua barang sudah di input?\')">Publish</a>';
							  }
							  echo '</div>
							  </div>';
						  } else if($data['active'] == Admin::STATUS_FAKTUR_PUBLISH){
						  	echo '<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Dicetak oleh 
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control col-md-7 col-xs-12" value="'.array_get($data_user, $data['updated_by'], 'id', 'username').'" readonly>
								</div>
							  </div>';
							  echo '<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Dicetak pada 
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control col-md-7 col-xs-12" value="'.date('d M Y H:i:s', strtotime($data['updated_dt'])).'" readonly>
								</div>
							  </div>';
						  }
						  ?>
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
								<th class="text-center">Internal Code</th>
								<th class="text-center">Nama Barang</th>
								<th class="text-center">Qty</th>								                    		              		
								<th class="text-center">Harga / Qty</th>
								<th class="text-center">Sub Total</th>								
								<th class="text-center">Diskon</th>
								<th class="text-center">PPN</th>
								<th class="text-center">Total</th>
								<th class="text-center">Lokasi Part</th>
							<?php
								if($data['active'] == Admin::STATUS_FAKTUR_PENDING)	{
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
								$sub_total = $val['harga_satuan'] * $val['qty'];
								$total = $sub_total - ($sub_total * $val['diskon'] / 100);
								$total = $total + ($total * $val['ppn'] / 100);
								echo '<tr><td>'.$ct.'</td>'.          
								'<td>'.($is_sparepart ? 'Sparepart' : 'Material').'</td>'.          
								'<td>'.($is_sparepart ? $val['kode_part'] : $val['kode_material']).'</td>'.             		       		
								'<td>'.($is_sparepart ? $val['internal_code'] : $val['internal_code']).'</td>'.             		       		
								'<td>'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>'.
								'<td class="text-right">'.number_format($val['qty']).'</td>'.
								'<td class="text-right">'.number_format($val['harga_satuan']).'</td>'.
								'<td class="text-right">'.number_format($sub_total).'</td>'.
								'<td class="text-right">'.number_format($val['diskon']).'%</td>'.
								'<td class="text-right">'.number_format($val['ppn']).'%</td>'.								
								'<td class="text-right">'.number_format($total).'</td>'.
								'<td>'.$val['loc_part'].'</td>';
								if($data['active'] == Admin::STATUS_FAKTUR_PENDING){	
									echo '<td>
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
							if(Count($data_detail) > 0){
								echo '<tfoot>
									<th colspan="4" class="text-right">Total Qty</th><th class="text-right">'.number_format($total_qty).'</th>
									<th colspan="4" class="text-right">Grand Total</th><th class="text-right">'.number_format($grand_total).'</th><th colspan="2"></th>
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
			$('#ajax-modal-detail').load('<?php echo site_url('/Inventory/add_new_item_detail');?>',
				{"id_faktur": <?php echo $data['id'];?>, "id_workshop": <?php echo $data['id_workshop'];?>});
		});
		
		$("#update_detail").on("click", function(){
			var id_faktur = $('#id_faktur').val();
			var no_ref = '' + $('#nomor_referensi').val();
			var tgl = '' + $('#tgl').val();
			
			if(!id_faktur || no_ref === '' || tgl === '') return false;
			
			var obj = {id: id_faktur, nomor_referensi: no_ref, tgl: tgl};

			$.ajax({
				url: "<?php echo site_url('/Inventory/update_detail_penerimaan/');?>",
				type: "POST",
				data: obj,
				success: function (response) {
				   // you will get response from your php page (what you echo or print)                 
					new PNotify({
					  title: "Sukses",
					  type: "success",
					  text: "Nomor Referensi dan Tanggal Penerimaan sudah diupdate!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "green",
					  styling: "bootstrap3"
					});
				},
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				   new PNotify({
					  title: "Gagal",
					  type: "alert",
					  text: "Referensi dan Tanggal Penerimaan Gagal Terupdate!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "red",
					  styling: "bootstrap3"
					});
				}


			});
		});
		
		$('.form_date').datetimepicker({
			autoclose: 1,
			startView: 2,
			minView: 2
		});	
        } );
        function edit_detail(id){
			$('#ajax-modal-detail').html("");			
			$('#ajax-modal-detail').modal();
			$('#ajax-modal-detail').load('<?php echo site_url('/Inventory/add_new_item_detail/');?>'+id,
				{"id_faktur": <?php echo $data['id'];?>, "id_workshop": <?php echo $data['id_workshop'];?>});
		}
		
		function delete_detail(id){
			if(confirm('Apakah Anda yakin akan menghapus barang ini?')){
				location.replace('<?php echo site_url('/Inventory/delete_detail_penerimaan_barang/'.$data['id']);?>'+'?id='+id);
			}
		}
    </script>
    <!-- /Datatables -->
