<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('/assets/css/jquery-ui.css');?>" rel="stylesheet">

<style>
	.ui-autocomplete-custom {
		background: #87ceeb;
		z-index: 2;
	}
</style>
<div class="right_col" role="main">
	<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Spj/checker_keluar_pool/'); ?>" method="post">
	
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Checker Keluar & Masuk </h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					
					
						<div class="form-group">
							<input type="hidden" id="id_car" name="id_car"/>
							<input type="hidden" id="driver_id" name="driver_id"/>
							<input type="hidden" id="car_id" name="car_id"/>
							
							
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="spj_number">SPJ Number<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="spj_number" name="spj_number" class="form-control col-md-7 col-xs-12" required="required"/>
									<input type="hidden" id="spj_id" name="spj_id" class="form-control col-md-7 col-xs-12" required="required" />
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="checker_type">Status Spj
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="status" name="status" 
								class="form-control col-md-7 col-xs-12" readonly/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="checker_type">Keterangan
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="keterangan" name="keterangan" 
								class="form-control col-md-7 col-xs-12" readonly/>
							</div>
						</div>
				  
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="pool_name" name="pool_name" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>
						</div> 
						

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kip_number">No KIP<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="kip_number" name="kip_number" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>
						</div>
					  
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="door_number">Door Number<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="door_number" name="door_number" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>
						</div>
						
						<div class="form-group" id="div_no_pintu">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipe_merek">Tipe & Merek<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="tipe_merek" name="tipe_merek" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>                 
						</div>
					  
						<div class="form-group" id="div_no_pintu">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jaminan">Jaminan Saat ini <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="jaminan" name="jaminan" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>
						</div>
						
						<div class="ln_solid"></div>
 
						<div class="form-group" id="div_no_pintu">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jam_cetak_spj">Jam Cetak SPJ<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="jam_cetak_spj" name="jam_cetak_spj" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>              
						</div>
						
						<div class="form-group" id="div_no_pintu">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="bbm_sebelumnya">BBM SEBELUMNYA<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="bbm_sebelumnya" name="bbm_sebelumnya" class="form-control col-md-7 col-xs-12"  readonly/>
							</div>              
						</div>
					  
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">BBM <span class="required">*</span>
							</label>
							<div required class="col-md-6 col-sm-6 col-xs-12">
								<select name="bbm" class="form-control">
									<option value="block">-- Select One --</option>
									<option value="Penuh">Penuh</option>;
									<option value="0"	>0</option>;
									<option value="0.5"	>0.5</option>;
									<option value="1"	>1</option>;
									<option value="1.5"	>1.5</option>;
									<option value="2"	>2</option>;
									<option value="2.5"	>2.5</option>;
									<option value="3"	>3</option>;
									<option value="3.5"	>3.5</option>;
									<option value="4"	>4</option>;
									<option value="4.5"	>4.5</option>;
									<option value="5"	>5</option>;
									<option value="5.5"	>5.5</option>;
									<option value="6"	>6</option>;
									<option value="6.5"	>6.5</option>;
									<option value="7"	>7</option>;
									<option value="7.5"	>7.5</option>;
									<option value="8"	>8</option>;
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">KM OUT BEFORE<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input readonly type="number" id="km_out" name="km_out" class="form-control col-md-7 col-xs-12"  />
							</div>              
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">KM<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required value=0 type="number" id="km_in" name="km_in" class="form-control col-md-7 col-xs-12" placeholder="MASUKAN KM" />
							</div>              
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">RIT OUT BEFORE<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input readonly type="number" id="rit_out" name="rit_out" class="form-control col-md-7 col-xs-12"  />
							</div>              
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">RIT<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required value=0 type="number" id="rit_in" name="rit_in" class="form-control col-md-7 col-xs-12" placeholder="MASUKAN RIT" />
							</div>              
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">DROP OUT BEFORE<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input readonly type="number" id="drop_out" name="drop_out" class="form-control col-md-7 col-xs-12"  />
							</div>              
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">DROP<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input required value=0 type="number" id="drop_in" name="drop_in" class="form-control col-md-7 col-xs-12" placeholder="MASUKAN DROP" />
							</div>              
						</div>
					  
					   <div class="ln_solid"></div>
						
					
                </div>  
            </div>                                  
		</div>
	</div>

