<html>
	<head>
		<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
		<base href="http://dice.expressgroup.co.id:8080/dice/">
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
										<label class="co-bag1-title">TANDA TERIMA</label>
									</th>
								</tr>
								<tr>
									<th class="text-center">
										<label class="co-bag1-title">TOP UP JAMINAN</label>
									</th>
								</tr>
							</tbody>
						</table>

						<!-- Bagian2 ~ Data -->
						<table class="co-bag2">
							<tbody>
								<tr>
									<th class="co-bag2-title">Jam / Tgl </th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo date_format(date_create($data['created']), 'G:i');?> / <?php echo date_format(date_create($data['created']), 'd F Y');?></td>
								</tr>
								<tr>
									<th class="co-bag2-title">No. Doc</th>
									<td class="co-bag2-separator">:</td>
									<td><?php echo $data['doc_number']; ?></td>
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
							
								<!-- tr>
									<th class="co-bag2-title">Bag. Kasir</th>
									<td class="co-bag2-separator">:</td>
									<td class="text-left"><?php echo $data['created']; ?> </td>
								</tr -->
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
									<th class="text-left">Amount Awal</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['amount_awal']); ?>
									</td>
								</tr>
								
								<tr>
									<th class="text-left">Topup</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo number_format($data['amount']); ?>
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
									<th class="text-left">Amount Akhir</th>
									<td class="text-left">:</td>
									<td class="text-right">
										<?php echo  number_format($data['amount_akhir']); ?>
									</td>
								</tr>
							</tbody>
						</table>

						</br>
						

						

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

   
					</div>
                </div>
            </div>
        </div>
    
	</body>
</html>