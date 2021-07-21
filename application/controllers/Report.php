<?php

include_once('Admin.php');

class Report extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('report_model');
		$this->load->model('master_pool_model');
	}
	
	function rekap_spj_regular(){
		$pool_id = $this->user['id_pool'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$pool_id = $post['pool_id'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulan']));
		}
		
		$arrPool = $this->master_pool_model->data();		
		$data = $this->report_model->data_rekap_spj_regular($date, $dateakhir, $pool_id);
		
		$this->load->view('/header');
		$this->load->view('/report/rekap_spj', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir, 'arrPool' => $arrPool, 'pool_id' => $pool_id ));		
		$this->load->view('/footer');
	}
	
	function rekap_spj_tiara(){
		$pool_id = $this->user['id_pool'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$pool_id = $post['pool_id'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulan']));
		}
		
		$arrPool = $this->master_pool_model->data();		
		$data = $this->report_model->data_rekap_spj_tiara($date, $dateakhir, $pool_id);
		
		$this->load->view('/header');
		$this->load->view('/report/rekap_spj_tiara', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir, 'arrPool' => $arrPool, 'pool_id' => $pool_id ));		
		$this->load->view('/footer');
	}
	
	function hk(){
		$pool_id = $this->user['id_pool'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$pool_id = $post['pool_id'];
			$date = date('Y-m-1', strtotime($post['bulan']));
			$dateakhir = date('Y-m-t', strtotime($post['bulan']));
		}
		
		$arrPool = $this->master_pool_model->data();		
		$data = $this->report_model->hk($date, $dateakhir, $pool_id);
		
		$this->load->view('/header');
		$this->load->view('/report/hk', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir, 'arrPool' => $arrPool, 'pool_id' => $pool_id ));		
		$this->load->view('/footer');
	}
}

?>