<!-- =============================================================================================================================== -->
<!-- ======================================================= STICKER & ATRIBUT ===================================================== -->
<!-- =============================================================================================================================== -->
		
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			
			
			<div class="x_panel tile">
				<div class="x_title">
					<h2>BAGIAN BELAKANG </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-6 col-sm-6 col-xs-12"> 
						<table>
							<tr>
								<td>BAGASI </td>
								<td>:</td>
								<td>
									<div class="radio">
										<input type='hidden' name='pertanyaan1' value=1>
										<label><input type="radio" name="jawaban1" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban1" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban1" value='3'>Hilang</label>
									</div>											
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan1" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>BAN CADANGAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan2' value=2>
										<label><input type="radio" name="jawaban2" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban2" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban2" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan2" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>DONGKRAK </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan3' value=3>
										<label><input type="radio" name="jawaban3" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban3" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban3" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan3" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>BUMPER BELAKANG </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan4' value=4>
										<label><input type="radio" name="jawaban4" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban4" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban4" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan4" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>FENDER BELAKANG KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan5' value=5>
										<label><input type="radio" name="jawaban5" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban5" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban5" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan5" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>FENDER BELAKANG KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan6' value=6>
										<label><input type="radio" name="jawaban6" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban6" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban6" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan6" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>STIKER NO PINTU BAGASI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan7' value=7>
										<label><input type="radio" name="jawaban7" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban7" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban7" value='3'>Hilang</label>
									</div>
									<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan7" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
								</td>
							</tr>
							
							<tr>
								<td>STIKER CALL CENTER </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan8' value=8>
										<label><input type="radio" name="jawaban8" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban8" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban8" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan8" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>STIKER WEBSITE </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan9' value=9>
										<label><input type="radio" name="jawaban9" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban9" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban9" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan9" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>PLAT NOMOR BELAKANG </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan10' value=10>
										<label><input type="radio" name="jawaban10" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban10" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban10" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan10" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>KACA BELAKANG </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan11' value=11>
										<label><input type="radio" name="jawaban11" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban11" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban11" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan11" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>LAMPU LED BELAKANG </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan12' value=12>
										<label><input type="radio" name="jawaban12" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban12" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban12" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan12" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>LAMPU BELAKANG KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan13' value=13>
										<label><input type="radio" name="jawaban13" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban13" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban13" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan13" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>LAMPU BELAKANG KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan14' value=14>
										<label><input type="radio" name="jawaban14" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban14" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban14" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan14" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
								
						</table>
					</div>
				</div>
			</div>		  
					
<!-- =============================================================================================================================== -->
<!-- =================================================== BODY, TOOLS & BBM (RUTIN) ================================================= -->
<!-- =============================================================================================================================== -->					
			
			<div class="x_panel tile">
				<div class="x_title">
				  <h2>BAGIAN SAMPING KIRI </h2>
				  <div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-6 col-sm-6 col-xs-12"> 
						<table>
							
							<tr>
								<td>KONDISI BAN BELAKANG KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan15' value=15>
										<label><input type="radio" name="jawaban15" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban15" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban15" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan15" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
						
							<tr>
								<td>BBM </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan16' value=16>
										<label><input type="radio" name="jawaban16" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban16" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban16" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan16" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER LIST STRIPING KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan17' value=17>
										<label><input type="radio" name="jawaban17" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban17" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban17" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan17" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER EKSTERIOR NO PINTU KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan18' value=18>
										<label><input type="radio" name="jawaban18" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban18" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban18" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan18" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER EKSTERIOR EAGLE PINTU KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan19' value=19>
										<label><input type="radio" name="jawaban19" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban19" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban19" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan19" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>PINTU KIRI DEPAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan20' value=20>
										<label><input type="radio" name="jawaban20" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban20" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban20" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan20" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>PINTU KIRI BELAKANG </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan21' value=21>
										<label><input type="radio" name="jawaban21" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban21" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban21" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan21" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
								
							<tr>
								<td>FENDER DEPAN KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan22' value=22>
										<label><input type="radio" name="jawaban22" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban22" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban22" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan22" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>SPION KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan23' value=23>
										<label><input type="radio" name="jawaban23" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban23" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban23" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan23" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>KONDISI BAN DEPAN KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan24' value=24>
										<label><input type="radio" name="jawaban24" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban24" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban24" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan24" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							
							
										
						</table>
					</div>
								
				</div>
			</div>
							
