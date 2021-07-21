<?php

class Skh_model extends CI_Model {

	function data($id = ''){
		if($id != ''){
			$res = $this->db->query("select a.*, b.nik, b.nama, b.tempat_lahir, b.tanggal_lahir, b.no_telepon, b.alamat, b.nama_badan_usaha, b.pemberi_kuasa, b.tanggal_kuasa from skh a 
				left join customer b on(b.id = a.customer_id) 
				where a.id=".$id."")->row_array();
			
		} else {
			$res = $this->db->query("select a.*, b.nik, b.nama, b.no_telepon, b.alamat, b.nama_badan_usaha, b.pemberi_kuasa, b.tanggal_kuasa from skh a
						left join customer b on(b.id = a.customer_id)")->result_array();
		}
		
		return $res;
	}

	function data_print_kendaraan($id){
		$res = $this->db->query("select a.* from skh_detail a
			left join master_car b on(a.car_id = b.id)
			where a.skh_id=".$id."; ")->result_array();
		return $res;
	}

	function total_price_list($id){
		$res = $this->db->query("select sum(a.price_list) as price_list from skh_detail 
			a where a.skh_id = ".$id.";")->row_array();
		return $res;
	}

	function detail($id = ''){
		$res = $this->db->query("select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=".$id.";")->row_array();
		return $res;
	}

	function get_autocomplete_customer($nama){
		$res = $this->db->query("select * from customer where upper(nama) like(upper('%".$nama."%')) limit 3;")->result();
		return $res;
	}

	function save($post){
		$save = array();
		$seq = $this->db->query("select nextval('skh_id_seq')")->row();
		$seq = $seq->nextval;

		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['created_by'] = $this->user['id'];
		$save['doc_number'] = 'SKH/'.date('Ym').'/'.$seq;
		$save['sales_id'] = $post['sales_id'];
		$save['customer_id'] = $post['id'];
		$save['jumlah_kendaraan'] = $post['jumlah_kendaraan'];
		$save['harga_disepakati'] = $post['harga_disepakati'];
		$save['batas_pelunasan'] = date('Y-m-d', strtotime($post['batas_pelunasan']));
		$save['amount_dp'] = $post['harga_disepakati'] * 0.1;
		$save['amount_terbayar'] = $post['harga_disepakati'] * 0.1;
		$save['status'] = 'Active';

		$res = $this->db->insert('skh', $save);
		return $res = $this->db->insert_id();
	}



	function skh_detail($id){
		$res = $this->db->query("select * from skh_detail where skh_id = ".$id."; ")->result_array();
		return $res;
	}

	function get_available_car(){
		$res = $this->db->query("select a.id, a.no_polisi, a.no_rangka, a.no_mesin, a.tipe, a.no_pintu, a.harga_dasar, a.price_list, a.status_unit, a.location, replace(a.pt, '.', '') as pt from master_car a limit 1")->result_array();
		return $res;
	}

	function save_add_car($skh_id, $post){
		$save = array();
		$save['skh_id'] = $skh_id;
		$save['car_id'] = $post['car_id'];
		$save['no_polisi'] = $post['no_polisi'];
		$save['pt'] = $post['pt'];
		$save['tipe'] = $post['tipe'];
		$save['price_list'] = (int)$post['price_list'];
		
		$res = $this->db->insert('skh_detail', $save);
		return $res = $this->db->insert_id();
	}

	function delete_skh_detail($detail_id){
		$res = $this->db->query("delete from skh_detail where id=".$detail_id." ");
		return true;
	}

	function send_approval($post){
		$this->db->trans_start();

		$update = array();
		$update['status'] = 'Waiting Approval';

		$this->db->where('id', $post['id']);
		$this->db->update('skh', $update);
		$updated_status = $this->db->affected_rows();

		$res = $this->db->query("select * from skh_detail where skh_id=".$post['id'].";")->result_array();
		foreach ($res as $key => $val) {
			$this->db->query("update master_car set status_unit='BOOK' where id=".$val['car_id'].";");
		}

		$this->db->trans_complete();

		if($updated_status):
		    return $post['id'];
		else:
		    return false;
		endif;
	}

	function approve($post){
		$this->db->trans_start();
		
		$update = array();
		$update['status'] = 'Approved';
		$update['updated_dt'] = date('Y-m-d H:i:s');
		$update['updated_by'] = $this->user['id'];
		$update['approved_by'] = $this->user['id'];

		$this->db->where('id', $post['id']);
		$this->db->update('skh', $update);
		$updated_status = $this->db->affected_rows();
		

		$res = $this->db->query("select * from skh_detail where skh_id=".$post['id'].";")->result_array();
		foreach ($res as $key => $val) {
			$this->db->query("update master_car set status_unit='SOLD' where id=".$val['car_id'].";");
		}

		$this->db->trans_complete();

		if($updated_status):
		    return $post['id'];
		else:
		    return false;
		endif;
	}
}