		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>List of SPJ Tiara (Surat Perintah Jalan)</h2>
                  <div class="clearfix"></div>
                </div>
				
				<form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Spj/index_tiara/'); ?>" method="post">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
						</label>
						
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="id_pool" id="id_pool" class="form-control" required="required">
								<?php
								function get_array($arr, $id, $str = 'name'){
									foreach((Array) $arr AS $key => $val){
										if($val['id'] === $id){
										return $val[$str];
										}
									}
									return '';
								}							
								if($this->user['id_privilege'] == Admin::ADMINISTRATOR || $this->user['id_privilege'] == Admin::CHECKER) { //ADMINISTRATOR
									echo '<option value="">-- Select One --</option>';
									foreach ((Array) $arrPool as $key => $val){
										echo '<option value="'.$val['id'].'" '.($id_pool !== '' ? ($id_pool === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
									}
								} else {
									echo '<option value="'.$this->user['id_pool'].'">'.get_array($arrPool, $this->user['id_pool']).'</option>';
								}
								?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tanggal Awal<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<div class="input-group date form_date col-md-4" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
								<input class="form-control inputdate" size="auto" type="text" name="bulan" id="bulan" value="<?php echo date('d M Y', strtotime($date));?>" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tanggal Akhir<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<div class="input-group date form_date col-md-4" data-date-format="dd MM yyyy" data-link-field="dtp_input2">
								<input class="form-control inputdate" size="auto" type="text" name="bulanakhir" id="bulanakhir" value="<?php echo date('d M Y', strtotime($dateakhir));?>" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
							</div>
						</div>       
					</div>
					  
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="id_status_invoice" id="id_status_invoice" class="form-control" required="required">
								<option value="Active','Drive','Payment','Paid">Semua</option>
								<option <?php if($id_status_invoice == 'Active')	echo 'selected'; ?> value="Active">Active</option>
								<option <?php if($id_status_invoice == 'Drive') 	echo 'selected'; ?> value="Drive">Drive</option>
								<option <?php if($id_status_invoice == 'Payment') 	echo 'selected'; ?> value="Payment">Payment</option>
								<option <?php if($id_status_invoice == 'Paid') 		echo 'selected'; ?> value="Paid">Paid</option>
								<option <?php if($id_status_invoice == 'Cancelled') echo 'selected'; ?> value="Cancelled">Cancelled</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success" id="search" name="search">Cari</button>
						</div>
					</div>
					
					<div class="ln_solid"></div>
				</form>
                
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>SPJ Number</th>
								<th>No Pintu</th>
								<th>KIP Number</th>
								<th>Driver Name</th>   
								<th>Tipe Rental</th>								
								<th>Created Date</th>
								<th>Penalty Date</th>
								<th>Status</th>
								<th>Creator</th>
								<th>Pool Name</th>
								<th>Action</th>
								<?php if($this->user['id_privilege'] == Admin::ADMINISTRATOR){
									echo '<th>Cancel</th>';
								} ?>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td>'.$val['doc_number'].'</td>'.
								'<td><a href="'.site_url('/Vehicle/vehicle_approval_detail/'.$val['id']).'" class="blue">'.$val['no_pintu'].'</a></td>'.          
								'<td>'.$val['kip_number'].'</td>'.
								'<td>'.$val['driver_name'].'</td>'.						
								'<td>'.$val['tipe_rental'].'</td>'.
								'<td>'.($val['created'] !== null ? date('d-m-Y H:i:s', strtotime($val['created'])) : null).'</td>'.
								'<td>'.($val['jam_mulai_denda'] !== null ? date('d-m-Y H:i:s', strtotime($val['jam_mulai_denda'])) : null).'</td>'.
									'<td>'.$val['status'].'</td>'.
								'<td>'.$val['username'].'</td>'.
								'<td>'.$val['pool_name'].'</td>'.
								'<td><a href="'.site_url('/Spj/cetak_spj/'.$val['id']).'" 
									class="btn-sm btn-warning" role="button">send</a>
									<a href="'.site_url('/Spj/cetak_spj_only/'.$val['id']).'" 
									class="btn-sm btn-info" role="button">print</a>
								</td>';
								if($this->user['id_privilege'] == Admin::ADMINISTRATOR 
									&& $val['status'] == 'Active' || $val['status'] == 'Drive'){
									echo '<td><a href="'.site_url('/Spj/cancel_spj/'.$val['id']).'"><span class="badge badge-danger">x</span></a></td>';
								}
								echo '</tr>';
								$ct++;
							}
						?>
						</tbody>
					</table>
					
                </div>
				
				<div class="">
					<?php 
					echo $this->session->flashdata('notif'); 
					?>
					<a href="<?php echo base_url().'Spj/create_spj_tiara/'; ?>"><button type="submit" class="btn btn-success" id="save" name="save">Add New SPJ (Surat Perintah Jalan)</button></a>
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
    	<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
		<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
		<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 2,
			maxView: 4
		});
       }); 
    </script>
	 <script>
	    $(document).ready(function() {
	    	$('#datatable').dataTable( {
	    		dom: 'Bfrtip',
	    		"pageLength": 25,
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf'
		        ]
		    });
		});
    </script>
    <!-- /Datatables -->
