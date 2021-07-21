		<!-- page content -->
	<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <div class="right_col" role="main">
		  <div class="row">
		  	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Settings</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
		  			<div class role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab_content6" id="jenis-tab" role="tab" data-toggle="tab" aria-expanded="true">Jenis Mobil</a></li>						
							<li role="presentation"><a href="#tab_content2" id="model-tab" role="tab" data-toggle="tab" aria-expanded="true">Model Mobil</a></li>
							<li role="presentation"><a href="#tab_content3" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Warna Mobil</a></li>
							<li role="presentation"><a href="#tab_content1" id="pool-tab" role="tab" data-toggle="tab" aria-expanded="true">Pool</a></li>
							<li role="presentation"><a href="#tab_content4" id="workshop-tab" role="tab" data-toggle="tab" aria-expanded="true">Workshop</a></li>
							<li role="presentation"><a href="#tab_content5" id="main-problem-tab" role="tab" data-toggle="tab" aria-expanded="true">Main Problem</a></li>
							<li role="presentation"><a href="#tab_content7" id="uom" role="tab" data-toggle="tab" aria-expanded="true">UOM</a></li>
						</ul>
					</div>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="model-tab">
							<table id="table3" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Model</td>
										<td>Merk</td>
										<td>Jenis</td>										
										<td>Active</td>
										<td>#</td>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach((Array) $arrModel AS $key => $val){
											echo "<tr><td>".$val['model']."</td><td>".$val['brand']."</td><td>".array_get($arrJenis, $val['id_jenis_car'], 'id', 'jenis')."</td><td>".($val['active'] == 1 ? 'Yes' : 'No')."</td><td><a href='".site_url('/Settings/detail_model/'.$val['id'])."'><button class='btn btn-primary btn-small'>Edit</button></a></td></tr>";
										}
									?>
								</tbody>
							</table>
							<a href="<?php echo site_url('/Settings/detail_model');?>"><button class="btn btn-info">Add New Model Mobil</button></a>
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content3" aria-labelledby="warna-tab">
							<table id="table4" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Warna</td>
										<td>Active</td>
										<td>#</td>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach((Array) $arrWarna AS $key => $val){
											echo "<tr><td>".$val['warna']."</td><td>".($val['active'] == 1 ? 'Yes' : 'No')."</td><td><a href='".site_url('/Settings/detail_warna/'.$val['id'])."'><button class='btn btn-primary btn-small'>Edit</button></a></td></tr>";
										}
									?>
								</tbody>
							</table>
							<a href="<?php echo site_url('/Settings/detail_warna');?>"><button class="btn btn-info">Add New Warna Mobil</button></a>
						</div>
						<div role="tabpanel" class="tab-pane fade active in" id="tab_content6" aria-labelledby="jenis-tab">
							<table id="table6" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Warna</td>
										<td>Active</td>
										<td>#</td>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach((Array) $arrJenis AS $key => $val){
											echo "<tr><td>".$val['jenis']."</td><td>".($val['active'] == 1 ? 'Yes' : 'No')."</td><td><a href='".site_url('/Settings/detail_jenis/'.$val['id'])."'><button class='btn btn-primary btn-small'>Edit</button></a></td></tr>";
										}
									?>
								</tbody>
							</table>
							<a href="<?php echo site_url('/Settings/detail_jenis');?>"><button class="btn btn-info">Add New Jenis Mobil</button></a>
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content1" aria-labelledby="pool-tab">
							<table id="table1" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Pool</td>
										<td>Kode</td>										
										<td>Active</td>
										<td>#</td>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach((Array) $arrPool AS $key => $val){
										echo "<tr><td>".$val['nama']."</td><td>".$val['code']."</td><td>".($val['active'] == 1 ? 'Yes' : 'No')."</td><td><a href='".site_url('/Settings/detail_pool/'.$val['id'])."'><button class='btn btn-primary btn-small'>Edit</button></a></td></tr>";
									}
								?>
								</tbody>
							</table>
							<a href="<?php echo site_url('/Settings/detail_pool');?>"><button class="btn btn-info">Add New Pool</button></a>
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content4" aria-labelledby="workshop-tab">
							<table id="table1" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Workshop</td>
										<td>Kode</td>										
										<td>Active</td>
										<td>#</td>
									</tr>
								</thead>
								<tbody>
								<?php
										foreach((Array) $arrWorkshop AS $key => $val){
											echo "<tr><td>".$val['name']."</td><td>".$val['code']."</td><td>".($val['active'] == 1 ? 'Yes' : 'No')."</td><td><a href='".site_url('/Settings/detail_workshop/'.$val['id'])."'><button class='btn btn-primary btn-small'>Edit</button></a></td></tr>";
										}
								?>
								</tbody>
							</table>
							<a href="<?php echo site_url('/Settings/detail_workshop');?>"><button class="btn btn-info">Add New Workshop</button></a>
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content5" aria-labelledby="main-problem-tab">
							<table id="table5" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>Main Problem</td>
										<td>Active</td>
										<td>#</td>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach((Array) $arrMainProblem AS $key => $val){
										echo "<tr><td>".$val['problem']."</td><td>".($val['active'] == 1 ? 'Yes' : 'No')."</td><td><a href='".site_url('/Settings/detail_main_problem/'.$val['id'])."'><button class='btn btn-primary btn-small'>Edit</button></a></td></tr>";
									}
								?>
								</tbody>
							</table>
							<a href="<?php echo site_url('/Settings/detail_main_problem');?>"><button class="btn btn-info">Add New Main Problem</button></a>
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content7" aria-labelledby="uom-tab">
							<table id="table7" class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<td>UOM</td>
										<td>Active</td>
										<td>#</td>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach((Array) $arrUom AS $key => $val){
										echo "<tr><td>".$val['uom']."</td><td>".($val['active'] == 1 ? 'Yes' : 'No')."</td><td><a href='".site_url('/Settings/detail_uom/'.$val['id'])."'><button class='btn btn-primary btn-small'>Edit</button></a></td></tr>";
									}
								?>
								</tbody>
							</table>
							<a href="<?php echo site_url('/Settings/detail_uom');?>"><button class="btn btn-info">Add New UOM</button></a>
						</div>
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
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url('/assets/js/custom.js');?>"></script>
		<!-- Datatables -->
    <script>
      $(document).ready(function() {
		   $('#table1').dataTable();
		   $('#table2').dataTable();
		   $('#table3').dataTable();
		   $('#table4').dataTable();
		   $('#table5').dataTable();
		   $('#table6').dataTable();		   		   
        } );
    </script>
    <!-- /Datatables -->
