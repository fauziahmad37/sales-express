<?php

include_once('Admin.php');

class Jaminan extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('vehicle_model');	
		$this->load->model('jaminan_model');	
		$this->load->model('master_pool_model');
	}
	
	function index() {
		$id_pool = $this->user['id_pool'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_pool = $post['id_pool'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
		}
		
		$arrPool = $this->master_pool_model->data();
		$data = $this->jaminan_model->get_data_for_index_topup($date, $dateakhir, $id_pool);
		
		$this->load->view('header');
		$this->load->view('jaminan/topup_index', Array('arrPool' => $arrPool,'data'=>$data,
			'date' => $date, 'dateakhir' => $dateakhir, 'id_pool' => $id_pool));
		$this->load->view('footer');	
	}
	
	
	function get_kip(){
		$id=$this->input->post('id_pool');
		$data=$this->jaminan_model->get_data_kip($id);
		echo json_encode($data);
	}
	
	function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->jaminan_model->autocomplete_kip($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->kip_numbers,
				'name' => $row->name,
				'id' => $row->id_driver,
				'amount_akhir' => $row->amount_akhir,
				'kip' => $row->kip,
				'ketentuan_jaminan' => $row->ketentuan_jaminan,
				'tipe' => $row->tipe,
				'hari_kerja' => $row->hari_kerja,
				'limit_hk_cicilan_jaminan' => $row->limit_hk_cicilan_jaminan,
				'has_cicilan_jaminan' => $row->has_cicilan_jaminan,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function topup_jaminan(){
			$arrPool = $this->master_pool_model->data();
			
			$this->load->view('header');
			$this->load->view('jaminan/topup_jaminan', Array('arrPool' => $arrPool));
			$this->load->view('footer');	
		
	}
	
	function save_topup_jaminan(){

			$post = $this->input->post();		
			if(isset($post['save'])){
				$res = $this->jaminan_model->add_top_up_jaminan($post);
				return redirect('/Jaminan/');
				die;
				
			}
			$arrPool = $this->master_pool_model->data();
			$data = $this->jaminan_model->get_data_for_index_topup();
			
			$this->load->view('header');
			$this->load->view('jaminan/topup_index', Array('arrPool' => $arrPool,'data'=>$data));
			$this->load->view('footer');	
		
	}
	
	function cetak($id = ''){
		if($id === '')
			return redirect('/Jaminan/');
		
		$data = $this->jaminan_model->get_data_jaminan($id);
		
		$this->load->view('/jaminan/cetak_jaminan', Array('data' => $data));
	}
	
	function kirim_email($id = ''){
		if($id === '')
			return redirect('/Jaminan/');
		
		$data = $this->jaminan_model->get_data_jaminan($id);
		
		$from_email = "onlineshopbymastercoding@gmail.com";
		$to_email = $data['email'];
		
		 $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => '@Express999',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );
		
		 $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   
			
			$mesg = $this->load->view('/jaminan/cetak_jaminan', Array('data' => $data), TRUE);


         $this->email->from($from_email, 'Expressgroup Rental'); 
         $this->email->to($to_email);
         $this->email->subject($data['doc_number']); 
         $this->email->message($mesg);
		 
		 if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                
		
		$this->load->view('/jaminan/cetak_jaminan', Array('data' => $data));
		die;
         } 
		 
		$this->load->view('/jaminan/cetak_jaminan', Array('data' => $data));
				
	}
	
	
}