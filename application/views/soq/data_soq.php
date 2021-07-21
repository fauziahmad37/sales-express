<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>Data SOQ <?php if($id_workshop!=='') echo '('.array_get($arrWorkshop, $id_workshop, 'id', 'name').')';?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/CSoq/data_soq/'); ?>" method="post">
							<div class="form-group">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<select name="id_workshop" id="id_workshop" class="form-control" required="required">
											<?php
												if($this->user['id_privilege'] == Admin::ADMINISTRATOR){
													echo '<option value="">-- Select One --</option>';
													foreach((Array) $arrWorkshop as $key => $val){
														echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
													}
												}else{
													echo '<option value="'.$id_workshop.'">'.array_get($arrWorkshop, $id_workshop, 'id','name').'</option>';
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
							</div>
						</form>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12 table-responsive" >
						<table id="datatable" class="table table-bordered" style="width:100%">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Jenis Barang</th>
									<th class="text-center">Kode Internal</th>
									<th class="text-center">Kode Barang</th>
									<th class="text-center">Nama Barang</th>
									<th class="text-center">MIN</th>
									<th class="text-center">Qty</th>
									<th class="text-center">MAX</th>
									<th class="text-center">SOQ</th>
									<th class="text-center">Harga Beli</th>
									<th class="text-center">Harga Jual Sebelum PPN</th>	
									<th class="text-center">Lokasi Part</th>
									<th class="text-center">Car Type</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$a=1;
								foreach ((Array) $data AS $key => $val) { 
									$is_sparepart = $val['kode_material'] === null;
									echo '<tr><td>'.$a.'</td>'.
									'<td>'.($is_sparepart ? 'Sparepart' : 'Material').'</td>'.
									'<td>'.$val['internal_code'].'</td>'.          
									'<td>'.($is_sparepart ? $val['kode_part'] : $val['kode_material']).'</td>'.
									'<td>'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>'.
									'<td class="text-right">'.round($val['min_stock']).'</td>'.
									'<td class="text-right">'.($val['qty']).'</td>'.
									'<td class="text-right">'.round($val['max_order']).'</td>'.
									'<td class="text-right">'.round($val['soq']).'</td>'.
									'<td class="text-left">'.number_format($val['harga_beli']).'</td>'.
									'<td class="text-left">'.number_format(($is_sparepart ? $val['harga_sparepart'] : $val['harga_material'])).'</td>'.
									'<td>'.$val['loc_part'].'</td>'.
									'<td>'.$val['car_type'].'</td>';								
									echo '</tr>';
									$a++;
								}
							?>
							</tbody>
						</table>
						<a class="btn btn-info pull-center"  href="<?php echo site_url('/CSoq/print_data/'.$id_workshop);?>" target="_blank"  role = "button">Cetak SOQ</a> 
				  	</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/buttons.dataTables.min.css');?>" rel="stylesheet">		
<!-- jQuery -->
<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>		
<!-- Bootstrap -->
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
