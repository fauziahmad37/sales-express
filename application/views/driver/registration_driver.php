<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
	<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Driver/'); ?>" method="post" enctype="multipart/form-data">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>Driver Registration</h2>
					<div class="clearfix"></div>
				</div>
				
				<a href="<?php echo site_url('/Driver/list_driver_registration'); ?>" class="btn btn-info" role="button">Data Registration </a>
				
				<div id="ajax-modal-car" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
				<div class="x_content">
					
						<div class="form-group">
						   					  
							<input type="hidden" name="ktp_id" value="<?php if(isset($data_edit['ktp_id'])){ echo $data_edit['ktp_id']; } ?>" />
							<input type="hidden" name="sim_id" value="<?php if(isset($data_edit['sim_id'])){ echo $data_edit['sim_id']; } ?>" />
							<input type="hidden" name="id" value="<?php if(isset($data_edit['id'])){ echo $data_edit['id']; } ?>" />
							
							<div class="form-group" id="name_div">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="text"  name="name" value="<?php if(isset($data_edit['name'])){ echo $data_edit['name']; } ?>" 
									class="form-control col-md-7 col-xs-12 text-uppercase"/>
								</div>                   
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipe <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="tipe" class="form-control">
									<option value="">-- Select One --</option>
										<option value="REGULAR" <?php if(isset($data_edit['tipe']) && $data_edit['tipe'] == 'REGULAR') echo 'selected' ?> >REGULAR</option>;
										<option value="TIARA" <?php if(isset($data_edit['tipe']) && $data_edit['tipe'] == 'TIARA') echo 'selected' ?>>TIARA</option>;
								  </select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ketentuan Jaminan <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="ketentuan_jaminan" class="form-control">
									<option value="">-- Select One --</option>
										<option value="Baru" <?php if(isset($data_edit['ketentuan_jaminan']) && $data_edit['ketentuan_jaminan'] == 'Baru') echo 'selected' ?> >Driver Baru</option>;
										<option value="Lama" <?php if(isset($data_edit['ketentuan_jaminan']) && $data_edit['ketentuan_jaminan'] == 'Lama') echo 'selected' ?>>Driver Lama</option>;
								  </select>
								</div>
							</div>

							<div class="form-group" id="pool_div">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="pool_id" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrPool as $key => $val){
											echo '<option value="'.$val['id'].'" '.((isset($data_edit['pool_id']) && $data_edit['pool_id'] == $val['id']) ? 'selected' : '').' >'.$val['name'].'</option>';
										}
									?>
								  </select>
								</div>
							</div>
						 
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Place Of Birth <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="place_of_birth" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrCity as $key => $val){
											echo '<option value="'.$val['id'].'" '.((isset($data_edit['city_id']) && $data_edit['city_id'] == $val['id']) ? 'selected' : '').' >'.$val['name'].'</option>';
										}
									?>
								  </select>
								</div>
								               
							</div>
						 
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Date Of Birth <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="text" id="datepicker" name='date_of_birth' value="<?php if(isset($data_edit['date_of_birth'])) echo date('m/d/Y', strtotime($data_edit['date_of_birth'])); ?>" 
									class="form-control col-md-7 col-xs-12">
								</div>       
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="gender" class="form-control">
									<option value="">-- Select One --</option>
										<option value="M" <?php if(isset($data_edit['gender']) && $data_edit['gender'] == 'M') echo 'selected' ?> >Male</option>;
										<option value="F" <?php if(isset($data_edit['gender']) && $data_edit['gender'] == 'F') echo 'selected' ?> >Female</option>;
								  </select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Blood <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="blood" class="form-control">
									<option value="">-- Select One --</option>
										<option value="A"  <?php if(isset($data_edit['blood']) && $data_edit['blood'] == 'A') echo 'selected' ?> >A</option>;
										<option value="B"  <?php if(isset($data_edit['blood']) && $data_edit['blood'] == 'B') echo 'selected' ?> >B</option>;
										<option value="AB" <?php if(isset($data_edit['blood']) && $data_edit['blood'] == 'AB') echo 'selected' ?> >AB</option>;
										<option value="O"  <?php if(isset($data_edit['blood']) && $data_edit['blood'] == 'O') echo 'selected' ?> >O</option>;
								  </select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" ">Religion <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="religion" class="form-control">
									<option value="">-- Select One --</option>
										<option value="Islam" <?php if(isset($data_edit['religion']) && $data_edit['religion'] == 'Islam') echo 'selected' ?> >Islam</option>;
										<option value="Kristen" <?php if(isset($data_edit['religion']) && $data_edit['religion'] == 'Kristen') echo 'selected' ?>>Kristen</option>;
										<option value="Katholik" <?php if(isset($data_edit['religion']) && $data_edit['religion'] == 'Katholik') echo 'selected' ?>>Katholik</option>;
										<option value="Hindu"<?php if(isset($data_edit['religion']) && $data_edit['religion'] == 'Hindu') echo 'selected' ?>>Hindu</option>;
										<option value="Budha"<?php if(isset($data_edit['religion']) && $data_edit['religion'] == 'Budha') echo 'selected' ?>>Budha</option>;
										<option value="Kong Hu Chu"<?php if(isset($data_edit['religion']) && $data_edit['religion'] == 'Kong Hu Chu') echo 'selected' ?>>Kong Hu Chu</option>;
										<option value="Lainnya"<?php if(isset($data_edit['religion']) && $data_edit['religion'] == 'Lainnya') echo 'selected' ?>>Lainnya</option>;
								  </select>
								</div>                      
							</div>
						  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Last Education <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="last_education" class="form-control">
									<option value="">-- Select One --</option>
										<option value="SD" <?php if(isset($data_edit['last_education']) && $data_edit['last_education'] == 'SD') echo 'selected' ?> >SD</option>;
										<option value="SMP" <?php if(isset($data_edit['last_education']) && $data_edit['last_education'] == 'SMP') echo 'selected' ?>>SMP</option>;
										<option value="SMA" <?php if(isset($data_edit['last_education']) && $data_edit['last_education'] == 'SMA') echo 'selected' ?>>SMA</option>;
										<option value="Universitas" <?php if(isset($data_edit['last_education']) && $data_edit['last_education'] == 'Universitas') echo 'selected' ?>>Universitas</option>;
										<option value="Lainnya" <?php if(isset($data_edit['last_education']) && $data_edit['last_education'] == 'Lainnya') echo 'selected' ?>>Lainnya</option>;
								  </select>
								</div>                      
							</div>
						 
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Bank Type 
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="bank" class="form-control">
										<option value="">-- Select One --</option>
										<option value="CIMB NIAGA" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'CIMB NIAGA') echo 'selected' ?>>CIMB NIAGA</option>;
										<option value="BCA" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'BCA') echo 'selected' ?>>BCA</option>;
										<option value="BRI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'BRI') echo 'selected' ?>>BRI</option>;
										<option value="MANDIRI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'MANDIRI') echo 'selected' ?>>MANDIRI</option>;
										<option value="BTN" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'BTN') echo 'selected' ?>>BTN</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'BNI') echo 'selected' ?>>BNI</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'BUKOPIN') echo 'selected' ?>>BUKOPIN</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'DANAMON') echo 'selected' ?>>DANAMON</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'MAYBANK') echo 'selected' ?>>MAYBANK</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'MAYAPADA') echo 'selected' ?>>MAYAPADA</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'MEGA') echo 'selected' ?>>MEGA</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'PANIN') echo 'selected' ?>>PANIN</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'PERMATA') echo 'selected' ?>>PERMATA</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'DKI') echo 'selected' ?>>DKI</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'HSBC') echo 'selected' ?>>HSBC</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'JABAR') echo 'selected' ?>>JABAR</option>;
										<option value="BNI" <?php if(isset($data_edit['bank']) && $data_edit['bank'] == 'VICTORIA') echo 'selected' ?>>VICTORIA</option>;
								  </select>
								</div>                      
							</div>
						 
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Rekening Number <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="number" name="bank_account_number" value="<?php if(isset($data_edit['bank_account_number'])){ echo $data_edit['bank_account_number']; } ?>" 
									class="form-control col-md-7 col-xs-12" maxlength="12" required/>
								</div>                      
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Upload Buku Tabungan<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input <?php if(!isset($data_edit['id'])) echo 'required="required"'; ?> type="file" name="userfile4" size="20" class=" mr-sm-2" />
								</div>       
							</div>
						
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="number" name="phone_number" value="<?php if(isset($data_edit['phone'])){ echo $data_edit['phone']; } ?>" 
									class="form-control col-md-7 col-xs-12" />
								</div>                      
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Emergency Number <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  required type="number" name="emergency_number" value="<?php if(isset($data_edit['emergency_number'])){ echo $data_edit['emergency_number']; } ?>"
									class="form-control col-md-7 col-xs-12" />
								</div>                      
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input required type="text" name="email" value="<?php if(isset($data_edit['email'])){ echo $data_edit['email']; } ?>"
									class="form-control col-md-7 col-xs-12" />
								</div>                      
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Upload Foto<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input  <?php if(!isset($data_edit['id'])) echo 'required="required"'; ?> type="file" name="userfile" size="20" class=" mr-sm-2" />
								</div>       
							</div>
						 
						  <div class="ln_solid"></div>
						 
					
                </div>
              </div>
            </div>
        </div>
		
		
		<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
					  <h2>KTP and SIM</h2>

					  <div class="clearfix"></div>
                </div>
				
                <div class="x_content">
					<div class="form-group">
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SKCK Number <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required type="text" name="skck_number" value="<?php if(isset($data_edit['skck_number'])){ echo $data_edit['skck_number']; } ?>"
								class="form-control col-md-7 col-xs-12 text-uppercase" />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SKCK Type <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="skck_type" class="form-control">
								<option value="">-- Select One --</option>
									<option value="Rekomendasi Kapool" <?php if(isset($data_edit['skck_type']) && $data_edit['skck_type'] == 'Rekomendasi Kapool') echo 'selected' ?>>Rekomendasi Kapool</option>;
									<option value="Kepolisian" <?php if(isset($data_edit['skck_type']) && $data_edit['skck_type'] == 'Kepolisian') echo 'selected' ?>>Kepolisian</option>;
							  </select>
							</div>                    
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">KTP Number <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required type="number" name="ktp_number" value="<?php if(isset($data_edit['ktp_number'])){ echo $data_edit['ktp_number']; } ?>"
								class="form-control col-md-7 col-xs-12" />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Upload KTP<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input  <?php if(!isset($data_edit['id'])) echo 'required="required"'; ?> type="file" name="userfile2" size="20" class=" mr-sm-2" />
							</div>       
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">KTP Location <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<select name="ktp_location" class="form-control">
									<option value="">-- Select One --</option>
										<option value="Jakarta" <?php if(isset($data_edit['location']) && $data_edit['location'] == 'Jakarta') echo 'selected' ?>>Jakarta </option>;
										<option value="Luar Jakarta" <?php if(isset($data_edit['location']) && $data_edit['location'] == 'Luar Jakarta') echo 'selected' ?>>Luar Jakarta </option>;
								  </select>
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Type KTP <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<select name="ktp_type" class="form-control">
									<option value="">-- Select One --</option>
										<option value="Biasa" <?php if(isset($data_edit['ktp_type']) && $data_edit['ktp_type'] == 'Biasa') echo 'selected' ?>>Biasa</option>;
										<option value="KTP Seumur Hidup" <?php if(isset($data_edit['ktp_type']) && $data_edit['ktp_type'] == 'KTP Seumur Hidup') echo 'selected' ?>>KTP Seumur Hidup</option>;
								  </select>
							</div>                      
						</div>
						  
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">KTP Address <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required type="text" name="ktp_address" value="<?php if(isset($data_edit['ktp_address'])){ echo $data_edit['ktp_address']; } ?>"
								class="form-control col-md-7 col-xs-12 text-uppercase" />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Domisili Number <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" name="domisili_number" value="<?php if(isset($data_edit['domisili_number'])){ echo $data_edit['domisili_number']; } ?>"
								class="form-control col-md-7 col-xs-12 text-uppercase" />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Domicile Address <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required type="text" name="domicile_address" value="<?php if(isset($data_edit['domicile_address'])){ echo $data_edit['domicile_address']; } ?>"
								class="form-control col-md-7 col-xs-12 text-uppercase" />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Upload Domisili<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input  <?php if(!isset($data_edit['id'])) echo 'required="required"'; ?> type="file" name="userfile5" size="20" class=" mr-sm-2" />
							</div>       
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SIM Number <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required type="number" name="sim_number" value="<?php if(isset($data_edit['sim_number'])){ echo $data_edit['sim_number']; } ?>"
								class="form-control col-md-7 col-xs-12" />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Upload SIM<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input  <?php if(!isset($data_edit['id'])) echo 'required="required"'; ?> type="file" name="userfile3" size="20" class=" mr-sm-2" />
							</div>       
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Type SIM <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<select name="type_sim" class="form-control">
									<option value="">-- Select One --</option>
										<option value="A" <?php if(isset($data_edit['sim_type']) && $data_edit['sim_type'] == 'A') echo 'selected' ?>>A</option>;
										<option value="A UMUM" <?php if(isset($data_edit['sim_type']) && $data_edit['sim_type'] == 'A UMUM') echo 'selected' ?>>A UMUM</option>;
										<option value="B1" <?php if(isset($data_edit['sim_type']) && $data_edit['sim_type'] == 'B1') echo 'selected' ?>>B1</option>;
										<option value="B1 UMUM" <?php if(isset($data_edit['sim_type']) && $data_edit['sim_type'] == 'B1 UMUM') echo 'selected' ?>>B1 UMUM</option>;
										<option value="B2" <?php if(isset($data_edit['sim_type']) && $data_edit['sim_type'] == 'B2') echo 'selected' ?>>B2</option>;
										<option value="B2 UMUM" <?php if(isset($data_edit['sim_type']) && $data_edit['sim_type'] == 'B2 UMUM') echo 'selected' ?>>B2 UMUM</option>;
								 </select>
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SIM Address <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required type="text" name="sim_address" value="<?php if(isset($data_edit['sim_address'])){ echo $data_edit['sim_address']; } ?>"
								class="form-control col-md-7 col-xs-12 text-uppercase" />
							</div>                      
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SIM Expire Date <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="datepicker2" name='sim_expire_date' value="<?php if(isset($data_edit['sim_expire_date'])) echo date('m/d/Y', strtotime($data_edit['sim_expire_date'])); ?>" 
								class="form-control col-md-7 col-xs-12">
							</div>                       
						</div>
						  
						 
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<?php
									if(isset($data_edit['name'])) {
										echo '<button type="submit" class="btn btn-success" id="update" name="update">Update</button>';
									}else{
										echo '<button type="submit" class="btn btn-success" id="save" name="save">Save</button>';
									}
								?>
							
							
								
							</div>
						</div>
					
					</div>
				</div>
			</div>	
        </div>     
			 
    </form>        
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
		
		
		<!-- Date Picker -->
		
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

      $(document).ready(function() {
				
		
			$( "#datepicker" ).datepicker();
			$( "#datepicker2" ).datepicker();

				
		

		//$("#update").hide(); 
       } );
    </script>
    <!-- /Datatables -->