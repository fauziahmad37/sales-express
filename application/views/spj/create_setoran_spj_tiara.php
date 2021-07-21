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
					<h2>Create Setoran SPJ Tiara </h2>
					<div class="clearfix"></div>
				</div>
				<div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Spj/save_setoran_spj_tiara'); ?>" onsubmit="return cekTagihan()" method="post">
						<div class="form-group">
							<input type="hidden" id="id_car" name="id_car"/>
							<input type="hidden" id="car_id" name="car_id" />
							<input type="hidden" id="spj_id" name="spj_id" />
						
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="spj_number">SPJ Number<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="spj_number" name="spj_number" class="form-control col-md-7 col-xs-12" required="required"/>
								</div>
							</div>
				  
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="pool_name" name="pool_name" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div> 

							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kip_number">No KIP<span class="required">*</span></label>
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
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="door_number">Door Number<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="door_number" name="door_number" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipe_merek">Tipe & Merek<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="tipe_merek" name="tipe_merek" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jaminan">Jaminan Saat ini <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="jaminan" name="jaminan" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ketentuan_jaminan">Ketentuan Jaminan <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="ketentuan_jaminan" name="ketentuan_jaminan" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="hari_kerja">Hari Kerja <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="hari_kerja" name="hari_kerja" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
							
							<div class="ln_solid"></div>
 
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jam_cetak_spj">Jam Cetak SPJ<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="jam_cetak_spj" name="jam_cetak_spj" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jam_cetak_spj">Jam Checker Check<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="jam_checker_check" name="jam_checker_check" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jam_cetak_spj">Jam Mulai Denda<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="jam_mulai_denda" name="jam_mulai_denda" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="setoran_wajib">Setoran Wajib<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="setoran_wajib" name="setoran_wajib" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="denda">Denda<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="denda" name="denda" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="denda">Cicilan Seragam<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="sisa_cicilan_seragam" name="sisa_cicilan_seragam" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
							
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Cicilan Jaminan<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="cicilan_jaminan" name="cicilan_jaminan" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_tagihan">Total Tagihan<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="total_tagihan" name="total_tagihan" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
					  
							<div class="ln_solid"></div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_cash">Payment Cash<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="payment_cash" onchange="getKembalian()" value ="0" name="payment_cash" class="form-control col-md-7 col-xs-12" required="required" />
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_cash">Kode Credit Ticket </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input placeholder="Masukan Nomor Credit Ticket" type="text" id="code_credit_ticket"  name="code_credit_ticket" class="form-control col-md-7 col-xs-12" />
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_cash">Payment Credit Ticket </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="amount_credit_ticket" onchange="getKembalian()" value ="0" name="amount_credit_ticket" 
									class="form-control col-md-7 col-xs-12" />
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_cash">Kode Charge Room </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input placeholder="Masukan Nomor Charge Room" type="text" id="code_charge_room"  name="code_charge_room" class="form-control col-md-7 col-xs-12" />
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_cash">Payment Charge Room </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="amount_charge_room" onchange="getKembalian()" value ="0" name="amount_charge_room" class="form-control col-md-7 col-xs-12" />
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_cash">Kode EDC </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input placeholder="Masukan Nomor EDC" type="text" id="code_edc"  name="code_edc" class="form-control col-md-7 col-xs-12" />
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment_cash">Payment EDC </label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="amount_edc" onchange="getKembalian()" value ="0" name="amount_edc" class="form-control col-md-7 col-xs-12" />
								</div>
							</div>
					  
							<div class="form-group" id="div_no_pintu">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_tagihan">Kembalian<span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-9">
									<input type="text" id="kembalian" name="kembalian" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button onclick="cekTagihan()" type="submit" class="btn btn-success" id="save" name="save">Submit</button>
								</div>
							</div>
						</div>  
					</form>
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
		source: "<?php echo site_url('Spj/get_autocomplete_payment_spj_tiara');?>",
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
			var hari_denda = parseInt(ui.item.jumlah_hari_denda);
			if (hari_denda > 1){
				hari_denda = 1;
			}
			var denda = parseInt(ui.item.flag_denda) * parseInt(ui.item.jumlah_jam_denda) * hari_denda * parseInt(ui.item.denda_perjam);
			$('[name="denda"]').val(denda);
			var tagihan = parseInt(ui.item.tagihan_wajib)  + parseInt(denda) + parseInt(ui.item.sisa_cicilan_seragam);;
			$('[name="jam_cetak_spj"]').val(ui.item.jam_cetak_spj);
			$('[name="jam_mulai_denda"]').val(ui.item.jam_mulai_denda);
			$('[name="driver_id"]').val(ui.item.driverid);
			$('[name="total_tagihan"]').val(tagihan);
			$('[name="sisa_cicilan_seragam"]').val(ui.item.sisa_cicilan_seragam);
			$('[name="jam_checker_check"]').val(ui.item.checker_date);
			$('[name="ketentuan_jaminan"]').val(ui.item.ketentuan_jaminan);
			$('[name="hari_kerja"]').val(ui.item.hari_kerja);
			
			var jaminan = parseInt(ui.item.amount_akhir);
			var hari_kerja = parseInt(ui.item.hari_kerja);
			var limit_hk_cicilan_jaminan = parseInt(ui.item.limit_hk_cicilan_jaminan);
			var amount_cicilan_jaminan = parseInt(ui.item.amount_cicilan_jaminan);
			
			if( hari_kerja < limit_hk_cicilan_jaminan+1 && jaminan < 800000 ){
				$('[name="cicilan_jaminan"]').val(amount_cicilan_jaminan);
				$('[name="total_tagihan"]').val(tagihan + amount_cicilan_jaminan);
			} else {
				$('[name="cicilan_jaminan"]').val(0);
				$('[name="total_tagihan"]').val(tagihan);
			}
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
			console.log("Flag Denda");
			console.log(ui.item.flag_denda);
			console.log("Jumlah Jam Denda");
			console.log(ui.item.jumlah_jam_denda);
			console.log("Jumlah Hari Denda");
			console.log(ui.item.jumlah_hari_denda);
			console.log("Jumlah Denda Per Jam");
			console.log(ui.item.denda_perjam);
			var hari_denda = parseInt(ui.item.jumlah_hari_denda);
			if (hari_denda > 1){
				hari_denda = 1;
			}
			var denda = parseInt(ui.item.flag_denda) * parseInt(ui.item.jumlah_jam_denda) * hari_denda * parseInt(ui.item.denda_perjam);
			$('[name="denda"]').val(denda);
			var tagihan = parseInt(ui.item.tagihan_wajib)  + parseInt(denda) + parseInt(ui.item.sisa_cicilan_seragam);
			$('[name="jam_cetak_spj"]').val(ui.item.jam_cetak_spj);
			$('[name="jam_mulai_denda"]').val(ui.item.jam_mulai_denda);
			$('[name="driver_id"]').val(ui.item.driverid);
			$('[name="sisa_cicilan_seragam"]').val(ui.item.sisa_cicilan_seragam);
			$('[name="jam_checker_check"]').val(ui.item.checker_date);
			$('[name="ketentuan_jaminan"]').val(ui.item.ketentuan_jaminan);
			$('[name="hari_kerja"]').val(ui.item.hari_kerja);
			
			var jaminan = parseInt(ui.item.amount_akhir);
			var hari_kerja = parseInt(ui.item.hari_kerja);
			var limit_hk_cicilan_jaminan = parseInt(ui.item.limit_hk_cicilan_jaminan);
			var amount_cicilan_jaminan = parseInt(ui.item.amount_cicilan_jaminan);
			
			if( hari_kerja < limit_hk_cicilan_jaminan+1 && jaminan < 800000 ){
				$('[name="cicilan_jaminan"]').val(amount_cicilan_jaminan);
				$('[name="total_tagihan"]').val(tagihan + amount_cicilan_jaminan);
			} else {
				$('[name="cicilan_jaminan"]').val(0);
				$('[name="total_tagihan"]').val(tagihan);
			}
		}
	});

});
		
