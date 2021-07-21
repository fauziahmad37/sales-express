<?php
include_once('Admin.php');
class Request extends Admin {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master_workshop_model');
		$this->load->model('inventory_workshop_model');
		$this->load->model('master_sparepart_model');
		$this->load->model('master_car_model_model');
		$this->load->model('model_sparepart_model');		
		$this->load->model('master_uom_model');
		$this->load->model('Request_model');
	}

	public function index()
	{
		$post = $this->input->post();
		if(isset($post['save'])){
			echo "save --------------------------------------------------------------";
		}
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
		}
		$data = $this->inventory_workshop_model->data($id_workshop);
		$this->load->view('/header');
		$this->load->view('/request/index_request', array('data' => $data, 'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop));
		$this->load->view('/footer');
	}

	//DETAIL REQUEST
	function new_detail($id = ''){
		$data = $dataUser = $dataModelActive = $dataUom = array();
		if($id !== ''){
			$data = $this->Request_model->detail($id);
			$dataUser = $this->cac_user_model->data();
			$dataModel = $this->model_sparepart_model->get_active($id);
			$dataUom = $this->master_uom_model->data();
			$dataWorkshop = $this->master_workshop_model->data();
		} else {
			$dataModel = $this->master_car_model_model->data();
			$dataUom = $this->master_uom_model->data();
			$dataWorkshop = $this->master_workshop_model->data();
		}
		$this->load->view('/header');
		$this->load->view('/request/request_detail', Array('data' => $data));
		$this->load->view('/footer');
	}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */