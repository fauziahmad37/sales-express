<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.buttons.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/pnotify.nonblock.css');?>" rel="stylesheet">
<style>
.tblBorder{
    border-collapse: collapse;
    border: 1px solid black;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
	border-left: 1px solid black;
	border-right: 1px solid black;
}
.uprightTbl * {
    border: none;
    border-collapse: collapse;
    padding: 0;
    margin: 0;
}
</style>

<table>
	<tr>
		<td>
			<table style="width:100%" class="uprightTbl">
				<tr class="uprightTbl">
					<th><img src="assets/images/logo_express.jpg" alt="2" style="width:150;height:50px;"></th>
						<?php
						ini_set('display_errors',true);
						?>
					<th></th> 
				</tr>
			</table>
		</td>
		<td>
			<table style="width: 100%">
				<tr class="uprightTbl">
					<td> <!--kiri-->
						<table>
							<tr class="uprightTbl"><td><font size="14"><b>PT. EXPRESS TRANSINDO UTAMA</b></font></td></tr>
							<tr class="uprightTbl"><td><font size="15px"><b>Workshop <?php echo $dataWorkshop['name'] ?></b></font></td></tr>
							<tr class="uprightTbl"><td><font size="12px"><?php echo $dataWorkshop['alamat']; //print_r($dataSoq); ?></font></td></tr>
							<tr class="uprightTbl"><td><font size="12px"><?php echo date('d M Y'); //print_r($dataSoq); ?></font></td></tr>
						</table>
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
	<hr>
</table>
<br />
<font><b>Data Soq</b></font>
<br />
<br />
<table class="tblBorder" style="width: 100%; border: 1px solid black">
	<thead>
		<tr>
			<th class="tblBorder"><font size="14px">No.</font></th>
			<th class="tblBorder"><font size="14px">Part Number</font></td>
			<th class="tblBorder"><font size="14px">Internal Code</font></td>
			<th class="tblBorder"><font size="14px">Nama</font></td>
			<th class="tblBorder"><font size="14px">Stok</font></td>
			<th class="tblBorder"><font size="14px">Min</font></td>
			<th class="tblBorder"><font size="14px">Max</font></td>
			<th class="tblBorder"><font size="14px">SOQ</font></td>		
			<th class="tblBorder"><font size="14px">Revisi</font></td>		
			<th class="tblBorder"><font size="14px">Keterangan</font></td>	
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		
		foreach ((Array) $dataSoq as $key => $val){
			echo '<tr>
				<td class="tblBorder"><font size="14px">'.$no.'</td>
				<td class="tblBorder"><font size="14px">'.$val['kode_part'].'</td>
				<td class="tblBorder"><font size="14px">'.$val['internal_code'].'</td>
				<td class="tblBorder"><font size="14px">'.$val['sparepart'].'</td>
				<td class="tblBorder"><font size="14px">'.$val['qty'].'</td>
				<td class="tblBorder"><font size="14px">'.round($val['min_stock']).'</td>
				<td class="tblBorder"><font size="14px">'.round($val['max_order']).'</td>
				<td class="tblBorder"><font size="14px">'.round($val['soq']).'</td>
				<td class="tblBorder"><font size="14px"></td>
				<td class="tblBorder"><font size="14px"></td>
			</tr>';//
			$no++;
		}
		?>
	</tbody>		
</table>
<br /><br />
<table>
	<tr>
		<td width=350px align="center">Dibuat</td>
		<td width=350px align="center">Diperiksa</td>
	</tr>
	<tr><td height=50></td><td height=50></td></tr>
	<tr>
		<td width=350px align="center">Dibuat</td>
		<td width=350px align="center">Diperiksa</td>
	</tr>
</table>

<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<!-- jQuery -->
<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.redirect.js');?>"></script>	

<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>