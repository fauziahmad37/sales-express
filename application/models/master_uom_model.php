<?php

class master_uom_model extends CI_Model {
	function data($is_option = false){
		if($is_option)
			$res = $this->db->where('active', 1)->get('master_uom');
		else
			$res = $this->db->get('master_uom');
		
		return $res->result_array();
	}
	
	function detail($id){
		$res = $this->db->where('id', $id)->limit(1)->get('master_uom');
		
		return $res->row_array();
	}
	
	function save($post){
		foreach (Array('uom', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->insert('master_uom', $save);
		if (!$res) return FALSE;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('uom', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_uom', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
}

