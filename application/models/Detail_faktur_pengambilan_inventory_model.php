<?php

class detail_faktur_pengambilan_inventory_model extends CI_Model {
	function data($id_faktur){
		$res = $this->db->query("select detail_faktur_pengambilan_inventory.*, loc_part, 
				master_sparepart.kode_part, master_sparepart.item_name as sparepart, 
				master_material.kode_material, master_material.item_name as material 
			from detail_faktur_pengambilan_inventory
			join inventory_workshop on inventory_workshop.id = detail_faktur_pengambilan_inventory.id_inventory and id_faktur = ".$id_faktur."
			left join master_sparepart on master_sparepart.id = inventory_workshop.id_sparepart
			left join master_material on master_material.id = inventory_workshop.id_material;")->result_array();
		
		return $res;
	}
	
	function detail($id){
		$res = $this->db->query("select detail_faktur_pengambilan_inventory.id, 
				detail_faktur_pengambilan_inventory.qty, harga_satuan, loc_part, 
				master_sparepart.kode_part, master_sparepart.item_name as sparepart, 
				master_material.kode_material, master_material.item_name as material 		
			from detail_faktur_pengambilan_inventory 
			join inventory_workshop on inventory_workshop.id = detail_faktur_pengambilan_inventory.id_inventory
				and detail_faktur_pengambilan_inventory.id = ".$id."
			left join master_sparepart on master_sparepart.id = inventory_workshop.id_sparepart
			left join master_material on master_material.id = inventory_workshop.id_material;")->row_array();
		return $res;
	}
	
	function data_jual($id_faktur){
		$tahun = date('Y').date('m')-1;
		$res = $this->db->query("select a.qty, b.nomor_referensi, a.id_inventory, harga_satuan, inventory_workshop.qty as base_qty, inventory_workshop.cost_lalu as cost_lalu
			from detail_faktur_pengambilan_inventory a
			join faktur_pengambilan_inventory b on id_faktur = b.id and id_faktur=".$id_faktur." and active = 1
			join inventory_workshop on inventory_workshop.id = a.id_inventory;")->result_array();
		if($res == ''){
			$res = $this->db->query("select a.qty, b.nomor_referensi, a.id_inventory, harga_satuan, inventory_workshop.qty as base_qty, inventory_workshop.cost_lalu as cost_lalu
			from detail_faktur_pengambilan_inventory a
			join faktur_pengambilan_inventory b on id_faktur = b.id and id_faktur=".$id_faktur." and active = 1
			join inventory_workshop on inventory_workshop.id = a.id_inventory;")->result_array();
		}
		
		return $res;
	}
	
	function save($post){
		foreach (Array('id_faktur', 'id_inventory', 'qty', 'harga_satuan') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];		
		$res = $this->db->insert('detail_faktur_pengambilan_inventory', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}
	
	function update($post){
		$id = $post['id'];
		foreach (Array('id_inventory', 'qty', 'harga_satuan') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['updated_by'] = $this->user['id'];		
		$res = $this->db->where('id', $post['id'])->update('detail_faktur_pengambilan_inventory', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
	
	function delete($id){
		$this->db->where('id', $id)->delete('detail_faktur_pengambilan_inventory');
		return true;
	}
}

