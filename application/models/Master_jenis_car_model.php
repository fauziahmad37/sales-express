<?php

class master_jenis_car_model extends CI_Model {
	function data($is_option = false){
		if($is_option)
			$res = $this->db->where('active', 1)->get('master_jenis_car');
		else
			$res = $this->db->get('master_jenis_car');
		
		return $res->result_array();
	}
	
	function detail($id){
		$res = $this->db->where('id', $id)->limit(1)->get('master_jenis_car');
		
		return $res->row_array();
	}
	
	function save($post){
		foreach (Array('jenis', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['created_by'] = $this->user['id'];		
		$res = $this->db->insert('master_jenis_car', $save);
		if (!$res) return FALSE;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('jenis', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['updated_by'] = $this->user['id'];		
		$res = $this->db->where('id', $id)->update('master_jenis_car', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
}

