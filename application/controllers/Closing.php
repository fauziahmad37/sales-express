<?php

include_once('Admin.php');

class Closing extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('closing_model');	
		$this->load->model('master_pool_model');
		$this->load->library('dompdf_gen');
	}	
	
	function index() {
		$arrPool = $this->master_pool_model->data();
		$data = $this->closing_model->get_data_for_index_closing();
		$this->load->view('header');
		$this->load->view('closing/closing_index', Array('arrPool' => $arrPool,'data'=>$data));
		$this->load->view('footer');	
	}
	
	function detail() {
		$arrPool = $this->master_pool_model->data();
		$data = $this->closing_model->list_detail_closing();
		$this->load->view('header');
		$this->load->view('closing/closing_detail_index', Array('arrPool' => $arrPool,'data'=>$data));
		$this->load->view('footer');	
	}
	
	function add_closing(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->closing_model->add_closing($post['id_pool'], $post['notes']);
			if($res){
				return redirect('/Closing/');
				die;
			}
		}
		
		$arrPool = $this->master_pool_model->data();
		$this->load->view('header');
		$this->load->view('closing/add_closing', Array('arrPool' => $arrPool));
		$this->load->view('footer');	
	}
	
	
}