<?php

class service_estimation_model extends CI_Model {
	function data($id){
		$res = $this->db->query("select service_estimation.id, id_wo, qty, price_qty, total_price, 
			jenis_servis, kode_material, master_material.item_name as material, kode_part, 
			master_sparepart.item_name as sparepart, lts_code, description, id_jenis_servis, id_lts,
			id_technician
			from service_estimation 
			join master_jenis_service on master_jenis_service.id = id_jenis_servis and id_wo = ".$id."
			join work_order on id_wo = work_order.id
			left join master_lts on master_lts.id = id_lts
			left join master_sparepart on master_sparepart.id = id_sparepart 
			left join master_material on master_material.id = id_material
			order by service_estimation.id;")->result_array();
		return $res;
	}
	
	function detail($id){
		$res = $this->db->query("select service_estimation.id, id_wo, qty, price_qty, total_price, hourly_price,
			jenis_servis, kode_material, master_material.item_name as material, kode_part, 
			master_sparepart.item_name as sparepart, lts_code, description, id_jenis_servis, 
			id_jenis_car, id_lts, id_sparepart, id_material, master_sparepart.jenis
			from service_estimation 
			join master_jenis_service on master_jenis_service.id = id_jenis_servis and service_estimation.id = ".$id."
			left join master_lts on master_lts.id = id_lts
			left join master_jenis_car on master_jenis_car.id = id_jenis_car			
			left join master_sparepart on master_sparepart.id = id_sparepart 
			left join master_material on master_material.id = id_material
			limit 1;")->row_array();
		
		return $res;
	}
	
	function save($post){
		//print_r($post);die();
		foreach (Array('id_wo', 'id_jenis_servis', 'id_lts', 'id_sparepart', 'id_material',
			'qty', 'price_qty', 'total_price'
			) AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		if(!isset($save['id_lts']) && !isset($save['id_sparepart']) && !isset($save['id_material'])) return false;
		if($post['price_lts'] != null){
			$save['price_qty'] = $post['price_lts'];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];
		$res = $this->db->insert('service_estimation', $save);
		if (!$res) return FALSE;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('id_wo', 'id_jenis_servis', 'id_lts', 'id_sparepart', 'id_material',
			'qty', 'price_qty', 'total_price'
			) AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		if(!isset($save['id_lts']) && !isset($save['id_sparepart']) && !isset($save['id_material'])) return false;
		
		if($save['id_jenis_servis'] == 1) { //JASA
			$save['id_sparepart'] = null;
			$save['id_material'] = null;			
		} else if($save['id_jenis_servis'] == 2) { //SPAREPART
			$save['id_lts'] = null;
			$save['id_material'] = null;			
		} else if($save['id_jenis_servis'] == 3) { //MATERIAL
			$save['id_lts'] = null;
			$save['id_sparepart'] = null;			
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['update_by'] = $this->user['id'];
		$res = $this->db->where('id', $id)->update('service_estimation', $save);
		if (!$res) return FALSE;
	}
	
	function delete($id){
		$res = $this->db->where('id', $id)->delete('service_estimation');
		if (!$res) return FALSE;
	}
}

