<?php

include_once('Admin.php');

class Work_order extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->model('work_order_model');
		$this->load->model('service_estimation_model');
		$this->load->model('master_car_model');
		$this->load->model('master_jenis_service_model');
		$this->load->model('service_detail_model');
		$this->load->model('faktur_pengambilan_inventory_model');
		$this->load->model('savings_transaction_model');
        $this->load->model('master_tipe_pembayaran_model');
        $this->load->model('api_etaxi_model');
        $this->load->library('dompdf_gen');
	}
	
	function index() {
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		$_SESSION['id_car'] = false;
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
		}
		
		$is_admin = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);
		
		$this->load->model('master_workshop_model');
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->work_order_model->data_wo_new($date,$dateakhir, $id_workshop, $is_admin, intval($this->user['id_privilege']));
		
		$this->load->view('/header');
		$this->load->view('/work_order/index_wo', Array('data' => $data, 'date' => $date,'dateakhir' => $dateakhir,
				'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop));
		$this->load->view('/footer');
	}
	

	function detail($id = ''){
		if($id === '')
			return redirect('/Work_order');
			
			$is_admin = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);
			$id_workshop = $this->user['id_workshop'];
			$post = $this->input->post();
			if(isset($post['aktif'])){
				$this->work_order_model->activate($post['aktif']);
			} else if(isset($post['cancel_wo'])){
				$this->work_order_model->pending_cancel($post);
			} else if(isset($post['approved_cancel']) && $is_admin){
				$this->work_order_model->approved_cancel($post['approved_cancel']);
			} else if(isset($post['selesai'])){
				$this->work_order_model->finish_wo($post['selesai']);
			} else if(isset($post['close_wo'])){
				$this->load->model('invoice_work_order_model');
				
				$res = $this->work_order_model->close_wo($post['close_wo']);

				if($res){
					$res2 = $this->invoice_work_order_model->create_invoice($post['close_wo']);
					if($res2){
						return redirect('/Invoice/detail/'.$res2);
						die();
					}
				}
			}
			
			$data = $this->work_order_model->detail_wo($id, $id_workshop, $is_admin, $this->user['id_privilege']);
			if(Count($data) == 0)
				return redirect('/Work_order');
				
				if(isset($post['save'])){
					$this->service_estimation_model->save($post);
				} else if(isset($post['update'])){
					$this->service_estimation_model->update($post);
				} else if(isset($post['delete'])){
					$this->service_estimation_model->delete($post['delete']);
				} else if(isset($post['save_detail'])){
					$this->service_detail_model->save($post);
				} else if(isset($post['update_detail'])){
					$this->service_detail_model->update($post);
				} else if(isset($post['delete_detail'])){
					$this->service_detail_model->delete($post['delete_detail']);
				} else if(isset($post['save_retur'])){
					
					//print_r($post);
				}
				
				$data_service_est = $this->service_estimation_model->data($id);
				if(isset($post['aktif'])){
					//CREATE DEFAULT SERVICE DETAIL FOR FOREMAN
					$this->service_detail_model->create_default_detail($data_service_est);
				}
				$data_service_detail = $this->service_detail_model->data($id);
				$data_time_service_detail = $this->service_detail_model->get_time_details($id);
				
				foreach((Array) $data_service_detail as $key2 => $val2){
					$data_service_detail[$key2]['elapsed'] = 0;
					foreach((Array) $data_time_service_detail as $key => $val){
						if($val2['id'] == $val['id_service_detail']){
							$time = 0;
							$start = strtotime($val['dt_start']);
							$end = $val['dt_end'] > 0 ? strtotime($val['dt_end']) : strtotime(date('Y-m-d H:i:s'));
							$diff = $end - $start;
							$data_service_detail[$key2]['elapsed'] += $diff;
						}
					}
				}
				
				$jsonTab = $this->savings_transaction_model->ws_tabungan($data);

				$arrJenisServis = $this->master_jenis_service_model->data();
				
				//SUPPLY SLIP
				$dataSupply = $this->faktur_pengambilan_inventory_model->supply_wo($id);
				//tabungan
				
				$id_car = $data['id_car'];
				$no_pintu = $this->savings_transaction_model->get_tabungan($id_car);
				$tabungan = $this->savings_transaction_model->ws_tabungan($data);
				
				// if($data['pool'] == 'POOL PONDOK BAMBU' || $data['pool'] == 'POOL PEKAPURAN' || $data['pool'] == 'POOL C - JAGAKARSA' || $data['pool'] == 'POOL CIPAYUNG' || $data['pool'] == 'POOL CIPENDAWA' || $data['pool'] == 'POOL A - BINTARO'){
				$tabungan = $this->api_etaxi_model->show_tab_etaxi($data['no_pintu']);
				// print_r($tabungan);die();
				$tabungan = $tabungan['data']['saldoSparepart'];
				// }
				
				
				
				
				
				$getWoSelesai = $this->work_order_model->getWoSelesai($id_car);
				$getInvoiceLunas = $this->work_order_model->getInvoiceLunas($id_car);
				
				$this->load->model('master_jenis_customer_model');
				$arrJenisCustomer = $this->master_jenis_customer_model->detail($id);
				$this->load->view('/header');
				$this->load->view('/work_order/detail_wo', Array('id_wo' => $id, 'data' => $data, 'data_service_est' => $data_service_est, 'arrJenisCustomer' => $arrJenisCustomer,
						'data_service_detail' => $data_service_detail, 'arrJenisServis' => $arrJenisServis, 'dataSupply' => $dataSupply, 'tabungan' => $tabungan, 'jsonTab' => $jsonTab, 'getWoSelesai' => $getWoSelesai, 'getInvoiceLunas' => $getInvoiceLunas ));
				$this->load->view('/footer');
	} 
	
	function new_wo($step = 1){
		$this->load->view('/header');
		$post = $this->input->post();
		if($step == 1) {
			$_SESSION['id_car'] = false;
			if(isset($post['save'])) {
				$id = $this->master_car_model->save($post);
				$_SESSION['id_car'] = $id;
				return redirect('/Work_order/new_wo/2');
				die();
			} else if(isset($post['update'])){
				$id = $this->master_car_model->update($post);
				$_SESSION['id_car'] = $id;
				return redirect('/Work_order/new_wo/2');
				die();
			}
			
			$this->load->model('master_car_warna_model');
			$this->load->model('master_car_model_model');
			$this->load->model('master_jenis_customer_model');
			$this->load->model('master_pool_model');
			$this->load->model('master_pt_model');
			
			$arrPT = $this->master_pt_model->data(true);
			$arrJenisCustomer = $this->master_jenis_customer_model->data(true);
			$arrPool = $this->master_pool_model->data(true);
			$arrModel = $this->master_car_model_model->data(true);
			$arrWarna = $this->master_car_warna_model->data(true);
			
			$this->load->view('/work_order/car', Array('arrJenisCustomer' => $arrJenisCustomer,
					'arrPool' => $arrPool, 'arrModel' => $arrModel, 'arrWarna' => $arrWarna, 'arrPT' => $arrPT));
		}
		if($step == 2) {
			if(!isset($_SESSION['id_car']) || $_SESSION['id_car'] === false)
				return redirect('Work_order/new_wo');
				
				if(isset($post['save'])) {
					$id = $this->work_order_model->save($post);
					return redirect('/Work_order/detail/'.$id);
					die();
				} else if(isset($post['update'])){
					$id = $this->work_order_model->update($post);
					return redirect('/Work_order/detail/'.$id);
					die();
				}
				
				$this->load->model('master_work_order_tipe_model');
				$this->load->model('master_technician_model');
				$this->load->model('master_main_problem_model');
				
				$id_workshop = $this->user['id_workshop'];
				$arrWOTipe = $this->master_work_order_tipe_model->data();
				$arrTechnician = $this->master_technician_model->data(true, $id_workshop);
				$arrMainProblem = $this->master_main_problem_model->data(true);
                $arrTipePembayaran = $this->master_tipe_pembayaran_model->data();
                $arrJenisCustomer2 = $this->master_car_model->detail($_SESSION['id_car']);
                
				
				$this->load->view('/work_order/work', Array('id_workshop' => $id_workshop, 'id_car' => $_SESSION['id_car'],
						'arrWOTipe' => $arrWOTipe, 'arrTechnician' => $arrTechnician, 'arrMainProblem' => $arrMainProblem, 'arrTipePembayaran' => $arrTipePembayaran, 'arrJenisCustomer2' => $arrJenisCustomer2 ));
		}
		$this->load->view('/footer');
	}
	
	function cancel_wo(){
		$post = $this->input->post();
		$id_wo = $post['id_wo'];
		$this->load->view('/work_order/cancel_wo', Array('id' => $id_wo));
	}
	
	function new_estimation(){
		$post = $this->input->post();
		$id_wo = $post['id_wo'];
		$id_model = $post['id_model'];
		$id_jenis_customer = $post['id_jenis_customer'];
		$id_jenis_car = $post['id_jenis_car'];
		$data = array();
		if(isset($post['id_servis_estimation']) && $post['id_servis_estimation'] > 0){
			$data = $this->service_estimation_model->detail($post['id_servis_estimation']);
		}
		$arrJenisServis = $this->master_jenis_service_model->data();
		$this->load->view('/work_order/service_estimation', Array('data' => $data, 'id_wo' => $id_wo, 'id_model' => $id_model,
				'arrJenisServis' => $arrJenisServis, 'id_jenis_customer' => $id_jenis_customer, 'id_jenis_car' => $id_jenis_car));
	}
	
	function get_data_by_no_rangka(){
		$post = $this->input->post();
		$no_rangka = $post['no_rangka'];
		$data = $this->master_car_model->load_data_by_no_rangka($no_rangka);
		$this->load->view('/work_order/car_data', Array('data'=> $data));
	}
	
	function get_data_by_no_mesin(){
		$post = $this->input->post();
		$no_mesin = $post['no_mesin'];
		$data = $this->master_car_model->load_data_by_no_mesin($no_mesin);
		$this->load->view('/work_order/car_data', Array('data'=> $data));
	}
	
	function get_data_by_no_polisi(){
		$post = $this->input->post();
		$no_polisi = $post['no_polisi'];
		$data = $this->master_car_model->load_data_by_no_polisi($no_polisi);
		$this->load->view('/work_order/car_data', Array('data'=> $data));
	}
	
	function get_data_by_no_pintu(){
		$post = $this->input->post();
		$no_pintu = $post['no_pintu'];
		$data = $this->master_car_model->load_data_by_no_pintu($no_pintu);
		$this->load->view('/work_order/car_data', Array('data'=> $data));
	}
	
	function get_jasa(){
		$post = $this->input->post();
		$id_jenis_car = (isset($post['id_jenis_car']) ? $post['id_jenis_car'] : -1);
		$id_jenis_customer = $post['id_jenis_customer'];
		$this->load->model('master_lts_model');
		if($id_jenis_car > 0)
			$data = $this->master_lts_model->data_by_car_jenis($id_jenis_car);
			else
				$data = $this->master_lts_model->data();
				$this->load->view('/work_order/detail_jasa', Array('data'=> $data, 'id_jenis_customer' => $id_jenis_customer));
	}
	
	function get_sparepart(){
		$post = $this->input->post();
		$id_model = (isset($post['id_model']) ? $post['id_model'] : -1);
		$this->load->model('master_sparepart_model');
		if($id_model > 0)
			$data = $this->master_sparepart_model->data_by_car_model($id_model);
			else
				$data = $this->master_sparepart_model->data();
				$this->load->view('/work_order/detail_sparepart', Array('data'=> $data));
	}
	
	function get_material(){
		$post = $this->input->post();
		$this->load->model('master_material_model');
		$data = $this->master_material_model->data();
		$this->load->view('/work_order/detail_material', Array('data'=> $data));
	}
	
	function cek_tabungan(){
		$post = $this->input->post();
		$id_car = $post['id_car'];
		$this->load->model('savings_transaction_model');
		$data = $this->savings_transaction_model->get_tabungan($id_car);
		$jsonTab = $this->savings_transaction_model->ws_tabungan($data);

		$this->load->view('/work_order/car_savings', Array('jsonTab' => $jsonTab));
	}

	
	//DETAIL PEKERJAAN
	function new_detail(){
		$post = $this->input->post();
		$id_wo = $post['id_wo'];
		$id_jenis_car = $post['id_jenis_car'];
		$id_jenis_customer = $post['id_jenis_customer'];
		$data = array();
		if(isset($post['id_servis_detail']) && $post['id_servis_detail'] > 0){
			$data = $this->service_detail_model->detail($post['id_servis_detail']);
		}
		$id_workshop = $this->user['id_workshop'];
		$this->load->model('master_technician_model');
		$arrTechnician = $this->master_technician_model->data(true, $id_workshop);
		$this->load->view('/work_order/service_detail', Array('data' => $data, 'id_wo' => $id_wo,
				'id_jenis_car' => $id_jenis_car, 'arrTechnician' => $arrTechnician, 'id_jenis_customer' => $id_jenis_customer));
	}
	
	function jobs(){
		$post = $this->input->post();
		if(isset($post['action']) && isset($post['id_detail'])){
			$action = $post['action'];
			$id_detail = $post['id_detail'];
			
			return $this->service_detail_model->actions($action, $id_detail);
		}
		return false;
	}
	
	function get_time_detail($id_wo = ''){
		if($id_wo === '')
			return false;
			$data_service_detail = $this->service_detail_model->data($id_wo);
			$data_time_service_detail = $this->service_detail_model->get_time_details($id_wo);
			$arr = array();
			foreach((Array) $data_service_detail as $key2 => $val2){
				$data = array();
				$data['id'] = $val2['id'];
				$data['elapsed'] = 0;
				foreach((Array) $data_time_service_detail as $key => $val){
					if($val2['id'] == $val['id_service_detail']){
						$time = 0;
						$start = strtotime($val['dt_start']);
						$end = $val['dt_end'] > 0 ? strtotime($val['dt_end']) : strtotime(date('Y-m-d H:i:s'));
						$diff = $end - $start;
						$data['elapsed'] += $diff;
					}
				}
				$data['elapsed'] = strtotime_to_time($data['elapsed']);
				array_push($arr, $data);
			}
			return print(json_encode($arr));
	}
        
        function print_detail_wo ($id = ''){
		if($id === '')
			return redirect('/Work_order');
			
			$is_admin = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);
			$id_workshop = $this->user['id_workshop'];
			
			$post = $this->input->post();
			if(isset($post['aktif'])){
				$this->work_order_model->activate($post['aktif']);
			} else if(isset($post['cancel_wo'])){
				$this->work_order_model->pending_cancel($post);
			} else if(isset($post['approved_cancel']) && $is_admin){
				$this->work_order_model->approved_cancel($post['approved_cancel']);
			} else if(isset($post['selesai'])){
				$this->work_order_model->finish_wo($post['selesai']);
			} else if(isset($post['close_wo'])){
				$this->load->model('invoice_work_order_model');
				$res = $this->work_order_model->close_wo($post['close_wo']);
				if($res){
					$res2 = $this->invoice_work_order_model->create_invoice($post['close_wo']);
					if($res2){
						return redirect('/Invoice/detail/'.$res2);
						die();
					}
				}
			}
			
			$data = $this->work_order_model->detail_wo($id, $id_workshop, $is_admin, $this->user['id_privilege']);
			if(Count($data) == 0)
				return redirect('/Work_order');
				
				if(isset($post['save'])){
					$this->service_estimation_model->save($post);
				} else if(isset($post['update'])){
					$this->service_estimation_model->update($post);
				} else if(isset($post['delete'])){
					$this->service_estimation_model->delete($post['delete']);
				} else if(isset($post['save_detail'])){
					$this->service_detail_model->save($post);
				} else if(isset($post['update_detail'])){
					$this->service_detail_model->update($post);
				} else if(isset($post['delete_detail'])){
					$this->service_detail_model->delete($post['delete_detail']);
				}
				
				$data_service_est = $this->service_estimation_model->data($id);
				if(isset($post['aktif'])){
					//CREATE DEFAULT SERVICE DETAIL FOR FOREMAN
					$this->service_detail_model->create_default_detail($data_service_est);
				}
				$data_service_detail = $this->service_detail_model->data($id);
				$data_time_service_detail = $this->service_detail_model->get_time_details($id);
				
				foreach((Array) $data_service_detail as $key2 => $val2){
					$data_service_detail[$key2]['elapsed'] = 0;
					foreach((Array) $data_time_service_detail as $key => $val){
						if($val2['id'] == $val['id_service_detail']){
							$time = 0;
							$start = strtotime($val['dt_start']);
							$end = $val['dt_end'] > 0 ? strtotime($val['dt_end']) : strtotime(date('Y-m-d H:i:s'));
							$diff = $end - $start;
							$data_service_detail[$key2]['elapsed'] += $diff;
						}
					}
				}
				
				$jsonTab = $this->savings_transaction_model->ws_tabungan($data);

				$arrJenisServis = $this->master_jenis_service_model->data();
				
				//SUPPLY SLIP
				$dataSupply = $this->faktur_pengambilan_inventory_model->supply_wo($id);

				//tabungan
				$id_car = $data['id_car'];
				$tabungan = $this->savings_transaction_model->get_tabungan($id_car);

				$this->load->model('master_jenis_customer_model');
				$arrJenisCustomer = $this->master_jenis_customer_model->detail($id);

				
				$this->load->view('/work_order/print_detail_wo', Array('id_wo' => $id, 'data' => $data, 'data_service_est' => $data_service_est, 'arrJenisCustomer' => $arrJenisCustomer,
						'data_service_detail' => $data_service_detail, 'arrJenisServis' => $arrJenisServis, 'dataSupply' => $dataSupply, 'tabungan' => $tabungan, 'jsonTab' => $jsonTab));
				
        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();
		
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Work_Order.pdf", array('Attachment'=>0));
                                
                                
	}

	function wo_outstanding(){
		$post = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		if(isset($post['search'])){
			$id_workshop = $post['id_workshop'];
		}

		$is_admin = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);
		$this->load->model('master_workshop_model');
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->work_order_model->data_wo_outstanding($id_workshop, $is_admin, intval($this->user['id_privilege']));
		
		$this->load->view('/header');
		$this->load->view('/work_order/index_wo_outstanding', Array('id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'data' => $data));
		$this->load->view('/footer');
	}

	function history_service(){
		$this->load->view('/header');
		$this->load->view('/work_order/history_service');
		$this->load->view('/footer');
	}

	function get_history_service(){
		$post = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		$id_car = $post['id'];
		$data = $this->work_order_model->get_history_wo($id_car);
	
		$this->load->view('/header');
		$this->load->view('/work_order/list_history_service', Array('data'=>$data, 'id_workshop'=>$id_workshop));
		$this->load->view('/footer');
	}

}