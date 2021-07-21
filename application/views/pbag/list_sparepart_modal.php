<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Tambah Permintaan Barang 
			</h2>
		</div>
		<div class="modal-body">
			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Pbag/add_sparepart_pbag/'.$pbag_id); ?>" method="post">
				<div class="form-group">
				
					<input type="hidden" id="pbag_id" name="pbag_id" value="<?php if(isset($pbag_id)) echo $pbag_id;?>"/>						
					<input type="hidden" id="workshop_id_req" name="workshop_id_req" value="<?php if(isset($pbag_number['workshop_id_req'])) echo $pbag_number['workshop_id_req'];?>"/>
					<input type="hidden" id="pbag_number" name="pbag_number" value="<?php if(isset($pbag_number['pbag_number'])) echo $pbag_number['pbag_number'];?>"/>	
					<input type="hidden" id="jenis_barang" name="jenis_barang" value="1"/>	
					<input type="hidden" id="inventory_id_trf" name="id_inventory_trf" value="<?php if(isset($data['id_inventory_trf'])) echo $data['id_inventory_trf'];?>"/>
					<input type="hidden" id="sparepart_id" name="sparepart_id" value="<?php if(isset($data['sparepart_id'])) echo $data['sparepart_id'];?>"/>
					
					<div class="form-group" id="id_lts_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="internal_code">Kode Barang <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="text" id="internal_code" name="internal_code" class="form-control col-md-7 col-xs-12" required="required" readonly value="<?php if(isset($data['internal_code'])) echo $data['internal_code']; ?>"/>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<a id="click_kode_barang"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					</div>
					
					<div class="form-group" id="desc_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_name">Nama Barang <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="text" id="item_name" name="item_name" class="form-control col-md-7 col-xs-12" required="required" readonly value="<?php 
								if(isset($data['sparepart'])) echo $data['sparepart'];			  			
							?>"/>
						</div>            
					</div>
					
					<div class="form-group" id="price_qty_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Qty Request<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="qty_req" name="qty_req" class="form-control col-md-7 col-xs-12" required value="<?php if(isset($data['qty_req'])) echo $data['qty_req'];?>"/>
						</div>   
					</div>
					
					<div class="form-group" id="price_qty_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cost">Cost <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="number" id="cost" name="cost" class="form-control col-md-7 col-xs-12" min="1" readonly value="<?php if(isset($data['cost'])) echo $data['cost'];?>"/>
						</div>   
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="price_qty">Lokasi Part <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="text" id="loc_part" name="loc_part" class="form-control col-md-7 col-xs-12" readonly value="<?php if(isset($data['loc_part'])) echo $data['loc_part'];?>"/>
						</div>   
					</div>
					
					<div class="ln_solid"></div>
					
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success" id="save" name="<?php echo (isset($data['id']) && $data['id'] > 0 ? 'update"' : 'save" disabled' ); ?>">
							<?php echo (isset($data['id']) && $data['id'] > 0 ? 'Update' : 'Simpan'); ?>
							</button>			  	
						</div>
					</div>
				</div>	
			</form>
				
			<div class="modal-footer">		
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
			</div>
			
		</div>
	</div>
	<script>
	$(document).ready(function() {
		$("#click_kode_barang").on("click", function(){
			$('#ajax-modal-detail').hide();
			$("#ajax-modal-barang").html("");
			$("#ajax-modal-barang").modal();
			$("#ajax-modal-barang").load('<?php echo site_url('/Pbag/get_available_sparepart');?>',
				{"id_faktur":<?php echo $pbag_id;?>,"id_workshop":<?php echo $id_workshop;?>});
		});
		$('#ajax-modal-barang').on('hidden.bs.modal', function () {
			$('#ajax-modal-detail').show();
		});
	});
	</script>
</div>