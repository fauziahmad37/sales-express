<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Cancel WO
			</h2>
		</div>
		<div class="modal-body">
			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Work_order/detail/'.$id); ?>" method="post">
			  <div class="form-group">
				<input type="hidden" id="id" name="id" value="<?php echo $id;?>"/>
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Alasan Cancel <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <textarea id="cancel_reason" name="cancel_reason" class="form-control" rows="5" required="required"></textarea>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				  <button type="submit" class="btn btn-success" id="cancel_wo" name="cancel_wo">Submit</button>
				</div>
			  </div>
			</form>
		</div>
		<div class="modal-footer">		
			<button type="button" class="btn btn-info" data-dismiss="modal">Tidak Jadi Cancel</button>
		</div>
		</form>
	</div>
</div>