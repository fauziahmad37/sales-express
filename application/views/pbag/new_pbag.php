<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>Create Permintaan Barang Antar Gudang</h2>
					<div class="clearfix"></div>
                </div>
				<div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Pbag/new_pbag'); ?>" method="post">
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">PBAG Number <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="pbag_number" name="pbag_number" required="required" 
										value="<?php if(isset($data['pbag_number'])) echo $data['pbag_number']; ?>" class="form-control col-md-7 col-xs-12" readonly>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop Pemohon <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="hidden" name="workshop_id_req" value="<?php echo $this->user['id_workshop'];?>">
								<input type="hidden" name="workshop_req_short_name" value="<?php if(isset($workshop_req['code'])) echo $workshop_req['code'];?>">
								<input type="text" name="workshop_name_req" class="form-control col-md-7 col-xs-12" readonly value="<?php if(isset($workshop_req['name'])) echo $workshop_req['name'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop Tujuan <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="workshop_id_trf" id="workshop_id_trf" class="form-control" required="required">
										<option value="">-- Select One --</option>
										<?php
											foreach ((Array) $arrWorkshop as $key => $val){
												echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
											}
										?>
									</select>
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button type="submit" class="btn btn-success" name="save" id="save">Simpan</button>
								</div>
							</div>
						</form>
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
<script src="<?php echo base_url('/assets/js/dataTables.keyTable.min.js');?>"></script>

<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- Datatables -->