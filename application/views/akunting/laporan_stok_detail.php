<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
	<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel tile">
					<div class="x_content">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Akunting/laporan_stok_detail/'); ?>" method="post">
							  <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <select name="id_workshop" id="id_workshop" class="form-control" required="required">
									<?php
										function get_array($arr, $id, $str = 'name'){
											foreach((Array) $arr AS $key => $val){
												if($val['id'] === $id){
													return $val[$str];
												}
											}
											return '';
										}							
										if($this->user['id_privilege'] == Admin::ADMINISTRATOR) { //ADMINISTRATOR
											echo '<option value="">-- Select One --</option>';
											foreach ((Array) $arrWorkshop as $key => $val){
												echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
											}
										} else {
											echo '<option value="'.$this->user['id_workshop'].'">'.get_array($arrWorkshop, $this->user['id_workshop']).'</option>';
										}
									?>
								  </select>
								</div>
							  </div>
					 <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Bulan<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<div class="input-group date form_date col-md-4" data-date-format="MM yyyy" data-link-field="dtp_input1">
										<input class="form-control inputdate" size="auto" type="text" name="bulan" id="bulan" value="<?php echo date('M Y', strtotime($date));?>" readonly>
										<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
									</div>
								</div>       
							</div>
					  
					  <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success" id="search" name="search">Cek</button>
						</div>
					  </div>
					  <div class="ln_solid"></div>
				  </form>
				  </div>
				</div>
				<div id="print_area">
					<div class="x_title">
						<h2 style="text-align:center;">Laporan Stok Bulanan<?php if($id_workshop !== '') echo '( '.get_array($arrWorkshop, $id_workshop).' - '.date('M Y', strtotime($date)).')';?></h2>
						<div class="clearfix"></div>
					</div>
				
				
					<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
						<table id="datatable" class="table table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Internal Code</th>
									<th>Item Name</th>
									<th>Qty Lalu</th>
									<th>Cost Lalu</th>
									<th>Total Lalu</th>
									<th>Qty In</th>
									<th>Total In</th>
									<th>Qty Out</th>
									<th>Total Out</th>
									<th>Qty Akhir</th>
									<th>Cost Akhir</th>
									<th>Total Akhir</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$ct = 1;
								foreach ((Array) $data AS $key => $val) {
									echo '<tr>'.
									'<td>'.$ct.'</td>'.
									'<td>'.$val['internal_code'].'</td>'.
									'<td>'.$val['item_name'].'</td>'.
									'<td>'.$val['qty_lalu'].'</td>'.
									'<td align="right">'.$val['cost_lalu'].'</td>'.
									'<td align="right">'.$val['total_lalu'].'</td>'.
									'<td align="right">'.$val['qty_in'].'</td>'.
									'<td align="right">'.$val['total_in'].'</td>'.
									'<td align="right">'.$val['qty_out'].'</td>'.
									'<td align="right">'.$val['total_out'].'</td>'.
									'<td align="right">'.$val['qty_akhir'].'</td>'.
									'<td align="right">'.$val['total_akhir'].'</td>'.
									'<td align="right">'.$val['cost_akum'].'</td>'.
									'</tr>';
									$ct++;
								}
								
							?>
							</tbody>
							<tfoot>
								<?php 
									//foreach((array) $total_qty_detail as $key => $val){
										echo '<tr>
											<td colspan=3 align="right">Total</td>
											<td align="right">'.$total_qty_detail['qty_lalu'].'</td>
											<td align="right">'.$total_qty_detail['cost_lalu'].'</td>
											<td align="right">'.$total_qty_detail['total_lalu'].'</td>
											<td align="right">'.$total_qty_detail['qty_in'].'</td>
											<td align="right">'.$total_qty_detail['total_in'].'</td>
											<td align="right">'.$total_qty_detail['qty_out'].'</td>
											<td align="right">'.$total_qty_detail['total_out'].'</td>
											<td align="right">'.$total_qty_detail['qty_akhir'].'</td>
											<td align="right">'.$total_qty_detail['total_akhir'].'</td>
											<td align="right">'.$total_qty_detail['cost_akum'].'</td>
										</tr>';
									//}
								?>
								
							</tfoot>
						</table>
						
					</div>
				
				
				
              </div>
            </div>
        </div>
		</div>
	</div>
        
		<!-- Datatables -->
			<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
			<link href="<?php echo base_url('/assets/css/buttons.dataTables.min.css');?>" rel="stylesheet">
			<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
			<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
			<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>
			
		<!-- jQuery -->
			<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
			
		<!-- Bootstrap -->
			<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
			
		<!-- NProgress -->
			<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
			<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
			<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
			<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
			

				<!-- Custom Theme Scripts -->
			<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
			<link href="http://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css" rel="stylesheet">
			<script src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		
		<!-- data table new 
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" ></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" ></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" ></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js" ></script>
		
    <script>
      $(document).ready(function() {
		$('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 2,
			maxView: 4
		});
		$('#datatable').DataTable( {
			"pageLength": 50,
			dom: 'Bfrtip',
			//buttons: ['copy','csv','excel', 'pdf', 'print'],
			buttons: [
				{ extend: 'copyHtml5', footer: true },
				{ extend: 'excelHtml5', footer: true },
				{ extend: 'csvHtml5', footer: true },
				{ extend: 'pdfHtml5', footer: true }
			]
		});
       }); 
    </script>
	
	<script>
		function printDiv(divName) {
			 var printContents = document.getElementById(divName).innerHTML;
			 var originalContents = document.body.innerHTML;
			 var w = window.open();
				w.document.write(
						   '<html><header><link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet" media="all"></header>'+
							   '<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">'+
							   '<link href="<?php echo base_url('/assets/css/boards.css');?>" rel="stylesheet"></header><body style="background-color:white;margin-auto">'+									   
							   printContents+
						   '</body></html>');
				w.document.close();
				w.focus();
				setTimeout(function () { // necessary for Chrome
					w.print();
					w.close();
				}, 500);
		}
	</script>
    <!-- /Datatables -->
	    		