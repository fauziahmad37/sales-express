<?php

class next_model extends CI_Model {
		
	function get_data_email(){
		$CI = &get_instance();
        $this->db = $CI->load->database('atlantis', TRUE);
		$res = $this->db->query("select application_email  from evoucher.driver_applicant limit 1;")->row_array();
		return $res;
	}
	
	
	
}

