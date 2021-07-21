<?php

class dashboard_model extends CI_Model {
	
	
	function get_data_vehicle_register(){
		$res = $this->db->query("select count(0) as total from master_car where status = 'Active';")->row_array();
		return $res;
	}
	
	function sum_data_payment_today(){
		$res = $this->db->query("select sum(total_tagihan) as total from trx_setoran where created >= CURRENT_DATE ;")->row_array();
		return $res;
	}
	
	function sum_data_payment_today_regular(){
		$res = $this->db->query("select sum(a.total_tagihan) as total from trx_setoran a
								 left join trx_spj b on (a.spj_id = b.id)
								 left join master_car c on (b.car_id = c.id)
								 where  to_char(a.created,'yyyy-MM-dd')  = to_char(CURRENT_DATE,'yyyy-MM-dd')
								 and c.unit_bisnis in ('EAGLE','EXPRESS');")->row_array();
		return $res;
	}
	
	function sum_data_payment_today_tiara(){
		$res = $this->db->query("select sum(a.total_tagihan) as total from trx_setoran a
								 left join trx_spj b on (a.spj_id = b.id)
								 left join master_car c on (b.car_id = c.id)
								 where  to_char(a.created,'yyyy-MM-dd')  = to_char(CURRENT_DATE,'yyyy-MM-dd')
								 and c.unit_bisnis = 'TIARA';")->row_array();
		return $res;
	}
	
	function sum_data_payment_last_month(){
		$res = $this->db->query("select sum(total_tagihan) as total from trx_setoran where to_char(created, 'MM-YYYY') = (to_char(date_trunc('day', now() - interval '1 month'), 'MM-YYYY'));")->row_array();
		return $res;
	}
	
	function sum_data_payment_this_month(){
		$res = $this->db->query("select sum(total_tagihan) as total from trx_setoran where to_char(created, 'MM-YYYY') = (to_char(date_trunc('day', now()), 'MM-YYYY'));")->row_array();
		return $res;
	}
	
	function get_data_spj_today(){
		$res = $this->db->query("select count(0) as total from  trx_spj where to_char(created,'yyyy-MM-dd') = to_char(CURRENT_DATE,'yyyy-MM-dd');")->row_array();
		return $res;
	}
	
	function get_data_spj_today_regular(){
		$res = $this->db->query("select count(0) as total from trx_spj a 
		left join master_car b on (a.car_id = b.id)
								 where  to_char(created,'yyyy-MM-dd')  = to_char(CURRENT_DATE,'yyyy-MM-dd')
								 and b.unit_bisnis in ('EXPRESS','EAGLE');")->row_array();
		return $res;
	}
	
	function get_data_spj_today_tiara(){
		$res = $this->db->query("select count(0) as total from trx_spj a 
		left join master_car b on (a.car_id = b.id)
								 where  to_char(created,'yyyy-MM-dd')  = to_char(CURRENT_DATE,'yyyy-MM-dd')
								 and b.unit_bisnis = 'TIARA';")->row_array();
		return $res;
	}
	
	function get_data_spj_yesterday(){
		$res = $this->db->query("select count(0) as total from  trx_spj where to_char(created,'yyyy-MM-dd') = to_char(CURRENT_DATE-1,'yyyy-MM-dd');")->row_array();
		return $res;
	}
	
	function get_data_spj_yesterday_regular(){
		$res = $this->db->query("select count(0) as total from trx_spj a 
		left join master_car b on (a.car_id = b.id)
								 where  to_char(created,'yyyy-MM-dd')  = to_char(CURRENT_DATE-1,'yyyy-MM-dd')
								 and b.unit_bisnis in ('EXPRESS','EAGLE');")->row_array();
		return $res;
	}
	
	function get_data_spj_yesterday_tiara(){
		$res = $this->db->query("select count(0) as total from trx_spj a 
		left join master_car b on (a.car_id = b.id)
								 where  to_char(created,'yyyy-MM-dd')  = to_char(CURRENT_DATE-1,'yyyy-MM-dd')
								 and b.unit_bisnis = 'TIARA';")->row_array();
		return $res;
	}
	
	function get_data_spj_this_month(){
		$res = $this->db->query("select count(0) as total from trx_spj where to_char(created, 'MM-YYYY') = (to_char(date_trunc('day', NOW()), 'MM-YYYY'));")->row_array();
		return $res;
	}
	
	function get_data_spj_last_month(){
		$res = $this->db->query("select count(0) as total from trx_spj where to_char(created, 'MM-YYYY') = (to_char(date_trunc('day', NOW() - interval '1 month'), 'MM-YYYY'));")->row_array();
		return $res;
	}
	
	function get_data_payment_today(){
		$res = $this->db->query("select count(0) as total from  trx_setoran;")->row_array();
		return $res;
	}
	
	function get_data_vehicle_active(){
		$res = $this->db->query("select count(distinct car_id) as total from trx_spj where status not in ('Paid');")->row_array();
		return $res;
	}
	function get_data_driver_register(){
		$res = $this->db->query("select count(0) as total  from master_driver where status = 'Active';")->row_array();
		return $res;
	}
	
	function get_data_utilisasi_unit(){
		$res = $this->db->query("select round(cast((select count(distinct car_id) as total from trx_spj where status not in ('Paid')) as decimal)/(select count(0) as total from master_car where status = 'Active')*100,2) as total;")->row_array();
		return $res;
	}
	
	function get_data_utilisasi_driver(){
		$res = $this->db->query("select round(cast((select count(distinct driver_id) as total from trx_spj where status not in ('Paid')) as decimal)/(select count(0) as total from master_driver where status = 'Active')*100,2) as total;")->row_array();
		return $res;
	}
	
	function get_data_driver_active(){
		$res = $this->db->query("select count(distinct driver_id) as total from trx_spj where status not in ('Paid');")->row_array();
		return $res;
	}
	
	function get_data_stnk_expired_30(){
		$res = $this->db->query("select count(0) as stnk from  master_car
where extract (epoch from (date_expired_stnk - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_stnk - now()))::integer/(60*60*24) < 30;")->row_array();
		return $res;
	}
	
	function get_data_stnk_expired(){
		$res = $this->db->query("select count(0) as stnk from  master_car
where extract (epoch from (date_expired_stnk - now()))::integer/(60*60*24) < 0;")->row_array();
		return $res;
	}
	
	function get_data_tera_expired_30(){
		$res = $this->db->query("select count(0) as tera  from  master_car
where extract (epoch from (date_expired_tera - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_tera - now()))::integer/(60*60*24) < 30;")->row_array();
		return $res;
	}
	
	function get_data_tera_expired(){
		$res = $this->db->query("select count(0) as tera  from  master_car
where extract (epoch from (date_expired_tera - now()))::integer/(60*60*24) < 0;")->row_array();
		return $res;
	}
	
	function get_data_keur_expired_30(){
		$res = $this->db->query("select count(0) as keur 
			from  master_car
			where extract (epoch from (date_expired_keur - now()))::int8/(60*60*24) > 0 
			and extract (epoch from (date_expired_keur - now()))::int8/(60*60*24) < 30;")->row_array();
		return $res;
	}
	
	function get_data_keur_expired(){
		$res = $this->db->query("select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::int8/(60*60*24) < 0;")->row_array();
		return $res;
	}
	
	function get_data_kiukio_expired_30(){
		$res = $this->db->query("select count(0) as kiukio from  master_car
where extract (epoch from (date_expired_kiukio - now()))::integer/(60*60*24) >0 and extract (epoch from (date_expired_kiukio - now()))::integer/(60*60*24) < 30;")->row_array();
		return $res;
	}
	
	function get_data_kiukio_expired(){
		$res = $this->db->query("select count(0) as kiukio from  master_car
where extract (epoch from (date_expired_kiukio - now()))::integer/(60*60*24) < 0;")->row_array();
		return $res;
	}
	
}

