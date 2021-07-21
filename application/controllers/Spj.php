<?php

include_once('Admin.php');

class Spj extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('vehicle_model');	
		$this->load->model('jaminan_model');	
		$this->load->model('master_pool_model');
		$this->load->model('spj_model');
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
	
	function index_tiara() {
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
		$data = $this->spj_model->get_data_for_index_spj_tiara($date, $dateakhir, $id_pool, $id_status_invoice);
		
		$this->load->view('header');
		$this->load->view('spj/spj_index_tiara', Array('arrPool' => $arrPool,'data'=>$data,
			'date' => $date, 'dateakhir' => $dateakhir, 'id_pool' => $id_pool, 'id_status_invoice' => $id_status_invoice));
		$this->load->view('footer');	
	}
	
	function index_setoran() {
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
		$data = $this->spj_model->get_data_for_index_setoran_spj($date, $dateakhir, $id_pool, $id_status_invoice);
		
		$this->load->view('header');
		$this->load->view('spj/setoran_spj_index', Array('arrPool' => $arrPool,'data'=>$data,
			'date' => $date, 'dateakhir' => $dateakhir, 'id_pool' => $id_pool, 'id_status_invoice' => $id_status_invoice));
		$this->load->view('footer');	
	}
	
	function index_setoran_tiara() {
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
		$data = $this->spj_model->get_data_for_index_setoran_spj_tiara($date, $dateakhir, $id_pool, $id_status_invoice);
		
		$this->load->view('header');
		$this->load->view('spj/setoran_spj_tiara_index', Array('arrPool' => $arrPool, 'data'=>$data,
			'date' => $date, 'dateakhir' => $dateakhir, 'id_pool' => $id_pool, 'id_status_invoice' => $id_status_invoice));
		$this->load->view('footer');	
	}
	
	function create_spj() {
		if(date('H') >= 21 || date('H') < 5){
			if ($this->user['id_privilege'] == Admin::ADMINISTRATOR){
				null;
			} else {
				return redirect('/Spj/');
				die;
			}
		}
		$arrPool = $this->master_pool_model->data();
		$arrTipeRental = $this->spj_model->tipe_rental();
		$this->load->view('header');
		$this->load->view('spj/create_spj', Array('arrPool' => $arrPool,'arrTipeRental'=>$arrTipeRental));
		$this->load->view('footer');	
	}
	
	function create_spj_tiara() {
		if(date('H') >= 21 || date('H')< 5){
			if ($this->user['id_privilege'] == Admin::ADMINISTRATOR){
				null;
			} else {
				return redirect('/Spj/index_tiara/');
				die;
			}
		}
		$arrPool = $this->master_pool_model->data();
		$arrTipeRental = $this->spj_model->tipe_rental_tiara();
		$this->load->view('header');
		$this->load->view('spj/create_spj_tiara', Array('arrPool' => $arrPool,'arrTipeRental'=>$arrTipeRental));
		$this->load->view('footer');	
	}
	
	function create_setoran_spj() {
		if( date('H') >= 21 || date('H')< 5 ){
			if ($this->user['id_privilege'] == Admin::ADMINISTRATOR){
				null;
			} else {
				return redirect('/Spj/index_setoran/');
				die;
			}
		}
		
		$arrPool = $this->master_pool_model->data();
		$this->load->view('header');
		$this->load->view('spj/create_setoran_spj', Array('arrPool' => $arrPool));
		$this->load->view('footer');	
	}
	
	function create_setoran_spj_tiara() {
		if( date('H') >= 21 || date('H') < 5 ){
			if ($this->user['id_privilege'] == Admin::ADMINISTRATOR){
				null;
			} else {
				return redirect('/Spj/index_setoran_tiara/');
				die;
			}
		}
		
		$arrPool = $this->master_pool_model->data();
		$this->load->view('header');
		$this->load->view('spj/create_setoran_spj_tiara', Array('arrPool' => $arrPool));
		$this->load->view('footer');	
	}

	
	
	function get_kip(){
		$id=$this->input->post('id_pool');
		$data=$this->jaminan_model->get_data_kip($id);
		echo json_encode($data);
	}
	
	function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_kip($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->kip_numbers,
				'name' => $row->name,
				'id' => $row->id_driver,
				'amount_akhir' => $row->amount_akhir,
				'kip' => $row->kip,
				'created_dt' => $row->created_dt,
				'ketentuan_jaminan' => $row->ketentuan_jaminan,
				'tipe_driver' => $row->tipe_driver,
				'hari_kerja' => $row->hari_kerja,
				'cetak_spj' => $row->cetak_spj,
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function get_autocomplete_tiara(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_kip_tiara($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->kip_numbers,
				'name' => $row->name,
				'id' => $row->id_driver,
				'amount_akhir' => $row->amount_akhir,
				'kip' => $row->kip,
				'created_dt' => $row->created_dt,
				'ketentuan_jaminan' => $row->ketentuan_jaminan,
				'tipe_driver' => $row->tipe_driver,
				'hari_kerja' => $row->hari_kerja,
				'cetak_spj' => $row->cetak_spj,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function get_autocomplete_door_number(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_door_number($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->data_mobil,
				'no_pintu' => $row->no_pintu,
				'desc_mobil' => $row->desc_mobil,
				'id' => $row->id,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function get_autocomplete_door_number_tiara(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_door_number_tiara($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->data_mobil,
				'no_pintu' => $row->no_pintu,
				'desc_mobil' => $row->desc_mobil,
				'id' => $row->id,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function get_autocomplete_spj(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_spj($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'bbm_sebelumnya' => $row->bbm_sebelumnya,
				'km_out' => $row->km_out,
				'rit_out' => $row->rit_out,
				'drop_out' => $row->drop_out,
				'status' => $row->status,
				'label' => $row->data_spj,
				'spj_no' => $row->spj_no,
				'no_pintu' => $row->no_pintu,
				'id' => $row->id,
				'kip_number' => $row->kip_number,
				'pool_name' => $row->pool_name,
				'driver_name' => $row->driver_name,
				'desc_mobil' => $row->desc_mobil,
				'amount_akhir' => $row->amount_akhir,
				'sisa_cicilan_seragam' => $row->sisa_cicilan_seragam,
				'tagihan_wajib' => $row->tagihan_wajib,
				'denda_perjam' => $row->denda_perjam,
				'jam_cetak_spj' => $row->jam_cetak_spj,
				'jam_mulai_denda' => $row->jam_mulai_denda,
				'jumlah_jam_denda' => $row->jumlah_jam_denda,
				'jumlah_hari_denda' => $row->jumlah_hari_denda,
				'flag_denda' => $row->flag_denda,
				'driverid' => $row->driverid,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function get_autocomplete_checker_masuk_spj(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_checker_masuk_spj($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->data_spj,
				'spj_no' => $row->spj_no,
				'no_pintu' => $row->no_pintu,
				'id' => $row->id,
				'kip_number' => $row->kip_number,
				'pool_name' => $row->pool_name,
				'driver_name' => $row->driver_name,
				'desc_mobil' => $row->desc_mobil,
				'amount_akhir' => $row->amount_akhir,
				'sisa_cicilan_seragam' => $row->sisa_cicilan_seragam,
				'tagihan_wajib' => $row->tagihan_wajib,
				'denda_perjam' => $row->denda_perjam,
				'jam_cetak_spj' => $row->jam_cetak_spj,
				'jam_mulai_denda' => $row->jam_mulai_denda,
				'jumlah_jam_denda' => $row->jumlah_jam_denda,
				'jumlah_hari_denda' => $row->jumlah_hari_denda,
				'flag_denda' => $row->flag_denda,
				'driverid' => $row->driverid,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function get_autocomplete_payment_spj(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_payment_spj($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->data_spj,
				'spj_no' => $row->spj_no,
				'no_pintu' => $row->no_pintu,
				'id' => $row->id,
				'kip_number' => $row->kip_number,
				'pool_name' => $row->pool_name,
				'driver_name' => $row->driver_name,
				'desc_mobil' => $row->desc_mobil,
				'amount_akhir' => $row->amount_akhir,
				'sisa_cicilan_seragam' => $row->sisa_cicilan_seragam,
				'tagihan_wajib' => $row->tagihan_wajib,
				'denda_perjam' => $row->denda_perjam,
				'jam_cetak_spj' => $row->jam_cetak_spj,
				'jam_mulai_denda' => $row->jam_mulai_denda,
				'jumlah_jam_denda' => $row->jumlah_jam_denda,
				'jumlah_hari_denda' => $row->jumlah_hari_denda,
				'flag_denda' => $row->flag_denda,
				'driverid' => $row->driverid,
				'checker_date' => $row->checker_date,
				'ketentuan_jaminan' => $row->ketentuan_jaminan,
				'hari_kerja' => $row->hari_kerja,
				'has_cicilan_jaminan' => $row->has_cicilan_jaminan,
				'amount_cicilan_jaminan' => $row->amount_cicilan_jaminan,
				'jaminan_awal' => $row->jaminan_awal,
				'limit_hk_cicilan_jaminan' => $row->limit_hk_cicilan_jaminan,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function get_autocomplete_payment_spj_tiara(){
        if (isset($_GET['term'])) {
            $result = $this->spj_model->autocomplete_payment_spj_tiara($_GET['term']);
			// print_r($result);die;
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->data_spj,
				'spj_no' => $row->spj_no,
				'no_pintu' => $row->no_pintu,
				'id' => $row->id,
				'kip_number' => $row->kip_number,
				'pool_name' => $row->pool_name,
				'driver_name' => $row->driver_name,
				'desc_mobil' => $row->desc_mobil,
				'amount_akhir' => $row->amount_akhir,
				'sisa_cicilan_seragam' => $row->sisa_cicilan_seragam,
				'tagihan_wajib' => $row->tagihan_wajib,
				'denda_perjam' => $row->denda_perjam,
				'jam_cetak_spj' => $row->jam_cetak_spj,
				'jam_mulai_denda' => $row->jam_mulai_denda,
				'jumlah_jam_denda' => $row->jumlah_jam_denda,
				'jumlah_hari_denda' => $row->jumlah_hari_denda,
				'flag_denda' => $row->flag_denda,
				'driverid' => $row->driverid,
				'checker_date' => $row->checker_date,
				'hari_kerja' => $row->hari_kerja,
				'has_cicilan_jaminan' => $row->has_cicilan_jaminan,
				'amount_cicilan_jaminan' => $row->amount_cicilan_jaminan,
				'jaminan_awal' => $row->jaminan_awal,
				'limit_hk_cicilan_jaminan' => $row->limit_hk_cicilan_jaminan,
				
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	function save_spj(){
		$post = $this->input->post();		
		if(isset($post['save'])){
			if($post['cetak_spj'] == 'no'){
				echo 'Harap Lakukan Topup Jaminan!';
				die;
			}
			$res = $this->spj_model->add_save_spj($post);
			return redirect('/Spj/');
			die;
		}
		$arrPool = $this->master_pool_model->data();
		$data = $this->spj_model->get_data_for_index_spj();
		
		$this->load->view('header');
		$this->load->view('spj/spj_index', Array('arrPool' => $arrPool,'data'=>$data));
		$this->load->view('footer');
	}
	
	function save_spj_tiara(){
		$post = $this->input->post();		
		if(isset($post['save'])){
			if($post['cetak_spj'] == 'no'){
				echo 'Harap Lakukan Topup Jaminan!';
				die;
			}
			$res = $this->spj_model->add_save_spj_tiara($post);
			return redirect('/Spj/spj_index_tiara');
			die;
			
		}
		$arrPool = $this->master_pool_model->data();
		$data = $this->spj_model->get_data_for_index_spj();
		
		$this->load->view('header');
		$this->load->view('spj/spj_index_tiara', Array('arrPool' => $arrPool,'data'=>$data));
		$this->load->view('footer');	
		
	}
	
	function save_setoran_spj(){

			$post = $this->input->post();		
			if(isset($post['save'])){
				$res = $this->spj_model->add_save_setoran_spj($post);
				return redirect('/Spj/index_setoran');
				die;
			}
			$arrPool = $this->master_pool_model->data();
			$data = $this->spj_model->get_data_for_index_setoran_spj();
			
			$this->load->view('header');
			$this->load->view('spj/setoran_spj_index', Array('arrPool' => $arrPool,'data'=>$data));
			$this->load->view('footer');	
		
	}
	
	function save_setoran_spj_tiara(){

			$post = $this->input->post();		
			if(isset($post['save'])){
				$res = $this->spj_model->add_save_setoran_spj_tiara($post);
				return redirect('/Spj/index_setoran_tiara');
				die;
			}
			$arrPool = $this->master_pool_model->data();
			$data = $this->spj_model->get_data_for_index_setoran_spj_tiara();
			
			$this->load->view('header');
			$this->load->view('spj/setoran_spj_tiara_index', Array('arrPool' => $arrPool,'data'=>$data));
			$this->load->view('footer');	
		
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
	
	function cetak_spj_only($id = ''){
		if($id === '')
			return redirect('/Work_order');
		
		$data = $this->spj_model->get_data_spj($id);
		
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
	
	function checker_setoran(){
		$post = $this->input->post();
		
		if(isset($post['save'])){
			$res = $this->spj_model->checker_setoran($post);
			if(!$res){
				?>
				<script type="text/javascript">
					alert("BBM HARUS PENUH");
					window.location = "<?php echo site_url('/Spj/checker_setoran/');?>";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert("Data Berhasil Disimpan!");
					window.location = "<?php echo site_url('/Spj/checker_setoran/');?>";
				</script>
				<?php
			}
		}
		
		$arrPool = $this->master_pool_model->data();
		
		$this->load->view('header');
		$this->load->view('spj/checker_setoran', Array('arrPool' => $arrPool));
		$this->load->view('footer');	
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
	
	function cetak_setoran($id = ''){
		if($id === '')
			return redirect('/Spj/setoran_spj_index');
		
		$data = $this->spj_model->get_data_setoran($id);
		$total_spj_24 = $this->spj_model->get_data_spj24($id);
		$total_spj_18 = $this->spj_model->get_data_spj18($id);
		
		$this->load->view('/spj/cetak_setoran', Array('data' => $data, 'total_spj_24'=>$total_spj_24, 'total_spj_18'=>$total_spj_18));
	}
	
	function checker_keluar_pool(){
		
		$post = $this->input->post();
		
		if(isset($post['save'])){
			
			if($post['bbm'] == 'block'){
				?>
				<script type="text/javascript">
					alert("BBM HARUS DI INPUT.");
					window.location = "<?php echo site_url('/Spj/checker_keluar_pool/');?>";
				</script>
				<?php
			}else{
				
				if($post['status'] == 'Active'){
					
					$save_header = $this->spj_model->save_header_checker($post);
						
					if($save_header){
								
						$i = 1;
						while(isset($_POST['pertanyaan'.$i]) && isset($_POST['jawaban'.$i])){
							$pertanyaan = $_POST['pertanyaan'.$i];
							$jawaban = $_POST['jawaban'.$i];
							$keterangan = $_POST['keterangan'.$i];
							
							$res = $this->spj_model->save_detail_checker_out($save_header, $pertanyaan, $jawaban, $keterangan);
				
							$i++;
						}
								
						$res = $this->spj_model->checker_keluar_pool($post);
					
						if(!$res){
							?>
							<script type="text/javascript">
								alert("UPDATE STATUS SPJ GAGAL!");
								window.location = "<?php echo site_url('/Spj/checker_keluar_pool/');?>";
							</script>
							<?php
						}else{
							?>
							<script type="text/javascript">
								alert("Data Berhasil Disimpan!");
								window.location = "<?php echo site_url('/Spj/checker_keluar_pool/');?>";
							</script>
							<?php
						}
								
					} else {
						?>
						<script type="text/javascript">
							alert("Checker Header Gagal di simpan!");
							window.location = "<?php echo site_url('/Spj/checker_keluar_pool/');?>";
						</script>
						<?php
					}
							
				} else if($post['status'] == 'Drive'){
					
					$update_header = $this->spj_model->update_header_checker($post);
					
					if($update_header){
						
						$a = 1;
						while(isset($_POST['pertanyaan'.$a]) && isset($_POST['jawaban'.$a])){
							$pertanyaan = $_POST['pertanyaan'.$a];
							$jawaban = $_POST['jawaban'.$a];
							$keterangan = $_POST['keterangan'.$a];
							
							$res = $this->spj_model->update_detail_checker_in($update_header, $pertanyaan, $jawaban, $keterangan);
				
							$a++;
						}
						
						$res = $this->spj_model->checker_setoran($post);
					
						if(!$res){
							?>
							<script type="text/javascript">
								alert("UPDATE STATUS SPJ GAGAL!");
								window.location = "<?php echo site_url('/Spj/checker_keluar_pool/');?>";
							</script>
							<?php
						}else{
							?>
							<script type="text/javascript">
								alert("Data Berhasil Disimpan!");
								window.location = "<?php echo site_url('/Spj/checker_keluar_pool/');?>";
							</script>
							<?php
						}
						
					} else {
						?>
						<script type="text/javascript">
							alert("Checker Header Gagal di simpan!");
							window.location = "<?php echo site_url('/Spj/checker_keluar_pool/');?>";
						</script>
						<?php
					}
				}
			}
		}
		
		$arrPool = $this->master_pool_model->data();
		
		$this->load->view('header');
		$this->load->view('spj/checker_keluar_pool', Array('arrPool' => $arrPool));
		$this->load->view('footer');	
	}
	
	function index_checker(){
		
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
			
		}
		
		$data = $this->spj_model->index_checker($date, $dateakhir);
		
		$this->load->view('header');
		$this->load->view('spj/index_checker', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir));
		$this->load->view('footer');
	}
	
	function detail_checker($id = ''){
		if($id === '')
			return redirect('/Spj/setoran_spj_index');
		
		$header = $this->spj_model->data_checker_header($id);
		
		$this->load->view('header');
		$this->load->view('spj/detail_checker', Array('header' => $header));
		$this->load->view('footer');
	}
	
	function cancel_spj($id = ''){
		if($id === '')
			return redirect('/Spj');
		
		$res = $this->spj_model->cancel_spj($id);
		if($res){
			?>
			<script type="text/javascript">
				alert("SPJ has been cancelled!");
				window.location = "<?php echo site_url('/Spj/');?>";
			</script>
			<?php
		}
	}
	
	function report_checker_body(){
		$date = date('Y-m-01');
		$dateakhir = date('Y-m-t');
		
		$post = $this->input->post();
		if(isset($post['cari'])){
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
		}
		
		$data = $this->spj_model->report_checker_body($date, $dateakhir);
		
		$this->load->view('header');
		$this->load->view('spj/report_checker_body', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir));
		$this->load->view('footer');
	}
	
}