function cekTagihan(){
	var cash = 0;
	var credit_ticket = 0;
	var jamin = 0;
	var total_tagihan = 0;
	var cash = parseInt(document.getElementById('payment_cash').value);
	var credit_ticket = parseInt(document.getElementById('amount_credit_ticket').value);
	var jamin = parseInt(document.getElementById('jaminan').value);
	var charge_room = parseInt(document.getElementById('amount_charge_room').value);
	var edc = parseInt(document.getElementById('amount_edc').value);
	
	var total_tagihan = parseInt(document.getElementById('total_tagihan').value);
	var total = cash+credit_ticket+jamin+charge_room+edc;
	
	console.log(total_tagihan);
	console.log(total);

	if  (total_tagihan > total) { 
		alert("PERINGATAN!! Jumlah Pembayaran Tidak Mencukupi!!!");
		return false;
	} else {
		return true;
	}
}

function getKembalian(){
	var jamin = parseInt(document.getElementById('jaminan').value);
	var cash = parseInt(document.getElementById('payment_cash').value);
	var credit_ticket = parseInt(document.getElementById('amount_credit_ticket').value);
	var charge_room = parseInt(document.getElementById('amount_charge_room').value);
	var edc = parseInt(document.getElementById('amount_edc').value);
	var total_tagihan = parseInt(document.getElementById('total_tagihan').value);
	
	if((jamin+cash+credit_ticket+charge_room+edc) > total_tagihan){
		if (((cash+credit_ticket+charge_room+edc) - total_tagihan)>=0){
			kembalian.value =(cash+credit_ticket+charge_room+edc) - total_tagihan;
		}
	}
}
</script>
<!-- /Datatables -->
