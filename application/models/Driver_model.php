<?php

class Driver_model extends CI_Model {
	
	public $reg_id;
	public $ktp_id;
	public $sim_id;
	public $image = "default.jpg";
	
	
	
	public function getRegId($id){
		return $this->db->get_where($this->_driver_registration, ["id" => $id])->row();
	}
	
	function city(){
		$res = $this->db->query("select * from master_city order by name asc")->result_array();
		return $res;
	}
	
	function save_registration($post, $path_photo, $path_ktp, $path_sim, $path_rek, $path_domisili){
		$this->db->trans_start();
		// ========================= SAVE MASTER KTP ====================================
		
		$save_ktp = array();
		$save_ktp['name'] 		= $post['name'];
		$save_ktp['created_by'] = $this->user['id'];
		$save_ktp['ktp_number'] = $post['ktp_number'];
		$save_ktp['location']   = $post['ktp_location'];
		$save_ktp['type']		= $post['ktp_type'];
		$save_ktp['address']	= $post['ktp_address'];
		$save_ktp['path_photo']	= '/uploads/ktp/'.$path_ktp;
		
		
		
		$res = $this->db->insert('master_ktp', $save_ktp);
		$res = $this->db->insert_id();
		
		// ======================== SAVE MASTER SIM ====================================
		$save_sim = array();
		$save_sim['created_by'] 	  = $this->user['id'];
		$save_sim['sim_number'] 	  = $post['sim_number'];
		$save_sim['name'] 	 		  = $post['name'];
		$save_sim['type'] 			  = $post['type_sim'];
		$save_sim['address'] 		  = $post['sim_address'];
		$save_sim['sim_expire_date']  = $post['sim_expire_date'];
		$save_sim['path_photo']  	  = '/uploads/sim/'.$path_sim;
		
		
		$res2 = $this->db->insert('master_sim', $save_sim);
		$res2 = $this->db->insert_id();
	
		// ========================= SAVE DRIVER REGISTRATRION ================================
		
		if($res && $res2){
			$save_driver = array();
			$save_driver['name'] 				= strtoupper($post['name']);
			$save_driver['tipe'] 				= $post['tipe'];
			$save_driver['ketentuan_jaminan'] 	= $post['ketentuan_jaminan'];
			$save_driver['pool_id'] 			= $post['pool_id'];
			$save_driver['place_of_birth'] 		= $post['place_of_birth'];
			$save_driver['date_of_birth'] 		= $post['date_of_birth'];
			$save_driver['gender'] 				= $post['gender'];
			$save_driver['blood'] 				= $post['blood'];
			$save_driver['religion'] 			= $post['religion'];
			$save_driver['last_education'] 		= $post['last_education'];
			$save_driver['ktp_id'] 				= $res;
			$save_driver['sim_id'] 				= $res2;
			$save_driver['status'] 				= 'On Process';
			$save_driver['created_by'] 			= $this->user['id'];
			$save_driver['phone']				= $post['phone_number'];
			$save_driver['bank']				= $post['bank'];
			$save_driver['bank_account_number'] = $post['bank_account_number'];
			$save_driver['domisili_number']		= $post['domisili_number'];
			$save_driver['email']				= $post['email'];
			$save_driver['emergency_number']	= $post['emergency_number'];
			$save_driver['skck_type']			= $post['skck_type'];
			$save_driver['skck_number']			= strtoupper($post['skck_number']);
			$save_driver['path_photo']			= '/uploads/photo/'.$path_photo;
			$save_driver['path_rek']			= '/uploads/rekening/'.$path_rek;
			$save_driver['path_domisili']		= '/uploads/domisili/'.$path_domisili;
		
			$res3 = $this->db->insert('driver_registration', $save_driver);
			
			$res3 = $this->db->insert_id();
			$this->db->trans_complete(); 
			return $res3;
		}	
	}

// ==================================================================================================================================	
// ================================================== LIST DRIVER REGISTRATION ======================================================
	
