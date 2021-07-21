		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/css/buttons.dataTables.min.css');?>" rel="stylesheet">			
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Summary Report In Out Jenis Sparepart <?php if($id_workshop !== '') echo '( '.get_array($arrWorkshop, $id_workshop).' - '.date('M Y', strtotime($date)).')';?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Inventory/summary_in_out_barang/'); ?>" method="post">
					  <div class="form-group">
						<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="id_workshop" id="id_workshop" class="form-control" required="required">
							<?php
								function get_array($arr, $id, $str = 'name'){
									foreach((Array) $arr AS $key => $val){
										if($val['id'] === $id){
											return $val[$str];
										}
									}
									return '';
								}							
								if($this->user['id_privilege'] == Admin::ADMINISTRATOR) { //ADMINISTRATOR
									echo '<option value="">-- Select One --</option>';
									foreach ((Array) $arrWorkshop as $key => $val){
										echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
									}
								} else {
									echo '<option value="'.$this->user['id_workshop'].'">'.get_array($arrWorkshop, $this->user['id_workshop']).'</option>';
								}
							?>
						  </select>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Bulan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 <div class="input-group date form_date col-md-4" data-date-format="MM yyyy" data-link-field="dtp_input1">
							<input class="form-control inputdate" size="auto" type="text" name="bulan" id="bulan" value="<?php echo date('M Y', strtotime($date));?>" readonly>
							<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
						</div>
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
								<th class="text-center">Jenis Kategory</th>
								<th class="text-center">Qty Lalu</th>
								<th class="text-center">Qty In</th>
								<th class="text-center">Qty Out</th>
								<th class="text-center">Qty Akhir</th>
																																																												
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>
										<td>'.$val['jenis'].'</td>
										<td>'.$val['qty_lalu'].'</td>
										<td>'.$val['qty_in'].'</td>
										<td>'.$val['qty_out'].'</td>
										<td>'.$val['qty_akhir'].'</td>
									</tr>';

								// echo '<tr>'.
								// '<td>'.$val['nomor_referensi'].'</td>'.
								// '<td>'.date('d M Y', strtotime($val['created_dt'])).'</td>'.
								// '<td>'.date('H:i:s', strtotime($val['created_dt'])).'</td>'.								
								// '<td>'.($is_sparepart ? 'Sparepart' : 'Material').'</td>'.          
								// '<td>'.($is_sparepart ? $val['kode_part'] : $val['kode_material']).'</td>'.
								// '<td>'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>'.
								// '<td class="text-right">'.($val['base_qty']).'</td>'.
								// '<td class="text-right">'.($val['var_qty']).'</td>'.
								// '<td class="text-right">'.($val['final_qty']).'</td>'.								
								// '<td class="text-right">'.($val['harga_satuan_jual_beli']).'</td>'.
								// '<td class="text-right">'.($val['diskon_jual_beli']).'</td>'.
								// '<td class="text-right">'.($val['ppn_jual_beli']).'</td>'.
								// '<td class="text-right">'.($val['harga_jual']).'</td>'.
								// '<td class="text-right">'.($val['harga_beli']).'</td>'.																
								// '<td>'.$val['loc_part'].'</td>'.								
								// '<td>'.array_get($data_user, $val['input_by'], 'id', 'username').'</td>'.								
								// '</tr>';
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

		<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
		<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
		<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
		
		<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
		$('#datatable').dataTable( {bSort: false, 
			"pageLength": 50,
			dom: 'Bfrtip', 
			buttons: [
				'csv', 'excel', 'pdf'
			]} );
		 $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		}); 
	  } );
    </script>
    <!-- /Datatables -->
