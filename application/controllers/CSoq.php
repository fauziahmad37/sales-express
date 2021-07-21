<?php

include_once('Admin.php');

class CSoq extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_sparepart_model');
		$this->load->model('master_car_model_model');
		$this->load->model('model_sparepart_model');
		$this->load->model('master_uom_model');
		$this->load->model('master_workshop_model');
		$this->load->model('inventory_workshop_model');
		$this->load->model('MSoq');
		$this->load->library('dompdf_gen');
	}

	public function tambah_soq($id=''){
		$data = Array();
		if($id !== ''){
			$data = $this->inventory_workshop->data($id);
			$dataWorkshop = $this->master_workshop_model->data();
		}else{
			$dataWorkshop = $this->master_workshop_model->data();
		}
		$this->load->view('header');
		$this->load->view('soq/add_soq', Array('dataWorkshop' => $dataWorkshop, 'data' => $data));
		$this->load->view('footer');
	}

	public function save_soq() {
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
			$res = $this->MSoq->save_master_soq($post);
			if($res){
				return redirect('/Inventory/index/');
			}
		}						

		$data = $this->master_sparepart_model->data_raw();
		$dataUser = $this->cac_user_model->data();	
		$dataUom = $this->master_uom_model->data();
		$dataWorkshop = $this->master_workshop_model->data();
					
		$this->load->view('header');
		$this->load->view('inventory/index_inventory', Array('arrWorkshop' => $arrWorkshop,
			'data' => $data, 
			'dataUser' => $dataUser, 'dataUom' => $dataUom,
			'dataWorkshop' => $dataWorkshop,'id_workshop'=>$id_workshop));
		$this->load->view('footer');
	}

	function get_data_internal_code(){
		$post = $this->input->post();
		$internal_code = $post['internal_code'];
		$data = $this->MSoq->load_internal_code($internal_code);
		$this->load->view('/soq/list_soq', Array('data'=> $data));
	}
	
	function data_soq(){
		$post = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->MSoq->data($id_workshop);
		
		if(isset($post['search'])){
			$id_workshop = $post['id_workshop'];
			$data = $this->MSoq->data($id_workshop);
			//print_r($data);die();
		}
		
		$this->load->view('header');
		$this->load->view('/soq/data_soq', Array('id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'data' => $data));
		$this->load->view('footer');
	}
	
	function print_data($id_workshop = ''){
		if($id_workshop === '')
			return redirect('/CSoq/data_soq');
		
		$dataWorkshop = $this->MSoq->get_data_workshop($id_workshop);
		$dataSoq = $this->MSoq->data($id_workshop);
		
		$this->load->view('/soq/print_soq', Array('dataWorkshop' => $dataWorkshop, 'dataSoq' => $dataSoq));
		
		$paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();
		
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Work_Order.pdf", array('Attachment'=>0));
	}

}