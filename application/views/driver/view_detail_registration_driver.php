<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
                
				<div class="x_content"> 
					<h4>Driver Registration Detail</h4>

					<div class="x_panel tile">
						<div class="x_title">
							<h2>Data Registration</h2>
							<div class="clearfix"></div>
						</div>
						
						<div class="x_content">
							
							<div class="col-md-6 col-sm-6 col-xs-12"> 					
								<table class="table borderless" style="width:100%">
									
									<tr>
										<td style="padding:0px !important"><small>Driver Name</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['name']?></small></td>

										<td style="padding:0px !important"><small>Pool Name</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['pool_name']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Place Of Birth</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['place_of_birth'];?></small></td>
										
										<td style="padding:0px !important"><small>Date Of Birth</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['date_of_birth'] ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Gender</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['gender']; ?></small></td>

										<td style="padding:0px !important"><small>Blood</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['blood']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Religion</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['religion']; ?></small></td>
										
										<td style="padding:0px !important"><small>Last Education</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo nl2br($data['last_education']); ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Bank Account Number</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['bank_account_number']; ?></small></td>
										
										<td style="padding:0px !important"><small>Bank</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['bank']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Domisili Number</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['domisili_number']; ?></small></td>
										
										<td style="padding:0px !important"><small>Domicile Adress</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['domicile_address']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Phone</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['phone']; ?></small></td>

										<td style="padding:0px !important"><small>SKCK Number</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['skck_number']; ?></small></td>
									</tr>
									<tr>
										<td style="padding:0px !important"><small>Status</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['status']; ?></small></td>
										
										<td style="padding:0px !important"><small>Email</small></td>
										<td style="padding:0px !important"><small>:</small></td>
										<td style="padding:0px !important"><small><?php echo $data['email']; ?></small></td>
									</tr>
								</table>
							</div>
						</div>
					</div>               
					<div class="x_panel tile">
						<div class="x_title">
						  <h2>Data KTP & SIM</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="col-md-6 col-sm-6 col-xs-12"> 
								<table class="table borderless" style="width:100%">
								<tr>
									<td style="padding:0px !important"><small>KTP Number</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['ktp_number']; ?></small></td>

									<td style="padding:0px !important"><small>Location</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo nl2br($data['location']); ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>KTP Type</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['ktp_type']; ?></small></td>
									
									<td style="padding:0px !important"><small>Address</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo nl2br($data['ktp_address']); ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>SIM Number</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['sim_number']; ?></small></td>
									
									<td style="padding:0px !important"><small>SIM Type</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['sim_type']; ?></small></td>
								</tr>
								<tr>
									<td style="padding:0px !important"><small>SIM Address</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['sim_address']; ?></small></td>

									<td style="padding:0px !important"><small>SIM Expire Date</small></td>
									<td style="padding:0px !important"><small>:</small></td>
									<td style="padding:0px !important"><small><?php echo $data['sim_expire_date']; ?></small></td>
								</tr>
								</table>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12"> 
								<table class="table borderless" style="width:100%">
								</table>
							</div>
						</div>
					</div>
				
					<div class="x_panel tile">
						<div class="x_title">
							<h2>Attachment</h2>
							<div class="clearfix"></div>
							
						</div>
						<table>
							<tr>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['path_photo']);?>"><img class="responsive" src="<?php echo base_url($data['path_photo']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['path_ktp']);?>"><img class="responsive" src="<?php echo base_url($data['path_ktp']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['path_sim']);?>"><img class="responsive" src="<?php echo base_url($data['path_sim']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['path_rek']);?>"><img class="responsive" src="<?php echo base_url($data['path_rek']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['path_domisili']);?>"><img class="responsive" src="<?php echo base_url($data['path_domisili']);?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
							</tr>
							<tr>
								<td width="150">Photo</td>
								<td width="150">KTP</td>
								<td width="150">SIM</td>
								<td width="150">Rekening</td>
							</tr>
						</table>
						
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
				</div>
				
				
				
				<?php 
					if(($data['status'] === 'On Process' || $data['status'] === 'Rejected') &&(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
						$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT
						)) {
						echo '<button class="btn btn-primary no-print" onclick="approve('.$data['id'].')">Approve</button>';
						echo '<button class="btn btn-primary no-print" onclick="reject('.$data['id'].')">Reject</button>';
					}
					
					if(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR ||
						$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
						$this->user['id_privilege'] == Admin::OPERASIONAL
						) {
						echo '<button class="btn btn-warning no-print" onclick="edit('.$data['id'].')">Edit</button>';
					}

					// if($this->user['id_privilege'] == Admin::ADMINISTRATOR ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
					// 	$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT_HEAD ||
					// 	$this->user['id_privilege'] == Admin::OPERASIONAL
					// 	) {
					// 	echo '<button class="btn btn-primary no-print" onclick="edit('.$data['id'].')">Edit</button>';
					// 	echo '<button class="btn btn-alert no-print" onclick="update_photo('.$data['id'].')">Update Photo</button>';
					// 	echo '<button class="btn btn-alert no-print" onclick="update_photo_ktp('.$data['id'].')">Update KTP</button>';
					// 	echo '<button class="btn btn-alert no-print" onclick="update_photo_sim('.$data['id'].')">Update SIM</button>';
					// 	echo '<button class="btn btn-alert no-print" onclick="update_photo_rekening('.$data['id'].')">Update Rekening</button>';
					// 	echo '<button class="btn btn-alert no-print" onclick="update_photo_domisili('.$data['id'].')">Update Domisili</button>';
					// }
				?>
				
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
<script src="<?php echo base_url('/assets/js/jquery.redirect.js');?>"></script>	

<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Datatables -->
	
<script>
	function approve(id){
		if(window.confirm("Approve This Document?") == true){
			$.redirect('<?php echo site_url("/Driver/view_detail_registration_driver/");?>', {'approve' : id});							
		}
	}
	function reject(id){
		if(window.confirm("Reject This Document?") == true){
			$.redirect('<?php echo site_url("/Driver/view_detail_registration_driver/");?>', {'reject' : id});							
		}
	}
	function edit(id){
		if(window.confirm("Edit This Document?") == true){
			$.redirect('<?php echo site_url("/Driver/");?>', {'edit' : id});							
		}
	}
</script>
    <!-- /Datatables -->