<?php

class Cogs_model extends CI_Model {
	function data(){
		$save['id'] = 1;
		$save['name'] = 'ahmad';
		$res = $this->db->insert('cogs', $save);
		if (!$res) return FALSE;
		return $this->db->insert_id();
	}
	
	function iv_cal(){
		$tahun = date('Y');
		$bulan = date('m');
		$this->db->query("CREATE SEQUENCE iv_cal_".$tahun."".$bulan."_id_seq NO MINVALUE NO MAXVALUE;");
		$this->db->query("create table iv_cal_".$tahun."".$bulan." (id int8 NULL DEFAULT nextval('iv_cal_".$tahun."".$bulan."_id_seq'::regclass), name varchar NULL) WITH (OIDS=FALSE);");
		return true;
	}
	
	function insert(){
		$tahun = date('Y');
		$bulan = date('m');
		//$save['id'] = 1;
		$save['name'] = 'ahmad';
		$res = $this->db->insert('iv_cal_'.$tahun.''.$bulan.'', $save);
		return $this->db->insert_id();
	}
}

?>
