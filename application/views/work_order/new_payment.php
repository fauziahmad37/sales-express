		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pembayaran Invoice </h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  <div id="ajax-modal-payment" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;"></div>                  
                  <div class="x_content">
		  			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" 
		  			action="<?php echo site_url('/Payment/new_payment'); ?>" method="post" onsubmit="return confirm('Apakah Pembayaran Sudah Diterima?');">

                      <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="invoice_number">No Invoice <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">

						  <input type="hidden" id="id" name="id">
						  <input type="hidden" id="id_wo" name="id_wo">
						  <input type="hidden" id="input_by" name="input_by">
						  <input type="text" id="invoice_number" name="invoice_number" required="required" class="form-control col-md-7 col-xs-12" />
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						  <a id="click_invoice_number"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					  </div>
					   <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="wo_number">No Work Order <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="wo_number" name="wo_number" required="required" class="form-control col-md-7 col-xs-12" />
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
						  <a id="click_wo_number"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="created_dt">Tanggal Invoice
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="created_dt" name="created_dt" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                   
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_customer">Jenis Customer
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="jenis_customer" name="jenis_customer" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                   
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_customer">Nama Customer
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="nama_customer" name="nama_customer" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                   
					  </div>
					  <div class="form-group" id="div_pool">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pool">Pool
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="pool" name="pool" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                   
					  </div>
					  <div class="form-group" id="div_no_pintu">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pintu">No Pintu
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_pintu" name="no_pintu" class="form-control col-md-7 col-xs-12" readonly/>
						</div>                   
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_polisi">No Polisi
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="no_polisi" name="no_polisi" class="form-control col-md-7 col-xs-12" readonly />
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_billing">Total Biaya
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="total_billing" name="total_billing" class="form-control col-md-7 col-xs-12" readonly />
						</div>
					  </div>


				  	<div class="form-group" id="div_terbayar">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="terbayar">Terbayar 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="terbayar" name="terbayar" class="form-control col-md-7 col-xs-12" readonly>
						</div>
				  	</div>


					  <div class="form-group" id="div_tabungan">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="amount">Saldo Tabungan
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="hidden" id="id_car" name="id_car">
						  <input type="text" id="amount" name="amount" class="form-control col-md-7 col-xs-12" readonly />
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3" id="div_btn_tabungan">
						  <a id="click_tabungan"><i class="fa fa-search fa-2x"></i></a>
						</div>
					  </div>

				  	<div class="form-group" id="div_jumlah_bayar">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_payment">Jumlah di Bayar 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="total_payment" name="total_payment" class="form-control col-md-7 col-xs-12" >
						</div>
				  	</div>

				  	<div class="form-group" id="div_note">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="note">Note <?php $this->user["full_name"] ?>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="note" name="note" class="form-control col-md-7 col-xs-12" >
						</div>
				  	</div>

					  <div class="ln_solid"></div>
					  <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success" id="tunai" name="tunai">Bayar Tunai</button>
						  <button type="submit" class="btn btn-info" id="tabungan" name="tabungan">Bayar Dengan Tabungan</button>
						  <button type="submit" class="btn btn-danger" id="ohl" name="ohl">OHL</button>
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
			<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
		<!-- jQuery -->
		<script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
		<!-- NProgress -->
		<script src="<?php echo base_url('/assets/js/nprogress.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/jquery.dataTables.min.js');?>"></script>
    	<script src="<?php echo base_url('/assets/js/dataTables.bootstrap.min.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
      	$('#div_pool').hide();
      	$('#div_no_pintu').hide();
      	$('#div_tabungan').hide();      	
      	$('#tunai').hide();
      	$('#tabungan').hide();
      	$('#ohl').hide();
      	var $modal = $("#ajax-modal-payment"); 
		$("#click_invoice_number").on("click", function(){
			var invoice_number = $("#invoice_number").val();
			if(invoice_number !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Payment/get_data_by_invoice_number');?>',{"invoice_number": invoice_number});
			}
		});
		$("#click_wo_number").on("click", function(){
			var wo_number = $("#wo_number").val();
			if(wo_number !== '') {
				$modal.modal();
				$modal.load('<?php echo site_url('/Payment/get_data_by_wo_number');?>',{"wo_number": wo_number});
			}
		});
		$('#click_tabungan').on("click", function(){
			var id_car = $("#id_car").val();
			if(id_car !== '') {
				$('#div_btn_tabungan').hide();
				$.ajax({
				url: "<?php echo site_url('/Payment/get_savings/');?>",
				type: "POST",
				data: {id_car: id_car} ,
				success: function (response) {
					var amount = response === '' ? 0 : response;
				   	$('#amount').val(amount);
				   	$('#tabungan').show();
				   	$('#tunai').show();
				   	$('#ohl').show();	
				   	var biaya = parseInt($('#total_billing').val());
				   	var tabungan = parseInt($('#amount').val());
				   	if(tabungan < biaya){
				   		$('#tabungan').prop("disabled", true);
				   	} else {
				   		$('#tabungan').prop("disabled", false);
				   		$('#total_payment').val(biaya);
				   	}				   	
				}
			});
			}		
		});
		$('#invoice_number').on('keypress', function(e) {
			if (e.which == 32)
				return false;
		});
		$('#wo_number').on('keypress', function(e) {
			if (e.which == 32)
				return false;
		});

        } );
    </script>
    <!-- /Datatables -->
