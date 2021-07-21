<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Material List
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					<tr>
						<td>Kode Material</td>
						<td>Nama Barang</td>
						<td>Harga Satuan</td>
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
						echo '<tr><td>'.$val['kode_material'].'</input></td>
						<td>'.$val['item_name'].'</td>
						<td>'.number_format($val['harga_material']).'</td>
						<td>'.number_format($val['qty']).'</td>
						<td>'.$val['loc_part'].'</td><td>'.
						'<button id="material_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#material_btn_".$i."').click(function() {
							$('#id_inventory').val(".$val['id'].");
							$('#kode_barang').val('".$val['kode_material']."');							
							$('#nama_barang').val('".nl2br2($val['item_name'])."');
							$('#id_material').val(".$val['id_material'].");
							$('#id_sparepart').val(null);							
							$('#qty').val(1);
							$('#harga_satuan').val(".$val['harga_material'].");
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