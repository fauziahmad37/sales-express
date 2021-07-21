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
                    <h2>Create SPJ Tiara (Surat Perintah Jalan)</h2>
                    <div class="clearfix"></div>
                  </div>
				  <div id="ajax-modal-savings" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
                  <div class="x_content">
		  			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Spj/save_spj_tiara'); ?>" method="post">
                      <div class="form-group">
                      	<input type="hidden" id="id_car" name="id_car"/>
						<input type="hidden" id="created_dt" name="created_dt"/>
                      	
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
					  
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="door_number">Door Number<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						  <input type="text" id="door_number" name="door_number" class="form-control col-md-7 col-xs-12" required="required"/>
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
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Jaminan Saat ini <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 
						<input type="text" id="jaminan" name="jaminan" value ="0" class="form-control col-md-7 col-xs-12" required="required" readonly/>
						</div>
						                       
					  </div>
					  
					  
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Rental Tipe <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="tipe_rental" id="tipe_rental" class="form-control" required="required">
									<option value="0">-- Select One --</option>
									<?php
										foreach ((Array) $arrTipeRental as $key => $val){
											echo '<option value="'.$val['tipe'].'">'.$val['tipe'].'</option>';
										}
									?>
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
    
				  var d = new Date();
				  var v_tipe_rental = '';
				  if ( d.getHours() < 12) {
					  v_tipe_rental = "24 Jam";
				  } else {
			v_tipe_rental = "18 Jam";
			}
		
		 $( "#kip_number" ).autocomplete({
              source: "<?php echo site_url('Spj/get_autocomplete_tiara');?>",
			   select: function( event, ui ) { 
               event.preventDefault();
                  $('[name="created_dt"]').val(ui.item.created_dt);
                  $('[name="name"]').val(ui.item.name);
                  $('[name="driver_id"]').val(ui.item.id);
                  $('[name="jaminan"]').val(ui.item.amount_akhir);
				   $('[name="tipe_rental"]').val(v_tipe_rental);
            }, focus: function(event, ui) {
            event.preventDefault();
				$('[name="kip_number"]').val(ui.item.kip);
				 $('[name="created_dt"]').val(ui.item.created_dt);		   
                  $('[name="name"]').val(ui.item.name);
                  $('[name="driver_id"]').val(ui.item.id);
                  $('[name="jaminan"]').val(ui.item.amount_akhir);
				   $('[name="tipe_rental"]').val(v_tipe_rental);
        }
            })
			console.log("Hello world!");;
			
		$( "#door_number" ).autocomplete({
              source: "<?php echo site_url('Spj/get_autocomplete_door_number_tiara');?>",
			   select: function( event, ui ) { 
               event.preventDefault();
                   $('[name="tipe_merek"]').val(ui.item.desc_mobil);
            }, focus: function(event, ui) {
            event.preventDefault();
           $('[name="door_number"]').val(ui.item.no_pintu); 
                  $('[name="tipe_merek"]').val(ui.item.desc_mobil);
                  $('[name="car_id"]').val(ui.item.id);
        }
            });
			
			

	
		
		
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
		
		var jaminan = document.getElementById('kip_number');
		var rupiah2 = document.getElementById('jaminan');
		jaminan.addEventListener('change', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah2.value = formatRupiah2(rupiah2.value, 'Rp. ');
		});
		
		function formatRupiah2(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah2     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah2 += separator + ribuan.join('.');
			}
 
			rupiah2 = split[1] != undefined ? rupiah2 + ',' + split[1] : rupiah2;
			return prefix == undefined ? rupiah2 : (rupiah2 ? 'Rp. ' + rupiah2 : '');
		}

			
			
			
		
      	
        } );
    </script>
    <!-- /Datatables -->
