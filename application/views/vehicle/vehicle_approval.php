		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Vehicle Approval</h2>
                  <div class="clearfix"></div>
                </div>
                
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Pool</th>
								<th>No Pintu</th>
								<th>No Polisi</th>
								<th>Merek</th>   
								<th>Tipe</th>
								<th>Tahun</th>
								<th>Diajukan Oleh</th>																
								<th>Diajukan Tanggal</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td>'.$val['nama_pool'].'</td>'.
								'<td><a href="'.site_url('/Vehicle/vehicle_approval_detail/'.$val['id']).'" class="blue">'.$val['no_pintu'].'</a></td>'.          
								'<td>'.$val['no_polisi'].'</td>'.
								'<td>'.$val['merek'].'</td>'.
								'<td>'.$val['tipe'].'</td>'.
								'<td>'.$val['tahun'].'</td>'.
								'<td>'.$val['full_name'].'</td>'.
								'<td>'.($val['create_dt'] !== null ? date('d-m-Y H:i:s', strtotime($val['create_dt'])) : null).'</td>'.
								'<td>'.$val['status'].'</td>'.
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
			minView: 2,
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
