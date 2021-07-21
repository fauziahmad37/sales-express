<?php
include_once('Admin.php');
class Retur extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->model('master_workshop_model');
		$this->load->model('retur_model');
		$this->load->model('detail_retur_model');
	}

	function index() {
		$date		 = date('Y-m-1');
		$post		 = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		$is_admin	 = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);

		if(isset($post['search'])){
			$id_workshop = $post['id_workshop'];
			$date 		 = date('Y-m-1', strtotime($post['bulan']));
		}
		$data = $this->retur_model->data_retur($date, $id_workshop, $is_admin);

		$this->load->view('/header');
		$this->load->view('/retur/index_retur', Array('id_workshop'=>$id_workshop, 'arrWorkshop'=>$arrWorkshop, 'date'=>$date, 'data'=>$data));		
		$this->load->view('/footer');
	}

	function retur_add(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->retur_model->save($post);
			if($res){
				return redirect('/Retur/detail_retur_add/'.$res);
			}
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$idWorkshop  = $this->user['id_workshop'];
		
		$this->load->view('/header');
		$this->load->view('/retur/retur_add', Array('arrWorkshop'=>$arrWorkshop, 'idWorkshop'=>$idWorkshop));
		$this->load->view('/footer');
	}

	function get_ss(){
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];
		$data = $this->retur_model->get_ss($id_workshop);
		
		$this->load->view('/retur/list_retur', array('data' => $data, 'id_workshop' => $id_workshop));
	}

	function detail_retur_add($id = ''){
		if($id === '')
			return redirect('/Retur/');
		
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->retur_model->save_retur_detail($post);
			redirect(current_url());
			die();
		} else if(isset($post['update'])){
			$res = $this->retur_model->update($post);
			redirect(current_url());
			die();
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->retur_model->get_data_retur($id);
		$data_detail = $this->detail_retur_model->data($id);
		$data_user = $this->cac_user_model->data();
		
		$this->load->view('/header');
		$this->load->view('/retur/add_detail_retur', Array('data' => $data, 
			'data_detail' => $data_detail, 'arrWorkshop' => $arrWorkshop, 'data_user' => $data_user));		
		$this->load->view('/footer');
	}

	function add_new_item_detail_retur($id = ''){
		$data = array();
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];
		$id_faktur = $post['id_faktur'];
		$data_retur = $this->retur_model->get_data_retur($id_faktur);
		
		if($id !== ''){
			$data = $this->detail_retur_model->detail($id);
		}
		
		$this->load->view('/retur/detail_item_retur', array('id_workshop' =>$id_workshop, 'id_faktur' => $id_faktur, 'data' => $data, 'data_retur' => $data_retur));
	}

	function get_available_sparepart(){
		$post = $this->input->post();
		$id_faktur = $post['id_faktur'];
		$id_workshop = $post['id_workshop'];
		$id_wo = $post['id_wo'];		
 		$data = $this->retur_model->get_available_data_sparepart($id_wo);
		$this->load->view('/retur/list_available_sparepart', array('data'=>$data));
	}
	
	function delete_detail_item_retur($id){
		$id_barang = (isset($_GET['id']) ? $_GET['id'] : '');
		if($id === '' || $id_barang === '')
			return redirect('/Retur/index');
		
		$res = $this->retur_model->delete_item($id_barang);
		redirect('/Retur/detail_retur_add/'.$id);
		die();
	}
	
	function publish_retur($id = ''){
		if($id === ''){
			redirect('/Retur/index');
			die();
		}
		$res = $this->retur_model->publish($id);
		
		if($res){
			$data = $this->detail_retur_model->data_item_retur($id);
			$saves = array();
			foreach((Array) $data AS $key => $val){	
				$save = array();
				$save['id_faktur_pengambilan']=$val['id_faktur_pengambilan'];
				$save['id'] = $val['id_inventory'];
				$save['var_qty'] = $val['qty'];
				$save['base_qty'] = $val['base_qty'];				
				$save['nomor_referensi'] = $val['nomor_referensi'];
				$save['harga_satuan_jual_beli'] = $val['harga_satuan'];
				$save['ppn_jual_beli'] = Admin::PPN_VAL; //AUTOMATICALLY WITH PPN 10%
				$save['diskon_jual_beli'] = null; //NULL DISKON FOR NOW
				$save['harga_jual'] = (($val['harga_satuan'] * $val['qty']) * (Admin::PPN_VAL/100))+$val['harga_satuan']; //AUTOMATICALLY WITH PPN 10%
				$save['harga_beli'] = null;
				array_push($saves, $save);
			}
			$this->detail_retur_model->save_log($saves);
		}
		redirect('/Retur/detail_retur_add/'.$id);
		die();
	}
}
?>