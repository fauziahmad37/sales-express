<?php

class master_jenis_service_model extends CI_Model {	
	function data(){
		$res = $this->db->get('master_jenis_service')->result_array();
		
		return $res;
	}
}

