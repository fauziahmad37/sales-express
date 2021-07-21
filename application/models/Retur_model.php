<?php  
class Retur_model extends CI_Model{
	function data_retur($date, $id_workshop, $is_admin){
		$start = date('Y-m-1', strtotime($date));
		$end   = date('Y-m-t', strtotime($date));
		if ($is_admin) {
			$res = $this->db->query("select r.*, mc.no_pintu, mc.no_polisi, mc.nama from retur r 
				join work_order wo on (wo.id=r.id_wo) 
				join master_car mc on (mc.id=wo.id_car); ")->result_array();
		}else{
			$res = $this->db->query("select r.*, mc.no_pintu, mc.no_polisi, mc.nama from retur r 
				join work_order wo on (wo.id=r.id_wo) 
				join master_car mc on (mc.id=wo.id_car)
				where r.created_dt >='".$start."' and r.created_dt <='".$end."' and wo.id_workshop='".$id_workshop."' ")->result_array();
		}
		return $res;
	}

	function get_ss($id_workshop){
		$res = $this->db->query("select faktur_pengambilan_inventory.*, work_order.wo_number,
			work_order.created_dt as tanggal_wo, no_pintu, work_order.id_car, master_car.nama, kip from faktur_pengambilan_inventory 
			join work_order on (work_order.id=faktur_pengambilan_inventory.id_wo)
			join master_car on (master_car.id=work_order.id_car)
			where id_workshop='".$id_workshop."' ")->result_array();
		return $res;
	}

	function save($post){
		$save['wo_number'] = $post['nomor_wo'];
		$save['no_ss'] = $post['nomor_ss'];
		$save['id_wo'] = $post['id_wo'];
		$save['id_car'] = $post['id_car'];
		$save['no_induk'] = $post['kip'];
		$save['nama_pengemudi'] = $post['nama_customer'];
		$save['retur_note'] = $post['note'];
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['created_by'] = $this->user['username'];
		$res = $this->db->insert('retur', $save);
		if (!$res) return FALSE;
		return $this->db->insert_id();
	}

	function save_retur_detail($post){
		$save['id_retur'] = $post['id_faktur'];
		$save['nomor_referensi'] = $post['no_ss'];
		$save['id_inventory'] = $post['id_inventory'];
		$save['item_name'] = $post['nama_barang'];
		$save['qty'] = $post['stok'];
		$save['qty_retur'] = $post['qty_retur'];
		$save['price'] = $post['harga_satuan'];
		$save['total_price'] = ($post['harga_satuan']*$post['qty_retur']);
		$save['ppn'] = ($post['harga_satuan']*$post['qty_retur'])*0.1;

		//$save['created_dt'] = date('Y-m-d H:i:s');
		//$save['input_by'] = $this->user['id'];
//print_r($save);die();		
		$res = $this->db->insert('retur_detail', $save);
		if (!$res) return FALSE;
		
		return $this->db->insert_id();
	}
	
	function update($post){
		$id = $post['id'];
		$save['qty_retur']=$post['qty_retur'];
		$res = $this->db->where('id', $id)->update('retur_detail', $save);
		if (!$res) return FALSE;
		
		return $id;
	}
	
	function delete_item($id){
		$res = $this->db->query("delete from retur_detail where id='".$id."'");
		return true;
	}

	function get_data_retur($id){
		$res = $this->db->query("select retur.*, retur.retur_number as nomor_referensi, id_jenis_customer, no_pintu, 
			work_order.id_workshop, work_order.created_dt, retur.updated_by
			from retur
			join work_order on work_order.id = id_wo
			join master_car on master_car.id = work_order.id_car
			where  retur.id = ".$id." limit 1;")->row_array();
		
		return $res;
	}

	function get_available_data_sparepart($id_wo){
		$res = $this->db->query("select ms.kode_part, ms.sale_price as harga_sparepart, 
				item_name, dfpi.harga_satuan, dfpi.qty, dfpi.id_inventory, 
				iw.loc_part, iw.id_sparepart, iw.qty as stok
				from faktur_pengambilan_inventory fpi 
				join detail_faktur_pengambilan_inventory dfpi on (fpi.id=dfpi.id_faktur)
				join inventory_workshop iw on (iw.id=dfpi.id_inventory)
				join master_sparepart ms on (ms.id=iw.id_sparepart)
				where fpi.id_wo='".$id_wo."' ")->result_array();
		return $res;
	}
	
	function get_kode_workshop(){
		$data = $this->db->select('code')->where('id', $this->user['id_workshop'])->get('master_workshop')->row_array();
		
		$kode = (Count($data) > 0 ? $data['code'] : '');
		
		return $kode;
	}
	
	function publish($id){
		$test = $this->db->query("select aktif from retur where id = ".$id." and aktif = 0;")->row_array();
		
		if($test < 1){
			set_message(Admin::ERROR_GAGAL_PUBLISH_PENGAMBILAN, 'error');
			return FALSE;
		}
		
		$save['aktif'] = 1;
		$save['updated_by'] = $this->user['username'];
		$save['updated_dt'] = date('Y-m-d H:i:s');
		
		//CHECK SEQUENCE
		$kode = $this->get_kode_workshop();
		$sequence = 'retur_'.strtolower($kode).'_number_seq';
		$res_exist = $this->db->query("SELECT relname FROM pg_class where relname = '".$sequence."'")->row_array();
		if(Count($res_exist) < 1){
			//CREATE NEW SEQUENCE
			$this->db->query("create sequence ".$sequence." start 1;");
		}
		
		$save['retur_number'] = $this->db->query("select ('".$kode."RET' || 
			lpad((nextval('".$sequence."'))::text, 7, '0')) as nomor_referensi")->row_array()['nomor_referensi'];

		$res = $this->db->where('id', $id)->update('retur', $save);
		if(!$res) return False;
		
		return $id;
	}
}
?>