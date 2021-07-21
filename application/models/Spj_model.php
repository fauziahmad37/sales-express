<?php

class spj_model extends CI_Model {
	function get_data_kip($id){
		$res = $this->db->query("select kip_number, name  from master_driver where driver_registration_id =".$id.";");
		return $res->result();
	}
	
	function tipe_rental(){
		$res = $this->db->where('tipe', '24 Jam')->get('sys_option');
		return $res->result_array();
	}
	
	function tipe_rental_tiara(){
			$res = $this->db->where('tipe', '24 Jam')->get('sys_option');
		return $res->result_array();
	}
	
	
	
	function autocomplete_kip($kip){
        $this->db->select("md.id id_driver,  md.kip_number as kip, md.hari_kerja,
			CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj,
			CONCAT(md.name, ' (',md.kip_number,') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver", FALSE);
        $this->db->join('ap_jaminan aj', 'md.ap_jaminan_id = aj.id', 'left');
        $this->db->join('driver_registration dr', 'dr.id = md.driver_registration_id', 'left');
		$this->db->where('aj.amount_akhir >=', '100000');
		$this->db->where("md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%".$kip."%' or name like '%".$kip."%') 
			and status in( 'Active','Drive','Payment'))");
		$this->db->group_start();
        $this->db->like('md.kip_number', $kip , 'both');
        $this->db->or_like('md.name', $kip , 'both');
		$this->db->group_end();
        $this->db->order_by('md.kip_number', 'ASC');
        $this->db->limit(3);
        return $this->db->get('master_driver md')->result();
    }
	
	function autocomplete_kip_tiara($kip){
        $this->db->select("md.id id_driver,  md.kip_number as kip, md.hari_kerja,
			CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 800000 and md.tipe='TIARA' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj,
			CONCAT(md.name, ' (',md.kip_number,') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver", FALSE);
        $this->db->join('ap_jaminan aj', 'md.ap_jaminan_id = aj.id', 'left');
		$this->db->join('driver_registration dr', 'dr.id = md.driver_registration_id', 'left');
		$this->db->where('aj.amount_akhir >=', '200000');
		$this->db->where("md.id NOT IN (SELECT driver_id FROM trx_spj where driver_id in (select id from master_driver where kip_number like '%".$kip."%' or name like '%".$kip."%') and status in( 'Active','Drive','Payment'))");
		$this->db->group_start();
        $this->db->like('md.kip_number', $kip , 'both');
        $this->db->or_like('md.name', $kip , 'both');
		$this->db->group_end();
        $this->db->order_by('md.kip_number', 'ASC');
        $this->db->limit(3);
        return $this->db->get('master_driver md')->result();
    }
	
	function autocomplete_door_number($door_number){
        $this->db->select("mc.id, mc.no_pintu,mc.no_polisi, mc.merek, mc.tipe, CONCAT(mc.no_pintu,' (',mc.no_polisi,') (',mc.merek,'-',mc.tipe,')') as data_mobil, CONCAT(mc.merek,' ', mc.tipe) as desc_mobil", FALSE);
        $this->db->where('mc.status', 'Active');
		$this->db->where("mc.unit_bisnis IN ('EXPRESS','EAGLE')");
		$this->db->where("mc.id NOT IN (SELECT car_id FROM trx_spj where car_id in (select id from master_car where no_pintu like '%".$door_number."%' ) and status in( 'Active','Drive','Payment'))", NULL, FALSE);
        $this->db->like('no_pintu', $door_number , 'both');
        $this->db->order_by('no_pintu', 'ASC');
        $this->db->limit(3);
        return $this->db->get('master_car mc')->result();
    }	
	
	function autocomplete_door_number_tiara($door_number){
        $this->db->select("mc.id, mc.no_pintu,mc.no_polisi, mc.merek, mc.tipe, 
			CONCAT(mc.no_pintu,' (',mc.no_polisi,') (',mc.merek,'-',mc.tipe,')') as data_mobil, 
			CONCAT(mc.merek,' ', mc.tipe) as desc_mobil", FALSE);
        $this->db->where('mc.status', 'Active');
        $this->db->where('mc.unit_bisnis', 'TIARA');
		$this->db->where("mc.id NOT IN (SELECT car_id FROM trx_spj where car_id in (select id from master_car where no_pintu like '%".$door_number."%' ) and status in( 'Active','Drive','Payment'))", NULL, FALSE);
        $this->db->like('no_pintu', $door_number , 'both');
        $this->db->order_by('no_pintu', 'ASC');
        $this->db->limit(3);
        return $this->db->get('master_car mc')->result();
    }	
	
	function autocomplete_spj($no_spj_or_no_pintu_or_driver_name){
		$status = array('Active', 'Drive'); 
		
        $this->db->select("a.id, 
			CASE
				WHEN now() < a.jam_mulai_denda THEN 0
				ELSE 1
			END AS flag_denda,
			date_part('hour' , age(now(), jam_mulai_denda)) AS jumlah_jam_denda,
			CASE 
				WHEN date_part('day' , age(now(), jam_mulai_denda))  < 2 then 1
				ELSE date_part('day' , age(now(), jam_mulai_denda)) 
			END AS jumlah_hari_denda,	
			CASE
				WHEN  f.amount_akhir is null THEN 0
				WHEN  f.amount_akhir = 0 THEN 0
				WHEN  f.amount_akhir > 10000 THEN 10000
				WHEN  f.amount_akhir > 0 and f.amount_akhir  < 10000  THEN f.amount_akhir
			ELSE 0
			END AS sisa_cicilan_seragam,
			a.tagihan_wajib, a.denda_perjam, a.jam_mulai_denda, a.doc_number AS spj_no, a.status, a.created AS jam_cetak_spj,
			b.no_pintu,
			c.name AS pool_name, CONCAT(a.doc_number,' ',b.no_pintu,' ',d.name) AS data_spj,
			d.id AS driverid, d.name AS driver_name, d.kip_number,
			e.amount_akhir, 
			g.bbm_out AS bbm_sebelumnya, g.km_out, g.rit_out, g.drop_out,
			CONCAT(b.merek,' ', b.tipe) AS desc_mobil", FALSE);
        $this->db->join('master_car b', 'a.car_id = b.id', 'left');
        $this->db->join('master_pool c', 'a.pool_id = c.id', 'left');
        $this->db->join('master_driver d', 'a.driver_id = d.id', 'left');
        $this->db->join('ap_jaminan e', 'd.ap_jaminan_id = e.id', 'left');
        $this->db->join('ap_pembayaran_seragam f', 'd.ap_pembayaran_seragam_id = f.id', 'left');
		$this->db->join('checker_header g', 'g.spj_id = a.id', 'left');
		$this->db->where_in('a.status', $status);
		$this->db->group_start();
        $this->db->like('b.no_pintu', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('a.doc_number', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('d.name', $no_spj_or_no_pintu_or_driver_name , 'both');		
		$this->db->group_end();
        $this->db->order_by('a.doc_number', 'ASC');
        $this->db->limit(3);
        return $this->db->get('trx_spj a')->result();
    }
	
	function autocomplete_checker_masuk_spj($no_spj_or_no_pintu_or_driver_name){
        $this->db->select("a.id, 
							CASE
							   WHEN now() < a.jam_mulai_denda THEN 0
							   ELSE 1
							END AS flag_denda,
							date_part('hour', age(now(), jam_mulai_denda)) AS jumlah_jam_denda,
							CASE 
								WHEN date_part('day' , age(now(), jam_mulai_denda))  < 2 THEN 1
								ELSE date_part('day' , age(now(), jam_mulai_denda)) 
							END AS jumlah_hari_denda,	
							CASE
								WHEN  f.amount_akhir is null THEN 0
								WHEN  f.amount_akhir = 0 THEN 0
								WHEN  f.amount_akhir > 10000 THEN 10000
								WHEN  f.amount_akhir > 0 and f.amount_akhir  < 10000  THEN f.amount_akhir
							ELSE 0
							END AS sisa_cicilan_seragam,
							a.tagihan_wajib, a.denda_perjam, a.jam_mulai_denda, a.doc_number AS spj_no,b.no_pintu, a.status, a.created AS jam_cetak_spj,
							c.name AS pool_name, d.kip_number, d.id AS driverid, d.name AS driver_name, e.amount_akhir, 
							CONCAT(a.doc_number,' ',b.no_pintu,' ',d.name) AS data_spj, 
							CONCAT(merek,' ', tipe) AS desc_mobil", FALSE);
        $this->db->join('master_car b', 'a.car_id = b.id', 'left');
        $this->db->join('master_pool c', 'a.pool_id = c.id', 'left');
        $this->db->join('master_driver d', 'a.driver_id = d.id', 'left');
        $this->db->join('ap_jaminan e', 'd.ap_jaminan_id = e.id', 'left');
        $this->db->join('ap_pembayaran_seragam f', 'd.ap_pembayaran_seragam_id = f.id', 'left');
		$this->db->where('a.status', 'Drive');
		$this->db->group_start();
        $this->db->like('b.no_pintu', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('a.doc_number', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('d.name', $no_spj_or_no_pintu_or_driver_name , 'both');		
		$this->db->group_end();
        $this->db->order_by('a.doc_number', 'ASC');
        $this->db->limit(3);
        return $this->db->get('trx_spj a')->result();
    }
	
	function autocomplete_payment_spj($no_spj_or_no_pintu_or_driver_name){
        $this->db->select("a.id, 
							CASE
							   WHEN g.updated_dt < a.jam_mulai_denda THEN 0
							   ELSE 1
							END AS flag_denda,
							CEIL(EXTRACT('epoch' FROM g.updated_dt - jam_mulai_denda) /3600) AS jumlah_jam_denda,
							CASE 
								WHEN date_part('day' , age(g.updated_dt, jam_mulai_denda))  < 20 THEN 1
								ELSE date_part('day' , age(g.updated_dt, jam_mulai_denda)) 
							END AS jumlah_hari_denda,	
							CASE
								WHEN  f.amount_akhir is null THEN 0
								WHEN  f.amount_akhir = 0 THEN 0
								WHEN  f.amount_akhir > 10000 and d.tipe = 'REGULAR' THEN 10000
								WHEN  f.amount_akhir > 20000 and d.tipe = 'TIARA' THEN 20000
								WHEN  f.amount_akhir > 0 and f.amount_akhir  < 10000 and d.tipe = 'REGULAR' THEN f.amount_akhir
								WHEN  f.amount_akhir > 0 and f.amount_akhir  < 20000 and d.tipe = 'TIARA' THEN f.amount_akhir
							ELSE 0
							END AS sisa_cicilan_seragam,
							a.tagihan_wajib, a.denda_perjam, a.jam_mulai_denda, a.doc_number AS spj_no,b.no_pintu, a.status, a.created AS jam_cetak_spj,
							c.name AS pool_name, 
							d.kip_number, d.id AS driverid, d.name AS driver_name, 
							d.hari_kerja, d.has_cicilan_jaminan, d.amount_cicilan_jaminan, d.jaminan_awal, d.limit_hk_cicilan_jaminan,
							e.amount_akhir, g.updated_dt as checker_date, h.ketentuan_jaminan,
							CONCAT(a.doc_number,' ',b.no_pintu,' ',d.name) AS data_spj, 
							CONCAT(merek,' ', b.tipe) AS desc_mobil", FALSE);
        $this->db->join('master_car b', 'a.car_id = b.id', 'left');
        $this->db->join('master_pool c', 'a.pool_id = c.id', 'left');
        $this->db->join('master_driver d', 'a.driver_id = d.id', 'left');
        $this->db->join('ap_jaminan e', 'd.ap_jaminan_id = e.id', 'left');
        $this->db->join('ap_pembayaran_seragam f', 'd.ap_pembayaran_seragam_id = f.id', 'left');
		$this->db->join('checker_header g', 'g.spj_id = a.id', 'left');
		$this->db->join('driver_registration h', 'h.id = d.driver_registration_id', 'left');
		$this->db->where('a.status', 'Payment');
		$this->db->group_start();
        $this->db->like('b.no_pintu', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('a.doc_number', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('d.name', $no_spj_or_no_pintu_or_driver_name , 'both');		
		$this->db->group_end();
        $this->db->order_by('a.doc_number', 'ASC');
        $this->db->limit(3);
        return $this->db->get('trx_spj a')->result();
    }
	
	function autocomplete_payment_spj_tiara($no_spj_or_no_pintu_or_driver_name){
        $this->db->select("a.id, 
			CASE
			   WHEN g.updated_dt < a.jam_mulai_denda THEN 0
			   ELSE 1
			END AS flag_denda,
			CEIL(EXTRACT('epoch' FROM g.updated_dt - jam_mulai_denda) /3600) AS jumlah_jam_denda,						   
			CASE 
				WHEN date_part('day' , age(g.updated_dt, jam_mulai_denda))  < 3 THEN 1
				ELSE date_part('day' , age(g.updated_dt, jam_mulai_denda))
			END AS jumlah_hari_denda,	
			CASE
				WHEN  f.amount_akhir is null THEN 0
				WHEN  f.amount_akhir = 0 THEN 0
				WHEN  f.amount_akhir > 10000 and d.tipe='REGULAR' THEN 10000
				WHEN  f.amount_akhir > 20000 and d.tipe='TIARA' THEN 20000
				WHEN  f.amount_akhir > 0 and f.amount_akhir  < 10000 and d.tipe='REGULAR' THEN f.amount_akhir
				WHEN  f.amount_akhir > 0 and f.amount_akhir  < 20000 and d.tipe='TIARA' THEN f.amount_akhir
			ELSE 0
			END AS sisa_cicilan_seragam,
			a.tagihan_wajib, a.denda_perjam, a.jam_mulai_denda, a.doc_number AS spj_no,b.no_pintu, a.status, a.created AS jam_cetak_spj,
			c.name AS pool_name, d.kip_number, d.id AS driverid, 
			d.name AS driver_name,
			d.hari_kerja, d.has_cicilan_jaminan, d.amount_cicilan_jaminan, d.jaminan_awal, d.limit_hk_cicilan_jaminan,
			e.amount_akhir, g.updated_dt as checker_date, h.ketentuan_jaminan,
			CONCAT(a.doc_number,' ',b.no_pintu,' ',d.name) AS data_spj, 
			CONCAT(merek,' ', b.tipe) AS desc_mobil", FALSE);
        $this->db->join('master_car b', 'a.car_id = b.id', 'left');
        $this->db->join('master_pool c', 'a.pool_id = c.id', 'left');
        $this->db->join('master_driver d', 'a.driver_id = d.id', 'left');
        $this->db->join('ap_jaminan e', 'd.ap_jaminan_id = e.id', 'left');
        $this->db->join('ap_pembayaran_seragam f', 'd.ap_pembayaran_seragam_id = f.id', 'left');
		$this->db->join('checker_header g', 'g.spj_id = a.id', 'left');
		$this->db->join('driver_registration h', 'h.id = d.driver_registration_id', 'left');
		$this->db->where('a.status', 'Payment');
		$this->db->group_start();
        $this->db->like('b.no_pintu', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('a.doc_number', $no_spj_or_no_pintu_or_driver_name , 'both');
        $this->db->or_like('d.name', $no_spj_or_no_pintu_or_driver_name , 'both');		
		$this->db->group_end();
        $this->db->order_by('a.doc_number', 'ASC');
        $this->db->limit(3);
        return $this->db->get('trx_spj a')->result();
    }
	
	function add_save_spj($post){
		$this->db->trans_start();
		
		// $datetime1 = strtotime(date($post['created_dt']));
		// $datetime2 = strtotime(date('Y-m-d H:i:s'));
		// $secs = $datetime2 - $datetime1;// == <seconds between the two times>
		// $days = $secs / 86400;
		// && $days >= 20
		if( ($post['ketentuan_jaminan'] == 'Lama' && str_replace(".","",str_replace("Rp. ","",$post['jaminan'])) < 500000 && $post['hari_kerja'] > 20) ||
				($post['ketentuan_jaminan'] == 'Baru' && str_replace(".","",str_replace("Rp. ","",$post['jaminan'])) < 500000 && $post['hari_kerja'] > 10)){
			?>
			<script type="text/javascript">
				alert("JAMINAN KURANG DARI 500.000.");
				window.location = "<?php echo site_url('/Spj/');?>";
			</script>
			<?php
			die;
		}

		$pool_user = $this->user['id_pool'];
		$id_user = $this->user['id'];
		$res2 = $this->db->query("select id,code from master_pool where id =".$pool_user.";")->row();
		$pool_id = $res2->id;
		$code = $res2->code;
		$res = $this->db->query("SELECT last_value FROM trx_spj_id_seq;")->row();
		$last_seq =  $res->last_value;
		$last_seq  = $last_seq + 1;
		
		$save['driver_id'] = $post['driver_id'];		
		$save['car_id'] = $post['car_id'];		
		$save['pool_id'] = $pool_id;		
		$save['created'] = date('Y-m-d H:i:s');		
		$save['creator_id'] =  $id_user;	
		$save['doc_number'] =  'SPJ/'.$code.'/'.date('Ymd').'/'.$last_seq;	
		$save['keterangan'] =  "Create SPJ by Pool";	
		$save['modified'] =  date('Y-m-d H:i:s');				
		$save['status'] =  "Active";
		$tipe_rental = $post['tipe_rental'];
		$save['tipe_rental'] = $tipe_rental;
		$save['tanggal_spj'] = date('Y-m-d');
		if($post['tipe_merek'] == 'TOYOTA NEW LIMO' || $post['tipe_merek'] == 'TOYOTA LIMO'){ //|| $post['tipe_merek'] == 'TOYOTA ALL NEW LIMO'
			$save['tagihan_wajib'] = 130000;
		} else if($post['tipe_merek'] == 'TOYOTA ETIOS'){
			$save['tagihan_wajib'] = 110000;
		} else if($post['tipe_merek'] == 'TOYOTA ALL NEW LIMO'){
			$save['tagihan_wajib'] = 180000;
		}
		$save['denda_perjam'] = 15000;
		$save['jam_mulai_denda'] = date('Y-m-d H:i:s', strtotime('+24 hours'));
		$save['total_tagihan'] =  0;
		
		$res = $this->db->insert('trx_spj', $save);
		
		$update = $this->db->query("update master_driver set hari_kerja=hari_kerja+1 where id=".$post['driver_id'].";");
		
		$this->db->trans_complete(); 
		return $res = $this->db->insert_id();
	}
	
	function add_save_spj_tiara($post){
		$this->db->trans_start();
		
		$pool_user = $this->user['id_pool'];
		$id_user = $this->user['id'];
		$res2 = $this->db->query("select id,code from master_pool where id =".$pool_user.";")->row();
		$pool_id = $res2->id;
		$code = $res2->code;
		$res = $this->db->query("SELECT last_value FROM trx_spj_id_seq;")->row();
		$last_seq =  $res->last_value;
		$last_seq  = $last_seq + 1;
		
		$save['driver_id'] = $post['driver_id'];		
		$save['car_id'] = $post['car_id'];		
		$save['pool_id'] = $pool_id;		
		$save['created'] = date('Y-m-d H:i:s');		
		$save['creator_id'] =  $id_user;	
		$save['doc_number'] =  'SPJ-TIARA/'.$code.'/'.date('Ymd').'/'.$last_seq;	
		$save['keterangan'] =  "Create SPJ by Pool";	
		$save['modified'] =  date('Y-m-d H:i:s');				
		$save['status'] =  "Active";
		$tipe_rental = $post['tipe_rental'];
		$save['tipe_rental'] = $tipe_rental;
		$save['tanggal_spj'] = date('Y-m-d');
		
		$save['tagihan_wajib'] = 650000;
		$save['denda_perjam'] = 35000;
		$save['jam_mulai_denda'] = date('Y-m-d H:i:s', strtotime('+24 hours'));
		
		
		$save['total_tagihan'] =  0;		
		$res = $this->db->insert('trx_spj', $save);
		
		$this->db->trans_complete(); 
		return $this->db->insert_id();
	}
	
	function add_save_setoran_spj_tiara($post){
		$this->db->trans_start();
		
		$pool_user = $this->user['id_pool'];
		$id_user = $this->user['id'];
		$res2 = $this->db->query("select id,code from master_pool where id =".$pool_user.";")->row();
		$code = $res2->code;
		$pool_id = $res2->id;
		$res = $this->db->query("SELECT last_value FROM trx_setoran_id_seq;")->row();
		$last_seq =  $res->last_value;
		$last_seq  = $last_seq + 1;
		$setoran_wajib = $post['setoran_wajib'];
		$denda = $post['denda'];
		$payment_cash = $post['payment_cash'];
		$payment_credit_ticket = $post['amount_credit_ticket'];
		$payment_charge_room = $post['amount_charge_room'];
		$payment_edc = $post['amount_edc'];
		$total_tagihan = $post['total_tagihan'];
		$jaminan = $post['jaminan'];
		$kembalian = $post['kembalian'];
		$code_credit_ticket = $post['code_credit_ticket'];
		$code_charge_room = $post['code_charge_room'];
		$code_edc = $post['code_edc'];
		
		$driver_id = $post['driver_id'];
		$sisa_tagihan = 0;
		$last_id = null;
		
		if ($total_tagihan > ($payment_cash + $payment_credit_ticket + $payment_charge_room + $payment_edc)) {
			$sisa_tagihan = $total_tagihan - ($payment_cash + $payment_credit_ticket+ $payment_charge_room + $payment_edc);
			$sisa_jaminan = $jaminan - $sisa_tagihan;
			$save2['created'] = date('Y-m-d H:i:s');	
		    $save2['status'] = 'Paid';
		     $save2['keterangan'] = 'Pemotongan Jaminan';
			 $save2['amount_awal'] = $jaminan;
			 $save2['amount'] = $sisa_tagihan * -1;
			 $save2['amount_akhir'] = $sisa_jaminan;
			 $save2['pool_id'] = $pool_id;
			 $save2['driver_id'] = $driver_id;
			 $res2 = $this->db->insert('ap_jaminan', $save2);
			 $last_id = $this->db->insert_id();
        	$this->db->query("UPDATE master_driver SET ap_jaminan_id = ".$last_id." WHERE id = ".$driver_id.";");
		}
		
		$save['spj_id']	= $post['spj_id'];
		$save['created'] = date('Y-m-d H:i:s');	
		$save['doc_number'] = 'TTS-TIARA/'.$code.'/'.date('Ymd').'/'.$last_seq;		
		$save['total_tagihan'] = $total_tagihan;		
		$save['setoran_wajib'] = $setoran_wajib;		
		$save['denda'] = $denda ;		
		$save['payment_via_cash'] = $payment_cash;		
		$save['payment_via_ct'] = $payment_credit_ticket;		
		$save['payment_via_charge_room'] = $payment_charge_room;		
		$save['payment_via_edc'] = $payment_edc;		
		$save['payment_via_tabungan'] = $sisa_tagihan;		
		$save['payment_total'] = $payment_cash +  $payment_credit_ticket + $payment_charge_room + $payment_edc + $sisa_tagihan ;		
		$save['no_ct'] = $code_credit_ticket;
		$save['no_charge_room'] = $code_charge_room;
		$save['no_edc'] = $code_edc;
		$save['status'] = "Paid";
		$save['amount_kembalian'] = $kembalian;
		$save['creator_id'] =  $id_user;			
		$save['ap_jaminan_id'] =  $last_id;			
		$save['pool_id'] = $pool_user;			
		$res = $this->db->insert('trx_setoran', $save);
		
		$last_id = $this->db->insert_id();
		$spj_id = $post['spj_id'];
		
		$this->db->query("UPDATE trx_spj SET payment_id = ".$last_id.", status = 'Paid' WHERE id = ".$spj_id.";");
		
		
		
		$driver_id = $post['driver_id'];
		$save3['created'] = date('Y-m-d H:i:s');	
		$save3['status'] = 'Paid';
		$save3['keterangan'] = 'Pembayaran Seragam';
		$amount = str_replace(".","",str_replace("Rp. ","",$post['sisa_cicilan_seragam']));
		$rowdata = $this->db->query("select  COALESCE(amount_akhir,0) as amount_awal 
									from ap_pembayaran_seragam where 
									id in (select ap_pembayaran_seragam_id 
										from master_driver where id = ".$driver_id.");")->row();
		if($rowdata !== NULL) {
		$amount_awal = $rowdata ->amount_awal;
		}
		else {
			$amount_awal = 0;
		}
		
		// ========================= DOC NUMBER ================================================================
		
		$seq =  $this->db->query("select (lpad((nextval('ap_pembayaran_seragam_number_seq'))::text, 5, '0')) as kip")->row_array()['kip'];
		$trx_seragam_number = 'TRX-SERAGAM/'.$code.'/'.date('Ym').'/'.$seq;
		
		// =====================================================================================================
		
		$save3['doc_number'] = $trx_seragam_number;
		$save3['driver_id'] = $driver_id;
		$save3['pool_id'] = $pool_id;
		$save3['amount_awal'] = $amount_awal;
		$save3['created_by'] = $id_user;
		$save3['amount'] = $amount;
		$save3['amount_akhir'] = $amount_awal - $amount;
		
		$res = $this->db->insert('ap_pembayaran_seragam', $save3);	
		
		$last_id = $this->db->insert_id();	
		$this->db->query("UPDATE master_driver SET ap_pembayaran_seragam_id = ".$last_id." WHERE id = ".$driver_id.";");
		
		$this->db->trans_complete(); 
		return $this->db->insert_id();
		
	}
	
	function add_save_setoran_spj($post){
		$this->db->trans_start();
		
		$pool_user = $this->user['id_pool'];
		$id_user = $this->user['id'];
		$res2 = $this->db->query("select id,code from master_pool where id =".$pool_user.";")->row();
		$code = $res2->code;
		$pool_id = $res2->id;
		$res = $this->db->query("SELECT last_value FROM trx_setoran_id_seq;")->row();
		$last_seq =  $res->last_value;
		$last_seq  = $last_seq + 1;
		$setoran_wajib = $post['setoran_wajib'];
		$denda = $post['denda'];
		$payment_cash = $post['payment_cash'];
		$payment_credit_ticket = $post['amount_credit_ticket'];
		$total_tagihan = $post['total_tagihan'];
		$jaminan = $post['jaminan'];
		$kembalian = $post['kembalian'];
		
		$driver_id = $post['driver_id'];
		$sisa_tagihan = 0;
		$last_id = null;
		
		if($total_tagihan > ($payment_cash + $payment_credit_ticket)){
			$sisa_tagihan = $total_tagihan - ($payment_cash + $payment_credit_ticket);
			$sisa_jaminan = $jaminan - $sisa_tagihan;
			$save2['created'] = date('Y-m-d H:i:s');	
		    $save2['status'] = 'Paid';
			$save2['keterangan'] = 'Pemotongan Jaminan';
			$save2['amount_awal'] = $jaminan;
			$save2['amount'] = $sisa_tagihan * -1;
			$save2['amount_akhir'] = $sisa_jaminan;
			$save2['pool_id'] = $pool_id;
			$save2['driver_id'] = $driver_id;
			$save2['doc_number'] = 'TTS/'.$code.'/'.date('Ymd').'/'.$last_seq;
			$res2 = $this->db->insert('ap_jaminan', $save2);
			$last_id = $this->db->insert_id();
			
			$update_driver = $this->db->query("UPDATE master_driver SET ap_jaminan_id = ".$last_id." WHERE id = ".$driver_id.";");
			
			$cari_ap = $this->db->query("select * from ap_jaminan WHERE driver_id=".$driver_id." order by id desc limit 1;")->row_array();
			$save3['created'] = date('Y-m-d H:i:s');	
		    $save3['status'] = 'Paid';
			$save3['keterangan'] = 'Penambahan Jaminan';
			$save3['amount_awal'] = $cari_ap['amount_akhir'];
			$save3['amount'] = $post['cicilan_jaminan'];
			$save3['amount_akhir'] = $cari_ap['amount_akhir']+$post['cicilan_jaminan'];
			$save3['pool_id'] = $pool_id;
			$save3['driver_id'] = $driver_id;
			$save3['doc_number'] = 'TTS/'.$code.'/'.date('Ymd').'/'.$last_seq;
			$res3 = $this->db->insert('ap_jaminan', $save3);
			$last_id2 = $this->db->insert_id();
			
			$update_driver2 = $this->db->query("UPDATE master_driver SET ap_jaminan_id = ".$last_id2." WHERE id = ".$driver_id.";");
			
		} else { 
		
			$save2['created'] = date('Y-m-d H:i:s');	
			$save2['status'] = 'Paid';
			$save2['keterangan'] = 'Penambahan Jaminan';
			$save2['amount_awal'] = $jaminan;
			$save2['amount'] = $post['cicilan_jaminan'];
			$save2['amount_akhir'] = $jaminan + $post['cicilan_jaminan'];;
			$save2['pool_id'] = $pool_id;
			$save2['driver_id'] = $driver_id;
			$save2['doc_number'] = 'TTS/'.$code.'/'.date('Ymd').'/'.$last_seq;
			$res2 = $this->db->insert('ap_jaminan', $save2);
			$last_id = $this->db->insert_id();
			$this->db->query("UPDATE master_driver SET ap_jaminan_id = ".$last_id." WHERE id = ".$driver_id.";");
			
		}
		
		$save['cicilan_jaminan'] = $post['cicilan_jaminan'];
		$save['spj_id']	= $post['spj_id'];
		$save['created'] = date('Y-m-d H:i:s');	
		$save['doc_number'] = 'TTS/'.$code.'/'.date('Ymd').'/'.$last_seq;		
		$save['total_tagihan'] = $total_tagihan;		
		$save['setoran_wajib'] = $setoran_wajib;		
		$save['denda'] = $denda ;		
		$save['payment_via_cash'] = $payment_cash;		
		$save['payment_via_ct'] = $payment_credit_ticket;		
		$save['payment_via_charge_room'] = 0;		
		$save['payment_via_edc'] = 0;
		$save['payment_via_tabungan'] = $sisa_tagihan;		
		$save['payment_total'] = $payment_cash + $payment_credit_ticket + $sisa_tagihan ;		
		$save['no_ct'] = "";
		$save['no_charge_room'] = "";
		$save['no_edc'] = "";
		$save['status'] = "Paid";
		$save['amount_kembalian'] = $kembalian;
		$save['creator_id'] =  $id_user;			
		$save['ap_jaminan_id'] =  $last_id;			
		$save['pool_id'] = $pool_user;
		
		
		$res = $this->db->insert('trx_setoran', $save);
		
		$last_id = $this->db->insert_id();
		$spj_id = $post['spj_id'];
		
		$this->db->query("UPDATE trx_spj SET payment_id = ".$last_id.", status = 'Paid' WHERE id = ".$spj_id.";");
		
		
		$driver_id = $post['driver_id'];
		$save3['created'] = date('Y-m-d H:i:s');	
		$save3['status'] = 'Paid';
		$save3['keterangan'] = 'Pembayaran Seragam';
		$amount = str_replace(".","",str_replace("Rp. ","",$post['sisa_cicilan_seragam']));
		$rowdata = $this->db->query("select  COALESCE(amount_akhir,0) as amount_awal 
									from ap_pembayaran_seragam where 
									id in (select ap_pembayaran_seragam_id 
										from master_driver where id = ".$driver_id.");")->row();
		if($rowdata !== NULL) {
		$amount_awal = $rowdata ->amount_awal;
		}
		else {
			$amount_awal = 0;
		}
		
		// ========================= DOC NUMBER SERAGAM ================================================================
		
		//$seq =  $this->db->query("select (lpad((nextval('ap_pembayaran_seragam_number_seq'))::text, 5, '0')) as kip")->row_array()['kip'];
		//$trx_seragam_number = 'TRX-SERAGAM/'.$code.'/'.date('Ym').'/'.$seq;
		$trx_seragam_number = 'TTS/'.$code.'/'.date('Ymd').'/'.$last_seq;
		
		// =====================================================================================================
		
		$save3['doc_number'] = $trx_seragam_number;
		$save3['driver_id'] = $driver_id;
		$save3['pool_id'] = $pool_id;
		$save3['amount_awal'] = $amount_awal;
		$save3['created_by'] = $id_user;
		$save3['amount'] = $amount;
		$save3['amount_akhir'] = $amount_awal - $amount;
		
		$res = $this->db->insert('ap_pembayaran_seragam', $save3);	
		
		$last_id = $this->db->insert_id();

		if(($amount_awal-$amount_akhir) <= 0){
			$this->db->query("UPDATE master_driver SET ap_pembayaran_seragam_id = ".$last_id.", has_cicilan_seragam='false' WHERE id = ".$driver_id.";");
		}else{
			$this->db->query("UPDATE master_driver SET ap_pembayaran_seragam_id = ".$last_id." WHERE id = ".$driver_id.";");
		}
		
		
		$this->db->trans_complete(); 
		return $this->db->insert_id();
		
	}
	
	function get_data_for_index_spj($date, $dateakhir, $id_pool, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		
		$res = $this->db->query("select a.id,doc_number, a.status, a.created, a.tipe_rental, a.jam_mulai_denda,
			b.no_pintu, c.name as pool_name,
			d.kip_number,d.name as driver_name, d.hari_kerja,
			e.username
			from trx_spj a
			left join master_car b on (a.car_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			left join master_driver d on (a.driver_id = d.id)
			left join cac_user e on (a.creator_id =e.id)
			where a.pool_id=".$id_pool." and a.created>='".$start."' and a.created<='".$end."' and a.status in('".$id_lunas."')
			and b.unit_bisnis in ('EXPRESS','EAGLE')
			order by a.created desc;")->result_array();
			
		return $res;
	}
	
	function get_data_for_index_spj_tiara($date, $dateakhir, $id_pool, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		$res = $this->db->query("select a.id,doc_number, a.status, a.created, a.tipe_rental,a.jam_mulai_denda, 
			b.no_pintu,d.kip_number,
			c.name as pool_name, 
			d.name as driver_name,   
			e.username
			from trx_spj a
			left join master_car b on (a.car_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			left join master_driver d on (a.driver_id = d.id)
			left join cac_user e on (a.creator_id =e.id)
			where a.pool_id=".$id_pool." and a.created>='".$start."' and a.created<='".$end."' and a.status in('".$id_lunas."')
			and b.unit_bisnis='TIARA'
			order by a.created desc;")->result_array();
			
		return $res;
	}
	
	function get_data_for_index_setoran_spj($date, $dateakhir, $id_pool, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		$res = $this->db->query("select a.id, a.doc_number as setoran_no, a.total_tagihan, a.payment_total,a.created, 
			a.payment_via_cash, a.payment_via_ct, a.payment_via_tabungan, a.amount_kembalian, a.no_ct, 
			b.username,
			c.doc_number as spj_no, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, 
			d.name as pool_name, 
			e.no_pintu, 
			f.kip_number, f.name as driver_name,
			g.updated_dt, a.denda, a.setoran_wajib
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id)
			left join checker_header g on (c.id = g.spj_id)
			where a.pool_id=".$id_pool." and a.created>='".$start."' and a.created<='".$end."' and a.status in('".$id_lunas."')
			and e.unit_bisnis IN ('EXPRESS','EAGLE')
			order by a.created desc;")->result_array();
		
		return $res;
	}
	
	function get_data_for_index_setoran_spj_tiara($date, $dateakhir, $id_pool, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		$res = $this->db->query("select a.id, a.doc_number as setoran_no, a.total_tagihan, a.payment_total,a.created, 
			a.payment_via_tabungan, a.payment_via_charge_room, a.payment_via_edc, a.amount_kembalian, a.no_ct, 	
			a.no_charge_room, a.no_edc, a.denda, a.setoran_wajib, b.username, a.payment_via_cash, a.payment_via_ct,
			c.doc_number as spj_no, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, 
			d.name as pool_name,
			e.no_pintu, 
			f.kip_number, f.name as driver_name,
			g.updated_dt
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id) 
			left join checker_header g on (c.id = g.spj_id)
			where a.pool_id=".$id_pool." and a.created>='".$start."' and a.created<='".$end."' and a.status in('".$id_lunas."')
			and e.unit_bisnis='TIARA'
			order by a.created desc;")->result_array();
		
	//print_r($res);die;
		return $res;
	}
	
	function get_data_spj($id){
		$res = $this->db->query("select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=".$id.";")->row_array();
		return $res;
	}
	
	function spj_driver($id){
		$res = $this->db->query("select a.*, 
			b.name, b.kip_number, 
			c.no_pintu, c.no_polisi, 
			d.full_name, 
			e.email,
			f.doc_number as doc_setoran, f.total_tagihan, f.denda, f.payment_total, f.payment_via_cash, f.payment_via_tabungan, f.payment_via_ct, 
			f.payment_via_charge_room, f.payment_via_edc
			from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			left join trx_setoran f on(f.spj_id=a.id)
			where a.driver_id=".$id." order by a.tanggal_spj desc;")->result_array();
		return $res;
	}
	
	function get_data_setoran($id){
		$res = $this->db->query("select a.*, b.doc_number as doc_number_spj, b.created as created_spj, c.name, c.kip_number, 
			e.no_pintu, e.no_polisi, d.full_name, f.updated_dt as jam_checker, g.amount_akhir, c.tipe
			from trx_setoran a 
			left join trx_spj b on(a.id=b.payment_id)
			left join master_driver c on(c.id=b.driver_id)
			left join cac_user d on(d.id=a.creator_id)
			left join master_car e on(e.id=b.car_id)
			left join checker_header f on(f.spj_id=b.id)
			left join ap_jaminan g on (c.ap_jaminan_id = g.id)
			where a.id=".$id.";")->row_array();
		return $res;
	}
	
	function get_data_spj18($id){
		$res = $this->db->query("select count(0) as total from trx_spj
								where driver_id in (
									select driver_id from trx_spj
									where id in (
										select spj_id from trx_setoran
										where id = ".$id.")
								) and status = 'Paid' and tipe_rental = '18 Jam' and to_char(created, 'MM-YYYY') in (select to_char(created, 'MM-YYYY') from trx_setoran where id=".$id."); ")->row_array();
		return $res;
	}
	
	function get_data_spj24($id){
		$res = $this->db->query("select count(0) as total from trx_spj
								where driver_id in (
									select driver_id from trx_spj
									where id in (
										select spj_id from trx_setoran
										where id = ".$id.")
								) and status = 'Paid' and tipe_rental = '24 Jam' and to_char(created, 'MM-YYYY') in (select to_char(created, 'MM-YYYY') from trx_setoran where id=".$id.");")->row_array();
		return $res;
	}
	
	function checker_setoran($post){
		
			$res = $this->db->query("update trx_spj set status='Payment' where id='".$post['spj_id']."' ");
			$res = $this->db->insert_id();
			return $res;
		
	}
	
	function checker_keluar_pool($post){
		
			$res = $this->db->query("update trx_spj set status='Drive' where id='".$post['spj_id']."' ");
			$res = $this->db->insert_id();
			return $res;
		
	}
	
	function save_header_checker($post){
		$this->db->trans_start();
		// ========================= DOC NUMBER ================================================================
		
		$res = $this->db->query("select id,code from master_pool where id =".$this->user['id_pool'].";")->row();
		$code = $res->code;
		$seq =  $this->db->query("select (lpad((nextval('checker_header_number_seq'))::text, 5, '0')) as kip")->row_array()['kip'];
		$doc_number = 'CEK/'.$code.'/'.date('Ym').'/'.$seq;
		
		// =====================================================================================================
		
		$save = array();
		$save['doc_number'] = $doc_number;
		$save['created_by'] = $this->user['id'];
		$save['spj_id']		= $post['spj_id'];
		$save['bbm_out']	= $post['bbm'];
		$save['km_out']		= $post['km_in'];
		$save['rit_out']	= $post['rit_in'];
		$save['drop_out']	= $post['drop_in'];
		
		$res = $this->db->insert('checker_header', $save);
		$this->db->trans_complete();
		return $this->db->insert_id();
	}
	
	function update_header_checker($post){
		$res = $this->db->query("update checker_header set updated_dt='".date('Y-m-d H:i:s')."', 
				updated_by=".$this->user['id'].", 
				bbm_in='".$post['bbm']."',
				km_in='".$post['km_in']."',
				rit_in='".$post['rit_in']."',
				drop_in='".$post['drop_in']."'
			where spj_id='".$post['spj_id']."' ");
		
		$res = $this->db->affected_rows();

		if($res):
			$res2 = $this->db->query("select id from checker_header where spj_id=".$post['spj_id']."")->row_array();
			return $res2['id'];
		else:
			return false;
		endif;
	}
	
	function save_detail_checker_out($id_header, $pertanyaan, $jawaban, $keterangan){
		$res = $this->db->query("select pertanyaan from master_pertanyaan where id=".$pertanyaan.";")->row_array();
		
		$save = array();
		$save['checker_header_id'] = $id_header;
		$save['master_pertanyaan_id'] = $pertanyaan;
		$save['noted_out'] = $keterangan;
		$save['out'] = $jawaban;
		$save['created_dt'] = date('Y-m-d h:i:d');
		$save['created_by'] = $this->user['id'];
		$save['pertanyaan'] = $res['pertanyaan'];
		$this->db->insert('checker_detail', $save);
		$insert = $this->db->insert_id();
		return $insert;
	}
	
	function update_detail_checker_in($id_header, $pertanyaan, $jawaban, $keterangan){
			
		$data = array(
				'in' => $jawaban,
				'noted_in' => $keterangan,
				'updated_dt' => date('Y-m-d h:i:d')
		);

		$this->db->where('checker_header_id', $id_header);
		$this->db->where('master_pertanyaan_id', $pertanyaan);
		$this->db->update('checker_detail', $data);
		
		$updated_status = $this->db->affected_rows();

		return $updated_status;
	}
	
	public function index_checker($date, $dateakhir){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		if(
			$this->user['id_privilege'] == 1 ||
			$this->user['id_privilege'] == 6
			){
			$res = $this->db->query("select a.*, b.doc_number as spj_number, c.no_polisi, c.no_pintu, b.created as created_spj, c.merek, c.tipe, 
				d.full_name as created_by, e.full_name as updated_by
				from checker_header a
				left join trx_spj b on(a.spj_id=b.id)
				left join master_car c on(c.id=b.car_id)
				left join cac_user d on(d.id=a.created_by)
				left join cac_user e on(e.id=a.updated_by)
				where a.created_dt >= '".$start."' and a.created_dt <= '".$end."' order by b.created desc;")->result_array();
		}else{
			$res = $this->db->query("select a.*, b.doc_number as spj_number, c.no_polisi, c.no_pintu, b.created as created_spj, c.merek, c.tipe 
				from checker_header a
				left join trx_spj b on(a.spj_id=b.id)
				left join master_car c on(c.id=b.car_id)
				where a.created_dt >= '".$start."' and a.created_dt <= '".$end."' and b.pool_id=".$this->user['id_pool']."  order by b.created desc;")->result_array();
		}
		return $res;
		
	}
	
	function data_checker_header($id){
		$res = $this->db->query("select a.*, b.status from checker_header a
			left join trx_spj b on(a.spj_id=b.id)
			order by a.id desc")->row_array();
		return $res;
	}
	
	function cancel_spj($id){
		$res = $this->db->query("update trx_spj set status='Cancelled', modified='".date('Y-m-d h:i:d')."' where id=".$id.";");
		$res = $this->db->affected_rows();
		return $res;
	}
	
	function report_checker_body($date, $dateakhir){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		
		$res = $this->db->query("select d.no_polisi, a.*, b.*, c.*, d.*, 
			c.doc_number as spj_number,
			case
				when a.out = 2 then 'Tidak Baik/Rusak'
				when a.out = 3 then 'Hilang'
			end as answer_out,
			case
				when a.in = 2 then 'Tidak Baik/Rusak'
				when a.in = 3 then 'Hilang'
			end as answer_in
			from checker_detail a
			left join checker_header b on(b.id = a.checker_header_id)
			left join trx_spj c on(c.id = b.spj_id)
			left join master_car d on(d.id = c.car_id)
			where (a.out in (2,3) or a.in in (2,3)) and a.created_dt>='".$start."' and a.created_dt<='".$end."'; ")->result_array();
		return $res;
	}
}

