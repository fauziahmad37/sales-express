		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Mobil</h2>

                  <div class="clearfix"></div>
                </div>
				<div id="ajax-modal-car" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
                <div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Work_order/new_wo/'); ?>" method="post">
						  <div class="form-group">
						    <input type="hidden" id="id" name="id"/>
						    <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Customer <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="id_jenis_customer" id="id_jenis_customer" class="form-control" required="required">
								<option value="">-- Select One --</option>
								<?php
									foreach ((Array) $arrJenisCustomer as $key => $val){
										echo '<option value="'.$val['id'].'">'.$val['nama'].'</option>';
									}
								?>
							  </select>
							</div>
						  </div>
						  <div class="form-group" id="pool_div">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="id_pool" id="id_pool" class="form-control">
								<option value="">-- Select One --</option>
								<?php
									foreach ((Array) $arrPool as $key => $val){
										echo '<option value="'.$val['id'].'">'.$val['nama'].'</option>';
									}
								?>
							  </select>
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
						  </div>
						  <div class="form-group" id="kip_div">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kip_div">No. KIP 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="text" id="kip" name="kip"  class="form-control col-md-7 col-xs-12" />
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
							  <a id="click_kip"><i class="fa fa-search fa-2x"></i></a>
							</div>                        
						  </div>
						 
						  <div class="form-group" id="nik_div">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik_div">NIK 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="text" id="nik" name="nik" class="form-control col-md-7 col-xs-12" />
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
							  <a id="click_nik"><i class="fa fa-search fa-2x"></i></a>
							</div>                        
						  </div>						  
						  <div class="form-group">
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
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Model <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="id_model" id="id_model" class="form-control" required="required">
								<option value="">-- Select One --</option>
								<?php
									foreach ((Array) $arrModel as $key => $val){
										echo '<option value="'.$val['id'].'">'.$val['brand'].' - '.$val['model'].'</option>';
									}
								?>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Warna <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="id_warna" id="id_warna" class="form-control" required="required">
								<option value="">-- Select One --</option>
								<?php
									foreach ((Array) $arrWarna as $key => $val){
										echo '<option value="'.$val['id'].'">'.$val['warna'].'</option>';
									}
								?>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tahun Mobil<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							 <div class="input-group date form_date col-md-4" data-date-format="yyyy" data-link-field="dtp_input1">
								<input class="form-control inputdate" size="auto" type="text" name="tahun" id="tahun" value="<?php echo date('Y', strtotime('- 7 year'));?>" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
							</div>
							</div>       
						  </div>
						  <div class="form-group" id="div_nama">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_stnk">Nama <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="text" id="nama" name="nama" required='required' class="form-control col-md-7 col-xs-12" />
							</div>                      
						  </div>

						  <div class="form-group" id="div_alamat">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Alamat <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <textarea id="alamat" name="alamat" required="required" class="form-control" rows="5" ></textarea>
							</div>       
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="remarks">Catatan </label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="text" id="remarks" name="remarks" class="form-control col-md-7 col-xs-12" rows="5">
							</div>       
						  </div>
						  <div class="form-group" id="pt_div">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="owner_pt_id">PT </label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  	<select name="owner_pt_id" id="owner_pt_id" class="form-control" readonly>
									<option value="" >-- Select One --</option>
									<?php
										foreach ((Array) $arrPT as $key => $val){
											echo '<option value="'.$val['ptid'].'" >'.$val['ptshortname'].' - '.$val['ptfullname'].'</option>';
										}
									?>
							  	</select>
							</div>       
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telepon">No. Telepon <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="text" id="no_telepon1" name="no_telepon1" required="required" class="form-control col-md-7 col-xs-12" />
							</div>                     
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telepon">No. Telepon 2 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="text" id="no_telepon2" name="no_telepon2" class="form-control col-md-7 col-xs-12" />
							</div>                     
						  </div>
						  <div class="ln_solid"></div>
						  <div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							  <button type="submit" class="btn btn-success" id="save" name="save">Submit</button>
							  <button type="submit" class="btn btn-success" id="update" name="update">Submit</button>
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
    <script>

      $(document).ready(function() {
		$("#kip_div").hide();
		$("#nik_div").hide();
		$("#pool_div").hide();
		$("#div_no_pintu").hide();				
		$('.form_date').datetimepicker({
			autoclose: 1,
			startView: 4,
			minView: 4
		});
		$('#no_rangka').on('keypress', function(e) {
			if (e.which == 32)
				return false;
		});
		$('#no_mesin').on('keypress', function(e) {
			if (e.which == 32)
				return false;
		});		
		var $modal = $("#ajax-modal-car"); 
		$("#click_no_rangka").on("click", function(){
			var no_rangka = $("#no_rangka").val();
			if(no_rangka !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Work_order/get_data_by_no_rangka');?>',{"no_rangka": no_rangka});
			}
		});
		$("#click_no_mesin").on("click", function(){
			var no_mesin = $("#no_mesin").val();
			if(no_mesin !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Work_order/get_data_by_no_mesin');?>',{"no_mesin": no_mesin});
			}
		});
		$("#click_no_polisi").on("click", function(){
			var no_polisi = $("#no_polisi").val();
			if(no_polisi !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Work_order/get_data_by_no_polisi');?>',{"no_polisi": no_polisi});
			}
		});
		$("#click_no_pintu").on("click", function(){
			var no_pintu = $("#no_pintu").val();
			if(no_pintu !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Work_order/get_data_by_no_pintu');?>',{"no_pintu": no_pintu});
			}
		});

		$('#id_jenis_customer').on('change', function() {
		  if ( this.value == <?php echo Admin::CUSTOMER_TIPE_REGULER;?>)
		  {
			//Add the "required" attribute.
			$('#id_pool').attr("required", "true");			  
			$('#no_pintu').attr("required", "true");			  			
			
			$("#pt_div").show();
			$("#nik_div").hide();
			$("#kip_div").show();
			$("#pool_div").show();
			$("#div_no_pintu").show();			
		  }
		  else if( this.value == <?php echo Admin::CUSTOMER_TIPE_EAGLE; ?>)
		  {
			
			$('#id_pool').attr("required", "true");			  
			$('#no_pintu').attr("required", "true");			  			
			$('#div_nama').show();
			$('#div_alamat').show();
			$("#pt_div").show();
			$("#nik_div").hide();
			$("#kip_div").show();
			$("#pool_div").show();
			$("#div_no_pintu").show();	
		  }
		  else if( this.value == <?php echo Admin::CUSTOMER_TIPE_UMUM; ?>)
		  {
		  	$('#id_pool').removeAttr("required");			  
			$('#no_pintu').removeAttr("required");		
						
			document.getElementById('id_pool').value = "";		  	
			document.getElementById('no_pintu').value = "";		  	
			
			$("#pt_div").hide();
			$("#kip_div").hide();
			$("#nik_div").hide();
			$("#pool_div").hide();
			$("#div_no_pintu").hide();
		  }
		  else if ( this.value == <?php echo Admin::CUSTOMER_TIPE_OHL; ?>)
		  {
		  	$('#id_pool').removeAttr("required");			  
			$('#no_pintu').removeAttr("required");		
						
			document.getElementById('id_pool').value = "";		  	
			document.getElementById('no_pintu').value = "";		  	

			$("#pt_div").show();
			$("#nik_div").hide();
			$("#kip_div").show();
			$("#pool_div").hide();
			$("#div_no_pintu").show();
		  }
		  else if( this.value == <?php echo Admin::CUSTOMER_TIPE_TIARA; ?>)
		  {
		  	$('#id_pool').removeAttr("required");			  
			$('#no_pintu').removeAttr("required");		
						
			document.getElementById('id_pool').value = "";		  	
			document.getElementById('no_pintu').value = "";		  	
			
			$("#div_no_pintu").show();
			$("#pt_div").show();
			$("#nik_div").show();
			$("#kip_div").show();
			$("#pool_div").show();
			
		  }else if( this.value == <?php echo Admin::CUSTOMER_TIPE_VATB; ?>)
		  {
		  	$('#id_pool').removeAttr("required");			  
			$('#no_pintu').removeAttr("required");		
						
			document.getElementById('id_pool').value = "";		  	
			document.getElementById('no_pintu').value = "";		  	
			
			$("#pt_div").show();
			$("#nik_div").show();
			$("#kip_div").show();
			$("#pool_div").show();
			$("#div_no_pintu").show();
		  }else if( this.value == <?php echo Admin::CUSTOMER_TIPE_OPERASIONAL; ?>)
		  {
		  	$('#id_pool').removeAttr("required");			  
			$('#no_pintu').removeAttr("required");		
						
			document.getElementById('id_pool').value = "";		  	
			document.getElementById('no_pintu').value = "";		  	
			
			$("#pt_div").hide();
			$("#nik_div").show();
			$("#kip_div").hide();
			$("#pool_div").hide();
			$("#div_no_pintu").hide();
		  }
		});

		$("#update").hide(); 
       } );
    </script>
    <!-- /Datatables -->