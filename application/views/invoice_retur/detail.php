<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel title">
				<div class="x_title">
					<h2>Detail Retur <?php //print_r($data); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="container">
						<div class="col-md-4">
						<!--panel-->
							<div class="panel panel-default">
							<div class="panel-heading">Title</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-6 col-sm-4">Inoice Retur Number</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['invoice_number']; ?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">WO Number</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['wo_number']; ?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">No Pintu</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['no_pintu']; ?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">No Polisi</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['no_polisi']; ?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">Total Billing</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['total_billing'];?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">Customer Name</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['nama_customer']; ?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">Creator Name</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['full_name']; ?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">Created Date</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['created_dt']; ?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">Amount Retur</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['total_payment'];?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">Noted</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['note'];?></div>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-4">Jenis Pembayaran</div>
										<div class="col-xs-6 col-sm-4">:</div>
										<div class="col-xs-6 col-sm-4"><?php echo $data['jenis_pembayaran'];?></div>
									</div> 									
								</div>
							</div>
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