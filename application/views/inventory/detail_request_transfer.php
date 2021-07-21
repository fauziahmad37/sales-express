<link rel="stylesheet" href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css'); ?>">
<div class="right_col" role="main">
	<div class="row">
		<div  class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_tile">
					<h2>Detail Approved Sparepart</h2>
					<br>
					<h2></h2>
					<button class="btn btn-danger pull-right" id="cancel">Cancel</button>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form id="form-model" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
					action="<?php /*echo site_url('/Inventory/list_transfer_sparepart'); */ echo site_url('/Inventory/detail_transfer');?>" method="post">
						<div class="form-group">
							<!-- <label>id transfer antar gudang</label> -->
							<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id']; ?>" />
							<!-- <br> -->
							<!-- <label>id sparepart </label> -->
							<input type="hidden" name="id_sparepart" id="id_sparepart" value="<?php echo $data['id_sparepart'] ?>">
							<!-- <br> -->
							<!-- <label>pool request </label> -->
							<input type="hidden" name="pool_request" id="pool_request" value="<?php echo $data['pool_request'] ?>">
							<!-- <br> -->
							<!-- <label>pool approved </label> -->
							<input type="hidden" name="pool_approved" id="pool_approved" value="<?php echo $data['pool_approve'] ?>">
							<!-- <br> -->
							<!-- <label>base qty approved</label> -->
							<input type="hidden" name="base_qty" id="base_qty" value="<?php if(isset($data['qty'])) echo $data['qty'] ?>">
							<!-- <br> -->
							<!-- <label>base qty request</label> -->
							<input type="hidden" name="base_qty_req" id="base_qty_req" value="<?php if(isset($data['base_qty_req'])) echo $data['base_qty_req'] ?>">
							<!-- <br> -->
							<!-- <label>id inventory approved</label> -->
							<input type="hidden" name="id_inventory" id="id_inventory" value="<?php echo $data['id_inventory'] ?>">
							<!-- <br> -->
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No RR Antar Gudang </label>	
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="no_rr" name="no_rr"  class="form-control col-md-7 col-xs-12" value="<?php echo $data['no_rr'] ?>" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Part Number </label>	
							<div class="col-md-6 col-sm-6 col-xs-12">
								
								<!-- <input type="hidden" id="id_workshop" name="id_workshop" value="<?php // echo $data['id_workshop']; ?>"> -->
								<input type="hidden" id="status" name="status" value="1">
								<input type="hidden" name="from" value="<?php echo $this->user['id_workshop'] ?>" >
								<input type="hidden" name="created_by" value="<?php echo $this->user['id'] ?>" >
								<input type="text" id="kode_part" name="kode_part"  class="form-control col-md-7 col-xs-12" value="<?php echo $data['kode_part'] ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Internal </label>	
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="internal_code" name="internal_code"  class="form-control col-md-7 col-xs-12" value="<?php echo $data['internal_code'] ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="item_name" name="item_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data['item_name']; ?>" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" id="cost_lalu" name="cost_lalu" value="<?php echo $data['cost_lalu']; ?>">
								<input type="text" id="harga" name="harga" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data['sale_price']; ?>" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipe Mobil 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="car_type" name="car_type" class="form-control col-md-7 col-xs-12" value="<?php echo $data['car_type']; ?>" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Qty Permintaan
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								
								<input type="text" name="qty_request" class="form-control col-md-7 col-xs-12" value="<?php  echo $data['qty_request']; ?>" readonly>
							</div>
						</div>
						
						

						<?php  
							if($data['status'] == 'REQUEST' || $data['pool_approve'] == $this->user['id_workshop'] 
								||$data['status'] == 'RECEIVE'
							){
						?>
						<div class="form-group">
						 	<label class="control-label col-md-3 col-sm-3 col-xs-12">Qty Disetujui
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="qty_transfered" class="form-control col-md-7 col-xs-12" value="<?php echo $data['qty_transfered'] ?>" <?php if( $data['status'] == 'APPROVE' || $data['status'] == 'RECEIVE'){
									echo 'readonly';
									} 
									?> >
							</div>
						</div>
						<?php
							}
						?>

					
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Catatan dari Pemohon</label>						
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" name="note_request" class="form-control" value="<?php echo $data['note_request'] ?>" <?php if($data['status'] == 'REQUEST' || $data['status'] == 'APPROVE' || $data['status'] == 'RECEIVE'){
									echo 'readonly';
									} 
									?> >
							</div>
						</div>
						

					<?php  
						if($data['status'] == 'REQUEST' || $data['pool_approve'] == $this->user['id_workshop'] || $data['status'] == 'RECEIVE'){
					?>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Catatan Untuk Pemohon</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" name="note_transfered" class="form-control" value="<?php echo $data['note_transfered'] ?>" <?php if($data['status'] == 'APPROVE' || $data['status'] == 'RECEIVE' ){
									echo 'readonly';
									} 
									?> >
							</div>
						</div>
					<?php 
						}
					?>
						
					

				 	<?php 
						// if($data['status'] == 'APPROVE' || $data['pool_approve'] == $this->user['id_workshop'] || $data['status'] == 'REQUEST') { 
				 		if($data['status']=='REQUEST'){
					?> 
						<div class="ln-solid">
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" class="btn btn-success" name="<?php 
									if($data['status'] =='REQUEST'){
										echo 'transfer';
									}else{
										echo 'receive';
									}; ?>">Submit</button>
								</div>
							</div>
						</div>
					<?php 
						} 
					?> 
					</form>
                    	<a class="btn btn-info pull-center"  href="<?php echo site_url('/Inventory/print_surat_jalan_pengiriman/'.$data['id']);?>" target="_blank"  role = "button">Cetak Surat Jalan</a>

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
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<script>
	$(function() {
		$('#kode_part').on('keypress', function(e) {
			if (e.which == 32)
				return false;
		});
		$('#cancel').on('click', function(){
			window.location.replace("<?php echo site_url('/Inventory/list_history_approved');?>");
		});
	});
</script>