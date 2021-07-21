<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				
				<div id="ajax-modal-car" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
				<div class="x_content">
					<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/C_data_armada/save_data');?>" method="post">
					
				
						<div class="form-group" id="div_internal_code">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="internal_code">Nomer Pintu <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required type="text" id="no_pintu" name="no_pintu" class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['no_pintu'])) echo $data['no_pintu']. '"readonly'; else echo '"'; ?>"/>

								<input type="hidden" id="id" name="id" class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['id'])) echo $data['id']. '"readonly'; else echo '"'; ?>"/>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a id="click_code"><i class="fa fa-search fa-2x"></i></a>
							</div>                        
						</div>

						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomer Rangka <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input required type="text" id="no_rangka" name="no_rangka"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['no_rangka'])) echo $data['no_rangka']. '"readonly'; else echo '"'; ?>" readonly>
                       		</div>
                      	</div>
						
						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomer Mesin <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="no_mesin" name="no_mesin"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['no_mesin'])) echo $data['no_mesin']. '"readonly'; else echo '"'; ?>" readonly>
                       		</div>
                      	</div>
						
						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomer Polisi <span class="required"></span></label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="no_polisi" name="no_polisi"  class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['no_polisi'])) echo $data['no_polisi']; else echo ''; ?>" readonly>
                       		</div>
                      	</div>

                      	<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pool <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="nama" name="nama"  class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['nama'])) echo $data['nama']; else echo ''; ?>" readonly>
                       		</div>
                      	</div>

						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipe Mobil <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="model" name="model"  class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['model'])) echo $data['model']; else echo ''; ?>" readonly>
                       		</div>
                      	</div>
                      	<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Warna Mobil <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<textarea id='warna' name='warna' class="form-control col-md-7 col-xs-12"></textarea>
                       		</div>
                      	</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Rekondisi</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name='jenis_rekondisi' class="form-control col-md-7 col-xs-12">
									<option value='Body Repair'>Body Repair</option>
									<option value='General Service'>General Service</option>
								</select>
							</div>
						</div>

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
		$("#click_code").on("click", function(){
			var no_pintu = $("#no_pintu").val();
			if(no_pintu !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/C_data_armada/get_data');?>',{"no_pintu": no_pintu});
			}
		});
		
	});
	</script>
    <!-- /Datatables -->
    <script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script>