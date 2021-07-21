<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>History Service</h2>
                  	<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-car" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Work_order/get_history_service/'); ?>" method="post">
						<div class="form-group" id="div_no_pintu">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pintu">No. Pintu 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  	<input type="text" id="no_pintu" name="no_pintu" class="form-control col-md-7 col-xs-12"/>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
							  	<a id="click_no_pintu"><i class="fa fa-search fa-2x"></i></a>
							</div> 
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_polisi">No. Polisi <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="hidden" name="id" id="id">
							  	<input type="text" id="no_polisi" name="no_polisi" class="form-control col-md-7 col-xs-12" required="required"/>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
							  	<a id="click_no_polisi"><i class="fa fa-search fa-2x"></i></a>
							</div>                      
						</div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-success" id="search" name="search">Cari</button>
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
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<script>
	$(document).ready(function(){
		var $modal = $("#ajax-modal-car");
		$("#click_no_pintu").on("click", function(){
			var no_pintu = $("#no_pintu").val();
			if(no_pintu !== '' || no_pintu == ''){
				$modal.modal();
				$modal.load('<?php echo site_url('/Work_order/get_data_by_no_pintu'); ?>', {"no_pintu": no_pintu});
			}
		});
		$("#click_no_polisi").on("click", function(){
			var no_polisi = $("#no_polisi").val();
			if(no_polisi !== '' || no_polisi == ''){
				$modal.modal();
				$modal.load('<?php echo site_url('/Work_order/get_data_by_no_polisi') ?>', {"no_polisi": no_polisi});
			}
		});
	});
</script>