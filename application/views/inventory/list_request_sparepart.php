<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css'); ?>">
	<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel tile">
					<div class="x_title">
						<h2>List Request Transfer</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
							<table id="datatable" class="table table-striped dataTable" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>No Dokumen</th>
										<th>Kode Part</th>
										<th>Kode Internal</th>
										<th>Nama Sparepart</th>
										<th>Qty Permintaan</th>
										<th>Qty Disetujui</th>
										<th>Qty Diterima</th>
										<th>Pool Pemohon</th>
										<th>Pool Menyetujui</th>
										<th>Tanggal Permintaan</th>
										<th>Tanggal Pengiriman</th>
										<th>Tanggal Penerimaan</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$ct = 1;
									foreach((Array) $data As $key => $val){
								?>

										<tr>
											<td><?php echo $ct;?></td>
											<td><?php echo $val['no_rr'];?></td>
											<td><a href="<?php echo site_url('/Inventory/detail_receipt/'.$val['id']);?>" class="blue"><?php echo $val['kode_part'] ;?></a></td>
											<td><a href="<?php echo site_url('/Inventory/detail_receipt/'.$val['id']);?>" class="blue"><?php echo $val['internal_code'] ?></td>
											<td><?php echo $val['item_name'] ?></td>
											<td><?php echo $val['qty_request']?></td>
											<td><?php if($val['qty_transfered'] == ''){echo 'Belum Dikirim';}else{echo $val['qty_transfered'];} ?></td>
											<td><?php if($val['qty_received'] == ''){ echo 'Belum Diterima'; }else{echo $val['qty_received'];} ?></td>
											<td><?php echo $val['pool_request_name'];?></td>
											<td><?php echo $val['pool_approve_name']; ?></td>											
											<td><?php echo date('d M Y, H:i:s', strtotime($val['request_dt']))?></td>
											<td><?php if($val['transfered_dt'] == ''){echo 'belum dikirim';}else{echo date('d M Y, H:i:s', strtotime($val['transfered_dt']));} ?></td>
											<td><?php if($val['received_dt'] == ''){echo 'belum diterima';}else{echo date('d M Y, H:i:s', strtotime($val['received_dt']));} ?></td>
											<td><?php echo $val['status']; ?></td>
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
