<html>
	<head>
		<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
		<base href="http://dice.expressgroup.co.id/">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>RENTAL</title>

		<link href="img/favicon-eagle.ico" type="image/x-icon" rel="icon">

		<link rel="Stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/report.css" media="screen,print">
	</head>
	
	<body>
		<div id="wrapper">
			<div id="page-wrapper">
				<div class="container-fluid">
                    
					<div class="co">

						<!-- Bagian1 ~ Header -->
						<table class="co-bag1">
							<tbody>
								<tr style="display: none;">
									<th class="text-center">
										<img class="co-bag1-logo" src="img/LOGO-BW-01.png">
									</th>
								</tr>
								<tr>
									<th class="text-center">
										<label class="co-bag1-title">TANDA TERIMA SETORAN</label>
									</th>
								</tr>
								<tr>
									<th class="text-center">
										<label class="co-bag1-title">RENTAL</label>
									</th>
								</tr>
							</tbody>
						</table>

						<!-- Bagian2 ~ Data -->
						<table class="co-bag2">
							<tbody>
							
								<tr>
									<th class="co-bag2-title">Jam / Tgl SPJ</th>
									<td class="co-bag2-separator">:</td>
									<td>
										<?php echo date_format(date_create($data['created_spj']), 'G:i');?> / <?php echo date_format(date_create($data['created_spj']), 'd F Y');?>
									</td>
								</tr>
								<tr>
									<th class="co-bag2-title">Checker Masuk </th>
									<td class="co-bag2-separator">:</td>
									<td>
										<?php echo date_format(date_create($data['jam_checker']), 'G:i');?> / <?php echo date_format(date_create($data['jam_checker']), 'd F Y');?>
									</td>
								</tr>
								<tr>
									<th class="co-bag2-title">Jam / Tgl TTS</th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo date_format(date_create($data['created']), 'G:i');?> / <?php echo date_format(date_create($data['created']), 'd F Y');?></td>
								</tr>
								<tr>
									<th class="co-bag2-title">No. TTS</th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo $data['doc_number']; ?></td>
								</tr>
								
								
								<tr>
									<th class="co-bag2-title">No. SPJ</th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo $data['doc_number_spj']; ?></td>
								</tr>
								
								<tr>
									<th class="co-bag2-title">Pengemudi</th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo $data['name']; ?></td>
								</tr>
								<tr>
									<th class="co-bag2-title">KIP</th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo $data['kip_number']; ?></td>
								</tr>
								<tr>
									<th class="co-bag2-title">No. Pintu / Polisi</th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo $data['no_pintu']; ?> / <?php echo $data['no_polisi']; ?></td>
								</tr>
								<tr>
									<th class="co-bag2-title">Bag. Kasir</th>
									<td class="co-bag2-separator">:</td>
									<td class="text-left"><?php echo $data['full_name']; ?> </td>
								</tr>
							</tbody>
						</table>
						
						<img class="co-line1" src="img/garis-02.png">
						
						
						</br>
						
							

						<img class="co-line1" style="display: none;" src="img/garis-02.png">
						
						
						<!-- Bagian 4 ~ Bahan Bakar -->
					

						<img class="co-line1" style="display: none;" src="img/garis-02.png">
						<table style="display: none;">
							<tbody>
								<tr></tr>
							</tbody>
						</table>

						
						
						<!-- Bagian 5 ~ Sub Total -->
						<table class="co-bag5">
							<!-- Hide Surcharge, Waiting cancel, min payment -->
							
							<!-- Dicetak jika id = 1 (surcharge) -->
							<tbody>
								<tr>
									<th class="text-left">Setoran Wajib</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['setoran_wajib']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Denda</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['denda']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Cicilan Seragam</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo "-"; ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Denda RDS</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo "-"; ?>
									</td>
								</tr>
								
								<tr>
									<td></br></td>
								</tr>
								
								<tr>
									<th class="text-left"></th>
									<td class="text-right" colspan="2">
										<img style="width: 30mm; height: 3px;" src="img/garis-02.png">
									</td>
								</tr>
								<tr>
									<td></br></td>
								</tr>
								<tr>
									<th class="text-left"></th>
									<th class="text-left">Total Tagihan</th>
									<td class="text-right">
										<?php echo number_format($data['total_tagihan']); ?>
									</td>
								</tr>
							</tbody>
						</table>

						</br>
						<img class="co-line1" src="img/garis-02.png">
						<table>
							<tbody>
								<tr></tr>
							</tbody>
						</table>

						<!-- Bagian ~ Komponen lain lain -->
						<!-- Hidden fungsi komponen lain lain faktur -->
    

						<!-- Bagian 7 ~ Hutang -->	
						<!-- Bagian 5 ~ Sub Total -->
						<table class="co-bag5">
							<!-- Hide Surcharge, Waiting cancel, min payment -->
							
							<!-- Dicetak jika id = 1 (surcharge) -->
							<tbody>
								<tr>
									<th class="text-left">Cash</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['payment_via_cash']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Pemotongan Jaminan</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['payment_via_tabungan']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Pembayaran via CT</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['payment_via_ct']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Pembayaran via Charge Room</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['payment_via_charge_room']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Pembayaran via EDC</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['payment_via_edc']); ?>
									</td>
								</tr>
								
								<tr>
									<td></br></td>
								</tr>
								
								<tr>
									<th class="text-left"></th>
									<td class="text-right" colspan="2">
										<img style="width: 30mm; height: 3px;" src="img/garis-02.png">
									</td>
								</tr>
								<tr>
									<td></br></td>
								</tr>
								<tr>
									<th class="text-left"></th>
									<th class="text-left">Total Pembayaran</th>
									<td class="text-right">
										<?php echo number_format($data['payment_total']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left"></th>
									<th class="text-left">Total Kembalian</th>
									<td class="text-right">
										<?php echo number_format($data['amount_kembalian']); ?>
									</td>
								</tr>
							</tbody>
						</table>

						<!-- Bagian 9 ~ TTD -->
						<table class="spj-bag3" style="display: none">
							<tbody>
								<tr>
									<th class="text-left" style="width: 24mm;padding-right: 2mm;">
										Bag. Operasi</th>
									<th class="text-center" style="width: 24mm;padding-right: 2mm;">
										Bag. Kasir</th>
									<th class="text-right">
										Pengemudi</th>
								</tr>
								<tr>
									<td class="text-left spj-bag3-ttd">Aep Muhdofar</td>
									<td class="text-center spj-bag3-ttd">Ismail</td>
									<td class="text-right spj-bag3-ttd">Usdi</td>
								</tr>
							</tbody>
						</table>
						
						</br>
						
						<img class="co-line1" src="img/garis-02.png">
						<table>
							<tbody>
								<tr></tr>
							</tbody>
						</table>
						
						<table class="co-bag5">
							<!-- Hide Surcharge, Waiting cancel, min payment -->
							
							<!-- Dicetak jika id = 1 (surcharge) -->
							<tbody>
								<tr>
									<th class="text-left">Sisa Jaminan</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['amount_akhir']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Kekurangan Jaminan</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php 
										if ($data['tipe'] == 'TIARA')
										{
											$sisa_jaminan = 800000 - $data['amount_akhir'];
											if ($sisa_jaminan < 0)
											{
												$sisa_jaminan = 0;
											}
											echo number_format($sisa_jaminan);
										} else
										{
											
											$sisa_jaminan = 500000 - $data['amount_akhir'];
											if ($sisa_jaminan < 0)
											{
												$sisa_jaminan = 0;
											}
											echo number_format($sisa_jaminan);
											
										}
											?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Total SPJ 18 Jam</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($total_spj_18['total']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Total SPJ 24 Jam</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($total_spj_24['total']); ?>
									</td>
								</tr>
								
								
								
								
								
								
							
								
								
								
							</tbody>
						</table>
						
						

   
					</div>
                </div>
            </div>
        </div>
    
	</body>
</html>