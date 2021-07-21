<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_tile">
					<h2><?php echo (!isset($data['id']) ? 'Add' : 'Edit'); ?> Sparepart</h2>
					<button class="btn btn-danger pull-right" id="cancel">Cancel</button>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Sparepart/index');?>" method="post">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Part <span class="required">*</span></label>							
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
								<input type="text" id="kode_part" name="kode_part" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['kode_part'])) echo $data['kode_part'].'" readonly'; else echo '"';?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="item_name" name="item_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['item_name'])) echo $data['item_name']; ?>"
									<?php
										if(
											$this->user['id_privilege'] == Admin::FINANCE
											|| $this->user['id_privilege'] == Admin::FINANCE_HEAD
											|| (isset($data['status']) && $data['status'] === 'Pending Approval')
										) echo 'readonly';
									?>
								>
							</div>
						</div>
						
						
						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Internal <span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="internal_code" name="internal_code"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['internal_code'])) echo $data['internal_code']. '"readonly'; else echo '"'; ?>">
                       		</div>
                      	</div>
						
						<div class="form-group">
                        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Internal Iproc<span class="required"></span>
                        	</label>
                        	<div class="col-md-6 col-sm-6 col-xs-12">
                            	<input type="text" id="internal_code_iproc" name="internal_code_iproc"  class="form-control col-md-7 col-xs-12" value="<?php if (isset($data['internal_code_iproc'])) echo $data['internal_code_iproc']. '"readonly'; else echo '"'; ?>">
                       		</div>
                      	</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Merk </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="merk" name="merk" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['merk'])) echo $data['merk'].'" readonly'; else echo '"';?>">
							</div>
						</div>

                      	<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">COA <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="coa" name="coa" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['coa'])) echo $data['coa'].'" readonly'; else echo '"';?>">
							</div>
						</div>

						<div class="form-group">
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
											<option value="ACCU" <?php if(isset($data['jenis']) && $data['jenis'] == 'ACCU'){echo 'selected';}else { echo ''; } ?> >ACCU</option>
											<option value="WHEELS" <?php if(isset($data['jenis']) && $data['jenis'] == 'WHEELS'){echo 'selected';}else { echo ''; } ?> >WHEELS</option>
											<option value="TRANSMISSION" <?php if(isset($data['jenis']) && $data['jenis'] == 'TRANSMISSION'){echo 'selected';}else { echo ''; } ?> >TRANSMISSION</option>
											<option value="PELUMAS" <?php if(isset($data['jenis']) && $data['jenis'] == 'PELUMAS'){echo 'selected';}else { echo ''; } ?> >PELUMAS</option>
							  </select>
							</div>
						</div>

					<!-- <div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gudang <span class="required">*</span>
	                    </label>
	                    <div class="col-md-6 col-sm-6 col-xs-12">
	                      	<select name="gudang" class="form-control" required="required">
							    <option value="">-- Select One --</option>
          							// <?php
          								// foreach ((Array) $dataWorkshop as $key => $val){
          									// echo '<option value="'.$val['id'].'" '.((isset($data['gudang']) && $data['gudang'] == $val['id']) ? 'selected' : '').'>'.$val['name'].'</option>';
          								// }
          							// ?>
	                      	</select>
	                    </div>
                  	</div> -->
					<div class="form-group">
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
                  	</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Area <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="area" required="required" class="form-control">
								<option value="">-- Select One --</option>
								<option value="JABODETABEK" <?php if(isset($data['area']) && $data['area'] == 'JABODETABEK'){echo 'selected';}else { echo ''; } ?> >JABODETABEK</option>
								<option value="MEDAN" <?php if(isset($data['area']) && $data['area'] == 'MEDAN'){echo 'selected';}else { echo ''; } ?>>MEDAN</option>
								<option value="SEMARANG" <?php if(isset($data['area']) && $data['area'] == 'SEMARANG'){echo 'selected';}else { echo ''; } ?>>SEMARANG</option>
							</select>
						</div>
					</div>

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
				<!--	<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">TIPE MOBIL <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="car_type" required="required" class="form-control">
								<option value="">-- Select One --</option>
								<option value="** N/A **">** N/A **</option>
								<option value="ALL NEW LIMO">ALL NEW LIMO</option>
								<option value="ALPHARD">ALPHARD</option>
								<option value="AVANZA">AVANZA</option>
								<option value="ETIOS">ETIOS</option>
								<option value="ERTIGA">ERTIGA</option>
								<option value="LIMO">LIMO</option>
								<option value="LOVA">LOVA</option>
								<option value="NEW LIMO">NEW LIMO</option>
								<option value="SOLUNA">SOLUNA</option>
							</select>
						</div>
					</div> -->

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Harga Jual
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="sale_price" name="sale_price" class="form-control" value="<?php if(isset($data['sale_price'])) echo ($data['sale_price']); else echo 0; ?>" readonly>
							</div>
						</div>
						
						<?php 
							if(
								($this->user['id_privilege'] == Admin::FINANCE 
								|| $this->user['id_privilege'] == Admin::ADMINISTRATOR
								|| $this->user['id_privilege'] == Admin::FINANCE_HEAD)
								&& isset($data['status']) 	
							) {
								if(($this->user['id_privilege'] != Admin::FINANCE_HEAD && $this->user['id_privilege'] != Admin::ADMINISTRATOR) || ($data['status'] === 'Pending Approval') || !isset($data['status'])){
									echo '<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="sale_price_proposed">Pengajuan Harga Jual Baru
											</label>
											<div class="col-md-6 col-sm-6 col-xs-9">
												<input type="number" min="0" id="sale_price_proposed" name="sale_price_proposed" class="form-control" value="'.(isset($data['sale_price_proposed']) ? $data['sale_price_proposed'] : 0).'" 
												'.(($this->user['id_privilege'] == Admin::FINANCE) ? 'required' : 'readonly').'>
											</div>       
										</div>';
								}
								if($data['status'] !== 'Aktif') {
									echo '<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual Baru Diajukan oleh
											</label>
											<div class="col-md-6 col-sm-6 col-xs-9">
												<input type="hidden" name="sale_price_proposed_by" value="'.$data['sale_price_proposed_by'].'">								
												<input type="text" class="form-control" value="'.(array_get($dataUser, $data['sale_price_proposed_by'], 'id', 'username')).'" readonly>
											</div>       
										</div>';
									echo '<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual Baru Diajukan pada
											</label>
											<div class="col-md-6 col-sm-6 col-xs-9">
												<input type="text" class="form-control" name="sale_price_proposed_dt" value="'.date('d M Y, H:i:s', strtotime($data['sale_price_proposed_dt'])).'" readonly>
											</div>       
										</div>';
								}
								if(isset($data['sale_price_approved_by'])) {
									echo '<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual Skr Disetujui oleh
											</label>
											<div class="col-md-6 col-sm-6 col-xs-9">
												<input type="text" class="form-control" value="'.(array_get($dataUser, $data['sale_price_approved_by'], 'id', 'username')).'" readonly>
											</div>       
										</div>';
									echo '<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual Skr Diupdate pada
											</label>
											<div class="col-md-6 col-sm-6 col-xs-9">
												<input type="text" class="form-control" value="'.date('d M Y, H:i:s', strtotime($data['sale_price_approved_dt'])).'" readonly>
											</div>       
										</div>';
								}
							}
							if(
								($this->user['id_privilege'] == Admin::SCM_ADMIN 
								|| $this->user['id_privilege'] == Admin::ADMINISTRATOR)
								) {
								echo '<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="radio">
												<label>
													<input type="radio" name="active" value="1" '.(((isset($data['active']) && $data['active'] == 1) || !isset($data['active'])) ? "checked" : "").'> Active
												</label>
												<label>
													<input type="radio" name="active" value="0" '.((isset($data['active']) && $data['active'] == 0) ? "checked" : "").'> Non Active
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Model</label>
										<div class="col-md-9 col-sm-9 col-xs-12">';
											foreach((Array) $dataModel AS $key => $val){
												echo '<div class="checkbox">
														<label>
															<input type="checkbox" name="model_'.$val['id'].'" value="'.$val['id'].'" '.((isset($val['id_model']) && $val['id_model'] == $val['id']) ? 'checked' : '').' > '.$val['brand'].' - '.$val['model'].'
														</label>
													</div>';
											}
										echo '</div></div>';
							}
						?>
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
		$(function() {
			$('#kode_part').on('keypress', function(e) {
				if (e.which == 32)
					return false;
			});
			$('#cancel').on('click', function(){
				window.location.replace("<?php echo site_url('/Sparepart/index');?>");
			});
		});
		</script>
    <!-- /Datatables -->