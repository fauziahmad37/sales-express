		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Unit Rekondisi </h2>
                  <div class="clearfix"></div>
                </div>
               
				
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomer Mesin</th>
								<th>Nomer Rangka</th>
								<th>Nomer Pintu</th>
								<th>No Polisi</th>
								<th>Merek Mobil</th>
								<th>Warna</th>
								<th>Jenis Rekondisi</th>
																					
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td>'
									.'<a href="'.site_url("/C_data_armada/detail_data/$val[id]/$val[jenis_rekondisi]").'">'.$val['no_mesin'].'</a>'.
								'</td>'.
								'<td>'.$val['no_rangka'].'</td>'.
								'<td>'.$val['no_pintu'].'</td>'.
								'<td>'.$val['no_polisi'].'</td>'.
								'<td>'.$val['model'].'</td>'.
								'<td>'.$val['warna_rekondisi'].'</td>'.
								'<td>'.$val['jenis_rekondisi'].'</td>'.										                    		                    		
								'</tr>';
								$ct++;
							}
						?>
						</tbody>
					</table>
					<?php
					if(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR
						|| $this->user['id_privilege'] == Admin::SERVICE_ADVISOR
					){
						echo '<a href="'.site_url('/C_data_armada/tambah_data').'"><button class="btn btn-info">Tambah Data</button></a>';
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
		<!-- jQuery -->
		<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
		<!-- NProgress -->
		<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
    	<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
       $('#datatable').dataTable( {});
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 2,
			maxView: 4
		}); 
       } ); 
    </script>

    
    <!-- /Datatables -->
