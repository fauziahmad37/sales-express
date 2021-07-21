<?php

class master_work_order_tipe_model extends CI_Model {
	function data($is_only_tipe_technician = false){
		if($is_only_tipe_technician)
			$res = $this->db->where('id <', 3)->get('master_work_order_tipe');
		else
			$res = $this->db->get('master_work_order_tipe');			
		return $res->result_array();
	}
}

