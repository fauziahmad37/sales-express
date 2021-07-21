<?php

include_once('Admin.php');

class Skh extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->model('skh_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('dompdf_gen');
	}
	
	function index() {
		$data = $this->skh_model->data();
		$this->load->view('/header');
		$this->load->view('/skh/index', array('data' => $data));
		$this->load->view('/footer');
	}

	function add(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->skh_model->save($post);
			redirect('/Skh/add_car/'.$res.'');
		}

		if(isset($post['send_approval'])){
			$res = $this->skh_model->send_approval($post);
			redirect('/Skh/add_car/'.$res.'');
		}

		if(isset($post['approve'])){
			$res = $this->skh_model->approve($post);
			redirect('/Skh/add_car/'.$res.'');
		}

		$this->load->view('/header');
		$this->load->view('/skh/add');
		$this->load->view('/footer');
	}

	function add_car($id = ''){
		$id = (int)$id;
		$data = $this->skh_model->detail($id);
		$skh_detail = $this->skh_model->skh_detail($id);
		$total_price_list = $this->skh_model->total_price_list($id);

		$this->load->view('/header');
		$this->load->view('/skh/add_car', array('data' => $data, 'skh_detail' => $skh_detail, 'total_price_list' => $total_price_list));
		$this->load->view('/footer');
	}

	function get_autocomplete_customer(){
		if (isset($_GET['term'])) {
			
            $result = $this->skh_model->get_autocomplete_customer($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                'label' => $row->nama,
				'doc_number' => $row->doc_number,
				'nama' => $row->nama,
				'id' => $row->id,
				);
                echo json_encode($arr_result);
            }
        }
	}

	function skh_modal($id = ""){
		$data = array();
		$post = $this->input->post();
		$skh_id = $post['skh_id'];
		
		
		if($id !== ''){
			$data = $this->skh_model->list_skh_modal($skh_id);
		}
		
		$this->load->view('/skh/skh_modal', array('skh_id' =>$skh_id));
	}

	function get_available_car(){
		$post = $this->input->post();
 		$data = $this->skh_model->get_available_car();
		$this->load->view('/skh/list_available_car', array('data'=>$data));
	}

	function save_add_car($skh_id = ''){
		$post = $this->input->post();
		$data = $this->skh_model->save_add_car($skh_id, $post);
		redirect('/Skh/add_car/'.$skh_id);
	}

	function delete_skh_detail($id = ''){
		$detail_id = $_GET['id'];
		$data = $this->skh_model->delete_skh_detail($detail_id);
		redirect('/Skh/add_car/'.$id);
	}

	function print_skh($id = ''){
		$data = $this->skh_model->data($id);
		$total_price_list = $this->skh_model->total_price_list($id);
		$this->load->view('/skh/print_skh', array('data' => $data, 'total_price_list' => $total_price_list));
	}

	function print_skh2($id = ''){
		$data_print_kendaraan = $this->skh_model->data_print_kendaraan($id);
		$total_price_list = $this->skh_model->total_price_list($id);
		$this->load->view('/skh/print_skh2', array('data_print_kendaraan' => $data_print_kendaraan, 'total_price_list' => $total_price_list));
	}
}