		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>List Payment SKH </h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Payment/index/'); ?>" method="post">
					  
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
                <div class="x_content table-responsive">
                	<!-- table id="datatable" class="table table-striped" style="width:100%" -->
					<table id="datatable" class="display cell-border" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Doc Number</th>
								<th>Doc Number SKH</th>
								<th>Created Date</th>																				
								<th>Status</th>																				
								<th>Harga Disepakati</th>																				
								<th>Amount Awal</th>																				
								<th>Amount</th>																				
								<th>Amount Akhir</th>																				
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td><a href="'.site_url('/Payment/detail/'.$val['id']).'" class="blue">'.$val['doc_number'].'</a></td>'.          
								'<td>'.$val['doc_number_skh'].'</td>'.	
								'<td>'.$val['created_dt'].'</td>'.	
								'<td>'.$val['status'].'</td>'.
								'<td>'.number_format($val['harga_disepakati']).'</td>'.
								'<td>'.number_format($val['amount_awal']).'</td>'.
								'<td>'.number_format($val['amount']).'</td>'.
								'<td>'.number_format($val['amount_akhir']).'</td>'.
								'</tr>';
								$ct++;
							}
						?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="8" style="text-align:right">Total:</th>
								<th></th>
							</tr>
						</tfoot>
					</table>

					<div class="">
						<a href="<?php echo base_url().'Payment/add'; ?>"><button type="submit" class="btn btn-success" name="save">Create New Payment</button></a>
					</div>

                </div>
              </div>
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
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		
		<!-- Datatables -->
		<link href="<?php echo base_url('/assets/css/jquery.dataTables.min.css')?>" rel="stylesheet">
		
		<!-- Button Download Dom -->
		<!--link href="<?php //echo base_url('/assets/css/buttons/1.5.2/css/buttons.dataTables.min.css'); ?>" rel="stylesheet" 
		<link href="<?php //echo base_url('/assets/css/buttons/1.5.2/css/buttons.dataTables.min.css'); ?>" rel="stylesheet"></script> -->
		
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
		
		
		
		<!-- JS FOOTER -->
		
		
		
    <script>
    $(document).ready(function() {
		$('#datatable').DataTable( {
			"pageLength": 50,
			dom: 'Bfrtip',
			//buttons: ['copy','csv','excel', 'pdf', 'print'],
			buttons: [
				{ extend: 'copyHtml5', footer: true },
				{ extend: 'excelHtml5', footer: true },
				{ extend: 'csvHtml5', footer: true },
				{ extend: 'pdfHtml5', footer: true }
			],
			
			"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;
				
				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ?
						i.replace(/[\$,]/g, '')*1 :
						typeof i === 'number' ?
							i : 0;
				};
				
				// Total over all pages
				total = api
					.column( 8 )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
				
				// Total over this page
				pageTotal = api
					.column( 8, { page: 'current'} )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
	 
				// Update footer
				$( api.column( 8 ).footer() ).html(
					'Rp. '+pageTotal +' ( Rp '+ total +' total)'
				);
			}
		});
		$('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		});
		
		
    }); 
    </script>
    <!-- /Datatables -->
