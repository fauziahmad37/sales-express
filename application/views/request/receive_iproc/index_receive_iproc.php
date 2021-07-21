<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile">
			<div class="x_title">
				<h2>Data Receive Report</h2>
				<div class="clearfix"></div>
            </div>
			<div class="x_content">
				<div class="col-md-12 col-sm-12 col-xs-12">
						<table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
						  <thead>
							<tr>
							  <th class="text-center">No.</th>
							  <th class="text-center">Nomor</th>
							  <th class="text-center">Judul</th>
							  <th class="text-center">Keterangan</th>
							  <th class="text-center">Tgl Penerimaan</th>
							  <th class="text-center">Keterangan</th>
							  <th class="text-center">Departemen</th>
							  <th class="text-center">Aksi</th>
							</tr>
						  </thead>
						  <tbody>
							<?php
								$a=1;
								foreach((Array) $data as $key => $val){
									echo "<tr>
										<td>".$a.". </td>
										<td>".$val['rr_number']."</td>
										<td>".$val['rr_subject']."</td>
										<td>".$val['keterangan']."</td>
										<td>".$val['tanggal_terima']."</td>
										<td>".$val['rr_description']."</td>
										<td>".$val['dept_name']."</td>
										<td>
											<a href='javascript:void(0);' class='btn btn-success' id='adjust_stock' onclick='adjust_stock(".$val['rr_id'].")'>Proses Receive</a>
										</td>
									</tr>";
								$a++;
								}
							?>
							
						  </tbody>
						</table>
				</div>
			</div>
						
		</div>
	</div>
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
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.keyTable.min.js');?>"></script>

<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Datatables -->

<script>
      $(document).ready(function() {
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		}); 
		$('#datatable').dataTable( {} );
	  } );
	  
	function adjust_stock(id){
		if(confirm('Apakah Anda yakin akan memproses pengiriman barang ini?')){
			location.replace('<?php echo site_url('/Receive_iproc/adjust_stock/');?>'+id);
		}
	}
</script>