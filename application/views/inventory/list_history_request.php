<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css'); ?>">
	<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel tile">
					<div class="x_title">
						<h2>List History Request</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- <button class="btn btn-success">History Request</button> -->
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
							<table id="datatable" class="table table-striped dataTable" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Internal</th>
										<th>Kode Part</th>
										<th>Name</th>
										<th>Harga</th>
										<th>Pool Request</th>
										<th>Pool Tujuan</th>
										<th>Jumlah Permintaan</th>
										<th>Jumlah di Approve</th>
										<th>Tanggal Permintaan</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$ct = 1;
									foreach((Array) $data As $key => $val){
								?>
										<tr>
											<td><?php echo $ct;?></td>
											<td><a href="<?php echo site_url('/Inventory/detail_request/'.$val['id']);?>" class="blue"><?php echo $val['internal_code'] ;?></a></td>
											<td><?php echo $val['kode_part']; ?></td>
											<td><?php echo $val['item_name']; ?></td>
											<td><?php echo $val['sale_price']; ?></td>
											<td><?php echo $val['pool_request_name']?></td>
											<td><?php echo $val['pool_approve_name']; ?></td>
											<td><?php echo $val['qty_request']?></td>
											<td><?php echo $val['qty_transfered']; ?></td>
											<td><?php echo date('d M Y, H:i:s', strtotime($val['request_dt']))?></td>
										</tr>
								<?php
									$ct++;
									}
								?>
								</tbody>
							</table>
						</div>
						<!-- <?php
							// if($this->user['id_privilege'] == Admin::ADMINISTRATOR || $this->user['id_privilege'] == Admin::SCM_ADMIN){
							// 	echo '<a href="'.site_url("/Sparepart/detail").'"><button class="btn btn-info">Add New Sparepart</button></a>';
							// }								
						?> -->
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
