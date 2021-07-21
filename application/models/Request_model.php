<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_model extends CI_Model {
	function detail($id){
		$res = $this->db->query("select iw.*, kode_part,internal_code, item_name, car_type from workshop.inventory_workshop iw 
			left join workshop.master_sparepart ms on ms.id = iw.id_sparepart
			where iw.id=".$id." limit 1;")->row_array();
		return $res;
	}

	function save_request($post){
		$save['id_sparepart'] = $post['id'];
		$save['qty'] = $post['qty_request'];
		$save['to'] = $post['id_workshop'];
		$save['status'] = $post['status'];
		$save['created_by'] = $post['created_by'];
		$save['from'] = $post['from'];
		$res = $this->db->insert('transfer_between_warehouse', $save);
	}

	function list_request($data){
		$res = $this->db->query("select tbw.id, tbw.id_sparepart, tbw.created_by, tbw.created_dt, tbw.status, tbw.qty, destination, kode_part, item_name, internal_code, mw.id, mw.name
			from workshop.transfer_between_warehouse tbw
			left join workshop.cac_user cu on (cu.id=tbw.created_by)
			left join workshop.master_sparepart ms on (ms.id=tbw.id)
			left join workshop.master_workshop mw on (tbw.destination=mw.id)
			where tbw.status = 1 and id_workshop= ".$data.";")->result_array();
		return $res;
	}

	function permintaan_workshop_lain($data){
		$res = $this->db->query("select tbw.id, tbw.id_sparepart, tbw.created_by, tbw.created_dt, tbw.status, tbw.qty, destination, mw.name,
			kode_part, item_name, internal_code
			from workshop.transfer_between_warehouse tbw
			left join workshop.master_sparepart ms on (ms.id=tbw.id)
			left join workshop.master_workshop mw on (tbw.destination=mw.id)
			left join workshop.cac_user cu on (cu.id=tbw.created_by)
			where tbw.status = 1 and cu.id_workshop = ".$data.";")->result_array();
		return $res;
	}
}