<?php

class master_material_model extends CI_Model {
	function data(){
		$res = $this->db->query("select id, kode_material, item_name, internal_code, sale_price
			from master_material where active = 1 and master_material.sale_price_approved_by is not null;");
		
		return $res->result_array();
	}
	
	function data_raw(){
		$res = $this->db->get('master_material')->result_array();
		
		return $res;
	}
	
	function detail($id){
		$res = $this->db->where('id', $id)->limit(1)->get('master_material')->row_array();
		return $res;
	}
	
	function save($post){
		foreach (Array('kode_material', 'item_name','internal_code','id_uom', 'sale_price', 'active', 'part_number','merk','type_model','coa','category_item','car_type','id_gudang','area') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['input_by'] = $this->user['id'];
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['status'] = 'Aktif';		
		$res = $this->db->insert('master_material', $save);
		if (!$res) return FALSE;
		
		return true;
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('item_name','internal_code','id_uom', 'sale_price', 'active', 'part_number','merk','type_model','coa','category_item','car_type','id_gudang','area') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['update_by'] = $this->user['id'];
		$save['update_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_material', $save);
		if (!$res) return FALSE;
		
		return true;
	}
	
	function update_sale_price_proposed($post){
		$id = $post['id'];
		$save['sale_price_proposed'] = $post['sale_price_proposed'];
		$save['sale_price_proposed_by'] = $this->user['id'];		
		$save['sale_price_proposed_dt'] = date('Y-m-d H:i:s');
		$save['status'] = 'Pending Approval';		
		$res = $this->db->where('id', $id)->update('master_material', $save);
		if (!$res) return FALSE;
		
		return true;
	}
	
	function update_sale_price_approved($post){
		$id = $post['id'];
		$id_user = $this->user['id'];		
		$dt = date('Y-m-d H:i:s');
		$save['sale_price'] = $post['sale_price_proposed'];
		$save['sale_price_proposed'] = 0;
		$save['sale_price_approved_by'] = $id_user;
		$save['sale_price_approved_dt'] = $dt;
		$save['status'] = 'Aktif';
		$save['update_by'] = $id_user;
		$save['update_dt'] = $dt;
		$res = $this->db->where('id', $id)->update('master_material', $save);
		if (!$res) return FALSE;
		
		$saveLog = array();
		$saveLog['id_material'] = $id;
		$saveLog['sale_price_before'] = $post['sale_price'];
		$saveLog['sale_price_after'] = $post['sale_price_proposed'];
		$saveLog['sale_price_proposed_by'] = $post['sale_price_proposed_by'];
		$saveLog['sale_price_approved_by'] = $id_user;		
		$saveLog['sale_price_proposed_dt'] = $post['sale_price_proposed_dt'];
		$saveLog['sale_price_approved_dt'] = $dt;
		$res = $this->db->insert('log_price_material', $saveLog);
		if (!$res) return FALSE;
		
		return true;
	}
}

