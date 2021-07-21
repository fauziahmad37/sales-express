<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Tambah Retur Barang 
			</h2>
		</div>
		<div class="modal-body">
			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Retur/detail_retur_add/'.$id_faktur); ?>" method="post">
			  <div class="form-group">
				<input type="hidden" id="id" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>"/>
				<input type="hidden" id="id_faktur" name="id_faktur" value="<?php echo $id_faktur;?>"/>
				<input type="hidden" id="no_ss" name="no_ss" value="<?php echo $data_retur['no_ss'];?>"/>
			<!--	<input type="text" id="id_wo" name="id_wo" value="<?php echo $data_retur['id_wo'];?>"/> -->
				<input type="hidden" id="id_workshop" name="id_workshop" value="<?php echo $id_workshop;?>"/>								
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Barang <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <select name="jenis_barang" id="jenis_barang" class="form-control" required="required">
					<option value="1">Sparepart</option>
					<option value="2" <?php if(isset($data['material']) && $data['material'] !== null) echo 'selected';?>>Material</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group" id="id_lts_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_barang">Kode Barang <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">

				  <input type="hidden" id="stok" name="stok" class="form-control col-md-7 col-xs-12"/>
				  <input type="hidden" id="id_inventory" name="id_inventory" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['id_inventory'])) echo $data['id_inventory'];?>"/>
				  <input type="hidden" id="id_sparepart" name="id_sparepart" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['id_sparepart']) && $data['id_sparepart'] !== null) echo $data['id_sparepart'];?>"/>
				  <input type="hidden" id="id_material" name="id_material" class="form-control col-md-7 col-xs-12" value="<?php if(isset($data['id_material']) && $data['id_material'] !== null) echo $data['id_material'];?>"/>
				  <input type="text" id="kode_barang" name="kode_barang" class="form-control col-md-7 col-xs-12" required="required" readonly value="<?php 
				  		if(isset($data['kode_part']) && $data['kode_part'] !== null) 
				  			echo $data['kode_part'];
				  		else if(isset($data['kode_material']) && $data['kode_material'] !== null) 
				  			echo $data['kode_material'];				  			
				  	?>"/>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
				  <a id="click_kode_barang"><i class="fa fa-search fa-2x"></i></a>
				</div>                        
			  </div>
			  <div class="form-group" id="desc_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_barang">Nama Barang <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="text" id="nama_barang" name="nama_barang" class="form-control col-md-7 col-xs-12" required="required" readonly value="<?php 
				  		if(isset($data['sparepart']) && $data['sparepart'] !== null) 
				  			echo $data['sparepart'];
				  		else if(isset($data['material']) && $data['material'] !== null) 
				  			echo $data['material'];				  			
				  	?>"/>
				</div>            
			  </div>
			  <div class="form-group" id="price_qty_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Qty <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="text" id="qty_retur" name="qty_retur" class="form-control col-md-7 col-xs-12" required value="<?php if(isset($data['qty'])) echo $data['qty'];?>"/>
				</div>   
			  </div>
			  <div class="form-group" id="price_qty_div">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_satuan">Harga per Qty <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-9">
				  <input type="number" id="harga_satuan" name="harga_satuan" class="form-control col-md-7 col-xs-12" min="1" readonly value="<?php if(isset($data['harga_satuan'])) echo $data['harga_satuan'];?>"/>
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
		</form>
		</div>
		<div class="modal-footer">		
			<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
		</div>
		</form>		
	</div>
	<script>
	 $(document).ready(function() {
		$("#click_kode_barang").on("click", function(){
			$('#ajax-modal-detail').hide();
			$("#ajax-modal-barang").html("");
			$("#ajax-modal-barang").modal();
			if($("#jenis_barang").val() == 1)
				$("#ajax-modal-barang").load('<?php echo site_url('/Retur/get_available_sparepart');?>',
				{"id_faktur": <?php echo $id_faktur;?>, 
				"id_workshop": <?php echo $id_workshop;?>,
				"id_wo": <?php echo $data_retur['id_wo'];?>
			});
			else if($("#jenis_barang").val() == 2)
				$("#ajax-modal-barang").load('<?php echo site_url('/Inventory/get_available_material');?>',
				{"id_faktur": <?php echo $id_faktur;?>, "id_workshop": <?php echo $id_workshop;?>});
		});
		$('#ajax-modal-barang').on('hidden.bs.modal', function () {
			$('#ajax-modal-detail').show();
		});
	});
	</script>
</div>