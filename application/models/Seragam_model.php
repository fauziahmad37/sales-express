<?php

class seragam_model extends CI_Model {
	function get_data_for_pengambilan_seragam(){
			$res = $this->db->query("select a.doc_number, a.id,a.total_tagihan, a.created, a.status, b.kip_number,b.name as name_driver, c.name as name_pool from trx_pengambilan_seragam a 
								left join master_driver b on (a.driver_id = b.id)
								left join master_pool c on (a.pool_id = c.id) order by a.created desc;")->result_array();
			
		return $res;
	}
	
	function add_pengambilan_seragam($post){
		$this->db->trans_start();
		
		$pool_user = $this->user['id_pool'];
		$id_user = $this->user['id'];
		$driver_id = $post['driver_id'];
		$save['driver_id'] = $driver_id;	
		$save['created'] = date('Y-m-d H:i:s');	
		$save['status'] = 'Belum Lunas';
		$save['keterangan'] = 'Pengambilan Seragam';
		$save['harga_satuan'] = $post['harga_satuan'];
		$save['total_tagihan'] =  $post['total_tagihan'];
		$save['jumlah_item'] = $post['jumlah_item'];
		$save['ukuran'] = $post['ukuran'];
		$save['nominal_cicilan'] = $post['nominal_cicilan'];
		
		// ========================= DOC NUMBER ================================================================
		
		$res2 = $this->db->query("select a.*, b.code from master_driver a
				left join master_pool b on(a.pool_id=b.id)
				where a.id=".$post['driver_id'].";")->row_array();
		
		$seq =  $this->db->query("select (lpad((nextval('trx_pengambilan_seragam_number_seq'))::text, 5, '0')) as kip")->row_array()['kip'];
		$new_kip = 'SERAGAM/'.$res2['code'].'/'.date('Ym').'/'.$seq;
		
		// =====================================================================================================
		
		$save['doc_number']	= $new_kip;
		
		$res = $this->db->insert('trx_pengambilan_seragam', $save);
		
		$save2['driver_id'] = $driver_id;	
		$save2['created'] = date('Y-m-d H:i:s');	
		$save2['status'] = 'Paid';
		$save2['keterangan'] = 'Create Hutang Seragam';
		$save2['amount_awal'] = 0;
		$save2['amount'] =  $post['total_tagihan'];
		$save2['amount_akhir'] =  $post['total_tagihan'];
		$save2['pool_id'] = $pool_user;
		$save2['created_by'] = $id_user;
		$res = $this->db->insert('ap_pembayaran_seragam', $save2);
		$last_id = $this->db->insert_id();
		
		$this->db->query("UPDATE master_driver SET ap_pembayaran_seragam_id = ".$last_id.", has_cicilan_seragam = 'true' WHERE id = ".$driver_id.";");
		
		$this->db->trans_complete(); 

		return $this->db->insert_id();
	}
	
	function get_data_for_pembayaran_seragam_index(){
			$res = $this->db->query("select a.doc_number, a.id, a.created, a.amount,a.status, b.kip_number,b.name as name_driver, c.name as name_pool from ap_pembayaran_seragam a 
								left join master_driver b on (a.driver_id = b.id)
								left join master_pool c on (a.pool_id = c.id) order by a.created desc;")->result_array();
			
		return $res;
	}
	
	function add_pembayaran_seragam($post){
		$this->db->trans_start();
		
		$driver_id = $post['driver_id'];
		
		$save['pool_id'] = $post['pool_id'];
		$save['driver_id'] = $driver_id;
		$save['created_by'] = $this->user['id'];
		$save['created'] = date('Y-m-d H:i:s');	
		$save['status'] = 'Paid';
		$save['keterangan'] = 'Top Up by Pool';
		$amount = str_replace(".","",str_replace("Rp. ","",$post['amount']));
		$rowdata = $this->db->query("select  COALESCE(amount_akhir,0) as amount_awal from ap_pembayaran_seragam where id in (select ap_pembayaran_seragam_id from master_driver where id = ".$driver_id.");")->row();
		if($rowdata !== NULL) {
		$amount_awal = $rowdata ->amount_awal;
		}
		else {
			$amount_awal = 0;
		}
		$save['amount_awal'] = $amount_awal;
		$save['amount'] = $amount;
		$save['amount_akhir'] = $amount_awal - $amount;

			// ========================= DOC NUMBER ================================================================
			
			$res2 = $this->db->query("select a.*, b.code from master_driver a
					left join master_pool b on(a.pool_id=b.id)
					where a.id=".$post['driver_id'].";")->row_array();
			
			$seq =  $this->db->query("select (lpad((nextval('ap_pembayaran_seragam_number_seq'))::text, 5, '0')) as kip")->row_array()['kip'];
			$new_kip = 'TRX-SERAGAM/'.$res2['code'].'/'.date('Ym').'/'.$seq;
			
			// =====================================================================================================
		
		$save['doc_number'] = $new_kip;
		
		$res = $this->db->insert('ap_pembayaran_seragam', $save);	
		$last_id = $this->db->insert_id();	
		$this->db->query("UPDATE master_driver SET ap_pembayaran_seragam_id = ".$last_id." WHERE id = ".$driver_id.";");
		$this->db->trans_complete(); 
if (!$res) return FALSE;

		return $this->db->insert_id();
	}
	
	function autocomplete_kip($kip){
        $this->db->select("md.id id_driver,  md.kip_number as kip,CONCAT(md.name, '(',md.kip_number,') ') as kip_numbers, aj.amount_akhir, md.name", FALSE);
        $this->db->join('ap_pembayaran_seragam aj', 'md.ap_pembayaran_seragam_id = aj.id', 'left');
        $this->db->like('md.kip_number', $kip , 'both');
		$this->db->or_like('md.name', $kip , 'both');
        $this->db->order_by('md.kip_number', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_driver md')->result();
    }
	
	function get_data_pembayaran($id){
		$res = $this->db->query("select a.*, b.name, b.kip_number, c.email, d.full_name 
				from ap_pembayaran_seragam a
				left join master_driver b on (b.id=a.driver_id)
				left join driver_registration c on(c.id=b.driver_registration_id)
				left join cac_user d on (d.id=a.created_by)
				where a.id=".$id.";")->row_array();
		
		return $res;
	}
	
	function get_data_pengambilan_seragam($id){
		$res = $this->db->query("select a.* from trx_pengambilan_seragam a
				where id=".$id.";")->row_array();
		
		return $res;
	}

	function pembayaran_seragam_driver($id){
		$res = $this->db->query("select a.keterangan, a.doc_number, a.created, a.amount, a.amount_awal, a.amount_akhir, b.name from ap_pembayaran_seragam a 
			left join master_pool b on(a.pool_id=b.id)
			where a.driver_id=".$id.";")->result_array();
		return $res;
	}
	
}

