<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_tile">
					<h2><?php echo (!isset($data['id']) ? 'Add' : 'Edit'); ?> Lokasi Part </h2>
					<button class="btn btn-danger pull-right" id="cancel">Cancel</button>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Inventory/index_manajemen_loc_part');?>" method="post">

						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Internal 
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="internal_code" name="internal_code"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['internal_code'])) echo $data['internal_code']. '"readonly'; else echo '"'; ?>" readonly>
                       		</div>
                      	</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Sparepart </label>		
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
								<input type="text" id="kode_part" name="kode_part" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['kode_part'])) echo $data['kode_part'].'" readonly'; else echo '"';?>" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sparepart 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="item_name" name="item_name" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['item_name'])) echo $data['item_name']; ?>" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Qty 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="qty" name="qty" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['qty'])) echo $data['qty']; ?>" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi Part <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="loc_part" name="loc_part" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['loc_part'])) echo $data['loc_part']; ?>"
								>
							</div>
						</div>

						<div class="ln-solid">
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
								</div>
							</div>
						</div>
					</form>

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
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
		<script>
		$(function() {
			$('#kode_part').on('keypress', function(e) {
				if (e.which == 32)
					return false;
			});
			$('#cancel').on('click', function(){
				window.location.replace("<?php echo site_url('/Inventory/index_manajemen_loc_part');?>");
			});
		});
		</script>
    <!-- /Datatables -->