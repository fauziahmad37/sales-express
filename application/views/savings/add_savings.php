<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Tambah Tabungan
			</h2>
		</div>
		<div class="modal-body">
			<form id="demo-form2" autocomplete="off" data-parsley-validate 
				class="form-horizontal form-label-left" action="<?php echo site_url('/Savings/add_savings'); ?>" method="post"
				onsubmit="return confirm('Apakah Jumlah Tabungan Sudah Sesuai?');">
			  <div class="form-group">
				<input type="hidden" id="id_car" name="id_car" value="<?php echo $id_car;?>"/>
				<input type="hidden" id="id_pool" name="id_pool" value="<?php echo $id_pool;?>"/>				
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Nominal Tabungan <span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="number" class="form-control" min="0" id="amount" name="amount" required/>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Note</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <textarea id="note" name="note" class="form-control" rows="5"></textarea>
				</div>
			  </div>			  
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				  <button type="submit" class="btn btn-success" id="save" name="save">Submit</button>
				</div>
			  </div>
			</form>
		</div>
		<div class="modal-footer">		
			<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
		</div>
		</form>
	</div>
</div>