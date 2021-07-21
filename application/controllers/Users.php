<?php

include_once('Admin.php');

class Users extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('master_workshop_model');
	}
	
	function index($id = '') {
		$post = $this->input->post();
		if(isset($post['username']) && $post['id_privilege'] > -1)
		{
			if(isset($post['update'])) {
				$this->cac_user_model->update($post);
			}
			else if(isset($post['reset_pass'])){
				$this->cac_user_model->reset_pass($post['username']);
			}
			else {
				$this->cac_user_model->save($post);
			}
		}
		
		if($id !== '') {
			$users = $this->cac_user_model->detail_id($id);
		} else {
			$users = Array();
		}
		
		$data = $this->cac_user_model->data();
		
		$arrPrivilege = $this->get_privilege();
		$arrWorkshop = $this->master_workshop_model->data(true);
		
		$this->load->view('header');
		$this->load->view('users/index_users', Array('data' => $data, 'users' => $users, 'arrPrivilege' => $arrPrivilege, 'arrWorkshop' => $arrWorkshop));
		$this->load->view('footer');
		
	}
}