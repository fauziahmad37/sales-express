<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Car List <?php //print_r($data); ?>
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					
						<th>No Polisi</th>
						<th>Tipe</th>
						<th>No Rangka</th>
						<th>No Mesin</th>
						<th>Price List</th>	
						<th>Status</th>
						<th>Location</th>	
						<th>#</th>
					
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
						<td>'.$val['no_polisi'].'</input></td>
						<td>'.$val['tipe'].'</td>
						<td>'.($val['no_rangka']).'</td>
						<td>'.($val['no_mesin']).'</td>
						<td>'.$val['price_list'].'</td>
						<td>'.$val['status_unit'].'</td>
						<td>'.$val['location'].'</td>
						<td>
						<button id="sparepart_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#sparepart_btn_".$i."').click(function() {
							$('#car_id').val(".$val['id'].");
							$('#no_polisi').val('".$val['no_polisi']."');
							$('#no_rangka').val('".$val['no_rangka']."');
							$('#no_mesin').val('".$val['no_mesin']."');
							$('#tipe').val('".$val['tipe']."');
							$('#pt').val('".$val['pt']."');						
							$('#price_list').val('".$val['price_list']."');	
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