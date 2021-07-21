<?php

class closing_model extends CI_Model {
	
	
	function get_data_for_index_closing(){
		$res = $this->db->query("select 
			a.date_closing, a.value_jaminan, a.amount_jaminan, a.value_payment_cash, a.amount_payment_cash, a.value_payment_jaminan, 
			a.amount_payment_jaminan, a.value_payment_credit_ticket, a.amount_payment_credit_ticket, a.value_payment_edc, a.amount_payment_edc, 
			a.value_payment_charge_room, a.amount_payment_charge_room, a.created, a.pool_id, b.name as pool_name, a.value_kembalian, a.amount_kembalian,
			a.notes, a.setor_bank
			from closing_cashier_daily a
			left join master_pool b on (a.pool_id = b.id)
			order by a.date_closing desc;")->result_array();
		
		return $res;
	}
	
	function list_detail_closing(){
		$res = $this->db->query("select 
			a.date_closing, a.value_jaminan, a.amount_jaminan, a.value_payment_cash, a.amount_payment_cash, a.value_payment_jaminan, 
			a.amount_payment_jaminan, a.value_payment_credit_ticket, a.amount_payment_credit_ticket, a.value_payment_edc, a.amount_payment_edc, 
			a.value_payment_charge_room, a.amount_payment_charge_room, a.created, a.pool_id, b.name as pool_name, a.value_kembalian, a.amount_kembalian,
			a.doc_number, c.ptfullname as pt_name, a.unit_bisnis
			from closing_cashier_daily_d a
			left join master_pool b on (a.pool_id = b.id)
			left join master_pt c on (c.id = a.pt_id)
			order by a.date_closing desc;")->result_array();
		
		return $res;
	}
	
	function add_closing($pool_id, $notes){
		$this->db->trans_start();
		
		$res = $this->db->query("insert into closing_cashier_daily
			select nextval('closing_cashier_daily_id_seq'), date(a.created), 
			c.val as val_setoran_jaminan, c.total as total_setoran_jaminan, 
			count(nullif(a.payment_via_cash,0)) as val_cash, sum(a.payment_via_cash) as total_cash,
			count(nullif(a.payment_via_tabungan,0)) as val_jaminan, sum(a.payment_via_tabungan) as total_jaminan,
			count(nullif(a.payment_via_ct,0)) as val_ct, sum(a.payment_via_ct) as total_ct,
			count(nullif(a.payment_via_edc,0)) as val_edc, sum(a.payment_via_edc) as total_edc,
			count(nullif(a.payment_via_charge_room,0)) as val_cr, sum(a.payment_via_charge_room) as total_cr,
			now(), a.pool_id,
			count(nullif(a.amount_kembalian,0)) as val_kembalian, sum(a.amount_kembalian) as total_kembalian, '".$notes."',
			'CLS-HARIAN/'||d.code||'/'||to_char(now(), 'YYMMDD'),
			c.total + sum(a.payment_via_cash) - sum(a.amount_kembalian) as setor_bank
			from trx_setoran a 
			left join (select date(b.created) as tanggal, sum(b.amount) as total, count(nullif(b.amount,0)) as val,  b.pool_id
				from ap_jaminan b 
				where b.keterangan='Top Up by Pool' group by date(b.created), b.pool_id ) c on (c.tanggal=date(a.created) and c.pool_id=a.pool_id)
			left join master_pool d on(d.id = a.pool_id)
			where a.pool_id=".$pool_id." and date(a.created)=date(now())
			group by date(a.created), c.total, c.val, a.pool_id, d.code order by date asc; ");
		
		$res = $this->db->insert_id();
		
		// print_r($res);die;
		
		$res2 = $this->db->query("insert into closing_cashier_daily_d 
			select nextval('closing_cashier_daily_d_id_seq'), date(a.created),
			0 as val_top_up_jaminan, 0 as total_top_up_jaminan,
			count(nullif(a.payment_via_cash,0)) as val_cash, sum(a.payment_via_cash) as total_cash,
			count(nullif(a.payment_via_tabungan,0)) as val_jaminan, sum(a.payment_via_tabungan) as total_jaminan,
			count(nullif(a.payment_via_ct,0)) as val_ct, sum(a.payment_via_ct) as total_ct,
			count(nullif(a.payment_via_edc,0)) as val_edc, sum(a.payment_via_edc) as total_edc,
			count(nullif(a.payment_via_charge_room,0)) as val_cr, sum(a.payment_via_charge_room) as total_cr,
			now(), a.pool_id,
			count(nullif(a.amount_kembalian,0)) as val_kembalian, sum(a.amount_kembalian) as total_kembalian, 
			'CLS-HARIAN/'||to_char(now(), 'YYMMDD')||'/'||g.code||'-'||f.ptshortname, 
			f.id,
			".$res.", e.unit_bisnis
			from trx_setoran a 
			left join trx_spj d on(d.id=a.spj_id)
			left join master_car e on(e.id=d.car_id)
			left join master_pt f on(f.id=e.pt_id)
			left join master_pool g on(g.id=a.pool_id)
			where a.pool_id=".$pool_id." and date(a.created)=date(now())
			group by date(a.created), a.pool_id, f.id, g.code, f.ptshortname , e.unit_bisnis
			union all
			select nextval('closing_cashier_daily_d_id_seq'), date(z.created) as tanggal, 
			count(nullif(z.amount,0)) as val, sum(z.amount) as total,
			0, 0,
			0, 0, 
			0, 0, 
			0, 0, 
			0, 0,
			now(), z.pool_id, 
			0, 0,
			'CLS-HARIAN/'||to_char(now(), 'YYMMDD')||'/'||x.code||'-'||y.ptshortname||'/JAMINAN',
			y.id,
			".$res.", null
			from ap_jaminan z
			left join master_pt y on(y.id = z.pt_id)
			left join master_pool x on(x.id = z.pool_id)
			where z.pool_id=".$pool_id." and z.keterangan='Top Up by Pool' and date(z.created)=date(now())
			group by date(z.created), z.pool_id, y.id, x.code, y.ptshortname; ");
		
		$this->db->trans_complete(); 
		return $res2;
	}
	
	
	
}

