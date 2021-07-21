		<!-- page content -->
	<!-- PNotify -->
    <link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">		
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Work Order </h2>
                  <div class="clearfix"></div>
                </div>
				<div id="ajax-modal-car" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>
				<div id="custom_notifications" class="custom-notifications dsp_none">
				  <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
				  </ul>
				  <div class="clearfix"></div>
				  <div id="notif-group" class="tabbed_notifications"></div>
				</div>
                <div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Work_order/new_wo/2'); ?>" method="post">
						  <input type="hidden" id="id" name="id"/>
						  <input type="hidden" id="id_workshop" name="id_workshop" value="<?php echo $id_workshop;?>"/>
						  <input type="hidden" id="id_car" name="id_car" value="<?php echo $id_car;?>"/>
                                                  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Pembayaran<span class="required">*</span> 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="type_of_payment" id="type_of_payment" class="form-control" required="required">
								<option value="">-- Select One --</option>
								<?php
									if ($arrJenisCustomer2['jenis_customer'] == 'Reguler') {
										echo '<option value="1">Tunai</option>';
										echo '<option value="2">Tabungan</option>';
										echo "<option value='4'>OHL</option>";
										echo "<option value='5'>INTERNAL</option>";
										echo '<option value="6">REACTIVATE</option>';
                                    }elseif ( $arrJenisCustomer2['jenis_customer'] == 'Umum') {
										echo '<option value="1">Tunai</option>';
										echo '<option value="6">REACTIVATE</option>';
										echo "<option value='5'>INTERNAL</option>";
                                    }elseif ( $arrJenisCustomer2['jenis_customer'] == ('Tiara' or 'Komisi' or 'Eagle' or 'VATB')) {
										echo '<option value="4">OHL</option>';
										echo '<option value="6">REACTIVATE</option>';
										echo "<option value='5'>INTERNAL</option>";
										
									}else{
                                        foreach ((Array) $arrTipePembayaran as $key => $val){
                                            echo '<option value="'.$val['id'].'">'.$val['jenis_pembayaran'].'</option>';
                                    	}
                                    }
                                                                                
									
								?>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis WO<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="wo_tipe" id="wo_tipe" class="form-control" required="required">
								<option value="">-- Select One --</option>
								<?php
									foreach ((Array) $arrWOTipe as $key => $val){
										echo '<option value="'.$val['id'].'">'.$val['tipe'].'</option>';
									}
								?>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="start_dt">Mulai WO <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							 <div class="input-group date form_date col-md-6" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
								<input class="form-control inputdate" size="auto" type="text" name="start_dt" id="start_dt" value="<?php echo date('Y-m-d H:i:00');?>" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
								<input type="hidden" id="dtp_input1" value="" /><br/>					
							</div>
							</div>       
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="end_dt">Estimasi Selesai <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							 <div class="input-group date form_date col-md-6" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input2">
								<input class="form-control inputdate" size="auto" type="text" name="end_dt" id="end_dt" value="<?php echo date('Y-m-d H:i:00', strtotime('+ 6 hour'));?>" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
								<input type="hidden" id="dtp_input2" value="" /><br/>					
							</div>
							</div>       
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="odo_km">Odo. KM <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="number" id="odo_km" name="odo_km" required="required" class="form-control col-md-7 col-xs-12" />
							</div>                      
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="km_perbaikan">KM Perbaikan Selanjutnya <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <input type="number" id="next_odo_km" name="next_odo_km" required="required" class="form-control col-md-7 col-xs-12" />
							</div>                      
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_stnk">Keluhan Pelanggan 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <textarea id="request" name="request" class="form-control" rows="5"></textarea>
							</div>       
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="saran_perbaikan">Saran Perbaikan Pelanggan 
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							  <textarea id="suggestion" name="suggestion" class="form-control" rows="5"></textarea>
							</div>       
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Main Problem <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="id_main_problem" id="id_main_problem" class="form-control" required="required">
								<option value="">-- Select One --</option>
								<?php
									foreach ((Array) $arrMainProblem as $key => $val){
										echo '<option value="'.$val['id'].'">'.$val['problem'].'</option>';
									}
								?>
							  </select>
							</div>
						  </div>	
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Teknisi <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="id_technician" id="id_technician" class="form-control" required="required">
								<option value="">-- Select One --</option>
								<?php
									foreach ((Array) $arrTechnician as $key => $val){
										echo '<option value="'.$val['id'].'">'.$val['nama'].'</option>';
									}
								?>
							  </select>
							</div>
						  </div>
						  <div class="ln_solid"></div>
						  <div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							  <button type="submit" class="btn btn-success" id="save" name="save">Submit</button>
							  <button type="submit" class="btn btn-success" id="update" name="update">Submit</button>
							</div>
						  </div>
					</form>
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
		<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
		$(document).ready(function() {
		$('.form_date').datetimepicker({
			showSecond: false,
			autoclose: 1,		
			minDate: 0,	
			timeFormat: 'hh:mm:00'
		});
		$('#start_dt').on("blur", function(){
			var date = new Date($('#start_dt').val());
			if(date < new Date()){
				new PNotify({
				  title: "Warning",
				  type: "alert",
				  text: "Waktu Estimasi WO sudah lewat",
				  nonblock: {
					  nonblock: true
				  },
				  addclass: "red",
				  styling: "bootstrap3"
				});
			}
		});
		$("#update").hide(); 
		$("#odo_km").on("change", function(){
			var val_km = parseInt($("#odo_km").val()) + 10000;
			
			$("#next_odo_km").val(val_km);
		});
       } );
    </script>
    <!-- /Datatables -->
