<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ws_tabungan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://10.2.9.184/API/show.php?no_pintu=AAA%20001",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"postman-token: 6caff011-0cc7-0c73-c1ee-ad10678c8dbd"
		),
	  ));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
		$json = json_decode($response, true);
		foreach ($json as $data) {
		   print_r($data);
		   echo $data['TAB_SALDO'];
	   }
	}
			//$this->load->view('ws/tabungan_template');
	}

}

/* End of file ws_tabungan.php */
/* Location: ./application/controllers/ws_tabungan.php */