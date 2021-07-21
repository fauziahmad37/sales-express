<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add New Customer <?php
						if (isset($error)){
						echo $error['error'];
						}
						?>
					</h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Customer/add'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
							

							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nik <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="text" id="nik" value="<?php if(isset($data['nik'])) echo $data['nik']; ?>" name="nik" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="nama" name="nama" value="<?php if(isset($data['nama'])) echo $data['nama']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Upload KTP
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  type="file" name="userfile1" size="20" class=" mr-sm-2" />
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Image KTP
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<a target="_blank" href="<?php if(isset($data['path_ktp'])) echo base_url($data['path_ktp']);?>"><img class="responsive" src="<?php if(isset($data['path_ktp'])) echo base_url($data['path_ktp']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="alamat" name="alamat" value="<?php if(isset($data['alamat'])) echo $data['alamat']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Badan Usaha </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="nama_badan_usaha" name="nama_badan_usaha" value="<?php if(isset($data['nama_badan_usaha'])) echo $data['nama_badan_usaha']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Lahir <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="text" id="datepicker" name='tanggal_lahir' value="<?php if(isset($data['tanggal_lahir'])) echo date('m/d/Y', strtotime($data['tanggal_lahir'])); ?>" 
									class="form-control col-md-7 col-xs-12">
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php if(isset($data['tempat_lahir'])) echo $data['tempat_lahir']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >No Telepon <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="no_telepon" name="no_telepon" value="<?php if(isset($data['no_telepon'])) echo $data['no_telepon']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Pemberi Kuasa </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" name="pemberi_kuasa" id="pemberi_kuasa" value="<?php if(isset($data['pemberi_kuasa'])) echo $data['pemberi_kuasa']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" >
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >No Kuasa </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" name="no_kuasa" id="no_kuasa" value="<?php if(isset($data['no_kuasa'])) echo $data['no_kuasa']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" >
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Kuasa 
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="datepicker2" name='tanggal_kuasa' value="<?php if(isset($data['tanggal_kuasa'])) echo date('m/d/Y', strtotime($data['tanggal_kuasa'])); ?>" 
									class="form-control col-md-7 col-xs-12">
								</div>       
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >No Identitas Badan Usaha </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" name="no_identitas_badan_usaha" id="no_identitas_badan_usaha" value="<?php if(isset($data['no_identitas_badan_usaha'])) echo $data['no_identitas_badan_usaha']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" >
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Perwakilan </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" name="nama_perwakilan" id="nama_perwakilan" value="<?php if(isset($data['nama_perwakilan'])) echo $data['nama_perwakilan']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" >
								</div>
							</div>
							
				  			<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >No Identitas Perwakilan </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" name="no_identitas_perwakilan" id="no_identitas_perwakilan" value="<?php if(isset($data['no_identitas_perwakilan'])) echo $data['no_identitas_perwakilan']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" >
								</div>
							</div>
							
				  			<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Tempat Lahir Perwakilan </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" name="tempat_lahir_perwakilan" id="tempat_lahir_perwakilan" value="<?php if(isset($data['tempat_lahir_perwakilan'])) echo $data['tempat_lahir_perwakilan']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" >
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Lahir Perwakilan </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  type="text" id="datepicker3" name='tanggal_lahir_perwakilan' value="<?php if(isset($data['tanggal_lahir_perwakilan'])) echo date('m/d/Y', strtotime($data['tanggal_lahir_perwakilan'])); ?>" 
									class="form-control col-md-7 col-xs-12">
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >No Telepon Perwakilan </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  type="text" name='no_telepon_perwakilan' value="<?php if(isset($data['no_telepon_perwakilan'])) echo $data['no_telepon_perwakilan']; ?>" 
									class="form-control col-md-7 col-xs-12">
								</div>       
							</div>


							<div class="ln_solid"></div>
				  
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<?php if(isset($data['id'])){
										echo '<button type="submit" class="btn btn-success" name="update">Update</button>';
									} else {
										echo '<button type="submit" class="btn btn-success" name="save">Save</button>';
									}?>
									
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
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>

<!-- ================================== YEAR PICKER ================================ -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

<!-- =============================================================================== -->

<!-- Datatables -->
<script>
	$(document).ready(function(){

		$( "#datepicker" ).datepicker();
		$( "#datepicker2" ).datepicker();
		$( "#datepicker3" ).datepicker();

		$('.form_date').datetimepicker({
			format: 'dd-mm-yyyy',
			pickTime: false,
			autoclose: 1,
			startView: 3,
			minView: 2,
			maxView: 4
		});

		$("#tahun").datepicker({
			format: "yyyy",
			viewMode: "years", 
			minViewMode: "years"
		});		
		
		
	});
</script>