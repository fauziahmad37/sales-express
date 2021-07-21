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
					<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Sparepart/save_sparepart');?>" method="post">
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <select name="id_workshop" id="id_workshop" class="form-control" required="required">
							<?php
								function get_array($arr, $id, $str = 'name'){
									foreach((Array) $arr AS $key => $val){
										if($val['id'] === $id){
											return $val[$str];
										}
									}
									return '';
								}							
								if($this->user['id_privilege'] == Admin::ADMINISTRATOR 
									|| $this->user['id_privilege'] == Admin::FINANCE) { //ADMINISTRATOR
									echo '<option value="">-- Select One --</option>';
									foreach ((Array) $dataWorkshop as $key => $val){
										echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
									}
								} else {
									echo '<option value="'.$this->user['id_workshop'].'">'.get_array($dataWorkshop, $this->user['id_workshop']).'</option>';
								}
							?>
						  </select>
						</div>
                  	</div>

                  		<!-- <div class="form-group" id="div_internal_code">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="internal_code">id <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="internal_code" name="internal_code" class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['id_sparepart'])) echo $data['id']. '"readonly'; else echo '"'; ?>"/>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a id="click_internal_code"><i class="fa fa-search fa-2x"></i></a>
							</div>                        
						</div> -->
					
						<div class="form-group" id="div_internal_code">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="internal_code">Internal Code <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="internal_code" name="internal_code" class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['internal_code'])) echo $data['internal_code']. '"readonly'; else echo '"'; ?>"/>
								<input type="hidden" id="id_sparepart" name="id_sparepart" class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['id'])) echo $data['id']. '"readonly'; else echo '"'; ?>"/>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a id="click_internal_code"><i class="fa fa-search fa-2x"></i></a>
							</div>                        
						</div>

						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Part Name <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="item_name" name="item_name"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['item_name'])) echo $data['item_name']. '"readonly'; else echo '"'; ?>">
                       		</div>
                      	</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Merk </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="merk" name="merk" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['merk'])) echo $data['merk'].'" readonly'; else echo '"';?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi Part </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="loc_part" name="loc_part" class="form-control col-md-7 col-xs-12" placeholder="Kode Lokasi Barang" required>
							</div>
						</div>

                      	<!-- <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">COA <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="coa" name="coa" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['coa'])) echo $data['coa'].'" readonly'; else echo '"';?>">
							</div>
						</div> -->

						<!-- <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="jenis" class="form-control" required="required">
											<option value="">-- Select One --</option>
											<option value="AC" <?php if(isset($data['jenis']) && $data['jenis'] == 'AC'){echo 'selected';}else { echo ''; } ?>>AC</option>
											<option value="ARGO & RADIO" <?php if(isset($data['jenis']) && $data['jenis'] == 'ARGO & RADIO'){echo 'selected';}else { echo ''; } ?>>ARGO & RADIO</option>
											<option value="BODY" <?php if(isset($data['jenis']) && $data['jenis'] == 'BODY'){echo 'selected';}else { echo ''; }?> >BODY</option>
											<option value="CHASIS" <?php if(isset($data['jenis']) && $data['jenis'] == 'CHASIS'){echo 'selected';}else { echo ''; } ?> >CHASIS</option>
											<option value="ENGINE" <?php if(isset($data['jenis']) && $data['jenis'] == 'ENGINE'){echo 'selected';}else { echo ''; }?> >ENGINE</option>
											<option value="MATERIAL UMUM" <?php if(isset($data['jenis']) && $data['jenis'] == 'MATERIAL UMUM'){echo 'selected';}else { echo ''; }?> >MATERIAL UMUM</option>
											<option value="TOOL" <?php if(isset($data['jenis']) && $data['jenis'] == 'TOOL'){echo 'selected';}else { echo ''; } ?> >TOOL</option>
							  </select>
							</div>
						</div> -->

			
					<!-- <div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gudang <span class="required">*</span>
	                    </label>
	                    <div class="col-md-6 col-sm-6 col-xs-12">
	                      	<select name="gudang" class="form-control" required="required">
							    <option value="">-- Select One --</option>
								<option value="SP" <?php if(isset($data['gudang']) && $data['gudang'] == 'SP'){echo 'selected';}else { echo ''; } ?>>SPAREPART</option>
								<option value="CP" <?php if(isset($data['gudang']) && $data['gudang'] == 'CP'){echo 'selected';}else { echo ''; } ?>>CONSUMABLE PART</option>
								<option value="IT" <?php if(isset($data['gudang']) && $data['gudang'] == 'IT'){echo 'selected';}else { echo ''; } ?>>IT</option>
								<option value="GA" <?php if(isset($data['gudang']) && $data['gudang'] == 'GA'){echo 'selected';}else { echo ''; } ?>>GA</option>
	                      	</select>
	                    </div>
                  	</div> -->
					
					<!-- <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Area <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="area" required="required" class="form-control">
								<option value="">-- Select One --</option>
								<option value="JABODETABEK" <?php if(isset($data['area']) && $data['area'] == 'JABODETABEK'){echo 'selected';}else { echo ''; } ?> >JABODETABEK</option>
								<option value="MEDAN" <?php if(isset($data['area']) && $data['area'] == 'MEDAN'){echo 'selected';}else { echo ''; } ?>>MEDAN</option>
								<option value="SEMARANG" <?php if(isset($data['area']) && $data['area'] == 'SEMARANG'){echo 'selected';}else { echo ''; } ?>>SEMARANG</option>
							</select>
						</div>
					</div> -->
<!-- 
					<div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Satuan <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="id_uom" class="form-control" required="required">
						             <option value="">-- Select One --</option>
          							<?php
          								foreach ((Array) $dataUom as $key => $val){
          									echo '<option value="'.$val['id'].'" '.((isset($data['id_uom']) && $data['id_uom'] == $val['id']) ? 'selected' : '').'>'.$val['uom'].'</option>';
          								}
          							?>
                      </select>
                    </div>
                  	</div>
				 -->
						<!-- <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Harga Jual
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="sale_price" name="sale_price" class="form-control" value="<?php if(isset($data['sale_price'])) echo ($data['sale_price']); else echo 0; ?>" readonly>
							</div>
						</div>-
						 -->
						
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
				$modal.load('<?php echo site_url('/Sparepart/get_data_by_internal_code');?>',{"internal_code": internal_code});
			}
		});
		
	});
	</script>
    <!-- /Datatables -->