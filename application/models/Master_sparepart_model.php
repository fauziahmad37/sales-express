<?php

class master_sparepart_model extends CI_Model {
	function data(){
		$res = $this->db->query("select workshop.master_sparepart.id, workshop.master_sparepart.kode_part, workshop.master_sparepart.item_name, workshop.master_sparepart.internal_code,
			workshop.master_uom.uom, sale_price, 
			(master_car_model.brand || ' ' || master_car_model.model) as model, id_model
			from workshop.master_sparepart 
			join workshop.model_sparepart on model_sparepart.id_sparepart = master_sparepart.id
			and active = 1 and sale_price > 0
			join workshop.master_car_model on master_car_model.id = id_model
			join workshop.master_uom on workshop.master_sparepart.id_uom = workshop.master_uom.id;");
		
		return $res->result_array();
	}
	
	function data_raw(){
		$res = $this->db->order_by('id')->get('master_sparepart')->result_array();
		return $res;
	}
	
	function detail($id){
		$res = $this->db->where('id', $id)->limit(1)->get('master_sparepart')->row_array();
		return $res;
	}
	
	function data_by_car_model($id_model){
		$res = $this->db->query("select master_sparepart.id, kode_part, item_name, sale_price, 
			(master_car_model.brand || ' ' || master_car_model.model) as model, id_model
			from workshop.master_sparepart 
			left join workshop.model_sparepart on (model_sparepart.id_sparepart = master_sparepart.id )
			left join workshop.master_car_model on (master_car_model.id = id_model)
			where (id_model = 8 or id_model= ".$id_model.") and master_sparepart.active = 1 and sale_price > 0;");
		
		return $res->result_array();
	}
	
	function save($post){
		foreach (Array('kode_part', 'item_name','internal_code','internal_code_iproc','id_uom', 'sale_price', 'active','merk','coa','jenis','gudang','area','car_type') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['input_by'] = $this->user['id'];
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['status'] = 'Aktif';		
		$res = $this->db->insert('master_sparepart', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}

	function save_master_sparepart($post){
		foreach (Array('id_workshop','id_sparepart','loc_part', 'sale_price', 'active','jenis','gudang','area','car_type') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['input_by'] 		= $this->user['id'];
		$save['created_dt'] 	= date('Y-m-d H:i:s');
		$save['qty_lalu']		= 0;
		$save['cost_lalu'] 		= 0;
		$save['total_lalu']		= 0;
		$save['qty_in'] 		= 0;
		$save['total_in'] 		= 0;
		$save['qty_out'] 		= 0;
		$save['total_out'] 		= 0;
		$save['qty_akhir'] 		= 0;
		$save['total_akhir'] 	= 0;
				
		$res = $this->db->insert('inventory_workshop', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}

	
	function update($post){
		$id = $post['id'];
		foreach (Array('item_name','internal_code', 'internal_code_iproc', 'active','id_uom','sale_price','merk','coa','jenis','gudang','area','car_type') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['update_by'] = $this->user['id'];
		$save['update_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->where('id', $id)->update('master_sparepart', $save);
		if (!$res) return FALSE;
		
		return true;
	}
	
	function update_sale_price_proposed($post){
		$id = $post['id'];
		$save['sale_price_proposed'] = $post['sale_price_proposed'];
		$save['sale_price_proposed_by'] = $this->user['id'];		
		$save['sale_price_proposed_dt'] = date('Y-m-d H:i:s');
		$save['status'] = 'Pending Approval';
		$res = $this->db->where('id', $id)->update('master_sparepart', $save);
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
		$res = $this->db->where('id', $id)->update('master_sparepart', $save);
		if (!$res) return FALSE;
		
		$saveLog = array();
		$saveLog['id_sparepart'] = $id;
		$saveLog['sale_price_before'] = $post['sale_price'];
		$saveLog['sale_price_after'] = $post['sale_price_proposed'];
		$saveLog['sale_price_proposed_by'] = $post['sale_price_proposed_by'];
		$saveLog['sale_price_approved_by'] = $id_user;		
		$saveLog['sale_price_proposed_dt'] = $post['sale_price_proposed_dt'];
		$saveLog['sale_price_approved_dt'] = $dt;
		$res = $this->db->insert('log_price_sparepart', $saveLog);
		if (!$res) return FALSE;
		
		return true;
	}
	
	function load_data_by_internal_code($internal_code){
		$res = $this->db->query("select * from master_sparepart where internal_code ='".$internal_code."';")->result_array();
		return $res;
	}
	
	function cari_sparepart($id){
		$res = $this->db->query("select internal_code, kode_part, item_name, qty, master_workshop.name
			from inventory_workshop
			join master_sparepart on(inventory_workshop.id_sparepart=master_sparepart.id)
			join master_workshop on(inventory_workshop.id_workshop=master_workshop.id)
			where master_sparepart.internal_code like('%".$id."%');")->result_array();
		return $res;
	}
}

