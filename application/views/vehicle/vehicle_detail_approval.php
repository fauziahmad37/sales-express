<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">
        
<div class="right_col" role="main" id="printable">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile" id="print_area">
				<div class="x_title">
					<h1 style="text-align:center !important;"><?php if($data['status'] == 'Waiting Approval'){ echo 'Approval Registration Vehicle';}else{ echo 'Detail Vehicle';} ?> </h1> 
					<div class="clearfix"></div>
				</div>
				<div class="x_content">   
					<table class="table borderless">
						<tr>
							<td style="padding:0px !important"><big>Pool</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['nama_pool'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Tipe Unit</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['unit_bisnis'];?></big></td>                			                			
						</tr>	
						<tr>
							<td style="padding:0px !important"><big>Merek</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['merek'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Tipe</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['tipe'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Nomor Pintu</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_pintu'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Nomor Polisi</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_polisi'];?></big></td>                			                			
						</tr>
						<tr>
							<td style="padding:0px !important"><big>Tahun</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['tahun'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>No Mesin</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_mesin'];?></big></td>                			                			
						</tr>
						<tr>
							<td style="padding:0px !important"><big>No Rangka</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_rangka'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>No STNK</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_stnk'];?></big></td>                			                			
						</tr>
						
						 
						
						<tr>
							<td style="padding:0px !important"><big>Date Expired STNK</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo date('d M Y', strtotime($data['date_expired_stnk']));?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>No TERA</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_tera'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Date Expired TERA</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo date('d M Y', strtotime($data['date_expired_tera']));?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>No KEUR</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_keur'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Date Expired KEUR</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo date('d M Y', strtotime($data['date_expired_keur']));?></big></td>                			                			
						</tr>
						
							<tr>
							<td style="padding:0px !important"><big>No KP</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['no_kiukio'];?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Date Expired KP</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo date('d M Y', strtotime($data['date_expired_kiukio']));?></big></td>                			                			
						</tr>
							
							
						<tr>
							<td style="padding:0px !important"><big>Tanggal Pengajuan</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo date('d M Y', strtotime($data['create_dt']));?></big></td>                			                			
						</tr>
						
						<tr>
							<td style="padding:0px !important"><big>Diajukan Oleh</big></td>
							<td style="padding:0px !important"><big>:</big></td>
							<td style="padding:0px !important"><big><?php echo $data['full_name'];?></big></td>                			                			
						</tr>
			
						<tr>
					 		<td colspan="3">
								<table class="table borderless">
									<tbody>																							                		                		
								</table>
							</td>
						</tr>																										                		                		
					</table>
						
					<div class="x_panel tile">
						<div class="x_title">
							<h2>Attachment</h2>
							<div class="clearfix"></div>
							
						</div>
						<table>
							<tr>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['image_path_tera'].'');?>"><img class="responsive" src="<?php  echo base_url($data['image_path_tera'].'');?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['image_path_keur'].'');?>"><img class="responsive" src="<?php echo base_url($data['image_path_keur'].'');?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
								<td width="150">
									<a target="_blank" href="<?php echo base_url($data['image_path_stnk'].'');?>"><img class="responsive" src="<?php echo base_url($data['image_path_stnk'].'');?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td><td width="150">
									<a target="_blank" href="<?php echo base_url($data['image_path_kiukio'].'');?>"><img class="responsive" src="<?php echo base_url($data['image_path_kiukio'].'');?>" 
										alt="HTML5 Icon" style="width:128px;height:128px;"></a>
								</td>
							</tr>
							<tr>
								<td width="150">Tera</td>
								<td width="150">Keur</td>
								<td width="150">STNK</td>
								<td width="150">KP</td>
							</tr>
						</table>
						
					</div>
						
						
					<table>
						<?php
						if($data['status'] == 'Waiting Approval' && ($this->user['id_privilege'] == Admin::ADMINISTRATOR || 
							$this->user['id_privilege'] == Admin::AREA_MANAGER)){
							echo '<tr>
								<td style="padding:0px !important"><a href='.base_url().'Vehicle/vehicle_approve_status/'.$data['id'].'>
									<button class="btn btn-success">Approve</button></a>
								</td>

								<td style="padding:0px !important"><a href='.base_url().'Vehicle/vehicle_reject_status/'.$data['id'].'>
									<button class="btn btn-warning">Reject</button></a>
								</td>
							</tr>';
						}

						if($this->user['id_privilege'] == Admin::ADMINISTRATOR ||
							$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT ||
							$this->user['id_privilege'] == Admin::DRIVER_MANAGEMENT_HEAD ||
							$this->user['id_privilege'] == Admin::OPERASIONAL
							) {
							echo '<button class="btn btn-primary no-print" onclick="edit('.$data['id'].')">Edit</button>';
							echo '<button class="btn btn-alert no-print" onclick="update_photo_tera('.$data['id'].')">Update Tera</button>';
							echo '<button class="btn btn-alert no-print" onclick="update_photo_keur('.$data['id'].')">Update Keur</button>';
							echo '<button class="btn btn-alert no-print" onclick="update_photo_stnk('.$data['id'].')">Update STNK</button>';
							echo '<button class="btn btn-alert no-print" onclick="update_photo_kp('.$data['id'].')">Update KP</button>';
						}
						?>

					</table>

				</div>
			</div>
		</div>	
	</div>
</div>		

<script>
function printDiv(divName) {
	var printContents = document.getElementById(divName).innerHTML;
	var originalContents = document.body.innerHTML;
	var w = window.open();
	w.document.write(
			   '<html><header><link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet" media="all"></header>'+
				   '<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">'+
				   '<link href="<?php echo base_url('/assets/css/boards.css');?>" rel="stylesheet"></header><body style="background-color:white;margin-auto">'+									   
				   printContents+
			   '</body></html>');
	w.document.close();
	w.focus();
	setTimeout(function () { // necessary for Chrome
		w.print();
		w.close();
	}, 500);
}
</script>        
        
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
function edit(id){
	if(window.confirm("Update This Document?") == true){
		$.redirect('<?php echo site_url("/Vehicle/");?>', {'edit' : id});							
	}
}

function update_photo_tera(id){
	$.redirect('<?php echo site_url("/Vehicle/update_photo_tera");?>', {
				'id' : id,
				'no_pintu' : '<?php echo $data['no_pintu']; ?>';
			}
		);
}

function update_photo_keur(id){
	$.redirect('<?php echo site_url("/Vehicle/update_photo_keur");?>', {
				'id' : id,
				'no_pintu' : '<?php echo $data['no_pintu']; ?>';
			}
		);
}

function update_photo_stnk(id){
	$.redirect('<?php echo site_url("/Vehicle/update_photo_stnk");?>', {
				'id' : id,
				'no_pintu' : '<?php echo $data['no_pintu']; ?>';
			}
		);
}

function update_photo_kp(id){
	$.redirect('<?php echo site_url("/Vehicle/update_photo_kp");?>', {
				'id' : id,
				'no_pintu' : '<?php echo $data['no_pintu']; ?>' ;
			}
		);
}
</script>
