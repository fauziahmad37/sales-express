<html>
<style>
head {
    display: none;
}

.spj-bag1-logo {
    height: 10mm;
    line-height: 10mm;
    text-align: center;
    margin-bottom: 5px;
}

.spj-bag1 {
    width: 70mm;
    font-size: 9pt;
    margin-bottom: 10px;
}

.text-center {
    text-align: center;
}

.spj-bag1-title {
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 11pt;
}

.spj-bag2 {
    width: 70mm;
    font-size: 9pt;
}

table {
    background-color: transparent;
}

table {
    border-spacing: 0;
    border-collapse: collapse;
}

th {
    text-align: left;
}

.spj-bag2-title {
    width: 26mm;
}

.spj-bag2-separator {
    width: 2mm;
}

.spj-bag1-line {
    width: 70mm;
}

.spj-bag3 {
    width: 70mm;
    font-size: 9pt;
}

.text-left {
    text-align: left;
}

.text-right {
    text-align: right;
}

.spj-bag3-ttd {
    padding-top: 35px;
}
</style>

<div class="spj">
	<table class="spj-bag1">
		<tbody>
			<tr>
				<td class="text-center">
					<img class="spj-bag1-logo" src="<?php echo base_url('/assets/images/LOGO-BW-02.png'); ?>">
				</td>
			</tr>
			
			<tr>
				<th class="text-center">
					<label class="spj-bag1-title">SURAT PERINTAH JALAN</label>
				</th>
				
			</tr>
			
			<tr>
			<td colspan="4">
				<div class="printKip-foto">
					<img src="<?php echo base_url('/uploads/barcode_spj/'.$data['id'].'.png');?>" hyperlink="#" class="img-responsive">
				</div>
			</td>
			
		</tr>
			<tr>
				<td></br></td>
			</tr>
			<tr>
				<th class="text-center">
						<label class="spj-bag1-title"><?php echo $data['doc_number']; ?></label>
				</th>
			</tr>
		</tbody>
	</table>
</div>
<table class="spj-bag2">
	<tbody>
		<tr>
			<th class="spj-bag2-title">Jam / Tgl SPJ</th>
			<td class="spj-bag2-separator">:</td>
			<td>
				<?php echo $data['created']; ?>
			</td>
		</tr>
		<tr>
			<th class="spj-bag2-title">No. KIP</th>
			<td class="spj-bag2-separator">:</td>
			<td><?php echo $data['kip_number']; ?></td>
		</tr>
		<tr>
			<th class="spj-bag2-title">Pengemudi</th>
			<td class="spj-bag2-separator">:</td>
			<td><?php echo $data['name']; ?></td>
		</tr>
		<tr>
			<th class="spj-bag2-title">No. Pintu / Polisi</th>
			<td class="spj-bag2-separator">:</td>
			<td><?php echo $data['no_pintu'].' / '.$data['no_polisi'];?></td>
		</tr>
		
		<!-- tr>
			<th class="spj-bag2-title">KM Argo Keluar</th>
			<td class="spj-bag2-separator">:</td>
			<td>__________________</td>
		</tr>
		<tr>
			<th class="spj-bag2-title">KM Argo Masuk</th>
			<td class="spj-bag2-separator">:</td>
			<td>__________________</td>
		</tr>
			<tr><th class="spj-bag2-title">KM Speedo Keluar</th>
			<td class="spj-bag2-separator">:</td>
			<td>__________________</td>
		</tr>
		<tr>
			<th class="spj-bag2-title">KM Speedo Masuk</th>
			<td class="spj-bag2-separator">:</td>
			<td>__________________</td>
		</tr -->
	</tbody>					
</table>
</br>
<table>
	<tbody><tr>
		<td class="text-center">
			<img class="spj-bag1-line" src="<?php echo base_url('/assets/images/garis-02.png');?>"
		</td>
	</tr>
    </tbody>
</table>
</br>
<table class="spj-bag3">
    <tbody>
		<tr>
            <th class="text-left">BAG.OPERASI</th>
            <th class="text-right">PENGEMUDI</th>
        </tr>
        <tr>
            <td class="text-left spj-bag3-ttd"><?php echo $data['full_name'];?></td>
            <td class="text-right spj-bag3-ttd"><?php echo $data['name']; ?></td>
        </tr>
    </tbody>
</table>
	
</html>

