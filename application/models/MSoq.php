<?php
	class MSoq extends CI_Model {

		function save_master_soq($post){
			//print_r($post['id_inventory']);die();
			$get_id_inventory = $this->db->query("select * from soq a
				left join inventory_workshop b on (a.id_inventory=b.id)
				where a.id_inventory=".$post['id_inventory'].";")->row_array();
			
			if($get_id_inventory == null){
				foreach (Array('id_inventory','potential','order_cycle','lead_time','safety_stock','unit_aktif') AS $key => $val) {
					if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
				}
				$qty = $post['qty'];
				$min_stock = ($post['potential']*$post['safety_stock'])*$post['unit_aktif'];
				$max_order = ($post['potential']*($post['order_cycle']+$post['lead_time']+$post['safety_stock']))*$post['unit_aktif'];
				
				$save['min_stock'] = $min_stock;
				$save['max_order'] = $max_order;
				$save['created_by'] = $this->user['id'];
				$save['created_dt'] = date('Y-m-d H:i:s');
				$save['soq'] = $max_order-$qty;
				
				$res = $this->db->insert('soq', $save);
				if (!$res) return FALSE;
				return $this->db->insert_id();
			} else {
				foreach (Array('id_inventory','potential','order_cycle','lead_time','safety_stock','unit_aktif') AS $key => $val) {
					if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
				}
				$qty = $post['qty'];
				$min_stock = ($post['potential']*$post['safety_stock'])*$post['unit_aktif'];
				$max_order = ($post['potential']*($post['order_cycle']+$post['lead_time']+$post['safety_stock']))*$post['unit_aktif'];
				
				$save['min_stock'] = $min_stock;
				$save['max_order'] = $max_order;
				$save['created_by'] = $this->user['id'];
				$save['created_dt'] = date('Y-m-d H:i:s');
				$save['soq'] = $max_order-$qty;
				
				$res = $this->db->where('id_inventory', $post['id_inventory'])->update('soq', $save);
				if (!$res) return FALSE;
				return $post['id_inventory'];
			}
			
		}

		function load_internal_code($internal_code){
			$res = $this->db->query("select inventory_workshop.id as id_inventory, master_sparepart.id, inventory_workshop.qty, item_name, internal_code, master_workshop.name, kode_part  from inventory_workshop
				join master_sparepart on (inventory_workshop.id_sparepart=master_sparepart.id)
				join master_workshop on (master_workshop.id=inventory_workshop.id_workshop)
				where internal_code like('%".$internal_code."%');")->result_array();
			return $res;
		}
		
		function data($id_workshop){
			$res = $this->db->query("select c.internal_code, id_sparepart, id_material, kode_part, d.kode_material, min_stock, qty, harga_beli, 
				c.sale_price as harga_sparepart, d.sale_price as harga_material, c.item_name as sparepart, d.item_name as material,loc_part, c.car_type,
				((potential*safety_stock)*unit_aktif) as min_stock, ((potential*(order_cycle+lead_time+safety_stock))*unit_aktif) as max_order, 
				(((potential*(order_cycle+lead_time+safety_stock))*unit_aktif))-qty as soq  
				from soq a 
				join inventory_workshop b on (a.id_inventory=b.id)
				left join master_sparepart c on (c.id=b.id_sparepart)
				left join master_material d on (d.id=b.id_material)
				where b.id_workshop = ".$id_workshop."")->result_array();
			return $res;			
		}
		
		function get_data_workshop($data = ''){
			$res = $this->db->query("select * from master_workshop where id=".$data." ")->row_array();
			return $res;
		}
		
		
	}
?>