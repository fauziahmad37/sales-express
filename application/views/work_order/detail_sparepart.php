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
						<td>Model</td>
						<td>Harga Satuan</td>	
                                                <td>Harga Setelah PPn</td>	
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
						echo '<tr><td>'.$val['kode_part'].'</input></td><td>'.$val['item_name'].'</td><td>'.$val['model'].'</td>'.
						'<td>'.$val['sale_price'].'</td><td>'.($val['sale_price']+($val['sale_price']*10/100)).'</td><td>'.
						'<button id="sparepart_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#sparepart_btn_".$i."').click(function() {
							$('#id_lts').val(null);
							$('#kode_lts').val(null);
							$('#id_sparepart').val(".$val['id'].");
							$('#kode_sparepart').val('".$val['kode_part']."');							
							$('#id_material').val(null);
							$('#kode_material').val(null);
							$('#description').val('".nl2br2($val['item_name'])."');
							$('#id_model').val(".$val['id_model'].");
							$('#model').val('".$val['model']."');														
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