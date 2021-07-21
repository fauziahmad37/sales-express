		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Penerimaan Stok Baru</h2>
					<span class="right"><a href="<?php echo site_url('/Inventory/penerimaan');?>" class="btn btn-danger">List Penerimaan</a></span>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
		  			<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Inventory/penerimaan_add'); ?>" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<input type="hidden" name="id_workshop" value="<?php echo $this->user['id_workshop'];?>">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?php echo array_get($arrWorkshop, $this->user['id_workshop'], 'id', 'name');?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Referensi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="nomor_referensi" name="nomor_referensi" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tanggal Penerimaan<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						 <div class="input-group date form_date col-md-4" data-date-format="yyyy-mm-dd" data-link-field="dtp_input1">
							<input class="form-control inputdate" size="auto" type="text" name="tgl" id="tgl" value="<?php echo date('Y-m-d');?>" readonly>
							<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
						</div>
						</div>       
					  </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="save">Simpan</button>
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
		<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <!-- /Datatables -->
    <script>
    $(document).ready(function(){
		$('#no_referensi').on('keypress', function(e) {
			if (e.which == 32)
				return false;
		});
		$('.form_date').datetimepicker({
			autoclose: 1,
			startView: 2,
			minView: 2
		});
	});
    </script>
