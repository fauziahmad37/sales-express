<?php

class inventory_workshop_model extends CI_Model {
	function data($id_workshop){
		$res = $this->db->query("select inventory_workshop.id, id_sparepart, id_material,loc_part,soq.potential, qty, soq.safety_stock, master_sparepart.harga_beli,
				master_sparepart.item_name as sparepart, kode_part, master_sparepart.sale_price as harga_sparepart, master_material.item_name as material, master_material.kode_material, 	master_material.sale_price as harga_material, master_sparepart.internal_code, master_sparepart.car_type, code, ((potential*safety_stock)*unit_aktif) as min_stock,(potential*(order_cycle+lead_time+safety_stock))*unit_aktif as max_order, 
				((potential*(order_cycle+lead_time+safety_stock))*unit_aktif)-qty as soq  
				from inventory_workshop 
				left join master_sparepart on inventory_workshop.id_sparepart = master_sparepart.id
				left join master_material on inventory_workshop.id_material = master_material.id
				left join master_workshop mw on (inventory_workshop.id_workshop=mw.id) 
				left join soq ON soq.id_inventory=inventory_workshop.id 
				where inventory_workshop.id_workshop = ".$id_workshop." order by soq desc; 
			")->result_array();
		
		return $res;
	}

	function get_all_data_sparepart($id_workshop){
		$res = $this->db->query("select inventory_workshop.id, kode_part, item_name, loc_part, master_sparepart.id as id_sparepart, internal_code from master_sparepart 
			left join inventory_workshop on inventory_workshop.id_sparepart = master_sparepart.id and inventory_workshop.id_workshop = ".$id_workshop.";")->result_array();
		return $res;
	}
	
	function get_all_data_material($id_workshop){
		$res = $this->db->query("select inventory_workshop.id, kode_material, item_name, loc_part, master_material.id as id_material from master_material 
			left join inventory_workshop on inventory_workshop.id_material = master_material.id and inventory_workshop.id_workshop = ".$id_workshop.";")->result_array();
		return $res;
	}
	
	function get_available_data_sparepart($id_workshop){
		$res = $this->db->query("select inventory_workshop.id, kode_part, internal_code, item_name, loc_part, qty,
			master_sparepart.id as id_sparepart, master_sparepart.sale_price as harga_sparepart from inventory_workshop 
			join master_sparepart on inventory_workshop.id_sparepart = master_sparepart.id and inventory_workshop.id_workshop = ".$id_workshop."
			and master_sparepart.active = 1;")->result_array();
		return $res;
	}
	
	function get_available_data_material($id_workshop){
		$res = $this->db->query("select inventory_workshop.id, kode_material, item_name, loc_part, qty,
			master_material.id as id_material, master_material.sale_price as harga_material from inventory_workshop 
			join master_material on inventory_workshop.id_material = master_material.id and inventory_workshop.id_workshop = ".$id_workshop."
			and master_material.active = 1;")->result_array();
		return $res;
	}
	
	function save($post){
		foreach (Array('id_workshop', 'id_sparepart', 'id_material', 'loc_part') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		$save['qty'] = 0;
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['input_by'] = $this->user['id'];
		
		$test = $this->db->query("select loc_part from inventory_workshop where id_workshop = ".$save['id_workshop']." and loc_part = '".$save['loc_part']."';")->row_array();
		if($test > 0){
			set_message(Admin::ERROR_LOG_PART_SUDAH_DIGUNAKAN, 'error');
			return FALSE;
		}				
		$res = $this->db->insert('inventory_workshop', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}
	
	function update($post){
		$id_inventory = $post['id_inventory'];
		foreach (Array('id_sparepart', 'id_material', 'loc_part') AS $key => $val) {
			if (isset($post[$val]) && $post[$val] !== '') $save[$val] = $post[$val];
		}
		
		if(!isset($save['id_sparepart']) && !isset($save['id_material'])) return false;
		if(!isset($save['id_sparepart']) && isset($save['id_material'])) $save['id_sparepart'] = null;
		if(isset($save['id_sparepart']) && !isset($save['id_material'])) $save['id_material'] = null;		
		
		$save['updated_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');		
		$res = $this->db->where('id', $id_inventory)->update('inventory_workshop', $save);
		
		if (!$res) return FALSE;
		
		return $id_inventory;
	}
	
	function save_or_update($post){
		$res = false;
		if(!isset($post['id_inventory']) || $post['id_inventory'] === ''){
			$res = $this->save($post);
		} else {
			$res = $this->update($post);
		}
		return $res;
	}
	
	function update_inventory_stock($data){
		$id_user = $this->user['id'];
		$dt = date('Y-m-d H:i:s');		
		foreach((Array) $data AS $key => $val){
			//jika var_qty < 0 update qty_out inventory_workshop
			if($val['var_qty'] < 0){
				$hasil = $this->db->query("update inventory_workshop set qty = greatest(qty + cast(".floatval($val['var_qty'])." as float), 0),
						qty_out = greatest(qty_out + (-1 * (cast(".floatval($val['var_qty'])." as float)))), total_out = total_out+(".$val['harga_beli']."),
						updated_by = ".$id_user.", updated_dt = '".$dt."'
						where id = ".$val['id'].";");
			}else{
			//jika var_qty bukan < 0 update qty_in inventory_workshop
				$hasil = $this->db->query("update inventory_workshop set qty = greatest(qty + cast(".floatval($val['var_qty'])." as float), 0),
				qty_in = greatest(qty_in + (cast(".floatval($val['var_qty'])." as float))), total_in = total_in+(".$val['harga_beli']."),
				updated_by = ".$id_user.", updated_dt = '".$dt."'
				where id = ".$val['id'].";");
			}
			
			$save = array();
			$save['nomor_referensi'] = $val['nomor_referensi'];
			$save['base_qty'] = $val['base_qty'];
			$save['var_qty'] = $val['var_qty']; //MAY FAIL IF GREATEST IS 0
			$save['final_qty'] = $val['base_qty'] + $val['var_qty'];
			$save['id_inventory'] = $val['id'];
			$save['harga_satuan_jual_beli'] = $val['harga_satuan_jual_beli'];
			$save['ppn_jual_beli'] = $val['ppn_jual_beli'];
			$save['diskon_jual_beli'] = $val['diskon_jual_beli'];
			$save['harga_jual'] = $val['harga_jual'];
			$save['harga_beli'] = $val['harga_beli'];
			$save['input_by'] = $id_user;
			$save['created_dt'] = $dt;							 						
			$this->db->insert('log_inventory_stock', $save);
		}
		return true;
	}

	function data_raw_eproc(){
        $CI = &get_instance();
        $this->dbeproc = $CI->load->database('eproc', TRUE);
        $res = $this->dbeproc->where ('created_date >', '2017-01-01')->where ('proses_level',99)->get('receive_report_header')->result_array();
        return $res;
    }

    function data_raw_detail_rr_eproc($rr_id){
        $CI = &get_instance();
        $this->dbeproc = $CI->load->database('eproc', TRUE);
           
		$res = $this->dbeproc->where ('rr_id', $rr_id)->get('receive_report_item')->result_array();
		return $res;
	}

	function detail_request($id){
		$res = $this->db->query("select iw.*, kode_part,internal_code, item_name, car_type, code, sale_price 
			from workshop.inventory_workshop iw 
			left join workshop.master_sparepart ms on ms.id = iw.id_sparepart
			left join workshop.master_workshop mw on (mw.id=iw.id_workshop)
			where iw.id=".$id." limit 1;")->row_array();
		return $res;
	}

	function get_kode_workshop(){
		$data = $this->db->select('code')->where('id', $this->user['id_workshop'])->get('master_workshop')->row_array();
		$kode = (Count($data) > 0 ? $data['code'] : '');
		return $kode;
	}

	function save_request($post){
		
		$save['id_sparepart'] = $post['id'];

		$save['qty_request'] = $post['qty_request'];
		$save['pool_request'] = $post['pool_request'];
		$save['pool_approve'] = $post['pool_approve'];
		$save['status'] = 'REQUEST';
		$save['request_by'] = $post['created_by'];
		$save['note_request'] = $post['notes'];
		$save['request_dt'] = date('Y-m-d H:i:s');
		$res = $this->db->insert('transfer_between_warehouse', $save);
		return $this->db->insert_id();

	}

	function save_transfer($post){

		//UPDATE TRANSFER BETWEEN WORKSHOP
		$qty = $post['base_qty']-$post['qty_transfered'];
		$updatedDt = date('Y-m-d H:i:s');
		$updatedBy = $this->user['id'];
		$this->db->query("update inventory_workshop set qty=".$qty.", qty_out = greatest(qty_out + (cast(".floatval($post['qty_transfered'])." as float))),
			updated_by=".$updatedBy.", updated_dt='".$updatedDt."', total_out = total_out+(".$post['qty_transfered']." * ".$post['cost_lalu'].") 
			where id_workshop=".$post['pool_approved']." and id_sparepart=".$post['id_sparepart']." ;");
		
		$kode = $this->get_kode_workshop();
		$sequence = 'rr_number_'.strtolower($kode).'_id_seq';
		$res_exist = $this->db->query("SELECT relname FROM pg_class where relname = '".$sequence."'")->row_array();

		if(Count($res_exist) < 1){
			//CREATE NEW SEQUENCE
			$this->db->query("create sequence ".$sequence." start 1;");
		}

		//SAVE TRANSFER BETWEEN WORKSHOP
		$save['no_rr'] = $this->db->query("select ('".$kode."RR' || 
			lpad((nextval('".$sequence."'))::text, 10, '0')) as no_rr")->row_array()['no_rr'];
		$save['qty_transfered'] = $post['qty_transfered'];
		$save['status'] = 'APPROVE';
		$save['tranfered_by'] = $post['created_by'];
		$save['note_transfered'] = $post['note_transfered'];
		$save['transfered_dt'] = date('Y-m-d H:i:s');
		$save['cost'] = $post['cost_lalu'];
		$res = $this->db->where('id', $post['id'])->update('transfer_between_warehouse', $save);

		//SAVE LOG
		$saveLog['id_inventory'] = $post['id_inventory'];
		$saveLog['base_qty'] = $post['base_qty'];
		$saveLog['var_qty'] = -$post['qty_transfered'];
		//$saveLog['var_qty'] = 0;
		$saveLog['out_antar_gudang'] = $post['qty_transfered'];
		$saveLog['final_qty'] = $post['base_qty']-$post['qty_transfered'];
		$saveLog['nomor_referensi'] = $save['no_rr'];
		$saveLog['input_by'] = $this->user['id'];
		$saveLog['created_dt'] = date('Y-m-d H:i:s');
		$saveLog['harga_satuan_jual_beli'] = $post['cost_lalu'];
		$saveLog['harga_beli'] = $post['cost_lalu']*$post['qty_transfered'];
		$resLog = $this->db->insert('log_inventory_stock', $saveLog);

		return $post['id'];
	}

	function save_receive($post){
		//AMBIL ID INVENTORY PEREQUEST
		$resInv = $this->db->query("select * from inventory_workshop 
			where id_workshop=".$post['pool_request']." and id_sparepart=".$post['id_sparepart_master'].";")->row_array();
			
		//SAVE LOG
		$saveLog['id_inventory'] = $resInv['id'];
		$saveLog['base_qty'] = $resInv['qty'];
		//$saveLog['var_qty'] = 0;
		$saveLog['var_qty'] = $post['qty_received'];
		$saveLog['in_antar_gudang'] = $post['qty_received'];
		$saveLog['final_qty'] = $resInv['qty']+$post['qty_received'];
		$saveLog['nomor_referensi'] = $post['no_rr'];
		$saveLog['input_by'] = $this->user['id'];
		$saveLog['created_dt'] = date('Y-m-d H:i:s');
		$saveLog['harga_satuan_jual_beli'] = $post['cost'];
		$saveLog['harga_beli'] = $post['cost'] * $post['qty_received'];
		$resLog = $this->db->insert('log_inventory_stock', $saveLog);

		//UPDATE INVENTORY_WORKSHOP
		$qty = $resInv['qty']+$post['qty_received'];
		$this->db->query("update workshop.inventory_workshop set qty=".$qty.",
			qty_in = greatest(qty_in + (cast(".floatval($post['qty_received'])." as float))),
			total_in = total_in + (".$post['cost']." * ".$post['qty_received'].")
			where id=".$resInv['id'].";");

		//UPDATE TRANSFER BEETWEEN WORKSHOP
		$save['qty_received'] = $post['qty_received'];
		$save['status'] = 'RECEIVE';
		$save['received_by'] = $post['created_by'];
		$save['note_received'] = $post['note_received'];
		$save['received_dt'] = date('Y-m-d H:i:s');

		$res = $this->db->where('id', $post['id'])->update('transfer_between_warehouse', $save);
		return $post['id'];
	}

	function data_raw_transfer_between_warehouse($id_workshop){           
		$res = $this->db->query("select tbw.*,(mp.name)pool_request_name, (mp2.name)pool_approve_name, ms.internal_code, ms.item_name, ms.kode_part, ms.sale_price
			from transfer_between_warehouse tbw
			left join master_workshop mp on (tbw.pool_request=mp.id)
			left join master_workshop mp2 on (tbw.pool_approve = mp2.id)
			left join inventory_workshop iw on (iw.id=tbw.id_sparepart)
			left join master_sparepart ms on (ms.id=iw.id_sparepart)
			where tbw.status='REQUEST' and pool_approve=".$id_workshop.";")->result_array();
		return $res;
	}

	function detail_transfer_between_warehouse($id){
		$tahun = date('Ym');
		// print_r($tahun);die;
		$res = $this->db->query("select tbw.id, tbw.id_sparepart, tbw.status, tbw.tranfered_by, tbw.received_by, request_by, qty_request, 
			qty_received, qty_transfered, note_request, note_received, note_transfered, no_rr, pool_approve, pool_request,
			ms.id as id_sparepart, ms.kode_part, ms.item_name, ms.internal_code, ms.car_type, ms.sale_price, iw.qty, 
			iw.id as id_inventory, mw1.name as pool_request_name, mw2.name as pool_approve_name, no_rr, cl.cost_lalu
			from workshop.transfer_between_warehouse tbw
			left join workshop.master_workshop mw1 on (mw1.id=tbw.pool_request)
			left join workshop.master_workshop mw2 on (mw2.id=tbw.pool_approve)
			left join inventory_workshop iw on (iw.id=tbw.id_sparepart)
			left join master_sparepart ms on (ms.id=iw.id_sparepart)
			join closing_inventory_workshop cl on (iw.id=cl.id_inventory and id_closing like('%%'))
			where tbw.id=".$id.";")->row_array();
		return $res;
	}

	function detail_receipt_between_warehouse($id){
	
		$res = $this->db->query("select tbw.*, ms.id as id_sparepart,ms.id as id_sparepart_master, ms.kode_part, ms.item_name, ms.internal_code, ms.car_type, ms.sale_price, iw.qty, iw.id as id_inventory  
			from workshop.transfer_between_warehouse tbw
			left join inventory_workshop iw on (iw.id=tbw.id_sparepart)
			left join master_sparepart ms on (ms.id=iw.id_sparepart)
			where tbw.id=".$id.";")->row_array();
		return $res;
	}

	function data_raw_request_between_warehouse($id_workshop){
		if($this->user['id_privilege'] == 1){
			$res = $this->db->query("select tbw.*, kode_part, internal_code, item_name, mp.nama, sale_price, 
				mw1.name as pool_request_name, mw2.name as pool_approve_name
				from workshop.transfer_between_warehouse tbw
				left join inventory_workshop iw on (iw.id=tbw.id_sparepart)
				left join workshop.master_sparepart ms on (ms.id=iw.id_sparepart)
				left join workshop.master_pool mp on (mp.id=tbw.pool_approve)
				left join workshop.master_workshop mw1 on (mw1.id=tbw.pool_request)
				left join workshop.master_workshop mw2 on (mw2.id=tbw.pool_approve);")->result_array();
		}else{
			$res = $this->db->query("select tbw.*, kode_part, internal_code, item_name, mp.nama, sale_price, 
				mw1.name as pool_request_name, mw2.name as pool_approve_name
				from workshop.transfer_between_warehouse tbw
				left join inventory_workshop iw on (iw.id=tbw.id_sparepart)
				left join workshop.master_sparepart ms on (ms.id=iw.id_sparepart)
				left join workshop.master_pool mp on (mp.id=tbw.pool_approve)
				left join workshop.master_workshop mw1 on (mw1.id=tbw.pool_request)
				left join workshop.master_workshop mw2 on (mw2.id=tbw.pool_approve)
				where pool_request = ".$id_workshop.";")->result_array();
		}
		return $res;
	}
        
        function data_raw_list_user_per_workshop($id){           
	//	$res = $this->db->where('pool_request', $id_workshop)->get('transfer_between_warehouse')->result_array();
		$res = $this->db->query("select cu.full_name name_workshop_head,cu2.full_name name_workshop_spv, cu3.full_name name_service_advisor,  
			 cu4.full_name name_foreman,cu5.full_name name_towing_leader, cu6.full_name name_admin_billing,
			 cu7.full_name name_part_admin
			 from workshop.transfer_between_warehouse tbw
			 left join workshop.cac_user cu on (tbw.pool_request = cu.id_workshop and cu.id_privilege = 2 and cu.active = 1)
			 left join workshop.cac_user cu2 on (tbw.pool_request = cu2.id_workshop and cu2.id_privilege = 3 and cu2.active = 1)
			 left join workshop.cac_user cu3 on (tbw.pool_request = cu3.id_workshop and cu3.id_privilege = 4 and cu3.active = 1)
			 left join workshop.cac_user cu4 on (tbw.pool_request = cu4.id_workshop and cu4.id_privilege = 5 and cu4.active = 1)
			 left join workshop.cac_user cu5 on (tbw.pool_request = cu5.id_workshop and cu5.id_privilege = 6 and cu5.active = 1)
			 left join workshop.cac_user cu6 on (tbw.pool_request = cu6.id_workshop and cu6.id_privilege = 7 and cu6.active = 1)
			 left join workshop.cac_user cu7 on (tbw.pool_request = cu7.id_workshop and cu7.id_privilege = 8 and cu7.active = 1)
			  where tbw.id = ".$id.";")->row_array();
		return $res;
	}

	function get_detail_sparepart($id){
		$res = $this->db->query("select iw.id, iw.id_workshop, iw.id_sparepart, iw.id_material, iw.qty, iw.loc_part, kode_part, item_name, internal_code, car_type from workshop.inventory_workshop iw 
			left join workshop.master_sparepart ms on (ms.id=iw.id_sparepart)
			where iw.id=".$id.";")->row_array();
		return $res;
	}

	function update_loc_part($post){
		$id = $post['id'];
		$save['loc_part'] = $post['loc_part'];
		$res = $this->db->where('id', $id)->update('inventory_workshop', $save);
		if (!$res) return FALSE;
		return true;
	}

	function get_history_approved(){
		$id_workshop = $this->user['id_workshop'];
		$res = $this->db->query("select tbw.*,(mp.name)pool_request_name, (mp2.name)pool_approve_name, ms.internal_code, ms.item_name, ms.kode_part, ms.sale_price
			from workshop.transfer_between_warehouse tbw
			left join workshop.master_workshop mp on (mp.id=tbw.pool_request)
			left join workshop.master_workshop mp2 on (tbw.pool_approve = mp2.id)
			left join inventory_workshop iw on (iw.id=tbw.id_sparepart)
			left join workshop.master_sparepart ms on (ms.id=iw.id_sparepart)
			where tbw.status='APPROVE' or tbw.status='RECEIVE' and pool_approve=".$id_workshop.";")->result_array();
		return $res;
	}

	function get_history_request($id_workshop){
		$res = $this->db->query("select tbw.*,(mp.name) pool_request_name, (mp2.name) pool_approve_name, iw.id as id_inventory, ms.kode_part,
			ms.internal_code, ms.item_name, ms.sale_price
			from transfer_between_warehouse tbw
			left join master_workshop mp on (mp.id=tbw.pool_request)
			left join master_workshop mp2 on (tbw.pool_approve = mp2.id)
			left join inventory_workshop iw on (iw.id=tbw.id_sparepart)
			left join master_sparepart ms on (ms.id=iw.id_sparepart)
			where tbw.status='REQUEST' and pool_request=".$id_workshop.";")->result_array();
		return $res;
	}

///////////////// REPORT PENGAMBILAN BARANG ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function report_pengambilan_barang($id_workshop, $date1, $date2){
		if($date1 == ''){
			$res = $this->db->query("select b.nomor_referensi, d.item_name, a.qty, a.harga_satuan, e.full_name , a.created_dt, mc.no_pintu, 
				wo.wo_number, mtp.jenis_pembayaran, wo.created_dt as tanggal_wo, mc.nama as nama_pengemudi, mc.kip
				from detail_faktur_pengambilan_inventory a 
				left join faktur_pengambilan_inventory b on (a.id_faktur = b.id)
				left join work_order wo on (wo.id=b.id_wo)
				join master_car mc on (mc.id=wo.id_car)
				join master_tipe_pembayaran mtp on (mtp.id=wo.type_of_payment)
				left join inventory_workshop c on (a.id_inventory = c.id)
				left join master_sparepart d on (c.id_sparepart = d.id)
				left join cac_user e on (a.input_by = e.id)
				where a.created_dt > '2018-01-01' and a.created_dt < '2018-12-31' and wo.id_workshop='".$id_workshop."';")->result_array();
		}else{
			$res = $this->db->query("select b.nomor_referensi, d.item_name, a.qty, a.harga_satuan, e.full_name , a.created_dt, mc.no_pintu, 
					wo.wo_number, mtp.jenis_pembayaran, wo.created_dt as tanggal_wo, mc.nama as nama_pengemudi,  mc.kip 
					from detail_faktur_pengambilan_inventory a 
					left join faktur_pengambilan_inventory b on (a.id_faktur = b.id)
					left join work_order wo on (wo.id=b.id_wo)
					join master_tipe_pembayaran mtp on (mtp.id=wo.type_of_payment)
					join master_car mc on (mc.id=wo.id_car)
					left join inventory_workshop c on (a.id_inventory = c.id)
					left join master_sparepart d on (c.id_sparepart = d.id)
					left join cac_user e on (a.input_by = e.id)
					where a.created_dt >= '".$date1."' and a.created_dt <= '".$date2."' and wo.id_workshop='".$id_workshop."';")->result_array();
		}
		return $res;
	}
	
	function sum_report_pengambilan_barang($id_workshop, $date1, $date2){
		if($date1 == ''){
			$res = $this->db->query("select sum(a.qty) as sum_qty, sum(a.harga_satuan) as sum_satuan
				from detail_faktur_pengambilan_inventory a 
				left join faktur_pengambilan_inventory b on (a.id_faktur = b.id)
				left join work_order wo on (wo.id=b.id_wo)
				left join inventory_workshop c on (a.id_inventory = c.id)
				left join master_sparepart d on (c.id_sparepart = d.id)
				left join cac_user e on (a.input_by = e.id)
				where a.created_dt > '2018-01-01' and a.created_dt < '2018-12-31' and wo.id_workshop='".$id_workshop."';")->result_array();
		}else{
			$res = $this->db->query("select sum(a.qty) as sum_qty, sum(a.harga_satuan) as sum_satuan
					from detail_faktur_pengambilan_inventory a 
					left join faktur_pengambilan_inventory b on (a.id_faktur = b.id)
					left join work_order wo on (wo.id=b.id_wo)
					left join inventory_workshop c on (a.id_inventory = c.id)
					left join master_sparepart d on (c.id_sparepart = d.id)
					left join cac_user e on (a.input_by = e.id)
					where a.created_dt >= '".$date1."' and a.created_dt <= '".$date2."' and wo.id_workshop='".$id_workshop."';")->result_array();
		}
		return $res;
	}
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function summary_in_out_barang($date_closing, $id_workshop){
		$res = $this->db->query("select b.jenis,  sum(qty_lalu) as qty_lalu, sum(qty_in) as qty_in, sum(qty_out) as qty_out,sum(qty_akhir) as qty_akhir from closing_inventory_workshop a
 			left join master_sparepart b on (a.id_sparepart = b.id)
 			where a.closing_month = ".$date_closing." and a.id_workshop = ".$id_workshop." 
 			group by b.jenis;")->result_array();
		return $res;
	}
        
// ================================================= OUTSTANDING ANTAR GUDANG ===============================================
	function outstanding_antar_gudang($id_workshop){
		$res = $this->db->query("select c.internal_code, c.item_name, a.status, qty_request, qty_transfered, note_request, note_transfered, request_dt, transfered_dt, 
			pool_request, pool_approve, d.nama as pool_request, e.nama as pool_approve, no_rr 
			from transfer_between_warehouse a 
			join inventory_workshop b on(b.id=a.id_sparepart)
			join master_sparepart c on(c.id=b.id_sparepart)
			join master_pool d on(d.id=a.pool_request)
			join master_pool e on(e.id=a.pool_approve)
			where pool_request=".$id_workshop." or pool_approve=".$id_workshop." and a.status='REQUEST'; ")->result_array();
		return $res;
	}		

}

