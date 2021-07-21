<?php
//include_once('Admin.php');
class Cogs extends CI_Controller{
	function __construct() {
		parent::__construct();		
		$this->load->model('cogs_model');
	}
	
	function index(){
		$data = $this->cogs_model->data();
		if($data){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
	
	function iv_cal(){
		$data = $this->cogs_model->iv_cal();
		if($data){
			echo "tabel berhasil di buat";
		} else {
			echo "tabel gagal di buat";
		}
	}
	
	function insert(){
		$data = $this->cogs_model->insert();
		if($data){
			echo "data berhasil di insert";
		}else{
			echo "gagal bro";
		}
	}

}

?>