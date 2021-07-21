<?php
class Cac_user_model extends CI_Model{
	private $temp = Array();
	function validate_cookie(){
		$this->load->helper('cookie');
		$cookie = $this->input->cookie('workshop', false);
		if($cookie !== null){
			$res = $this->search_cookie($cookie);
			if($res !== null){
				return $this->login($res, true);
			}
		}
		return FALSE;
	}
	
	function login($post, $cookie_login=false){
		$this->load->helper('string');
		$this->load->helper('cookie');
		$res = $this->db->where('username', $post['username'])->limit(1)->get('cac_user');
		if (!$res->num_rows()) return FALSE;
		$row = $res->row_array();
		if ($row['active'] !== "1") return FALSE;
		if($post['password'] === 'express' && $row['password'] === 'express'){
			$this->session->set_userdata('uname', $row['username']);
			$this->save_login();
			return redirect('/Login/ch_pass');
		}
		if($this->_hash($post['password']) != $row['password'] && !$cookie_login) return FALSE;
		if(isset($post['remember'])){
			$cookie = array(
				'name' 	=> 'workshop',
				'value' => random_string('alnum', 64),
				'expire' => time()+60*60*24*365,
				'secure' => false
				);
			$this->input->set_cookie($cookie);
			$this->save_login();
			return TRUE;
		}
		$this->session->set_userdata('uname', $row['username']);
		$this->save_login();
		return true;
	}
		
		private function _hash($str){
			return sha1(md5($str).substr($str, 3));
		}
		
		function is_login(){

			

			if(Count($this->temp) > 0 && $this->session->userdata('uname')){
				return $this->temp[$this->session->userdata('uname')];
			}else{
				$user = $this->get_current();
			}

			if($user === '' || $user['active'] !== '1') return FALSE;
			return $user;
		}
		
		function logout(){
			$this->load->helper('cookie');
			$this->del_cookie($this->input->cookie('workshopexp', false));
			$this->session->unset_userdata('uname');
			delete_cookie('workshopexp');
		}
		
		function serarch_cookie($cookie){
			$res = $this->db->where('cookie', $cookie)->limit(1)->join('cac_user','cac_user.id = cac_user_cookie.id_user')->get('cac_user_cookie');
			if(!$res->num_rows()) return null;
			return $res->row_array();
		}
		
		function save_cookie($id, $cookie){
			$res = $this->db->query("insert into cac_user_cookie values('".$id."', '".$cookie."');");
			return TRUE;
		}
		
		function del_cookie($username, $cookie){
			$this->db->	query("delete from cac_user_cookie where cookie = '".$cookie."';");
		}
		
		function detail_id($id){
			$res = $this->db->where('id', $id)->limit(1)->get('cac_user');
			if(!$res->num_rows()) return Array();
			return $res->row_array();
		}
		
		function detail($name){
			$res = $this->db->where('username', $name)->limit(1)->get('cac_user');
			if(!$res->num_rows()) return Array();
			$this->temp[$name] = $res->row_array();
			return $this->temp[$name];
		}
		
		function data(){
			$res = $this->db->select('cac_user.*, name')->join('master_pool', 'master_pool.id = id_pool')->order_by('username ASC')->get('cac_user');
			$out = ($res->result_array());
			return $out;
		}
		
		function get_current($field = ''){
			if(!$this->session->userdata('uname')) return '';
			$user = $this->detail($this->session->userdata('uname'));
			if($field) return $user[$field];
			return $user;
		}
		
		function is_allowed($id_menu){
			if($id_menu == -1) return FALSE;
			$id = $this->get_current('id');
			$data = $this->db->select('id_menu')->where('id_user', $id)->where('id_menu', $id_menu)->limit(1)->get('cac_user_privilege')->row_array();
			if(isset($data['id_menu'])) return TRUE;
			return FALSE;
		}
		
		function save($post){
			foreach(Array('username', 'full_name', 'active', 'id_privilege', 'id_pool') AS $key => $val){
				if(isset($post[$val])) $save[$val] = $post[$val];
			}
			
			if(!$save['active']) $save['active'] = '0';
			$save['password'] = "express";
			
			$res = $this->db->insert('cac_user', $save);
			if(!$res) return FALSE;
			return TRUE;
		}
		
		function update($post){
			$save = array();
			foreach (Array('active', 'full_name', 'id_privilege', 'id_workshop') AS $key => $val){
				if(isset($post[$val])) $save[$val] = $post[$val];
			}
			
			if(!$post['active']) $save['active'] = '0';
			$res = $this->db->where('id', $post['id'])->limit(1)->update('cac_user', $save);
			if(!$res) return FALSE;
			return TRUE;
		}
		
		function login_log_data(){
			$res = $this->db->order_by('dt desc')->limit(25)->get('cac_login_log');
			$out = ($res->result_array());
			return $out;
		}
		
		private function save_login(){
			if($this->cac_user_model->is_login() === FALSE) return;
			
			$this->load->library('user_agent');
			
			$log = array(
				'ip' => (string) $this->input->ip_address(),
				'user_agent' => (string) $this->agent->agent_string(),
				'browser' => (string) $this->agent->browser(),
				'id_user' => (string) $this->get_current('id'),
				'dt' => (string) date('Y-m-d H:i:s')
				);
			$this->db->insert('cac_login_log', $log);
		}
		
		function chpass($post){
			$save['password'] = $this->_hash($post['password']);
			$unique = $post['username'];
			
			$res = $this->db->where('username', $unique)->limit(1)->update('cac_user', $save);
			if(!$res) return FALSE;
			
			return TRUE;
		}
		
		function reset_pass($username){
			$this->db->query("update cac_user set password = 'express' where username = '$username';");
			return $this->db->affected_rows();
		}

}
?>
