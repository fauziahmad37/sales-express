<?php

class master_workshop_model extends CI_Model {
	function data($is_option = false, $id_workshop = ''){
		if($is_option){
			if($id_workshop === '')
				$res = $this->db->where('active', 1)->get('master_pool');
			else
				$res = $this->db->where('active', 1)->where('id', $id_workshop)->get('master_pool');							
		}
		else
			$res = $this->db->get('master_workshop');
		
		return $res->result_array();
	}
	
	function detail($id){
		$res = $this->db->where('id', $id)->limit(1)->get('master_workshop');
		
		return $res->row_array();
	}
	
	function save($post){
		foreach (Array('name', 'code', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->insert('master_workshop', $save);
		if (!$res) return FALSE;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('name', 'code', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_workshop', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
}