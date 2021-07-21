<?php

include_once('Admin.php');

class Customer extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->model('customer_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
	}
	
	function index() {
		$data = $this->customer_model->data();
		$this->load->view('/header');
		$this->load->view('/customer/index', array('data' => $data));
		$this->load->view('/footer');
	}

	function add(){
		$post = $this->input->post();

		if(isset($post['save'])){
			$config = array();
		    $config['upload_path']          = './uploads/ktp/';
	        $config['allowed_types']        = 'gif|jpg|jpeg|png|JPG|PNG|pdf|PDF';
	        $config['max_size']             = 100000;
	        $config['max_width']            = 3000;
	        $config['max_height']           = 3000;
			$config['file_name'] = $post['nik'];
			$this->load->library('upload', $config, 'foto_depan');
			$upload_foto_depan = $this->foto_depan->do_upload('userfile1');
			$depanFileName = $this->foto_depan->data('file_name');
			if($depanFileName == $post['nik']){
				$depanFileName = 'kosong';
			}

			if ($upload_foto_depan) {
				$foto_depan_data = $this->foto_depan->data();
			} else {
				// Error Occured in one of the uploads
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				$error = array('error' => $this->foto_depan->display_errors());
				echo 'KTP upload Error : ' . $this->foto_depan->display_errors() . '<br/>';
		    }

		    $res = $this->customer_model->save($post, $depanFileName);
			redirect('Customer');
		}

		if(isset($post['update'])){
			$config = array();
		    $config['upload_path']          = './uploads/ktp/';
	        $config['allowed_types']        = 'gif|jpg|jpeg|png|JPG|PNG|pdf|PDF';
	        $config['max_size']             = 100000;
	        $config['max_width']            = 3000;
	        $config['max_height']           = 3000;
			$config['file_name'] = $post['nik'];
			$this->load->library('upload', $config, 'foto_depan');
			$upload_foto_depan = $this->foto_depan->do_upload('userfile1');
			$depanFileName = $this->foto_depan->data('file_name');
			if($depanFileName == $post['nik']){
				$depanFileName = 'kosong';
			}

			if ($upload_foto_depan) {
				$foto_depan_data = $this->foto_depan->data();
			} else {
				// Error Occured in one of the uploads
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				$error = array('error' => $this->foto_depan->display_errors());
				echo 'KTP upload Error : ' . $this->foto_depan->display_errors() . '<br/>';
		    }

		    $res = $this->customer_model->update($post, $depanFileName);
			redirect('Customer');
		}


		$data = array();
		$this->load->view('/header');
		$this->load->view('/customer/add', array('data' => $data));
		$this->load->view('/footer');
	}

	function detail($id = ''){
		$data = $this->customer_model->detail($id);

		$this->load->view('header');
		$this->load->view('customer/add', array('data' => $data));
		$this->load->view('footer');
	}

}