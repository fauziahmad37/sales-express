		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cek Tabungan Mobil</h2>
                    <div class="clearfix"></div>
                  </div>
				  <div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
                  <div class="x_content">
		  			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Savings/detail'); ?>" method="post">
                      <div class="form-group">
                      	<input type="hidden" id="id_car" name="id_car"/>
                      	<input type="hidden" id="id_pool" name="id_pool"/>                      	
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rangka">No. Rangka <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_rangka" name="no_rangka" required="required" class="form-control col-md-7 col-xs-12" />
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						  <a id="click_no_rangka"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_mesin">No. Mesin <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_mesin" name="no_mesin" class="form-control col-md-7 col-xs-12" required="required"/>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						  <a id="click_no_mesin"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_polisi">No. Polisi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_polisi" name="no_polisi" class="form-control col-md-7 col-xs-12" required="required"/>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						  <a id="click_no_polisi"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					  </div>
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pintu">No. Pintu <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_pintu" name="no_pintu" class="form-control col-md-7 col-xs-12"/>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						  <a id="click_no_pintu"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					  </div><div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						 <input type="text" id="pool" name="pool" required="required" class="form-control col-md-7 col-xs-12" readonly/>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tahun Mobil<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 <input type="text" id="tahun" name="tahun" required="required" class="form-control col-md-7 col-xs-12" readonly/>
						</div>       
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_stnk">Nama <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                      
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Alamat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <textarea id="alamat" name="alamat" class="form-control" rows="5" required="required" readonly></textarea>
						</div>       
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telepon">No. Telepon <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_telepon1" name="no_telepon1" required="required" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                     
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telepon" readonly>No. Telepon 2 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_telepon2" name="no_telepon2" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                     
					  </div>
					  <div class="ln_solid"></div>
					  <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success" id="save" name="save">Submit</button>
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
    <script>
      $(document).ready(function() {
      	var $modal = $("#ajax-modal-savings"); 
		$("#click_no_rangka").on("click", function(){
			var no_rangka = $("#no_rangka").val();
			if(no_rangka !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Savings/get_data_by_no_rangka');?>',{"no_rangka": no_rangka});
			}
		});
		$("#click_no_mesin").on("click", function(){
			var no_mesin = $("#no_mesin").val();
			if(no_mesin !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Savings/get_data_by_no_mesin');?>',{"no_mesin": no_mesin});
			}
		});
		$("#click_no_polisi").on("click", function(){
			var no_polisi = $("#no_polisi").val();
			if(no_polisi !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Savings/get_data_by_no_polisi');?>',{"no_polisi": no_polisi});
			}
		});
		$("#click_no_pintu").on("click", function(){
			var no_pintu = $("#no_pintu").val();
			if(no_pintu !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Savings/get_data_by_no_pintu');?>',{"no_pintu": no_pintu});
			}
		});
        } );
    </script>
    <!-- /Datatables -->
