<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/jquery-ui.css');?>" rel="stylesheet">

<style>
	.ui-autocomplete-custom {
    background: #87ceeb;
    z-index: 2;
}
</style>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add New Surat Kesepakatan Harga <?php
						if (isset($error)){
						echo $error['error'];
						}
						?>
					</h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Skh/add'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Sales ID <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="sales_id" class="form-control">
									<option value="">-- Select One --</option>
										<option value="1" <?php if(isset($data['sales_id']) && $data['sales_id'] == 'SHANNY') echo 'selected' ?> >SHANNY </option>;
										<option value="2" <?php if(isset($data['sales_id']) && $data['sales_id'] == 'BAMBANG') echo 'selected' ?> >BAMBANG </option>;
								  </select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_id">Customer ID <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="customer_id" name="customer_id" value="<?php if(isset($data['customer_id'])) echo $data['customer_id']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="nama" name="nama" value="<?php if(isset($data['nama'])) echo $data['nama']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Kendaraan <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="jumlah_kendaraan" name="jumlah_kendaraan" value="<?php if(isset($data['jumlah_kendaraan'])) echo $data['jumlah_kendaraan']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Disepakati <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="harga_disepakati" name="harga_disepakati" value="<?php if(isset($data['harga_disepakati'])) echo $data['harga_disepakati']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Amount DP <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="amount_dp" name="amount_dp" value="<?php if(isset($data['amount_dp'])) echo $data['amount_dp']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Batas Pelunasan <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="text" id="datepicker" name='batas_pelunasan' value="<?php if(isset($data['batas_pelunasan'])) echo date('m/d/Y', strtotime($data['batas_pelunasan'])); ?>" 
									class="form-control col-md-7 col-xs-12">
								</div>       
							</div>

							<div class="ln_solid"></div>
				  
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<?php if(isset($data['id'])){
										echo '<button type="submit" class="btn btn-success" name="update">Update</button>';
									} else {
										echo '<button type="submit" class="btn btn-success" name="save">Save</button>';
									}?>
									
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
<!-- <link href="<?php //echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet"> -->
<!-- jQuery -->
<script src="<?php echo base_url('/assets/js/jquery-1.12.4.min.js');?>"></script>
<!-- <script src="<?php //echo base_url('/assets/js/jquery.min.js');?>"></script> -->
<script src="<?php echo base_url('/assets/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Bootstrap -->
<!-- <script src="<?php //echo base_url('/assets/js/bootstrap.min.js');?>"></script> -->
<!-- NProgress -->
<!-- <script src="<?php //echo base_url('/assets/js/nprogress.js');?>"></script> -->
<!-- <script src="<?php //echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script> -->
<!-- <script src="<?php //echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script> -->
<!-- <script src="<?php //echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script> -->
<!-- Custom Theme Scripts -->

<!-- ================================== YEAR PICKER ================================ -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

<!-- =============================================================================== -->

<!-- Datatables -->
<script>
$(document).ready(function(){
	$( "#datepicker" ).datepicker({
		autoclose: 1
	});

	$( "#customer_id").autocomplete({
		source: "<?php echo site_url('Skh/get_autocomplete_customer');?>",
		select: function(event, ui){ 
			event.preventDefault();
			$('[name="id"]').val(ui.item.id);
			$('[name="nama"]').val(ui.item.nama);
			$('[name="customer_id"]').val(ui.item.doc_number);
		}, focus: function(event, ui){
			event.preventDefault();
			$('[name="customer_id"]').val(ui.item.doc_number); 
			$('[name="nama"]').val(ui.item.nama); 
			$('[name="id"]').val(ui.item.id); 
		}
	});
});
</script>