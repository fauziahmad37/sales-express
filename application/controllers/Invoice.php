<?php

include_once('Admin.php');

class Invoice extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('invoice_work_order_model');
		$this->load->model('master_workshop_model');
		$this->load->model('service_detail_model');	
		$this->load->model('faktur_pengambilan_inventory_model');						
	}

	function index() {
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		$id_status_invoice = '0,1';
		$_SESSION['id_car'] = false;
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
			$id_status_invoice =$post['id_status_invoice'];
		}

		$arrWorkshop = $this->master_workshop_model->data();		
		$data = $this->invoice_work_order_model->data_new($date, $dateakhir, $id_workshop,$id_status_invoice);
		$dataUser = $this->cac_user_model->data();
		
		$this->load->view('/header');
		$this->load->view('/invoice/index_invoice', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir,'id_status_invoice' => $id_status_invoice,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'dataUser' => $dataUser));		
		$this->load->view('/footer');		
	}
	
	function detail($id = ''){
		if($id === '')
			return redirect('/Invoice/');
		
		$data = $this->invoice_work_order_model->detail($id);
		$id_wo = $data['id_wo'];
		$dataPekerjaan = $this->service_detail_model->data($id_wo);
		$dataSupply = $this->faktur_pengambilan_inventory_model->supply_wo($id_wo);		
		$dataUser = $this->cac_user_model->data();
		$arrPrivilege = $this->get_privilege();
		
		$this->load->view('/header');
		$this->load->view('/invoice/detail_invoice', Array('data' => $data, 
			'dataUser' => $dataUser, 'dataPekerjaan' => $dataPekerjaan, 'dataSupply' => $dataSupply, 
			'arrPrivilege' => $arrPrivilege));		
		$this->load->view('/footer');
	}
}