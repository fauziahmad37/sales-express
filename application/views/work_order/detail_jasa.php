<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				LTS List
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					<tr>
						<td>Kode LTS</td>
						<td>Deskripsi</td>
						<td>Jenis Mobil</td>
						<td>Flat Rate</td>
						<td>Harga Per Jam</td>	
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
						echo '<tr><td>'.$val['lts_code'].'</input></td><td>'.$val['description'].'</td><td>'.$val['jenis'].'</td>'.
						'<td>'.$val['flat_rate'].'</td><td>'.$val['hourly_price'].'</td><td>'.($val['hourly_price'] + ($val['hourly_price']*10/100)).'</td><td>'.
						'<button id="jasa_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#jasa_btn_".$i."').click(function() {
							$('#id_lts').val(".$val['id'].");
							$('#kode_lts').val('".$val['lts_code']."');
							$('#id_sparepart').val(null);
							$('#kode_sparepart').val(null);							
							$('#id_material').val(null);
							$('#kode_material').val(null);
							$('#description').val('".nl2br2($val['description'])."');
							$('#id_jenis_car').val(".$val['id_jenis_car'].");
							$('#jenis').val('".$val['jenis']."');
							$('#price_lts').val(".($id_jenis_customer == Admin::CUSTOMER_TIPE_REGULER ? 0 : $val['hourly_price']).");
							$('#price_qty').val(".($id_jenis_customer == Admin::CUSTOMER_TIPE_REGULER ? 0 : $val['hourly_price']).");
							$('#qty').val(".$val['flat_rate'].");
							$('#lts').val(".$val['flat_rate'].");
							$('#total_price').val(".($id_jenis_customer == Admin::CUSTOMER_TIPE_REGULER ? 0 : ($val['flat_rate'] * $val['hourly_price'])).");
							$('#biaya_dasar').val(".$val['hourly_price'].");
							$('#free_jasa').prop('checked', true);
							$('#save_detail').prop('disabled', false);
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