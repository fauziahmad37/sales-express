<?php
include_once('Admin.php');

class Pbag extends Admin {
	
	function __construct() {
		parent::__construct();		
		$this->load->model('master_workshop_model');
		$this->load->model('pbag_model');
	}

	function index(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		// print_r($date);die;
		
		$data = array();		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->pbag_model->data($date, $id_workshop);
		$data_user = $this->cac_user_model->data();
	
		$this->load->view('/header');
		$this->load->view('/pbag/index_pbag', Array('data' => $data,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'date' => $date,
			'data_user' => $data_user));		
		$this->load->view('/footer');
	}
	
	function new_pbag(){
		$post = $this->input->post();
		$data = array();
		
		if(isset($post['save'])){
		
			// print_r($post);die;
			$res = $this->pbag_model->new_pbag($post);
			if($res){
				return redirect('/Pbag/add_sparepart_pbag/'.$res);
			}
			
		}
		
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		$workshop_req = $this->pbag_model->get_workshop_req_name($id_workshop);
		
		//print_r($workshop_name_req);die;
			
		$this->load->view('/header');
		$this->load->view('/pbag/new_pbag', Array('arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'data' => $data, 'workshop_req' => $workshop_req));		
		$this->load->view('/footer');
	}
	
	function add_sparepart_pbag($id = ''){
		
		if($id === '')
			return redirect('/Inventory/pengambilan');
		
		$post = $this->input->post();
		
		if(isset($post['save'])){
			$res = $this->pbag_model->save_sparepart_req($post);
			redirect(current_url());
			die();
		} else if(isset($post['update'])){
			$res = $this->pbag_model->update_sparepart_req($post);
			redirect(current_url());
			die();
		}
		
		$data = $this->pbag_model->get_pbag($id);
		$pbag_detail = $this->pbag_model->get_pbag_detail($id);
		
		$this->load->view('/header');
		$this->load->view('/pbag/add_sparepart_pbag', Array('data' => $data, 'pbag_detail' => $pbag_detail));		
		$this->load->view('/footer');
	}
	
	function list_sparepart_modal($id = ""){
		$data = array();
		$post = $this->input->post();
		$pbag_id = $post['pbag_id'];
		$pbag_number = $this->pbag_model->get_pbag($pbag_id);
		
		$id_workshop = $post['id_workshop'];			
		
		if($id !== ''){
			$data = $this->pbag_model->list_sparepart_modal($id_workshop);
		}
		
		$this->load->view('/pbag/list_sparepart_modal', array('id_workshop' =>$id_workshop, 'pbag_id' => $pbag_id,'data' => $data, 
			'pbag_number' => $pbag_number));
	}
	
	function get_available_sparepart(){
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];		
 		$data = $this->pbag_model->get_available_sparepart($id_workshop);
		$this->load->view('/pbag/list_available_sparepart', array('data'=>$data));
	}
	
	function delete_pbag_detail($id = ''){
		
		$id_barang = (isset($_GET['id']) ? $_GET['id'] : '');
		if($id === '' || $id_barang === '')
			return redirect('/Pabg/index');
		
		$res = $this->pbag_model->delete($id_barang);
		redirect('/Pbag/add_sparepart_pbag/'.$id);
		die();
	}
	
	function approve_req_pbag($id = ''){
		$id = (isset($_GET['id']) ? $_GET['id'] : '');
		if($id === '' || $id === '')
			return redirect('/Pabg/index');
		
		$res = $this->pbag_model->approve_req_pbag($id);
		redirect('/Pbag/add_sparepart_pbag/'.$id);
		die();
	}
	
	function proses_transfer($id = ''){
		$id = (isset($_GET['id']) ? $_GET['id'] : '');
		if($id === '' || $id === '')
			return redirect('/Pabg/index');
		$res = $this->pbag_model->proses_transfer($id);
		if($res){
			$data = $this->pbag_model->get_qty_cost_transfer($id);
			$saves = array();
			foreach((Array) $data AS $key => $val){
				$save = array();
				$save['id_inventory'] = $val['inventory_id_trf'];
				$save['var_qty'] = -$val['qty_req'];
				$save['base_qty'] = $val['qty'];
				$save['nomor_referensi'] = $val['pbag_number'];
				$save['harga_satuan_jual_beli'] = $val['cost'];
				$save['ppn_jual_beli'] = null;
				$save['diskon_jual_beli'] = null;
				$save['harga_jual'] = $val['sale_price'];
				$save['input_by'] = $this->user['id'];
				$save['created_dt'] = date('Y-m-d H:i:s');
				array_push($saves, $save);
			}
			$insert = $this->pbag_model->insert_log_inventory_stock($saves);
			//print_r($insert);die;
		}
		redirect('/Pbag/add_sparepart_pbag/'.$id);
		die();
	}
	
	function proses_receive($id = ''){
		$id = (isset($_GET['id']) ? $_GET['id'] : '');
		if($id === '' || $id === '')
			return redirect('/Pabg/index');		
		
		$res = $this->pbag_model->proses_receive($id);
		
		if($res){
			$data = $this->pbag_model->get_qty_cost_receive($id);
			$saves = array();
			foreach((Array) $data AS $key => $val){
				$save = array();
				$save['id_inventory'] = $val['inventory_id_req'];
				$save['var_qty'] = $val['qty_req'];
				$save['base_qty'] = $val['qty'];
				$save['nomor_referensi'] = $val['pbag_number'];
				$save['harga_satuan_jual_beli'] = $val['cost'];
				$save['ppn_jual_beli'] = null;
				$save['diskon_jual_beli'] = null;
				$save['harga_jual'] = $val['sale_price'];
				$save['input_by'] = $this->user['id'];
				$save['created_dt'] = date('Y-m-d H:i:s');
				array_push($saves, $save);
			}
			$insert = $this->pbag_model->insert_log_inventory_stock($saves);
			//print_r($insert);die;
		}
		redirect('/Pbag/add_sparepart_pbag/'.$id);
		die();
	}
}
?>