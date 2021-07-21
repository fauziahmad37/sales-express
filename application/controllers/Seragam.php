<?php

include_once('Admin.php');

class Seragam extends Admin {
	function __construct() {
		parent::__construct();		
	$this->load->model('seragam_model');	
	$this->load->model('master_pool_model');
	}
	
	function index() {
		$arrPool = $this->master_pool_model->data();
		$data = $this->seragam_model->get_data_for_pengambilan_seragam();
		$this->load->view('header');
		$this->load->view('seragam/pengambilan_seragam_index', Array('arrPool' => $arrPool,'data'=>$data));
		$this->load->view('footer');	
	}
	
	function pengambilan_seragam(){
			
			$arrPool = $this->master_pool_model->data();			
			$this->load->view('header');
			$this->load->view('seragam/pengambilan_seragam', Array('arrPool' => $arrPool));
			$this->load->view('footer');	
		
	}
	
	function save_pengambilan_seragam(){

			$post = $this->input->post();		
			if(isset($post['save'])){
				$res = $this->seragam_model->add_pengambilan_seragam($post);
				
			}
			$arrPool = $this->master_pool_model->data();
			$data = $this->seragam_model->get_data_for_pengambilan_seragam();
			
			$this->load->view('header');
			$this->load->view('seragam/pengambilan_seragam_index', Array('arrPool' => $arrPool,'data'=>$data));
			$this->load->view('footer');	
		
	}
	
	function index_pembayaran_seragam() {
		$arrPool = $this->master_pool_model->data();
		$data = $this->seragam_model->get_data_for_pembayaran_seragam_index();
		$this->load->view('header');
		$this->load->view('seragam/pembayaran_seragam_index', Array('arrPool' => $arrPool,'data'=>$data));
		$this->load->view('footer');	
	}
	
	function pembayaran_seragam(){
			
			$arrPool = $this->master_pool_model->data();			
			$this->load->view('header');
			$this->load->view('seragam/pembayaran_seragam', Array('arrPool' => $arrPool));
			$this->load->view('footer');	
		
	}
	
	function save_pembayaran_seragam(){

			$post = $this->input->post();		
			if(isset($post['save'])){
				$res = $this->seragam_model->add_pembayaran_seragam($post);
				return redirect('/Seragam/index_pembayaran_seragam');
				die;
				
			}
			$arrPool = $this->master_pool_model->data();
			$data = $this->seragam_model->get_data_for_pembayaran_seragam_index();
		    $this->load->view('header');
		    $this->load->view('seragam/pembayaran_seragam_index', Array('arrPool' => $arrPool,'data'=>$data));
		    $this->load->view('footer');	
		
	}
	
	function get_autocomplete_kip(){
        if (isset($_GET['term'])) {
            $result = $this->seragam_model->autocomplete_kip($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->kip_numbers,
				'name' => $row->name,
				'id' => $row->id_driver,
				'amount_akhir' => $row->amount_akhir,
				'kip' => $row->kip,
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function cetak_bukti_pembayaran($id = ''){
		if($id === '')
			return redirect('/Seragam/');
		
		$data = $this->seragam_model->get_data_pembayaran($id);
		
		$this->load->view('/seragam/cetak_bukti_pembayaran', Array('data' => $data));
	}
	
	function kirim_email_pembayaran_seragam($id = ''){
		if($id === '')
			return redirect('/Seragam/');
		
		$data = $this->seragam_model->get_data_pembayaran($id);
		
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
			
			$mesg = $this->load->view('/seragam/cetak_bukti_pembayaran', Array('data' => $data), TRUE);


         $this->email->from($from_email, 'Nama Kamu'); 
         $this->email->to($to_email);
         $this->email->subject($data['doc_number']); 
         $this->email->message($mesg);
		 
		 if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                
		
		$this->load->view('/seragam/cetak_bukti_pembayaran', Array('data' => $data));
		die;
         } 
		 
		$this->load->view('/seragam/cetak_bukti_pembayaran', Array('data' => $data));
				
	}
}