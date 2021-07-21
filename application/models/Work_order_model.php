<?php

class work_order_model extends CI_Model {
	function data_wo_new($date,$dateakhir, $id_workshop, $is_admin, $id_privilege){
		$start = date('Y-m-d 00:00:00', strtotime($date));
		$end = date('Y-m-d 23:59:59', strtotime($dateakhir));
		if($is_admin){
			$res = $this->db->query("select work_order.id, tipe, wo_number, 
					master_workshop.name as workshop, master_car.nama, master_car.no_polisi, 
					warna, brand || '-' || model as model, no_pintu, start_dt, 
					end_dt, status, cac_user.username,cac_user.full_name, master_technician.nama as teknisi, type_of_payment, jenis_pembayaran,suggestion
				from work_order
				join master_workshop on master_workshop.id = id_workshop and wo_number is not null and id_workshop = ".$id_workshop."
					and (start_dt >= '".$start."' and start_dt <= '".$end."')
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id		
				order by start_dt;")->result_array();
		} else {
			$res = $this->db->query("select work_order.id, tipe, wo_number, 
					master_workshop.name as workshop, master_car.nama, master_car.no_polisi, 
					warna, brand || '-' || model as model, no_pintu, start_dt, 
					end_dt, status, cac_user.username,cac_user.full_name, master_technician.nama as teknisi, type_of_payment, jenis_pembayaran, suggestion
				from work_order
				join master_workshop on master_workshop.id = id_workshop and wo_number is not null and id_workshop = ".$id_workshop."
					and (start_dt >= '".$start."' and start_dt <= '".$end."')
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id		
				".(($id_privilege == Admin::FOREMAN|| $id_privilege == Admin::TOWING_LEADER) ? " where status in ('Aktif') " :
					($id_privilege == Admin::ADMIN_BILLING ? " where status in ('Selesai') ":""))."
				order by start_dt;")->result_array();
		}
		return $res;
	}
	
	function data_wo($date, $id_workshop, $is_admin, $id_privilege){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		if($is_admin){
			$res = $this->db->query("select work_order.id, tipe, wo_number, 
					master_workshop.name as workshop, master_car.nama, master_car.no_polisi, 
					warna, brand || '-' || model as model, no_pintu, start_dt, 
					end_dt, status, cac_user.username,cac_user.full_name, master_technician.nama as teknisi, type_of_payment, jenis_pembayaran,suggestion
				from work_order
				join master_workshop on master_workshop.id = id_workshop and wo_number is not null and id_workshop = ".$id_workshop."
					and (start_dt >= '".$start."')
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id		
				order by start_dt;")->result_array();
		} else {
			$res = $this->db->query("select work_order.id, tipe, wo_number, 
					master_workshop.name as workshop, master_car.nama, master_car.no_polisi, 
					warna, brand || '-' || model as model, no_pintu, start_dt, 
					end_dt, status, cac_user.username,cac_user.full_name, master_technician.nama as teknisi, type_of_payment, jenis_pembayaran, suggestion
				from work_order
				join master_workshop on master_workshop.id = id_workshop and wo_number is not null and id_workshop = ".$id_workshop."
					and (start_dt >= '".$start."')
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id		
				".(($id_privilege == Admin::FOREMAN|| $id_privilege == Admin::TOWING_LEADER) ? " where status in ('Aktif') " :
					($id_privilege == Admin::ADMIN_BILLING ? " where status in ('Selesai') ":""))."
				order by start_dt;")->result_array();
		}
		return $res;
	}
	
	function detail_wo($id, $id_workshop, $is_admin, $id_privilege){
		if($is_admin){
			$res = $this->db->query("
				select work_order.wo_number, master_jenis_customer.nama as jenis_customer, master_workshop.name as workshop, 
					no_rangka, no_mesin, no_polisi, no_pintu, master_car.nama as customer, master_car.alamat as alamat_cust, 
					master_car.no_telepon1 as telp_cust1, master_car.no_telepon2 as telp_cust2, master_pool.nama as pool,
					master_car_warna.warna, master_car_model.model, master_car_model.brand,
					master_technician.nama as teknisi, master_work_order_tipe.tipe, master_main_problem.problem,
					request, suggestion, start_dt, end_dt, odo_km, next_odo_km, work_order.status, cac_user.username as sa, master_car.id_model,
					cancel_reason, master_car.id_jenis_customer, work_order.id_car, id_jenis_car, type_of_payment, jenis_pembayaran, cac_user.full_name,
					work_order.id, master_workshop.alamat
				from work_order
				join master_workshop on master_workshop.id = id_workshop and work_order.id = ".$id."
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_jenis_customer on master_car.id_jenis_customer = master_jenis_customer.id
				join master_main_problem on master_main_problem.id = id_main_problem
				left join master_pool on master_pool.id = master_car.id_pool
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id				
				limit 1;
			")->row_array();
		} else {
			$res = $this->db->query("
				select work_order.wo_number, master_jenis_customer.nama as jenis_customer, master_workshop.name as workshop, 
					no_rangka, no_mesin, no_polisi, no_pintu, master_car.nama as customer, master_car.alamat as alamat_cust, 
					master_car.no_telepon1 as telp_cust1, master_car.no_telepon2 as telp_cust2, master_pool.nama as pool,
					master_car_warna.warna, master_car_model.model, master_car_model.brand,
					master_technician.nama as teknisi, master_work_order_tipe.tipe, master_main_problem.problem,
					request, suggestion, start_dt, end_dt, odo_km, next_odo_km, work_order.status, cac_user.username as sa, master_car.id_model,
					cancel_reason, master_car.id_jenis_customer, work_order.id_car, id_jenis_car, type_of_payment, jenis_pembayaran, cac_user.full_name,
					work_order.id, master_workshop.alamat
				from work_order
				join master_workshop on master_workshop.id = id_workshop and work_order.id = ".$id."
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_jenis_customer on master_car.id_jenis_customer = master_jenis_customer.id
				join master_main_problem on master_main_problem.id = id_main_problem
				left join master_pool on master_pool.id = master_car.id_pool
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id		
				".(($id_privilege == Admin::FOREMAN|| $id_privilege == Admin::TOWING_LEADER) ? " where status in ('Aktif') " :
					($id_privilege == Admin::ADMIN_BILLING ? " where status in ('Selesai', 'Closed') ":""))."
				limit 1;
			")->row_array();
		}
		return $res;
	}
	
	function get_wo_aktif($id_workshop = ''){
		$res = $this->db->query("select work_order.id, wo_number, model, brand, jenis, start_dt, work_order.status from work_order 
			join master_car on master_car.id = id_car and id_workshop = ".$id_workshop." and work_order.status in ('Aktif')
			join master_car_model on master_car_model.id = id_model
			join master_jenis_car on master_jenis_car.id = id_jenis_car;")->result_array();
		return $res;
	}

	function get_kode_workshop(){
		$data = $this->db->select('code')->where('id', $this->user['id_workshop'])->get('master_workshop')->row_array();
		
		$kode = (Count($data) > 0 ? $data['code'] : '');
		
		return $kode;
	}
	
	function save($post){
		foreach (Array('type_of_payment','start_dt', 'end_dt', 'id_technician', 'id_car', 'id_main_problem', 
			'request', 'suggestion', 'wo_tipe', 'odo_km', 'next_odo_km', 'id_workshop', 'type_of_payment') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		
		$save['input_by'] = $this->user['id'];
		$save['created_dt'] = date('Y-m-d H:i:s');
		
		$res = $this->db->insert('work_order', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}
	
	function activate($id){
		$save['status'] = 'Aktif';
		$save['update_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');	
		
		//CHECK SEQUENCE
		$kode = $this->get_kode_workshop();
		$sequence = 'work_order_'.strtolower($kode).'_wo_number_seq';
		$res_exist = $this->db->query("SELECT relname FROM pg_class where relname = '".$sequence."'")->row_array();
		if(Count($res_exist) < 1){
			//CREATE NEW SEQUENCE
			$this->db->query("create sequence ".$sequence." start 1;");
		}
		
		$save['wo_number'] = $this->db->query("select ('".$kode."WO' || 
			lpad((nextval('".$sequence."'))::text, 7, '0')) as id_wo")->row_array()['id_wo'];
			
		$this->db->where('id', $id)->update('work_order', $save);
	}
	
	function pending_cancel($post){
		$save['status'] = 'Pending Cancel';
		$save['update_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['cancel_reason'] = "(".$this->user['username'].")\n".$post['cancel_reason'];				
		$this->db->where('id', $post['id'])->update('work_order', $save);
	}
	
	function approved_cancel($id){
		$save['status'] = 'Cancel';
		$save['cancel_by'] = $this->user['id'];
		$save['cancel_dt'] = date('Y-m-d H:i:s');			
		$this->db->where('id', $id)->update('work_order', $save);
	}
	
	function finish_wo($id){
		$save['status'] = 'Selesai';
		$save['update_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');		
		$this->db->where('id', $id)->update('work_order', $save);
	}
	
	function close_wo($id){
		$save['status'] = 'Closed';
		$save['closed_by'] = $this->user['id'];		
		$save['closed_dt'] = date('Y-m-d H:i:s');		
		$this->db->where('id', $id)->update('work_order', $save);
		
		return true;
	}

	function getWoSelesai($id_car){
		$res = $this->db->query("select * from workshop.work_order where status='Selesai' and id_car=".$id_car.";")->row_array();
		return $res;
	}

	function getInvoiceLunas($id_car){
		$res = $this->db->query("select * from workshop.invoice_work_order a 
				left join workshop.work_order b on (a.id_wo=b.id)
				where lunas=0 and id_car=".$id_car.";")->row_array();
		return $res;
	}

	function data_wo_outstanding($id_workshop, $is_admin, $id_privilege){
		if($is_admin){
			$res = $this->db->query("select work_order.id, tipe, wo_number, 
					master_workshop.name as workshop, master_car.nama, master_car.no_polisi, 
					warna, brand || '-' || model as model, no_pintu, start_dt, 
					end_dt, status, cac_user.username,cac_user.full_name, master_technician.nama as teknisi, type_of_payment, jenis_pembayaran
				from work_order
				join master_workshop on master_workshop.id = id_workshop and wo_number is not null and work_order.id_workshop=".$id_workshop." 
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id
				where work_order.status='Selesai' or work_order.status='Aktif'		
				order by start_dt;")->result_array();
		} else {
			$res = $this->db->query("select work_order.id, tipe, wo_number, 
					master_workshop.name as workshop, master_car.nama, master_car.no_polisi, 
					warna, brand || '-' || model as model, no_pintu, start_dt, 
					end_dt, status, cac_user.username,cac_user.full_name, master_technician.nama as teknisi, type_of_payment, jenis_pembayaran
				from work_order
				join master_workshop on master_workshop.id = id_workshop and wo_number is not null and work_order.id_workshop=".$id_workshop."
				join master_car on master_car.id = id_car
				join cac_user on input_by = cac_user.id
				join master_car_warna on master_car_warna.id = master_car.id_warna
				join master_car_model on master_car_model.id = master_car.id_model
				join master_technician on id_technician = master_technician.id
				join master_work_order_tipe on master_work_order_tipe.id = wo_tipe
				join master_tipe_pembayaran on type_of_payment = master_tipe_pembayaran.id		
				".(($id_privilege == Admin::FOREMAN|| $id_privilege == Admin::TOWING_LEADER || $id_privilege == Admin::SERVICE_ADVISOR) ? " where status in ('Aktif') or status in ('Selesai') " :
					($id_privilege == Admin::ADMIN_BILLING ? " where status in ('Selesai') ":""))."
				 order by start_dt;")->result_array();
		}
		return $res;
	}

	function get_history_wo($id){
		$res = $this->db->query("select wo.id, wo.request, wo.wo_number, wo.wo_tipe, mc.nama, mcm.model, mcw.warna, mc.no_polisi, 
			no_pintu, start_dt, end_dt, full_name, wo.status, CASE iwo.lunas WHEN 1 THEN 'Lunas'
			WHEN 2 THEN 'Belum lunas'
              ELSE 'Belum Lunas' end as invoice
			from work_order wo
			left join invoice_work_order iwo on (wo.id =iwo.id_wo)
			left join master_car mc on (mc.id=wo.id_car)
			left join master_car_model mcm on (mcm.id=mc.id_model)
			left join master_car_warna mcw on (mcw.id=mc.id_warna)
			left join cac_user cu on (cu.id=wo.input_by)
			where id_car=".$id." and wo.status!='Pending' ")->result_array();
		return $res;
	}
}

