<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Cari Sparepart</h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Sparepart/cari_sparepart'); ?>" method="post">
						<div class="form-group">                	
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pintu">Internal Code <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="internal_code" name="internal_code" required="required" class="form-control col-md-7 col-xs-12" />
							</div>                  
						</div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-success" id="cari_sparepart" name="cari_sparepart">Cek</button>
							</div>
						</div>
					</form>
				</div>
					<div class="x_content">
						
							
								<div class="panel panel-default">
									<div class="panel-heading">
										Daftar Sparepart All Workshop
									</div>
									<div class="panel-body">
										<table id="example2" width="100%" class="table table-striped table-bordered table-hover" >
											<thead>
												<tr>
													<th>Internal Code</th>
													<th>Kode Part</th>
													<th>Nama</th>
													<th>Workshop</th>
													<th>Stok</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ((array)$data AS $row) { ?>
												 <tr class="odd gradeX">
													<td align='center'><?php echo $row['internal_code'];?></td>
													<td align='center'><?php echo $row['kode_part'];?></td>
													<td align='center'><?php echo $row['item_name'];?></td>
													<td align='center'><?php echo $row['name'];?></td>
													<td align='center'><?php echo $row['qty'];?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
										<!-- /.table-responsive -->
									</div>
									<!-- /.panel-body -->
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
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
