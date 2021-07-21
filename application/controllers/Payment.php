<?php

include_once('Admin.php');

class Payment extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('payment_model');
		 $this->load->library('dompdf_gen');
	}
	
	function index(){
		$date = date('Y-m-1');
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		$data = $this->payment_model->data($date);

		$this->load->view('/header');
		$this->load->view('/payment/index', array('data' => $data, 'date' => $date));		
		$this->load->view('/footer');		
	}
	
	function add(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->payment_model->save($post);
			if($res){
				redirect('/Payment');
			}
		}

		$this->load->view('/header');
		$this->load->view('/payment/add');
		$this->load->view('/footer');
	}

	function get_autocomplete_doc_number(){
		if (isset($_GET['term'])) {
			
            $result = $this->payment_model->get_autocomplete_doc_number($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                'label' => $row->doc_number,
				'doc_number' => $row->doc_number,
				'nama' => $row->nama,
				'id' => $row->id,
				'amount_terbayar' => $row->amount_terbayar,
				'harga_disepakati' => $row->harga_disepakati,
				'sisa_tagihan' => $row->sisa_tagihan,
				);
                echo json_encode($arr_result);
            }
        }
	}


}