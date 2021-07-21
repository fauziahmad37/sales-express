<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
	//PRIVILEGES
	const ADMINISTRATOR = 1;
	const SALES_ADMIN = 2;
	const SALES = 3;
	const SALES_MANAGER = 4;
	const SUPPORT = 5;
	
	
	//ERROR LOG
	const ERROR_LOG_PART_SUDAH_DIGUNAKAN = "Lokasi Part Sudah Pernah Digunakan";
	const ERROR_NO_REF_SUDAH_DIGUNAKAN = "Nomor Referensi Sudah Pernah Digunakan di Workshop Ini";
	const ERROR_GAGAL_PUBLISH_PENERIMAAN = "Penerimaan Gagal Di Cetak!";
	const ERROR_GAGAL_PUBLISH_PENGAMBILAN = "Supply Slip Gagal Di Cetak!";	
	
	//STATUS FAKTUR PENERIMAAN
	const STATUS_FAKTUR_PENDING = 0;
	const STATUS_FAKTUR_PUBLISH = 1;	
	
	//VARIABLE
	const PPN_VAL = 10;
	
	function __construct() {
		parent::__construct();		
		$this->load->model('cac_user_model');
		$this->module = strtolower($this->router->fetch_class());
		$this->user = $this->cac_user_model->is_login();


		if($this->user === FALSE && $this->module !== 'login') {
			return redirect('/Login');
			exit();
		}
		
		if($this->module !== 'login') {
			$this->load->vars('user', $this->user);
		}


		
		if($this->user['id_privilege'] != Admin::ADMINISTRATOR && $this->module == 'users'){
			return show_error('Insufficient Privilege!');
		}
				
		$this->_log();
	}
	
	function __destruct() {
		$this->db->close();
	}
	
	private function _log() {
		if ($this->cac_user_model->is_login() === FALSE) return;
		
		$this->load->library('user_agent');
		
		$log = array(
			'ip' => (string) $this->input->ip_address(),
			'user_agent' => (string) $this->agent->agent_string(),
			'browser' => (string) $this->agent->browser(),
			'reff_page' => (string) $this->agent->referrer(),
			'curr_page' => (string) $_SERVER["REQUEST_URI"],
			'id_user' => (string) $this->user['id'],
			'dt' => (string) date('Y-m-d H:i:s')
			);
		
		$this->db->insert('cac_backend_log', $log);
	}
	
	protected function get_privilege(){
		$arrPrivilege = array(Admin::ADMINISTRATOR => 'Administrator', Admin::SALES_ADMIN => 'SALES ADMIN', 
			Admin::SALES => 'SALES', Admin::SALES_MANAGER => 'SALES MANAGER', Admin::SUPPORT => 'SUPPORT');
    	return $arrPrivilege;
	}
}

?>