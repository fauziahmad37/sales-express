<?php

class invoice_work_order_model extends CI_Model {
	function create_invoice($id){
		$save = array();
		$save['id_wo'] = $id;
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];
		

		//TIPE PEMBAYARAN
		$tipePembayaran = $this->db->query("select type_of_payment from work_order where id=".$id."; ")->row_array();
		$save['tipe_pembayaran'] = $tipePembayaran['type_of_payment'];
		if($tipePembayaran['type_of_payment'] == 4){
			$save['lunas'] = 1;
			$save['dt_lunas'] = date('Y-m-d H:i:s');
			$save['receiver_id'] = $this->user['id'];
			// $save['jumlah_bayar'] = 0;
			 $save['total_payment'] = 0;
		}


		//JASA
		$billing_jasa = $this->db->query("select sum(total_price) as total from service_detail 
			where id_wo = ".$id." and active = 1;")->row_array();
		$total_billing = 0;
		if(Count($billing_jasa) > 0){
			$total_billing += $billing_jasa['total'];
		}
		
		//BARANG
		$billing_barang = $this->db->query("select sum(harga_satuan * qty) as total
			from detail_faktur_pengambilan_inventory 
			join faktur_pengambilan_inventory on faktur_pengambilan_inventory.id = id_faktur and id_wo = ".$id." and active = 1;")->row_array();
		if(Count($billing_barang) > 0){
			$total_billing += $billing_barang['total'];
		}
		
		//ADD PPN 10%
		$total_billing = $total_billing + ($total_billing * 0.1);
		
		$save['total_billing'] = $total_billing;
		
		$data_customer = $this->db->query("select nama, type_of_payment from master_car join work_order 
			on work_order.id_car = master_car.id and work_order.id = ".$id." limit 1;")->row_array();
		$save['nama_customer'] = $data_customer['nama'];
		$save['tipe_pembayaran'] = $data_customer['type_of_payment'];
		
		//CHECK SEQUENCE
		$kode = $this->get_kode_workshop();
		$sequence = 'invoice_work_order_'.strtolower($kode).'_invoice_number_seq';
		$res_exist = $this->db->query("SELECT relname FROM pg_class where relname = '".$sequence."'")->row_array();
		if(Count($res_exist) < 1){
			//CREATE NEW SEQUENCE
			$this->db->query("create sequence ".$sequence." start 1;");
		}
		
		$save['invoice_number'] = $this->db->query("select ('".$kode."INV' || 
			lpad((nextval('".$sequence."'))::text, 7, '0')) as id_sequence")->row_array()['id_sequence'];
		
		$this->db->insert('invoice_work_order', $save);
		
		return $this->db->insert_id();
	}
	
	function get_kode_workshop(){
		$data = $this->db->select('code')->where('id', $this->user['id_workshop'])->get('master_workshop')->row_array();
		
		$kode = (Count($data) > 0 ? $data['code'] : '');
		
		return $kode;
	}
	
	function data($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		$res = $this->db->query("select invoice_work_order.*, work_order.id as wo_id, wo_number, jenis_pembayaran from invoice_work_order 
			join work_order on id_wo = work_order.id and id_workshop = ".$id_workshop."
				and invoice_work_order.created_dt >= '".$start."' and invoice_work_order.created_dt <= '".$end."'
			left join master_tipe_pembayaran on master_tipe_pembayaran.id = tipe_pembayaran;")->result_array();
			
		return $res;
	}
	
	function data_new($date, $dateakhir, $id_workshop, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		$res = $this->db->query("select invoice_work_order.*, work_order.id as wo_id, wo_number, jenis_pembayaran, mc.no_pintu from invoice_work_order 
			join work_order on id_wo = work_order.id 
			join master_car mc on (mc.id=id_car)
			left join master_tipe_pembayaran on master_tipe_pembayaran.id = tipe_pembayaran 
 			where id_workshop = ".$id_workshop." and invoice_work_order.created_dt >= '".$start."' and invoice_work_order.created_dt <= '".$end."'
			and lunas in( ".$id_lunas.");")->result_array();
			
		return $res;
	}
	
	// function getTipePembayaran(){
	// 	$res = $this->db->query("")->row_array();
	// 	return $res;
	// }

	function detail($id){

		// $res = $this->db->query("select invoice_work_order.*, wo_number, no_polisi, no_pintu, master_pool.nama, 
			// id_jenis_customer, type_of_payment, mp.jenis_pembayaran, pt.ptfullname
			// from invoice_work_order 
			// left join work_order on id_wo = work_order.id and invoice_work_order.id = ".$id."
			// left join master_car on id_car = master_car.id
			// left join master_pt pt on(pt.ptid=master_car.owner_pt_id)
			// left join master_tipe_pembayaran mp on (mp.id=work_order.type_of_payment)
			// left join master_pool on id_pool = master_pool.id;")->row_array();
			
		$res = $this->db->query("select invoice_work_order.*, wo_number, no_polisi, no_pintu, master_pool.nama, 
			id_jenis_customer, type_of_payment, mp.jenis_pembayaran, pt.ptfullname
			from invoice_work_order 
			left join work_order on id_wo = work_order.id 
			left join master_car on id_car = master_car.id
			left join master_pt pt on(pt.ptid=master_car.owner_pt_id)
			left join master_tipe_pembayaran mp on (mp.id=work_order.type_of_payment)
			left join master_pool on id_pool = master_pool.id
			where invoice_work_order.id = ".$id.";")->row_array();
		
		//print_r($res);die;	
		return $res;
	}
	
	function data_payment($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		$res = $this->db->query("select invoice_work_order.*, work_order.id as wo_id, wo_number, jenis_pembayaran, lunas, master_car.no_pintu from invoice_work_order 
			join work_order on id_wo = work_order.id and id_workshop = ".$id_workshop."
			join master_car on work_order.id_car = master_car.id
				and lunas = 1			
				and invoice_work_order.dt_lunas >= '".$start."' and invoice_work_order.dt_lunas <= '".$end."'
			left join master_tipe_pembayaran on master_tipe_pembayaran.id = tipe_pembayaran;")->result_array();
			
		return $res;
	}
	
	function detail_payment($id){
		$res = $this->db->query("select invoice_work_order.*,invoice_work_order.id as id_invoice, wo_number, master_pool.nama as pool, work_order.created_dt as tgl_wo_dicetak,
			work_order.input_by as wo_creator,id_jenis_customer, savings_transaction.*, master_workshop.name as workshop, brand, model, master_car.*,
			iwd.tab_awal, mtp.jenis_pembayaran
			from workshop.invoice_work_order 
			join workshop.work_order on id_wo = work_order.id and invoice_work_order.id = ".$id."
			join workshop.master_car on id_car = master_car.id
			join workshop.master_car_model on id_model = master_car_model.id
			join master_tipe_pembayaran mtp on (mtp.id=tipe_pembayaran)
			join workshop.master_workshop on id_workshop = master_workshop.id			
			left join workshop.master_pool on id_pool = master_pool.id
			left join workshop.savings_transaction on savings_transaction.invoice_id = invoice_work_order.id
			left join workshop.invoice_work_order_detail iwd on iwd.invoice_number=invoice_work_order.invoice_number
			order by iwd.created_dt desc limit 1;")->row_array();
		return $res;
	}
	
	function detail_with_invoice_number($invoice_number, $id_workshop){
		$invoice_number = strtolower($invoice_number);
		$res = $this->db->query("select invoice_work_order.*, wo_number, no_polisi, no_pintu, id_car,
			master_pool.nama, id_jenis_customer, master_jenis_customer.nama as jenis_customer, jenis_pembayaran, master_workshop.name as workshop_name, type_of_payment
			from invoice_work_order 
			join work_order on id_wo = work_order.id and lower(invoice_number) like '%".$invoice_number."%' 
				and invoice_work_order.lunas = 0
			join master_car on id_car = master_car.id
			join master_tipe_pembayaran on (master_tipe_pembayaran.id=type_of_payment)
			join master_jenis_customer on id_jenis_customer = master_jenis_customer.id
			left join master_pool on id_pool = master_pool.id
			left join master_workshop on master_workshop.id=work_order.id_workshop")->result_array();
		return $res;
	}
	
	function detail_with_wo_number($wo_number, $id_workshop){
		$wo_number = strtolower($wo_number);
		$res = $this->db->query("select invoice_work_order.*, wo_number, no_polisi, no_pintu, id_car, 
			master_pool.nama, id_jenis_customer, master_jenis_customer.nama as jenis_customer, jenis_pembayaran
			from invoice_work_order 
			join work_order on id_wo = work_order.id and lower(wo_number) like '%".$wo_number."%'
				and invoice_work_order.lunas = 0
			join master_car on id_car = master_car.id
			join master_tipe_pembayaran on (master_tipe_pembayaran.id=type_of_payment)
			join master_jenis_customer on id_jenis_customer = master_jenis_customer.id
			left join master_pool on id_pool = master_pool.id;")->result_array();
		return $res;
	}
	
// model invoice_work_order_detail ================================================================
	function pay_detail($data){
		$save['id_wo'] = $data['id_wo'];
		$save['input_by'] = $data['input_by'];
		$save['nama_customer'] = $data['nama_customer']; 
		$save['total_billing'] = $data['total_billing'];
		$save['invoice_number'] = $data['invoice_number'];
		//$save['tipe_pembayaran'] = (isset($data['tunai']) ? 1 : (isset($data['tabungan']) ? 2 : 0));
		$save['tipe_pembayaran'] = (isset($data['tunai']) ? 1 : (isset($data['tabungan']) ? 2 : (isset($data['ohl']) ? 3 : 0)));
		$save['dt_lunas'] = date('Y-m-d H:i:s');
		$save['receiver_id'] = $this->user['id'];
        $save['total_payment'] = $data['total_payment'];
        $save['note'] = $data['note'];
        $save['tab_awal'] = $data['amount'];
		$this->db->insert('invoice_work_order_detail', $save);
	}	

//==================================
	function pay($data){
		$id = $data['id'];
		$save['tipe_pembayaran'] = (isset($data['tunai']) ? 1 : (isset($data['tabungan']) ? 2 : (isset($data['ohl']) ? 4 : 0)));
		$save['dt_lunas'] = date('Y-m-d H:i:s');
		$save['receiver_id'] = $this->user['id'];
        $payment_exsisting = $this->db->query("select COALESCE( total_payment , 0 )  as total_payment from invoice_work_order where invoice_number = '".$data['invoice_number']."';")->row_array();  
        $total_payment = $data['total_payment'] +  $payment_exsisting['total_payment'];
        $save['total_payment'] = $total_payment;                        
        if ($data['total_billing'] <= ($payment_exsisting['total_payment'] + $data['total_payment']) || $data['jenis_customer']=='OHL'){
            $save['lunas'] = 1; 
        }
		$res = $this->db->where('id', $id)->update('invoice_work_order', $save);
		if (!$res) return FALSE;	
		return $id;
	}

	function view_detail($wo_number = ''){
		$res = $this->db->query("select * from workshop.invoice_work_order_detail 
		where id_wo=".$wo_number." order by dt_lunas desc limit 1;")->row_array();
		return $res;
	}

// ============================================= API POTONG TABUNGAN ===========================================================
// =============================================================================================================================
	
	function ws_payment_tabungan($post){
		$no_pintu = $post['no_pintu'];
		$total_payment = $post['total_payment'];
		$wo_number = $post['wo_number'];
		$pool = $post['pool'];
		//$kip = "test";
		$posted_by = $this->user["username"];
		$note = $post['note'];
		$date = date('Y-m-d');

		$no_pintu_parse = str_replace(" ","%20",$no_pintu);
		$posted_by_parse = str_replace(" ","%20",$posted_by);
		$pool_parse = str_replace(" ","%20",$pool);
		$note_parse = str_replace(" ","%20",$note);
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://websrv.expressgroup.co.id/API/insert_tab_wk.php?no_pintu=".$no_pintu_parse."&wo=".$wo_number."&spj_date=".$date."&posted_by=".$posted_by_parse."&note=".$note_parse."&nilai_tab=".$total_payment,
		
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
		
		//print_r($jsonTab);die();
		
		/*
		foreach ((Array)$ws_response_pay_tabungan as $key => $val) {
			
			$save['id_workshop'] = 999;
        $save['internal_code'] = 	$val['ALERT'];
        $save['qty'] = 987;
		$this->db->insert('tes_stok', $save);
		}
		*/
		return $jsonTab;
	}
}