		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Detail Mobil Yang Akan Rekondisi 
                  
                  </h2>
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
					</div><br>

					<?php
							foreach ((Array) $insert_awal AS $key => $val) {
					?>
					<div class="col-sm-12">
						<table class="table table-striped" style="width:100%" border='2'>
								<tr >
									<th rowspan='2' valign='midle'><center>Body Repair</center></th>
									<th><center>Vendor</center></th>
									<th colspan='2'><center>Express Verifikasi</center></th>
									<th rowspan='2'><center>Catatan</center></th>
									<th rowspan='2'>Aksi</th>
								</tr>
								<tr>
									<th><center>Update Proses</center></th>
									<th><center>OK</center></th>
									<th><center>Final Check</center></th>
								</tr>
								
								<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
								action="<?php echo site_url('/C_data_armada/simpan_proses_rekondisi');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Pegamplasan, korosi (karat) & Pendempulan'></td>
									<td>Pegamplasan, korosi (karat) & Pendempulan</td>
									
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data_proses AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data_proses AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data_proses AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses2');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> 
										<input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Pengelesan (Welding)'></td>
									<td>Pengelesan (Welding)</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data2 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data2 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data2 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses3');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Spark board corrosion coating (Plingkut)'></td>
									<td>Spark board corrosion coating (Plingkut)</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data3 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data3 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data3 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses4');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Epoxy (paint base)'></td>
									<td>Epoxy (paint base)</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data4 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data4 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data4 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses5');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='WARNA ASLI TERTUTUP'></td>
									<td>WARNA ASLI TERTUTUP</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data5 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data5 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data5 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses6');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='CAT & COATING'></td>
									<td>CAT & COATING</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data6 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data6 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data6 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses7');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Pemolesan'></td>
									<td>Pemolesan</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data7 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses8');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Pembersihan Interior'></td>
									<td>Pembersihan Interior</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data7 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses9');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Pelepasan Kaca Filem'></td>
									<td>Pelepasan Kaca Filem</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data7 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses10');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Pelepasan Karpet Dasar'></td>
									<td>Pelepasan Karpet Dasar</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data7 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses11');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Setting Body'></td>
									<td>Setting Body</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data7 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
								action="<?php echo site_url('/C_data_armada/simpan_proses12');?>" method="post">
								<tr>
									<?php
										foreach ((Array) $data AS $key => $val) {
									?>

									<td style='padding-left:10px;' hidden> <input type='text' name='id_mobil' value='<?php echo $val['id'];?> '></td>

									<?php } ?>
									<td hidden><input type='text' name='nama_service' value='Pembersihan Head and Rear Lamp'></td>
									<td>Pembersihan Head and Rear Lamp</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::VENDOR || $this->user['id_privilege'] == Admin::ADMINISTRATOR){

											foreach ((Array) $data7 AS $key => $val) {
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]'>
												 $val[status_vendor]
											</option>
											<option  value='-'>-</option>
											<option  value='ON PROCESS'>ON PROCESS</option>
											<option  value='OK'>OK</option>
											<option  value='REPROCESS'>REPROCESS</option>
										</select>";
										}	
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_vendor' style='width:100%' >
											<option  value='$val[status_vendor]' >
												 $val[status_vendor]
											</option>
										</select>";
										}
									};?>
									</td>
									<td>
										<?php 
										if($this->user['id_privilege'] == Admin::FOREMAN || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
											
											echo "
											<select name='status_wo' style='width:100%'>
												<option value=$val[status_wo]>
													$val[status_wo]
												</option>
												<option value='-'> - </option>
												<option value='OK'> OK </option>
												<option value='REPROCESS'>REPROCESS</option>
											</select>";
										
										}else{
											foreach ((Array) $data7 AS $key => $val) {										
											echo "
											<select name='status_wo' style='width:100%'>
												<option  value = $val[status_wo]>
													 $val[status_wo]
												</option>
											</select>";
											}
										}
										?>
										
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::QA || $this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
												<select name='final_check' style='width:100%'>
													<option value=$val[final_check]>
														$val[final_check]
													</option>
													<option value='-'> - </option>
													<option value='SELESAI'> SELESAI </option>
													<option value='REPROCESS'>REPROCESS</option>
												</select>";
											}else{
												echo "
												<select name='final_check' style='width:100%'>
													<option  value = $val[final_check]>
														 $val[final_check]
													</option>
												</select>";
											}
										?>
									</td>
									<td>
										<?php 
											if($this->user['id_privilege'] == Admin::FOREMAN ||
											$this->user['id_privilege'] == Admin::QA ||
											$this->user['id_privilege'] == Admin::ADMINISTRATOR){
												echo "
											<textarea name='catatan' value='$val[catatan]' >
											 $val[catatan]
										</textarea>";
										}else{
											echo "
											<textarea name='catatan' value='$val[catatan]' readonly >
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
						 <?php } ?>
						<!-- <input type='submit' class='btn btn-info' value='SIMPAN DATA PROSES'> -->
					</div>
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
