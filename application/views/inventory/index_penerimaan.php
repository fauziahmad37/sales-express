		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Penerimaan Stok <?php if($id_workshop !== '') echo '( '.array_get($arrWorkshop, $id_workshop, 'id', 'name').' - '.date('M Y', strtotime($date)).')';?></h2>                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Inventory/penerimaan/'); ?>" method="post">
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
								<th class="text-center">Tanggal</th>
								<th class="text-center">Nomor Referensi</th>
								<th class="text-center">Penerima</th>
								<th class="text-center">Terakhir Update</th>								
								<th class="text-center">Status Penerimaan</th>																																							
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr><td>'.date('d M Y', strtotime($val['tgl'])).'</td>'.          
								'<td><a href="'.site_url('/Inventory/detail_add/'.$val['id']).'" class="blue">'.$val['nomor_referensi'].'</a></td>'.
								'<td>'.array_get($data_user, ($val['updated_by'] > 0 ? $val['updated_by'] : $val['input_by']), 'id', 'username').'</td>'.
								'<td>'.($val['updated_dt'] > 0 ? date('d M Y H:i:s', strtotime($val['updated_dt'])) : date('d M Y H:i:s', strtotime($val['created_dt']))).'</td>'.								
								'<td>'.($val['active'] == Admin::STATUS_FAKTUR_PUBLISH ? 'Dicetak' : 'Pending').'</td>';
								echo '</tr>';
								$ct++;
							}
						?>
						</tbody>
					  </table>
					  <a href="<?php echo site_url('Inventory/penerimaan_add');?>" class="btn btn-info">Penerimaan Stok Baru</a>
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
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		}); 
		$('#datatable').dataTable( {} );
	  } );
    </script>
    <!-- /Datatables -->
