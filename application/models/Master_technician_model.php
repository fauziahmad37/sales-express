<?php

class master_technician_model extends CI_Model {	
	function data($is_option = false, $id_workshop = ''){
		if($is_option){
			if($id_workshop === '') //ALL
				$res = $this->db->where('active', 1)->order_by('id_workshop')->get('master_technician');
			else
				$res = $this->db->where('active', 1)->where('id_workshop', $id_workshop)->order_by('id_workshop')->get('master_technician');	
		}
		else {
			if($id_workshop === '') //ADMINISTRATOR
				$res = $this->db->order_by('id_workshop')->get('master_technician');
			else
				$res = $this->db->where('id_workshop', $id_workshop)->order_by('id_workshop')->get('master_technician');
		}
		
		return $res->result_array();
	}
	
	function detail($id, $id_workshop = ''){
		if($id_workshop === ''){ //ADMINISTRATOR
			$res = $this->db->where('id', $id)->limit(1)->get('master_technician');
		} else {
			$res = $this->db->where('id', $id)->where('id_workshop', $id_workshop)->limit(1)->get('master_technician');
		}
		return $res->row_array();
	}
	
	function save($post){
		foreach (Array('nama', 'id_workshop', 'active', 'alamat', 'nik', 'no_telepon1', 'no_telepon2', 
			'id_wo_tipe') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['input_by'] = $post['user_id'];
		$save['created_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->insert('master_technician', $save);
		if (!$res) return FALSE;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('nama', 'id_workshop', 'active', 'alamat', 'nik', 'no_telepon1', 'no_telepon2', 
			'id_wo_tipe') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['update_by'] = $post['user_id'];		
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_technician', $save);
		if (!$res) return FALSE;
		
		return true;
	}
}

