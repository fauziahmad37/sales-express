<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				List Invoice
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_invoice" style="width:100%;">
				<thead>
					<tr>
						<td>Nomor Invoice</td>
						<td>Nomor Work Order</td>
						<td>Jenis Customer</td>
						<td>Nama Customer</td>
						<td>No Polisi</td>
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
						//print_r($val);
						echo '<tr>
								<td>'.$val['invoice_number'].'</input></td>
								<td>'.$val['wo_number'].'</td>
								<td>'.$val['jenis_customer'].'</td>
								<td>'.$val['nama_customer'].'</td>
								<td>'.$val['no_polisi'].'</td>
								<td>'.
						'<button id="invoice_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">Select'.
						'<script>'.
						"$('#invoice_btn_".$i."').click(function() {
							$('#id').val(".$val['id'].");
							$('#id_wo').val(".$val['id_wo'].");
							$('#input_by').val(".$val['input_by'].");
							$('#id_car').val(".$val['id_car'].");							
							$('#invoice_number').val('".$val['invoice_number']."');							
							$('#wo_number').val('".$val['wo_number']."');
							$('#created_dt').val('".date('d M Y', strtotime($val['created_dt']))."');
							$('#jenis_customer').val('".$val['jenis_customer']."');
							$('#tipe_pembayaran_wo').val('".$val['jenis_pembayaran']."');
							$('#nama_customer').val('".$val['nama_customer']."');
							$('#no_polisi').val('".$val['no_polisi']."');							
							$('#total_billing').val(".$val['total_billing'].");
							$('#terbayar').val(".$val['total_payment'].");
							$('#workshop_name').val('".$val['workshop_name']."');
							$('#type_of_payment').val('".$val['type_of_payment']."');

							$('#amount').val(null);";							
							if($val['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER || $val['id_jenis_customer'] == Admin::CUSTOMER_TIPE_EAGLE || $val['id_jenis_customer'] == Admin::CUSTOMER_TIPE_OHL){
								if($val['id_jenis_customer'] == Admin::CUSTOMER_TIPE_REGULER ){
									echo "
										$('#div_tabungan').show();
										$('#div_btn_tabungan').show();										
										$('#tabungan').hide();
										$('#tunai').hide();
										$('#ohl').hide();										
										";
								} else {
									echo "
										$('#div_tabungan').hide();
										$('#tabungan').hide();
										$('#tunai').show();
										$('#ohl').show();										
										";
								}
								echo "
									$('#div_pool').show();
									$('#div_no_pintu').show(); 
									$('#pool').val('".$val['nama']."');
									$('#no_pintu').val('".$val['no_pintu']."');
									";
							} else {
								echo "
									$('#div_tabungan').hide();
									$('#div_pool').hide();
									$('#tunai').show();
									$('#tabungan').hide();
									$('#div_no_pintu').hide(); 
									$('#pool').val(null);
									$('#no_pintu').val(null);
									";
							}
						  echo "});".
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
        $('#data_invoice').dataTable( {
	    } );
        } );
    </script>
</div>