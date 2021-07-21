<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile">
			<div class="x_title">
				<h2>Header</h2>
				<div class="clearfix"></div>
            </div>
			<div class="x_content">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form id="demo-form" class="form-horizontal form-label-left" action="<?php echo site_url('/Receive_iproc/adjust_stock'); ?>" method="post">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No RR 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" id="rr_id" name="rr_id" value="<?php if(isset($rr_header['rr_id'])) echo $rr_header['rr_id']; ?>">
								<input type="text" id="rr_number" name="rr_number" required="required" 
									value="<?php if(isset($rr_header['rr_number'])) echo $rr_header['rr_number']; ?>" class="form-control col-md-7 col-xs-12" readonly>
							</div>
						</div>
					
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Judul RR 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="rr_subject" name="rr_subject" required="required" 
									value="<?php if(isset($rr_header['rr_subject'])) echo $rr_header['rr_subject']; ?>" class="form-control col-md-7 col-xs-12" readonly>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi RR 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="deskripsi" name="deskripsi" required="required" 
									value="<?php if(isset($rr_header['rr_description'])) echo $rr_header['rr_description']; ?>" class="form-control col-md-7 col-xs-12" readonly>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Penerimaan 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="tanggal_terima" name="tanggal_terima" required="required" 
									value="<?php if(isset($rr_header['tanggal_terima'])) echo $rr_header['tanggal_terima']; ?>" class="form-control col-md-7 col-xs-12" readonly>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan RR 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="keterangan" name="keterangan" required="required" 
									value="<?php if(isset($rr_header['keterangan'])) echo $rr_header['keterangan']; ?>" class="form-control col-md-7 col-xs-12" readonly>
							</div>
						</div>
						
						<div>
							<button type="submit" class="btn btn-primary" id="simpan" name="simpan">Proses</button>
						</div>
						
					</form>
				</div>
			</div>
						
		</div>
		
		<div class="x_panel tile">
			<div class="x_title">
				<h2>Item</h2>
				<div class="clearfix"></div>
            </div>
			<div class="x_content">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
						  <thead>
							<tr>
							  <th class="text-center">No.</th>
							  <th class="text-center">Kode</th>
							  <th class="text-center">Cost Center</th>
							  <th class="text-center">Deskripsi</th>
							  <th class="text-center">Jumlah</th>
							  <th class="text-center">Keterangan</th>
							</tr>
						  </thead>
						  <tbody>
							<?php
								$a=1;
								foreach((Array) $rr_item as $key => $val){
									echo "<tr>
										<td>".$a.". </td>
										<td>".$val['item_code']."</td>
										<td>".$val['item_cost_center']."</td>
										<td>".$val['item_description']."</td>
										<td>".$val['item_quantity']."</td>
										<td>".$val['keterangan']."</td>
									</tr>";
								$a++;
								}
							?>
							
						  </tbody>
					</table>
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
<script src="<?php echo base_url('/assets/js/dataTables.keyTable.min.js');?>"></script>

<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Datatables -->

<script>
      $(document).ready(function() {
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		}); 
		$('#datatable').dataTable( {} );
	  } );
	  
	
</script>