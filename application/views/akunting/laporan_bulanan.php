<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>REPORT SALES SERVICE <?php if($id_workshop !== '') echo '( '.get_array($arrWorkshop, $id_workshop).' - '.')'; ?></h2>
					<div class="clearfix"></div>
                </div>
                <div class="x_content">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Akunting/laporan_bulanan/'); ?>" method="post">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select name="id_workshop" id="id_workshop" class="form-control" required="required">
									<?php
										function get_array($arrWorkshop, $id, $str = 'name'){
											foreach((Array) $arrWorkshop AS $key => $val){
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
										<input class="form-control inputdate" size="auto" type="text" name="date1" id="date1" value="<?php echo date('d M Y',strtotime($awal));?>" readonly>
										<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
									</div>
								</div>       
							</div>
					  
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Tanggal Akhir<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
							 <div class="input-group date form_date col-md-4" data-date-format="dd MM yyyy" data-link-field="dtp_input2">
								<input class="form-control inputdate" size="auto" type="text" name="date2" id="date2" value="<?php echo date('d M Y', strtotime($akhir));?>" readonly>
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
                	<table id="datatable" class="table table-bordered" style="width:100%">
						<thead>
							<tr>
								<th colspan=7></th>
								<th colspan=5 class="text-center">Jasa</th>
								<th colspan=5 class="text-center">Sparepart</th>
							</tr>
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>No WO</th>
								<th>WO Tipe</th>   
								<th>Nama Cust.</th>
								<th>No Pintu</th>
								<th>PT</th>																
								<th>Ammount</th>
								<th>Disc</th>                    		
								<th>DPP</th>		
								<th>PPN</th>
								<th>Subtotal</th>
								<th>Ammount</th>
								<th>Disc</th>                    		
								<th>DPP</th>		
								<th>PPN</th>
								<th>Subtotal</th>								
							
							</tr>
						</thead>
						<tbody>
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr>'.
								'<td>'.$ct.'</td>'.
								'<td>'.date('d-M-Y',strtotime($val['created_dt'])).'</td>'.
								'<td>'.$val['wo_number'].'</td>'.
								'<td>'.$val['tipe'].'</td>'.
								'<td>'.$val['nama'].'</td>'.
								'<td>'.$val['no_pintu'].'</td>'.
								'<td>'.$val['ptshortname'].'</td>';
								// JASA
								if($val['amount_lts']==''){echo '<td>0</td>';}else{echo '<td>'.number_format($val['amount_lts']).'</td>';}
								echo '<td>0</td>';
								if($val['amount_lts']==''){echo '<td>0</td>';}else{echo '<td>'.number_format($val['amount_lts']).'</td>';}
								echo '<td>'.(number_format($val['amount_lts']*0.1)).'</td>'.
								'<td>'.number_format(($val['amount_lts']*0.1)+$val['amount_lts']).'</td>'.
								//SPAREPART
								'<td>'.number_format($val['amount_sp']).'</td>'.
								'<td>0</td>'.
								'<td>'.number_format($val['amount_sp']).'</td>'.
								'<td>'.number_format($val['amount_sp']*0.1).'</td>'.
								'<td>'.number_format(($val['amount_sp']*0.1)+$val['amount_sp']).'</td>'.								
								'</tr>';
								$ct++;
							}
						?>
						</tbody>
						
						<tfoot>
						<?php foreach((Array) $data2 as $key => $var2){
							
						} 
						?>
							<tr>
								<th colspan=7 class="text-right">Total</th>
								<th><?php echo number_format($var2['total_lts']) ?></th>
								<th>0</th>
								<th><?php echo number_format($var2['total_lts']) ?></th>
								<th><?php echo number_format($var2['total_lts']*0.1) ?></th>
								<th><?php echo number_format($var2['total_lts']+($var2['total_lts']*0.1)) ?></th>
								<th><?php echo number_format($var2['total_sp']) ?></th>
								<th>0</th>
								<th><?php echo number_format($var2['total_sp']) ?></th>
								<th><?php echo number_format($var2['total_sp']*0.1) ?></th>
								<th><?php echo number_format($var2['total_sp']+($var2['total_sp']*0.1)) ?></th>
							</tr>
							<tr>
								<th colspan=7 class="text-right">Total LTS + Sparepart + PPN</th>
								<th colspan=10 class="text-left"><?php echo number_format(($var2['total_lts']+($var2['total_lts']*0.1))+($var2['total_sp']+($var2['total_sp']*0.1)))?></th>
								<!--<th><?php //echo number_format(($var2['total_lts']+($var2['total_lts']*0.1))+($var2['total_sp']+($var2['total_sp']*0.1))) ?></th> -->
							</tr> 
						</tfoot> 
						
					</table>
					
                </div>
				
<!-- =============================================== TABLE SUMMARY WO BERDASARKAN JENIS SERVICE ============================================== -->

				<div class="x_content table-responsive">
					<table id="datatable2" class="table table-bordered" style="width:50%">
						<thead>
							<tr>
								<th colspan=5 class="text-center">SUMMARY WO CATEGORY</th>
							</tr>
							<tr>
								<th>NO</th>
								<th>WO TYPE</th>
								<th class="text-center">QTY</th>
								<th class="text-center">TOTAL</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$a = 1;
							$qty=0;
							$lts=0;
							$sp=0;
							foreach ((Array) $data3 AS $key3 => $var3) { 
								$qty+= $var3['count'];
								$lts+= $var3['amount_lts'];
								$sp+= $var3['amount_sp'];
								echo '<tr>'.
								'<td>'.$a.'</td>'.
								'<td>'.$var3['tipe'].'</td>'.				
								'<td>'.$var3['count'].'</td>'.				
								'<td>'.number_format((($var3['amount_sp']*0.1)+$var3['amount_sp'])+(($var3['amount_lts']*0.1)+$var3['amount_lts'])).'</td>'.				
								'</tr>';
								$a++;
							}
						?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan=2 class="text-center">TOTAL</th>
								<th><?php  echo $qty;?></th>
								<th><?php echo number_format((($sp*0.1)+$sp)+(($lts*0.1)+$lts)); ?></th>
							</tr>
						</tfoot> 
				</div>
<!-- ===================================================================== END =========================================================== -->
<!-- =============================================== TABLE SUMMARY QTY BERDASARKAN TIPE MOBIL ============================================ -->
				
				<div class="x_content table-responsive">
					<table id="datatable2" class="table table-bordered" style="width:50%">
						<thead>
							<tr>
								<th colspan=5 class="text-center">SUMMARY QTY BY TYPE</th>
							</tr>
							<tr>
								<th>NO</th>
								<th>Brand</th>
								<th>Model</th>
								<th>QTY</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$a = 1;
							$qty=0;
							foreach ((Array) $data4 AS $key4 => $val4) {
								$qty+=$val4['count'];
								echo '<tr>'.
								'<td>'.$a.'</td>'.
								'<td>'.$val4['brand'].'</td>'.				
								'<td>'.$val4['model'].'</td>'.				
								'<td>'.number_format($val4['count']).'</td>'.				
								'</tr>';
								$a++;
							}
						?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan=3 class="text-center">TOTAL</th>
								<th><?php echo number_format($qty); ?></th>
							</tr>
						</tfoot> 
				</div>

<!-- ===================================================================== END =========================================================== -->
					
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
		
		<!-- you need to include the shieldui css and js assets in order for the charts to work -->
		<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
		
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
	    		"pageLength": 10,
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf'
		        ]
		    });
		});
    </script>
    <!-- /Datatables -->