<!-- =============================================================================================================================== -->
<!-- =================================================== RUANG, MESIN & INSTALASI ================================================= -->
<!-- =============================================================================================================================== -->
				
			<div class="x_panel tile">
				<div class="x_title">
					<h2>BAGIAN DEPAN </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-6 col-sm-6 col-xs-12"> 
						<table>
							
							<tr>
								<td>KAP MESIN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan25' value=25>
										<label><input type="radio" name="jawaban25" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban25" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban25" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan25" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>SEGEL SIKRING / FUSE </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan26' value=26>
										<label><input type="radio" name="jawaban26" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban26" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban26" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan26" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>TUTUP MINYAK REM </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan27' value=27>
										<label><input type="radio" name="jawaban27" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban27" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban27" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan27" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>ACCU </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan28' value=28>
										<label><input type="radio" name="jawaban28" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban28" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban28" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan28" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>TUTUP RADIATOR </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan29' value=29>
										<label><input type="radio" name="jawaban29" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban29" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban29" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan29" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>TUTUP TABUNG WIPER </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan30' value=30>
										<label><input type="radio" name="jawaban30" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban30" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban30" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan30" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STICK OLI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan31' value=31>
										<label><input type="radio" name="jawaban31" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban31" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban31" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan31" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>LAMPU DEPAN KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan32' value=32>
										<label><input type="radio" name="jawaban32" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban32" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban32" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan32" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>LAMPU DEPAN KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan33' value=33>
										<label><input type="radio" name="jawaban33" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban33" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban33" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan33" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>KACA DEPAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan34' value=34>
										<label><input type="radio" name="jawaban34" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban34" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban34" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan34" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER LOGO EXPRESS </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan35' value=35>
										<label><input type="radio" name="jawaban35" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban35" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban35" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan35" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>FENDER DEPAN KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan36' value=36>
										<label><input type="radio" name="jawaban36" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban36" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban36" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan36" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>FENDER DEPAN KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan37' value=37>
										<label><input type="radio" name="jawaban37" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban37" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban37" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan37" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
						</table>
						
					</div>
				</div>
				
			</div>
			
<!-- =============================================================================================================================== -->
<!-- =================================================== BAGIAN SAMPING KANAN ====================================================== -->
<!-- =============================================================================================================================== -->
			
			
			<div class="x_panel tile">
				<div class="x_title">
					<h2>BAGIAN DEPAN </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-6 col-sm-6 col-xs-12"> 
						<table>
						
							<tr>
								<td>KONDISI BAN DEPAN KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan38' value=38>
										<label><input type="radio" name="jawaban38" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban38" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban38" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan38" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>SPION KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan39' value=39>
										<label><input type="radio" name="jawaban39" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban39" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban39" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan39" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER LIST STRIPING KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan40' value=40>
										<label><input type="radio" name="jawaban40" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban40" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban40" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan40" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER EKSTERIOR NO PINTU KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan41' value=41>
										<label><input type="radio" name="jawaban41" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban41" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban41" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan41" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER EKSTERIOR EAGLE PINTU KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan42' value=42>
										<label><input type="radio" name="jawaban42" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban42" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban42" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan42" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>PINTU KANAN DEPAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan43' value=43>
										<label><input type="radio" name="jawaban43" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban43" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban43" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan43" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>KONDISI BAN BELAKANG KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan44' value=44>
										<label><input type="radio" name="jawaban44" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban44" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban44" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan44" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>PINTU KANAN BELAKANG </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan45' value=27>
										<label><input type="radio" name="jawaban45" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban45" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban45" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan45" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
						</table>
						
					</div>
				</div>
				
			</div>
			
