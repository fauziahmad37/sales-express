<style type="text/css">

	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	}

	.images {
	  margin: 0px;
	  background-image: url(<?php echo base_url('/assets/images/header.png'); ?>);
	  background-color: #cccccc;
	  height: 100%;
	  width: 100%;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	  position: relative;
	}

</style>

<div class="images">
	<p align="center" style="font-size: 16px"><br><br><br><b>PT Bank Rakyat Indonesia (Persero) Tbk</b></p>
	<br>
	<br>
	<br>
	<p style="margin-left: 30px;"><b>Jumlah Kendaraan</b></p>

	<table style="margin-left: 30px; border: 1px solid black; border-collapse: collapse;">
		<th style="border: 1px solid black; background-color: #fdefc7;">No</th>
		<th style="border: 1px solid black; background-color: #fdefc7;">No Polisi</th>
		<th style="border: 1px solid black; background-color: #fdefc7;">Tipe</th>
		<th style="border: 1px solid black; background-color: #fdefc7;">Nama PT</th>
		<th style="border: 1px solid black; background-color: #fdefc7;">Nominal</th>
		<?php 
			$i=1;
			foreach ($data_print_kendaraan as $key => $val): 
		?>
				<tr>
					<td style="border: 1px solid black;"><?php echo $i; ?></td>
					<td style="border: 1px solid black;"><?php echo $val['no_polisi']; ?></td>
					<td style="border: 1px solid black;"><?php echo $val['tipe']; ?></td>
					<td style="border: 1px solid black;"><?php echo $val['pt']; ?></td>
					<td style="border: 1px solid black;"><?php echo number_format($val['price_list']); ?></td>
				</tr>
			<?php $i++; endforeach ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td align="center"><b>Total</b></td>
				<td><b><?php echo number_format($total_price_list['price_list']); ?></b></td>
			</tr>
	</table>
</div>

