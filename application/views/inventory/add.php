		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>List Jasa</h2>                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                	<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
					  <table id="datatable" class="table table-striped dataTable" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode LTS</th>
								<th>Deskripsi Jasa</th>                    		              		
								<th>Jenis</th>
								<th>Flat Rate</th>
								<th>Harga Per Jam</th>
								<th>Update Terakhir</th> 
								<th>Active</th>
								<th>Harga Skr Disetujui oleh</th>                    		
								<th>Harga Skr Disetujui pada</th>								
								<th>Status</th>
								<th>Pengajuan Harga Baru per Jam</th>
								<th>Diajukan oleh</th>                    		
								<th>Diajukan pada</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr><td>'.$ct.'</td>'.          
								'<td><a href="'.site_url('/Service/detail/'.$val['id']).'" class="blue">'.$val['lts_code'].'</a></td>'.          
								'<td>'.$val['description'].'</td>'.             		       		
								'<td>'.$val['jenis'].'</td>'.             		       										
								'<td>'.number_format($val['flat_rate']).'</td>'.
								'<td>'.number_format($val['hourly_price']).'</td>'.
								'<td>'.date('d M Y, H:i:s', strtotime($val['update_dt'])).'</td>'.
								'<td>'.($val['active'] === '1' ? 'Yes' : 'No').'</td>'.
								'<td>'.($val['hourly_price_approved_by'] !== null ? (array_get($dataUser, $val['hourly_price_approved_by'], 'id', 'username')) : null).'</td>'.
								'<td>'.($val['hourly_price_approved_dt'] !== null ? date('d M Y, H:i:s', strtotime($val['hourly_price_approved_dt'])) : null).'</td>'.																
								'<td>'.$val['status'].'</td>'. 
								'<td>'.($val['status'] !== 'Aktif' ? number_format($val['hourly_price_proposed']) : null).'</td>'.                    		
								'<td>'.($val['status'] !== 'Aktif' ? (array_get($dataUser, $val['hourly_price_proposed_by'], 'id', 'username')) : null).'</td>'.
								'<td>'.($val['status'] !== 'Aktif' ? date('d M Y, H:i:s', strtotime($val['hourly_price_proposed_dt'])) : null).'</td>'.
								'</tr>';
								$ct++;
							}
						?>
						</tbody>
					  </table>
					</div>
					<?php
                  if(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR
						|| $this->user['id_privilege'] == Admin::SCM_ADMIN
                  ){
                  	echo '<a href="'.site_url("/Service/detail").'"><button class="btn btn-info">Add New LTS</button></a>';
                  }
                  ?>
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
    	<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
		<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
		<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
        $('#datatable').dataTable({dom: 'Bfrtip', 
			buttons: [
				'csv', 'excel', 'pdf'
			]});
        } );
    </script>
    <!-- /Datatables -->
