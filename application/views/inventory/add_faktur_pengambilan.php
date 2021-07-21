		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
				  <?php //print_r($arrWorkshop); ?>
                    <h2>Pengambilan Stok</h2>
					<span class="right"><a href="<?php echo site_url('/Inventory/penerimaan');?>" class="btn btn-danger">List Penerimaan</a></span>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<div id="ajax-modal-wo" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
		  			<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Inventory/pengambilan_add'); ?>" method="post">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<input type="hidden" name="id_workshop" value="<?php echo $this->user['id_workshop'];?>">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?php echo array_get($arrWorkshop, $this->user['id_workshop'], 'id', 'name');?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor WO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<input type="hidden" name="id_wo" id="id_wo">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly id="nomor_wo">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
						  <a id="click_nomor_wo"><i class="fa fa-search fa-2x"></i></a>
						</div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal WO <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly id="tanggal_wo">
                        </div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Model Mobil <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly id="model_mobil">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Mobil <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly id="jenis_mobil">
                        </div>
                      </div>                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="save" id="save" disabled>Simpan</button>
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
		$("#click_nomor_wo").on("click", function(){
			$("#ajax-modal-wo").html("");
			$("#ajax-modal-wo").modal();
			$("#ajax-modal-wo").load('<?php echo site_url('/Inventory/get_wo');?>',
				{"id_workshop": <?php echo $id_workshop;?>});
		});
	});
    </script>