<!-- =============================================================================================================================== -->
<!-- =================================================== BAGIAN SAMPING KANAN ====================================================== -->
<!-- =============================================================================================================================== -->			
			
			<div class="x_panel tile">
				<div class="x_title">
					<h2>BAGIAN DEPAN </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-6 col-sm-6 col-xs-12"> 
						<table>
							
							<tr>
								<td>KARPET KAKI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan46' value=28>
										<label><input type="radio" name="jawaban46" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban46" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban46" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan46" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER INFORMASI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan47' value=47>
										<label><input type="radio" name="jawaban47" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban47" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban47" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan47" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER INTERIOR NO PINTU DOORTRIM KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan48' value=48>
										<label><input type="radio" name="jawaban48" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban48" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban48" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan48" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER INTERIOR NO PINTU DOORTRIM KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan49' value=49>
										<label><input type="radio" name="jawaban49" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban49" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban49" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan49" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>STIKER INTERIOR NO PINTU DASHBOARD </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan50' value=50>
										<label><input type="radio" name="jawaban50" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban50" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban50" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan50" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>TEMPAT KIP </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan51' value=51>
										<label><input type="radio" name="jawaban51" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban51" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban51" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan51" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>LAMPU LED VACANT </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan52' value=52>
										<label><input type="radio" name="jawaban52" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban52" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban52" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan52" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>RDS </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan53' value=53>
										<label><input type="radio" name="jawaban53" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban53" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban53" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan53" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>ARGO </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan54' value=54>
										<label><input type="radio" name="jawaban54" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban54" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban54" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan54" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td>SEGEL RDS </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan55' value=55>
										<label><input type="radio" name="jawaban55" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban55" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban55" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan55" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>SEGEL ARGO </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan56' value=56>
										<label><input type="radio" name="jawaban56" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban56" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban56" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan56" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>SEGEL VACANT </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan57' value=57>
										<label><input type="radio" name="jawaban57" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban57" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban57" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan57" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>SEGEL PANEL KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan58' value=58>
										<label><input type="radio" name="jawaban58" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban58" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban58" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan58" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>SEGEL PANEL KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan59' value=59>
										<label><input type="radio" name="jawaban59" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban59" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban59" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan59" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>SEGEL SPEEDO KANAN </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan60' value=60>
										<label><input type="radio" name="jawaban60" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban60" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban60" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan60" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
						
							<tr>
								<td>SEGEL SPEEDO KIRI </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan61' value=61>
										<label><input type="radio" name="jawaban61" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban61" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban61" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan61" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>BOX MAHKOTA </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan62' value=62>
										<label><input type="radio" name="jawaban62" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban62" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban62" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan62" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>LAMPU MAHKOTA </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan63' value=63>
										<label><input type="radio" name="jawaban63" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban63" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban63" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan63" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>LAMPU BAHAYA </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan64' value=64>
										<label><input type="radio" name="jawaban64" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban64" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban64" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan64" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
							<tr>
								<td>ROOF / ATAP </td>
								<td>:</td>
								<td><div class="radio">
										<input type='hidden' name='pertanyaan65' value=65>
										<label><input type="radio" name="jawaban65" value='1' checked>Baik</label>
										<label><input type="radio" name="jawaban65" value='2'>Tidak Baik/Rusak</label>
										<label><input type="radio" name="jawaban65" value='3'>Hilang</label>
									</div>
								</td>
								<td>
									<div class="col-md-6 col-sm-6 col-xs-9">
										<input type="text" name="keterangan65" class="form-control col-md-7 col-xs-12" placeholder="Keterangan"/>
									</div>
								</td>
							</tr>
														
						
						</table>
						
					</div>
				</div>
				
				<div class="ln_solid"></div>
					 
				<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<button type="submit" class="btn btn-success" id="save" name="save">Submit</button>
					</div>
				</div>
				
			</div>
			
			
			
		</div>	
	</div>
	</form>
</div>
       
