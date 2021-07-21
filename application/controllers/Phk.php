<?php

include_once('Admin.php');

class Phk extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->model('phk_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('dompdf_gen');
	}

	function index(){
		$data = $this->phk_model->data();
		$this->load->view('header');
		$this->load->view('/phk/index', array('data' => $data));
		$this->load->view('footer');
	}

	function add(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->phk_model->save($post);
			redirect('/Phk/add_car/'.$res.'');
		}

		if(isset($post['send_approval'])){
			$res = $this->phk_model->send_approval($post);
			redirect('/Phk/add_car/'.$res.'');
		}

		if(isset($post['approve'])){
			$res = $this->phk_model->approve($post);
			redirect('/Phk/add_car/'.$res.'');
		}

		$this->load->view('/header');
		$this->load->view('/phk/add');
		$this->load->view('/footer');
	}

	function add_car($id = ''){
		$id = (int)$id;
		$data = $this->phk_model->detail($id);
		$phk_detail = $this->phk_model->phk_detail($id);

		$this->load->view('/header');
		$this->load->view('/phk/add_car', array('data' => $data, 'phk_detail' => $phk_detail));
		$this->load->view('/footer');
	}

	function phk_modal($id = ""){
		$data = array();
		$post = $this->input->post();
		$phk_id = $post['phk_id'];
		
		$this->load->view('/phk/phk_modal', array('phk_id' =>$phk_id));
	}

	function save_add_car($phk_id = ''){
		$post = $this->input->post();
		$data = $this->phk_model->save_add_car($phk_id, $post);
		redirect('/Phk/add_car/'.$phk_id);
	}

	function delete_phk_detail($id = ''){
		$detail_id = $_GET['id'];
		$data = $this->phk_model->delete_phk_detail($detail_id);
		redirect('/Phk/add_car/'.$id);
	}

	function print_phk($id = ''){
		$data = $this->phk_model->data($id);
		$data_detail = $this->phk_model->phk_detail($id);
		$total_price_list = $this->phk_model->total_price_list($id);
		$this->load->view('/phk/print_phk', array('data' => $data, 'data_detail' => $data_detail, 'total_price_list' => $total_price_list));
	}


}