		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Report HK</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
				  action="<?php echo site_url('/Report/hk/'); ?>" method="post">
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="pool_id" id="pool_id" class="form-control" required="required">
							<?php
								function get_array($arr, $id, $str = 'name'){
									foreach((Array) $arr AS $key => $val){
										if($val['id'] === $id){
											return $val[$str];
										}
									}
									return '';
								}							
								if($this->user['id_privilege'] == Admin::ADMINISTRATOR ||
									$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT
									) { //ADMINISTRATOR
									echo '<option value="">-- Select One --</option>';
									foreach ((Array) $arrPool as $key => $val){
										echo '<option value="'.$val['id'].'" '.($pool_id !== '' ? ($pool_id === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
									}
								} else {
									echo '<option value="'.$this->user['id_pool'].'">'.get_array($arrPool, $this->user['id_pool']).'</option>';
								}
							?>
						  </select>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Bulan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 <div class="input-group date form_date col-md-4" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
							<input class="form-control inputdate" size="auto" type="text" name="bulan" id="bulan" value="<?php echo date('d M Y', strtotime($date));?>" readonly>
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
				</div>
				
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>No Pintu</th>
								<th>No Polisi</th>
								<th>Tipe Mobil</th>
								<th>HK</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								
									
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td>'.$val['no_pintu'].'</td>'. 							
								'<td>'.$val['no_polisi'].'</td>'.	
								'<td>'.$val['tipe'].'</td>'.	
								'<td>'.$val['hk'].'</td>'.
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
			minView: 3,
			maxView: 4
		});
       }); 
    </script>
	 <script>
	    $(document).ready(function() {
	    	$('#datatable').dataTable( {
	    		dom: 'Bfrtip',
	    		"pageLength": 50,
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf'
		        ]
		    });
		});
    </script>
    <!-- /Datatables -->
