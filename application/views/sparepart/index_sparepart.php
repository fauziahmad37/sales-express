<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css'); ?>">
	<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel tile">
					<div class="x_title">
						<h2>List Sparepart</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
							<table id="datatable" class="table table-striped dataTable" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Part</th>
										<th>Nama Sparepart</th>
										<th>Merk</th>
										<th>Kode Internal</th>
										<th>COA</th>
										<th>Uom</th>
										<th>Jenis Item</th>
										<th>Gudang</th>
										<th>Area</th>
										<th>Harga Jual</th>
										<th>Update Terakhir</th>
										<th>Active</th>
										<th>Harga Skr Disetujui oleh</th>
										<th>Harga Skr Disetujui pada</th>
										<th>Status</th>
										<th>Pengajuan Harga Baru</th>
										<th>Diajukan Oleh</th>
										<th>Diajukan Pada</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$ct = 1;
									foreach((Array) $data As $key => $val){
								?>
										<tr>
											<td><?php echo $ct;?></td>
											<td><a href="<?php echo site_url('/Sparepart/detail/'.$val['id']);?>" class="blue"><?php echo $val['kode_part'] ;?></a></td>
											<td><a href="<?php echo site_url('/Sparepart/detail/'.$val['id']);?>" class="blue"><?php echo $val['item_name'] ;?></a></td>
											<td><?php echo $val['merk']?></td>
											<td><?php echo $val['internal_code']; ?></td>
											<td><?php echo $val['internal_code_iproc']; ?></td>
											<td><?php echo $val['coa']?></td>
											<td><?php echo (array_get($dataUom, $val['id_uom'], 'id', 'uom')) ?></td>
											<td><?php echo $val['jenis'] ?></td>
											<td><?php echo (array_get($dataWorkshop, $val['gudang'], 'id', 'name'))?></td>
											<!-- <td><?php //echo $val['gudang']?></td> -->
											<td><?php echo $val['area']?></td>
											<td><?php echo number_format($val['sale_price']) ?></td>
											<td><?php echo date('d M Y, H:i:s', strtotime($val['update_dt']))?></td>
											<td><?php echo $val['active'] === '1' ? 'Yes' : 'No';?></td>
											<td><?php echo ($val['sale_price_approved_by'] !== null ? (array_get($dataUser, $val['sale_price_approved_by'], 'id', 'username')):null	) ?></td>
											<td><?php echo ($val['sale_price_approved_dt'] !== null ? date('d M Y, H:i:s', strtotime($val['sale_price_approved_dt'])): null) ?></td>
											<td><?php echo $val['status'] ?></td>
											<td><?php echo ($val['status'] !== 'Aktif' ? number_format($val['sale_price_proposed']) :null) ?></td>
											<td><?php echo ($val['status'] !== 'Aktif' ? (array_get($dataUser, $val['sale_price_proposed_by'], 'id', 'username')):null) ?></td>
											<td><?php echo ($val['status'] !== 'Aktif' ? date('d M Y, H:i:s', strtotime($val['sale_price_proposed_dt'])):null) ?></td>
										</tr>
								<?php
									$ct++;
									}
								?>
								</tbody>
							</table>
						</div>
						<?php
							if($this->user['id_privilege'] == Admin::ADMINISTRATOR || $this->user['id_privilege'] == Admin::SCM_ADMIN){
								echo '<a href="'.site_url("/Sparepart/detail").'"><button class="btn btn-info">Add New Sparepart</button></a>';
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
