<style type="text/css">
	.box-header{
		margin: 0px;
	}

	.box-header-kiri {
	  background-color: none;
	  width: 300px;
	  border: 5px solid white;
	  padding: 10px;
	  margin: 50px;*/
	  margin-right: 0px;
	  text-align: center;
	  line-height: 50%;
	  font-size: 20px;
	}

	.box-header-kanan {
	  background-color: lightgrey;
	  width: 300px;
	  border: 2px solid darkblue;
	  padding: 10px;
	  margin: 0px;
	  text-align: left;
	  line-height: 100%;
	  font-size: 12px;
	}

	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	}

	
	/*body  {
		background-image: url(<?php //echo base_url('/assets/images/header.png'); ?>);
		background-repeat: no-repeat;
	}*/

	.p-body-1 {
	  color: black;
	  text-indent: 50px;
	  font-size: 15px;
	  text-overflow: ellipsis;
	}
</style>


<div class="hero-image">
	<div class="box-header">
		
		<table class="margin: 75px;">
			<tr>
				<td style="text-align: left">
					<div class="box-header-kiri">
						<p>PERSETUJUAN HARGA</p>
						<p>KHUSUS</p>
						<p>No <?php echo ($data['doc_number']); ?></p>
					</div>
				</td>
				<td style="text-align:right">
					<div class="box-header-kanan">
						Persetujuan Harga Khusus ini
						dibuat rangkap 2 (dua) masingmasing telah ditandatangani
						secara penuh sehingga
						mempunyai kekuatan yang sama
						sebagai alat bukti bila diperlukan
						di kemudian hari. 
					</div>
				</td>
			</tr>
		</table>

		<p class="p-body-1" style="margin: 0px; font-size: 12px; width: 700px;">
			Sehubungan dengan permintaan penawaran harga dari Calon Pembeli, maka dengan surat ini PT Express
		</p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">
			Transindo Utama Tbk selanjutnya disebut sebagai Penjual bermaksud untuk melakukan pengajuan
		</p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">
			persetujuan harga dasar khusus dengan detail sebagai berikut:
		</p>	
			
	</div>

	<br>


	<table width="700" border="1" style="margin-left: 50px; font-size: 12px; border-collapse: collapse;">
		<th>No</th>
		<th>No Polisi</th>
		<th>No Rangka</th>
		<th>No Mesin</th>
		<th>Location</th>
		<th>Harga Dasar</th>
		<th>Pengajuan Harga <br>Dasar Khusus</th>
		<th>Persentase</th>
		<?php  
		$i = 1;
		foreach ($data_detail as $key => $val) {
			echo '
				<tr>
					<td>'.$i.'</td>
					<td>'.$val['no_polisi'].'</td>
					<td>'.$val['no_rangka'].'</td>
					<td>'.$val['no_mesin'].'</td>
					<td>'.$val['location'].'</td>
					<td>'.number_format($val['harga_dasar']).'</td>
					<td>'.number_format($val['pengajuan_harga_dasar_khusus']).'</td>
					<td>'.$val['persentase'].'%</td>
				</tr>
			';
			$i++;
		}
		?>
	</table>	
	<br>

	<p class="p-body-1" style="margin: 0px; font-size: 12px; width: 700px;"><b>Adapun dokumen pendukung pengajuan persetujuan harga khusus adalah sebagai berikut: </b></p>
	<p class="p-body-1" style="margin: 0px; font-size: 12px; width: 700px;">1. Kondisi unit (Foto, Laporan pengecekan unit oleh pihak yang kompeten dan disetujui oleh Management)
	</p>
	<p class="p-body-1" style="margin: 0px; font-size: 12px; width: 700px;">
		2. Surat Penawaran Harga dari Calon Pembeli
	</p>
	<p class="p-body-1" style="margin: 0px; font-size: 12px; width: 700px;">
		3. ….
	</p>


	<br>
	<br>
	<br>
	<br>
	<br>
	<table width="700" style="margin-left: 50px; font-size: 12px; ">
		<tr>
			<td align="center" width="50%"><b>PENJUAL</b></td>
			<td align="center"><b>MENYETUJUI</b></td>
		</tr>
		<tr>
			<td><br><br><br></td>
		</tr>
		<tr>
			<td align="center">_________________________ </td>
			<td align="center">_________________________ </td>
		</tr>
		<tr>
			<td align="center"><b>PT Express Transindo Utama Tbk</b></td>
			<td align="center"><b>PT Bank Rakyat Indonesia (Persero) Tbk</b></td>
		</tr>
		
	</table>

</div>









