<?php

include_once('Admin.php');

class Next extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('vehicle_model');	
		$this->load->model('jaminan_model');	
		$this->load->model('master_pool_model');
		$this->load->model('next_model');
		$this->load->library('dompdf_gen');
	}
	
	function index() {
		$id_pool = $this->user['id_pool'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		$id_status_invoice = "Active','Drive','Payment','Paid";
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_pool = $post['id_pool'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
			$id_status_invoice =$post['id_status_invoice'];
		}
		
		$arrPool = $this->master_pool_model->data();
		$data = $this->spj_model->get_data_for_index_spj($date, $dateakhir, $id_pool, $id_status_invoice);
		
		$this->load->view('header');
		$this->load->view('spj/spj_index', Array('arrPool' => $arrPool, 'data' => $data, 
			'date' => $date, 'dateakhir' => $dateakhir, 'id_pool' => $id_pool, 'id_status_invoice' => $id_status_invoice));
		$this->load->view('footer');	
	}
	
	function send_token_email($id = ''){
		if($id === '')
			return redirect('/Work_order');
		
		$data = $this->next_model->get_data_email();
		
		$from_email = "onlineshopbymastercoding@gmail.com";
		$to_email = $data['application_email'];
		
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
			
			$mesg = $this->load->view('/next/send_token_email', Array('data' => $data), TRUE);


         $this->email->from($from_email, 'TOKEN ANDA HARI INI '); 
         $this->email->to('rezapawanov@gmail.com');
         $this->email->subject('TOKEN 9 OKTOBER 2019'); 
         $this->email->message($mesg);
		 
		 if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                
		
		$this->load->view('/next/send_token_email', Array('data' => $data));
         } 
		 
		 
		
    

		
		$this->load->view('/next/send_token_email', Array('data' => $data));
				
	}
	


	
	function cetak_spj($id = ''){
		if($id === '')
			return redirect('/Work_order');
		
		$data = $this->spj_model->get_data_spj($id);
		
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
			
			$mesg = $this->load->view('/spj/print_spj', Array('data' => $data), TRUE);


         $this->email->from($from_email, 'Nama Kamu'); 
         $this->email->to($to_email);
         $this->email->subject('eSPJ/PB/20190812/47 (GOA 123)'); 
         $this->email->message($mesg);
		 
		 if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                
		
		$this->load->view('/spj/print_spj', Array('data' => $data));
         } 
		 
		 
		 $databarcode = $data['doc_number'];
    
		$this->load->library('Zend');
		$this->zend->load('Zend/Barcode');
		$imageResource = Zend_Barcode::factory('code128', 'image', array('text'=>$databarcode), array())->draw();
		
		$imageName = $data['id'].".png";
		$imagePath = 'uploads/barcode_spj/'; // penyimpanan file barcode
		imagepng($imageResource, $imagePath.$imageName); 
		$pathBarcode = $imagePath.$imageName; //M

		
		$this->load->view('/spj/print_spj', Array('data' => $data));
				
        // $paper_size  = 'A4'; //paper size
        // $orientation = 'potrait'; //tipe format kertas
        // $html = $this->output->get_output();
		
        // $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("print_spj.pdf", array('Attachment'=>0));
		
		//print_r($id);die;
	}

	

	
	function email_cetak_setoran(){
		if($id === '')
			return redirect('/Spj/email_cetak_setoran');
		
		$data = $this->spj_model->get_data_spj($id);
		
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
			
			$mesg = $this->load->view('/spj/print_spj', Array('data' => $data), TRUE);


         $this->email->from($from_email, 'Nama Kamu'); 
         $this->email->to($to_email);
         $this->email->subject('eSPJ/PB/20190812/47 (GOA 123)'); 
         $this->email->message($mesg);
		 
		 if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                
		
		$this->load->view('/spj/print_spj', Array('data' => $data));
         } 
		 
		 
		 $databarcode = $data['doc_number'];
    
		$this->load->library('Zend');
		$this->zend->load('Zend/Barcode');
		$imageResource = Zend_Barcode::factory('code128', 'image', array('text'=>$databarcode), array())->draw();
		
		$imageName = $data['id'].".png";
		$imagePath = 'uploads/barcode_spj/'; // penyimpanan file barcode
		imagepng($imageResource, $imagePath.$imageName); 
		$pathBarcode = $imagePath.$imageName; //M

		
		$this->load->view('/spj/print_spj', Array('data' => $data));
				
	}
	
	
}