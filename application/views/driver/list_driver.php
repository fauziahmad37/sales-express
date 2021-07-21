		<!-- page content -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Driver </h2>
                  <div class="clearfix"></div>
                </div>
				
				
				
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Driver/list_driver/'); ?>" method="post">
					  
					   <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="id_status_invoice" id="id_status_invoice" class="form-control" required="required">
							<option value="Active','Inactive">Semua</option>
							<option <?php if($id_status_invoice == 'Active') echo 'selected'; ?> value="Active">Active</option>
							<option <?php if($id_status_invoice == 'Inactive') echo 'selected'; ?> value="Inactive">Inactive</option>
						  </select>
						</div>
					  </div>
					  
					  <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success" id="search" name="search">Search</button>
						</div>
					  </div>
					  <div class="ln_solid"></div>
				  </form>
				  </div>
				</div>
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Pool</th>
								<th>KIP</th>
								<th>KTP</th>
								<th>SIM</th>
								<th>Bank</th>
								<th>Rek Number</th>
								<th>Driver Name</th> 
								<th>Phone</th>
								<th>Emergency</th>
								<th>Email</th>
								<th>Jaminan</th>
								<th>Ketentuan Jaminan</th>
								<th>Hari Kerja</th>
								<th>Status</th>
								<th>Tanggal Daftar</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) {
							?>	<tr>
									<td><?php echo $ct; ?></td>
									<td><?php echo $val['pool_name']; ?></td>
									<td>
										<a href="<?php echo site_url('/Driver/detail_driver/'.$val['id']); ?>" class="blue"><?php echo $val['kip_number']; ?></a>
									</td>          
									<td><?php echo $val['ktp_number']; ?></td>
									<td><?php echo $val['sim_number']; ?></td>
									<td><?php echo $val['bank']; ?></td>
									<td><?php echo $val['bank_account_number']; ?></td>
									<td><?php echo $val['name']; ?></td>
									<td><?php echo $val['phone']; ?></td>
									<td><?php echo $val['emergency_number']; ?></td>
									<td><?php echo $val['email']; ?></td>
									<td><?php echo number_format($val['amount_akhir']); ?></td>
									<td><?php echo $val['ketentuan_jaminan']; ?></td>
									<td><?php echo $val['hari_kerja']; ?></td>
									<td><?php echo $val['status']; ?></td>
									<td><?php echo $val['created_dt']; ?></td>
									<td><a href="<?php echo site_url('/Driver/cetak_kip/'.$val['id']); ?>" 
									class="btn-sm btn-info" role="button">print</a></td>
								</tr>
						<?php $ct++; 
							}
							?>
						</tbody>
					</table>
                </div>
				
				<div class="">
					<a href="<?php echo base_url().'Driver/'; ?>"><button type="submit" class="btn btn-success" id="save" name="save">Add New Driver</button></a>
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
