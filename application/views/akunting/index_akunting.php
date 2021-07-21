		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Data Invoice <?php if($id_workshop !== '') echo '( '.get_array($arrWorkshop, $id_workshop).' - '.date('M Y', strtotime($date)).')';?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Akunting/index/'); ?>" method="post">
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
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tanggal Awal<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 <div class="input-group date form_date col-md-4" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
							<input class="form-control inputdate" size="auto" type="text" name="bulan" id="bulan" value="<?php echo date('d M Y', strtotime($date));?>" readonly>
							<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
						</div>
						</div>       
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tanggal Akhir<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 <div class="input-group date form_date col-md-4" data-date-format="dd MM yyyy" data-link-field="dtp_input2">
							<input class="form-control inputdate" size="auto" type="text" name="bulanakhir" id="bulanakhir" value="<?php echo date('d M Y', strtotime($dateakhir));?>" readonly>
							<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
						</div>
						</div>       
					  </div>
					  
					   <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="id_status_invoice" id="id_status_invoice" class="form-control" required="required">
							<option value="0,1">Semua</option>
							<option value="1">Lunas</option>
							<option value="0">Belum Lunas</option>
						  </select>
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
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Invoice Number</th>
								<th>WO Number</th>
								<th>Total Tagihan</th>   
								<th>Status</th>
								<th>Aging</th>
								<th>Jenis Pembayaran</th>																
								<th>Tanggal Invoice</th>
								<th>Tanggal Pembayaran</th>                    		
								<th>Nama Kustomer</th>		
								<th>Pembuat Invoice</th>
								<th>Penerima</th>	
							
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
									$delta_time = time() - strtotime($val['created_dt']);
									$aging_days = floor(($delta_time / 3600)/24);
								
									
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td><a href="'.site_url('/Invoice/detail/'.$val['id']).'" class="blue">'.$val['invoice_number'].'</a></td>'.          
								'<td>'.$val['wo_number'].'</td>'.
								'<td>'.number_format($val['total_billing']).'</td>'.
								'<td>'.($val['lunas'] == 1 ? 'Lunas' : 'Belum Lunas').'</td>'.
                                                                '<td>'.($val['lunas'] == 1 ? '0': $aging_days).'</td>'.
								'<td>'.($val['tipe_pembayaran'] == 1 ? 'Tunai' : ($val['tipe_pembayaran'] == 2 ? 'Tabungan' : ($val['tipe_pembayaran'] == 4 ? 'OHL' : ''))).'</td>'.																
								'<td>'.date('d-M-Y H:i:s', strtotime($val['created_dt'])).'</td>'.
								'<td>'.($val['dt_lunas'] !== null ? date('d-M-Y H:i:s', strtotime($val['dt_lunas'])) : null).'</td>'.
								'<td>'.$val['nama_customer'].'</td>'.							
								'<td>'.(array_get($dataUser, $val['input_by'], 'id', 'full_name')).'</td>'.
								'<td>'.(array_get($dataUser, $val['receiver_id'], 'id', 'full_name')).'</td>'.
																
								'</tr>';
								$ct++;
							}
							
						?>
						</tbody>
						
						<tfoot>
						
							<!--
							<tr><td style="padding:0px !important" colspan="6"><b>TOTAL BILLING</b></td><td style="padding:0px !important" class="text-right"><b><?php // echo ($total_biaya)?></b></td></tr> -->
							<tr>
								<td><strong style="font-size: 20px;">GRAND TOTAL</td>
								<td colspan="2"><strong style="font-size: 20px;"><?php foreach((Array) $grand_total as $key => $val){echo "Rp. ".number_format($val);}?></td>
							</tr>
						</tfoot> 
						
					</table>
					
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
	    		"pageLength": 50,
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf'
		        ]
		    });
		});
    </script>
    <!-- /Datatables -->
