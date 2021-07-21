<?php

include_once('Admin.php');

class Service extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_lts_model');
		$this->load->model('master_jenis_car_model');	
	}
	
	function index() {
		$post = $this->input->post();
		if(isset($post['update'])) {
			$res = $this->master_lts_model->update($post);
		}
		else if(isset($post['update_proposed'])){
			$this->master_lts_model->update_sale_price_proposed($post);
		}
		else if(isset($post['update_approved'])){
			$this->master_lts_model->update_sale_price_approved($post);
		}
		else if(isset($post['save'])){
			$res = $this->master_lts_model->save($post);
		}						

		$data = $this->master_lts_model->data_raw();
		$dataUser = $this->cac_user_model->data();	
					
		$this->load->view('header');
		$this->load->view('service/index_service', Array('data' => $data, 'dataUser' => $dataUser));
		$this->load->view('footer');
	}
	
	function detail($id = ''){
		$data = $dataUser = $dataModelActive = array();
		if($id !== ''){
			$data = $this->master_lts_model->detail($id);
			$dataUser = $this->cac_user_model->data();
		}
		$dataJenis = $this->master_jenis_car_model->data();
		$this->load->view('header');
		$this->load->view('service/detail_service', Array('data' => $data, 'dataUser' => $dataUser,
			'dataJenis' => $dataJenis));
		$this->load->view('footer');
	}
}