		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>List Material</h2>                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                	<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
					  <table id="datatable" class="table table-striped dataTable" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Item</th>
								<th>Nama Item</th>
								<th>Part Number/Part Code</th>
								<th>Merk</th>
								<th>Type & Model</th>
								<th>Satuan</th>
								<th>Kode Internal</th>
								<th>Chart Of Account</th>
								<th>Jenis Item</th>
								<th>Gudang</th>
								<th>Jenis Mobil</th>
								<th>Area</th>                   		              		
								<th>Harga Jual</th>
								<th>Update Terakhir</th>
								<th>Active</th>
								<th>Harga Skr Disetujui oleh</th>                    		
								<th>Harga Skr Disetujui pada</th>								
								<th>Status</th>
								<th>Pengajuan Harga Baru</th>
								<th>Diajukan oleh</th>                    		
								<th>Diajukan pada</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr><td>'.$ct.'</td>'.          
								'<td><a href="'.site_url('/Material/detail/'.$val['id']).'" class="blue">'.$val['kode_material'].'</a></td>'.          
								'<td>'.$val['item_name'].'</td>'.
								'<td>'.$val['part_number'].'</td>'.
								'<td>'.$val['merk'].'</td>'.
								'<td>'.$val['type_model'].'</td>'.
								'<td>'.array_get($dataUom, $val['id_uom'], 'id', 'uom').'</td>'.
								//'<td>'.$val['id_uom'].'</td>'.
								'<td>'.$val['internal_code'].'</td>'.
								'<td>'.$val['coa'].'</td>'.
								'<td>'.$val['category_item'].'</td>'.
								//'<td>'.$val['id_gudang'].'</td>'.
								'<td>'.array_get($dataWorkshop, $val['id_gudang'], 'id','name').'</td>'.
								'<td>'.$val['car_type'].'</td>'.
								'<td>'.$val['area'].'</td>'.
								'<td>'.number_format($val['sale_price']).'</td>'.
								'<td>'.date('d M Y, H:i:s', strtotime($val['update_dt'])).'</td>'.
								'<td>'.($val['active'] === '1' ? 'Yes' : 'No').'</td>'.
								'<td>'.($val['sale_price_approved_by'] !== null ? (array_get($dataUser, $val['sale_price_approved_by'], 'id', 'username')) : null).'</td>'.
								'<td>'.($val['sale_price_approved_dt'] !== null ? date('d M Y, H:i:s', strtotime($val['sale_price_approved_dt'])) : null).'</td>'.								
								'<td>'.$val['status'].'</td>'. 
								'<td>'.($val['status'] !== 'Aktif' ? number_format($val['sale_price_proposed']) : null).'</td>'.                    		
								'<td>'.($val['status'] !== 'Aktif' ? (array_get($dataUser, $val['sale_price_proposed_by'], 'id', 'username')) : null).'</td>'.
								'<td>'.($val['status'] !== 'Aktif' ? date('d M Y, H:i:s', strtotime($val['sale_price_proposed_dt'])) : null).'</td>'.
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
                  	echo '<a href="'.site_url("/Material/detail").'"><button class="btn btn-info">Add New Material</button></a>';
                  }
                  ?>
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
			"pageLength": 50,        	
			buttons: [
				'csv', 'excel', 'pdf'
			]});
        } );
    </script>
    <!-- /Datatables -->
