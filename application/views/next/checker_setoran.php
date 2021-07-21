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
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Checker Setoran </h2>
                    <div class="clearfix"></div>
                  </div>
				  <div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
                  <div class="x_content">
		  			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Spj/checker_setoran/'); ?>" method="post">
                      <div class="form-group">
                      	<input type="hidden" id="id_car" name="id_car"/>
						
                      	
						 
						
						<div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="spj_number">SPJ Number<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  <input type="text" id="spj_number" name="spj_number" class="form-control col-md-7 col-xs-12" required="required"/>
						  <input type="hidden" id="spj_id" name="spj_id" class="form-control col-md-7 col-xs-12" required="required" />
						</div>
						
						
						                       
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
								  
								  <input type="text" id="pool_name" name="pool_name" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						</div> 

						<div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kip_number">No KIP<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  <input type="text" id="kip_number" name="kip_number" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						
						
						                       
					  </div>
					  
					  	<div class="form-group" id="div_no_pintu">
						
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  
						  <input type="hidden" id="driver_id" name="driver_id" class="form-control col-md-7 col-xs-12" required="required" />
						</div>
						
						
						                       
					  </div>
					  
					  
					  
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						<input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						                       
					  </div>
					  
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="door_number">Door Number<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  <input type="text" id="door_number" name="door_number" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						
						
						                       
					  </div>
					  
					  	<div class="form-group" id="div_no_pintu">
						
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  
						  <input type="hidden" id="car_id" name="car_id" class="form-control col-md-7 col-xs-12" required="required"/>
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
					  
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">BBM <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select name="bbm" class="form-control">
								<option value="">-- Select One --</option>
									<option value="Payment">Penuh</option>;
									<option value="Not">Tidak Penuh</option>;
							  </select>
							</div>
						</div>
					  
					   <div class="ln_solid"></div>
					  
					  
					 
					  <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success" id="save" name="save">Submit</button>
						</div>
					  </div>
					</form>
                </div>  
                </div>                                  
            </div>
          </div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">			
						  
						<!-- INTERIOR -->		
					

						<div class="x_panel tile">
							<div class="x_title">
							  <h2>STICKER & ATRIBUT</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="col-md-6 col-sm-6 col-xs-12"> 
									<table>
									<tr>
										<td>No Pintu </td>
										<td>:</td>
										<td><div class="radio">
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
										<td>Sticker Logo Express </td>
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
										<td>Sticker List Striping Kanan </td>
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
										<td>Sticker List Striping Kiri </td>
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
										<td>Sticker Logo Eagle </td>
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
										<td>Sticker Call Center </td>
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
										<td>Sticker Website </td>
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
										<td>Sticker No Pintu Exterior </td>
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
										<td>Karpet Kaki</td>
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
										<td>Sticker Informasi </td>
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
										<td>No Identitas Interior </td>
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
										<td>BBM Unit Etios </td>
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
										<td>Kaca </td>
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
									
									<tr>
										<td>Kondisi Ban </td>
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
										<td>Plat Nomor </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan18' value=48>
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
									
									</table>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12"> 
									<table class="table borderless" style="width:100%">
									</table>
								</div>
							</div>
						</div>
						  
						
						<!-- EXTERIOR -->
						
						<div class="x_panel tile">
							<div class="x_title">
							  <h2>Body, Tools & BBM (Rutin)</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="col-md-6 col-sm-6 col-xs-12"> 
									<table>
									<tr>
										<td>Full Body Samping Kanan </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan21' value=18>
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
										<td>Full Body Samping Kiri </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan22' value=19>
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
										<td>Full Body depan </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan23' value=20>
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
										<td>Full Body Belakang </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan24' value=21>
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
									<tr>
										<td>Roof / Atap </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan25' value=22>
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
										<td>Lampu Belakang</td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan26' value=23>
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
										<td>Ban Cadangan </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan29' value=26>
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
										<td>Lampu Mahkota </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan30' value=27>
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
										<td>Lampu Bahaya </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan31' value=28>
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
										<td>Tutup Minyak Rem </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan32' value=29>
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
									
									
									</table>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12"> 
									<table class="table borderless" style="width:100%">
									</table>
								</div>
							</div>
						</div>
							
						<!-- Lain - Lain -->
							
						<div class="x_panel tile">
							<div class="x_title">
							  <h2>Ruang Mesin & Instalasi </h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="col-md-6 col-sm-6 col-xs-12"> 
									<table>
									<tr>
										<td>Lampu LED Depan (Vacant) </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan43' value=34>
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
										<td>Lampu LED Belakang </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan44' value=35>
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
										<td>Argo </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan45' value=36>
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
									<tr>
										<td>RDS </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan46' value=37>
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
										<td>Segel RDS </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan47' value=38>
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
										<td>Segel Argo </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan48' value=39>
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
										<td>Segel Vacant </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan49' value=40>
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
										<td>Segel Sikring / Fuse </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan50' value=41>
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
										<td>Segel Panel Kanan </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan51' value=45>
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
										<td>Segel Panel Kiri </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan52' value=46>
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
										<td>Segel Speedo Kanan </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan53' value=47>
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
										<td>Segel Speedo Kiri </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan54' value=42>
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
										<td>Accu </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan55' value=43>
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
										<td>Tutup Radiator </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan55' value=43>
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
										<td>Tutup Tabung Wiper </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan55' value=43>
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
										<td>Stick Oli </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan55' value=43>
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
										<td>Box Mahkota </td>
										<td>:</td>
										<td><div class="radio">
												<input type='hidden' name='pertanyaan55' value=43>
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
									</table>
								</div>
							</div>
						</div>
					</div>	
	
	</div>
		
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
              source: "<?php echo site_url('Spj/get_autocomplete_checker_masuk_spj');?>",
			   select: function( event, ui ) { 
               event.preventDefault();
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
           $('[name="spj_number"]').val(ui.item.spj_no); 
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
        }
            });
			
        } );
    </script>
    <!-- /Datatables -->
