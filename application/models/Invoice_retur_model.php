<?php  
class Invoice_retur_model extends CI_Model{
	function data_invoice_retur($date, $id_workshop, $is_admin){
		$start = date('Y-m-1', strtotime($date));
		$end   = date('Y-m-t', strtotime($date));
		if ($is_admin) {
			$res = $this->db->query("select inv.id, inv.invoice_number, inv.created_dt, wo.wo_number, inv.note, inv.total_billing, inv.total_payment, mc.no_pintu, mc.no_polisi, mc.nama, lower(inv.invoice_number) from invoice_work_order inv
				join work_order wo on (wo.id=inv.id_wo) 
				join master_car mc on (mc.id=wo.id_car)
				where lower(inv.invoice_number) like('%retur%'); ")->result_array();
		}else{
			$res = $this->db->query("select inv.*, mc.no_pintu, mc.no_polisi, mc.nama from invoice_work_order inv  
				join work_order wo on (wo.id=inv.id_wo) 
				join master_car mc on (mc.id=wo.id_car)
				where inv.created_dt >='".$start."' and inv.created_dt <='".$end."' and wo.id_workshop='".$id_workshop."' ")->result_array();
		}
		return $res;
	}
	
	function detail($id){
		$res = $this->db->query("select a.*, b.jenis_pembayaran, c.wo_number, d.no_pintu, d.no_polisi, e.full_name 
			from invoice_work_order a
			left join master_tipe_pembayaran b on(a.tipe_pembayaran=b.id)
			left join work_order c on(c.id=a.id_wo)
			left join master_car d on(d.id=c.id_car)
			left join cac_user e on(e.id=a.input_by)
			where a.id=".$id."; ")->row_array();
		return $res;
	}
	
	function save_invoice_retur($post){
		
		$save['id_wo'] = $post['id_wo'];
		$save['created_dt'] = date('Y-m-d h:m:s');
		$save['input_by'] = $post['user_id'];
		$save['total_billing'] = $post['total_billing'];
		$save['invoice_number'] = $post['invoice_number'].'-RETUR';
		$save['nama_customer'] = $post['nama_customer'];
		$save['tipe_pembayaran'] = $post['type_of_payment'];
		$save['lunas'] = 1;
		$save['total_payment'] = $post['total_billing'];
		$save['note'] = $post['note'];
		
		$this->db->insert('invoice_work_order', $save);
		return $this->db->insert_id();
	}
}