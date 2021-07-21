<?php

class Customer_model extends CI_Model {

	public function data(){
		$res = $this->db->query("select * from customer")->result_array();
		return $res;
	}

	public function detail($id){
		$res = $this->db->query("select * from customer where id=".$id." ")->row_array();
		return $res;
	}

	public function save($post, $depanFileName){
		$save = array();
		$seq = $this->db->query("select nextval('customer_id_seq')")->row();
		$seq = $seq->nextval;

		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['created_by'] = $this->user['id'];
		$save['nik'] = $post['nik'];
		$save['nama'] = $post['nama'];
		if($depanFileName !== 'kosong'){
			$save['path_ktp'] = '/uploads/ktp/'.$depanFileName;
		}
		$save['alamat'] = $post['alamat'];
		$save['nama_badan_usaha'] = $post['nama_badan_usaha'];
		$save['tanggal_lahir'] = date('Y-m-d', strtotime($post['tanggal_lahir']));
		$save['tempat_lahir'] = $post['tempat_lahir'];
		$save['no_telepon'] = $post['no_telepon'];
		$save['pemberi_kuasa'] = $post['pemberi_kuasa'];
		$save['no_kuasa'] = $post['no_kuasa'];
		$save['tanggal_kuasa'] = date('Y-m-d', strtotime($post['tanggal_kuasa']));
		$save['no_identitas_badan_usaha'] = $post['no_identitas_badan_usaha'];
		$save['nama_perwakilan'] = $post['nama_perwakilan'];
		$save['no_identitas_perwakilan'] = $post['no_identitas_perwakilan'];
		$save['tempat_lahir_perwakilan'] = $post['tempat_lahir_perwakilan'];
		$save['tanggal_lahir_perwakilan'] = date('Y-m-d', strtotime($post['tanggal_lahir_perwakilan']));
		$save['no_telepon_perwakilan'] = $post['no_telepon_perwakilan'];
		$save['doc_number'] = 'CUST/'.date('Ym').'/'.$seq;
		
		$res = $this->db->insert('customer', $save);
		return $res = $this->db->insert_id();
	}

	public function update($post, $depanFileName){
		$save = array();


		$save['created_dt'] = date('Y-m-d 00:00:00');
		$save['created_by'] = $this->user['id'];
		$save['nik'] = $post['nik'];
		$save['nama'] = $post['nama'];
		if($depanFileName !== 'kosong'){
			$save['path_ktp'] = '/uploads/ktp/'.$depanFileName;
		}
		$save['alamat'] = $post['alamat'];
		$save['nama_badan_usaha'] = $post['nama_badan_usaha'];
		$save['tanggal_lahir'] = date('Y-m-d', strtotime($post['tanggal_lahir']));
		$save['tempat_lahir'] = $post['tempat_lahir'];
		$save['no_telepon'] = $post['no_telepon'];
		$save['pemberi_kuasa'] = $post['pemberi_kuasa'];
		$save['no_kuasa'] = $post['no_kuasa'];
		$save['tanggal_kuasa'] = date('Y-m-d', strtotime($post['tanggal_kuasa']));
		$save['no_identitas_badan_usaha'] = $post['no_identitas_badan_usaha'];
		$save['nama_perwakilan'] = $post['nama_perwakilan'];
		$save['no_identitas_perwakilan'] = $post['no_identitas_perwakilan'];
		$save['tempat_lahir_perwakilan'] = $post['tempat_lahir_perwakilan'];
		$save['tanggal_lahir_perwakilan'] = date('Y-m-d', strtotime($post['tanggal_lahir_perwakilan']));
		$save['no_telepon_perwakilan'] = $post['no_telepon_perwakilan'];
		
		$res = $this->db->where('id', $post['id']);
		$res = $this->db->update('customer', $save);

		// print_r($res);die();
		return $res = $this->db->insert_id();
	}


}