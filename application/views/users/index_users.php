<!-- page content -->
<link href="<?php echo base_url('/assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add Users</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form id="demo-form2" autocomplete="off" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('/Users'); ?>" method="post">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php
								if(isset($users['id']))
								echo '<input type="hidden" id="id" name="id" value="'.$users['id'].'">';
								?>
								<input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($users['username'])) echo $users['username'];?>" <?php if(isset($users['username'])) echo 'readonly';?>>
							</div>
						</div>
					  
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fullname">Fullname <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="full_name" name="full_name" required="required" class="form-control col-md-7 col-xs-12 text-uppercase"  value="<?php if(isset($users['full_name'])) echo $users['full_name'];?>" <?php if(isset($users['full_name']));?> >
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pool <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="id_pool" class="form-control" required="required">
									<option value="">-- Select One --</option>
									<?php
									foreach ((Array) $arrWorkshop as $key => $val){
									echo '<option value="'.$val['id'].'" '.((isset($users['id_pool']) && $users['id_pool'] == $val['id']) ? 'selected' : '').'>'.$val['name'].'</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Privilege Access <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="id_privilege" class="form-control" required="required">
									<option value="">-- Select One --</option>
									<?php
									foreach ((Array) $arrPrivilege as $key => $val){
									echo '<option value="'.$key.'" '.((isset($users['id_privilege']) && $users['id_privilege'] == $key) ? 'selected' : '').'>'.$val.'</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="radio">
								<label>
									<input type="radio" name="active" value="1" 
									<?php if((isset($users['active']) && $users['active'] == 1) || !isset($users['active'])) echo 'checked';?>> Active
								</label>
								<label>
									<input type="radio" name="active" value="0" <?php if(isset($users['active']) && $users['active'] == 0) echo 'checked';?>> Non Active
								</label>
								</div>
							</div>
						</div>
					  
						<div class="ln_solid"></div>
						
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-success" name="<?php if(isset($users['username'])) echo 'update';?>">Submit</button>
								<?php if(isset($user['username'])){
								echo '
								<button type="submit" class="btn btn-warning" name="reset_pass">Reset Password</button>';
								}
								?>
								<small class="pull-right"><?php if(!isset($users['username'])) echo "* Newly created user's password is express";?></small>
							</div>
						</div>
                    </form>
                </div>  
			</div>                                  
        </div>
	</div>
          
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel tile">
				<div class="x_title">
					<h2>User List</h2>                 
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Username</th>
								<th>Pool</th>
								<th>Full Name</th>
								<th>Privilege</th>                    		              		
								<th>Active</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php         
							foreach ((Array) $data AS $key => $val) { 
								echo '<tr><td>'.$val['username'].'</td>'.          
								'<td>'.$val['name'].'</td>'.
								'<td>'.$val['full_name'].'</td>'.
								'<td>'.$arrPrivilege[$val['id_privilege']].'</td>'.
								'<td>'.($val['active'] == 1 ? 'Yes' : 'No').'</td>'.                    		
								'<td><a href="'.site_url('/Users/index/'.$val['id']).'"><button class="btn btn-success btn-xs">Edit</button></a></td></tr>';
							}
						?>
						</tbody>
					</table>
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
	$(document).ready(function(){
		$('#datatable').dataTable( {
			"order": [[ 1, "asc" ]],
			bFilter: false, paging: false, bInfo: false
		});
	});
</script>
