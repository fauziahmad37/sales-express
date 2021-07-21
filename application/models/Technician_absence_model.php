<?php

class technician_absence_model extends CI_Model {	
	function data($date, $id_workshop){
		$start = date('Y-m-1 00:00:00', strtotime($date));
		$end = date('Y-m-t 23:59:59', strtotime($date));
		$res = $this->db->query("select id_technician, tgl, jam from absence_technician 
			join master_technician on id_technician = master_technician.id and master_technician.id_workshop = ".$id_workshop."
			where tgl >= '".$start."' and tgl <= '".$end."'")->result_array();
		return $res;
	}
	
	function data_report(){
		$res = $this->db->query("select id_technician,count(0) as jumlah_kerja  from workshop.work_order group by id_technician having count(0)>=1;")->result_array();
		return $res;
	}

	function save_or_update($post){
		foreach((Array) $post AS $key => $val){
			if($key === 'save'){				
				continue;
			}
			$save = array();
			$save['tgl'] = $val['tgl'];
			$save['id_technician'] = $val['id_technician'];
			$save['jam'] = $val['jam'];
			$row = $this->db->where('id_technician', $save['id_technician'])->where('tgl', $save['tgl'])->get('absence_technician')->num_rows();
			if($row < 1){
				$save['input_by'] = $this->user['id'];						
				$save['created_dt'] = date('Y-m-d H:i:s');
				$this->db->insert('absence_technician', $save);
			} else {
				$save['update_by'] = $this->user['id'];						
				$save['updated_dt'] = date('Y-m-d H:i:s');
				$this->db->where('id_technician', $save['id_technician'])->where('tgl', $save['tgl'])->where('jam <>', $save['jam'])->update('absence_technician', $save);
			}
		}
		
		return true;
	}
}

