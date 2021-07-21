<?php

include_once('Admin.php');

class Inventory extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_workshop_model');
		$this->load->model('faktur_penerimaan_inventory_model');	
		$this->load->model('inventory_workshop_model');		
		$this->load->model('detail_faktur_penerimaan_inventory_model');
		$this->load->model('faktur_pengambilan_inventory_model');		
		$this->load->model('detail_faktur_pengambilan_inventory_model');
		$this->load->model('MSoq');
        $this->load->library('dompdf_gen');
	}

	function index() {
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
		}
				
		$data = $this->inventory_workshop_model->data($id_workshop);
		
		$this->load->view('/header');
		$this->load->view('/inventory/index_inventory', Array('data' => $data,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop));		
		$this->load->view('/footer');		
	}
	
	function penerimaan(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');

		$data = array();		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->faktur_penerimaan_inventory_model->data($date, $id_workshop);
		$data_user = $this->cac_user_model->data();
		
		$this->load->view('/header');
		$this->load->view('/inventory/index_penerimaan', Array('data' => $data,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'date' => $date,
			'data_user' => $data_user));		
		$this->load->view('/footer');
	}
	
	function penerimaan_add(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->faktur_penerimaan_inventory_model->save($post);
			if($res)
				return redirect('/Inventory/detail_add/'.$res);
		}	
	
		$arrWorkshop = $this->master_workshop_model->data();
		$data_user = $this->cac_user_model->data();
		
		$this->load->view('/header');
		$this->load->view('/inventory/add_faktur', Array('arrWorkshop' => $arrWorkshop));		
		$this->load->view('/footer');
	}
	
	function detail_add($id = ''){
		if($id === '')
			return redirect('/Inventory/penerimaan');
		
		$post = $this->input->post();
		if(isset($post['save'])){
			//SAVE OR UPDATE THE INVENTORY PART LOC FIRST
			$res = $this->inventory_workshop_model->save_or_update($post);
			if($res){
				$post['id_inventory'] = $res;
				$this->detail_faktur_penerimaan_inventory_model->save($post);
				redirect(current_url());
				die();
			}
		} else if(isset($post['update'])){
			//SAVE OR UPDATE THE INVENTORY PART LOC FIRST
			$res = $this->inventory_workshop_model->save_or_update($post);
			if($res){
				$post['id_inventory'] = $res;
				$this->detail_faktur_penerimaan_inventory_model->update($post);
				redirect(current_url());
				die();
			}
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->faktur_penerimaan_inventory_model->detail($id);
		$data_detail = $this->detail_faktur_penerimaan_inventory_model->data($id);
		$data_user = $this->cac_user_model->data();
		
		$this->load->view('/header');
		$this->load->view('/inventory/add_detail_faktur', Array('data' => $data, 
			'data_detail' => $data_detail, 'arrWorkshop' => $arrWorkshop, 'data_user' => $data_user));		
		$this->load->view('/footer');	
	}
	
	function add_new_item_detail($id = ''){
		$data = array();
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];
		$id_faktur = $post['id_faktur'];	
		
		if($id !== ''){
			$data = $this->detail_faktur_penerimaan_inventory_model->detail($id);
		}
				
		$this->load->view('/inventory/detail_item', array('id_workshop' =>$id_workshop, 
			'id_faktur' => $id_faktur, 'data' => $data));
	}
	
	function get_sparepart(){
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];		
 		$data = $this->inventory_workshop_model->get_all_data_sparepart($id_workshop);
 		
		$this->load->view('/inventory/list_sparepart', array('data'=>$data));
	}
	
	function get_material(){
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];		
 		$data = $this->inventory_workshop_model->get_all_data_material($id_workshop);
 		
		$this->load->view('/inventory/list_material', array('data'=>$data));
	}
	
	function update_detail_penerimaan(){
		$post = $this->input->post();
		$res = $this->faktur_penerimaan_inventory_model->update($post);		
		return $res;
	}
	
	function publish_penerimaan($id = ''){
		if($id === ''){
			redirect('/Inventory/penerimaan');
			die();
		}
		//UPDATE STATUS FAKTUR PENERIMAAN INVENTORY
		$res = $this->faktur_penerimaan_inventory_model->publish($id);
		if($res){
			//DETAIL DATA PART DI DETAIL_FAKTUR_PENERIMAAN_INVENTORY
			$data = $this->detail_faktur_penerimaan_inventory_model->data_beli($id);
			$saves = array();
			foreach((Array) $data AS $key => $val){
				$save = array();
				$save['id'] = $val['id_inventory'];
				$save['var_qty'] = $val['qty'];
				$save['base_qty'] = $val['base_qty'];				
				$save['nomor_referensi'] = $val['nomor_referensi'];
				$save['harga_satuan_jual_beli'] = $val['harga_satuan'];
				$save['ppn_jual_beli'] = $val['ppn'];
				$save['diskon_jual_beli'] = $val['diskon'];												
				$subtotal = ($val['harga_satuan'] * $val['qty']);
				$subtotal = ($subtotal - ($subtotal * $val['diskon'] / 100)); //MINUS DISKON
				$subtotal = ($subtotal + ($subtotal * $val['ppn'] / 100)); //PLUS PPN
				$save['harga_beli'] = $subtotal;	
				$save['harga_jual'] = null;			
				array_push($saves, $save);
			}
			$this->inventory_workshop_model->update_inventory_stock($saves);
		}
		redirect('/Inventory/penerimaan');
		die();
	}
	
	function delete_detail_penerimaan_barang($id = ''){
		$id_barang = (isset($_GET['id']) ? $_GET['id'] : '');
		if($id === '' || $id_barang === '')
			return redirect('/Inventory/penerimaan');
		
		$res = $this->detail_faktur_penerimaan_inventory_model->delete($id_barang);
		redirect('/Inventory/detail_add/'.$id);
		die();
	}
	
