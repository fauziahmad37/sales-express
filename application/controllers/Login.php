<?php
include_once('Admin.php');
	
	class Login extends Admin{
		function index(){
			$check_cookie = $this->cac_user_model->validate_cookie();
			if(($this->input->post('username') && $this->input->post('password')) || $check_cookie){
				$login = $this->cac_user_model->login($this->input->post()) || $check_cookie;
				
				if($login){
					$user = $this->cac_user_model->get_current();
					return redirect('/');
					exit();
				}else{
					return redirect('/Login?error=1');
					exit();
				}
			}
			$this->load->view('/login');
		}
		
		function logout(){
			$this->cac_user_model->logout();
			return redirect('/Login?success=1');
		}
		
		function ch_pass(){
			$this->load->view('/ch_pass');
		}
		
		function chpass(){
			if(!isset($_POST['password']) || !isset($_POST['password2'])){
				return redirect('/Login/ch_pass?error=1');
				exit();
			}
			if($_POST['password'] !== $_POST['password2']){
				return redirect('Login/ch_pass?error=1');
				exit();
			}
			$_POST['username'] = $this->cac_user_model->get_current("username");
			if($this->cac_user_model->chpass($_POST) === FALSE){
				return redirect('/Login/ch_pass?error=1');
				exit();
			}
			return redirect('/');
			exit();
		}
	}
?>