<?php
class Payment_model extends CI_Model {
	function data(){
		$res = $this->db->query("select a.*, b.doc_number as doc_number_skh, b.harga_disepakati from payment a 
			left join skh b on(a.skh_id = b.id)")->result_array();
		return $res;
	}

	function get_autocomplete_doc_number($doc_number){
		$res = $this->db->query("select a.*, b.nama, (a.harga_disepakati - a.amount_terbayar) as sisa_tagihan from skh a
			left join customer b on(b.id = a.customer_id)
			where upper(a.doc_number) like(upper('%".$doc_number."%')) limit 10;")->result();
		return $res;
	}

	function save($post){
		$this->db->trans_start();

		$seq = $this->db->query("select nextval('payment_id_seq')")->row();
		$seq = $seq->nextval;

		// print_r($post['id']);die();
		$save = array();
		$save['skh_id'] = $post['id'];
		$save['created_dt'] = date('Y-m-d h:i:s');
		$save['created_by'] = $this->user['id'];
		$save['amount_awal'] = $post['amount_terbayar'];
		$save['amount'] = $post['amount'];
		$save['amount_akhir'] = $post['amount_terbayar']+$post['amount'];
		if(($post['amount_terbayar']+$post['amount']) >= $post['harga_disepakati']){
			$save['status'] = 'Lunas';
		} else {
			$save['status'] = 'Belum Lunas';
		}

		$save['doc_number'] = 'TRX/'.date('Ym').'/'.$seq;
		
		$res = $this->db->insert('payment', $save);
		
		$update = array();
		$update['updated_dt'] = date('Y-m-d h:i:s');
		$update['updated_by'] = $this->user['id'];
		$update['amount_terbayar'] = $post['amount_terbayar']+$post['amount'];
		if($post['amount_terbayar']+$post['amount'] >= $post['harga_disepakati']){
			$update['status'] = 'Lunas';
			$update['lunas_dt'] = date('Y-m-d h:i:s');
		}
		
		$res2 = $this->db->where('id', $post['id']);
		$res2 = $this->db->update('skh', $update);

		$res2 = $this->db->affected_rows();

		$this->db->trans_complete();

		if($res2):
		    return $post['id'];
		else:
		    return false;
		endif;

	}
}