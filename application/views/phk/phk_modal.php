<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title text-center">
				Tambah Kendaraan
			</h2>
		</div>
		<div class="modal-body">
			<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Phk/save_add_car/'.$phk_id); ?>" method="post">
				<div class="form-group">
					<input type="hidden" id="car_id" name="car_id" />
					
					<div class="form-group" id="id_lts_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pintu">No Pintu <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="text" id="no_pintu" name="no_pintu" class="form-control col-md-7 col-xs-12" required="required" readonly value="<?php if(isset($data['no_pintu'])) echo $data['no_pintu']; ?>"/>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<a id="click_no_pintu"><i class="fa fa-search fa-2x"></i></a>
						</div>                        
					</div>
					
					<div class="form-group" id="desc_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_polisi">No Polisi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="text" id="no_polisi" name="no_polisi" class="form-control col-md-7 col-xs-12" required="required" readonly value="<?php 		  			
							?>"/>
						</div>            
					</div>
					
					<div class="form-group" id="price_qty_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">PT<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="pt" name="pt" class="form-control col-md-7 col-xs-12" required value="<?php if(isset($data['pt'])) echo $data['pt'];?>" readonly/>
						</div>
					</div>

					<div class="form-group" id="price_qty_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipe">Tipe<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						  <input type="text" id="tipe" name="tipe" class="form-control col-md-7 col-xs-12" required value="<?php if(isset($data['tipe'])) echo $data['tipe'];?>" readonly />
						</div>   
					</div>
					
					<div class="form-group" id="price_qty_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cost">Harga Dasar <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="number" id="harga_dasar" name="harga_dasar" class="form-control col-md-7 col-xs-12" readonly value="<?php if(isset($data['harga_dasar'])) echo $data['harga_dasar'];?>"/>
						</div>   
					</div>

					<div class="form-group" id="price_qty_div">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cost">Pengajuan Harga Dasar Khusus <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
							<input type="number" id="pengajuan_harga_dasar_khusus" name="pengajuan_harga_dasar_khusus" class="form-control col-md-7 col-xs-12"  value="<?php if(isset($data['pengajuan_harga_dasar_khusus'])) echo $data['pengajuan_harga_dasar_khusus'];?>"/>
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
		$("#click_no_pintu").on("click", function(){
			$('#ajax-modal-detail').hide();
			$("#ajax-modal-barang").html("");
			$("#ajax-modal-barang").modal();
			$("#ajax-modal-barang").load('<?php echo site_url('/Skh/get_available_car');?>',
				{"phk_id":<?php echo $phk_id;?> });
		});
		$('#ajax-modal-barang').on('hidden.bs.modal', function () {
			$('#ajax-modal-detail').show();
		});
	});
	</script>
</div>