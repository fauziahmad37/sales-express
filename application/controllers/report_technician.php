<?php

include_once('Admin.php');

class Report_technician extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_technician_model');
		$this->load->model('technician_absence_model');
		$this->load->model('master_workshop_model');		
	}
	
	function index() {
		$id = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		$data = $dataAbsen = array();
		$arrWorkshop = $this->master_workshop_model->data();
		$dataReport = $this->technician_absence_model->data_report();		
		if($id !== ''){
			$data = $this->master_technician_model->data(true, $id);
			$dataAbsen = $this->technician_absence_model->data($date, $id);
		}
				
		$this->load->view('header');
		$this->load->view('absence/report_technician', Array('data' => $data, 
			'arrWorkshop' => $arrWorkshop, 'dataAbsen' => $dataAbsen, 'date' => $date, 'id_workshop' => $id, 'dataReport' => $dataReport));
		$this->load->view('footer');	
	}
	
	function edit(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->technician_absence_model->save_or_update($post);
			return print($res);			
		}
	}
}