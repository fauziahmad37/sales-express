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
					<h2>Create SPJ (Surat Perintah Jalan)</h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Closing/add_closing'); ?>" method="post">
						<div class="form-group">
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
								</label>
								
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="id_pool" id="id_pool" class="form-control" required="required">
										<?php
										function get_array($arr, $id, $str = 'name'){
											foreach((Array) $arr AS $key => $val){
												if($val['id'] === $id){
												return $val[$str];
												}
											}
											return '';
										}							
										if($this->user['id_privilege'] == Admin::ADMINISTRATOR || $this->user['id_privilege'] == Admin::CHECKER) { //ADMINISTRATOR
											echo '<option value="">-- Select One --</option>';
											foreach ((Array) $arrPool as $key => $val){
												echo '<option value="'.$val['id'].'" '.($id_pool !== '' ? ($id_pool === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
											}
										} else {
											echo '<option value="'.$this->user['id_pool'].'">'.get_array($arrPool, $this->user['id_pool']).'</option>';
										}
										?>
									</select>
								</div>
							</div>

							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="notes">Notes <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="notes" name="notes" class="form-control col-md-7 col-xs-12" required="required"/>
								</div>
							</div>
					  
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" class="btn btn-success" id="save" name="save">Submit</button>
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
<script src="<?php echo base_url('/assets/js/jquery-1.12.4.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
    
<!-- /Datatables -->
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>