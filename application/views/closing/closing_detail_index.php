		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>List Detail of Closing Daily</h2>
                  <div class="clearfix"></div>
                </div>
                
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No </th>
								<th>Pool</th>
								<th>PT</th>
								<th>Tanggal Closing </th>
								<th>Doc Number</th>								
								<th>Unit Bisnis</th>								
								<th>Value Jaminan</th>
								<th>Amt Jaminan</th>
								<th>Jumlah Pembayaran via Cash</th>
								<th>Amt Pembayaran via Cash</th>
								<th>Jumlah Pembayaran via Jaminan</th>
								<th>Amt Pembayaran via Jaminan</th>
								<th>Jumlah Pembayaran via CT</th>
								<th>Amt Pembayaran via CT</th>
								<th>Jumlah Pembayaran via Charge Room</th>
								<th>Amt Pembayaran via Charge Room</th>
								<th>Jumlah Pembayaran via EDC</th>
								<th>Amt Pembayaran via EDC</th>
								<th>Jumlah  Kembalian</th>
								<th>Amt Kembalian</th>
								
								
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td>'.$val['pool_name'].'</td>'.
								'<td>'.$val['pt_name'].'</td>'.
								'<td>'.($val['date_closing'] !== null ? date('d-m-Y', strtotime($val['date_closing'])) : null).'</td>'.							
								'<td>'.$val['doc_number'].'</td>'.							
								'<td>'.$val['unit_bisnis'].'</td>'.							
								'<td>'.$val['value_jaminan'].'</td>'.
								'<td><b>'.number_format($val['amount_jaminan']).'</b></td>'.
								'<td>'.$val['value_payment_cash'].'</td>'.
								'<td><b>'.number_format($val['amount_payment_cash']).'</b></td>'.
								'<td>'.$val['value_payment_jaminan'].'</td>'.
								'<td>'.number_format($val['amount_payment_jaminan']).'</td>'.
								'<td>'.$val['value_payment_credit_ticket'].'</td>'.
								'<td>'.number_format($val['amount_payment_credit_ticket']).'</td>'.
								'<td>'.$val['value_payment_charge_room'].'</td>'.
								'<td>'.number_format($val['amount_payment_charge_room']).'</td>'.
								'<td>'.$val['value_payment_edc'].'</td>'.
								'<td>'.number_format($val['amount_payment_edc']).'</td>'.
								'<td>'.$val['value_kembalian'].'</td>'.
								'<td>'.number_format($val['amount_kembalian']).'</td>'.
								
								'</tr>';
								$ct++;
							}
						?>
						</tbody>
					</table>
					
                </div>
				<div class="">
						
						  <a href="<?php echo base_url().'Closing/add_closing/'; ?>"><button type="submit" class="btn btn-success" id="save" name="save">Add New Closing</button></a>
						
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
		<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
		<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
		<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 2,
			maxView: 4
		});
       }); 
    </script>
	 <script>
	    $(document).ready(function() {
	    	$('#datatable').dataTable( {
	    		dom: 'Bfrtip',
	    		"pageLength": 25,
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf'
		        ]
		    });
		});
    </script>
    <!-- /Datatables -->
