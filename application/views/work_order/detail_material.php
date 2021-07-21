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
						echo '<tr><td>'.$val['kode_material'].'</input></td><td>'.$val['item_name'].'</td>'.
						'<td>'.$val['sale_price'].'</td><td>'.
						'<button id="material_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#material_btn_".$i."').click(function() {
							$('#id_lts').val(null);
							$('#kode_lts').val(null);
							$('#id_sparepart').val(null);
							$('#kode_sparepart').val(null);							
							$('#id_material').val(".$val['id'].");
							$('#kode_material').val('".$val['kode_material']."');							
							$('#description').val('".nl2br2($val['item_name'])."');
							$('#id_model').val(null);
							$('#model').val(null);														
							$('#price_qty').val(".$val['sale_price'].");
							$('#qty').val(1);
							$('#total_price').val(".($val['sale_price']).");
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