		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo (!isset($data['id']) ? 'Add' : 'Edit');?> Teknisi</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
		  			<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Technician'); ?>" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>">
                            <input type="text" id="nik" name="nik" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['nik'])) echo $data['nik'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="id_workshop" class="form-control" required="required">
							<option value="">-- Select One --</option>
							<?php
								foreach ((Array) $arrWorkshop as $key => $val){
									echo '<option value="'.$val['id'].'" '.((isset($data['id_workshop']) && $data['id_workshop'] == $val['id']) ? 'selected' : '').'>'.$val['name'].'</option>';
								}
							?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Job<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="id_wo_tipe" class="form-control" required="required">
							             <option value="">-- Select One --</option>
              							<?php
              								foreach ((Array) $arrWOTipe as $key => $val){
              									echo '<option value="'.$val['id'].'" '.((isset($data['id_wo_tipe']) && $data['id_wo_tipe'] == $val['id']) ? 'selected' : '').'>'.$val['tipe'].'</option>';
              								}
              							?>
                          </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['nama'])) echo $data['nama'];?>">
                        </div>
                      </div>
                      <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Alamat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <textarea id="alamat" name="alamat" class="form-control" rows="5" required="required"><?php if(isset($data['alamat'])) echo $data['alamat'];?></textarea>
						</div>       
					  </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon 1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="no_telepon1" name="no_telepon1" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['no_telepon1'])) echo $data['no_telepon1'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon 2
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="no_telepon2" name="no_telepon2" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['no_telepon2'])) echo $data['no_telepon2'];?>">
                        </div>
                      </div>                      
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio">
                            <label>
                              <input type="radio" name="active" value="1" <?php if((isset($data['active']) && $data['active'] == 1) || !isset($data['active'])) echo 'checked';?>> Active
                            </label>
                            <label>
                              <input type="radio" name="active" value="0" <?php if(isset($data['active']) && $data['active'] == 0) echo 'checked';?>> Non Active
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="<?php echo (isset($data['id']) ? 'update':'save');?>">Submit</button>
                        </div>
                      </div>
                    </form>
                </div>  
                </div>                                  
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
    <!-- /Datatables -->
