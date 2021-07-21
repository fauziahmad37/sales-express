<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				List Mobil
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="datatable">
				<thead>
					<tr>
						<td>No Rangka</td>
						<td>No Mesin</td>
						<td>No Polisi</td>
						<td>No Pintu</td>
						<td>Model</td>
						<td>Warna</td>												
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
						$val['model'].' - '.$val['brand'].'</td><td>'.$val['warna'].'</td><td>'.
						'<button id="car_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#car_btn_".$i."').click(function() {
							$('#id').val('".$val['id']."');
							$('#id_jenis_customer').val('".$val['id_jenis_customer']."');							
							$('#id_model').val('".$val['id_model']."');
							$('#kip').val('".$val['kip']."');
							$('#nik').val('".$val['nik']."');
							$('#id_pool').val('".$val['id_pool']."');							
							$('#id_warna').val('".$val['id_warna']."');
							$('#no_rangka').val('".$val['no_rangka']."');
							$('#no_mesin').val('".$val['no_mesin']."');
							$('#no_polisi').val('".$val['no_polisi']."');
							$('#no_pintu').val('".$val['no_pintu']."');
							$('#nama').val('".$val['nama']."');
							$('#remarks').val('".$val['remarks']."');
							$('#owner_pt_id').val('".$val['owner_pt_id']."');
							$('#alamat').text('".nl2br2($val['alamat'])."');
							$('#tahun').val('".$val['tahun']."');
							$('#no_telepon1').val('".$val['no_telepon1']."');
							$('#no_telepon2').val('".$val['no_telepon2']."');																												
							$('#save').hide();
							$('#update').show();
							$('#no_rangka').attr('readonly', 'true');
							$('#id_jenis_customer').attr('readonly', 'true');
							$('#no_mesin').attr('readonly', 'true');														
							if ( ".$val['id_jenis_customer']." >= ".Admin::CUSTOMER_TIPE_UMUM.")
							{
								$('#no_pintu').val(null);
								$('#id_pool').val(null);
								$('#id_pool').removeAttr('required');			  
								$('#no_pintu').removeAttr('required');		
								$('#pool_div').hide();
								$('#div_no_pintu').hide();									
							} else {
								$('#id_pool').attr('required', 'true');			  
								$('#no_pintu').attr('required', 'true');
								$('#pool_div').show();
								$('#div_no_pintu').show();	
							}
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
<script>
 $(document).ready(function() {
$('#datatable').dataTable( {} );
        } );
</script>