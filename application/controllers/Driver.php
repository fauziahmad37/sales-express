<?php

include_once('Admin.php');

class Driver extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->model('master_pool_model');
		$this->load->model('driver_model');
		$this->load->model('seragam_model');
		$this->load->model('jaminan_model');
		$this->load->model('spj_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
	}
	
	function index() {
		
		$post = $this->input->post();
		$data_edit = array();
		
		if(isset($post['edit'])){
			$data_edit = $this->driver_model->registration_detail($post['edit']);
		}
		
		if(isset($post['update'])){
			$update = $this->driver_model->update_registration($post);
			
			?>
				<script type="text/javascript">
					alert("Data Berhasil disimpan... Silahkan Lakukan Deposit sebesar Rp. 500.000,-");
					window.location = "<?php echo site_url('/Driver/list_driver_registration');?>";
				</script>
			<?php
			die();
		}
		
		if(isset($post['save'])){
			
			$config = array();
			$config['upload_path']    = './uploads/photo/';
			$config['allowed_types']  = 'gif|jpg|jpeg|png|pdf|doc';
			$config['max_size']       = 10000;
			$config['max_width']      = 3000;
			$config['max_height']     = 3000;
			$config['file_name'] 	  = 'NIK_'.$post['ktp_number'];
			$this->load->library('upload', $config, 'photoupload');
			$upload_photo = $this->photoupload->do_upload('userfile');
			$path_photo = $this->photoupload->data('file_name');
			
			$config = array();
			$config['upload_path']   = './uploads/ktp/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
			$config['max_size']      = 10000;
			$config['max_width']     = 3000;
			$config['max_height']    = 3000;
			$config['file_name'] 	  = 'KTP_'.$post['ktp_number'];
			$this->load->library('upload', $config, 'ktpupload');
			$upload_ktp = $this->ktpupload->do_upload('userfile2');
			$path_ktp = $this->ktpupload->data('file_name');
			
			$config = array();
			$config['upload_path']   = './uploads/sim/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
			$config['max_size']      = 10000;
			$config['max_width']     = 3000;
			$config['max_height']    = 3000;
			$config['file_name'] 	  = 'SIM_'.$post['sim_number'];
			$this->load->library('upload', $config, 'simupload');
			$upload_sim = $this->simupload->do_upload('userfile3');
			$path_sim = $this->simupload->data('file_name');
			
			$config = array();
			$config['upload_path']   = './uploads/rekening/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
			$config['max_size']      = 10000;
			$config['max_width']     = 3000;
			$config['max_height']    = 3000;
			$config['file_name'] 	  = 'REK_'.$post['bank_account_number'];
			$this->load->library('upload', $config, 'rekupload');
			$upload_rek = $this->rekupload->do_upload('userfile4');
			$path_rek = $this->rekupload->data('file_name');
			
			$config = array();
			$config['upload_path']   = './uploads/domisili/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
			$config['max_size']      = 10000;
			$config['max_width']     = 3000;
			$config['max_height']    = 3000;
			$config['file_name'] 	  = 'DOMISILI-'.$post['domisili_number'];
			$this->load->library('upload', $config, 'domisiliupload');
			$upload_domisili = $this->domisiliupload->do_upload('userfile5');
			$path_domisili = $this->domisiliupload->data('file_name');
			
			if (!$upload_photo && !$upload_ktp && !$upload_sim && !$upload_rek && !$upload_domisili){
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				$error = array('error' => $this->photoupload->display_errors());
				$error = array('error' => $this->ktpupload->display_errors());
				$error = array('error' => $this->simupload->display_errors());
				$error = array('error' => $this->rekupload->display_errors());
				$error = array('error' => $this->domisiliupload->display_errors());
				echo 'PHOTO upload Error	: ' . $this->photoupload->display_errors() . '<br/>';
				echo 'KTP upload Error 		: ' . $this->ktpupload->display_errors() . '<br/>';
				echo 'SIM upload Error 		: ' . $this->simupload->display_errors() . '<br/>';
				echo 'REK upload Error 		: ' . $this->rekupload->display_errors() . '<br/>';
				echo 'DOMISILI upload Error : ' . $this->domisiliupload->display_errors() . '<br/>';
				
			} else {
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				$error = array('error' => $this->photoupload->display_errors());
				$error = array('error' => $this->ktpupload->display_errors());
				$error = array('error' => $this->simupload->display_errors());
				$error = array('error' => $this->rekupload->display_errors());
				$error = array('error' => $this->domisiliupload->display_errors());
				
				$photo_data 	= $this->photoupload->data();
				$ktp_data   	= $this->ktpupload->data();
				$sim_data   	= $this->simupload->data();
				$rek_data   	= $this->rekupload->data();
				$domisili_data  = $this->domisiliupload->data();
				
				
				$res = $this->driver_model->save_registration($post, $path_photo, $path_ktp, $path_sim, $path_rek, $path_domisili);
				
				//die();
				
				if($res){
					?>
				<script type="text/javascript">
					alert("Data Berhasil disimpan... Silahkan Lakukan Deposit.");
					window.location = "<?php echo site_url('/Driver/list_driver_registration');?>";
				</script>
				<?php
					die();
				}
				
				$data_edit = $post;
				
			}
		}
		
		
		$arrPool = $this->master_pool_model->data();
		$arrCity = $this->driver_model->city();
		
		$this->load->view('/header');
		$this->load->view('/driver/registration_driver', Array('arrPool' => $arrPool, 'arrCity' => $arrCity, 'data_edit' => $data_edit));
		$this->load->view('/footer');
	}
	
	function list_driver_registration(){
		
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		$id_status_invoice = "On Process','Rejected','Active";
		
		
		$post = $this->input->post();
		
		if(isset($post['search']))
		{
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
			$id_status_invoice = $post['id_status_invoice'];
		}
		
		
		$data = $this->driver_model->list_driver_registration($date, $dateakhir, $id_status_invoice);
		
		$this->load->view('/header');
		$this->load->view('/driver/list_driver_registration', Array('data' => $data, 'date' => $date, 'date', 'dateakhir' => $dateakhir, 
			'id_status_invoice' => $id_status_invoice));
		$this->load->view('/footer');
	}
	
	function view_detail_registration_driver($id=''){
		$post = $this->input->post();
		
		if(isset($post['approve'])){
			$res = $this->driver_model->approve($post['approve']);
			if($res){
				return redirect('/Driver/list_driver_registration/'.$res);
				die();
			}
		}else if(isset($post['reject'])){
			$res = $this->driver_model->reject($post['reject']);
			if($res){
				?>
				<script type="text/javascript">
					alert("Data Driver Berhasil di Reject.");
					window.location = "<?php echo site_url('/Driver/list_driver_registration');?>";
				</script>
				<?php
				die();
			}
		}
	
		$data = $this->driver_model->registration_detail($id);
		
		$this->load->view('/header');
		$this->load->view('/driver/view_detail_registration_driver', Array('data' => $data));
		$this->load->view('/footer');
	}
	
	function detail_driver($id=''){
		$post = $this->input->post();
	
		$data = $this->driver_model->detail_driver($id);
		$arrSpj = $this->spj_model->spj_driver($id);
		$arrJaminan = $this->jaminan_model->jaminan_driver($id);
		$arrSeragam = $this->seragam_model->pembayaran_seragam_driver($id);
		
		$this->load->view('/header');
		$this->load->view('/driver/driver', Array('data' => $data, 'arrSpj' => $arrSpj, 'arrJaminan' => $arrJaminan, 'arrSeragam' => $arrSeragam));
		$this->load->view('/footer');
	}
	
	function list_driver(){
		
		$id_status_invoice = "Active','Inactive";
		
		$post = $this->input->post();
		
		if(isset($post['search']))
		{
			$id_status_invoice = $post['id_status_invoice'];
		}
			
		$data = $this->driver_model->list_driver($id_status_invoice);
		
		$this->load->view('/header');
		$this->load->view('/driver/list_driver', Array('data' => $data,
			'id_status_invoice' => $id_status_invoice));
		$this->load->view('/footer');
	}
	
	function cetak_kip($id = ''){
		if($id === '')
			return redirect('/list_driver');
		
		$data = $this->driver_model->get_data_driver($id);
		
		
		$this->load->view('/driver/print_kip', Array('data' => $data));
	}
	
}