		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('/assets/css/buttons.dataTables.min.css');?>" rel="stylesheet">			
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>Report Pengeluaran Barang <?php if($id_workshop !== '') echo '( '.get_array($arrWorkshop, $id_workshop).' - '.date('M Y', strtotime($date)).')';?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Inventory/pengambilan_barang/'); ?>" method="post">
					  <div class="form-group">
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
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Bulan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 <div class="input-group date form_date col-md-4" data-date-format="MM yyyy" data-link-field="dtp_input1">
							<input class="form-control inputdate" size="auto" type="text" name="date" id="date" value="<?php echo date('M Y', strtotime($date));?>" readonly>
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
				  <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" id="content_absen">
				  		<table id="datatable" class="table table-striped dataTable text-center" style="width:100%">
						<thead>
							<tr>
								<th class="text-center">No.</th>
								<th class="text-center">No WO</th>
								<th class="text-center">No Supply Slip</th>
								<th class="text-center">No Pintu</th>
								<th class="text-center">Nama Pengemudi</th>
								<th class="text-center">KIP</th>
								<th class="text-center">Jenis Pembayaran</th>
								<th class="text-center">Nama Item</th>
								<th class="text-center">Jumlah</th>
								<th class="text-center">Harga</th>
								<th class="text-center">PIC Pengeluaran</th>
								<th class="text-center">Tanggal WO</th>
								<th class="text-center">Tanggal Pengeluaran</th>
																																																												
							</tr>
						</thead>
						<tbody>
						<?php
							$a = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>
										<td>'.$a.'</td>
										<td>'.$val['wo_number'].'</td>
										<td>'.$val['nomor_referensi'].'</td>
										<td>'.$val['no_pintu'].'</td>
										<td>'.$val['nama_pengemudi'].'</td>
										<td>'.$val['kip'].'</td>
										<td>'.$val['jenis_pembayaran'].'</td>
										<td>'.$val['item_name'].'</td>
										<td>'.$val['qty'].'</td>
										<td>'.$val['harga_satuan'].'</td>
										<td>'.$val['full_name'].'</td> 
										<td>'.date('d/M/Y', strtotime($val['tanggal_wo'])).'</td>
										<td>'.date('d/M/Y', strtotime($val['created_dt'])).'</td>
									</tr>';
									$a++;
							}
						?>
						</tbody>
						<tfoot>
						<?php foreach((Array) $data2 as $key => $var2){
							
						} 
						?>
							<tr>
								<th colspan=3 class="text-right">Total</th>
								<th class="text-center"><?php echo number_format($var2['sum_qty']) ?></th>
								<th class="text-center"><?php echo "Rp. ".number_format($var2['sum_satuan']) ?></th>
								<th class="text-center"><?php echo "Total + PPN Rp. ".number_format(($var2['sum_satuan']*0.1)+$var2['sum_satuan']) ?></th>
								<th></th>
							</tr>
							
						</tfoot> 
					  </table>
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

		<script src="<?php echo base_url('/assets/js/dataTables.buttons.min.js');?>"></script>    	
		<script src="<?php echo base_url('/assets/js/buttons.flash.min.js');?>"></script>		
		<script src="<?php echo base_url('/assets/js/buttons.html5.min.js');?>"></script>
		
		<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
		$('#datatable').dataTable( {bSort: false, 
			"pageLength": 50,
			dom: 'Bfrtip', 
			buttons: [
				'csv', 'excel', 'pdf'
			]} );
		 $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		}); 
	  } );
    </script>
    <!-- /Datatables -->
