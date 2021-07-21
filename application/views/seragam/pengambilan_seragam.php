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
                    <h2>Pengambilan Seragam</h2>
                    <div class="clearfix"></div>
                  </div>
				  <div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
                  <div class="x_content">
		  			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Seragam/save_pengambilan_seragam'); ?>" method="post">
                      <div class="form-group">
                      	<input type="hidden" id="id_car" name="id_car"/>
						
                      	
						<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="pool_id" id="pool_id" class="form-control">
									<option value="0">-- Select One --</option>
									<?php
										foreach ((Array) $arrPool as $key => $val){
											echo '<option value="'.$val['id'].'">'.$val['name'].'</option>';
										}
									?>
								  </select>
						</div>
						</div>  

						<div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kip_number">No KIP<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  <input type="text" id="kip_number" name="kip_number" class="form-control col-md-7 col-xs-12" required="required"/>
						</div>
						
						
						                       
					  </div>
					  
					  	<div class="form-group" id="div_no_pintu">
						
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  
						  <input type="hidden" id="driver_id" name="driver_id" class="form-control col-md-7 col-xs-12" required="required"/>
						</div>
						
						
						                       
					  </div>
					  
					  
					  
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						<input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						                       
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipe Driver<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						<input type="text" id="tipe_driver" name="tipe_driver" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						                       
					  </div>
					  
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Jaminan Saat ini <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						<input type="text" id="jaminan" name="jaminan" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						                       
					  </div>
					  
						<div class="form-group" >
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Satuan<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input readonly type="text" id="harga_satuan"  name="harga_satuan" value="0" class="form-control col-md-7 col-xs-12" required="required" />
							</div>
						</div>
						
						<div class="form-group" >
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nominal Cicilan<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input readonly type="text" id="nominal_cicilan"  name="nominal_cicilan" value="0" class="form-control col-md-7 col-xs-12" required="required" />
							</div>
						</div>
					  
						<div class="form-group" id="div_no_pintu">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Jumlah Item<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input onchange="myFunction()" type="text" id="jumlah_item"  name="jumlah_item" value="0" 
								class="form-control col-md-7 col-xs-12" required="required" />
							</div>
						</div>
					  
						<div class="form-group" id="div_no_pintu">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Total Tagihan<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-9">
								<input type="text" id="total_tagihan"  name="total_tagihan" value="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
							</div>
						</div>
					  
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ukuran">Ukuran<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  
						  <select name="ukuran" class="form-control">
									<option value="">-- Select One --</option>
										<option value="S">S</option>;
										<option value="M">M</option>;
										<option value="L">L</option>;
										<option value="XL">XL</option>;
								  </select>
						</div>
						                       
					  </div>
					  
					 
					  
					  
					  
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
	$( "#kip_number" ).autocomplete({
		source: "<?php echo site_url('Jaminan/get_autocomplete');?>",
		select: function( event, ui ) { 
			event.preventDefault();
			$('[name="name"]').val(ui.item.name);
			$('[name="driver_id"]').val(ui.item.id);
			$('[name="jaminan"]').val(ui.item.amount_akhir); 
			$('[name="tipe_driver"]').val(ui.item.tipe);
			$('[name="total_tagihan"]').val(0);
			$('[name="jumlah_item"]').val(0);
			if(ui.item.tipe == 'REGULAR'){
				$('[name="harga_satuan"]').val(95000);
				$('[name="nominal_cicilan"]').val(10000);
			}else{
				$('[name="harga_satuan"]').val(205000);
				$('[name="nominal_cicilan"]').val(20000);
			}
		}, focus: function(event, ui) {
			event.preventDefault();
			$('[name="kip_number"]').val(ui.item.kip); 
			$('[name="name"]').val(ui.item.name);
			$('[name="driver_id"]').val(ui.item.id);
			$('[name="jaminan"]').val(ui.item.amount_akhir);
			$('[name="tipe_driver"]').val(ui.item.tipe);
			$('[name="total_tagihan"]').val(0);
			$('[name="jumlah_item"]').val(0);
			if(ui.item.tipe == 'REGULAR'){
				$('[name="harga_satuan"]').val(95000);
				$('[name="nominal_cicilan"]').val(10000);
			}else{
				$('[name="harga_satuan"]').val(205000);
				$('[name="nominal_cicilan"]').val(20000);
			}
		}
	});
	
});

	function myFunction() {
		var x = document.getElementById("jumlah_item").value;
		var y = document.getElementById("harga_satuan").value;
		
		if(x > 2){
			document.getElementById("total_tagihan").value = "Qty Tidak di izinkan";
		}else{
			document.getElementById("total_tagihan").value = x*y;
		}
		
	}
</script>
<!-- /Datatables -->
