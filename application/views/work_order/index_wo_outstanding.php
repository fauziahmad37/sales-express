<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>Outstanding Work Order <?php if($id_workshop !== '') echo get_array($arrWorkshop, $id_workshop);?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Work_order/wo_outstanding/'); ?>" method='post'>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Worshop <span class="required">*</span>	
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="id_workshop" id="id_workshop" class="form-control" required="required">
										<?php 
										function get_array($arr, $id, $str = 'name'){
											foreach ((Array) $arr AS $key => $val) {
												if($val['id'] === $id){
													return $val[$str];
												}
											}
											return '';
										}

										if($this->user['id_privilege'] == Admin::ADMINISTRATOR 
									|| $this->user['id_privilege'] == Admin::FINANCE
									|| $this->user['id_privilege'] == Admin::DEPUTI_TIARA
										){
											echo '<option value="">-- Select One --</option>';
											foreach ((Array) $arrWorkshop as $key => $val) {
												echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
											}
										} else {
											echo '<option value="'.$this->user['id_workshop'].'">'.get_array($arrWorkshop, $this->user['id_workshop']).'</option>';
										}
										?>
									</select>
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
					<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>WO Number</th>
								<th>Jenis WO</th>
								<th>Kustomer</th>	
								<th>Model Mobil</th>
								<th>No Polisi</th>
								<th>No Pintu</th>																
								<th>Mulai</th>
								<th>Estimasi Selesai</th>                    		
								<th>SA</th>		
								<th>Status</th>			
							</tr>
						</thead>
						<tbody>
							<?php 
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td><a href="'.site_url('/Work_order/detail/'.$val['id']).'" class="blue">'.$val['wo_number'].'</a></td>'.          
								'<td>'.$val['tipe'].'</td>'.
								'<td>'.$val['nama'].'</td>'.
								'<td>'.$val['model'].' ( '.$val['warna'].' )</td>'.
								'<td>'.$val['no_polisi'].'</td>'.								
								'<td>'.$val['no_pintu'].'</td>'.
								'<td>'.date('Y-m-d H:i', strtotime($val['start_dt'])).'</td>'.
								'<td>'.date('Y-m-d H:i', strtotime($val['end_dt'])).'</td>'.
								'<td>'.$val['full_name'].'</td>'.							
								'<td>'.$val['status'].'</td>'.              		
								'</tr>';
								$ct++;
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
<!-- Datatables -->
    <script>
      $(document).ready(function() {
       $('#datatable').dataTable( {});
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		}); 
       } ); 
    </script>
    <!-- /Datatables -->