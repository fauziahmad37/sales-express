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
					<h2>SKH - Add Car </h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Skh/add'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
							<input type="hidden" id="customer_id" name="customer_id" value="<?php if(isset($data['customer_id'])) echo $data['customer_id']; ?>" />
							

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Sales ID <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select readonly name="sales_id" class="form-control">
									<option value="">-- Select One --</option>
										<option value="1" <?php if(isset($data['sales_id']) && $data['sales_id'] == '1') echo 'selected' ?> >SHANNY </option>;
										<option value="2" <?php if(isset($data['sales_id']) && $data['sales_id'] == '2') echo 'selected' ?> >BAMBANG </option>;
								  </select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_id">Customer ID <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input readonly type="text" id="customer_doc_number" name="customer_doc_number" value="<?php if(isset($data['customer_doc_number'])) echo $data['customer_doc_number']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="nama" name="nama" value="<?php if(isset($data['nama'])) echo $data['nama']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Kendaraan <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="jumlah_kendaraan" name="jumlah_kendaraan" value="<?php if(isset($data['jumlah_kendaraan'])) echo $data['jumlah_kendaraan']; ?>" class="form-control col-md-7 col-xs-12 text-uppercase" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Disepakati <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="harga_disepakati" name="harga_disepakati" value="<?php if(isset($data['harga_disepakati'])) echo number_format($data['harga_disepakati']); ?>" class="form-control col-md-7 col-xs-12 text-uppercase" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Amount DP <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="amount_dp" name="amount_dp" value="<?php if(isset($data['amount_dp'])) echo number_format($data['amount_dp']); ?>" class="form-control col-md-7 col-xs-12 text-uppercase" readonly/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Batas Pelunasan <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="datepicker" name='batas_pelunasan' value="<?php if(isset($data['batas_pelunasan'])) echo date('m/d/Y', strtotime($data['batas_pelunasan'])); ?>" 
									class="form-control col-md-7 col-xs-12" readonly>
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
									<th class="text-center">Nama PT</th>								                    		              		
									<th class="text-center">Nominal</th>
									<th class="text-center">#</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$a=1;
								foreach((array)$skh_detail as $key => $val){
								?>	<tr>
										<td><?php echo $a; ?></td>
										<td><?php echo $val['no_polisi']; ?></td>
										<td><?php echo $val['tipe']; ?></td>
										<td><?php echo $val['pt']; ?></td>
										<td><?php echo number_format($val['price_list']); ?></td>
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
								
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td align="center"><b>Total</b></td>
									<td><b><?php echo number_format($total_price_list['price_list']); ?></b></td>
								</tr>
							</tbody>
						</table>

						<button id="btn" data-value="1">Print Page 1</button>
						<button id="btn2" data-value="1">Print Page 2</button>
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
			$('#ajax-modal-detail').load('<?php echo site_url('/Skh/skh_modal');?>',
				{"skh_id": <?php echo $data['id'];?> });
		});


		$('#btn').on('click', function (e) {
     		location.replace('<?php echo site_url('/Skh/print_skh/'.$data['id']); ?>');     
    	});

    	$('#btn2').on('click', function (e) {
     		location.replace('<?php echo site_url('/Skh/print_skh2/'.$data['id']); ?>');     
    	});

	});

		

	function delete_detail(id){
		if(confirm('Apakah Anda yakin akan menghapus kendaraan ini?')){
			location.replace('<?php echo site_url('/Skh/delete_skh_detail/'.$data['id']);?>'+'?id='+id);
		}
	}



</script>