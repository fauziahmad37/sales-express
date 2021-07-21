<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/jquery-ui.css');?>" rel="stylesheet">

<style>
	.ui-autocomplete-custom {
    background: #87ceeb;
    z-index: 2;
}
</style>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Persetujuan Harga Dasar Khusus - Add Car </h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Phk/add'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
							<input type="hidden" id="sales_id" name="sales_id" value="<?php if(isset($data['sales_id'])) echo $data['sales_id']; ?>" />
							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Sales ID <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select readonly name="sales_id" class="form-control">
									<option value="">-- Select One --</option>
										<option value="1" <?php if(isset($data['sales_id']) && $data['sales_id'] == '1') echo 'selected' ?> >SHANNY </option>;
										
								  </select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_id">Sales ID <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input readonly type="text" id="sales_id" name="sales_id" value="<?php if(isset($data['sales_id'])) echo $data['sales_id']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" />
								</div>
							</div>

							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Doc Number <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="doc_number" name="doc_number" value="<?php if(isset($data['doc_number'])) echo $data['doc_number']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="status" name="status" value="<?php if(isset($data['status'])) echo $data['status']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" readonly/>
								</div>
							</div>

							

							<div class="ln_solid"></div>
				  
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									

									<div class="form-group left">
										<?php 
											if($data['status'] == 'Active'){
												echo '<button type="submit" class="btn btn-success" name="send_approval">Send Approval</button>';
												echo '<a href="javascript:void(0);" class="btn btn-success" id="add_new_detail">Tambah Kendaraan</a>';
											}

											if(($data['status'] == 'Waiting Approval') && ($this->user['id_privilege'] == 1)){
												echo '<button type="submit" class="btn btn-success" name="approve">approve</button>';
											}
										?>
										
									</div>
								</div>
							</div>
						</div> 
					</form>
				</div>


				<div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
						<div id="ajax-modal-detail" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
						<div id="ajax-modal-barang" class="modal fade" aria-hidden="true" style="display: none;z-index=1000;"></div>
						<table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">No Polisi</th>
									<th class="text-center">Tipe Kendaraan</th>
									<th class="text-center">No Rangka</th>								                    		              		
									<th class="text-center">No Mesin</th>
									<th class="text-center">Lokasi</th>
									<th class="text-center">Harga Dasar</th>
									<th class="text-center">Pengajuan Harga Dasar Khusus</th>
									<th class="text-center">Persentase dari harga dasar</th>
									<th class="text-center">#</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$a=1;
								foreach((array)$phk_detail as $key => $val){
								?>	<tr>
										<td><?php echo $a; ?></td>
										<td><?php echo $val['no_polisi']; ?></td>
										<td><?php echo $val['tipe']; ?></td>
										<td><?php echo $val['no_rangka']; ?></td>
										<td><?php echo $val['no_mesin']; ?></td>
										<td><?php echo $val['location']; ?></td>
										<td><?php echo number_format($val['harga_dasar']); ?></td>
										<td><?php echo number_format($val['pengajuan_harga_dasar_khusus']); ?></td>
										<td><?php echo $val['persentase']; ?> %</td>
										<?php											
											if($data['status'] == 'Active'){
												echo '<td style="padding:0px !important">
													<a href="javascript:void(0);" class="btn btn-xs btn-danger" onclick="delete_detail('.$val['id'].');">Delete</a>
												</td>';
											}
											
										?>
									</tr>
								<?php
								$a++;
								} ?>
							</tbody>
						</table>

						<button id="btn" class="btn btn-success" data-value="1">Print</button>
					</div>
					
				</div>

											  
			</div>
		</div>
	</div>
</div>

<!-- /page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<!-- jQuery -->
<script src="<?php echo base_url('/assets/js/jquery-1.12.4.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<!-- Custom Theme Scripts -->

<!-- ================================== YEAR PICKER ================================ -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

<!-- =============================================================================== -->

<!-- Datatables -->
<script>
	$(document).ready(function() {
		$("#add_new_detail").on("click", function(){
			$('#ajax-modal-detail').html("");
			$('#ajax-modal-detail').modal();
			$('#ajax-modal-detail').load('<?php echo site_url('/Phk/phk_modal');?>',
				{"phk_id": <?php echo $data['id'];?> });
		});


		$('#btn').on('click', function (e) {
     		location.replace('<?php echo site_url('/Phk/print_phk/'.$data['id']); ?>');     
    	});

    	

	});

		

	function delete_detail(id){
		if(confirm('Apakah Anda yakin akan menghapus kendaraan ini?')){
			location.replace('<?php echo site_url('/Phk/delete_phk_detail/'.$data['id']);?>'+'?id='+id);
		}
	}



</script>