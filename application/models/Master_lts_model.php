<?php

class master_lts_model extends CI_Model {
	function data(){
		$res = $this->db->query("select master_lts.id, lts_code, description, flat_rate, 
			hourly_price, jenis, id_jenis_car
			from master_lts join master_jenis_car on master_jenis_car.id = id_jenis_car and master_lts.active = 1
			and master_lts.hourly_price_approved_by is not null;");
		
		return $res->result_array();
	}
	
	function data_raw(){
		$res = $this->db->query("select master_lts.*, jenis
			from master_lts left join master_jenis_car on master_jenis_car.id = id_jenis_car order by lts_code, id_jenis_car;");
		
		return $res->result_array();
	}
	
	function detail($id){
		$res = $this->db->query("select master_lts.*, jenis
			from master_lts left join master_jenis_car on master_jenis_car.id = id_jenis_car where master_lts.id = ".$id.";");
		
		return $res->row_array();
	}
	
	function data_by_car_jenis($id_jenis_car){
		//print_r($id_jenis_car);
		$res = $this->db->query("select master_lts.id, lts_code, description, flat_rate, 
			hourly_price, jenis, id_jenis_car
			from master_lts join master_jenis_car on master_jenis_car.id = id_jenis_car
			and master_lts.active = 1
			and master_lts.hourly_price_approved_by is not null;");
		
		return $res->result_array();
	}
	
	function save($post){
		foreach (Array('lts_code', 'description', 'flat_rate', 'active', 'id_jenis_car') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['input_by'] = $this->user['id'];
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['status'] = 'Aktif';
		$save['hourly_price'] = 0;
		$res = $this->db->insert('master_lts', $save);
		if (!$res) return FALSE;
		
		return true;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('description', 'flat_rate', 'id_jenis_car', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['update_by'] = $this->user['id'];
		$save['update_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_lts', $save);
		if (!$res) return FALSE;
		
		return true;
	}
	
	function update_sale_price_proposed($post){
		$id = $post['id'];
		$save['hourly_price_proposed'] = $post['hourly_price_proposed'];
		$save['hourly_price_proposed_by'] = $this->user['id'];		
		$save['hourly_price_proposed_dt'] = date('Y-m-d H:i:s');
		$save['status'] = 'Pending Approval';		
		$res = $this->db->where('id', $id)->update('master_lts', $save);
		if (!$res) return FALSE;
		
		return true;
	}	
	function update_sale_price_approved($post){
		$id = $post['id'];
		$dt = date('Y-m-d H:i:s');
		$id_user = $this->user['id'];
		
		$save['hourly_price'] = $post['hourly_price_proposed'];
		$save['hourly_price_proposed'] = 0;
		$save['hourly_price_approved_by'] = $id_user;		
		$save['hourly_price_approved_dt'] = $dt;
		$save['status'] = 'Aktif';
		$save['update_by'] = $id_user;
		$save['update_dt'] = $dt;
		$res = $this->db->where('id', $id)->update('master_lts', $save);
		if (!$res) return FALSE;
		
		$saveLog = array();
		$saveLog['id_lts'] = $id;
		$saveLog['sale_price_before'] = $post['hourly_price'];
		$saveLog['sale_price_after'] = $post['hourly_price_proposed'];
		$saveLog['sale_price_proposed_by'] = $post['hourly_price_proposed_by'];
		$saveLog['sale_price_approved_by'] = $id_user;		
		$saveLog['sale_price_proposed_dt'] = $post['hourly_price_proposed_dt'];
		$saveLog['sale_price_approved_dt'] = $dt;
		$res = $this->db->insert('log_price_lts', $saveLog);
		if (!$res) return FALSE;
		
		return true;
	}
}

