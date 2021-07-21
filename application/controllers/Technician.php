<?php

include_once('Admin.php');

class Technician extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_technician_model');
		$this->load->model('master_workshop_model');
		$this->load->model('master_work_order_tipe_model');		
	}
	
	function index($id = '') {
		$post = $this->input->post();
		if(isset($post['update']) || isset($post['save']))
		{
			$post['user_id'] = $this->user['id'];
			if(isset($post['update'])) {
				$this->master_technician_model->update($post);
			}
			else {
				$this->master_technician_model->save($post);
			}
			$post = array();
		}
		
		$is_admin = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);
		
		$data = $this->master_technician_model->data(false, ($is_admin ? '' : $this->user['id_workshop']));
		
		$arrWOTipe = $this->master_work_order_tipe_model->data();
		$arrWorkshop = $this->master_workshop_model->data();
		
		$this->load->view('header');
		$this->load->view('technician/index_technician', Array('data' => $data, 
			'arrWOTipe' => $arrWOTipe, 'arrWorkshop' => $arrWorkshop));
		$this->load->view('footer');	
	}
	
	function detail($id = ''){
		if($id !== '') {
			$is_admin = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);
			$data = $this->master_technician_model->detail($id, ($is_admin ? '' : $this->user['id_workshop']));
		} else {
			$data = Array();
		}
		
		$arrWOTipe = $this->master_work_order_tipe_model->data(true);
		$arrWorkshop = $this->master_workshop_model->data(true);
		
		$this->load->view('header');
		$this->load->view('technician/detail_technician', Array('data' => $data, 
			'arrWOTipe' => $arrWOTipe, 'arrWorkshop' => $arrWorkshop));
		$this->load->view('footer');	
	}
}