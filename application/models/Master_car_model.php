<?php

class master_car_model extends CI_Model {
	function detail($id){
		$res = $this->db->query("select master_car.id, no_rangka, no_mesin, no_polisi, no_pintu, master_car.nama as customer, 
			alamat, no_telepon1, no_telepon2, master_car_warna.warna, master_pool.nama as pool, id_pool,
			master_car_model.model, master_car_model.brand, master_jenis_customer.nama as jenis_customer, kip, nik, remarks, owner_pt_id
			from master_car 
			join master_car_model on master_car_model.id = id_model and master_car.id = ".$id." 
			join master_car_warna on master_car_warna.id = id_warna
			join master_jenis_customer on master_jenis_customer.id = id_jenis_customer
			join master_pool on master_pool.id = id_pool
			limit 1;")->row_array();
		return $res;
	}
	
	function save($post){
		foreach (Array('kip','nik','id_model', 'id_warna', 'no_rangka', 'no_mesin', 'no_polisi', 'no_pintu', 'nama', 'alamat', 
			'tahun', 'no_telepon1', 'no_telepon2', 'id_jenis_customer', 'id_pool', 'remarks', 'owner_pt_id') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['tahun'] = intval($save['tahun']);
		$save['create_dt'] = date('Y-m-d H:i:s');
		
		$res = $this->db->select('id')->where('no_rangka', $save['no_rangka'])->limit(1)->get('master_car')->row_array();
		if(isset($res['id']) && $res['id'] > 0){
			$post['id'] = $res['id'];
			return $this->update($post);
		}
		
		$res = $this->db->insert('master_car', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('id_model','kip','nik','id_warna', 'no_polisi', 'no_pintu', 'nama', 'alamat', 
			'tahun', 'no_telepon1', 'no_telepon2', 'id_jenis_customer', 'id_pool', 'remarks' ,'owner_pt_id') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['update_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_car', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
	
	function load_data_by_no_rangka($no_rangka){
		$res = $this->db->query("select master_car.*, master_car_warna.warna, master_car_model.model, master_car_model.brand, kip, nik, remarks, owner_pt_id 
			from master_car join master_car_model on master_car_model.id = id_model
			join master_car_warna on master_car_warna.id = id_warna
			where lower(no_rangka) like lower('%".$no_rangka."%');")->result_array();
		
		return $res;
	}
	
	function load_data_by_no_polisi($no_polisi){
		$res = $this->db->query("select master_car.*, master_car_warna.warna, master_car_model.model, master_car_model.brand, kip, nik, remarks, owner_pt_id 
			from master_car join master_car_model on master_car_model.id = id_model
			join master_car_warna on master_car_warna.id = id_warna
			where lower(no_polisi) like lower('%".$no_polisi."%');")->result_array();
		
		return $res;
	}
	
	function load_data_by_no_mesin($no_mesin){
		$res = $this->db->query("select master_car.*, master_car_warna.warna, master_car_model.model, master_car_model.brand, kip, nik, remarks, owner_pt_id
			from master_car join master_car_model on master_car_model.id = id_model
			join master_car_warna on master_car_warna.id = id_warna
			where lower(no_mesin) like lower('%".$no_mesin."%');")->result_array();
		
		return $res;
	}
	
	function load_data_by_no_pintu($no_pintu){
		$res = $this->db->query("select a.id, a.id_jenis_customer, a.id_model, a.kip, a.nik, a.id_pool, a.id_warna, a.no_rangka, a.no_mesin, a.no_polisi,
				a.no_pintu, a.nama, a.remarks, a.owner_pt_id, a.alamat, a.tahun, a.no_telepon1, a.no_telepon2,
				d.warna, c.model, c.brand
			from master_car a 
			join master_car_model c on c.id = id_model
			join master_car_warna d on d.id = id_warna
			left join work_order b on(b.id_car=a.id)
			where lower(no_pintu) like lower('%".$no_pintu."%') and b.status not in('Aktif','Selesai','Pending Cancel') group by a.id, a.id_jenis_customer, a.id_model, a.kip, a.nik, a.id_pool, a.id_warna, a.no_rangka, a.no_mesin, a.no_polisi,
				a.no_pintu, a.nama, a.remarks, a.owner_pt_id, a.alamat, a.tahun, a.no_telepon1, a.no_telepon2,
				d.warna, c.model, c.brand;")->result_array();
		
		return $res;
	}
}

