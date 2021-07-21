<?php

class jaminan_model extends CI_Model {
	function get_data_kip($id){
		$res = $this->db->query("select kip_number, name  from master_driver where driver_registration_id =".$id.";");
			
		return $res->result();
	}
	
	function autocomplete_kip($kip){
        $this->db->select("md.id id_driver,  md.kip_number as kip,CONCAT(md.name, '(',md.kip_number,') ') as kip_numbers, 
			md.hari_kerja, md.limit_hk_cicilan_jaminan, md.has_cicilan_jaminan,
			aj.amount_akhir, md.name, md.tipe, dr.ketentuan_jaminan", FALSE);
        $this->db->join('ap_jaminan aj', 'md.ap_jaminan_id = aj.id', 'left');
        $this->db->join('driver_registration dr', 'dr.id = md.driver_registration_id', 'left');
        $this->db->like('md.kip_number', $kip , 'both');
		$this->db->or_like('md.name', $kip , 'both');
        $this->db->order_by('md.kip_number', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_driver md')->result();
    }
	
	function add_top_up_jaminan($post){
		$this->db->trans_start();
		
		$cari_ap = $this->db->query("select * from ap_jaminan where driver_id=".$post['driver_id'].";")->row_array();
		if($cari_ap == ''){
			if(	$post['tipe'] == 'REGULAR' && $post['ketentuan_jaminan'] == 'Baru' && str_replace(".","",str_replace("Rp. ","",$post['amount'])) < 300000){
				?>
				<script type="text/javascript">
					alert("Topup Pertama, driver regular baru jaminan dibawah 300.000 tidak di izinkan.");
					window.location = "<?php echo site_url('/Jaminan/topup_jaminan/');?>";
				</script>
				<?php
				die;
			} else if($post['tipe'] == 'REGULAR' && $post['ketentuan_jaminan'] == 'Lama' && str_replace(".","",str_replace("Rp. ","",$post['amount'])) < 100000){
				?>
				<script type="text/javascript">
					alert("Topup Pertama, driver regular lama jaminan dibawah 100.000 tidak di izinkan.");
					window.location = "<?php echo site_url('/Jaminan/topup_jaminan/');?>";
				</script>
				<?php
				die;
			} else if($post['tipe'] == 'TIARA' && $post['ketentuan_jaminan'] == 'Baru' && str_replace(".","",str_replace("Rp. ","",$post['amount'])) < 500000){
				?>
				<script type="text/javascript">
					alert("Topup Pertama, driver tiara baru jaminan dibawah 500.000 tidak di izinkan.");
					window.location = "<?php echo site_url('/Jaminan/topup_jaminan/');?>";
				</script>
				<?php
				die;
			} else if($post['tipe'] == 'TIARA' && $post['ketentuan_jaminan'] == 'Lama' && str_replace(".","",str_replace("Rp. ","",$post['amount'])) < 200000){
				?>
				<script type="text/javascript">
					alert("Topup Pertama, driver tiara lama jaminan dibawah 200.000 tidak di izinkan.");
					window.location = "<?php echo site_url('/Jaminan/topup_jaminan/');?>";
				</script>
				<?php
				die;
			}
		}
		
		//print_r($post);die;
		
		
		foreach (Array('jaminan_value_add','driver_id','pool_id') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		
		//print_r($post['stnk_date_expired']);die;
		$driver_id = $post['driver_id'];
		$save['created'] = date('Y-m-d H:i:s');	
		$save['status'] = 'Paid';
		$save['keterangan'] = 'Top Up by Pool';
		$amount = str_replace(".","",str_replace("Rp. ","",$post['amount']));
		$rowdata = $this->db->query("select  COALESCE(amount_akhir,0) as amount_awal from ap_jaminan where id in (select ap_jaminan_id from master_driver where id = ".$driver_id.");")->row();
		if($rowdata !== NULL) {
			$amount_awal = $rowdata ->amount_awal;
		} else {
			$amount_awal = 0;
		}
		$save['amount_awal'] = $amount_awal;
		$save['amount'] = $amount;
		$save['amount_akhir'] = $amount_awal + $amount;
		
		// ========================= DOC NUMBER ================================================================
		$res2 = $this->db->query("select a.*, b.code from master_driver a
				left join master_pool b on(a.pool_id=b.id)
				where a.id=".$post['driver_id'].";")->row_array();
		
		$seq =  $this->db->query("select (lpad((nextval('ap_jaminan_number_id_seq'))::text, 5, '0')) as kip")->row_array()['kip'];
		$new_kip = 'TOPUP/'.$res2['code'].'/'.date('Ym').'/'.$seq;
		// =====================================================================================================
		
		$save['doc_number'] = $new_kip;
		$save['pt_id'] = 12;
		
		$res = $this->db->insert('ap_jaminan', $save);
		
		$last_id = $this->db->insert_id();
		
		if( ($amount_awal+$amount) >= 500000 && $post['tipe'] == 'REGULAR' && $post['has_cicilan_jaminan'] == 't' ){
			$has_cicilan_jaminan = 'false';
		} else if( ($amount_awal+$amount) >= 800000 && $post['tipe'] == 'TIARA' && $post['has_cicilan_jaminan'] == 't' ){
			$has_cicilan_jaminan = 'false';
		} else {
			$has_cicilan_jaminan = 'true';
		}
		
		$this->db->query("UPDATE master_driver SET ap_jaminan_id = ".$last_id.", has_cicilan_jaminan = '".$has_cicilan_jaminan."' WHERE id = ".$driver_id.";");
		
		$this->db->trans_complete(); 
		if (!$res) return FALSE;

		return $this->db->insert_id();
	}
	
	function get_data_for_index_topup($date, $dateakhir, $id_pool){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		$res = $this->db->query("select a.id, a.doc_number, a.amount,created, a.status, 
			b.kip_number,b.name as name_driver, 
			c.name as name_pool 
			from ap_jaminan a 
			left join master_driver b on (a.driver_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			where created >='".$start."' and created <='".$end."' and a.pool_id=".$id_pool."
			order by a.created desc;")->result_array();
			
		return $res;
	}
	
	function get_data_jaminan($id){
		$res = $this->db->query("select b.kip_number, b.name, a.keterangan, a.amount, a.amount_akhir, a.amount_awal, a.created, a.doc_number, c.name as pool_name, d.email 
			from ap_jaminan a 
			left join master_driver b on (a.driver_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			left join driver_registration d on (d.id = b.driver_registration_id)
			where a.id=".$id."; ")->row_array();
			
		return $res;
	}
	
	function jaminan_driver($id){
		$res = $this->db->query("select a.doc_number, a.keterangan, a.amount_awal, a.amount, a.amount_akhir, a.created, b.name 
			from ap_jaminan a 
			left join master_pool b on(b.id=a.pool_id)
			where driver_id=".$id." order by a.id desc;")->result_array();
		return $res;
	}
	
}

