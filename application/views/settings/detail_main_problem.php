		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo (!isset($data['id']) ? 'Add' : 'Edit');?> Main Problem</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
		  			<form id="form-warna" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Settings/detail_main_problem'); ?>" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Main Problem <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>">
                            <input type="text" id="problem" name="problem" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['problem'])) echo $data['problem'];?>">
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
