<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				List WO Aktif
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					<tr>
						<td>Tanggal Work Order</td>					
						<td>Nomor Work Order</td>
						<td>Model Mobil</td>						
						<td>Jenis Mobil</td>
						<td>#</td>
					</tr>
				</thead>
				<tbody>
				<?php
					$i = 0;
					foreach((Array) $data AS $key => $val){
						echo '<tr><td>'.date('d M Y', strtotime($val['start_dt'])).'</td><td>'.$val['wo_number'].'</td>
							<td>'.$val['brand'].' - '.$val['model'].'</td><td>'.$val['jenis'].'</td><td>'.
						'<button id="wo_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#wo_btn_".$i."').click(function() {
							$('#id_wo').val(".$val['id'].");
							$('#nomor_wo').val('".$val['wo_number']."');
							$('#tanggal_wo').val('".date('d M Y', strtotime($val['start_dt']))."');
							$('#model_mobil').val('".$val['brand'].' - '.$val['model']."');
							$('#jenis_mobil').val('".$val['jenis']."');														
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