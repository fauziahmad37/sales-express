<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg"  style="z-index:1050">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Daftar Armada 
			</h2>
		</div>
		<div class="modal-body text-center table-responsive">
			<table class="table table-striped" id="data_jasa" style="width:100%;">
				<thead>
					<tr>
						<td>Nomer Pintu</td>
						<td>Nomer Rangka</td>
						<td>Nomer Mesin</td>
						<td>Nomer Polisi</td>
						<td>Model</td>
						<td>Warna<td>
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

						echo '<tr>
								<td>'.$val['no_pintu'].'</td>
								<td>'.$val['no_rangka'].'</td>
								<td>'.$val['no_mesin'].'</td>
								<td>'.$val['no_polisi'].'</td>
								<td>'.$val['model'].'</td>
								<td>'.$val['warna'].'</td>
						
						<td><button id="sparepart_btn_'.$i.'" class="btn btn-success btn-xs" data-dismiss="modal">
						Select'.
						'<script>'.
						"$('#sparepart_btn_".$i."').click(function() {
							$('#id').val('".$val['id']."');
							$('#no_pintu').val('".$val['no_pintu']."');
							$('#no_rangka').val('".$val['no_rangka']."');							
							$('#no_mesin').val('".nl2br2($val['no_mesin'])."');
							$('#no_polisi').val('".nl2br2($val['no_polisi'])."');
							$('#model').val('".$val['model']."');
							$('#nama').val('".$val['nama']."');
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
	
	<!-- /page content -->
		<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
		<!-- jQuery -->
		<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
		<!-- NProgress -->
		<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
    	<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
	
	<script>
      $(document).ready(function() {
        $('#data_jasa').dataTable( {
	    } );
        } );
    </script>
</div>