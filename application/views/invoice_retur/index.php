<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel title">
				<div class="x_title">
					<h2>List Data Retur <?php if($id_workshop!=='') echo '('.get_array($arrWorkshop,$id_workshop).' - '.date('M Y', strtotime($date)).')';?></h2>
					<?php  
						function get_array($arr, $id, $str = 'name'){
							foreach ((Array)$arr as $key => $val) {
								if($val['id']=== $id){
									return $val[$str];
								}
							}
							return '';
						}
					?>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Retur'); ?>" method="post">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>	
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="id_workshop" id="id_workshop" class="form-control" required="required">
										<?php  
										if($this->user['id_privilege'] == Admin::ADMINISTRATOR
											|| $this->user['id_privilege'] == Admin::FINANCE){
											echo '<option value="">-- Select One --</option>';
											foreach ((Array)$arrWorkshop as $key => $val) {
												echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
											}
										}else{
											echo '<option value="'.$this->user['id_workshop'].'">'.get_array($arrWorkshop, $id_workshop).'</option>';
										}	
										?>
										
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_retur">Bulan <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<div class="input-group date form_date col-md-4" data-date-format="MM yyyy" data-link-field="dtp_input1">
										<input class="form-control inputdate" size="auto" type="text" name="bulan" id="bulan" value="<?php echo date('M Y', strtotime($date)); ?>" readonly>
										<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" class="btn btn-success" id="search" name="search">Cek</button>
								</div>
							</div>
							<div class="ln_solid"></div>
						</form>
					</div>
				</div>
				<div class="x_content table-responsive">
					<a href="<?php echo site_url('Invoice_retur/invoice_retur_add') ?>" class="btn btn-dark">Buat Retur Baru</a>
					<table id="dataTable" class="table table-striped dataTable text-center" style="width: 100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Retur Invoice Number</th>
								<th>No WO</th>
								<th>No Pintu</th>
								<th>No Polisi</th>
								<th>Nama Pengemudi</th>
								<th>Amount</th>
								<th>Catatan</th>
							</tr>
						</thead>
						<tbody>
						<?php  
							$no=1;
							foreach ((Array)$data as $key => $val) {
								echo '<tr>
									<td>'.$no.'</td>
									<td><a href="'.site_url('/Invoice_retur/detail/').$val['id'].'" class="blue"> '.$val['invoice_number'].'</a></td>
									<td>'.$val['wo_number'].'</td>
									<td>'.$val['no_pintu'].'</td>
									<td>'.$val['no_polisi'].'</td>
									<td>'.$val['nama'].'</td>
									<td>'.$val['total_billing'].'</td>
									<td>'.$val['note'].'</td>				
								</tr>';
								$no++;
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
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>

<script>
	$(document).ready(function(){
		$('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		});
		$('#dataTable').dataTable({});
	});
</script>