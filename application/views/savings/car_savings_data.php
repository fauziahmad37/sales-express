<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				List Mobil
			</h2>
		</div>
		<div class="modal-body text-center">
			<table class="table table-striped">
				<thead>
					<tr>
						<td>No Rangka</td>
						<td>No Mesin</td>
						<td>No Polisi</td>
						<td>No Pintu</td>
						<td>Pool</td>											
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
						echo '<tr><td>'.$val['no_rangka'].'</input></td><td>'.$val['no_mesin'].'</td><td>'.$val['no_polisi'].'</td><td>'.$val['no_pintu'].'</td><td>'.
						$val['pool'].'</td><td>'.
						'<button id="car_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#car_btn_".$i."').click(function() {
							$('#id_car').val('".$val['id']."');
							$('#id_pool').val('".$val['id_pool']."');							
							$('#pool').val('".$val['pool']."');			
							$('#no_rangka').val('".$val['no_rangka']."');
							$('#no_mesin').val('".$val['no_mesin']."');
							$('#no_polisi').val('".$val['no_polisi']."');
							$('#no_pintu').val('".$val['no_pintu']."');
							$('#nama').val('".$val['nama']."');
							$('#alamat').text('".nl2br2($val['alamat'])."');
							$('#tahun').val('".$val['tahun']."');
							$('#no_telepon1').val('".$val['no_telepon1']."');
							$('#no_telepon2').val('".$val['no_telepon2']."');																												
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
</div>