<?php

class model_sparepart_model extends CI_Model {
	function update($post){
		$id_sparepart = $post['id'];
		//DELETE EXISTING DATA
		$this->db->where('id_sparepart', $id_sparepart)->delete('model_sparepart');
		
		//UPDATE
		$saves = array();
		foreach((Array) $post AS $key2 => $val2){
			if(strpos($key2, 'model_') !== false){
				$save = array();
				$save['id_sparepart'] = $id_sparepart;
				$save['id_model'] = $val2;
					$get_car_model = $this->db->query("select * from master_car_model where id='".$val2."' ")->row_array();
					$res = $this->db->query("update master_sparepart set car_type='".$get_car_model['model']."' where id='".$id_sparepart."' ");
				array_push($saves, $save);
			}
		}
		$this->db->insert_batch('model_sparepart', $saves);
	}
	
	function get_active($id){
		return $this->db->query('select master_car_model.id, brand, model, id_model 
			from master_car_model left join model_sparepart on model_sparepart.id_model = master_car_model.id 
				and id_sparepart = '.$id.';')->result_array();
	}

	public function load_data_by_internal_code($internalCode){

		$res = $this->db->query("select * from master_sparepart where internal_code = ".$internal_code." limit 10")->result_array();
		return $res;

	}
}

