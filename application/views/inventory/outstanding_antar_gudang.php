<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>Data Outstading Antar Gudang <?php if($id_workshop !== '') echo '( '.array_get($arrWorkshop, $id_workshop, 'id', 'name').')';?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12 table-responsive" >
						<table id="datatable" class="table table-bordered" style="width:100%">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Kode Internal</th>
									<th class="text-center">Nama Barang</th>
									<th class="text-center">Status</th>
									<th class="text-center">Qty Request</th>
									<th class="text-center">Qty Transfer</th>
									<th class="text-center">No RR</th>
									<th class="text-center">Note Request</th>
									<th class="text-center">Note Transfer</th>
									<th class="text-center">Tanggal Request</th>
									<th class="text-center">Tanggal Transfer</th>
									<th class="text-center">Pool Request</th>
									<th class="text-center">Pool Transfer</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$a=1;
								foreach ((Array) $data AS $key => $val) { 
									echo '<tr><td>'.$a.'</td>'.
									'<td>'.$val['internal_code'].'</td>'.          								
									'<td>'.$val['item_name'].'</td>'.          								
									'<td>'.$val['status'].'</td>'.          								
									'<td>'.$val['qty_request'].'</td>'.          								
									'<td>'.$val['qty_transfered'].'</td>'.          								
									'<td>'.$val['no_rr'].'</td>'.          								
									'<td>'.$val['note_request'].'</td>'.          								
									'<td>'.$val['note_transfered'].'</td>'.          								
									'<td>'.$val['request_dt'].'</td>'.          								
									'<td>'.$val['transfered_dt'].'</td>'.          								
									'<td>'.$val['pool_request'].'</td>'.          								
									'<td>'.$val['pool_approve'].'</td>'.          								
									'</tr>';
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
</div>

<!-- /page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/buttons.dataTables.min.css');?>" rel="stylesheet">		
<!-- jQuery -->
<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>		
<!-- Bootstrap -->
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>