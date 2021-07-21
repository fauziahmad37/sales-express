<?php

include_once('Admin.php');

class Material extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_material_model');
		$this->load->model('master_uom_model');	
		$this->load->model('master_workshop_model');
	}
	
	function index() {
		$post = $this->input->post();
		if(isset($post['update'])) {
			$res = $this->master_material_model->update($post);
		}
		else if(isset($post['update_proposed'])){
			$this->master_material_model->update_sale_price_proposed($post);
		}
		else if(isset($post['update_approved'])){
			$this->master_material_model->update_sale_price_approved($post);
		}
		else if(isset($post['save'])){
			$res = $this->master_material_model->save($post);
		}						

		$data = $this->master_material_model->data_raw();
		$dataUser = $this->cac_user_model->data();	
		$dataUom = $this->master_uom_model->data();
		$dataWorkshop = $this->master_workshop_model->data();

		$this->load->view('header');
		$this->load->view('material/index_material', Array('data' => $data, 'dataUser' => $dataUser, 'dataUom' => $dataUom, 'dataWorkshop' => $dataWorkshop));
		$this->load->view('footer');
	}
	
	function detail($id = ''){
		$data = $dataUser = $dataUom = array();
		if($id !== ''){
			$data = $this->master_material_model->detail($id);
			$dataUser = $this->cac_user_model->data();
			$dataUom = $this->master_uom_model->data();
			$dataWorkshop = $this->master_workshop_model->data();
		}else{
			$dataUom = $this->master_uom_model->data();
			$dataWorkshop = $this->master_workshop_model->data();
		}
		$this->load->view('header');
		$this->load->view('material/detail_material', Array('data' => $data, 'dataUser' => $dataUser, 'dataUom' => $dataUom, 'dataWorkshop' => $dataWorkshop));
		$this->load->view('footer');
	}
}