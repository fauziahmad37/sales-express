<?php

class service_detail_model extends CI_Model {
	function create_default_detail($post){
		$saves = array();
		foreach((Array) $post AS $key => $val){
			if($val['id_jenis_servis'] == 1){
				$save = array();
				$save['id_wo'] = $val['id_wo'];
				$save['id_lts'] = $val['id_lts'];
				$save['qty'] = $val['qty'];
				$save['price_qty'] = $val['price_qty'];
				$save['total_price'] = $val['total_price'];
				$save['input_by'] = $this->user['id'];
				$save['created_dt'] = date('Y-m-d H:i:s');
				$save['id_technician'] = $val['id_technician'];
				array_push($saves, $save);
			}
		}
		
		if(Count($saves) > 0){
			$this->db->insert_batch('service_detail', $saves);
		}
	}
	
	function data($id_wo){
        // print_r($id_wo);die;
		// $res = $this->db->query("select service_detail.id, id_wo, qty, price_qty, total_price, service_detail.status, lts_code, 
			// description, master_technician.nama as teknisi
			// from service_detail 
			// left join master_lts on id_lts = master_lts.id and id_wo = ".$id_wo." and service_detail.active = 1 
			// left join master_technician on master_technician.id = id_technician			
			// order by service_detail.id;")->result_array();
			
		$res = $this->db->query("select service_detail.id, id_wo, qty, price_qty, total_price, service_detail.status, lts_code, 
			description, master_technician.nama as teknisi
			from service_detail 
			join master_lts on id_lts = master_lts.id and id_wo = ".$id_wo." and service_detail.active = 1 
			left join master_technician on master_technician.id = id_technician
			order by service_detail.id;")->result_array();
		// print_r($res);die;
		return $res;
	}
	
	function detail($id){
		$res = $this->db->query("select service_detail.id, id_wo, qty, price_qty, total_price, hourly_price,
			lts_code, description, id_lts, id_technician, id_jenis_car, jenis
			from service_detail 
			join master_lts on master_lts.id = id_lts and service_detail.id = ".$id."
			join master_jenis_car on master_jenis_car.id = id_jenis_car
			limit 1;")->row_array();
		
		return $res;
	}
	
	function get_time_details($id_wo){
		$res = $this->db->query("select id_service_detail, dt_start, dt_end from time_service_detail 
			join service_detail on service_detail.id = time_service_detail.id_service_detail and id_wo = ".$id_wo.";")->result_array();
		return $res;
	}
	
	function save($post){
		$save = array();
		$save['id_wo'] = $post['id_wo'];
		$save['id_lts'] = $post['id_lts'];
		$save['qty'] = $post['qty'];
		$save['price_qty'] = $post['price_qty'];
		$save['total_price'] = $post['total_price'];
		$save['input_by'] = $this->user['id'];
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['id_technician'] = $post['id_technician'];
		$this->db->insert('service_detail', $save);
	}
	
	function update($post){
		$save = array();
		$save['id_lts'] = $post['id_lts'];
		$save['qty'] = $post['qty'];
		$save['price_qty'] = $post['price_qty'];
		$save['total_price'] = $post['total_price'];
		$save['update_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['id_technician'] = $post['id_technician'];
		$this->db->where('id', $post['id'])->update('service_detail', $save);
	}
	
	function delete($id){
		$save['active'] = 0;
		$save['update_by'] = $this->user['id'];
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id)->update('service_detail', $save);
	}
	
	function actions($action = '', $id_detail = ''){
		if($action === '' || $id_detail === '')
			return false;
		if($action === 'start'){
			//ADD NEW TIME RECORD
			$save = array();
			$save['id_service_detail'] = $id_detail;
			$save['dt_start'] = date('Y-m-d H:i:s');
			$save['input_by'] = $this->user['id'];
			$this->db->insert('time_service_detail', $save);
			
			//UPDATE SERVICE DETAIL
			$save = array();
			$save['status'] = 'Berjalan';
			$this->db->where('id', $id_detail)->update('service_detail', $save);
			
			return true;			
		} else if($action === 'end'){
			//UPDATE TIME RECORD
			$save = array();
			$save['dt_end'] = date('Y-m-d H:i:s');
			$save['update_by'] = $this->user['id'];
			$this->db->where('id_service_detail', $id_detail)->where('dt_end', null)->limit(1)->update('time_service_detail', $save);
			
			//UPDATE SERVICE DETAIL
			$save = array();
			$save['status'] = 'Selesai';
			$this->db->where('id', $id_detail)->update('service_detail', $save);
		}
	}
}

