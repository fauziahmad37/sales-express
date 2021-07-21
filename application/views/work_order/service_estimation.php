<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Estimasi Servis
			</h2>
		</div>
		<div class="modal-body">
			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/work_order/detail/'.$id_wo); ?>" method="post">
			  <div class="form-group">
				<input type="hidden" id="id" name="id"/>
				<input type="hidden" id="id_wo" name="id_wo" value="<?php echo $id_wo;?>"/>				
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Servis <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <select name="id_jenis_servis" id="id_jenis_servis" class="form-control" required="required">
					<option value="">-- Select One --</option>
					<?php
						foreach ((Array) $arrJenisServis as $key => $val){
							echo '<option value="'.$val['id'].'">'.$val['jenis_servis'].'</option>';
						}
					?>
				  </select>
				</div>
			  </div>
			  <div class="form-group" id="id_lts_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_lts">LTS Code <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="hidden" id="id_lts" name="id_lts" class="form-control col-md-7 col-xs-12"/>
				  <input type="text" id="kode_lts" name="kode_lts" class="form-control col-md-7 col-xs-12" required="required" readonly/>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
				  <a id="click_no_lts"><i class="fa fa-search fa-2x"></i></a>
				</div>                        
			  </div>
			  <div class="form-group" id="id_sparepart_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_lts">Kode Sparepart <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="hidden" id="id_sparepart" name="id_sparepart" class="form-control col-md-7 col-xs-12"/>
				  <input type="text" id="kode_sparepart" name="kode_sparepart" class="form-control col-md-7 col-xs-12" required="required" readonly/>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
				  <a id="click_no_sparepart"><i class="fa fa-search fa-2x"></i></a>
				</div>                        
			  </div>
			  <div class="form-group" id="id_material_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_material">Kode Material <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="hidden" id="id_material" name="id_material" class="form-control col-md-7 col-xs-12"/>				
				  <input type="text" id="kode_material" name="kode_material" class="form-control col-md-7 col-xs-12" required="required" readonly/>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
				  <a id="click_no_material"><i class="fa fa-search fa-2x"></i></a>
				</div>                        
			  </div>
			  <div class="form-group" id="desc_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Deskripsi
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="text" id="description" name="description" class="form-control col-md-7 col-xs-12" required="required" readonly/>
				</div>            
			  </div>
			  <div class="form-group" id="model_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="model">Jenis
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="hidden" id="id_jenis_car" name="id_jenis_car" class="form-control col-md-7 col-xs-12"/>
				  <input type="text" id="jenis" name="jenis" class="form-control col-md-7 col-xs-12" readonly/>
				</div>            
			  </div>
			  <div class="form-group" id="price_qty_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="price_qty" id="price_qty_label">Biaya Per Jam
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="number" id="price_qty" name="price_qty" class="form-control col-md-7 col-xs-12" readonly/>
				</div>   
				
			  <?php 
				  if($id_jenis_customer == Admin::CUSTOMER_TIPE_REGULER){
				  	//echo '<div class="col-md-3 col-sm-3 col-xs-3" id="div_free_jasa" name="div_free_jasa">';
				  	//echo '<input type="hidden" name="biaya_dasar" id="biaya_dasar" value="0">';
				  	//echo '<input type="checkbox" id="free_jasa" name="free_jasa"><label for="free_jasa"> Free Jasa</label>';
				  	//echo '</div>';
				  }
			  ?> 				  

			  </div>
			<div class="form-group" id="price_lts_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="price_lts" id="price_lts_label">Biaya Per Jam
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
					<input type="number" id="price_lts" name="price_lts" class="form-control col-md-7 col-xs-12" />
				</div>
			<?php 
			if($id_jenis_customer == Admin::CUSTOMER_TIPE_REGULER){
				echo '<div class="col-md-3 col-sm-3 col-xs-3" id="div_free_jasa" name="div_free_jasa">';
				echo '<input type="hidden" name="biaya_dasar" id="biaya_dasar" value="0">';
				echo '<input type="checkbox" id="free_jasa" name="free_jasa"><label for="free_jasa"> Free Jasa</label>';
				echo '</div>';
			}
			?> 	
			</div>
			  <div class="form-group" id="qty_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty" id="qty_label">Total Jam <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="text" id="qty" name="qty" class="form-control col-md-7 col-xs-12" required="required" />
				</div>            
			  </div>
			  <div class="form-group" id="lts_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty" id="qty_label">LTS <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="text" id="lts" name="lts" class="form-control col-md-7 col-xs-12" required="required" readonly/>
				</div>            
			  </div>
			  <div class="form-group" id="total_price_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_price">Total Biaya 
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="text" id="total_price" name="total_price" class="form-control col-md-7 col-xs-12" readonly/>
				</div>            
			  </div>
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				  <button type="submit" class="btn btn-success" id="save" name="<?php echo (isset($data['id']) && $data['id'] > 0 ? 'update' : 'save');?>">
				  	<?php echo (isset($data['id']) && $data['id'] > 0 ? 'Update' : 'Submit');?></button>
				</div>
			  </div>
		</form>
		</div>
		<div class="modal-footer">		
			<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
		</div>
		</form>
	</div>
	<script>
	var data = <?php echo json_encode($data);?>;	
	function resetdiv(){
		$("#id_lts_div").hide();
		$("#id_sparepart_div").hide();
		$("#id_material_div").hide();
		$("#desc_div").hide();
		$("#model_div").hide();		
		$("#price_qty_div").hide();
		$("#price_lts_div").hide();
		$("#qty_div").hide();
		$("#lts_div").hide();
		$("#total_price_div").hide();
		$("#div_free_jasa").hide();	
		
		$("#lts").val(null);
		$("#id_lts").val(null);
		$("#kode_lts").val(null);
		$("#id_sparepart").val(null);
		$("#kode_sparepart").val(null);
		$("#id_material").val(null);
		$("#kode_material").val(null);
		$("#description").val(null);
		$("#id_jenis_car").val(null);
		$("#jenis").val(null);				
		$("#price_qty").val(null);
		$("#qty").val(null);
		$("#total_price").val(null);
	 }
	 
	 function showDiv(jenis){
	 	resetdiv();
	 	$("#desc_div").show();
		//$("#price_qty_div").show();
		//$("#price_lts_div").show();
		$("#qty_div").show();
		$("#total_price_div").show();
	 	if(jenis == <?php echo Admin::JENIS_SERVIS_JASA;?>) { //JASA
	 		$("#id_lts_div").show();
			$("#price_lts_div").show();
	 		$("#model_div").show();
			$("#lts_div").show();
			$("#qty_div").hide();			
	 		$("#price_qty_label").html('Harga per Jam');	 			
	 		$("#qty_label").html('Total Jam');
	 		<?php 
	 			if($id_jenis_customer == Admin::CUSTOMER_TIPE_REGULER){
	 				echo '$("#div_free_jasa").show();';
	 			}
	 		?>
	 	} else if(jenis == <?php echo Admin::JENIS_SERVIS_SPAREPART;?>) { //SPAREPART
	 		$("#id_sparepart_div").show();
			$("#price_qty_div").show();
	 		$("#price_qty_label").html('Harga per Qty');	 			
	 		$("#qty_label").html('Total Qty');	 		
	 	} else if(jenis == <?php echo Admin::JENIS_SERVIS_MATERIAL;?>) { //MATERIAL
	 		$("#id_material_div").show();
			$("#price_qty_div").show();
	 		$("#price_qty_label").html('Harga per Qty');	 			
	 		$("#qty_label").html('Total Qty');	 		
	 	}
	 }
	 
	 function populatediv(obj){
	 	showDiv(obj.id_jenis_servis);
		$("#id").val(obj.id);
		$("#id_jenis_servis").val(obj.id_jenis_servis);
		if(obj.id_jenis_servis == <?php echo Admin::JENIS_SERVIS_JASA;?>){
			$("#id_lts").val(obj.id_lts);
			$("#kode_lts").val('' + obj.lts_code);
			$("#description").val('' + obj.description);
			$("#id_jenis_car").val(obj.id_jenis_car);
			$("#jenis").val(obj.jenis);		
			<?php 
	 			if($id_jenis_customer == Admin::CUSTOMER_TIPE_REGULER){
	 				echo '$("#biaya_dasar").val(obj.hourly_price);';
	 				echo "if(obj.price_qty == 0) $('#free_jasa').prop('checked', true); else $('#free_jasa').prop('checked', false);";
	 			}
	 		?>				
		} else if(obj.id_jenis_servis == <?php echo Admin::JENIS_SERVIS_SPAREPART;?>) {
			$("#id_sparepart").val(obj.id_sparepart);
			$("#kode_sparepart").val(obj.kode_part);
			$("#description").val(obj.sparepart);
			$("#id_jenis_car").val(obj.id_jenis_car);
			$("#jenis").val(obj.model);			
		} else if(obj.id_jenis_servis == <?php echo Admin::JENIS_SERVIS_MATERIAL;?>) {
			$("#id_material").val(obj.id_material);
			$("#kode_material").val(obj.kode_material);
			$("#description").val(obj.material);
			$("#id_jenis_car").val(null);
			$("#jenis").val(null);						
		}				
		$("#price_qty").val(obj.price_qty);
		$("#qty").val(obj.qty);
		$("#total_price").val(obj.total_price);
	 }
	 
	 $(document).ready(function() {
	 	if(data.id && data.id > 0)
	 		populatediv(data);
	 	else
	 		resetdiv();
		$("#id_jenis_servis").on('change', function() {
		  if ( this.value > 0){
		  	showDiv(this.value);
		  } else {
		  	resetdiv();
		  }
		});
		$("#click_no_lts").on("click", function(){
			$('#ajax-modal-servis').hide();
			$("#ajax-modal-jasa").html("");
			$("#ajax-modal-jasa").modal();
			$("#ajax-modal-jasa").load('<?php echo site_url('/Work_order/get_jasa');?>', {"id_jenis_car": <?php echo $id_jenis_car;?>, "id_jenis_customer": <?php echo $id_jenis_customer;?>});
		});
		$("#click_no_sparepart").on("click", function(){
			$('#ajax-modal-servis').hide();
			$("#ajax-modal-jasa").html("");
			$("#ajax-modal-jasa").modal();
			$("#ajax-modal-jasa").load('<?php echo site_url('/Work_order/get_sparepart');?>', {"id_model": <?php echo $id_model;?>});
		});
		$("#click_no_material").on("click", function(){
			$('#ajax-modal-servis').hide();
			$("#ajax-modal-jasa").html("");
			$("#ajax-modal-jasa").modal();
			$("#ajax-modal-jasa").load('<?php echo site_url('/Work_order/get_material');?>');
		});
		$('#ajax-modal-jasa').on('hidden.bs.modal', function () {
			$('#ajax-modal-servis').show();
		});
		$('#ajax-modal-sparepart').on('hidden.bs.modal', function () {
			$('#ajax-modal-servis').show();
		});
		$('#ajax-modal-material').on('hidden.bs.modal', function () {
			$('#ajax-modal-servis').show();
		});
		$('#price_qty').on('change', function(){
			var qty = $('#qty').val();
			var price = $('#price_qty').val();
			var total_price = qty * price;
			$('#total_price').val(total_price);
		})
		$('#price_lts').on('change', function(){
			var qty = $('#qty').val();
			var price = $('#price_lts').val();
			var total_price = qty * price;
			$('#total_price').val(total_price);
		})
		$('#qty').on('change', function() {
		  var qty = parseFloat(this.value);
		  var price = $('#price_qty').val();
		  var total_price = qty * price;
		  $('#total_price').val(total_price);
		})
		$('#free_jasa').on('change', function(){
			var checked = $('#free_jasa').is(':checked');
			var biaya_dasar = $('#biaya_dasar').val();
			var qty = $('#qty').val();
			if(checked){
				$('#price_lts').val(0);
				$('#total_price').val(0);	
			} else {
				$('#price_lts').val(biaya_dasar);
				$('#total_price').val(biaya_dasar * qty);	
			}
		});
	});
	</script>
</div>