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

	.hero-image {
	  background-image: url(<?php echo base_url('/assets/images/header.png'); ?>);
	  background-color: #cccccc;
	  height: 100%;
	  width: 100%;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	  position: relative;
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
						<p>SURAT KESEPAKATAN</p>
						<p>HARGA</p>
						<p>No <?php echo ($data['doc_number']); ?></p>
					</div>
				</td>
				<td style="text-align:right">
					<div class="box-header-kanan">
						Surat Kesepakatan Harga ini
						dibuat rangkap 3 (tiga) masingmasing telah ditandatangani
						secara penuh sehingga
						mempunyai kekuatan yang sama
						sebagai alat bukti bila diperlukan
						di kemudian hari.
					</div>
				</td>
			</tr>
		</table>

		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Pada hari ini 
			<?php 
				function hari_ini(){
				$hari = date ("D");

					switch($hari){
						case 'Sun':
							$hari_ini = "Minggu";
						break;

						case 'Mon':			
							$hari_ini = "Senin";
						break;

						case 'Tue':
							$hari_ini = "Selasa";
						break;

						case 'Wed':
							$hari_ini = "Rabu";
						break;

						case 'Thu':
							$hari_ini = "Kamis";
						break;

						case 'Fri':
							$hari_ini = "Jumat";
						break;

						case 'Sat':
							$hari_ini = "Sabtu";
						break;
						
						default:
							$hari_ini = "Tidak di ketahui";		
						break;
					}

					return "<b>" . $hari_ini . "</b>";
				}

				echo hari_ini();
			?>
			, 
			tanggal <?php echo date('d'); ?> 
			bulan <?php echo date('F'); ?>,
			tahun <?php echo date('Y'); ?>,
			yang bertanda tangan di bawah ini : 
		</p>

		<p class="p-body-1" style="color:grey; margin: 0px; font-size: 12px;">(dapat dipilih salah satu dalam hal pembeli adalah perorangan /badan usaha)</p>
		<br>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;"><b>Perorangan / perwakilannya</b></p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Nama                 : <?php echo $data['nama']; ?></p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">No Identitas         : <?php echo $data['nik']; ?></p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Tempat Tanggal Lahir : <?php echo $data['tempat_lahir']." / ".$data['tanggal_lahir']; ?></p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Nomor telepon        : <?php echo $data['no_telepon']; ?></p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">
			dalam hal ini bertindak sebagai kuasa dari <?php if(isset($data['pemberi_kuasa'])){echo $data['pemberi_kuasa'];}else{ echo "…………..";}  ?> berdasarkan Surat Kuasa No <?php if(isset($data['no_kuasa'])){ echo $data['no_kuasa']; }else{ echo "…………."; } ?> 
			Tanggal <?php if(isset($data['tanggal_kuasa'])){ echo $data['tanggal_kuasa']; }else{ echo "…….…."; }; ?>                 :</p>
		
		<p class="p-body-1" style="font-size: 12px;">Selanjutnya disebut Calon Pembeli.</p>
		
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Dengan ini bermaksud untuk melakukan pembelian</p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Jumlah Kendaraan (detail terlampir) : ……</p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Harga yang Disepakati : Rp. <b><?php echo number_format($data['harga_disepakati']); ?></b></p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;"><i>(mohon agar mencantumkan keterangan/remark pada saat pembayaran)</i></p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;">Tanggal Pembayaran (detail terlampir) : ……</p>
		<p class="p-body-1" style="margin: 0px; font-size: 12px;"><i>(pembayaran bertahap khusus pembelian kolektif)</i></p>
	</div>

	<br>

	<table width="700" style="margin-left: 50px; border: 2px solid #0080ff; border-collapse: collapse;">
		<tr style="border: 2px solid #0080ff; background-color: #87f9ff;">
			<td align="center" style="border: 2px solid #0080ff;"><b>Rekening Penampungan</b></td>
			<td align="center" style="border: 2px solid #0080ff;"><b>Pernyataan Calon Pembeli</b></td>
		</tr>
		<tr style="border: 2px solid #0080ff;">
			<td style="border: 2px solid #0080ff; font-size: 12px;">
				Bank &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Bank BRI
				<br>
				Cabang &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kantor Cabang Khusus
				<br>
				Nomor Rekening :
				<br>
				Nama Rekening &nbsp;:
				<br>
				<br>
				<br>
				<p style="font-size: 11px;">Pembelian dianggap sah apabila seluruh dokumen
				telah kami terima dengan lengkap dan dana sudah
				efektif di rekening penampungan</p> 
			</td>
			<td style="" width="50%">
				<p style="margin: 0px;font-size: 12px;">Bahwa pada hari dan tanggal sebagaimana disebutkan di
				atas, telah dilakukan kesepakatan harga antara Penjual
				(PT Express Transindo Utama Tbk ) dengan Calon
				Pembeli terhadap Kendaraan sebagaimana tersebut
				diatas. Bahwa Calon Pembeli menyatakan telah
				menerima informasi dari penjual dan menyetujui hal-hal
				terkait kondisi kendaraan termasuk biaya-biaya, pajak,
				denda, administrasi lainnya yang timbul sehubungan
				dengan pembelian Kendaraan.</p>
				<p style="margin: 0px;font-size: 11px; color: #00A4D4;">Dengan ini calon pembeli memberikan kuasa kepada
				penjual untuk dapat menerimakan dokumen dokumen
				kendaraan yang berkaitan dari pihak manapun, untuk
				diserahkan kepada calon pembeli.</p>
			</td>
		</tr>
	</table>

	<br>	
	<br>

	<table width="700" style="margin-left: 50px; font-size: 12px;">
		<tr>
			<td align="center" width="50%"><b>PENJUAL</b></td>
			<td align="center"><b>CALON PEMBELI</b></td>
		</tr>
		<tr>
			<td><br><br><br></td>
		</tr>
		<tr>
			<td align="center">_________________________ </td>
			<td align="center">_________________________ </td>
		</tr>
		<tr>
			<td align="center"><b>PT Express Transindo Utama, Tbk.</b></td>
			<td align="center"><b><?php echo ucwords($data['nama']); ?></b></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><br><b>MENGETAHUI</b></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><br><br><br>_________________________</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><b><?php echo 'PT. Bank Rakyat Indonesia (Persero), Tbk.'; ?></b></td>
		</tr>
	</table>

</div>









