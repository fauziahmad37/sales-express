<div class="right_col" role="main">
	<div class="row">
		</br>
		</br>
		</br>
		<div class="container">
			<div id="ajax-modal-payment" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
			<div class="panel panel-primary">
				<div class="panel-heading">Input Retur Invoice</div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo base_url('/Invoice_retur/invoice_retur_add/')?>" method="post">
					  
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="invoice_number">No Invoice <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="hidden" id="id_wo" name="id_wo" />
								<input type="hidden" id="type_of_payment" name="type_of_payment" />
								<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>" />
								<input type="text" id="invoice_number" name="invoice_number" required="required" class="form-control col-md-7 col-xs-12" placeholder="Enter Invoice Number" />
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a id="click_invoice_number"><i class="fa fa-search fa-2x"></i></a>
							</div>                        
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="amount">Amount <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9"> 
								<input type="text" class="form-control" id="total_billing" name="total_billing" required="required" readonly="readonly" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="invoice_number">Workshop <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="workshop_name" name="workshop_name" required="required" class="form-control col-md-7 col-xs-12" readonly="readonly" />
							</div>                      
						</div>
					 
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_customer">Customer Name <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="nama_customer" name="nama_customer" required="required" class="form-control col-md-7 col-xs-12" readonly="readonly"  />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pintu">Nomor Pintu <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="no_pintu" name="no_pintu" required="required" class="form-control col-md-7 col-xs-12" readonly="readonly"  />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_customer">Note <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="note" name="note" required="required" class="form-control col-md-7 col-xs-12"  />
							</div>                      
						</div>
					 
						<div class="ln_solid"></div>
					 
					  <div class="form-group"> 
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" name="simpan" class="btn btn-default">Submit</button>
						</div>
					  </div>
					</form>
					
					
					
				</div>
			</div>
		</div>
	</div>
</div>



<script>
	$(document).ready(function(){
		var $modal = $("#ajax-modal-payment"); 
		$("#click_invoice_number").on("click", function(){
			var invoice_number = $("#invoice_number").val();
			if(invoice_number !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Payment/get_data_by_invoice_number');?>',{"invoice_number": invoice_number});
			}
		});
	});						
</script>












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