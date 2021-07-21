<?php
class akunting_model extends CI_Model {
	function data_new($date, $dateakhir, $id_workshop, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		$res = $this->db->query("select invoice_work_order.*, work_order.id as wo_id, wo_number, jenis_pembayaran, 
			SUM(invoice_work_order.total_billing) as grand_total
			from invoice_work_order 
			join work_order on id_wo = work_order.id 
			left join master_tipe_pembayaran on master_tipe_pembayaran.id = tipe_pembayaran 
 			where id_workshop = ".$id_workshop." and invoice_work_order.created_dt >= '".$start."' and invoice_work_order.created_dt <= '".$end."'
 			and lunas in( ".$id_lunas.") group by invoice_work_order.id, work_order.id, wo_id, wo_number, jenis_pembayaran;")->result_array();
		return $res;
	}
	
	function grand_total($date, $dateakhir, $id_workshop, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		$res = $this->db->query("select sum(a.total_billing) as grand_total from invoice_work_order a 
		join work_order b on (b.id=a.id_wo)
		where b.id_workshop = ".$id_workshop." and a.created_dt >= '".$start."' and a.created_dt <= '".$end."' and lunas in( ".$id_lunas.") ")->row_array();
		return $res;
	}
	
	function detail_pembayaran($date, $dateakhir, $id_workshop, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		$res = $this->db->query("select invoice_work_order.*, work_order.id as wo_id, wo_number, jenis_pembayaran,
			ms.internal_code, item_name,
			detail_faktur_pengambilan_inventory.qty, detail_faktur_pengambilan_inventory.harga_satuan, 
			detail_faktur_pengambilan_inventory.qty*detail_faktur_pengambilan_inventory.harga_satuan as total_harga_sebelum_ppn,
			((detail_faktur_pengambilan_inventory.qty*detail_faktur_pengambilan_inventory.harga_satuan)*0.1) as total_ppn,
			(detail_faktur_pengambilan_inventory.qty*detail_faktur_pengambilan_inventory.harga_satuan)+
			(((detail_faktur_pengambilan_inventory.qty*detail_faktur_pengambilan_inventory.harga_satuan)*0.1)) as total_setelah_ppn
			from invoice_work_order 
			join work_order on id_wo = work_order.id 
			left join master_tipe_pembayaran on master_tipe_pembayaran.id = tipe_pembayaran
			join faktur_pengambilan_inventory on (faktur_pengambilan_inventory.id_wo=invoice_work_order.id_wo) and faktur_pengambilan_inventory.active=1
			join detail_faktur_pengambilan_inventory on (detail_faktur_pengambilan_inventory.id_faktur=faktur_pengambilan_inventory.id)
			join inventory_workshop iw on (iw.id=detail_faktur_pengambilan_inventory.id_inventory)
			join master_sparepart ms on (ms.id=iw.id_sparepart)
			where work_order.id_workshop = ".$id_workshop." and invoice_work_order.created_dt >= '".$start."' and invoice_work_order.created_dt <= '".$end."'
			and lunas in(".$id_lunas.") order by invoice_number asc;")->result_array();
		
		return $res;
	}
	
	function total_part($date, $dateakhir, $id_workshop, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		$res = $this->db->query("select sum(d.harga_satuan) from invoice_work_order a 
				join work_order b on (b.id=a.id_wo)
				left join faktur_pengambilan_inventory c on (c.id_wo=a.id_wo)
				left join detail_faktur_pengambilan_inventory d on (d.id_faktur=c.id)
				where b.id_workshop = ".$id_workshop." and a.created_dt >= '".$start."' and a.created_dt <= '".$end."' and lunas in(".$id_lunas.");")->result_array();
		return $res;
	}
	
	function total_service($date, $dateakhir, $id_workshop, $id_lunas){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		$res = $this->db->query("select sum(c.total_price) from invoice_work_order a 
				join work_order b on (b.id=a.id_wo)
				join service_detail c on (b.id=c.id_wo)
				where b.id_workshop = ".$id_workshop." and a.created_dt >= '".$start."' and a.created_dt <= '".$end."' and lunas in(".$id_lunas.");")->result_array();
		return $res;
	}

// ===================================================================================================================================================================	
// ======================================================= LAPORAN STOCK ===========================================================================================
	
	function laporan_stock($date, $id_workshop){
			$start = date('Ym', strtotime($date));
			$res = $this->db->query("select b.car_type, b.jenis, 
			sum(a.qty_lalu) as qty_lalu, sum(a.cost_lalu) as cost_lalu, sum(a.total_lalu) as total_lalu, sum(a.qty_in) as qty_in, sum(a.total_in) as total_in,
			sum(a.qty_out) as qty_out, sum(a.total_out) as total_out, sum(a.qty_akhir) as qty_akhir,sum(a.total_akhir) as total_akhir, sum(a.cost_akum) as cost_akum
			from closing_inventory_workshop a 
			left join master_sparepart b on(a.id_sparepart=b.id)
			where id_closing like('%".$start."%') and id_workshop='".$id_workshop."'
			group by b.car_type, b.jenis order by b.car_type asc;")->result_array();
		return $res;
	}
	
	function total_qty($date, $id_workshop){
		$start = date('Ym', strtotime($date));
		$res = $this->db->query("select car_type,sum(a.qty_lalu) as qty_lalu,sum(a.cost_lalu) as cost_lalu, sum(a.total_lalu) as total_lalu, 
			sum(a.qty_in) as qty_in,sum(a.total_in) as total_in, sum(a.qty_out) as qty_out,sum(a.total_out) as total_out, 
			sum(a.qty_akhir) as qty_akhir, sum(a.total_akhir) as total_akhir, sum(a.cost_akum) as cost_akum
			from closing_inventory_workshop a
			join master_sparepart b on (b.id=a.id_sparepart)
			where id_workshop=".$id_workshop." and id_closing like('%".$start."%')
			group by car_type;")->result_array();
		return $res;
	}
	
	function grand_total_qty($date, $id_workshop){
		$start = date('Ym', strtotime($date));
		$res = $this->db->query("select sum(a.qty_lalu) as qty_lalu,sum(a.cost_lalu) as cost_lalu, sum(a.total_lalu) as total_lalu, 
			sum(a.qty_in) as qty_in,sum(a.total_in) as total_in, sum(a.qty_out) as qty_out,sum(a.total_out) as total_out, 
			sum(a.qty_akhir) as qty_akhir, sum(a.total_akhir) as total_akhir, sum(a.cost_akum) as cost_akum
			from closing_inventory_workshop a
			join master_sparepart b on (b.id=a.id_sparepart)
			where id_workshop=".$id_workshop." and id_closing like('%".$start."%');")->row_array();
		return $res;
	}

// ===================================================================================================================================================================	
// ======================================================= LAPORAN BULANAN ===========================================================================================

	function laporan_bulanan($date1, $date2, $id_workshop){
		$now=date('Y-1-1');
		if($date1 == '' || $date2 == ''){
			$res = $this->db->query("select wo.created_dt, wo.wo_number, mwo.tipe, mc.nama, mc.no_pintu, mcm.brand, mcm.model, mc.no_rangka, pt.ptshortname,
				sum(s.total_price) as amount_lts, 
				sum(df.qty*harga_satuan) as amount_sp
				from invoice_work_order inv
				join work_order wo on (inv.id_wo=wo.id)
				join master_work_order_tipe mwo on (mwo.id=wo.wo_tipe)
				join master_car mc on (mc.id=wo.id_car)
				join master_pt pt on (pt.ptid=mc.owner_pt_id)
				join master_car_model mcm on (mcm.id=mc.id_model)
				join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
				join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
				left join service_detail s on (s.id_wo=wo.id)
				where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."' and inv.created_dt='".$now."'
				group by wo.created_dt, wo_number, mwo.tipe, mc.nama, mc.no_pintu, mcm.brand, mcm.model, mc.no_rangka, pt.ptshortname;")->result_array();
		}else{
			$res = $this->db->query("select wo.created_dt, wo.wo_number, mwo.tipe, mc.nama, mc.no_pintu, mcm.brand, mcm.model, mc.no_rangka, pt.ptshortname,
				sum(s.total_price) as amount_lts, 
				sum(df.qty*harga_satuan) as amount_sp, invoice_number
				from invoice_work_order inv
				join work_order wo on (inv.id_wo=wo.id)
				join master_work_order_tipe mwo on (mwo.id=wo.wo_tipe)
				join master_car mc on (mc.id=wo.id_car)
				join master_pt pt on (pt.ptid=mc.owner_pt_id)
				join master_car_model mcm on (mcm.id=mc.id_model)
				join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
				join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
				left join service_detail s on (s.id_wo=wo.id)
				where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."'
				and inv.created_dt>='".$date1."' and inv.created_dt <='".$date2."' and f.active=1
				group by wo.created_dt, wo_number, mwo.tipe, mc.nama, mc.no_pintu, mcm.brand, mcm.model, mc.no_rangka, pt.ptshortname, invoice_number;")->result_array();
		}
		return $res;
	}
	
	function sum_laporan_bulanan1($date1, $date2, $id_workshop){
		$now=date('Y-1-1');
		if($date1 == '' || $date2 == ''){
			$res = $this->db->query("select sum(s.total_price) as total_lts,
					sum(df.qty*harga_satuan) as total_sp
					from invoice_work_order inv
					join work_order wo on (inv.id_wo=wo.id)
					join master_work_order_tipe mwo on (mwo.id=wo.type_of_payment)
					join master_car mc on (mc.id=wo.id_car)
					join master_pt pt on (pt.ptid=mc.owner_pt_id)
					join master_car_model mcm on (mcm.id=mc.id_model)
					join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
					join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
					left join service_detail s on (s.id_wo=wo.id)
					where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."' 
					and inv.created_dt >= '".$now."';")->result_array();
		}else{
			$res = $this->db->query("select sum(s.total_price) as total_lts, 
					sum(df.qty*harga_satuan) as total_sp
					from invoice_work_order inv
					join work_order wo on (inv.id_wo=wo.id)
					join master_work_order_tipe mwo on (mwo.id=wo.type_of_payment)
					join master_car mc on (mc.id=wo.id_car)
					join master_pt pt on (pt.ptid=mc.owner_pt_id)
					join master_car_model mcm on (mcm.id=mc.id_model)
					join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
					join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
					left join service_detail s on (s.id_wo=wo.id)
					where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."' 
					and inv.created_dt>='".$date1."' and inv.created_dt <='".$date2."';")->result_array();
		}
		
		return $res;
	}
	
	function sum_wo_category($date1, $date2, $id_workshop){
		$now=date('Y-1-1');
		if($date1 == '' || $date2 == ''){
			$res = $this->db->query("select count(distinct(wo.wo_number)), wo.wo_tipe, mwo.tipe,
				sum(s.total_price) as amount_lts, 
				sum(df.qty*harga_satuan) as amount_sp
				from invoice_work_order inv
				join work_order wo on (inv.id_wo=wo.id)
				join master_work_order_tipe mwo on (mwo.id=wo.wo_tipe)
				join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
				join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
				left join service_detail s on (s.id_wo=wo.id)
				where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."' 
				and inv.created_dt >= '".$now."'
				group by wo_tipe, mwo.tipe")->result_array();
		}else{
			$res = $this->db->query("select count(distinct(wo.wo_number)), wo.wo_tipe, mwo.tipe,
				sum(s.total_price) as amount_lts, 
				sum(df.qty*harga_satuan) as amount_sp
				from invoice_work_order inv
				join work_order wo on (inv.id_wo=wo.id)
				join master_work_order_tipe mwo on (mwo.id=wo.wo_tipe)
				join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
				join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
				left join service_detail s on (s.id_wo=wo.id)
				where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."' 
				and inv.created_dt>='".$date1."' and inv.created_dt <='".$date2."'
				group by wo_tipe, mwo.tipe")->result_array();
		}
		return $res;
	}
	
	function sum_qty_by_type($date1, $date2, $id_workshop){
		$now=date('Y-1-1');
		if($date1 == '' || $date2 == ''){
			$res = $this->db->query("select mcm.brand, mcm.model, count(distinct(wo.wo_number))
				from invoice_work_order inv
				join work_order wo on (inv.id_wo=wo.id)
				join master_car mc on (mc.id=wo.id_car)
				join master_car_model mcm on (mcm.id=mc.id_model)
				join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
				join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
				where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."' 
				and inv.created_dt>='".$now."'
				group by mcm.brand, mcm.model;")->result_array();
		}else{
			$res = $this->db->query("select mcm.brand, mcm.model, count(distinct(wo.wo_number))
				from invoice_work_order inv
				join work_order wo on (inv.id_wo=wo.id)
				join master_car mc on (mc.id=wo.id_car)
				join master_car_model mcm on (mcm.id=mc.id_model)
				join faktur_pengambilan_inventory f on (f.id_wo=wo.id)
				join detail_faktur_pengambilan_inventory df on (f.id=df.id_faktur)
				where wo.wo_number!='null' and f.active=1 and wo.id_workshop='".$id_workshop."' 
				and inv.created_dt>='".$date1."' and inv.created_dt <='".$date2."'
				group by mcm.brand, mcm.model;")->result_array();
		}
		return $res;
	}
	
// ==================================================================================================================================================================	
// ================================================================= DETAIL LAPORAN STOK ============================================================================
	
	function laporan_stock_detail($date, $id_workshop){
		$start = date('Ym', strtotime($date));
		$res = $this->db->query("select * from closing_inventory_workshop a 
		join master_sparepart b on(a.id_sparepart=b.id)
		where id_closing like('%".$start."%') and id_workshop='".$id_workshop."';")->result_array();
		return $res;
	}

	function total_qty_detail($date, $id_workshop){
		$start = date('Ym', strtotime($date));
		$res = $this->db->query("select sum(a.qty_lalu) as qty_lalu, sum(a.cost_lalu) as cost_lalu, sum(a.total_lalu) as total_lalu, 
			sum(a.qty_in) as qty_in, sum(a.total_in) as total_in,
			sum(a.qty_out) as qty_out, sum(a.total_out) as total_out,
			sum(a.qty_akhir) as qty_akhir, sum(a.total_akhir) as total_akhir, sum(a.cost_akum) as cost_akum
			from closing_inventory_workshop a
			where id_workshop=".$id_workshop." and id_closing like('%".$start."%');")->row_array();
		return $res;
	}
	
// ===================================================================================================================================================================
// ======================================================== PEMOTONGAN TABUNGAN SIMTAX ===============================================================================

	function pemotongan_tabungan_simtax($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		if($id_workshop == 16){
			$CI = &get_instance();
			$this->db_simtax_pondok_bambu = $CI->load->database('simtax_pondok_bambu', TRUE);
			$res = $this->db_simtax_pondok_bambu->query("select * from trx_tab 
				where tab_code like('%WO%') and posted_date >='".$start."' and posted_date <='".$end."' ")->result_array();
		} else if($id_workshop == 99){
			$CI = &get_instance();
			$this->db_simtax_pondok_bambu = $CI->load->database('simtax_pondok_bambu', TRUE);
			$res = $this->db_simtax_pondok_bambu->query("select * from trx_tab 
				where tab_code like('%WO%') and posted_date >='".$start."' and posted_date <='".$end."' ")->result_array();
		}
		//print_r($date);die();
        return $res;
	}

// ===================================================================================================================================================================
// ======================================================== REKAPITULASI PENGELUARAN BARANG ==========================================================================
// ===================================================================================================================================================================

	function rekapitulasi_pengeluaran_barang($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		$date_closing = date('Y', strtotime($date));
		//$print_r($date_closing);die();
		
		$CI = &get_instance();
		$res = $this->db->query("select a.nomor_referensi, a.id_wo, c.id_workshop, c.wo_number, d.no_pintu, 
			f.internal_code, f.item_name, a.updated_dt, b.id_inventory, b.qty, b.harga_satuan as harga_jual, g.cost_lalu, (g.cost_lalu*b.qty) as total_out
			from faktur_pengambilan_inventory a 
			join detail_faktur_pengambilan_inventory b on (a.id=b.id_faktur)
			join work_order c on (c.id=a.id_wo)
			join master_car d on (d.id=c.id_car)
			join inventory_workshop e on (e.id=b.id_inventory)
			join master_sparepart f on (f.id=e.id_sparepart)
			left join closing_inventory_workshop g on(e.id=g.id_inventory)
			where a.active=1 and a.updated_dt>='".$start."' and a.updated_dt<='".$end."' and c.id_workshop=".$id_workshop."
			and g.id_closing like('%".$date_closing."%') and g.id_workshop=".$id_workshop."; ")->result_array();
	
		//print_r($date);die();
        return $res;
	}
	

}
?>