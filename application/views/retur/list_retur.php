<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				List Supply Slip
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					<tr>
						<td>Tanggal Supply Slip</td>					
						<td>Nomor Supply Slip</td>
						<td>Tanggal SS</td>
						<td>Nomor Wo</td>
						<td>#</td>
					</tr>
				</thead>
				<tbody>
				<?php
					$i = 0;
					foreach((Array) $data AS $key => $val){
						echo '<tr>
							<td>'.date('d M Y', strtotime($val['created_dt'])).'</td>
							<td>'.$val['nomor_referensi'].'</td>
							<td>'.$val['created_dt'].'</td>
							<td>'.$val['wo_number'].'</td>
							<td>'.
						'<button id="wo_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#wo_btn_".$i."').click(function() {
							$('#id_wo').val(".$val['id'].");
							$('#nomor_ss').val('".$val['nomor_referensi']."');
							$('#tanggal_ss').val('".$val['created_dt']."');
							$('#nomor_wo').val('".$val['wo_number']."');
							$('#id_wo').val('".$val['id_wo']."');
							$('#tanggal_wo').val('".$val['tanggal_wo']."');
							$('#id_car').val('".$val['id_car']."');
							$('#nomor_pintu').val('".$val['no_pintu']."');
							$('#nama_customer').val('".$val['nama']."');
							$('#kip').val('".$val['kip']."');	
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