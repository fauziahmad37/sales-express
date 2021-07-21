<?php

class log_inventory_stock_model extends CI_Model {
	function data($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		
		$res = $this->db->query("select log_inventory_stock.*, loc_part, kode_part, kode_material, 
				master_sparepart.item_name as sparepart, master_material.item_name as material, master_sparepart.internal_code
			from log_inventory_stock
			join inventory_workshop on id_inventory = inventory_workshop.id and id_workshop = ".$id_workshop."
				and log_inventory_stock.created_dt >= '".$start."' and log_inventory_stock.created_dt <= '".$end."'
			left join master_sparepart on master_sparepart.id = id_sparepart
			left join master_material on master_material.id = id_material;");
		return $res->result_array();
	}

	function dataInOut($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));

		$res = $this->db->query("select a.id_inventory, sum (case when var_qty >= 0 then var_qty else 0 end) as in,
				       sum (case when var_qty < 0 then  var_qty else 0 end) as out, b.qty as qty_akhir, loc_part,
				       internal_code, internal_code_baru, kode_part, item_name, sale_price, ppn_jual_beli
				from workshop.log_inventory_stock a 
				left join workshop.inventory_workshop b on (b.id=a.id_inventory)
				left join workshop.master_sparepart c on (b.id_sparepart=c.id)
				where b.id_workshop=".$id_workshop." and a.created_dt >= '".$start."' and a.created_dt <= '".$end."'
				group by id_inventory, b.qty, loc_part, internal_code, internal_code_baru, kode_part, item_name, 
				sale_price, ppn_jual_beli;");
		return $res->result_array();
	}
}

