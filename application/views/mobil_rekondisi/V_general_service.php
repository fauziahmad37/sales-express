		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Detail Mobil Yang Akan Rekondisi </h2>
                  <div class="clearfix"></div>
                </div>
               
				
                <div class="x_content table-responsive">
                	<div class="row">
					  <div class="col-sm-4">
					  	<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
						?>
					  	<table >
					  		<tr>
					  			<td>Nomer Pintu  </td>
					  			<td style='padding-left:10px;'> : </td>
					  			<td style='padding-left:10px;'> <?php echo $val['no_pintu'];?> </td>
					  		</tr>
					  		<tr>
					  			<td>Nomer Mesin </td>
					  			<td style='padding-left:10px;'> : </td>
					  			<td style='padding-left:10px;'> <?php echo $val['no_mesin'];?> </td>
					  		</tr>
					  		<tr>
					  			<td>Nomer Rangka   </td>
					  			<td style='padding-left:10px;'> : </td>
					  			<td style='padding-left:10px;'> <?php echo $val['no_rangka'];?> </td>
					  		</tr>
					  	</table>
					  </div>
					  <div class="col-sm-4">
					  	<table >
					  		<tr>
					  			<td>Tipe Mobil  </td>
					  			<td style='padding-left:10px;'> : </td>
					  			<td style='padding-left:10px;'> <?php echo $val['model'];?> </td>
					  		</tr>
					  		<tr>
					  			<td>Warna Mobil </td>
					  			<td style='padding-left:10px;'> : </td>
					  			<td style='padding-left:10px;'> <?php echo $val['warna_rekondisi'];?> </td>
					  		</tr>
					  		<tr>
					  			<td>Jenis Rekondisi  </td>
					  			<td style='padding-left:10px;'> : </td>
					  			<td style='padding-left:10px;'> <?php echo $val['jenis_rekondisi'];?> </td>
					  		</tr>
					  	</table>
					  	<br>
					  </div>
					  <div class="x_title">
	                  <div class="clearfix"></div>
	                </div>
					  <?php } ?>
					</div><br><br>
					<?php

							foreach ((Array) $insert_general AS $key => $val) {
					?>
					<div class="col-sm-12">
						<table class="table table-striped" style="width:100%" border='2'>
							<tr>
								<th rowspan='2'><center>General Service</center></th>
								<th rowspan='2'><center>Vendor<br>Requirement</center></th>
								<th rowspan='2'><center>Express Verified <br>(Sparepart Issued)</center></th>
								<th rowspan='2'><center>Vendor Process</center></th>
								<th colspan='2'><center>Express Verified</center></th>
								<th rowspan='2'><center>Catatan</center></th>
								<th rowspan='2'><center>Aksi</center></th>
							</tr>
							<tr>
								<th><center>OK</center></th>
								<th><center>Final Check</center></th>
							</tr>

							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general/');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Pengaktifan Unit (Penggantian Accu)'></td>
								<td>Pengaktifan Unit (Penggantian Accu)</td>

								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses1 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses1 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option value='-'>-</option>
												<option value='Selesai'>Selesai</option>
												<option value='Tidak Selesai'>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>

							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general2');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Pembersihan filter udara'></td>
								<td>Pembersihan filter udara</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses2 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses2 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general3');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Engine Mounting'></td>
								<td>Penggantian Engine Mounting</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses3 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses3 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>

							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general4');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Brake Pad'></td>
								<td>Penggantian Brake Pad</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses4 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses4 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>

						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general5');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Shock Braker'></td>
								<td>Penggantian Shock Braker</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses5 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses5 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general6');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Oli (Oil Filter)'></td>
								<td>Penggantian Oli (Oil Filter)</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses6 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses6 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general7');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Oli (Engine Flush)'></td>
								<td>Penggantian Oli (Engine Flush)</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses7 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses7 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general8');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Air Radiator (Pengurasan)'></td>
								<td>Penggantian Air Radiator (Pengurasan)</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses8 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses8 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general9');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Oil Transmission'></td>
								<td>Penggantian Oil Transmission</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses9 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses9 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general10');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Freon'></td>
								<td>Penggantian Freon</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses10 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses10 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general11');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian 4 Ban'></td>
								<td>Penggantian 4 Ban</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses11 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses11 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general12');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Penggantian Fan Belt'></td>
								<td>Penggantian Fan Belt</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses12 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses12 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR|| $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
						<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_general13');?>" method="post">
							<tr>
								<?php foreach ((Array) $data AS $key => $val) { ?>
									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '>
									</td>
								<?php } ?>
								<td hidden><input type='text' id='nama_service' name='nama_service' value ='Pergantian Kampas Kopling'></td>
								<td>Pergantian Kampas Kopling</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											foreach ((Array) $proses13 AS $key => $val) { 
												echo "
											<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
												<option value='$val[pengajuan_wo]'>
													$val[pengajuan_wo]
												</option>
												<option value='-'>-</option>
												<option value='Tidak'>Tidak</option>
												<option value='Pengajuan'>Pengajuan</option>
											</select>";
										} 
									}else{
										foreach ((Array) $proses13 AS $key => $val) { 
											echo "
												<select style='width:100%'' id='pengajuan_wo' name='pengajuan_wo'>
													<option value='$val[pengajuan_wo]'>
														$val[pengajuan_wo]
													</option>
											</select>";
										}
									}
								?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
												<option value='-'>-</option>
												<option value='Not Approve'>Not Approve</option>
												<option value='Approve'>Approve</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='approval_wo'>
												<option value='$val[approval_wo]'>
													$val[approval_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
												<option value='-'>-</option>
												<option value='On Proses'>On Proses</option>
												<option value='OK'>OK</option>
												<option value='Reproses'>Reprocess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='vendor_proses'>
												<option value='$val[vendor_proses]'>
													$val[vendor_proses]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
												<option>-</option>
												<option>OK</option>
												<option>Reprosess</option>
											</select>";
										}else{
											echo "
											<select style='width:100%'' name='status_wo'>
												<option value='$val[status_wo]'>
													$val[status_wo]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
												<option>-</option>
												<option>Selesai</option>
												<option>Tidak Selesai</option>
											</select>";
										}else{
											echo "
											<select style='width:100%' name='final_check'>
												<option value='$val[final_check]'>
													$val[final_check]
												</option>
											</select>";
										}
									?>
								</td>
								<td>
									<?php 
										if($this->user['id_privilege'] == Admin::SERVICE_ADVISOR || $this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]'>
												$val[catatan]
											</textarea>";
										}
									?>
								</td>
								<td>
									<input type='submit' name='simpan' value='simpan' class='btn btn-info'>
								</td>
							</tr>
						</form>
						</table>
					</div>
					<?php } ?>
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
       $('#datatable').dataTable( {});
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 2,
			maxView: 4
		}); 
       } ); 
    </script>
    <!-- /Datatables -->
