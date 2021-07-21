<?php
class api_etaxi_model extends CI_Model {
	function show_tab_etaxi($no_pintu){
		if($no_pintu == ''){
			$no_pintu = 'ABC';
		}
		
		//print_r($no_pintu);die();
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://etaxi.expressgroup.co.id/ws/api/sparepart/checkSaldo",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{\n\t\"doorNumber\": \"".$no_pintu."\"\n}",
		  CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: application/json",
			"postman-token: 4953e997-0706-2877-cea9-2ea8a29b29c4"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  $response = json_decode($response, true);
		}
		return $response;
	}
}
?>