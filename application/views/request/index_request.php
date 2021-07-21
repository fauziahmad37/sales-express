		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Stok Gudang <?php if($id_workshop !== '') echo '( '.array_get($arrWorkshop, $id_workshop, 'id', 'name').')';?></h2>                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                	<div id="ajax-modal-detail" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Inventory/'); ?>" method="post">
					  <div class="form-group">
						<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="id_workshop" id="id_workshop" class="form-control" required="required">
							<?php
								if($this->user['id_privilege'] == Admin::ADMINISTRATOR) { //ADMINISTRATOR
									echo '<option value="">-- Select One --</option>';
									foreach ((Array) $arrWorkshop as $key => $val){
										echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
									}
								} else {
									echo '<option value="'.$this->user['id_workshop'].'">'.array_get($arrWorkshop, $this->user['id_workshop'], 'id', 'name').'</option>';
								}
							?>
						  </select>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success" id="search" name="search">Cek</button>
						</div>
					  </div>
					  <div class="ln_solid"></div>
				  </form>
				  </div>
				  <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" id="content_absen">
				  		<table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th class="text-center">id</th>
								<th class="text-center">Jenis Barang</th>
								<th class="text-center">Kode Internal</th>
								<th class="text-center">Kode Barang</th>
								<th class="text-center">Nama Barang</th>
								<th class="text-center">Qty</th>								
								<th class="text-center">Harga Jual Sebelum PPN</th>	
								<th class="text-center">Lokasi Part</th>
								<th class="text-center">Car Type</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								$is_sparepart = $val['kode_material'] === null;
								echo '<tr>
								<td>'.$ct.'</td>'.
								'<td>'.$val['id'].'</td>'.
								'<td>'.($is_sparepart ? 'Sparepart' : 'Material').'</td>'.
								'<td>'.$val['internal_code'].'</td>'.          
								'<td>'.($is_sparepart ? $val['kode_part'] : $val['kode_material']).'</td>'.
								'<td>'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>'.
								'<td class="text-right">'.number_format($val['qty']).'</td>'.								
								'<td class="text-right">'.number_format(($is_sparepart ? $val['harga_sparepart'] : $val['harga_material'])).'</td>'.
								'<td>'.$val['loc_part'].'</td>'.
								'<td>'.$val['car_type'].'</td>'.
								'<td><a href="'.site_url('/Request/new_detail/'.$val['id']).'" class="btn btn-sm btn-info" id="add_new_detail">Request</a></td>'.								
								'</tr>';
								$ct++;
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
		<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/dataTables.keyTable.min.js');?>"></script>
		
		<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
		$('#datatable').dataTable({dom: 'Bfrtip', 
			"pageLength": 50
		});

		$("#add_new_detail").on("click", function(){
			$('#ajax-modal-detail').html("");			
			$('#ajax-modal-detail').modal();
			$('#ajax-modal-detail').load('<?php echo site_url('/Work_order/new_detail');?>',{"id_wo": <?php echo $id_wo;?>, 
				"id_jenis_car": <?php echo $data['id_jenis_car'];?>, "id_jenis_customer" : <?php echo $data['id_jenis_customer'];?>});
		});

	  } );
    </script>
    <!-- /Datatables -->
