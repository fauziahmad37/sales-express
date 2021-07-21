		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo (!isset($data['id']) ? 'Add' : 'Edit');?> LTS</h2>
					<button class="btn btn-danger pull-right" id="cancel">Cancel</button>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
		  			<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Service/index'); ?>" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode LTS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>">
                            <input type="text" id="lts_code" name="lts_code" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['lts_code'])) echo $data['lts_code'].'" readonly'; else echo '"';?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi LTS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['description'])) echo $data['description'];?>" 
                            	<?php 
                            		if(
                            			$this->user['id_privilege'] == Admin::FINANCE 
                            			|| $this->user['id_privilege'] == Admin::FINANCE_HEAD    
                            			|| (isset($data['status']) && $data['status'] === 'Pending Approval')                       			
                            		) echo 'readonly';?>>
                        </div>
                      </div>
                      <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Flat Rate <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="number" id="flat_rate" name="flat_rate" min="1" class="form-control" value="<?php if(isset($data['flat_rate'])) echo number_format($data['flat_rate']); else echo 0;?>"
						  	<?php 
                            		if(
                            			$this->user['id_privilege'] == Admin::FINANCE 
                            			|| $this->user['id_privilege'] == Admin::FINANCE_HEAD
                            			|| (isset($data['status']) && $data['status'] === 'Pending Approval')                       			
                            		) echo 'readonly';?>>
						</div>       
					  </div>
                      <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Harga per Jam
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="hourly_price" name="hourly_price" class="form-control" value="<?php if(isset($data['hourly_price'])) echo ($data['hourly_price']); else echo 0;?>" readonly>
						</div>       
					  </div>
					  <?php 
					  if(
					  	($this->user['id_privilege'] == Admin::FINANCE 
					  	|| $this->user['id_privilege'] == Admin::ADMINISTRATOR
					  	|| $this->user['id_privilege'] == Admin::FINANCE_HEAD	  	
					  	) && isset($data['status'])
					  	){
					  	if($this->user['id_privilege'] != Admin::FINANCE_HEAD || ($data['status'] === 'Pending Approval') || !isset($data['status'])){
							  echo '<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hourly_price_proposed">Pengajuan Harga Baru per Jam 
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
								  <input type="number" min="0" id="hourly_price_proposed" name="hourly_price_proposed" class="form-control" value="'.(isset($data['hourly_price_proposed']) ? $data['hourly_price_proposed'] : 0).'" 
									'.(($this->user['id_privilege'] == Admin::FINANCE) ? 'required' : 'readonly').'>
								</div>       
							  </div>';
						  }
						  if($data['status'] !== 'Aktif') {
							  echo '<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga per Jam Baru Diajukan oleh
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
								  <input type="hidden" name="hourly_price_proposed_by" value="'.$data['hourly_price_proposed_by'].'">
								  <input type="text" class="form-control" value="'.(array_get($dataUser, $data['hourly_price_proposed_by'], 'id', 'username')).'" readonly>
								</div>       
							  </div>';
							  echo '<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga per Jam Baru Diajukan pada
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
								  <input type="text" class="form-control" name="hourly_price_proposed_dt" value="'.date('d M Y, H:i:s', strtotime($data['hourly_price_proposed_dt'])).'" readonly>
								</div>       
							  </div>';
						  }
						  if(isset($data['hourly_price_approved_by'])) {
							  echo '<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Perjam Skr Disetujui oleh
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
								  <input type="text" class="form-control" value="'.(array_get($dataUser, $data['hourly_price_approved_by'], 'id', 'username')).'" readonly>
								</div>       
							  </div>';
							  echo '<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Perjam Skr Diupdate pada
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
								  <input type="text" class="form-control" value="'.date('d M Y, H:i:s', strtotime($data['hourly_price_approved_dt'])).'" readonly>
								</div>       
							  </div>';
						  }
					   if(
					  	$this->user['id_privilege'] == Admin::FINANCE 
					  	|| $this->user['id_privilege'] == Admin::FINANCE_HEAD			  	
					  	) {
						  echo '<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Jenis Mobil
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="text" class="form-control" value="'.$data['jenis'].'" readonly>
							</div>       
						  </div>';
						}
					  }
					   if(
					  	($this->user['id_privilege'] == Admin::SCM_ADMIN 
					  	|| $this->user['id_privilege'] == Admin::ADMINISTRATOR)
					  	) {
						  echo '<div class="form-group">
						    <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Mobil <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="id_jenis_car" id="id_jenis_car" class="form-control" required="required">
								<option value="">-- Select One --</option>';
									foreach ((Array) $dataJenis as $key => $val){
										echo '<option value="'.$val['id'].'" '.($data['id_jenis_car'] == $val['id'] ? 'selected' : '').'>'.$val['jenis'].'</option>';
									}
							  echo '</select>
							</div>
						  </div>';
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
						  </div>';
                      }
                      ?>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <?php
						  if($this->user['id_privilege'] != Admin::FINANCE_HEAD){
								if(!isset($data['id']))
									echo '<button type="submit" class="btn btn-success" name="save">Submit</button>';
								else if($this->user['id_privilege'] == Admin::FINANCE)
									echo '<button type="submit" class="btn btn-success" name="update_proposed">Submit</button>';
								else
									echo '<button type="submit" class="btn btn-success" name="update">Submit</button>';
                          } else if($this->user['id_privilege'] == Admin::FINANCE_HEAD && isset($data['status']) && $data['status'] === 'Pending Approval'){
								echo '<button type="submit" class="btn btn-success" name="update_approved">Approved</button>';
                          }
                          ?>
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
			$('#lts_code').on('keypress', function(e) {
				if (e.which == 32)
					return false;
			});
			$('#cancel').on('click', function(){
				window.location.replace("<?php echo site_url('/Service/index');?>");
			});
		});
		</script>
    <!-- /Datatables -->
