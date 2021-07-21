<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_pt_model extends CI_Model {
	function data($is_option = false){
		if($is_option){
			$res = $this->db->where('status', 1)->get('master_pt');
		
		
		}else{
			$res = $this->db->get('master_pt');
		}
		return $res->result_array();
	}

	function detail($id){
		$res = $this->db->where('ptid', $id)->limit(1)->get('master_pt');
		
		return $res->row_array();
	}

	function save($post){
		foreach (Array('ptid', 'ptshorname', 'ptfullname', 'ptaddress', 'ptcity', 'ptpostcode', 'ptnpwp', 'ptphone', 'ptfax', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->insert('master_pt', $save);
		if (!$res) return FALSE;
	}

	function update($post){
		$id = $post['id'];
		foreach (Array('ptid', 'ptshorname', 'ptfullname', 'ptaddress', 'ptcity', 'ptpostcode', 'ptnpwp', 'ptphone', 'ptfax', 'active') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_pt', $save);
		if (!$res) return FALSE;
		
		return $id;
	}

}

/* End of file master_pt_model.php */
/* Location: ./application/models/master_pt_model.php */