// =========================================================== PENGAMBILAN STOK ===============================================================
	function pengambilan(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');

		$data = array();		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->faktur_pengambilan_inventory_model->data($date, $id_workshop);
		$data_user = $this->cac_user_model->data();
	
		$this->load->view('/header');
		$this->load->view('/inventory/index_pengambilan', Array('data' => $data,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'date' => $date,
			'data_user' => $data_user));		
		$this->load->view('/footer');
	}
	
	function pengambilan_add(){
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->faktur_pengambilan_inventory_model->save($post);
			if($res){
				return redirect('/Inventory/detail_pengambilan_add/'.$res);
			}
		}
	
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		
		$this->load->view('/header');
		$this->load->view('/inventory/add_faktur_pengambilan', Array('id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop));		
		$this->load->view('/footer');		
	}
	
	function detail_pengambilan_add($id = ''){
		if($id === '')
			return redirect('/Inventory/pengambilan');
		
		$post = $this->input->post();
		if(isset($post['save'])){
			$res = $this->detail_faktur_pengambilan_inventory_model->save($post);
			redirect(current_url());
			die();
		} else if(isset($post['update'])){
			$res = $this->detail_faktur_pengambilan_inventory_model->update($post);
			redirect(current_url());
			die();
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->faktur_pengambilan_inventory_model->detail($id);
		$data_detail = $this->detail_faktur_pengambilan_inventory_model->data($id);
		$data_user = $this->cac_user_model->data();
		
		$this->load->view('/header');
		$this->load->view('/inventory/add_detail_faktur_pengambilan', Array('data' => $data, 
			'data_detail' => $data_detail, 'arrWorkshop' => $arrWorkshop, 'data_user' => $data_user));		
		$this->load->view('/footer');	
	}
	
	function get_wo(){
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];
		$this->load->model('work_order_model');
		$data = $this->work_order_model->get_wo_aktif($id_workshop);
		
		$this->load->view('/inventory/list_wo', array('data' => $data, 'id_workshop' => $id_workshop));
	}
	
	function add_new_item_detail_pengambilan($id = ''){
		$data = array();
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];
		$id_faktur = $post['id_faktur'];			
		
		if($id !== ''){
			$data = $this->detail_faktur_pengambilan_inventory_model->detail($id);
		}
		
		$this->load->view('/inventory/detail_item_pengambilan', array('id_workshop' =>$id_workshop, 'id_faktur' => $id_faktur, 'data' => $data));
	}
	
	function get_available_sparepart(){
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];		
 		$data = $this->inventory_workshop_model->get_available_data_sparepart($id_workshop);
		$this->load->view('/inventory/list_available_sparepart', array('data'=>$data));
	}
	
	function get_available_material(){
		$post = $this->input->post();
		$id_workshop = $post['id_workshop'];		
 		$data = $this->inventory_workshop_model->get_available_data_material($id_workshop);
		$this->load->view('/inventory/list_available_material', array('data'=>$data));
	}
	
	function publish_pengambilan($id = ''){
		if($id === ''){
			redirect('/Inventory/pengambilan');
			die();
		}
		$res = $this->faktur_pengambilan_inventory_model->publish($id);
		if($res){
			$data = $this->detail_faktur_pengambilan_inventory_model->data_jual($id);
			$saves = array();
			foreach((Array) $data AS $key => $val){
				$save = array();
				$save['id'] = $val['id_inventory'];
				$save['var_qty'] = -$val['qty'];
				$save['base_qty'] = $val['base_qty'];				
				$save['nomor_referensi'] = $val['nomor_referensi'];
				$save['harga_satuan_jual_beli'] = $val['harga_satuan'];
				$save['ppn_jual_beli'] = Admin::PPN_VAL; //AUTOMATICALLY WITH PPN 10%
				$save['diskon_jual_beli'] = null; //NULL DISKON FOR NOW
				$save['harga_jual'] = (($val['harga_satuan'] * $val['qty']) * (Admin::PPN_VAL/100))+$val['harga_satuan']; //AUTOMATICALLY WITH PPN 10%
				$save['harga_beli'] = ($val['qty']*$val['cost_lalu']);
				array_push($saves, $save);
			}
			// print_r($saves);die;
			$this->inventory_workshop_model->update_inventory_stock($saves);
		}
		redirect('/Inventory/detail_pengambilan_add/'.$id);
		die();
	}
	
	function delete_detail_pengambilan_barang($id = ''){
		$id_barang = (isset($_GET['id']) ? $_GET['id'] : '');
		if($id === '' || $id_barang === '')
			return redirect('/Inventory/pengambilan');
		
		$res = $this->detail_faktur_pengambilan_inventory_model->delete($id_barang);
		redirect('/Inventory/detail_pengambilan_add/'.$id);
		die();
	}
	
	function log_inventory(){
		$this->load->model('log_inventory_stock_model');
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$data = array();		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->log_inventory_stock_model->data($date, $id_workshop);
		$data_user = $this->cac_user_model->data();
		$this->load->view('/header');
		$this->load->view('/inventory/log_inventory', Array('data' => $data,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'date' => $date,
			'data_user' => $data_user));		
		$this->load->view('/footer');
	}

	function list_rr_eproc(){
		$this->load->model('log_inventory_stock_model');
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$data = array();		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->inventory_workshop_model->data_raw_eproc();
		$data_user = $this->cac_user_model->data();
		$this->load->view('/header');
		$this->load->view('/inventory/list_rr_eproc', Array('data' => $data,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'date' => $date,
			'data_user' => $data_user));		
		$this->load->view('/footer');
	}

	function list_detail_rr_eproc($rr_id){
		$this->load->model('log_inventory_stock_model');
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$data = array();		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
            $rr_id = $post['rr_id'];
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->inventory_workshop_model->data_raw_detail_rr_eproc($rr_id);
		$data_user = $this->cac_user_model->data();
		$this->load->view('/header');
		$this->load->view('/inventory/list_detail_rr_eproc', Array('data' => $data,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'date' => $date,
			'data_user' => $data_user));		
		$this->load->view('/footer');
	}

	function list_stock_sparepart(){
		$post = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
		}
		$data = $this->inventory_workshop_model->data($id_workshop);
		$this->load->view('/header');
		$this->load->view('/inventory/list_stock_sparepart', array('data' => $data, 'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop));
		$this->load->view('/footer');
	}

	function new_request($id = ''){
		$data = $dataUser = $dataModelActive = $dataUom = array();
		if($id !== ''){
			$data = $this->inventory_workshop_model->detail_request($id);
		}
		$this->load->view('/header');
		$this->load->view('/inventory/new_request', Array('data' => $data));
		$this->load->view('/footer');
	}

	function list_transfer_sparepart(){
		// $post = $this->input->post();
		// if(isset($post['transfer'])){
		// 	$res = $this->inventory_workshop_model->save_transfer($post);
		// }else if(isset($post['receive'])){
		// 	$res = $this->inventory_workshop_model->save_receive($post);
		// }
		$id_workshop = $this->user['id_workshop'];
		$data = $this->inventory_workshop_model->data_raw_transfer_between_warehouse($id_workshop);
		$this->load->view('/header');
		$this->load->view('/inventory/list_approve_transfer', array('data' => $data));
		$this->load->view('/footer');
	}

	function detail_transfer($id = ''){
		$post = $this->input->post();
		if(isset($post['transfer'])){
			$id = $this->inventory_workshop_model->save_transfer($post);
		}
		if($id !== ''){
			$data = $this->inventory_workshop_model->detail_transfer_between_warehouse($id);
		}

		$this->load->view('/header');
		$this->load->view('/inventory/detail_request_transfer', array('data' => $data));
		$this->load->view('/footer');
	}

	function list_request_sparepart(){
		$post = $this->input->post();
		if(isset($post['request'])){
			$res = $this->inventory_workshop_model->save_request($post);
		}
		$id_workshop = $this->user['id_workshop'];
		$data = $this->inventory_workshop_model->data_raw_request_between_warehouse($id_workshop);
		$this->load->view('/header');
		$this->load->view('/inventory/list_request_sparepart', array('data' => $data));
		$this->load->view('/footer');
	}

	 function detail_receipt($id = ''){
    	$post = $this->input->post();
    	if(isset($post['receive'])){
			// print_r($post);die;
    		$id = $this->inventory_workshop_model->save_receive($post);
    	}
    	
    	if($id !== ''){
    		$data = $this->inventory_workshop_model->detail_receipt_between_warehouse($id);

    	}

		$this->load->view('/header');
		$this->load->view('/inventory/detail_receipt', array('data' => $data));
		$this->load->view('/footer');
    }
        
    function  print_surat_jalan($id){
        $data = $this->inventory_workshop_model->detail_transfer_between_warehouse($id);
        $user_data = $this->inventory_workshop_model->data_raw_list_user_per_workshop($id);
       // $data['title'] = 'Cetak PDF Barang'; //judul title
        
        $this->load->view('/inventory/print_surat_jalan', array('data' => $data, 'user_data' => $user_data));
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Surat_Perintah_Jalan.pdf", array('Attachment'=>0));
    }

    function  print_surat_jalan_pengiriman($id){
        $data = $this->inventory_workshop_model->detail_transfer_between_warehouse($id);
        $user_data = $this->inventory_workshop_model->data_raw_list_user_per_workshop($id);
       // $data['title'] = 'Cetak PDF Barang'; //judul title
        
        $this->load->view('/inventory/print_surat_jalan_pengiriman', array('data' => $data, 'user_data' => $user_data));
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Surat_Perintah_Jalan_Pengiriman.pdf", array('Attachment'=>0));
    }

    function  print_surat_penerimaan($id){
        $data = $this->inventory_workshop_model->detail_transfer_between_warehouse($id);
        $user_data = $this->inventory_workshop_model->data_raw_list_user_per_workshop($id);
       
        $this->load->view('/inventory/print_surat_penerimaan', array('data' => $data, 'user_data' => $user_data));
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Surat_Penerimaan_Barang.pdf", array('Attachment'=>0));
    }

    function index_manajemen_loc_part(){
    	$post = $this->input->post();
    	if(isset($post['simpan'])){
    		$res = $this->inventory_workshop_model->update_loc_part($post);
    	}

    	$id_workshop = $this->user['id_workshop'];
    	$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->inventory_workshop_model->data($id_workshop);

    	$this->load->view('header');
    	$this->load->view('inventory/index_manajemen_loc_part', Array('id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'data' => $data));
    	$this->load->view('footer');
    }

    function detail_manajemen_loc_part($id = ''){
    	if($id === '')
			return redirect('/Inventory/index_manajemen_loc_part');
		$data = $this->inventory_workshop_model->get_detail_sparepart($id);
    	$this->load->view('header');
    	$this->load->view('inventory/detail_manajemen_loc_part', Array('data' => $data));
    	$this->load->view('footer');
    }



    function list_history_approved(){
    	$data = $this->inventory_workshop_model->get_history_approved();
    	$this->load->view('/header');
		$this->load->view('/inventory/list_history_approved', array('data' => $data));
		$this->load->view('/footer');
    }

    function list_history_request(){
  //   	$post = $this->input->post();
		// if(isset($post['request'])){
		// 	$res = $this->inventory_workshop_model->save_request($post);
		// }

    	$id_workshop = $this->user['id_workshop'];
    	$data = $this->inventory_workshop_model->get_history_request($id_workshop);
    	$this->load->view('/header');
		$this->load->view('/inventory/list_history_request', array('data' => $data));
		$this->load->view('/footer');
    }

    function detail_request($id = ''){
    	$post = $this->input->post();
		if(isset($post['request'])){
			$id = $this->inventory_workshop_model->save_request($post);
		}
		if ($id !== '') {
			$data = $this->inventory_workshop_model->detail_receipt_between_warehouse($id);
		}
    	
		$this->load->view('/header');
		$this->load->view('/inventory/detail_request', array('data' => $data));
		$this->load->view('/footer');
    }

    function listInOutInventory(){
    	$this->load->model('log_inventory_stock_model');
    	$id_workshop = $this->user['id_workshop'];
    	$arrWorkshop = $this->master_workshop_model->data();
    	$data = array();
    	$date = date('Y-m-1');
    	$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
    	$data = $this->log_inventory_stock_model->dataInOut($date, $id_workshop);
    	$data_user = $this->cac_user_model->data();
    	$this->load->view('/header');
		$this->load->view('/inventory/list_in_out_inventory', Array('data' => $data,'id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'date' => $date));		
		$this->load->view('/footer');
    }
	
	function pengambilan_barang($date1 = '', $date2=''){
    	$this->load->model('log_inventory_stock_model');
    	$id_workshop = $this->user['id_workshop'];
    	$arrWorkshop = $this->master_workshop_model->data();
    	$data = array();
		$post = $this->input->post();
		$date = date('Y-m-d');
		
		if(isset($post['search'])){
			$date = $post['date'];
			$date1 = date('Y-m-1', strtotime($date))." 00:00:00"; 
			$date2 = date('Y-m-t', strtotime($date))." 23:00:00"; 
			$id_workshop = $post['id_workshop'];
			$data = $this->inventory_workshop_model->report_pengambilan_barang($id_workshop, $date1, $date2);
			$data2 = $this->inventory_workshop_model->sum_report_pengambilan_barang($id_workshop, $date1, $date2);
		}else{
			$data = $this->inventory_workshop_model->report_pengambilan_barang($id_workshop, $date1, $date2);
			$data2 = $this->inventory_workshop_model->sum_report_pengambilan_barang($id_workshop, $date1, $date2);
		}
    	$data_user = $this->cac_user_model->data();
    	$this->load->view('/header');
		$this->load->view('/inventory/report_pengeluaran_barang', Array('data' => $data, 'data2' => $data2,'id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'date' => $date));		
		$this->load->view('/footer');
    }
	
	function summary_in_out_barang(){
    	$this->load->model('log_inventory_stock_model');
    	$id_workshop = $this->user['id_workshop'];
    	$arrWorkshop = $this->master_workshop_model->data();
    	$data = array();
    	$date = date('Y-m-1',strtotime("last month"));
    	$post = $this->input->post();
		$date_closing = date('Ym', strtotime(date('Y-m-1',strtotime("last month"))));
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
			$date_closing = date('Ym', strtotime($post['bulan']));
			
		}
		
		
    	$data = $this->inventory_workshop_model->summary_in_out_barang($date_closing, $id_workshop);
    	$data_user = $this->cac_user_model->data();
    	$this->load->view('/header');
		$this->load->view('/inventory/summary_in_out_barang', Array('data' => $data,'id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'date' => $date));		
		$this->load->view('/footer');
    }
	
	function outstanding_antar_gudang(){
		$id_workshop = $this->user['id_workshop'];
    	$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->inventory_workshop_model->outstanding_antar_gudang($id_workshop);
		$this->load->view('/header');
		$this->load->view('/inventory/outstanding_antar_gudang', Array('arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'data' => $data));		
		$this->load->view('/footer');
	}

}