<style type="text/css">
	.uprightTbl * {
    border: none;
    border-collapse: collapse;
    padding: 0;
    margin: 0;
}
.tblBorder{
    border-collapse: collapse;
    border: 1px solid black;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
	border-left: 1px solid black;
	border-right: 1px solid black;
}
</style>

<table class="uprightTbl">
	<tbody>
		<tr>
			<td style="width: 384.766px;" ><img src="assets/images/logo_express.jpg" alt="2" style="width:200px;height:50px;"></td>
			<td style="width: 384.766px;">
				<p style="text-align: center;">SURAT PENERIMAAN</p>
				<p style="text-align: center;">BARANG ANTAR GUDANG</p>
			</td>
		</tr>
	</tbody>
</table>
<table width="100%">
	<tr>
		<td>GUDANG: <?php echo $data['pool_approve_name'];?></td>
		<td align="right">No RR: <?php echo $data['no_rr']; ?></td>
	</tr>
</table>
<hr />
<p>Kepada : GUDANG <?php echo $data['pool_request_name'];?>&nbsp;</p>
<table  width="524" border="1" >
<tbody>
	<tr>
		<td style="width: 32.2656px;">No.</td>
		<td style="width: 118.516px;">Kode Internal</td>
		<td style="width: 67.2656px;">Part Number</td>
		<td style="width: 126.016px;">Nama</td>
		<td style="width: 73.5156px;">Jumlah Permintaan</td>
		<td style="width: 73.5156px;">Jumlah Setujui</td>
		<td style="width: 73.5156px;">Jumlah Diterima</td>
	<!-- <td style="width: 73.5156px;">Satuan</td>
	</tr> -->
		<tr>
		<td style="width: 32.2656px;">1</td>
		<td style="width: 118.516px;"><?php echo $data['internal_code'];?></td>
		<td style="width: 67.2656px;"><?php echo $data['kode_part'];?></td>
		<td style="width: 126.016px;"><?php echo $data['item_name'];?></td>
		<td style="width: 73.5156px;"><?php echo $data['qty_request'];?></td>
		<td style="width: 73.5156px;"><?php echo $data['qty_transfered'];?></td>
		<td style="width: 73.5156px;"><?php echo $data['qty_received'];?></td>
		<!-- <td style="width: 73.5156px;"><?php //echo $data['id_uom'];?></td> -->
	</tr>
	</tbody>
</table>
<p>Keterangan :</p>
<p><?php echo $data['note_transfered'];?></p>

<table style="width: 666px;" border="1">
<tbody>
<tr style="height: 15px;">
<td style="height: 15px; width: 100px;">Dibuat Oleh</td>
<td style="height: 15px; width: 100px;">Diambil Oleh</td>
<td style="height: 15px; width: 100px;">Disetujui Oleh</td>
<td style="height: 15px; width: 100px;">Disetujui Oleh</td>
<td style="height: 15px; width: 120px;">Disetujui Oleh</td>
<td style="height: 15px; width: 120px;">Diketahui Oleh</td>
</tr>
<tr style="height: 70.9648px;">
<td style="height: 70.9648px; width: 100px;">&nbsp;</td>
<td style="height: 70.9648px; width: 100px;">&nbsp;</td>
<td style="height: 70.9648px; width: 100px;">&nbsp;</td>
<td style="height: 70.9648px; width: 100px;">&nbsp;</td>
<td style="height: 70.9648px; width: 120px;">&nbsp;</td>
<td style="height: 70.9648px; width: 120px;">&nbsp;</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 100px;"><?php //echo ucwords(strtolower($this->user['full_name']));?></td>
<td style="height: 15px; width: 100px;"><?php //echo ucwords(strtolower($user_data['name_admin_billing']));?></td>
<td style="height: 15px; width: 100px;"><?php //echo ucwords(strtolower($user_data['name_service_advisor']));?></td>
<td style="height: 15px; width: 100px;"><?php //echo ucwords(strtolower($user_data['name_workshop_spv']));?></td>
<td style="height: 15px; width: 120px;"><?php //echo ucwords(strtolower($user_data['name_workshop_head']));?></td>
<td style="height: 15px; width: 120px;"></td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 100px;">Adm Part</td>
<td style="height: 15px; width: 100px;">Inventory Part</td>
<td style="height: 15px; width: 100px;">Adm Service</td>
<td style="height: 15px; width: 100px;">Ka. Workshop</td>
<td style="height: 15px; width: 120px;">Ka. Pool</td>
<td style="height: 15px; width: 120px;">Ka. Pool</td>
</tr>
</tbody>
</table>