<!-- /page content -->
<script src="<?php echo base_url('/assets/js/jquery-1.12.4.min.js');?>"></script>
<script src="<?php echo base_url('/assets/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
<!-- /Datatables -->
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
    
		var d = new Date();
		var v_tipe_rental = '';
		
		if ( d.getHours() < 12) {
			v_tipe_rental = "24 Jam";
		} else {
			v_tipe_rental = "18 Jam";
		}
		
	$( "#spj_number" ).autocomplete({
		source: "<?php echo site_url('Spj/get_autocomplete_spj');?>",
		select: function( event, ui ) { 
			event.preventDefault();
			$('[name="bbm_sebelumnya"]').val(ui.item.bbm_sebelumnya);
			var status = ui.item.status;
			if(status=='Drive'){
				var status = "<?php echo 'Unit Siap Masuk Pool'; ?>";
			} else {
				var status = "<?php echo 'Unit Siap Keluar Pool'; ?>";
			}
			$('[name="km_out"]').val(ui.item.km_out);
			$('[name="rit_out"]').val(ui.item.rit_out);
			$('[name="drop_out"]').val(ui.item.drop_out);
			$('[name="keterangan"]').val(status);
			$('[name="status"]').val(ui.item.status);
			$('[name="kip_number"]').val(ui.item.kip_number);
			$('[name="pool_name"]').val(ui.item.pool_name);
			$('[name="name"]').val(ui.item.driver_name);
			$('[name="door_number"]').val(ui.item.no_pintu);
			$('[name="tipe_merek"]').val(ui.item.desc_mobil);
			$('[name="jaminan"]').val(ui.item.amount_akhir);
			$('[name="spj_id"]').val(ui.item.id);
			$('[name="setoran_wajib"]').val(ui.item.tagihan_wajib);
			var denda = parseInt(ui.item.flag_denda) * parseInt(ui.item.jumlah_jam_denda) * parseInt(ui.item.jumlah_hari_denda) * parseInt(ui.item.denda_perjam);
			$('[name="denda"]').val(denda);
			var tagihan = parseInt(ui.item.tagihan_wajib)  + parseInt(denda);
			$('[name="jam_cetak_spj"]').val(ui.item.jam_cetak_spj);
			$('[name="jam_mulai_denda"]').val(ui.item.jam_mulai_denda);
			$('[name="driver_id"]').val(ui.item.driverid);
			$('[name="total_tagihan"]').val(tagihan);
		}, focus: function(event, ui) {
            event.preventDefault();
			$('[name="bbm_sebelumnya"]').val(ui.item.bbm_sebelumnya);
			var status = ui.item.status;
			if(status=='Drive'){
				var status = "<?php echo 'Unit Siap Masuk Pool'; ?>";
			} else {
				var status = "<?php echo 'Unit Siap Keluar Pool'; ?>";
			}
			$('[name="km_out"]').val(ui.item.km_out);
			$('[name="rit_out"]').val(ui.item.rit_out);
			$('[name="drop_out"]').val(ui.item.drop_out);
			$('[name="keterangan"]').val(ui.item.keterangan);
			$('[name="status"]').val(ui.item.status);
			$('[name="spj_number"]').val(ui.item.spj_no); 
			$('[name="kip_number"]').val(ui.item.kip_number);
			$('[name="pool_name"]').val(ui.item.pool_name);
			$('[name="door_number"]').val(ui.item.no_pintu);
			$('[name="tipe_merek"]').val(ui.item.desc_mobil);
			$('[name="jaminan"]').val(ui.item.amount_akhir);
			$('[name="spj_id"]').val(ui.item.id);
			$('[name="setoran_wajib"]').val(ui.item.tagihan_wajib);
			var denda = parseInt(ui.item.flag_denda) * parseInt(ui.item.jumlah_jam_denda) * parseInt(ui.item.jumlah_hari_denda) * parseInt(ui.item.denda_perjam);
			$('[name="denda"]').val(denda);
			var tagihan = parseInt(ui.item.tagihan_wajib)  + parseInt(denda);
			$('[name="jam_cetak_spj"]').val(ui.item.jam_cetak_spj);
			$('[name="jam_mulai_denda"]').val(ui.item.jam_mulai_denda);
			$('[name="driver_id"]').val(ui.item.driverid);
			$('[name="total_tagihan"]').val(tagihan);
        }
	});
});
</script>