<?php

include_once('Admin.php');

class Home extends Admin {
	function __construct() {
		parent::__construct();
                $this->load->model('cac_user_model');
                $this->load->model('dashboard_model');
	}
	
	function index() {
            
                $username = $this->user['username'];
                $data = $this->cac_user_model->detail($username);
    //             $vehicle_register = $this->dashboard_model->get_data_vehicle_register();
    //             $vehicle_active = $this->dashboard_model->get_data_vehicle_active();
				// $driver_register = $this->dashboard_model->get_data_driver_register();
    //             $driver_active = $this->dashboard_model->get_data_driver_active();
    //             $stnk_expired30 = $this->dashboard_model->get_data_stnk_expired_30();
    //             $keur_expired30 = $this->dashboard_model->get_data_keur_expired_30();
    //             $tera_expired30 = $this->dashboard_model->get_data_tera_expired_30();
    //             $kiukio_expired30 = $this->dashboard_model->get_data_kiukio_expired_30();  
				// $stnk_expired = $this->dashboard_model->get_data_stnk_expired();
    //             $keur_expired = $this->dashboard_model->get_data_keur_expired();
    //             $tera_expired = $this->dashboard_model->get_data_tera_expired();
    //             $kiukio_expired = $this->dashboard_model->get_data_kiukio_expired();
    //             $spj_today = $this->dashboard_model->get_data_spj_today();
    //             $spj_today_regular = $this->dashboard_model->get_data_spj_today_regular();
    //             $spj_today_tiara = $this->dashboard_model->get_data_spj_today_tiara(); 
				// $spj_yesterday_regular = $this->dashboard_model->get_data_spj_yesterday_regular();
    //             $spj_yesterday_tiara = $this->dashboard_model->get_data_spj_yesterday_tiara();
    //             $spj_yesterday = $this->dashboard_model->get_data_spj_yesterday();
    //             $spj_this_month = $this->dashboard_model->get_data_spj_this_month();
    //             $spj_last_month = $this->dashboard_model->get_data_spj_last_month();
    //             $payment_today = $this->dashboard_model->get_data_payment_today();
    //             $sum_payment_today = $this->dashboard_model->sum_data_payment_today();
    //             $sum_payment_today_regular = $this->dashboard_model->sum_data_payment_today_regular();
    //             $sum_payment_today_tiara = $this->dashboard_model->sum_data_payment_today_tiara();
    //             $sum_payment_this_month = $this->dashboard_model->sum_data_payment_this_month();
    //             $sum_payment_last_month = $this->dashboard_model->sum_data_payment_last_month();
    //             $utilisasi_unit = $this->dashboard_model->get_data_utilisasi_unit();
    //             $utilisasi_driver = $this->dashboard_model->get_data_utilisasi_driver();
                 
		$this->load->view('header',Array('username' => $username));
		if($this->user['id_privilege'] == Admin::ADMINISTRATOR)
		{
		$this->load->view('home',Array('data' => $data));
		}else
		{
		$this->load->view('home',Array('data' => $data));
		}
		$this->load->view('footer');
	}
}