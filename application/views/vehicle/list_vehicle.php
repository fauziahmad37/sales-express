		<!-- page content -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Vehicle </h2>
                  <div class="clearfix"></div>
                </div>
				
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>No Polisi</th>
								
								<th>Tahun</th>  
								<th>Unit Bisnis</th>  
								<th>Location</th>  
								<th>Alamat</th>  
								<th>Tipe</th>  
								<th>No Rangka</th>  
								<th>No Mesin</th> 
								<th>Posisi BPKB</th> 
								<th>PT</th> 
								<th>Harga Dasar</th> 
								<th>Harga Dasar Khusus</th> 
								<th>Komisi</th> 
								<th>Biaya Penjualan</th> 
								<th>Price List</th> 
								<th>Kondisi</th> 
								<th>Status</th> 
								
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) {
							?>	<tr>
									<td><?php echo $ct; ?></td>
									
									<td>
										<a href="<?php echo site_url('/Vehicle/index/'.$val['id']); ?>" class="blue"><?php echo $val['no_polisi']; ?></a>
									</td>          
									<td><?php echo $val['tahun']; ?></td>
									<td><?php echo $val['unit_bisnis'];?></td>
									<td><?php echo $val['location']; ?></td>
									<td><?php echo $val['alamat']; ?></td>
									<td><?php echo $val['tipe']; ?></td>
									<td><?php echo $val['no_rangka']; ?></td>
									<td><?php echo $val['no_mesin']; ?></td>
									<td><?php echo $val['posisi_bpkb']; ?></td>
									<td><?php echo $val['pt']; ?></td>
									<td><?php echo number_format($val['harga_dasar']); ?></td>
									<td><?php echo number_format($val['harga_dasar_khusus']); ?></td>
									<td><?php echo number_format($val['komisi']); ?></td>
									<td><?php echo number_format($val['biaya_penjualan']); ?></td>
									<td><?php echo number_format($val['price_list']); ?></td>
									<td><?php echo $val['kondisi']; ?></td>
									<td><?php echo $val['status_unit']; ?></td>
								</tr>
						<?php $ct++; 
							}
							?>
						</tbody>
					</table>
                </div>
				
				<div class="">
					<a href="<?php echo base_url().'Vehicle/'; ?>"><button type="submit" class="btn btn-success" id="save" name="save">Add New Vehicle</button></a>
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
