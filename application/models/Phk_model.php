<?php
class Phk_model extends CI_Model {
	function data($id = ''){
		if($id != ''){
			$res = $this->db->query("select a.* from phk a
				where a.id=".$id."")->row_array();
		} else {
			$res = $this->db->query("select * from phk")->result_array();
		}
		
		return $res;
	}

	function detail($id = ''){
		$res = $this->db->query("select a.* from phk a
			where a.id=".$id.";")->row_array();
		return $res;
	}

	function save($post){
		$save = array();
		$seq = $this->db->query("select nextval('phk_id_seq')")->row();
		$seq = $seq->nextval;

		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['created_by'] = $this->user['id'];
		$save['doc_number'] = 'PHDK/'.date('Ym').'/'.$seq;
		$save['sales_id'] = $post['sales_id'];
		$save['status'] = 'Active';

		$res = $this->db->insert('phk', $save);
		return $res = $this->db->insert_id();
	}

	function phk_detail($id){
		$res = $this->db->query("select a.*, b.no_polisi, b.tipe, b.no_rangka, b.no_mesin, b.location, b.harga_dasar, b.harga_dasar_khusus from phk_detail a
			left join master_car b on(a.car_id = b.id)
			where phk_id = ".$id."; ")->result_array();
		return $res;
	}

	function save_add_car($phk_id, $post){
		$save = array();
		$save['phk_id'] = $phk_id;
		$save['car_id'] = $post['car_id'];
		$save['harga_dasar'] = (int)$post['harga_dasar'];
		$save['pengajuan_harga_dasar_khusus'] = (int)$post['pengajuan_harga_dasar_khusus'];
		$save['persentase'] = ((int)$post['harga_dasar']-(int)$post['pengajuan_harga_dasar_khusus'])/(int)$post['harga_dasar']*100;
		
		$res = $this->db->insert('phk_detail', $save);
		return $res = $this->db->insert_id();
	}

	function delete_phk_detail($detail_id){
		$res = $this->db->query("delete from phk_detail where id=".$detail_id." ");
		return true;
	}

	function send_approval($post){
		$update = array();
		$update['status'] = 'Waiting Approval';

		$this->db->where('id', $post['id']);
		$this->db->update('phk', $update);
		$updated_status = $this->db->affected_rows();
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
		$this->db->update('phk', $update);
		
		$res = $this->db->query("select * from phk_detail where phk_id=".$post['id'].";")->result_array();
		foreach ($res as $key => $val) {
			$update_car = $this->db->query("update master_car set harga_dasar_khusus=".$val['pengajuan_harga_dasar_khusus']." where id=".$val['car_id'].";");
		}

		$this->db->trans_complete(); 

		if($updated_status):
		    return $post['id'];
		else:
		    return false;
		endif;

	}

	function total_price_list($id){
		$res = $this->db->query("select sum(a.pengajuan_harga_dasar_khusus) as pengajuan_harga_dasar_khusus from phk_detail 
			a where a.phk_id = ".$id.";")->row_array();
		return $res;
	}


}