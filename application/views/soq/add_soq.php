<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_tile">
					<h2><?php echo (!isset($data['id']) ? 'Add' : 'Edit'); ?> Inventory</h2>
					<button class="btn btn-danger pull-right" id="cancel">Cancel</button>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-car" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
				<div class="x_content">
					<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/CSoq/save_soq');?>" method="post">
					
				<!--	<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <select name="id_workshop" id="id_workshop" class="form-control" required="required">
							<?php
								// function get_array($arr, $id, $str = 'name'){
									// foreach((Array) $arr AS $key => $val){
										// if($val['id'] === $id){
											// return $val[$str];
										// }
									// }
									// return '';
								// }							
								// if($this->user['id_privilege'] == Admin::ADMINISTRATOR 
									// || $this->user['id_privilege'] == Admin::FINANCE) { //ADMINISTRATOR
									// echo '<option value="">-- Select One --</option>';
									// foreach ((Array) $dataWorkshop as $key => $val){
										// echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
									// }
								// } else {
									// echo '<option value="'.$this->user['id_workshop'].'">'.get_array($dataWorkshop, $this->user['id_workshop']).'</option>';
								// }
							// ?>
						  </select>
						</div>
                  	</div> -->
					
						<div class="form-group" id="div_internal_code">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="internal_code">Internal Code <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="internal_code" name="internal_code" class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['internal_code'])) echo $data['internal_code']. '"readonly'; else echo '"'; ?>"/>
								<input type="hidden" id="id_inventory" name="id_inventory" class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['id'])) echo $data['id']. '"readonly'; else echo '"'; ?>"/>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a id="click_internal_code"><i class="fa fa-search fa-2x"></i></a>
							</div>                        
						</div>

						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Part Name <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="item_name" name="item_name"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['item_name'])) echo $data['item_name']. '"readonly'; else echo '"'; ?>" readonly>
                       		</div>
                      	</div>
						
						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="workshop_name" name="workshop_name"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['name'])) echo $data['name']. '"readonly'; else echo '"'; ?>" readonly>
                       		</div>
                      	</div>
						
						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Qty <span class="required"></span></label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="qty" name="qty"  class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['qty'])) echo $data['qty']; else echo ''; ?>" readonly>
                       		</div>
                      	</div>

						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Potensi (PTS) <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="item_name" name="potential"  class="form-control col-md-7 col-xs-12">
                       		</div>
                      	</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Order Cycle (OC)</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="order_cycle" name="order_cycle" class="form-control col-md-7 col-xs-12" >
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Lead Time (L/T)</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="lead_time" name="lead_time" class="form-control col-md-7 col-xs-12"  required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Safety Stock (S/S)</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="safety_stock" name="safety_stock" class="form-control col-md-7 col-xs-12"  required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Aktif (U/A)</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="unit_aktif" name="unit_aktif" class="form-control col-md-7 col-xs-12"  required>
							</div>
						</div>
						
						<!-- div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Min Stock </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="min_stock" name="min_stock" class="form-control col-md-7 col-xs-12"  required>
							</div>
						</div -->
						
						<div class="ln-solid">
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									
								</div>
							</div>
						</div>
						
						<div class="ln-solid">
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<?php
										if($this->user['id_privilege'] != Admin::FINANCE_HEAD){
											if(!isset($data['id'])){
												echo '<button type="submit" class="btn btn-success" name="save">Submit</button>';
											}else if($this->user['id_privilege'] == Admin::FINANCE){
												echo '<button type="submit" class="btn btn-success" name="update_proposed">Submit</button>';
											}else{
												echo '<button type="submit" class="btn btn-success" name="update">Submit</button>';
											}
										}else if($this->user['id_privilege'] == Admin::FINANCE_HEAD && isset($data['status']) && $data['status'] === 'Pending Approval'){
											echo '<button type="submit" class="btn btn-success" name="update_approved">Approved</button>';
										}
									?>
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
	 $(document).ready(function() {
		var $modal = $("#ajax-modal-car"); 
		$("#click_internal_code").on("click", function(){
			var internal_code = $("#internal_code").val();
			if(internal_code !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/CSoq/get_data_internal_code');?>',{"internal_code": internal_code});
			}
		});
		
	});
	</script>
    <!-- /Datatables -->