<?php

include_once('Admin.php');

class Settings extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_workshop_model');
		$this->load->model('master_main_problem_model');
		$this->load->model('master_pool_model');	
		$this->load->model('master_car_warna_model');	
		$this->load->model('master_car_model_model');
		$this->load->model('master_jenis_car_model');
		$this->load->model('master_uom_model');
	}
	
	function index() {
		$arrWorkshop 	= $this->master_workshop_model->data();
		$arrPool 		= $this->master_pool_model->data();
		$arrMainProblem = $this->master_main_problem_model->data();
		$arrModel 		= $this->master_car_model_model->data();
		$arrWarna 		= $this->master_car_warna_model->data();
		$arrJenis 		= $this->master_jenis_car_model->data();
		$arrUom 		= $this->master_uom_model->data();
		
		$this->load->view('header');
		$this->load->view('settings/index_settings', Array('arrWorkshop' => $arrWorkshop, 'arrPool' => $arrPool, 
			'arrMainProblem' => $arrMainProblem, 'arrModel' => $arrModel, 'arrWarna' => $arrWarna, 'arrJenis' => $arrJenis, 'arrUom' => $arrUom));
		$this->load->view('footer');
	}
	
	function detail_workshop($id = ''){
		$data = array();
		$post = $this->input->post();
		if(isset($post['save'])) {
			$this->master_workshop_model->save($post);
			return redirect('/Settings');
			die();
		} else if(isset($post['update'])){
			$this->master_workshop_model->update($post);
			return redirect('/Settings');
			die();
		}
		
		if($id !== '')
			$data = $this->master_workshop_model->detail($id);
		
		$this->load->view('header');
		$this->load->view('settings/detail_workshop', Array('data' => $data));
		$this->load->view('footer');
	}
	
	function detail_pool($id = ''){
		$data = array();
		$post = $this->input->post();
		if(isset($post['save'])) {
			$this->master_pool_model->save($post);
			return redirect('/Settings');
			die();
		} else if(isset($post['update'])){
			$this->master_pool_model->update($post);
			return redirect('/Settings');
			die();
		}
		
		if($id !== '')
			$data = $this->master_pool_model->detail($id);
		
		$this->load->view('header');
		$this->load->view('settings/detail_pool', Array('data' => $data));
		$this->load->view('footer');
	}
	
	function detail_main_problem($id = ''){
		$data = array();
		$post = $this->input->post();
		if(isset($post['save'])) {
			$this->master_main_problem_model->save($post);
			return redirect('/Settings');
			die();
		} else if(isset($post['update'])){
			$this->master_main_problem_model->update($post);
			return redirect('/Settings');
			die();
		}
		
		if($id !== '')
			$data = $this->master_main_problem_model->detail($id);
		
		$this->load->view('header');
		$this->load->view('settings/detail_main_problem', Array('data' => $data));
		$this->load->view('footer');
	}
	
	function detail_model($id = ''){
		$data = array();
		$post = $this->input->post();
		if(isset($post['save'])) {
			$this->master_car_model_model->save($post);
			return redirect('/Settings');
			die();
		} else if(isset($post['update'])){
			$this->master_car_model_model->update($post);
			return redirect('/Settings');
			die();
		}
		
		$arrJenis = $this->master_jenis_car_model->data();
		if($id !== '')
			$data = $this->master_car_model_model->detail($id);
		
		$this->load->view('header');
		$this->load->view('settings/detail_model', Array('data' => $data, 'arrJenis' => $arrJenis));
		$this->load->view('footer');
	}
	
	function detail_warna($id = ''){
		$data = array();
		$post = $this->input->post();
		if(isset($post['save'])) {
			$this->master_car_warna_model->save($post);
			return redirect('/Settings');
			die();
		} else if(isset($post['update'])){
			$this->master_car_warna_model->update($post);
			return redirect('/Settings');
			die();
		}
		
		if($id !== '')
			$data = $this->master_car_warna_model->detail($id);
		
		$this->load->view('header');
		$this->load->view('settings/detail_warna', Array('data' => $data));
		$this->load->view('footer');
	}
	
	function detail_jenis($id = ''){
		$data = array();
		$post = $this->input->post();
		if(isset($post['save'])) {
			$this->master_jenis_car_model->save($post);
			return redirect('/Settings');
			die();
		} else if(isset($post['update'])){
			$this->master_jenis_car_model->update($post);
			return redirect('/Settings');
			die();
		}
		
		if($id !== '')
			$data = $this->master_jenis_car_model->detail($id);
		
		$this->load->view('header');
		$this->load->view('settings/detail_jenis', Array('data' => $data));
		$this->load->view('footer');
	}
	
	function detail_uom($id = ''){
		$data = array();
		$post = $this->input->post();
		if(isset($post['save'])){
			$this->master_uom_model->save($post);
			return redirect('/Settings');
			die();
		}else if (isset($post['update'])){
			$this->master_uom_model->update($post);
			return redirect('/Settings');
			die();
		}
		
		if ($id !== '')
			$data = $this->master_uom_model->detail($id);
		
		$this->load->view('header');
		$this->load->view('settings/detail_uom', Array('data' => $data));
		$this->load->view('footer');
	}
}
