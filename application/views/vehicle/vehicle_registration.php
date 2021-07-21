<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Register New Vehicle  <?php
						if (isset($error)){
						echo $error['error'];
						}
						?>
					</h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Vehicle/add_vehicle_registration'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >No Polisi <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="text" id="no_polisi" value="<?php if(isset($data['no_polisi'])) echo $data['no_polisi']; ?>" name="no_polisi" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>
							</div>
				  
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tahun">Tahun <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="tahun" name="tahun" value="<?php if(isset($data['tahun'])) echo $data['tahun']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase" />
								</div>
							</div>
					
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit_bisnis">Unit Bisnis <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="unit_bisnis" name="unit_bisnis" value="<?php if(isset($data['unit_bisnis'])) echo $data['unit_bisnis']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" required="required"/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="location">Location <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" name="location" id="location" value="<?php if(isset($data['location'])) echo $data['location']; ?>" class="form-control inputdate" required="required" >
								</div>
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="alamat" name="alamat" value="<?php if(isset($data['alamat'])) echo $data['alamat']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>       
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipe">Tipe <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="tipe" name="tipe" value="<?php if(isset($data['tipe'])) echo $data['tipe']; ?>" required="required" class="form-control form_date" />
								</div>
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rangka">No Rangka <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="no_rangka" name="no_rangka" value="<?php if(isset($data['no_rangka'])) echo $data['no_rangka']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_mesin">No Mesin <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="no_mesin" name="no_mesin" value="<?php if(isset($data['no_mesin'])) echo $data['no_mesin']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >No BPKB <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="no_bpkb" name="no_bpkb" value="<?php if(isset($data['no_bpkb'])) echo $data['no_bpkb']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Posisi BPKB <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="posisi_bpkb" class="form-control">
									<option value="">-- Select One --</option>
										<option value="BRI" <?php if(isset($data['posisi_bpkb']) && $data['posisi_bpkb'] == 'BRI') echo 'selected' ?> >BRI </option>;
										<option value="HO" <?php if(isset($data['posisi_bpkb']) && $data['posisi_bpkb'] == 'HO') echo 'selected' ?> >HO </option>;
								  </select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status Unit <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="status_unit" class="form-control">
									<option value="">-- Select One --</option>
										<option value="OPEN" <?php if(isset($data['status_unit']) && $data['status_unit'] == 'OPEN') echo 'selected' ?> >OPEN </option>;
										<option value="BOOKING" <?php if(isset($data['status_unit']) && $data['status_unit'] == 'BOOKING') echo 'selected' ?> >BOOKING </option>;
										<option value="SOLD" <?php if(isset($data['status_unit']) && $data['status_unit'] == 'SOLD') echo 'selected' ?> >SOLD </option>;
								  </select>
								</div>
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pt">PT <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="pt" name="pt" value="<?php if(isset($data['pt'])) echo $data['pt']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_dasar">Harga Dasar <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input readonly type="text" id="harga_dasar" name="harga_dasar" value="<?php if(isset($data['harga_dasar'])) echo $data['harga_dasar']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"

										<?php if ($this->user['id_privilege'] == Admin::SALES_ADMIN): echo "readonly";?>	
										<?php endif ?>
									/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_dasar_khusus">Harga Dasar Khusus <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="harga_dasar_khusus" name="harga_dasar_khusus" value="<?php if(isset($data['harga_dasar_khusus'])) echo $data['harga_dasar_khusus']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase" 

										<?php if ($this->user['id_privilege'] == Admin::SALES_ADMIN): echo "readonly";?>	
										<?php endif ?>
									/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="komisi">Komisi <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="komisi" name="komisi" value="<?php if(isset($data['komisi'])) echo $data['komisi']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"

										<?php if ($this->user['id_privilege'] == Admin::SALES_ADMIN): echo "readonly";?>	
										<?php endif ?>
									/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="biaya_penjualan">Biaya Penjualan <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="biaya_penjualan" name="biaya_penjualan" value="<?php if(isset($data['biaya_penjualan'])) echo $data['biaya_penjualan']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"

										<?php if ($this->user['id_privilege'] == Admin::SALES_ADMIN): echo "readonly";?>	
										<?php endif ?>
									/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="price_list">Price List <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="price_list" name="price_list" value="<?php if(isset($data['price_list'])) echo $data['price_list']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"

										<?php if ($this->user['id_privilege'] == Admin::SALES_ADMIN): echo "readonly";?>	
										<?php endif ?>
									/>
								</div>
							</div>

							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Kondisi 
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="kondisi" class="form-control">
									<option value="">-- Select One --</option>
										<option value="C" <?php if(isset($data['kondisi']) && $data['kondisi'] == 'C') echo 'selected' ?> >Cukup </option>;
										<option value="K" <?php if(isset($data['kondisi']) && $data['kondisi'] == 'K') echo 'selected' ?> >Kurang </option>;
								  </select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan">Keterangan <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="keterangan" name="keterangan" value="<?php if(isset($data['keterangan'])) echo $data['keterangan']; ?>" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"
									/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_depan">Upload Foto Depan
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  type="file" name="userfile1" size="20" class=" mr-sm-2" />
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_belakang">Upload Foto Belakang
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  type="file" name="userfile2" size="20" class=" mr-sm-2" />
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_kanan">Upload Foto Kanan
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  type="file" name="userfile3" size="20" class=" mr-sm-2" />
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_kiri">Upload Foto Kiri
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  type="file" name="userfile4" size="20" class=" mr-sm-2" />
								</div>       
							</div>
						
							<div class="ln_solid"></div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Depan
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<a target="_blank" href="<?php echo base_url($data['path_depan']);?>"><img class="responsive" src="<?php echo base_url($data['path_depan']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Belakang
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<a target="_blank" href="<?php echo base_url($data['path_belakang']);?>"><img class="responsive" src="<?php echo base_url($data['path_belakang']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Kanan
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<a target="_blank" href="<?php echo base_url($data['path_kanan']);?>"><img class="responsive" src="<?php echo base_url($data['path_kanan']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Kiri
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<a target="_blank" href="<?php echo base_url($data['path_kiri']);?>"><img class="responsive" src="<?php echo base_url($data['path_kiri']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
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