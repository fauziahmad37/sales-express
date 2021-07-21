<?php

class Report_model extends CI_Model {
	function data_rekap_spj_regular($date, $dateakhir, $pool_id){
		$start = date('m-Y', strtotime($date));
		$end = date('m-Y', strtotime($dateakhir));
		
		$res = $this->db->query("select a.nama_pool, a.tipe , a.name, a.kip_number, a.created_dt, 
			d.first_spj, 
			COALESCE(total_18,0) as spj_18, 
			COALESCE(total_24,0) as spj_24 
			from (select a.id, a.name, kip_number, tipe, b.name as nama_pool, a.created_dt
					from master_driver a
					left join master_pool b on (a.pool_id = b.id)
					where a.status = 'Active' and tipe = 'REGULAR' and pool_id=".$pool_id.") a
			left join
				(select driver_id , tipe_rental, count(0) as total_18
				from trx_spj
				where status = 'Paid' and tipe_rental = '18 Jam' and to_char(created,'MM-YYYY') = '".$start."' and pool_id=".$pool_id."
				group by driver_id , tipe_rental) b on (a.id = b.driver_id)
			left join 
				(select driver_id , tipe_rental, count(0) as total_24 
				from trx_spj
				where status = 'Paid' and tipe_rental = '24 Jam' and to_char(created,'MM-YYYY') = '".$end."' and pool_id=".$pool_id."
				group by driver_id , tipe_rental) c on (a.id = c.driver_id)
			left join 
				(select z.id, min(y.created) as first_spj 
				from master_driver z
				left join trx_spj y on (z.id = y.driver_id)
				group by z.id ) d on (a.id = d.id)
			order by 1 asc, 2 asc, 3 asc;")->result_array();
		return $res;
	}
	
	
	function data_rekap_spj_tiara($date, $dateakhir, $pool_id){
		$start = date('m-Y', strtotime($date));
		$end = date('m-Y', strtotime($dateakhir));
		
		$res = $this->db->query("select a.nama_pool,a.tipe,a.name,a.kip_number,a.created_dt,d.first_spj,COALESCE(total_18,0) as spj_18, coalesce(total_24,0) as spj_24 
			from (select a.id,a.name, kip_number,tipe, b.name as nama_pool,a.created_dt 
				from master_driver a 
				left join master_pool b on (a.pool_id = b.id) 
				where a.status = 'Active' and tipe = 'TIARA' and pool_id=".$pool_id.") a
			left join
				(select driver_id , tipe_rental, count(0) as total_18 
				from trx_spj
				where status = 'Paid'
				and tipe_rental = '18 Jam'
				and to_char(created,'MM-YYYY') = '".$start."' and pool_id=".$pool_id."
				group by driver_id , tipe_rental) b on (a.id = b.driver_id)
			left join 
				(select driver_id , tipe_rental, count(0) as total_24 from trx_spj
				where status = 'Paid'
				and tipe_rental = '24 Jam'
				and to_char(created,'MM-YYYY') = '".$end."' and pool_id=".$pool_id."
				group by driver_id , tipe_rental) c on (a.id = c.driver_id)
			left join 
				(select z.id, min(y.created) as first_spj from master_driver z
				left join trx_spj y on (z.id = y.driver_id)
				group by z.id ) d on (a.id = d.id)
			order by 1 asc, 2 asc, 3 asc;")->result_array();
		return $res;
	}
	
	function hk($date, $dateakhir, $pool_id){
		$start = date('Y-m-d', strtotime($date));
		$end = date('Y-m-d', strtotime($dateakhir));
		
		$res = $this->db->query("select b.no_pintu, b.no_polisi, b.tipe, count(*) as hk from trx_spj a 
			left join master_car b on(a.car_id = b.id)
			where date(a.created)>='".$start."' and date(created)<='".$end."' and a.pool_id=".$pool_id." 
			group by b.no_pintu, b.no_polisi, b.tipe order by hk asc;")->result_array();
		return $res;
	}
}
?>