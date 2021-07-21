<?php

class master_jenis_customer_model extends CI_Model {
	function data($is_option = false){
		if($is_option)
			$res = $this->db->where('active', 1)->get('master_jenis_customer');
		else
			$res = $this->db->get('master_jenis_customer');
		
		return $res->result_array();
	}
	
	function detail($id){
		$res = $this->db->where('id', $id)->limit(1)->get('master_jenis_customer');
		
		return $res->row_array();
	}
	
	function save($post){
		foreach (Array('nama', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->insert('master_jenis_customer', $save);
		if (!$res) return FALSE;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('nama', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_jenis_customer', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
}

