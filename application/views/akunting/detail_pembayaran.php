		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Invoice Lunas <?php if($id_workshop !== '') echo '( '.get_array($arrWorkshop, $id_workshop).' - '.date('M Y', strtotime($date)).')';?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Akunting/detail_pembayaran/'); ?>" method="post">
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
								<th>Tanggal Invoice</th>
								<th>Kode Internal</th>
								<th>Nama</th>
								<th>Qty</th>
								<th>Harga Satuan</th>
								<th>Total Harga Sebelum PPN</th>
								<th>Total PPN</th>
								<th>Total Harga Setelah PPN</th>
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
								'<td>'.$val['wo_number'].'</a></td>'.																
								'<td>'.date('d-M-Y H:i:s', strtotime($val['created_dt'])).'</td>'.
								'<td>'.$val['internal_code'].'</td>'.
								'<td>'.$val['item_name'].'</td>'.
								'<td>'.$val['qty'].'</td>'.
								'<td> Rp. '.number_format($val['harga_satuan']).'</td>'.
								'<td> Rp. '.number_format($val['total_harga_sebelum_ppn']).'</td>'.
								'<td> Rp. '.number_format($val['total_ppn']).'</td>'.
								'<td> Rp. '.number_format($val['total_setelah_ppn']).'</td>'.
								'</tr>';
								$ct++;
							}
							
						?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="3"><strong style="font-size: 20px;">TOTAL PART + PPN</td>
								<td colspan="2"><strong style="font-size: 20px;"><?php foreach((Array) $total_part as $key => $val){echo "Rp. ".number_format( (($val['sum'])*0.1)+$val['sum'] );}?></td>
							</tr>
							<tr>
								<td colspan="3"><strong style="font-size: 20px;">TOTAL SERVICE + PPN</td>
								<td colspan="2"><strong style="font-size: 20px;"><?php foreach((Array) $total_service as $key => $val){echo "Rp. ".number_format( (($val['sum'])*0.1)+$val['sum'] );}?></td>
							</tr>
							<tr>
								<td colspan="3"><strong style="font-size: 20px;">GRAND TOTAL</td>
								<td colspan="2"><strong style="font-size: 20px;">
									<?php 
										foreach((Array) $total_part as $key => $val){
											$a = ($val['sum']*0.1)+$val['sum'];
										}
										foreach((Array) $total_service as $key => $val){
											$b = ($val['sum']*0.1)+$val['sum'];
										}
										echo "Rp. ".number_format($a+$b);
										
									?>
								</td>
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
		$('#datatable').dataTable({
			dom: 'Bfrtip',
			buttons: [
		            'copy', 'csv', 'excel', 'pdf'
		        ]
		});
       }); 
    </script>
    <!-- /Datatables -->
