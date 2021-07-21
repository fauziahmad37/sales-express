<?php

class savings_transaction_model extends CI_Model {	
	function data($id_car){
		//print_r($id_car);die();
		$res = $this->db->query("select savings_transaction.*, cac_user.username as receiver, invoice_work_order.invoice_number 
			from savings_transaction join cac_user on cac_user.id = input_by and id_car = ".$id_car." 
			left join invoice_work_order on invoice_work_order.id = invoice_id order by dt desc;")->result_array();
	
		return $res;
	}
	
	function detail($id){
		$res = $this->db->query("select savings_transaction.id, amount, note, dt, no_rangka, 
			no_mesin, no_polisi, no_pintu, master_car.nama, alamat, no_telepon1, no_telepon2, id_car,
			master_pool.nama as pool, savings_transaction.id_pool, no_tanda_terima, cac_user.username as receiver 
			from savings_transaction 
			join master_car on master_car.id = id_car and savings_transaction.id = ".$id."
			join master_pool on master_pool.id = savings_transaction.id_pool
			join cac_user on cac_user.id = input_by;")->row_array();
		
		return $res;
	}
	
	function get_tabungan($id_car){
		
	
		$res = $this->db->query("select no_pintu from master_car 
			where id = ".$id_car.";")->row_array();
		return $res;
	}
	
	function get_kode_pool($id){
		$data = $this->db->select('code')->where('id', $id)->limit(1)->get('master_pool')->row_array();
		$kode = (Count($data) > 0 ? $data['code'] : '');
		
		return $kode;
	}
	
	function save($post){
		$id_pool = $post['id_pool'];
		
		$kode = $this->get_kode_pool($id_pool);
		$sequence = 'tanda_terima_tabungan_'.strtolower($kode).'_number_seq';
		$res_exist = $this->db->query("SELECT relname FROM pg_class where relname = '".$sequence."'")->row_array();
		if(Count($res_exist) < 1){
			//CREATE NEW SEQUENCE
			$this->db->query("create sequence ".$sequence." start 1;");
		}
		$save['no_tanda_terima'] = $this->db->query("select ('".$kode."TT' || 
			lpad((nextval('".$sequence."'))::text, 7, '0')) as tanda_terima")->row_array()['tanda_terima'];
			
		foreach (Array('id_car', 'amount', 'note', 'id_pool') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];		
		$res = $this->db->insert('savings_transaction', $save);
		if (!$res) return FALSE;	
		
		return $this->db->insert_id();			
	}
	
	function load_data_by_no_rangka($no_rangka){
		$res = $this->db->query("select master_car.*, master_pool.nama as pool, coalesce(total, 0) as total
			from master_car 
			join master_pool on master_pool.id = id_pool and id_jenis_customer = 1 
			left join (select id_car, sum(amount) as total from savings_transaction group by id_car) a on a.id_car = master_car.id
			where lower(no_rangka) like lower('%".$no_rangka."%');")->result_array();
		
		return $res;
	}
	
	function load_data_by_no_polisi($no_polisi){
		$res = $this->db->query("select master_car.*, master_pool.nama as pool, coalesce(total, 0) as total
			from master_car 
			join master_pool on master_pool.id = id_pool and id_jenis_customer = 1 
			left join (select id_car, sum(amount) as total from savings_transaction group by id_car) a on a.id_car = master_car.id
			where lower(no_polisi) like lower('%".$no_polisi."%');")->result_array();
		
		return $res;
	}
	
	function load_data_by_no_mesin($no_mesin){
		$res = $this->db->query("select master_car.*, master_pool.nama as pool, coalesce(total, 0) as total
			from master_car 
			join master_pool on master_pool.id = id_pool and id_jenis_customer = 1 
			left join (select id_car, sum(amount) as total from savings_transaction group by id_car) a on a.id_car = master_car.id
			where lower(no_mesin) like lower('%".$no_mesin."%');")->result_array();
		
		return $res;
	}
	
	function load_data_by_no_pintu($no_pintu){
		$res = $this->db->query("select master_car.*, master_pool.nama as pool, coalesce(total, 0) as total
			from master_car 
			join master_pool on master_pool.id = id_pool and id_jenis_customer = 1 
			left join (select id_car, sum(amount) as total from savings_transaction group by id_car) a on a.id_car = master_car.id
			where lower(no_pintu) like lower('%".$no_pintu."%');")->result_array();
		
		return $res;
	}
	
	function pay($data){
		$save['note'] = '[SYSTEM] Pembayaran Invoice #'.$data['invoice_number'].' dari WO #'.$data['wo_number'].' sebesar Rp '.number_format($data['total_billing']);
		$save['id_car'] = $data['id_car'];
		$save['amount'] = ($data['total_billing'] > 0 ? -$data['total_billing'] : 0);		
		$save['dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];
		$save['invoice_id'] = $data['id'];				
		
		$res = $this->db->insert('savings_transaction', $save);
		if (!$res) return FALSE;	
		
		return TRUE;
	}
	
//==================================== API SIMTAX ==========================================================================
//==========================================================================================================================
	
	function ws_tabungan($data){
		$no_pintu = $data['no_pintu'];
		$no_pintu_parse = str_replace(" ","%20",$no_pintu);
		$curl = curl_init();
		
		// print_r($no_pintu_parse);die;
		
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://websrv.expressgroup.co.id/API/show.php?no_pintu=".$no_pintu_parse."",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"postman-token: 6caff011-0cc7-0c73-c1ee-ad10678c8dbd"),
	 	));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		$jsonTab = json_decode($response, true);

		return $jsonTab;
	}

//=========================================================== API ETAXI ==========================================================
//================================================================================================================================

	function get_token(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://etaxi.expressgroup.co.id/ws/login",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{\r\n\t\"username\" : \"ahmad.fauzi@expressgroup.co.id\",\r\n\t\"password\" : \"express\"\r\n}\r\n",
		  CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: application/json",
			"postman-token: a6c5e912-50d4-2d4c-98c5-776ca5844643"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
			$get_token = json_decode($response, true);
		}
		return $get_token;
	}
	
//================================================================================================================================
//=========================================================== POTONG SALDO ETAXI =================================================
//================================================================================================================================
	
	function potong_saldo_etaxi($get_token, $post){
		//print_r($post);die;
		$curl = curl_init();
		
		$doc_number = $post['invoice_number'];
		$no_pintu = $post['no_pintu'];
		$amount = $post['total_payment'];
		$tipe = "Pemakaian";
		$pool = $post['pool'];
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://etaxi.expressgroup.co.id/ws/api/sparepart/create",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  // CURLOPT_POSTFIELDS => "{\r\n\t\"command\" : \"create\",\r\n\t\"data\" :{\r\n\t\"docNumber\": \"".$doc_number."\",\r\n\t\"noPintu\": \"".$no_pintu."\",\r\n\t\"amount\": ".$amount.",\r\n\t\"tipe\": \"".$tipe."\"\r\n\t}\r\n}\r\n",
		  CURLOPT_POSTFIELDS => "\r\n{\r\n\t\"command\" : \"create\",\r\n\t\"data\" :{\r\n\t\t\t\t\"docNumber\": \"".$doc_number."\",\r\n\t\t\t\t\"noPintu\": \"".$no_pintu."\",\r\n\t\t\t\t\"amount\": ".$amount.",\r\n\t\t\t\t\"kodePoolBengkel\": \"".$pool."\",\r\n\t\t\t\t\"tipe\": \"Pemakaian\"\r\n\t}\r\n}\r\n",
		  CURLOPT_HTTPHEADER => array(
			"access-token: ".$get_token['data']['id']."",
			"cache-control: no-cache",
			"content-type: application/json",
			"postman-token: 32be0cc4-4aba-9c9f-c624-c50f18b45068"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		//	print_r($response);die;
			$potong = json_decode($response, true);
		}
		return $potong;
	}
	
//================================================================================================================================
//=========================================================== PENGEMBALIAN SALDO ETAXI ===========================================
//================================================================================================================================
	
	function pengembalian_saldo_etaxi($get_token, $post){
		//print_r($post);die;
		$curl = curl_init();
		
		$doc_number = $post['invoice_number'].'-RETUR';
		$no_pintu = $post['no_pintu'];
		$amount = $post['total_billing'];
		$tipe = "Pengembalian";
		$pool = $post['workshop_name'];
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://etaxi.expressgroup.co.id/ws/api/sparepart/create",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  // CURLOPT_POSTFIELDS => "{\r\n\t\"command\" : \"create\",\r\n\t\"data\" :{\r\n\t\"docNumber\": \"".$doc_number."\",\r\n\t\"noPintu\": \"".$no_pintu."\",\r\n\t\"amount\": ".$amount.",\r\n\t\"tipe\": \"".$tipe."\"\r\n\t}\r\n}\r\n",
		  CURLOPT_POSTFIELDS => "\r\n{\r\n\t\"command\" : \"create\",\r\n\t\"data\" :{\r\n\t\t\t\t\"docNumber\": \"".$doc_number."\",\r\n\t\t\t\t\"noPintu\": \"".$no_pintu."\",\r\n\t\t\t\t\"amount\": ".$amount.",\r\n\t\t\t\t\"kodePoolBengkel\": \"".$pool."\",\r\n\t\t\t\t\"tipe\": \"Pengembalian\"\r\n\t}\r\n}\r\n",
		  CURLOPT_HTTPHEADER => array(
			"access-token: ".$get_token['data']['id']."",
			"cache-control: no-cache",
			"content-type: application/json",
			"postman-token: 32be0cc4-4aba-9c9f-c624-c50f18b45068"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		//	print_r($response);die;
			$potong = json_decode($response, true);
		}
		return $potong;
	}
	
//================================================================================================================================
//=========================================================== HISTORY TABUNGAN SPAREPART ETAXI ===================================
//================================================================================================================================

	function history_tabungan_sparepart($post){
		$CI = &get_instance();
		$this->db = $CI->load->database('etaxi', TRUE);
		$res =  $this->db->query("select * from doc_spj where status = 'Active' and pool_id = 18;")->row_array();
		return $res;
	}

}

