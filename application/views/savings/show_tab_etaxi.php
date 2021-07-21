<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Cek Tabungan Mobil eTaxi</h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Savings/etaxi_show_tab'); ?>" method="post">
						<div class="form-group">                	
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pintu">No. Pintu <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="no_pintu" name="no_pintu" required="required" class="form-control col-md-7 col-xs-12" />
							</div>                  
						</div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-success" id="cek" name="cek">Cek</button>
							</div>
						</div>
					</form>
				</div>
				<div class="x_content">
					<?php 	if($data!=''){
								echo "<table>
									<tr>
										<td>Status</td>
										<td>:</td>
										<td>".$data['status']."</td>
									</tr>
									<tr>
										<td>Nomor Pintu</td>
										<td>:</td>
										<td>".$data['data']['nomorPintu']."</td>
									</tr>
									<tr>
										<td>Kip Bravo</td>
										<td>:</td>
										<td>".$data['data']['kipBravo']."</td>
									</tr>
									<tr>
										<td>Nama Bravo</td>
										<td>:</td>
										<td>".$data['data']['namaBravo']."</td>
									</tr>
									<tr>
										<td>Saldo Sparepart</td>
										<td>:</td>
										<td>".$data['data']['saldoSparepart']."</td>
									</tr>
								</table>";
							} 
					?>
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