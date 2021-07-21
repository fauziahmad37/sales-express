<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
		
			<h2 class="modal-title text-center">Jumlah Tabungan : 
				<?php 	foreach ((Array)$jsonTab as $key => $val) {
				 			echo number_format($val['TAB_SALDO']);
				 		}
				 ?>	
				 
			</h2>
		</div>
		<div class="modal-footer">		
			<button onclick="window.location.reload();" type="button" class="btn btn-info" data-dismiss="modal">OK</button>
		</div>
		</form>
	</div>
</div> 