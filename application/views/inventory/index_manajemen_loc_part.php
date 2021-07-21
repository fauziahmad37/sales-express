<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
    <div class="right_col" role="main">
      	<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel tile">
	                <div class="x_title">
	                  	<h2>Data Stok Gudang <?php if($id_workshop !== '') echo '( '.array_get($arrWorkshop, $id_workshop, 'id', 'name').')';?></h2>
	                  	<div class="clearfix"></div>
	                </div>
	                <div class="x_content">
	                  	<div class="col-md-12 col-sm-12 col-xs-12"></div>
					 	<div class="col-md-12 col-sm-12 col-xs-12 table-responsive" id="content_absen">
					  		<table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
								<thead>
									<tr>
										<th class="text-center">Jenis Barang</th>
										<th class="text-center">Kode Internal</th>
										<th class="text-center">Kode Barang</th>
										<th class="text-center">Nama Barang</th>
										<th class="text-center">Qty</th>								
										<th class="text-center">Harga Jual Sebelum PPN</th>	
										<th class="text-center">Lokasi Part</th>
										<th class="text-center">Car Type</th>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach ((Array) $data AS $key => $val) { 
										$is_sparepart = $val['kode_material'] === null;
										echo '<tr><td>'.($is_sparepart ? 'Sparepart' : 'Material').'</td>'.
										'<td><a href="'.site_url('/Inventory/detail_manajemen_loc_part/'.$val['id']).'" class="blue">'.$val['internal_code'].'</td>'.          
										'<td>'.($is_sparepart ? $val['kode_part'] : $val['kode_material']).'</td>'.
										'<td>'.($is_sparepart ? $val['sparepart'] : $val['material']).'</td>'.
										'<td class="text-right">'.number_format($val['qty']).'</td>'.								
										'<td class="text-right">'.number_format(($is_sparepart ? $val['harga_sparepart'] : $val['harga_material'])).'</td>'.
										'<td>'.$val['loc_part'].'</td>'.
										'<td>'.$val['car_type'].'</td>';								
										echo '</tr>';
									}
								?>
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
$('#datatable').dataTable( {} );
} );
</script>
<!-- /Datatables -->
