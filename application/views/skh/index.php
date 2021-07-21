		<!-- page content -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data SKH </h2>
                  <div class="clearfix"></div>
                </div>
				
				
				
               
                <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Doc Number</th>
								<th>Harga Disepakati</th>
								<th>Terbayar</th>
								<th>status</th>
								<th>Created Date</th>
								<th>Nik</th>
								<th>Nama</th>
								<th>No Telepon</th>
								<th>Alamat</th>
								<th>Nama Badan Usaha</th>
								<th>Pemberi Kuasa</th>
								<th>Tanggal Kuasa</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) {
							?>	<tr>
									<td><?php echo $ct; ?></td>
									<td><?php echo $val['doc_number']; ?></td>
									<td><?php echo number_format($val['harga_disepakati']); ?></td>
									<td><?php echo number_format($val['amount_terbayar']); ?></td>
									<td><?php echo $val['status']; ?></td>
									<td><?php echo $val['created_dt']; ?></td>
									<td>
										<a href="<?php echo site_url('/Skh/add_car/'.$val['id']); ?>" class="blue"><?php echo $val['nik']; ?></a>
									</td>          
									<td><?php echo $val['nama']; ?></td>
									<td><?php echo $val['no_telepon']; ?></td>
									<td><?php echo $val['alamat']; ?></td>
									<td><?php echo $val['nama_badan_usaha']; ?></td>
									<td><?php echo $val['pemberi_kuasa']; ?></td>
									<td><?php echo $val['tanggal_kuasa']; ?></td>
								</tr>
						<?php $ct++; 
							}
							?>
						</tbody>
					</table>
                </div>
				
				<div class="">
					<a href="<?php echo base_url().'Skh/add'; ?>"><button type="submit" class="btn btn-success" name="save">Add New SKH</button></a>
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
