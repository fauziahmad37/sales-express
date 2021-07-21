<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	function set_message($message = 'Proses Berhasil', $type = 'success'){
		$ci = get_instance();
		$message = strip_tags(str_replace('</div>', "\n", $message));
		if(strlen($message > 100)) $message = substr($message, 0,97).'...';
		$ci->session->set_userdata('m', array('message' => $message, 'type' => $type));
	}
	
	function get_message(){
		$ci = get_instance();
		$m = $ci->session->userdata('m');
		if(!$m) return null;
		
		$ci->session->unset_userdata('m');
		return $m;
	}
	
	function array_get($arr, $val, $key, $key_to_return = ''){
		if($key_to_return === '') $key_to_return = $key;
		foreach((Array) $arr AS $key2 => $val2){
			if($val2[$key] == $val)
				return $val2[$key_to_return];
		}
		return null;
	}
	
	function strtotime_to_time($dt){
		$hours = intval($dt / 3600);
		$dt = $dt - ($hours * 3600);
		$min = intval($dt/60);
		$dt = $dt - ($min * 60);		
		$sec = $dt;
		return ($hours > 0 ? $hours.' jam ' : '').($min > 0 ? $min.' menit ' : ($sec > 0 ? '1 menit' : '0 menit'));
	}
	
?>
