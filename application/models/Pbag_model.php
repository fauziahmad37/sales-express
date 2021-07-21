<?php
class Pbag_model extends CI_Model {
	function data($date, $id_workshop){
		if($this->user['id_privilege'] == 10){
			$res = $this->db->query("select a.*, b.name as workshop_req, c.name as workshop_trf from pbag a 
				join master_workshop b on(b.id=a.workshop_id_req)
				join master_workshop c on(c.id=a.workshop_id_trf)
				and a.requested_dt>='".$date."' ")->result_array();
		}else{
			$res = $this->db->query("select a.*, b.name as workshop_req, c.name as workshop_trf from pbag a 
				join master_workshop b on(b.id=a.workshop_id_req)
				join master_workshop c on(c.id=a.workshop_id_trf)
				where workshop_id_req=".$this->user['id_workshop']." or workshop_id_trf=".$this->user['id_workshop']." 
				and a.requested_dt>='".$date."' ")->result_array();
		}
		return $res;
	}
	

	
	function new_pbag($post){
		// PBAG NUMBER =========================================================================================================
		$year = date('Y');
		$kode = strtolower($post['workshop_req_short_name']);		
		$sequence = 'pbag_number_'.$kode.'_id_seq';
		$res_exist = $this->db->query("SELECT relname FROM pg_class where relname = '".$sequence."'")->row_array();
		if(Count($res_exist) < 1){
			//CREATE NEW SEQUENCE
			$this->db->query("create sequence ".$sequence." start 1;");
		}
		$save['pbag_number'] = $this->db->query("select ('PBAG/".strtoupper($kode)."/".$year."/' || 
									lpad((nextval('".$sequence."'))::text, 5, '0')) as no_rr")->row_array()['no_rr'];
		// PBAG NUMBER ===========================================================================================================
		
		$save['workshop_id_req'] = $post['workshop_id_req'];
		$save['workshop_id_trf'] = $post['workshop_id_trf'];	
		$save['requested_dt'] = date('Y-m-d h:i:s');
		$save['transfered_dt'] = null;
		$save['received_dt'] = null;
		$save['status_req'] = 1;
		$save['status_trf'] = 0;
		$save['status_rec'] = 0;
		$save['user_id_req'] = $this->user['id'];
		$save['user_id_trf'] = null;
		$save['approved_dt'] = null;
		$save['active']		= 0;
		
		//print_r($save);die();
		$res = $this->db->insert('pbag', $save);
		return $this->db->insert_id();
		
	}
	
	function get_pbag($id){
		$res = $this->db->query("select a.*, b.name as workshop_name_req, c.name as workshop_name_trf, d.full_name 
				from pbag a
				join master_workshop b on(b.id=a.workshop_id_req)
				join master_workshop c on(c.id=a.workshop_id_trf)
				join cac_user d on(d.id=a.user_id_req)
				where a.id=".$id." ")->row_array();
		return $res;
	}
	
	function get_pbag_detail($id){
		$res = $this->db->query("select a.*, c.item_name, c.id as id_sparepart from pbag_detail a 
			join pbag b on(b.id=a.pbag_id)
			join master_sparepart c on(c.internal_code=a.internal_code)
			where a.pbag_id=".$id." ")->result_array();
		return $res;
	}
	
	function save_sparepart_req($post){
		$save['pbag_id']		= $post['pbag_id'];
		$save['pbag_number']	= $post['pbag_number'];
		$save['inventory_id_trf']= $post['id_inventory_trf'];
		$save['internal_code'] 	= $post['internal_code'];
		$save['qty_req']		= $post['qty_req'];
		$save['cost']			= $post['cost'];
		$save['created_dt'] 	= date('Y-m-d H:i:s');
		$save['total']			= ($post['qty_req'] * $post['cost']);
		
		$sparepart_id 			= $post['sparepart_id'];
		$workshop_id_req		= $post['workshop_id_req'];
		$inventory_id_req = $this->db->query("SELECT a.id from inventory_workshop a
			where id_sparepart=".$sparepart_id." and id_workshop=".$workshop_id_req." ")->row_array();
		$save['inventory_id_req']= $inventory_id_req['id'];
		
		$res = $this->db->insert('pbag_detail', $save);
	// print_r($save);die;
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}
	
	function update_sparepart_req(){
		$id = $post['id'];
		foreach (Array('nomor_referensi', 'tgl') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['updated_by'] = $this->user['id'];		
		$res = $this->db->where('id', $id)->update('pbag_detail', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
	
	function list_sparepart_modal($id_workshop){
		
		$res = $this->db->query("select b.internal_code, b.item_name from inventory_workshop a
			join master_sparepart b on(b.id = a.id_sparepart)
			where a.id_workshop=".$id_workshop." ")->row_array();
		return $res;
	}
	
	function get_available_sparepart($id_workshop){
		$tahun = date('Y').date('m')-1;
		$res = $this->db->query("select a.id, b.id as id_sparepart, b.internal_code, b.item_name, a.qty, c.cost_lalu, a.loc_part from inventory_workshop a
			join master_sparepart b on(b.id = a.id_sparepart)
			join closing_inventory_workshop c on(c.id_inventory=a.id)
			where a.id_workshop=".$id_workshop." and c.id_closing like('%".$tahun."%') ")->result_array();
		return $res;
	}
	
	function get_workshop_req_name($id_workshop){
		$res = $this->db->query("select * from master_workshop where id=".$id_workshop." ")->row_array();
		return $res;
	}
	
	function delete($id){
		$res = $this->db->query("delete from pbag_detail where id=".$id." ");
		return true;
	}
	
	function approve_req_pbag($id){
		$res = $this->db->query("update pbag set approved_by=".$this->user['id'].", approved_dt='".date('Y-m-d H:i:s')."', 
			active=1 where id=".$id." ");
		return true;
	}
	
	function proses_transfer($id){
		$res = $this->db->query("update pbag set transfered_dt='".date('Y-m-d H:i:s')."', status_trf=1, 
			user_id_trf=".$this->user['id']." where id=".$id.";");
		return true;
	}
	
	
	function proses_receive($id){
				
		// $cari = $this->db->query("select c.id_sparepart, d.id as id_inventory from pbag a
			// left join pbag_detail b on(a.id=b.pbag_id)
			// left join inventory_workshop c on(c.id=b.inventory_id_trf)
			// left join inventory_workshop d on(d.id_sparepart=c.id_sparepart and d.id_workshop=".$this->user['id_workshop'].")
			// where a.id=".$id." and d.id isnull; ")->row_array();
		
	
			$res = $this->db->query("update pbag set received_dt='".date('Y-m-d H:i:s')."', status_rec=1, 
				user_id_trf=".$this->user['id']." where id=".$id.";");
			return true;
		
	}
	
	function get_qty_cost_transfer($id){
		$res = $this->db->query("select a.inventory_id_trf, a.inventory_id_req, c.sale_price,b.qty, a.qty_req, a.cost, a.pbag_number from pbag_detail a
			join inventory_workshop b on(b.id=a.inventory_id_trf)
			join master_sparepart c on(c.id=b.id_sparepart)
			where a.pbag_id=".$id.";")->result_array();
		return $res;
	}
	
	function get_qty_cost_receive($id){
		$res = $this->db->query("select a.inventory_id_req, c.sale_price,b.qty, a.qty_req, a.cost, a.pbag_number from pbag_detail a
			join inventory_workshop b on(b.id=a.inventory_id_req)
			join master_sparepart c on(c.id=b.id_sparepart)
			where a.pbag_id=".$id.";")->result_array();
		//print_r($res);die;
		return $res;
	}
	
	function insert_log_inventory_stock($data){
		
		foreach((Array) $data AS $key => $val){
			//jika var_qty < 0 update qty_out inventory_workshop
			if($val['var_qty'] < 0){
				$this->db->query("update inventory_workshop set qty = greatest(qty + cast(".floatval($val['var_qty'])." as float), 0),
				qty_out = qty_out + (-1 *(".$val['var_qty'].")), 
				total_out = total_out + (-1 * (cast(".floatval($val['var_qty'])." as float))*(cast(".floatval($val['harga_satuan_jual_beli'])." as float))),
				updated_by = ".$val['input_by'].", updated_dt = '".$val['created_dt']."'
				where id = ".$val['id_inventory'].";");
			}else{
			//jika var_qty bukan < 0 update qty_in inventory_workshop
				
				$res = $this->db->query("update inventory_workshop set qty = qty + ".$val['var_qty'].",
				qty_in = qty_in + ".$val['var_qty'].", total_in = total_in + (".$val['var_qty']." * ".$val['harga_satuan_jual_beli']."),
				updated_by = ".$val['input_by'].", updated_dt = '".$val['created_dt']."'
				where id = ".$val['id_inventory'].";");
				// print_r($res);die;
			}
			
			$save = array();
			$save['nomor_referensi'] = $val['nomor_referensi'];
			$save['base_qty'] = $val['base_qty'];
			$save['var_qty'] = $val['var_qty']; //MAY FAIL IF GREATEST IS 0
			$save['final_qty'] = $val['base_qty'] + $val['var_qty'];
			$save['id_inventory'] = $val['id_inventory'];
			$save['harga_satuan_jual_beli'] = $val['harga_satuan_jual_beli'];
			$save['harga_jual'] = $val['harga_jual'];
			if($val['var_qty'] < 0){
				$save['harga_beli'] = $val['harga_satuan_jual_beli']* ($val['var_qty'] * -1);
			} else {
				$save['harga_beli'] = $val['harga_satuan_jual_beli']* $val['var_qty'];
			}
			$save['input_by'] = $val['input_by'];
			$save['created_dt'] = $val['created_dt'];							 						
			$this->db->insert('log_inventory_stock', $save);
		}
		return true;
	}
	
	
}

?>