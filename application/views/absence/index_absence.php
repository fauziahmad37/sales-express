		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                 <h2>Absensi Teknisi <?php if($id_workshop !== '') echo '( '.get_array($arrWorkshop, $id_workshop).' - '.date('M Y', strtotime($date)).')';?></h2>           
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <form id="demo-form" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Absence/index/'); ?>" method="post">
					  <div class="form-group">
						<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Workshop <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <select name="id_workshop" id="id_workshop" class="form-control" required="required">
							<?php
								function get_array($arr, $id, $str = 'name'){
									foreach((Array) $arr AS $key => $val){
										if($val['id'] === $id){
											return $val[$str];
										}
									}
									return '';
								}							
								if($this->user['id_privilege'] == Admin::ADMINISTRATOR) { //ADMINISTRATOR
									echo '<option value="">-- Select One --</option>';
									foreach ((Array) $arrWorkshop as $key => $val){
										echo '<option value="'.$val['id'].'" '.($id_workshop !== '' ? ($id_workshop === $val['id'] ? 'selected' : '') : '').'>'.$val['name'].'</option>';
									}
								} else {
									echo '<option value="'.$this->user['id_workshop'].'">'.get_array($arrWorkshop, $this->user['id_workshop']).'</option>';
								}
							?>
						  </select>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_stnk">Bulan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-9">
						 <div class="input-group date form_date col-md-4" data-date-format="MM yyyy" data-link-field="dtp_input1">
							<input class="form-control inputdate" size="auto" type="text" name="bulan" id="bulan" value="<?php echo date('M Y', strtotime($date));?>" readonly>
							<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>			
						</div>
						</div>       
					  </div>
					  <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success" id="search" name="search">Cek</button>
						</div>
					  </div>
					  <div class="ln_solid"></div>
				  </form>
				  </div>
				  <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" id="content_absen">
				  </div>
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
		<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/dataTables.keyTable.min.js');?>"></script>
		
		<script src="<?php echo base_url('/assets/js/pnotify.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
		<script src="<?php echo base_url('/assets/js/pnotify.nonblock.js');?>"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
		var INDEX_NO = 0;
		var INDEX_NIK = INDEX_NO + 1;
		var INDEX_NAMA = INDEX_NIK + 1;
		var INDEX_ID_TEKNISI = INDEX_NAMA + 1;		
		var INDEX_TOTAL = INDEX_ID_TEKNISI;	

       $('.form_date').datetimepicker({
			autoclose: 1,
			startView: 3,
			minView: 3,
			maxView: 4
		}); 
	   var data_absen = <?php echo json_encode($dataAbsen);?>;
	   var data_teknisi = <?php echo json_encode($data);?>;
	   
	   var div = '<table id="datatable" class="table table-striped table-bordered dataTable" style="width:100%">';
	   div += '<thead><tr><th>No</th><th>NIK</th><th>Nama</th><th class="hidden">Id</th>';  
	   var start_dt = 1;
	   var end_dt = <?php echo date('t', strtotime($date));?>;
	   var month_year = '<?php echo date('Y-m', strtotime($date));?>';
	   var today_dt = '<?php echo date('d'); ?>';
	   var today_month_year = '<?php echo date('Y-m');?>';
	   var is_same_month = month_year === today_month_year;
	   for(var i = start_dt;i <= end_dt;i++){
	   		if(is_same_month && i.toString() === today_dt)
				div += '<th style="background-color:yellow;">'+i+'</th>';
			else
				div += '<th>'+i+'</th>';
		}
	   div += '</tr></thead><tbody>';
	   $.each(data_teknisi, function (i, teknisi) {
	   		div += '<tr><td>'+(i + 1)+'</td><td>'+teknisi.nik+'</td><td>'+teknisi.nama+'</td><td class="hidden">'+teknisi.id+'</td>';
	   		for(var k = start_dt;k <= end_dt;k++){
	   			var found = false;
		   		$.each(data_absen, function (j, absen) {
					if(absen.id_technician == teknisi.id){
						var tgl_now = ('0' + k.toString()).slice(-2);												
						if(absen.tgl === (month_year + '-'+ tgl_now))
						{
							if(is_same_month && tgl_now === today_dt){
								div += '<td style="background-color:yellow;color:red">' + absen.jam;							
							} else {
								div += '<td>' + absen.jam;
							}
							found = true;
							return false;
						}
					}
				});
				if(!found){
					if(is_same_month && k.toString() === today_dt){
						div += '<td style="background-color:yellow;color:red">0';
					} else {
						div += '<td>0';
					}
				}
			}
	   		div += '</td></tr>';
	   });
	   div += '</tbody></table>';
	   if(data_teknisi.length > 0)
		   $("#content_absen").append('<button class="btn btn-success" id="simpan" name="simpan">Simpan</button>');
	   $("#content_absen").append(div);
	   var table = $('#datatable').DataTable({
          keys: true,
          bSort: false
        });
        table.on( 'key', function ( e, datatable, key, cell, originalEvent ) {
        	if(is_same_month && key >= 48 && key <= 57){
        		if((cell.index().column - INDEX_TOTAL) == today_dt)
            		cell.data(key-48);
            }
        } )
        $('#simpan').click( function() {
			var data = table.columns().data();
			var id_teknisi = data[INDEX_ID_TEKNISI];
			var absensi = data[parseInt(today_dt) + INDEX_TOTAL];
			var obj = {save:true};
			var tgl = month_year + '-'+ today_dt;
			for(var i = 0;i<id_teknisi.length;i++){
				obj[i] = {id_technician : parseInt(id_teknisi[i]), jam : parseInt(absensi[i]), tgl : tgl}
			}
			$.ajax({
				url: "<?php echo site_url('/Absence/edit/');?>",
				type: "POST",
				data: obj ,
				success: function (response) {
				   // you will get response from your php page (what you echo or print)                 
					new PNotify({
					  title: "Sukses",
					  type: "success",
					  text: "Absensi Sudah Terupdate!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "green",
					  styling: "bootstrap3"
					});
				},
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				   new PNotify({
					  title: "Gagal",
					  type: "alert",
					  text: "Absensi Gagal Terupdate!",
					  nonblock: {
						  nonblock: true
					  },
					  addclass: "red",
					  styling: "bootstrap3"
					});
				}


			});
			return false;
		} );
	  } );
    </script>
    <!-- /Datatables -->
