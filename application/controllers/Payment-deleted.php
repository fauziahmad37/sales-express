<?php

include_once('Admin.php');

class Payment extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('invoice_work_order_model');	
		$this->load->model('savings_transaction_model');	
		$this->load->model('master_workshop_model');
		$this->load->model('faktur_pengambilan_inventory_model');
		 $this->load->library('dompdf_gen');
	}
	
	function index(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->invoice_work_order_model->data_payment($date, $id_workshop);
		$dataUser = $this->cac_user_model->data();
				
		$this->load->view('/header');
		$this->load->view('/payment/index_payment', Array('data' => $data, 'date' => $date, 
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'dataUser' => $dataUser));		
		$this->load->view('/footer');		
	}
	
	function detail($id = ''){
		if($id === ''){
			return redirect('/Payment/index');
			die();
		}
		$this->load->model('cac_user_model');
		$this->load->model('service_detail_model');
		$this->load->model('invoice_work_order_model');
		$data = $this->invoice_work_order_model->detail_payment($id);
		$users = $this->cac_user_model->data();
		$id_wo = $data['id_wo'];
		$dataPekerjaan = $this->service_detail_model->data($id_wo);
		$dataSupply = $this->faktur_pengambilan_inventory_model->supply_wo($id_wo);
		$detail = $this->invoice_work_order_model->view_detail($id_wo);

		$this->load->view('/header');
		$this->load->view('/payment/detail_payment', Array('data' => $data, 'users' => $users, 
			'dataPekerjaan' => $dataPekerjaan, 'dataSupply' => $dataSupply, 'detail' => $detail));		
		$this->load->view('/footer');
	}

	function new_payment() {
		$post = $this->input->post();
		if(isset($post['tabungan'])){
			//BAYAR DENGAN TABUNGAN
			$ws_response_pay_tabungan = array('ALERT' => 'GAGAL');
			
			if($post['pool'] == 'POOL PONDOK BAMBU' || $post['pool'] == 'POOL PEKAPURAN' || $post['pool'] == 'POOL C - JAGAKARSA' || $post['pool'] == 'POOL CIPAYUNG' || $post['pool'] == 'POOL CIPENDAWA' || $post['pool'] == 'POOL A - BINTARO' ){
				$get_token = $this->savings_transaction_model->get_token();
				$potong_saldo_etaxi = $this->savings_transaction_model->potong_saldo_etaxi($get_token, $post);
				
				//print_r($potong_saldo_etaxi);die;
				if($potong_saldo_etaxi['status']==1){
					//$ws_response_pay_tabungan = $this->invoice_work_order_model->ws_payment_tabungan($post);
					$ws_response_pay_tabungan = array('ALERT' => 'SUKSESS');
				}else{
					$message = $potong_saldo_etaxi['message'];
					
					return redirect(site_url('/Payment/response_etaxi/'.$message));
					die();
				}
			} else {
				$ws_response_pay_tabungan = $this->invoice_work_order_model->ws_payment_tabungan($post);
			}
			
			//print_r($ws_response_pay_tabungan);die();
			$ws_response_pay_tabungan = array('ALERT' => 'SUKSESS');
			
			//foreach ((Array)$ws_response_pay_tabungan as $key => $val) {
				//if($val['ALERT'] == 'SUKSESS'){
					
					$res = $this->invoice_work_order_model->pay($post);
					$res_detail = $this->invoice_work_order_model->pay_detail($post);
					if($res){
						return redirect(site_url('/Payment/detail/'.$res));
						die();
					}
				//}else{
				//	return redirect(site_url('/Payment/error_ws_tabungan'));
				//	die();
				//}
			//}
			
		}else if(isset($post['tunai'])){
			//BAYAR DENGAN TUNAI
			$res = $this->savings_transaction_model->pay($post);
			if($res){
				$res2 = $this->invoice_work_order_model->pay($post);
				$res_detail = $this->invoice_work_order_model->pay_detail($post);
				if($res2){		
					return redirect(site_url('/Payment/detail/'.$res2));			
					die();
				}
			}
		}else if(isset($post['ohl'])){
			//BAYAR DENGAN OHL
			$res = $this->invoice_work_order_model->pay($post);
			$res_detail = $this->invoice_work_order_model->pay_detail($post);
			if($res){
				return redirect(site_url('/Payment/detail/'.$res));
				die();
			}

		}
		$this->load->view('/header');
		$this->load->view('/payment/new_payment');		
		$this->load->view('/footer');		
	}
	
	function get_data_by_invoice_number(){
		$post = $this->input->post();
		$invoice_number = $post['invoice_number'];
		
		$res = $this->invoice_work_order_model->detail_with_invoice_number($invoice_number, $this->user['id_workshop']);
		$this->load->view('/payment/data_payment', array('data' => $res));
	}
	
	function get_data_by_wo_number(){
		$post = $this->input->post();
		$wo_number = $post['wo_number'];
		
		$res = $this->invoice_work_order_model->detail_with_wo_number($wo_number, $this->user['id_workshop']);
		$this->load->view('/payment/data_payment', array('data' => $res));
	}
	
	function get_savings(){
		$post = $this->input->post();
		//print_r($post);die;
		$id_car = $post['id_car'];
		$this->load->model('savings_transaction_model');										  
		$data = $this->savings_transaction_model->get_tabungan($id_car);
		$data = $this->savings_transaction_model->ws_tabungan($data);
		foreach((Array)$data as $key => $val){
			print(substr(($val['TAB_SALDO']), 0,-4));
		}
	}
	
	function print_detail_invoice($id = ''){
		if($id === ''){
			return redirect('/Payment/index');
			die();
		}
		$this->load->model('cac_user_model');
		$this->load->model('service_detail_model');
		$this->load->model('invoice_work_order_model');
		$data = $this->invoice_work_order_model->detail_payment($id);
		$users = $this->cac_user_model->data();
		$id_wo = $data['id_wo'];
		$dataPekerjaan = $this->service_detail_model->data($id_wo);
		$dataSupply = $this->faktur_pengambilan_inventory_model->supply_wo($id_wo);
		$detail = $this->invoice_work_order_model->view_detail($id_wo);

		
		$this->load->view('/payment/print_detail_invoice', Array('data' => $data, 'users' => $users, 
			'dataPekerjaan' => $dataPekerjaan, 'dataSupply' => $dataSupply, 'detail' => $detail));		
		
                $paper_size  = 'A4'; //paper size
                $orientation = 'potrait'; //tipe format kertas
                $html = $this->output->get_output();
            
                $this->dompdf->set_paper($paper_size, $orientation);
                //Convert to PDF
                $this->dompdf->load_html($html);
                $this->dompdf->render();
                $this->dompdf->stream("Detail_Invoice.pdf", array('Attachment'=>0));
	}


	function error_ws_tabungan(){
		$this->load->view('/header');
		$this->load->view('/payment/tes_tampil');
		$this->load->view('/footer');
	}

	function response_etaxi($message){
		$data = str_replace('%20', ' ', $message);
		$this->load->view('/header');
		$this->load->view('/payment/response_etaxi', Array ('data' => $data));
		$this->load->view('/footer');
	}
	
	function etaxi_show_tab(){
		$post = $this->input->post();
		$data = '';
		if(isset($post['no_pintu'])){
			$this->load->model('Api_etaxi_model');
			$data = $this->Api_etaxi_model->show_tab_etaxi($post['no_pintu']);
			if($data['status']=='Armada Tidak Ditemukan'){
				print_r('armada tidak di temukan di etaxi hub admin');
			}else{
				echo $data['data']['saldoSparepart'];
			}
		}
	}






}