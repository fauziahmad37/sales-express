<?php

include_once('Admin.php');

class Sparepart extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_sparepart_model');
		$this->load->model('master_car_model_model');
		$this->load->model('model_sparepart_model');
		$this->load->model('master_uom_model');
		$this->load->model('master_workshop_model');
		$this->load->model('inventory_workshop_model');
		$this->load->model('faktur_penerimaan_inventory_model');		
		$this->load->model('detail_faktur_penerimaan_inventory_model');
		$this->load->model('faktur_pengambilan_inventory_model');		
		$this->load->model('detail_faktur_pengambilan_inventory_model');
		$this->load->model('MSoq');
	}
	
	function index() {
		$post = $this->input->post();
		if(isset($post['update'])) {
			$res = $this->master_sparepart_model->update($post);
			if($res)
				$this->model_sparepart_model->update($post);
		}
		else if(isset($post['update_proposed'])){
			$this->master_sparepart_model->update_sale_price_proposed($post);
		}
		else if(isset($post['update_approved'])){
			$this->master_sparepart_model->update_sale_price_approved($post);
		}
		else if(isset($post['save'])){
			$res = $this->master_sparepart_model->save($post);
			if($res !== false){
				$post['id'] = $res;
				$this->model_sparepart_model->update($post);
			}
		}						

		$data = $this->master_sparepart_model->data_raw();
		$dataUser = $this->cac_user_model->data();	
		$dataUom = $this->master_uom_model->data();
		$dataWorkshop = $this->master_workshop_model->data();
					
		$this->load->view('header');
		$this->load->view('sparepart/index_sparepart', Array('data' => $data, 'dataUser' => $dataUser, 'dataUom' => $dataUom, 'dataWorkshop' => $dataWorkshop));
		$this->load->view('footer');
	}

	function save_sparepart() {
		$post = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		if(isset($post['update'])) {
			$res = $this->master_sparepart_model->update($post);
			if($res)
				$this->model_sparepart_model->update($post);
		}
		else if(isset($post['update_proposed'])){
			$this->master_sparepart_model->update_sale_price_proposed($post);
		}
		else if(isset($post['update_approved'])){
			$this->master_sparepart_model->update_sale_price_approved($post);
		}
		else if(isset($post['save'])){
			$res = $this->master_sparepart_model->save_master_sparepart($post);
			if($res !== false){
				$post['id'] = $res;
				$this->model_sparepart_model->update($post);
			}
		}						

		$data = $this->master_sparepart_model->data_raw();
		$dataUser = $this->cac_user_model->data();	
		$dataUom = $this->master_uom_model->data();
		$dataWorkshop = $this->master_workshop_model->data();
					
		$this->load->view('header');
		$this->load->view('inventory/index_inventory', Array('arrWorkshop' => $arrWorkshop,'id_inventory' => $id_inventory ,'data' => $data, 'dataUser' => $dataUser, 'dataUom' => $dataUom, 'dataWorkshop' => $dataWorkshop));
		$this->load->view('footer');
	}
	
	
	function detail($id = ''){
		$data = $dataUser = $dataModelActive = $dataUom = array();
		if($id !== ''){
			$data = $this->master_sparepart_model->detail($id);
			$dataUser = $this->cac_user_model->data();
			$dataModel = $this->model_sparepart_model->get_active($id);
			$dataUom = $this->master_uom_model->data();
			$dataWorkshop = $this->master_workshop_model->data();
		} else {
			$dataModel = $this->master_car_model_model->data();
			$dataUom = $this->master_uom_model->data();
			$dataWorkshop = $this->master_workshop_model->data();
		}
		$this->load->view('header');
		$this->load->view('sparepart/detail_sparepart', Array('data' => $data, 'dataUser' => $dataUser, 
			'dataModel' => $dataModel, 'dataUom' => $dataUom, 'dataWorkshop' => $dataWorkshop));
		
		$this->load->view('footer');
	}
	
	function add_master_inventory($id=''){
		$data = Array();
		if($id !== ''){
			$data = $this->inventory_workshop->data($id);
			$dataWorkshop = $this->master_workshop_model->data();
		}else{
			$dataWorkshop = $this->master_workshop_model->data();
		}
		$this->load->view('header');
		$this->load->view('sparepart/add_master_inventory', Array('dataWorkshop' => $dataWorkshop, 'data' => $data));
		$this->load->view('footer');
	}
	
	function get_data_by_internal_code(){
		$post = $this->input->post();
		$internal_code = $post['internal_code'];
		$data = $this->master_sparepart_model->load_data_by_internal_code($internal_code);
		$this->load->view('/sparepart/list_sparepart', Array('data'=> $data));
	}
	
	function cari_sparepart(){
		$post = $this->input->post();
		$data = null;
		if(isset($post['cari_sparepart'])){
			$data = $this->master_sparepart_model->cari_sparepart($post['internal_code']);
			//print_r($data);die();
		}
		
		$this->load->view('header');
		$this->load->view('sparepart/cari_sparepart', Array('data' => $data));
		$this->load->view('footer');
	}
	
}