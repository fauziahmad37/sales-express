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
						<td>Internal Code</td>
						<td>Nama Barang</td>
						<td>Harga Jual</td>											
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
						//print_r($val);die();
						echo '<tr>
								<td>'.$val['kode_part'].'</td>
								<td>'.$val['internal_code'].'</td>
								<td>'.$val['item_name'].'</td>
								<td>'.number_format($val['sale_price_proposed']).'</td>
						
						<td><button id="sparepart_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">
						Select'.
						'<script>'.
						"$('#sparepart_btn_".$i."').click(function() {
							$('#id_sparepart').val('".$val['id']."');
							$('#internal_code').val('".$val['internal_code']."');							
							$('#item_name').val('".nl2br2($val['item_name'])."');
							$('#merk').val('".$val['merk']."');
							$('#id_material').val(null);
							$('#qty').val(1);
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