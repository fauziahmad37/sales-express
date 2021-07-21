<?php

include_once('Admin.php');

class Savings extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('savings_transaction_model');
		$this->load->model('master_car_model');				
	}
	
	function index() {
		$this->load->view('header');
		$this->load->view('savings/index_savings');
		$this->load->view('footer');	
	}
	
	function detail(){
		$post = $this->input->post();
		if(!isset($post['id_car']))
			return redirect('/Savings');
			
		$id_car = $post['id_car'];
		
		$dataCar = $this->master_car_model->detail($id_car);
		$dataTransaction = $this->savings_transaction_model->data($id_car);
		
		$this->load->view('header');
		$this->load->view('savings/detail_savings', array('dataCar' => $dataCar, 
			'dataTransaction' => $dataTransaction, 'id_car' => $id_car));
		$this->load->view('footer');	
	}
	
	function tanda_terima($id = ''){
		if($id === '')
			return redirect('/Savings');
		
		$data = $this->savings_transaction_model->detail($id);
		
		if(Count($data) < 1)
			return redirect('/Savings');
		
		$id_car = $data['id_car'];
		
		$this->load->view('header');
		$this->load->view('savings/tanda_terima', array('data' => $data, 'id_car' => $id_car));
		$this->load->view('footer');		
	}
	
	function add_savings(){
		if($this->user['id_privilege'] == Admin::ADMINISTRATOR
			|| $this->user['id_privilege'] == Admin::CASHIER
		){
			$post = $this->input->post();
			$id_car = $post['id_car'];
			$id_pool = $post['id_pool'];			
			if(isset($post['save'])){
				$res = $this->savings_transaction_model->save($post);
				if($res == false){
					return redirect('/Savings/detail');				
				} else {
					return redirect('/Savings/tanda_terima/'.$res);
				}
			}
			$this->load->view('/savings/add_savings', Array('id_car'=> $id_car, 'id_pool' => $id_pool));
		}
	}
	
	function get_data_by_no_rangka(){
		$post = $this->input->post();
		$no_rangka = $post['no_rangka'];
		$data = $this->savings_transaction_model->load_data_by_no_rangka($no_rangka);
		$this->load->view('/savings/car_savings_data', Array('data'=> $data));
	}
	
	function get_data_by_no_mesin(){
		$post = $this->input->post();
		$no_mesin = $post['no_mesin'];
		$data = $this->savings_transaction_model->load_data_by_no_mesin($no_mesin);
		$this->load->view('/savings/car_savings_data', Array('data'=> $data));
	}
	
	function get_data_by_no_polisi(){
		$post = $this->input->post();
		$no_polisi = $post['no_polisi'];
		$data = $this->savings_transaction_model->load_data_by_no_polisi($no_polisi);
		$this->load->view('/savings/car_savings_data', Array('data'=> $data));
	}
	
	function get_data_by_no_pintu(){
		$post = $this->input->post();
		$no_pintu = $post['no_pintu'];
		$data = $this->savings_transaction_model->load_data_by_no_pintu($no_pintu);
		$this->load->view('/savings/car_savings_data', Array('data'=> $data));
	}
	
	function etaxi_show_tab(){
		$post = $this->input->post();
		$data = '';
		if(isset($post['cek'])=='cek'){
			$this->load->model('Api_etaxi_model');
			$data = $this->Api_etaxi_model->show_tab_etaxi($post['no_pintu']);
			//print_r($data);die();
		}
		
		$this->load->view('header');
		$this->load->view('savings/show_tab_etaxi', array('data' => $data));
		$this->load->view('footer');		
	}
	
	function history_tabungan_sparepart(){
		$post = $this->input->post();
		$data = '';
		if(isset($post['cek'])=='cek'){
			$this->load->model('Api_etaxi_model');
			$data = $this->Api_etaxi_model->show_tab_etaxi($post['no_pintu']);
			//print_r($data);die();
		}
		
		$this->load->view('header');
		$this->load->view('savings/history_tabungan_sparepart', array('data' => $data));
		$this->load->view('footer');	
	}
}