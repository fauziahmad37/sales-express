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
					<h2>Create New Payment <?php
						if (isset($error)){
						echo $error['error'];
						}
						?>
					</h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Payment/add'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="doc_number">Doc Number <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="doc_number" name="doc_number" value="<?php if(isset($data['doc_number'])) echo $data['doc_number']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="nama" name="nama" value="<?php if(isset($data['nama'])) echo $data['nama']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_disepakati">Harga disepakati <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="harga_disepakati" name="harga_disepakati" value="<?php if(isset($data['harga_disepakati'])) echo ($data['harga_disepakati']); ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/ readonly>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="amount_terbayar">Terbayar <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="amount_terbayar" name="amount_terbayar" value="<?php if(isset($data['amount_terbayar'])) echo $data['amount_terbayar']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/ readonly>
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="sisa_tagihan">Sisa Tagihan <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="sisa_tagihan" name="sisa_tagihan" value="<?php if(isset($data['sisa_tagihan'])) echo $data['sisa_tagihan']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/ readonly>
								</div>
							</div>

							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="amount">Amount <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="amount" name="amount" value="<?php if(isset($data['amount'])) echo $data['amount']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
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

	$( "#doc_number").autocomplete({
		source: "<?php echo site_url('Payment/get_autocomplete_doc_number');?>",
		select: function(event, ui){ 
			event.preventDefault();
			$('[name="id"]').val(ui.item.id);
			$('[name="nama"]').val(ui.item.nama);
			$('[name="doc_number"]').val(ui.item.doc_number);
			$('[name="harga_disepakati"]').val(ui.item.harga_disepakati);
			$('[name="amount_terbayar"]').val(ui.item.amount_terbayar);
			$('[name="sisa_tagihan"]').val(ui.item.sisa_tagihan);
		}, focus: function(event, ui){
			event.preventDefault();
			$('[name="doc_number"]').val(ui.item.doc_number); 
			$('[name="nama"]').val(ui.item.nama); 
			$('[name="id"]').val(ui.item.id); 
			$('[name="harga_disepakati"]').val(ui.item.harga_disepakati); 
			$('[name="amount_terbayar"]').val(ui.item.amount_terbayar); 
			$('[name="sisa_tagihan"]').val(ui.item.sisa_tagihan); 
		}
	});
});
</script>