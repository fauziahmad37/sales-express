<?php

class vehicle_model extends CI_Model {

	function add_new_vehicle($post, $depanFileName, $belakangFileName, $kiriFileName, $kananFileName){

		$save = array();

		$save['updated_dt'] = date('Y-m-d 00:00:00');

		$save['no_polisi']  = strtoupper($post['no_polisi']);
		$save['tahun']  = $post['tahun'];
		$save['unit_bisnis']  = strtoupper($post['unit_bisnis']);
		$save['alamat'] = strtoupper($post['alamat']);
		$save['pt']  = strtoupper($post['pt']);
		
		$save['no_rangka']  = strtoupper($post['no_rangka']);
		$save['no_mesin']  = strtoupper($post['no_mesin']);
		$save['no_bpkb']  = strtoupper($post['no_bpkb']);
		
		$save['tipe']  = strtoupper($post['tipe']);
		
		$save['path_depan'] = '/uploads/depan/'.$depanFileName;
		$save['path_belakang'] = '/uploads/belakang/'.$belakangFileName;
		$save['path_kiri'] = '/uploads/kiri/'.$kiriFileName;
		$save['path_kanan'] = '/uploads/kanan/'.$kananFileName;
		$save['status'] = '';
		$save['keterangan'] = $post['keterangan'];
			
				
		$res = $this->db->insert('master_car', $save);

		print_r($res);die();

		//echo $this->db->last_query();
		if (!$res) return FALSE;
		
		return $this->db->insert_id();

	}

	function update_vehicle($post, $depanFileName, $belakangFileName, $kananFileName, $kiriFileName){

		$update = array();

		$update['updated_dt'] = date('Y-m-d 00:00:00');

		$update['no_polisi']  = strtoupper($post['no_polisi']);
		$update['tahun']  = $post['tahun'];
		$update['unit_bisnis']  = strtoupper($post['unit_bisnis']);
		$update['alamat'] = strtoupper($post['alamat']);
		$update['pt']  = strtoupper($post['pt']);
		
		$update['no_rangka']  = strtoupper($post['no_rangka']);
		$update['no_mesin']  = strtoupper($post['no_mesin']);
		$update['no_bpkb']  = strtoupper($post['no_bpkb']);
		
		$update['tipe']  = strtoupper($post['tipe']);

		$update['harga_dasar'] = $post['harga_dasar'];
		$update['harga_dasar_khusus'] = $post['harga_dasar_khusus'];
		$update['komisi'] = $post['komisi'];
		$update['biaya_penjualan'] = $post['biaya_penjualan'];
		$update['price_list'] = $post['price_list'];

		$update['kondisi'] = $post['kondisi'];
		$save['keterangan'] = $post['keterangan'];
		

		if($depanFileName !== 'kosong'){
			$update['path_depan'] = '/uploads/depan/'.$depanFileName;
		}
		if($belakangFileName !== 'kosong'){
			$update['path_belakang'] = '/uploads/belakang/'.$belakangFileName;
		}
		if($kiriFileName !== 'kosong'){
			$update['path_kiri'] = '/uploads/kiri/'.$kiriFileName;
		}
		if($kananFileName !== 'kosong'){
			$update['path_kanan'] = '/uploads/kanan/'.$kananFileName;
		}

		$update['status_unit'] = $post['status_unit'];
			
		$res = $this->db->where('id', $post['id']);		
		$res = $this->db->update('master_car', $update);

		

		//echo $this->db->last_query();
		if (!$res) return FALSE;
		
		return $this->db->insert_id();

	}
	
	function get_data_for_list_approval(){
		$res = $this->db->query("select  a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  
								a.setoran_harian, a.create_by, a.status, c.full_name, a.tahun, a.status
								from master_car a
								left join master_pool b on (a.id_pool = b.id)
								left join cac_user c on(c.id=a.create_by)
								where status = 'Waiting Approval';")->result_array();
			
		return $res;
	}
	
	function get_data_for_approval($id){
		$res = $this->db->query("select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk,a.unit_bisnis			
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			where status = 'Waiting Approval' and a.id=".$id.";")->row_array();
			
		return $res;
	}
	
	function approve_data_registration_vehicle($id){
		
		$approve_by = $this->user['id'];
		$approve_dt = date('Y-m-d H:i:s');	
		
		$this->db->where('id',$id); 
		$this->db->set('status','Active');
		$this->db->set('approve_by',$approve_by);
		$this->db->set('approve_dt',$approve_dt);
		$this->db->update('master_car');	
			
		return true;
	}
	
	function reject_data_registration_vehicle($id){
		
		$approve_by = $this->user['id'];
		$approve_dt = date('Y-m-d H:i:s');	
		
		$this->db->where('id',$id); 
		$this->db->set('status','Reject');
		$this->db->set('approve_by',$approve_by);
		$this->db->set('approve_dt',$approve_dt);
		$this->db->update('master_car');	
			
		return true;
	}
	
	function list_vehicle(){
		$res = $this->db->query("select * from master_car a")->result_array();
			
		return $res;
	}
	
	function list_vehicle_stnk_exp_30(){
		$res = $this->db->query("select a.id, b.name as pool_name, a.no_pintu, a.no_polisi, a.merek, a.tipe, a.tahun, a.status, a.date_expired_stnk, a.date_expired_keur, a.date_expired_stnk, 
								a.date_expired_tera, a.date_expired_kiukio, a.no_rangka, a.no_mesin	,a.no_stnk, a.no_tera, a.no_keur, a.no_kiukio
								from master_car a
			left join master_pool b on(a.id_pool=b.id) 
			where extract (epoch from (a.date_expired_stnk - now()))::integer/(60*60*24) > 0 and extract (epoch from (a.date_expired_stnk - now()))::integer/(60*60*24) < 30
			order by a.create_dt desc")->result_array();
			
		return $res;
	}
	
	function get_detail_car($id){
		$res = $this->db->query("select * from master_car where id=".$id.";")->row_array();
			
		return $res;
	}
	
}

