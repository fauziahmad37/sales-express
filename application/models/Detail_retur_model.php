<?php  
class Detail_retur_model extends CI_Model {
	function data($id_faktur){
		$res = $this->db->query("select rd.id, ms.kode_part, rd.price as harga_satuan, rd.qty_retur as qty, 
			ms.item_name as sparepart, mm.item_name as material 
			from retur_detail rd
			join inventory_workshop iw on (iw.id=rd.id_inventory)
			left join master_material mm on (iw.id_material=mm.id)
			join master_sparepart ms on (ms.id=iw.id_sparepart)
			where rd.id_retur='".$id_faktur."'
			")->result_array();
		
		return $res;
	}
	
	function detail($id){
		$res = $this->db->query("select rd.id, ms.kode_part, rd.price as harga_satuan, rd.qty_retur as qty, 
			ms.item_name as sparepart, mm.item_name as material, loc_part 
			from retur_detail rd
			join inventory_workshop iw on (iw.id=rd.id_inventory)
			left join master_material mm on (iw.id_material=mm.id)
			join master_sparepart ms on (ms.id=iw.id_sparepart)
			where rd.id='".$id."' ")->row_array();
		return $res;
	}
	
	function data_item_retur($id_retur){
		$res = $this->db->query("select r.retur_number as nomor_referensi, rd.id, rd.nomor_referensi as no_ss, rd.id_inventory, iw.qty as base_qty, ms.kode_part, rd.price as harga_satuan, rd.qty_retur as qty, 
			ms.item_name as sparepart, mm.item_name as material, loc_part, fpi.id as id_faktur_pengambilan 
			from retur_detail rd
			left join retur r on (r.id=rd.id_retur)
			join faktur_pengambilan_inventory fpi on (fpi.nomor_referensi=rd.nomor_referensi)
			join inventory_workshop iw on (iw.id=rd.id_inventory)
			left join master_material mm on (iw.id_material=mm.id)
			join master_sparepart ms on (ms.id=iw.id_sparepart)
			where rd.id_retur='".$id_retur."' ")->result_array();
		
		return $res;
	}
	
	function save_log($data){
		$id_user = $this->user['id'];
		$dt = date('Y-m-d H:i:s');		
		foreach((Array) $data AS $key => $val){
			$this->db->query("update inventory_workshop set qty = greatest(qty + cast(".floatval($val['var_qty'])." as float), 0), 
				updated_by = ".$id_user.", updated_dt = '".$dt."'
				where id = ".$val['id']." ");
			//$this->db->query("update detail_faktur_pengambilan_inventory set qty=greatest(qty - cast(".floatval($val['var_qty'])." as float), 0), updated_by = ".$id_user.",
				//updated_dt = '".$dt."' 
				//where id_faktur='".$val['id_faktur_pengambilan']."' and id_inventory='".$val['id']."'");
				//print_r($val);die();
			$this->db->query("delete from detail_faktur_pengambilan_inventory 
			where id_faktur=".$val['id_faktur_pengambilan']." and id_inventory=".$val['id']." ");
			//print_r($data);die();
			$save = array();
			$save['nomor_referensi'] = $val['nomor_referensi'];
			$save['base_qty'] = $val['base_qty'];
			$save['var_qty'] = $val['var_qty']; //MAY FAIL IF GREATEST IS 0
			$save['final_qty'] = $val['base_qty'] + $val['var_qty'];
			$save['id_inventory'] = $val['id'];
			$save['harga_satuan_jual_beli'] = $val['harga_satuan_jual_beli'];
			$save['ppn_jual_beli'] = $val['ppn_jual_beli'];
			$save['diskon_jual_beli'] = $val['diskon_jual_beli'];
			$save['harga_jual'] = $val['harga_jual'];
			$save['harga_beli'] = $val['harga_beli'];
			$save['input_by'] = $id_user;
			$save['created_dt'] = $dt;							 						
			$this->db->insert('log_inventory_stock', $save);
		}
		return true;
	}
}
?>