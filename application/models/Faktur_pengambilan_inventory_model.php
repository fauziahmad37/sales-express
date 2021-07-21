<?php

class faktur_pengambilan_inventory_model extends CI_Model {
	function data($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		
		$res = $this->db->query("select faktur_pengambilan_inventory.*, wo_number from faktur_pengambilan_inventory 
			join work_order on work_order.id = id_wo and id_workshop = ".$id_workshop."
			and faktur_pengambilan_inventory.created_dt >= '".$start."' and faktur_pengambilan_inventory.created_dt <= '".$end."' ");
		
		return $res->result_array();
	}
	
	function detail($id){
		$res = $this->db->query("select faktur_pengambilan_inventory.*, wo_number, wo.created_dt, id_workshop, mc.no_pintu, id_jenis_customer
			from workshop.faktur_pengambilan_inventory
			join workshop.work_order wo on wo.id = id_wo
			inner join workshop.master_car mc on mc.id = wo.id_car
			and faktur_pengambilan_inventory.id = ".$id." limit 1;")->row_array();

			// "select faktur_pengambilan_inventory.*, wo_number, work_order.created_dt, id_workshop from faktur_pengambilan_inventory
			// join work_order on work_order.id = id_wo and faktur_pengambilan_inventory.id = ".$id." limit 1;")->row_array();
		
		return $res;
	}
	
	function supply_wo($id_wo){
		$res = $this->db->query("select detail_faktur_pengambilan_inventory.qty, harga_satuan, kode_part, 
			kode_material, master_sparepart.item_name as sparepart, master_material.item_name as material, detail_faktur_pengambilan_inventory.id
		from detail_faktur_pengambilan_inventory 
		join faktur_pengambilan_inventory on faktur_pengambilan_inventory.id = id_faktur 
			and id_wo = ".$id_wo." and faktur_pengambilan_inventory.active = 1
		join inventory_workshop on id_inventory = inventory_workshop.id
		left join master_sparepart on master_sparepart.id = id_sparepart
		left join master_material on master_material.id = id_material;")->result_array();
		
		return $res;
	}
	
	function save($post){
		foreach (Array('id_wo') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];	
		
		$res = $this->db->insert('faktur_pengambilan_inventory', $save);
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
	
	function get_kode_workshop(){
		$data = $this->db->select('code')->where('id', $this->user['id_workshop'])->get('master_workshop')->row_array();
		
		$kode = (Count($data) > 0 ? $data['code'] : '');
		
		return $kode;
	}
	
	function publish($id){
		$test = $this->db->query("select active from faktur_pengambilan_inventory where id = ".$id." and active = 0;")->row_array();
		if($test < 1){
			set_message(Admin::ERROR_GAGAL_PUBLISH_PENGAMBILAN, 'error');
			return FALSE;
		}
		$save['active'] = 1;
		$save['updated_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');	
		
		//CHECK SEQUENCE
		$kode = $this->get_kode_workshop();
		$sequence = 'faktur_pengambilan_inventory_'.strtolower($kode).'_nomor_referensi_seq';
		$res_exist = $this->db->query("SELECT relname FROM pg_class where relname = '".$sequence."'")->row_array();
		if(Count($res_exist) < 1){
			//CREATE NEW SEQUENCE
			$this->db->query("create sequence ".$sequence." start 1;");
		}
		
		$save['nomor_referensi'] = $this->db->query("select ('".$kode."SS' || 
			lpad((nextval('".$sequence."'))::text, 7, '0')) as nomor_referensi")->row_array()['nomor_referensi'];
		$res = $this->db->where('id', $id)->update('faktur_pengambilan_inventory', $save);
		if(!$res) return False;
		
		return $id;
	}

	function detail_retur($id){
		$res = $this->db->query("select fi.id, fi.id_faktur, fi.id_inventory, fi.qty, fi.harga_satuan, iw.id_sparepart, kode_part, item_name, internal_code 
			from workshop.detail_faktur_pengambilan_inventory fi
			left join workshop.inventory_workshop iw on (iw.id = fi.id_inventory)
			left join workshop.master_sparepart ms on (iw.id_sparepart=ms.id)
			where fi.id = ".$id."; ")->row_array();
		return $res;
	}
}

