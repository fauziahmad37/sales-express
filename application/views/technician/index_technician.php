		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                  <h2>List Teknisi</h2>                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable" class="table table-striped" style="width:100%">
                    <thead>
                    	<tr>
                    		<th>NIK</th>
                    		<th>Nama</th>                    		              		
                    		<th>Workshop</th>
                    		<th>Jenis Job</th>                    		
                    		<th>No Telepon 1</th>
                    		<th>No Telepon 2</th>
                    		<th>Active</th>                    		
                    		<th>#</th>
                    	</tr>
                    </thead>
                    <tbody>
                    <?php
                    	function get_array($arr, $id, $str = 'name'){
                    		foreach((Array) $arr AS $key => $val){
                    			if($val['id'] === $id){
                    				return $val[$str];
                    			}
                    		}
                    		return '';
                    	}
                             
                    	foreach ((Array) $data AS $key => $val) { 
                    		echo '<tr><td>'.$val['nik'].'</td>'.          
                    		'<td>'.$val['nama'].'</td>'.             		       		
                    		'<td>'.get_array($arrWorkshop, $val['id_workshop']).'</td>'.
                    		'<td>'.get_array($arrWOTipe, $val['id_wo_tipe'], 'tipe').'</td>'.
                    		'<td>'.$val['no_telepon1'].'</td>'.
                    		'<td>'.$val['no_telepon2'].'</td>'.                    		                    		
                    		'<td>'.($val['active'] == 1 ? 'Yes' : 'No').'</td>';
                    		if(
								$this->user['id_privilege'] == Admin::ADMINISTRATOR
								|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD
                    		){                    		
                    			echo '<td><a href="'.site_url('/Technician/detail/'.$val['id']).'"><button class="btn btn-success btn-xs">Edit</button></a></td>';
                    		} else echo '<td></td>'.
                    		'</tr>';
                    	}
                    ?>
                    </tbody>
                  </table>
                  <?php
                  if(
						$this->user['id_privilege'] == Admin::ADMINISTRATOR
						|| $this->user['id_privilege'] == Admin::WORKSHOP_HEAD                  	
                  ){
                  	echo '<a href="'.site_url("/Technician/detail").'"><button class="btn btn-info">Add New Teknisi</button></a>';
                  }
                  ?>
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
        $('#datatable').dataTable( {} );
        } );
    </script>
    <!-- /Datatables -->
