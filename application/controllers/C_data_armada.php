<?php

include_once('Admin.php');

class C_data_armada extends Admin {
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
        $this->load->library('dompdf_gen');
	}
	
	function data_armada_rekondisi() {
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
		
		$this->load->model('M_data_armada');
		//$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->M_data_armada->data_armada();
		
		$this->load->view('/header');
		$this->load->view('/mobil_rekondisi/V_data_armada', Array('data' => $data));
		$this->load->view('/footer');
	}

	public function tambah_data(){
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
		
		$this->load->model('M_data_armada');
		//$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->M_data_armada->data_armada();
		$this->load->view('/header');
		$this->load->view('/mobil_rekondisi/V_tambah_data', Array('data' => $data));
		$this->load->view('/footer');
	}

	function get_data(){
		$this->load->model('M_data_armada');
		$post = $this->input->post();
		$no_pintu = $post['no_pintu'];
		$data = $this->M_data_armada->load_code($no_pintu);
		$this->load->view('/mobil_rekondisi/list_data', Array('data'=> $data));
	}

	function save_data(){
		$this->load->model('M_data_armada');

		$id 			 = $this->input->post('id');
		$jenis_rekondisi = $this->input->post('jenis_rekondisi');
		$warna 			 = $this->input->post('warna');
		//print_r($jenis_rekondisi);die;
		$data1 = array(
				'id' 			  => $id,
				'jenis_rekondisi' => $jenis_rekondisi,
				'warna_rekondisi'		  	  => $warna
			);
		if($data1 !='' ){
			$cek = $this->M_data_armada->cek_data_armada($data1);
			//print_r($cek[0]['jenis_rekondisi']);die;
			if($id = $cek && $jenis_rekondisi == $cek[0]['jenis_rekondisi']){
					echo "
					<script>
						alert('Data Sudah Dalam Pengajuan Perbaikan.');
					</script>";
					$data = $this->M_data_armada->data_armada();		
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_data_armada', Array('data' => $data));
					$this->load->view('/footer');
			}else{
					$insert = $this->M_data_armada->simpan_data($data1);
					$data = $this->M_data_armada->data_armada();		
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_data_armada', Array('data' => $data));
					$this->load->view('/footer');	
				}	
			
			}else{
				echo "data tidak boleh kosong";	
		}
	}

	function detail_data($id){
			
			$this->load->model('M_data_armada');
			$values = $this->uri->segment_array(4);
			$values2 = $this->uri->segment_array(3);
			$general_service 	= 'General Service';
			$body 				= 'Body Repair';
			$general 			= $this->M_data_armada->cek_jenis_general($id,$general_service);
			$cek_data_rekon		= $this->M_data_armada->cek_data_rekon($id);
			$cek_data_general	= $this->M_data_armada->cek_data_general($id); 
			

		if(urldecode($values['4']) == $body){
			$cek = $this->M_data_armada->cek_jenis_body($id);
		}else{
			$cek = $this->M_data_armada->cek_jenis($id);
		}
		
		//print_r($cek[0]['jenis_rekondisi']);die;
		if($cek[0]['jenis_rekondisi'] == $body ){
			$cek_nama_service	= $this->M_data_armada->cek_jenis($id);
			if($cek_data_rekon == 0){
				$insert_awal 		= $this->M_data_armada->input_data_awal($id);
			}else{
				$insert_awal = $this->M_data_armada->data_detail($id);
			}
				if(urldecode($values['4']) == $body){
					$data = $this->M_data_armada->data_detail_body($id);
				}else{
					$data = $this->M_data_armada->data_detail($id);
				}
			
			$data_proses 		= $this->M_data_armada->tabel_proses_rekondisi($id);
			$data2 				= $this->M_data_armada->tabel_proses_rekondisi2($id);
			$data3 		 		= $this->M_data_armada->tabel_proses_rekondisi3($id);
			$data4				= $this->M_data_armada->tabel_proses_rekondisi4($id);
			$data5				= $this->M_data_armada->tabel_proses_rekondisi5($id);
			$data6				= $this->M_data_armada->tabel_proses_rekondisi6($id);
			$data7				= $this->M_data_armada->tabel_proses_rekondisi7($id);

			$this->load->view('/header');
			$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
				'data' 			=> $data,
				'data_proses' 	=> $data_proses,
				'data2' 		=> $data2,
				'data3' 		=> $data3,
				'data4'			=> $data4,
				'data5'			=> $data5,
				'data6'			=> $data6,
				'data7'			=> $data7,
				'insert_awal'	=> $insert_awal
			));
			$this->load->view('/footer');
		}else{

			if($cek_data_general == 0){
				$insert_general		= $this->M_data_armada->input_awal_general($id);
			}else{
				$insert_general		= $this->M_data_armada->data_detail($id);
			}
			
			$data 				= $this->M_data_armada->data_detail($id);

			$proses1	 		= $this->M_data_armada->tabel_general1($id);
			$proses2	 		= $this->M_data_armada->tabel_general2($id);
			$proses3	 		= $this->M_data_armada->tabel_general3($id);
			$proses4	 		= $this->M_data_armada->tabel_general4($id);
			$proses5	 		= $this->M_data_armada->tabel_general5($id);
			$proses6	 		= $this->M_data_armada->tabel_general6($id);
			$proses7	 		= $this->M_data_armada->tabel_general7($id);
			$proses8	 		= $this->M_data_armada->tabel_general8($id);
			$proses9	 		= $this->M_data_armada->tabel_general9($id);
			$proses10	 		= $this->M_data_armada->tabel_general10($id);
			$proses11	 		= $this->M_data_armada->tabel_general11($id);
			$proses12	 		= $this->M_data_armada->tabel_general12($id);
			$proses13	 		= $this->M_data_armada->tabel_general13($id);

			$this->load->view('/header');
			$this->load->view('/mobil_rekondisi/V_general_service', Array(
				'data' 				=> $data,
				'insert_general'	=> $insert_general,
				'proses1'			=> $proses1,
				'proses2'			=> $proses2,
				'proses3'			=> $proses3,
				'proses4'			=> $proses4,
				'proses5'			=> $proses5,
				'proses6'			=> $proses6,
				'proses7'			=> $proses7,
				'proses8'			=> $proses8,
				'proses9'			=> $proses9,
				'proses10'			=> $proses10,
				'proses11'			=> $proses11,
				'proses12'			=> $proses12,
				'proses13'			=> $proses13
			));
			$this->load->view('/footer');
		}
		
	}

	public function simpan_proses_rekondisi(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);

			
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->session->set_flashdata('pesan','bisa');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
		}
	}

	public function simpan_proses2(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status2($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
			
	}

	public function simpan_proses3(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status3($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}

	public function simpan_proses4(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status4($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}

	public function simpan_proses5(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status5($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses6(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status6($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}

	public function simpan_proses7(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status7($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}	

		
	public function simpan_proses8(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status8($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9	 	 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}	

	public function simpan_proses9(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status8($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}	

		/* ini batas untuk proses rekondisi body repair */

	public function simpan_proses10(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status8($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}	

		public function simpan_proses11(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status8($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}	

		public function simpan_proses12(){
		$this->load->model('M_data_armada');
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service 	= $this->input->post('nama_service');
			$status_vendor  = $this->input->post('status_vendor');
			$status_wo 		= $this->input->post('status_wo');
			$final_check 	= $this->input->post('final_check');
			$catatan 		= $this->input->post('catatan');
			$insert_awal = 0;
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service' 	=> $nama_service,
				'status_vendor' => $status_vendor,
				'status_wo' 	=> $status_wo,
				'final_check'	=> $final_check,
				'catatan' 		=> $catatan
			);
			
			$cek = $this->M_data_armada->cek_data($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($status_vendor !=null){
					$update 	 = $this->M_data_armada->update_status8($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail_body($id_mobil);
					$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
					$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
					$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
					$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
					$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
					$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
					$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
					$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
					$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
					$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
					$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
					$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
						'data' 			=> $data,
						'data_proses' 	=> $data_proses,
						'data2' 		=> $data2,
						'data3' 		=> $data3,
						'data4'			=> $data4,
						'data5'			=> $data5,
						'data6'			=> $data6,
						'data7'			=> $data7,
						'data8'			=> $data8,
						'data9'			=> $data9,
						'data10'		=> $data10,
						'data11'		=> $data11,
						'data12'		=> $data12,
						'insert_awal'	=> $insert_awal
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_rekondisi($simpan_proses);
				// $update = $this->M_data_armada->simpan_data($simpan_proses);
				$data = $this->M_data_armada->data_detail_body($id_mobil);
				$data_proses = $this->M_data_armada->tabel_proses_rekondisi($id_mobil);
				$data2 		 = $this->M_data_armada->tabel_proses_rekondisi2($id_mobil);
				$data3 		 = $this->M_data_armada->tabel_proses_rekondisi3($id_mobil);
				$data4 		 = $this->M_data_armada->tabel_proses_rekondisi4($id_mobil);
				$data5 		 = $this->M_data_armada->tabel_proses_rekondisi5($id_mobil);
				$data6 		 = $this->M_data_armada->tabel_proses_rekondisi6($id_mobil);
				$data7 		 = $this->M_data_armada->tabel_proses_rekondisi7($id_mobil);
				$data8 		 = $this->M_data_armada->tabel_proses_rekondisi8($id_mobil);
				$data9 		 = $this->M_data_armada->tabel_proses_rekondisi9($id_mobil);
				$data10 	 = $this->M_data_armada->tabel_proses_rekondisi10($id_mobil);
				$data11 	 = $this->M_data_armada->tabel_proses_rekondisi11($id_mobil);
				$data12 	 = $this->M_data_armada->tabel_proses_rekondisi12($id_mobil);
				$this->load->view('/header');
				$this->load->view('/mobil_rekondisi/V_detail_rekondisi', Array(
					'data' 			=> $data,
					'data_proses' 	=> $data_proses,
					'data2' 		=> $data2,
					'data3' 		=> $data3,
					'data4'			=> $data4,
					'data5'			=> $data5,
					'data6'			=> $data6,
					'data7'			=> $data7,
					'data8'			=> $data8,
					'data9'			=> $data9,
					'data10'		=> $data10,
					'data11'		=> $data11,
					'data12'		=> $data12,
					'insert_awal'	=> $insert_awal
				));
				$this->load->view('/footer');
			}
		}	

		/* ini batas untuk proses rekondisi body repair */
/* ini batas untuk proses rekondisi body repair */

	public function simpan_proses_general(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general1($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}

	public function simpan_proses_general2(){

			$this->load->model('M_data_armada');

			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general2($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}


	public function simpan_proses_general3(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general3($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}	

	public function simpan_proses_general4(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general4($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}

	public function simpan_proses_general5(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general5($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general6(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general6($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general7(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general7($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general8(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general8($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general9(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general9($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general10(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general10($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general11(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general11($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general12(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general12($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}
	public function simpan_proses_general13(){
			$this->load->model('M_data_armada');
			
			$id_mobil 		= $this->input->post('id_mobil');
			$nama_service	= $this->input->post('nama_service');
			$pengajuan_wo   = $this->input->post('pengajuan_wo');
			$approval_wo	= $this->input->post('approval_wo');
			$vendor_proses 	= $this->input->post('vendor_proses');
			$status_wo		= $this->input->post('status_wo');
			$final_check	= $this->input->post('final_check');
			$catatan		= $this->input->post('catatan');

			
			  //print_r($pengajuan_wo);die;
			
			//print_r($nama_service);die;
			$simpan_proses = array(
				'id_mobil' 		=> $id_mobil,
				'nama_service'	=> $nama_service,
				'pengajuan_wo'  => $pengajuan_wo,
				'approval_wo'	=> $approval_wo,
				'vendor_proses' => $vendor_proses,
				'status_wo'		=> $status_wo,
				'final_check'	=> $final_check,
				'catatan'		=> $catatan
			);
			//print_r($simpan_proses);die;
			
			$insert_general = 0;
			$cek = $this->M_data_armada->cek_general($simpan_proses);
			//print_r($cek);die;
			if($cek != null){
				if($nama_service !=null){
					$update 	 = $this->M_data_armada->update_general13($simpan_proses);
					$data 		 = $this->M_data_armada->data_detail($id_mobil);


					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);

					$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
						'data' 				=> $data,
						'insert_general'	=> $insert_general,
						'proses1'			=> $proses1,
						'proses2'			=> $proses2,
						'proses3'			=> $proses3,
						'proses4'			=> $proses4,
						'proses5'			=> $proses5,
						'proses6'			=> $proses6,
						'proses7'			=> $proses7,
						'proses8'			=> $proses8,
						'proses9'			=> $proses9,
						'proses10'			=> $proses10,
						'proses11'			=> $proses11,
						'proses12'			=> $proses12,
						'proses13'			=> $proses13
					));
					$this->load->view('/footer');
				}
			}else{
				$insert = $this->M_data_armada->data_proses_general($simpan_proses);
				$data   = $this->M_data_armada->data_detail($id_mobil);

					$proses1	 		= $this->M_data_armada->tabel_general1($id_mobil);
					$proses2	 		= $this->M_data_armada->tabel_general2($id_mobil);
					$proses3	 		= $this->M_data_armada->tabel_general3($id_mobil);
					$proses4	 		= $this->M_data_armada->tabel_general4($id_mobil);
					$proses5	 		= $this->M_data_armada->tabel_general5($id_mobil);
					$proses6	 		= $this->M_data_armada->tabel_general6($id_mobil);
					$proses7	 		= $this->M_data_armada->tabel_general7($id_mobil);
					$proses8	 		= $this->M_data_armada->tabel_general8($id_mobil);
					$proses9	 		= $this->M_data_armada->tabel_general9($id_mobil);
					$proses10	 		= $this->M_data_armada->tabel_general10($id_mobil);
					$proses11	 		= $this->M_data_armada->tabel_general11($id_mobil);
					$proses12	 		= $this->M_data_armada->tabel_general12($id_mobil);
					$proses13	 		= $this->M_data_armada->tabel_general13($id_mobil);
			
				$this->load->view('/header');
					$this->load->view('/mobil_rekondisi/V_general_service', Array(
					'data' 				=> $data,
					'insert_general'	=> $insert_general,
					'proses1'			=> $proses1,
					'proses2'			=> $proses2,
					'proses3'			=> $proses3,
					'proses4'			=> $proses4,
					'proses5'			=> $proses5,
					'proses6'			=> $proses6,
					'proses7'			=> $proses7,
					'proses8'			=> $proses8,
					'proses9'			=> $proses9,
					'proses10'			=> $proses10,
					'proses11'			=> $proses11,
					'proses12'			=> $proses12,
					'proses13'			=> $proses13
				));
				$this->load->view('/footer');
			}
		}

}
?>
	