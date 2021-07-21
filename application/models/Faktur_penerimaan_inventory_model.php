<?php

class faktur_penerimaan_inventory_model extends CI_Model {
	function data($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		
		$res = $this->db->query("select * from faktur_penerimaan_inventory
			where tgl >= '".$start."' and tgl <= '".$end."' and id_workshop = ".$id_workshop.";");
		
		return $res->result_array();
	}
	
	function detail($id){
		$res = $this->db->where('id', $id)->limit(1)->get('faktur_penerimaan_inventory');
		
		return $res->row_array();
	}
	
	function save($post){
		foreach (Array('nomor_referensi', 'id_workshop', 'tgl') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];	
		
		$test = $this->db->query("select nomor_referensi from faktur_penerimaan_inventory where id_workshop = ".$save['id_workshop']." and nomor_referensi = '".$save['nomor_referensi']."';")->row_array();
		if($test > 0){
			set_message(Admin::ERROR_NO_REF_SUDAH_DIGUNAKAN, 'error');
			return FALSE;
		}
			
		$res = $this->db->insert('faktur_penerimaan_inventory', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('nomor_referensi', 'tgl') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['updated_by'] = $this->user['id'];		
		$res = $this->db->where('id', $id)->update('faktur_penerimaan_inventory', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
	
	function publish($id){
		$test = $this->db->query("select active from faktur_penerimaan_inventory where id = ".$id." and active = 0;")->row_array();
		if($test < 1){
			set_message(Admin::ERROR_GAGAL_PUBLISH_PENERIMAAN, 'error');
			return FALSE;
		}
		$save['active'] = 1;
		$save['updated_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('faktur_penerimaan_inventory', $save);
		if(!$res) return False;
		
		return $id;
	}
}

