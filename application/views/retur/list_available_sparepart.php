<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Sparepart List
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					<tr>
						<td>Kode Part</td>
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
						echo '<tr><td>'.$val['kode_part'].'</input></td>
						<td>'.$val['item_name'].'</td>
						<td>'.number_format($val['harga_satuan']).'</td>
						<td>'.($val['qty']).'</td>
						<td>'.$val['loc_part'].'</td><td>
						<button id="sparepart_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#sparepart_btn_".$i."').click(function() {
							$('#id_inventory').val(".$val['id_inventory'].");
							$('#kode_barang').val('".$val['kode_part']."');							
							$('#nama_barang').val('".nl2br2($val['item_name'])."');
							$('#id_sparepart').val(".$val['id_sparepart'].");
							$('#id_material').val(null);
							$('#stok').val('".$val['stok']."');							
							$('#qty_retur').val('".$val['qty']."');
							$('#harga_satuan').val(".$val['harga_sparepart'].");
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