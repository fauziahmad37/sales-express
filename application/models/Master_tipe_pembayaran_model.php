<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class master_tipe_pembayaran_model extends CI_Model {
	function data($is_option = false){
		if($is_option)
			$res = $this->db->where('active', 1)->get('master_tipe_pembayaran');
		else
			$res = $this->db->get('master_tipe_pembayaran');
		
		return $res->result_array();
	}
}