	function list_driver_registration($date, $dateakhir, $id_status_invoice){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		if($this->user['id_privilege'] == 1 || $this->user['id_privilege'] == 7){
			$res = $this->db->query("select  
				a.id, a.name, a.place_of_birth, a.date_of_birth, a.ketentuan_jaminan, 
				a.status, a.created_dt, a.created_by, a.updated_dt, a.updated_by, a.approved_by, a.approved_dt, b.name as pool_name, c.ktp_number
				from driver_registration a
				left join master_pool b on(b.id=a.pool_id)
				left join master_ktp c on(c.id=a.ktp_id)
				where a.created_dt>='".$start."' and a.created_dt<='".$end."' and a.status in('".$id_status_invoice."') order by a.id desc; ")->result_array();
		}else{
			$res = $this->db->query("select 
				a.id, a.name, a.place_of_birth, a.date_of_birth, a.ketentuan_jaminan,
				a.status, a.created_dt, a.created_by, a.updated_dt, a.updated_by, a.approved_by, a.approved_dt, b.name as pool_name, c.ktp_number
				from driver_registration a
				left join master_pool b on(b.id=a.pool_id)
				left join master_ktp c on(c.id=a.ktp_id)
				where a.pool_id=".$this->user['id_pool']." and a.created_dt>='".$start."' and a.created_dt<='".$end."' and a.status in('".$id_status_invoice."') order by a.id desc;")->result_array();
		}
		//print_r($id_status_invoice);die;
		return $res;
	}

// ========================================================================================================================================
// =================================================== DETAIL REGISTRATION ================================================================
	
	function registration_detail($id){
		$res = $this->db->query("select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=".$id.";")->row_array();
		return $res;
	}
	
// ========================================================================================================================================
// =================================================== DETAIL DRIVER ================================================================
	
	function detail_driver($id){
		$res = $this->db->query("select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=".$id.";")->row_array();
		return $res;
	}

// ===========================================================================================================================================
// ==================================================== APPROVE REGISTRATION =================================================================
	
	function approve($id){
		$res = $this->db->query("update driver_registration set status='Active', approved_by='".$this->user['id']."', approved_dt='".date('Y-m-d H:i:s')."' where id=".$id.";");
		
		
		if($res){
			$res2 = $this->db->query("select a.*, b.code
				from driver_registration a
				left join master_pool b on(a.pool_id=b.id)
				where a.id=".$id.";")->row_array();
			
			$seq =  $this->db->query("select (lpad((nextval('kip_number_id_seq'))::text, 5, '0')) as kip")->row_array()['kip'];
			
			if($res2['tipe'] == 'REGULAR'){
				$new_kip = 'R/'.$res2['code'].'/'.date('Ym').'/'.$seq;
			}else{
				$new_kip = 'TR/'.$res2['code'].'/'.date('Ym').'/'.$seq;
			}
			
			if($res2['tipe'] == 'REGULAR' && $res2['ketentuan_jaminan'] == 'Baru'){
				$jaminan_awal = 300000;
				$amount_cicilan_jaminan = 20000;
				$limit_hk_cicilan_jaminan = 10;
			} else if($res2['tipe'] == 'REGULAR' && $res2['ketentuan_jaminan'] == 'Lama'){
				$jaminan_awal = 100000;
				$amount_cicilan_jaminan = 20000;
				$limit_hk_cicilan_jaminan = 20;
			} else if($res2['tipe'] == 'TIARA' && $res2['ketentuan_jaminan'] == 'Baru'){
				$jaminan_awal = 500000;
				$amount_cicilan_jaminan = 30000;
				$limit_hk_cicilan_jaminan = 10;
			} else if($res2['tipe'] == 'TIARA' && $res2['ketentuan_jaminan'] == 'Lama'){
				$jaminan_awal = 200000;
				$amount_cicilan_jaminan = 30000;
				$limit_hk_cicilan_jaminan = 20;
			}
			
			
				
				// ============= BARCODE KIP ======================
				
				$this->load->library('Zend');
				$this->zend->load('Zend/Barcode');
				$imageResource = Zend_Barcode::factory('code128', 'image', array('text'=>$new_kip), array())->draw();
				
				$imageName = $res2['id'].".png";
				$imagePath = 'uploads/barcode_kip/'; // penyimpanan file barcode
				imagepng($imageResource, $imagePath.$imageName); 
				$pathBarcode = $imagePath.$imageName; //M
				
				// ================================================
			
			$save_master = array();
			$save_master['created_by'] 				= $this->user['id'];
			$save_master['name']					= $res2['name'];
			$save_master['tipe']					= $res2['tipe'];
			$save_master['driver_registration_id'] 	= $res2['id'];
			$save_master['phone']					= $res2['phone'];
			$save_master['status']					= $res2['status'];
			$save_master['pool_id']					= $res2['pool_id'];
			$save_master['kip_number']				= $new_kip;
			$save_master['barcode']					= $imagePath.$imageName;
			$save_master['kip_expire_date']			= date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + 365 day"));
			$save_master['jaminan_awal']			= $jaminan_awal;
			$save_master['amount_cicilan_jaminan']	= $amount_cicilan_jaminan;
			$save_master['limit_hk_cicilan_jaminan']= $limit_hk_cicilan_jaminan;
			$save_master['has_cicilan_jaminan']		= 'true';
			
			$res2 = $this->db->insert('master_driver', $save_master);
			$res2 = $this->db->insert_id();
			
			return $res2;
			
		}else{
			return false;
		}
		
	}
	
// ======================================================================================================================================
// =================================================== LIST DRIVER ======================================================================	
	
	function list_driver($status){
		$res = $this->db->query("select a.id, a.kip_number, a.name, a.status, c.ketentuan_jaminan, a.hari_kerja,
			b.name as pool_name, 
			c.phone, c.emergency_number, 
			c.bank_account_number, c.email, d.ktp_number, c.bank, f.amount_akhir,
			e.sim_number, a.created_dt
			from master_driver a 
			left join master_pool b on(b.id=a.pool_id)
			left join driver_registration c on(a.driver_registration_id=c.id)
			left join master_ktp d on(d.id=c.ktp_id)
			left join master_sim e on(e.id=c.sim_id)
			left join ap_jaminan f on(f.id=a.ap_jaminan_id)
			where a.status in('".$status."') order by a.id desc;")->result_array();
		return $res;
	}
	
// ======================================================================================================================================
// ======================================================= GET DATA DRIVER ==============================================================

	function get_data_driver($id){
		$res = $this->db->query("select a.*, d.ktp_number, e.sim_expire_date, c.path_photo, b.kepala_pool, b.name as nama_pool from master_driver a
			left join master_pool b on (b.id=a.pool_id)
			left join driver_registration c on(c.id=a.driver_registration_id)
			left join master_ktp d on(d.id=c.ktp_id)
			left join master_sim e on(e.id=c.sim_id)
			where a.id=".$id.";")->row_array();
		return $res;
	}

// ======================================================================================================================================
// ========================================================= REJECT DRIVER ==============================================================

	function reject($id){
		$res = $this->db->query("update driver_registration set status='Rejected' where id=".$id."; ");
		return $this->db->insert_id();
	}
	
// ======================================================================================================================================
// ========================================================= UPDATE REGISTRATION ========================================================

	function update_registration($post){
		$this->db->trans_start();
		
		// update KTP
		
		$data_ktp = array(
				'updated_dt' => date('Y-m-d h:i:d'),
				'updated_by' => $this->user['id'],
				'ktp_number' => $post['ktp_number'],
				'location' => $post['ktp_location'],
				'type' => $post['ktp_type'],
				'address' => $post['ktp_address'],
				'name' => $post['name']
		);
		
		$this->db->where('id', $post['ktp_id']);
		$this->db->update('master_ktp', $data_ktp);
		
		// update SIM
		
		$data_sim = array(
				'updated_dt' => date('Y-m-d h:i:d'),
				'updated_by' => $this->user['id'],
				'sim_number' => $post['sim_number'],
				'type' => $post['type_sim'],
				'address' => $post['sim_address'],
				'sim_expire_date' => $post['sim_expire_date'],
				'name' => $post['name']
		);
		
		$this->db->where('id', $post['sim_id']);
		$this->db->update('master_sim', $data_sim);
		
		// update registration
		
		$data_reg = array(
				'updated_dt' => date('Y-m-d h:i:d'),
				'updated_by' => $this->user['id'],
				'name' => $post['name'],
				'pool_id' => $post['pool_id'],
				'place_of_birth' => $post['place_of_birth'],
				'date_of_birth' => $post['date_of_birth'],
				'gender' => $post['gender'],
				'blood' => $post['blood'],
				'religion' => $post['religion'],
				'last_education' => $post['last_education'],
				'bank_account_number' => $post['bank_account_number'],
				'skck_number' => $post['skck_number'],
				'status' => 'On Process',
				'phone' => $post['phone_number'],
				'bank' => $post['bank'],
				'email' => $post['email'],
				'emergency_number' => $post['emergency_number'],
				'skck_type' => $post['skck_type'],
				'tipe' => $post['tipe'],
				'ketentuan_jaminan' => $post['ketentuan_jaminan']
		);
		
		$this->db->where('id', $post['id']);
		$this->db->update('driver_registration', $data_reg);
		
		$update_reg = $this->db->affected_rows();
		
		$this->db->trans_complete(); 
		return $update_reg;
	}

}