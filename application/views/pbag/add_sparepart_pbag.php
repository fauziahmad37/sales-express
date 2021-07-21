<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile" id="print_area">
				<div class="x_title">
					<div class="x_panel">
						<div class="x_title">
							<h2>Add Sparepart PBAG <?php //print_r($data); ?></h2>
							<span class="right"><a href="<?php echo site_url('/Pbag/');?>" class="btn btn-danger no-print">List Pbag</a></span>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" method="post">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<table class="table borderless" style="width:100%">
									<div id="print_header">
										<tr>
											<td style="padding:0px !important">Pbag Bumber</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="hidden" class="form-control col-md-7 col-xs-12" id="id_pbag" readonly value="<?php echo $data['id'];?>">
											<input type="text" class="form-control col-md-7 col-xs-12" id="pbag_number" readonly value="<?php echo $data['pbag_number'];?>">
											</td>
										</tr>
										<tr>
											<td style="padding:0px !important">Workshop Pemohon</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="text" class="form-control col-md-7 col-xs-12" id="workshop_name_req" readonly value="<?php echo $data['workshop_name_req'];?>"></td>
										</tr>
										<tr>
											<td style="padding:0px !important">Workshop Tujuan</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="text" class="form-control col-md-7 col-xs-12" id="workshop_name_trf" readonly value="<?php echo $data['workshop_name_trf'];?>"></td>
										</tr>
										<tr>
											<td style="padding:0px !important">Tanggal permintaan</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="text" class="form-control col-md-7 col-xs-12" id="requested_dt" readonly value="<?php echo $data['requested_dt'];?>"></td>
										</tr>
										<tr>
											<td style="padding:0px !important">User Creator</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="text" class="form-control col-md-7 col-xs-12" id="requested_dt" readonly value="<?php echo $data['full_name'];?>"></td>
										</tr>
										<tr>
											<td style="padding:0px !important">Status</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="text" class="form-control col-md-7 col-xs-12" id="requested_dt" readonly value="<?php if($data['approved_by']== null){echo "Belum di approve";}else{echo "Sudah di Approve";}?>"></td>
										</tr>
										<tr>
											<td style="padding:0px !important">Nama Approval</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="text" class="form-control col-md-7 col-xs-12" id="approved_by" readonly value="<?php echo $data['approved_by'];?>"></td>
										</tr>
										<tr>
											<td style="padding:0px !important">Tanggal Approval</td>
											<td style="padding:0px !important">:</td>
											<td style="padding:0px !important"><input type="text" class="form-control col-md-7 col-xs-12" id="approved_dt" readonly value="<?php echo $data['approved_dt'];?>"></td>
										</tr>
									</div>	
									
										<?php
										if($data['active'] == 0 && $data['user_id_req'] == $this->user['id']){
											echo '<div class="form-group left">
													<a href="javascript:void(0);" class="btn btn-success" id="add_new_detail">Tambah Item</a>
												</div>';
										}
										
										if($data['workshop_id_trf'] == $user['id_workshop'] && $data['status_trf'] == 0 && $data['approved_by'] !== null){
											echo '<div class="form-group left">
													<a href="javascript:void(0);" class="btn btn-success" id="proses_transfer" onclick="proses_transfer('.$data['id'].')">Proses Transfer</a>
												</div>';
										}
										
										if($data['workshop_id_req'] == $user['id_workshop'] && $data['status_trf'] == 1 && $data['status_rec'] == 0){
											echo '<div class="form-group left">
													<a href="javascript:void(0);" class="btn btn-success" id="proses_receive" onclick="proses_receive('.$data['id'].')">Proses Receive</a>
												</div>';
										}
										
										if($data['approved_by'] == null && $this->user['id_privilege'] == 10){
											echo '
											<div class="form-group left">
												<a href="javascript:void(0);" class="btn btn-warning" id="approve_req_pbag" onclick="approve_req_pbag('.$data['id'].')">Approve</a>
											</div>';
										} else {
											echo '
											<div class="form-group left">
												<a href="javascript:void(0);" class="btn btn-dark no-print" id="print_btn">Cetak</a>
											</div>';
										}
										?>
									</table>
								</div>
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
						<div id="ajax-modal-detail" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
						<div id="ajax-modal-barang" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
						<table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Kode Barang</th>
									<th class="text-center">Nama Barang</th>
									<th class="text-center">Qty Permintaan</th>								                    		              		
									<th class="text-center">Cost</th>
									<th class="text-center">Total</th>
									<th class="text-center">#</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$a=1;
								foreach((array)$pbag_detail as $key => $val){
								?>	<tr>
										<td><?php echo $a; ?></td>
										<td><?php echo $val['internal_code']; ?></td>
										<td><?php echo $val['item_name']; ?></td>
										<td><?php echo $val['qty_req']; ?></td>
										<td><?php echo $val['cost']; ?></td>
										<td><?php echo $val['total']; ?></td>
										<?php
											if($data['workshop_id_trf'] == $user['id_workshop'] && $data['active'] == 1 && $data['status_trf'] == 0){
												echo '<td style="padding:0px !important">
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="update('.$val['id'].');">Update</a>
													</td>';
											}
											
											if($data['active'] == 0){	
												echo '<td style="padding:0px !important">
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="delete_detail('.$val['id'].');">Delete</a>
													</td>';
											}
										?>
									</tr>
								<?php
								$a++;
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

<!-- /page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/buttons.dataTables.min.css');?>" rel="stylesheet">		
<!-- jQuery -->
<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>		
<!-- Bootstrap -->
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>		
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Datatables -->

 <script>
	$(document).ready(function() {
		$("#add_new_detail").on("click", function(){
			$('#ajax-modal-detail').html("");
			$('#ajax-modal-detail').modal();
			$('#ajax-modal-detail').load('<?php echo site_url('/Pbag/list_sparepart_modal');?>',
				{"id_workshop": <?php echo $data['workshop_id_trf'];?>, "pbag_id": <?php echo $data['id']; ?>});
		});
	});
	
	function update(id){
		$('#ajax-modal-detail').html("");			
		$('#ajax-modal-detail').modal();
		$('#ajax-modal-detail').load('<?php echo site_url('/Pbag/add_sparepart_pbag/');?>'+id);
	}
	
	function delete_detail(id){
		if(confirm('Apakah Anda yakin akan menghapus barang ini?')){
			location.replace('<?php echo site_url('/Pbag/delete_pbag_detail/'.$data['id']);?>'+'?id='+id);
		}
	}
	
	function approve_req_pbag(id){
		if(confirm('Apakah Anda yakin akan Aprrove Permintaan ini?')){
			location.replace('<?php echo site_url('/Pbag/approve_req_pbag/'.$data['id']);?>'+'?id='+id);
		}
	}
	
	$("#print_btn").on("click",function(){
		var printContentsHeader = document.getElementById('print_area').innerHTML;
		var originalContents = document.body.innerHTML;
		var w = window.open();
		w.document.write(
			'<html><header><link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet" media="all">'+
			'<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet"></header>'+
			'<link href="<?php echo base_url('/assets/css/boards.css');?>" rel="stylesheet"></header><body style="background-color:white;margin-auto">'+
			printContentsHeader+
			'</body></html>'
			);
		w.document.close();
		w.focus();
		setTimeout(function () { // necessary for Chrome
			w.print();
			w.close();
		}, 500);
	});
	
	function proses_transfer(id){
		if(confirm('Apakah Anda yakin akan memproses pengiriman barang ini?')){
			location.replace('<?php echo site_url('/Pbag/proses_transfer/'.$data['id']);?>'+'?id='+id);
		}
	}
	
	function proses_receive(id){
		if(confirm('Apakah Anda yakin akan memproses penerimaan barang ini?')){
			location.replace('<?php echo site_url('/Pbag/proses_receive/'.$data['id']);?>'+'?id='+id);
		}
	}
	
 </script>