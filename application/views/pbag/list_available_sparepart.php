<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Sparepart List <?php //print_r($data); ?>
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					<tr>
						<td>Id Inventory</td>
						<td>Kode Part</td>
						<td>Nama Barang</td>
						<td>Cost</td>
						<td>Qty</td>
						<td>Lokasi Part</td>											
						<td>#</td>
					</tr>
				</thead>
				<tbody>
				<?php
					function nl2br2($string) {
						$string = str_replace(array("\r\n", "\r", "\n"), "\\n", $string);
						return $string;
					}
					$i = 0;
					foreach((Array) $data AS $key => $val){
						echo '<tr>
						<td>'.$val['id'].'</td>
						<td>'.$val['internal_code'].'</input></td>
						<td>'.$val['item_name'].'</td>
						<td>'.number_format($val['cost_lalu']).'</td>
						<td>'.($val['qty']).'</td>
						<td>'.$val['loc_part'].'</td>
						<td>
							<button id="sparepart_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
							'<script>'.
								"$('#sparepart_btn_".$i."').click(function() {
									$('#internal_code').val('".$val['internal_code']."');	
									$('#inventory_id_trf').val(".$val['id'].");						
									$('#sparepart_id').val(".$val['id_sparepart'].");						
									$('#item_name').val('".nl2br2($val['item_name'])."');
									$('#qty_req').val('".$val['qty']."');
									$('#cost').val(".$val['cost_lalu'].");
									$('#loc_part').val('".$val['loc_part']."');							
									$('#save').prop('disabled', false);													
								  });".
							'</script>'.
							'</button></td></tr>';
						$i++;
					}
				?>
				</tbody>
			</table>
		</div>
		<div class="modal-footer">		
			<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
		</div>
		</form>
	</div>
	<script>
      $(document).ready(function() {
        $('#data_jasa').dataTable( {
	    } );
        } );
    </script>
</div>