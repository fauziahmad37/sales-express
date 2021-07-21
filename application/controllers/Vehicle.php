<?php

include_once('Admin.php');

class Vehicle extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('vehicle_model');	
		$this->load->model('master_pool_model');
		$this->load->model('master_pt_model');
		 $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
	}
	
	function index($id = '') {

		$data = array();

		if($id !== ''){
			$data = $this->vehicle_model->get_detail_car($id);
		}

		

		$this->load->view('header');
		$this->load->view('vehicle/vehicle_registration', array('data' => $data));
		$this->load->view('footer');	
	}
	
	function add_vehicle_registration(){

		$post = $this->input->post();

		$config = array();
	    $config['upload_path']          = './uploads/depan/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|JPG|PNG|pdf|PDF';
        $config['max_size']             = 100000;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;
		$config['file_name'] = $post['no_polisi'];
		$this->load->library('upload', $config, 'foto_depan');
		$upload_foto_depan = $this->foto_depan->do_upload('userfile1');
		$depanFileName = $this->foto_depan->data('file_name');
		if($depanFileName == $post['no_polisi']){
			$depanFileName = 'kosong';
		}
		
		$config = array();
		$config['upload_path'] = './uploads/belakang/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|PNG|pdf|PDF';
		$config['max_size'] = '100000';
		$config['max_width'] = '3000';
		$config['max_height'] = '3000';
		$config['file_name'] = $post['no_polisi'];
		$this->load->library('upload', $config, 'foto_belakang'); // Create custom object for cover upload
		$upload_foto_belakang = $this->foto_belakang->do_upload('userfile2');
		$belakangFileName = $this->foto_belakang->data('file_name');
		if($belakangFileName == $post['no_polisi']){
			$belakangFileName = 'kosong';
		}
		
		$config = array();
		$config['upload_path'] = './uploads/kanan/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|PNG|pdf|PDF';
		$config['max_size'] = '100000';
		$config['max_width'] = '3000';
		$config['max_height'] = '3000';
		$config['file_name'] = $post['no_polisi'];
		$this->load->library('upload', $config, 'foto_kanan'); // Create custom object for cover upload
		$upload_foto_kanan = $this->foto_kanan->do_upload('userfile3');
		$kananFileName = $this->foto_kanan->data('file_name');
		if($kananFileName == $post['no_polisi']){
			$kananFileName = 'kosong';
		}

		$config = array();
		$config['upload_path'] = './uploads/kiri/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|PNG|pdf|PDF';
		$config['max_size'] = '100000';
		$config['max_width'] = '3000';
		$config['max_height'] = '3000';
		$config['file_name'] = $post['no_polisi'];
		$this->load->library('upload', $config, 'foto_kiri'); // Create custom object for cover upload
		$upload_foto_kiri = $this->foto_kiri->do_upload('userfile4');
		$kiriFileName = $this->foto_kiri->data('file_name');
		if($kiriFileName == $post['no_polisi']){
			$kiriFileName = 'kosong';
		}
		
		if ($upload_foto_depan && $upload_foto_belakang && $upload_foto_kanan && $upload_foto_kiri) {
			$foto_depan_data = $this->foto_depan->data();
			$foto_belakang_data = $this->foto_belakang->data();    
			$foto_kanan_data = $this->foto_kanan->data();    
			$foto_kiri_data = $this->foto_kiri->data();    
		} else {

			// Error Occured in one of the uploads
			$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
			$error = array('error' => $this->foto_depan->display_errors());
			$error = array('error' => $this->foto_belakang->display_errors());
			$error = array('error' => $this->foto_kanan->display_errors());
			$error = array('error' => $this->foto_kiri->display_errors());
			echo 'STNK upload Error : ' . $this->foto_depan->display_errors() . '<br/>';
			echo 'TERA upload Error : ' . $this->foto_belakang->display_errors() . '<br/>';
			echo 'KEUR upload Error : ' . $this->foto_kanan->display_errors() . '<br/>';
			echo 'KIUKIO upload Error : ' . $this->foto_kiri->display_errors() . '<br/>';
	    }
				 
				
				
		if(isset($post['save'])){
			$res = $this->vehicle_model->add_new_vehicle($post, $depanFileName, $belakangFileName, $kananFileName, $kiriFileName);
			redirect('Vehicle/list_vehicle');
		}
			
		if(isset($post['update'])){
			$res = $this->vehicle_model->update_vehicle($post, $depanFileName, $belakangFileName, $kananFileName, $kiriFileName);
			redirect('Vehicle/list_vehicle');
		}	
			
			
		
	}
	

	
	function vehicle_approval() {
		$id_workshop = '1';
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		$id_status_invoice = '0,1';
		$_SESSION['id_car'] = false;
		
		$post = $this->input->post();
		
		$data ='1';
		$arrWorkshop ='1';	
		$data = $this->vehicle_model->get_data_for_list_approval();
		
		$this->load->view('/header');
		$this->load->view('/vehicle/vehicle_approval', Array('data' => $data));		
		$this->load->view('/footer');		
	}
	
	function vehicle_approval_detail($id = ''){
		if($id === ''){
			return redirect('/Vehicle/');
		}
		
		$data = $this->vehicle_model->get_detail_car($id);
		
		$this->load->view('/header');
		$this->load->view('/vehicle/vehicle_detail_approval', Array('data' => $data));		
		$this->load->view('/footer');
	}
	
	function detail_car($id = ''){
		if($id === ''){
			return redirect('/Vehicle/');
		}
		
		$data = $this->vehicle_model->get_detail_car($id);
		
		$this->load->view('/header');
		$this->load->view('/vehicle/vehicle_detail_approval', Array('data' => $data));		
		$this->load->view('/footer');
	}
	
	function vehicle_approve_status($id = '') {
		if($id === ''){
			return redirect('/Vehicle/');
		}
		$this->vehicle_model->approve_data_registration_vehicle($id);
		
		$data = $this->vehicle_model->get_data_for_list_approval();
		
		$this->load->view('/header');
		$this->load->view('/vehicle/vehicle_approval', Array('data' => $data));		
		$this->load->view('/footer');		
	}
	
	function vehicle_reject_status($id = '') {
		if($id === ''){
			return redirect('/Vehicle/');
		}
		$this->vehicle_model->reject_data_registration_vehicle($id);
		
		$data = $this->vehicle_model->get_data_for_list_approval();
		
		$this->load->view('/header');
		$this->load->view('/vehicle/vehicle_approval', Array('data' => $data));		
		$this->load->view('/footer');		
	}
	
	function list_vehicle($tipe_view = ''){
		$data = $this->vehicle_model->list_vehicle();
		
		$this->load->view('/header');
		$this->load->view('/vehicle/list_vehicle', Array('data' => $data));		
		$this->load->view('/footer');
	}
	
	
}