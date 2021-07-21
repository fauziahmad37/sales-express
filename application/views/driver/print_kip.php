<html><head>
<style>

.printKip{
	background: white;
	width: 110mm; 
	height: 85mm; 
	border-style: solid; 
	border-width: 0.6mm;
	margin-top: 20px;
	margin-left: 20px
}
.printKip-header {
    text-align: center;
}
.printKip-judul {
    line-height: 7mm;
    font-size: 12pt;
    margin-left: 2mm;
    margin-right: 2mm;
    text-transform: uppercase;
}
.printKip-foto {
    border-style: solid;
    border-width: 0.5mm;
    width: 40mm;
    height: 60mm;
    overflow: hidden;
    position: relative;
    margin-left: 2mm;
}
.text-right {
    text-align: right;
}

.printKip-barcode-nama {
    height: 8mm;
    line-height: 8mm;
    background-color: #FFA500 !important;
    -webkit-print-color-adjust: exact;
    border-bottom: 0.5mm solid black;
    text-align: center;
    font-size: 11pt;
}
.printKip-barcode-logo {
    height: 17mm;
    margin-top: 1mm;
    width: 55mm;
    text-align: center;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
}
.printKip-barcode {
    border: 0.5mm solid black;
    height: 30mm;
    margin-right: 2mm;
}
.printKip-barcode-logo {
    height: 20mm;
    margin-top: 1mm;
    text-align: center;
}
.printKip-sim {
    font-size: 9pt;
    text-align: center;
    margin-right: 2mm;
    margin-top: 0mm;
}
.printKip-kip {
    font-size: 9pt;
    text-align: center;
    margin-right: 2mm;
}
.printKip-tanggal {
    font-size: 9pt;
    text-align: center;
    margin-right: 2mm;
    margin-bottom: 7mm;
}
.printKip-ttd {
    border-bottom: 1px solid black;
    text-align: center;
    margin-right: 2mm;
    font-size: 9pt;
}
.printKip-title {
    text-align: center;
    margin-right: 2mm;
    font-size: 9pt;
}
.printKip-pool {
    font-size: 12pt;
    text-align: center;
    margin-right: 2mm;
    /* margin-top: -3mm; */
}
.printKip-tanggal {
    font-size: 10pt;
    text-align: center;
    margin-right: 2mm;
    margin-bottom: 7mm;
}
</style>
<title>Cetak Kip</title>
</head>
<body>

<div id="wrapper">
	<div id="page-wrapper">
		<div id="container-fluid">
			<table class="printKip" style="width: 110mm; height: 100mm; border-style: solid; border-width: 0.6mm;">
				<tbody>
					<tr>
						<th colspan="2">
							<div class="printKip-header">
								<img class="printKip-logo-express" src="<?php echo base_url('/assets/images/logo_express.jpg');?>" width="100">
								<label class="printKip-judul">Kartu Identitas Pengemudi</label>
							</div>
						</th>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<div class="printKip-line">
								<img class="printKip-line" src="<?php echo base_url('/assets/images/line.png');?>" width="400">
							</div>
						</td>
					</tr>
					<tr>
						<td rowspan="3">
							<div class="printKip-foto">
								<img src="<?php echo base_url($data['path_photo']);?>" class="img-responsive">

							</div>
						</td>
						<td style="max-width: 60mm;">
							<div class="printKip-barcode text-right">
								<div class="printKip-barcode-nama">
									<label><?php echo $data['name'];?></label>
								</div>
								<div class="text-center">
									<img src="<?php echo base_url('/'.$data['barcode']);?>" class="printKip-barcode-logo">

								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="printKip-sim">
								SIM Berlaku s/d : <?php echo date_format(date_create($data['sim_expire_date']), 'd F Y');?>
							</div>
							<div class="printKip-kip">
								KIP Berlaku s/d : <?php echo date_format(date_create($data['kip_expire_date']), 'd F Y');?>
							</div>
							<div class="printKip-pool">
								<?php
								
								echo $data['nama_pool'];
								?>
								
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="printKip-tanggal">
								Jakarta, <?php echo date_format(date_create($data['created_dt']), 'd F Y');?>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="printKip-ttd">
								<?php
								
								echo $data['kepala_pool'];
								?>
							</div>
							<div class="printKip-title">
								Kepala Pool
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>




</body></html>