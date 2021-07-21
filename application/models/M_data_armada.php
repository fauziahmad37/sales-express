		<?php

class M_data_armada extends CI_Model {
	public function data_armada (){
		$res = $this->db->query("SELECT tb_mobil_rekondisi.id, master_car.no_rangka,master_car.no_mesin,master_car.no_pintu,
		master_car.no_polisi,master_car_model.model,warna_rekondisi,
		tb_mobil_rekondisi.jenis_rekondisi FROM tb_mobil_rekondisi
		LEFT JOIN master_car on master_car.id = tb_mobil_rekondisi.id
		LEFT JOIN master_car_model on master_car_model.id = master_car.id_model ORDER BY id DESC;")->result_array();
		return $res;
	}

	public function load_code($no_pintu){
		$res = $this->db->query("SELECT master_car.id, no_rangka,no_mesin,no_polisi,no_pintu,
			master_pool.nama,master_car_model.model,
			master_car_warna.warna FROM master_car 
		LEFT JOIN master_pool on master_pool.id = master_car.id_pool
		LEFT JOIN master_car_model on master_car_model.id = master_car.id_model
		LEFT JOIN master_car_warna on master_car_warna.id = master_car.id_warna 
		where no_pintu like('%".$no_pintu."%')")->result_array();
		return $res;
	}

	function cek_data_armada($data1){
		$id = $data1['id'];
		$jenis_rekondisi = $data1['jenis_rekondisi'];
		$res = $this->db->query("SELECT id,jenis_rekondisi FROM tb_mobil_rekondisi where id ='$id' AND jenis_rekondisi='$jenis_rekondisi' ")->result_array();
		return $res;
	}

	function cek_data_armada2($id){
		$res = $this->db->query("SELECT jenis_rekondisi FROM tb_mobil_rekondisi where id ='$id' ")->result_array();
		return $res;
	}


	function simpan_data($insert){
		$res = $this->db->insert('tb_mobil_rekondisi',$insert);
		return $res;
	}

	function data_detail_body($id){
		$res = $this->db->query("SELECT tb_mobil_rekondisi.id, master_car.no_rangka,
		master_car.no_mesin,master_car.no_pintu,
		master_car.no_polisi,master_car_model.model,warna_rekondisi,
		tb_mobil_rekondisi.jenis_rekondisi,master_pt.ptfullname FROM tb_mobil_rekondisi
		LEFT JOIN master_car on master_car.id = tb_mobil_rekondisi.id
		LEFT JOIN master_car_model on master_car_model.id = master_car.id_model
		LEFT JOIN master_pt on master_pt.ptid = master_car.owner_pt_id
		WHERE tb_mobil_rekondisi.id='$id' and tb_mobil_rekondisi.jenis_rekondisi='Body Repair'limit 1; ")->result_array();
		return $res;
	}

	function data_detail($id){
		$res = $this->db->query("SELECT tb_mobil_rekondisi.id, master_car.no_rangka,
		master_car.no_mesin,master_car.no_pintu,
		master_car.no_polisi,master_car_model.model,warna_rekondisi,
		tb_mobil_rekondisi.jenis_rekondisi,master_pt.ptfullname FROM tb_mobil_rekondisi
		LEFT JOIN master_car on master_car.id = tb_mobil_rekondisi.id
		LEFT JOIN master_car_model on master_car_model.id = master_car.id_model
		LEFT JOIN master_pt on master_pt.ptid = master_car.owner_pt_id
		WHERE tb_mobil_rekondisi.id='$id' and tb_mobil_rekondisi.jenis_rekondisi='General Service'limit 1; ")->result_array();
		return $res;
	}

	function cek_jenis_general($id,$general_service){
		$res = $this->db->query("SELECT jenis_rekondisi FROM tb_mobil_rekondisi where id ='$id' and jenis_rekondisi='$general_service' limit 1 ")->result_array();
		return $res;

	}

	function cek_jenis($id){
		$res = $this->db->query("SELECT jenis_rekondisi FROM tb_mobil_rekondisi where id ='$id' and jenis_rekondisi='General Service'")->result_array();
		return $res;
	}
	function cek_jenis_body($id){
		$res = $this->db->query("SELECT jenis_rekondisi FROM tb_mobil_rekondisi where id ='$id' and jenis_rekondisi='Body Repair'")->result_array();
		return $res;
	}

	function data_proses_rekondisi($simpan_proses){
		$res = $this->db->insert('tb_proses_rekondisi',$simpan_proses);
		return $res;
	}

	function data_proses_general($simpan_proses){
		$res = $this->db->insert('tb_proses_general',$simpan_proses);
		return $res;
	}

	function input_data_awal($id){
		if($id !=''){
		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Pegamplasan, korosi (karat) & Pendempulan','-','-')");
		// return $res;

		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Pengelesan (Welding)','-','-')");
		// return $res2;

		$res = $this->db->query(" INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Spark board corrosion coating (Plingkut)','-','-')");
		// return $res3;

		$res = $this->db->query(" INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Epoxy (paint base)','-','-')");
		// return $res4;

		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','WARNA ASLI TERTUTUP','-','-')");
		// return $res5;
			 
		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','CAT & COATING','-','-')");
		// return $res6;
		
		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Pemolesan','-','-')");

		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Pembersihan Interior','-','-')");

		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Pelepasan Kaca Filem','-','-')");

		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Pelepasan Karpet Dasar','-','-')");

		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Setting Body','-','-')");

		$res = $this->db->query("INSERT INTO tb_proses_rekondisi VALUES ('$id','-','-','Pembersihan Head and Rear Lamp','-','-')");
		return $res;
		}
	}

	function input_awal_general($id){
		if($id !=''){
			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Pengaktifan Unit (Penggantian Accu)','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Pemasangan Dop Tire','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Pembersihan filter udara','-','-','-','-','-','')");
			
			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Engine Mounting','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Brake Pad','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Shock Braker','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Oli (Oil Filter)','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Oli (Engine Flush)','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Air Radiator (Pengurasan)','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Oil Transmission','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Freon','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian 4 Ban','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Penggantian Fan Belt','-','-','-','-','-','')");

			$res = $this->db->query("INSERT INTO tb_proses_general VALUES ('$id','Pergantian Kampas Kopling','-','-','-','-','-','')");

			return $res;
		}
	}

	function tabel_proses_rekondisi($id_mobil){
		$this->db->cache_off();
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' AND nama_service = 'Pegamplasan, korosi (karat) & Pendempulan'
		 ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi2($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' AND nama_service = 'Pengelesan (Welding)'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi3($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Spark board corrosion coating (Plingkut)'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi4($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Epoxy (paint base)'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi5($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'WARNA ASLI TERTUTUP'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi6($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'CAT & COATING'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}
	function tabel_proses_rekondisi7($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pemolesan'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi8($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pembersihan Interior'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi9($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pelepasan Kaca Filem'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi10($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pelepasan Karpet Dasar'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi11($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Setting di Body'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_proses_rekondisi12($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_rekondisi WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pembersihan Head and Rear Lamp'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}



	function tabel_general1($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pengaktifan Unit (Penggantian Accu)'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general2($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pembersihan filter udara'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general3($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Engine Mounting'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general4($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Brake Pad'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general5($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Shock Braker'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general6($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Oli (Oil Filter)'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}
	function tabel_general7($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Oli (Engine Flush)'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general8($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Air Radiator (Pengurasan)'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general9($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Oil Transmission'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general10($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Freon'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general11($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian 4 Ban'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function tabel_general12($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Penggantian Fan Belt'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}
	function tabel_general13($id_mobil){
		$res = $this->db->query(" SELECT  * FROM tb_proses_general WHERE id_mobil = '$id_mobil' 
			AND nama_service = 'Pergantian Kampas Kopling'
			ORDER BY id_mobil ASC  LIMIT 1")->result_array();
		return $res;
	}

	function cek_data($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service 	= $simpan_proses ['nama_service'];
		//$status_vendor  = $simpan_proses ['status_vendor'];
		$res =  $this->db->query(" SELECT * FROM tb_proses_rekondisi WHERE id_mobil='$id_mobil'
			AND nama_service = '$nama_service' ")->result_array();
		return $res;
	}

	function cek_general($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service 	= $simpan_proses ['nama_service'];
		//$status_vendor  = $simpan_proses ['status_vendor'];
		$res =  $this->db->query(" SELECT * FROM tb_proses_general WHERE id_mobil='$id_mobil'
			AND nama_service = '$nama_service' ")->result_array();
		return $res;
	}

	function update_status($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$status_vendor  = $simpan_proses ['status_vendor'];
		$status_wo 		= $simpan_proses ['status_wo'];
		$catatan 		= $simpan_proses ['catatan'];
		$final_check	= $simpan_proses ['final_check'];
		$nama_service	= $simpan_proses ['nama_service'];

		if($status_wo =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'Pegamplasan, korosi (karat) & Pendempulan' ");
			return $res;
		}else if($final_check =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$final_check	='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'Pegamplasan, korosi (karat) & Pendempulan' ");
			return $res;
		}else {
			 $res = $this->db->query("UPDATE tb_proses_rekondisi SET 
			 	status_vendor	= '$status_vendor',
			 	status_wo 		= '$status_wo',
			 	catatan 		= '$catatan',
			 	final_check 	= '$final_check' 
			 	WHERE id_mobil='$id_mobil' AND nama_service = 'Pegamplasan, korosi (karat) & Pendempulan' ");
			 return $res;
		}
		//print_r($status_vendor);die;
		
	}

	function update_status2($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$status_vendor  = $simpan_proses ['status_vendor'];
		$status_wo 		= $simpan_proses ['status_wo'];
		$catatan 		= $simpan_proses ['catatan'];
		$final_check	= $simpan_proses ['final_check'];
		$nama_service	= $simpan_proses ['nama_service'];

		if($status_wo =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service ='Pengelesan (Welding)' ");
			return $res;
		}else if($final_check =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$final_check	='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'Pengelesan (Welding)' ");
			return $res;
		}else {
			 $res = $this->db->query("UPDATE tb_proses_rekondisi SET 
			 	status_vendor	= '$status_vendor',
			 	status_wo 		= '$status_wo',
			 	catatan 		= '$catatan',
			 	final_check 	= '$final_check' 
			 	WHERE id_mobil='$id_mobil' AND nama_service='Pengelesan (Welding)' ");
			 return $res;
		}
		//print_r($status_vendor);die;
		
	}

	function update_status3($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$status_vendor  = $simpan_proses ['status_vendor'];
		$status_wo 		= $simpan_proses ['status_wo'];
		$catatan 		= $simpan_proses ['catatan'];
		$final_check	= $simpan_proses ['final_check'];
		$nama_service	= $simpan_proses ['nama_service'];

		if($status_wo =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service ='Spark board corrosion coating (Plingkut)' ");
			return $res;
		}else if($final_check =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$final_check	='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'Spark board corrosion coating (Plingkut)' ");
			return $res;
		}else {
			 $res = $this->db->query("UPDATE tb_proses_rekondisi SET 
			 	status_vendor	= '$status_vendor',
			 	status_wo 		= '$status_wo',
			 	catatan 		= '$catatan',
			 	final_check 	= '$final_check' 
			 	WHERE id_mobil='$id_mobil' AND nama_service='Spark board corrosion coating (Plingkut)' ");
			 return $res;
		}
		//print_r($status_vendor);die;
		
	}

	function update_status4($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$status_vendor  = $simpan_proses ['status_vendor'];
		$status_wo 		= $simpan_proses ['status_wo'];
		$catatan 		= $simpan_proses ['catatan'];
		$final_check	= $simpan_proses ['final_check'];
		$nama_service	= $simpan_proses ['nama_service'];

		if($status_wo =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service ='Epoxy (paint base)' ");
			return $res;
		}else if($final_check =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$final_check	='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'Epoxy (paint base)' ");
			return $res;
		}else {
			 $res = $this->db->query("UPDATE tb_proses_rekondisi SET 
			 	status_vendor	= '$status_vendor',
			 	status_wo 		= '$status_wo',
			 	catatan 		= '$catatan',
			 	final_check 	= '$final_check' 
			 	WHERE id_mobil='$id_mobil' AND nama_service='Epoxy (paint base)' ");
			 return $res;
		}
		//print_r($status_vendor);die;
		
	}

	function update_status5($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$status_vendor  = $simpan_proses ['status_vendor'];
		$status_wo 		= $simpan_proses ['status_wo'];
		$catatan 		= $simpan_proses ['catatan'];
		$final_check	= $simpan_proses ['final_check'];
		$nama_service	= $simpan_proses ['nama_service'];

		if($status_wo =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service ='WARNA ASLI TERTUTUP' ");
			return $res;
		}else if($final_check =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$final_check	='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'WARNA ASLI TERTUTUP' ");
			return $res;
		}else {
			 $res = $this->db->query("UPDATE tb_proses_rekondisi SET 
			 	status_vendor	= '$status_vendor',
			 	status_wo 		= '$status_wo',
			 	catatan 		= '$catatan',
			 	final_check 	= '$final_check' 
			 	WHERE id_mobil='$id_mobil' AND nama_service='WARNA ASLI TERTUTUP' ");
			 return $res;
		}
		//print_r($status_vendor);die;
		
	}

	function update_status6($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$status_vendor  = $simpan_proses ['status_vendor'];
		$status_wo 		= $simpan_proses ['status_wo'];
		$catatan 		= $simpan_proses ['catatan'];
		$final_check	= $simpan_proses ['final_check'];
		$nama_service	= $simpan_proses ['nama_service'];

		if($status_wo =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service ='CAT & COATING' ");
			return $res;
		}else if($final_check =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$final_check	='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'CAT & COATING' ");
			return $res;
		}else {
			 $res = $this->db->query("UPDATE tb_proses_rekondisi SET 
			 	status_vendor	= '$status_vendor',
			 	status_wo 		= '$status_wo',
			 	catatan 		= '$catatan',
			 	final_check 	= '$final_check' 
			 	WHERE id_mobil='$id_mobil' AND nama_service='CAT & COATING' ");
			 return $res;
		}
		//print_r($status_vendor);die;
		
	}

	function update_status7($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$status_vendor  = $simpan_proses ['status_vendor'];
		$status_wo 		= $simpan_proses ['status_wo'];
		$catatan 		= $simpan_proses ['catatan'];
		$final_check	= $simpan_proses ['final_check'];
		$nama_service	= $simpan_proses ['nama_service'];

		if($status_wo =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service ='Pemolesan' ");
			return $res;
		}else if($final_check =='REPROCESS'){
			$status_vendor  ='REPROCESS';
			$status_wo		='-';
			$final_check	='-';
			$res = $this->db->query("UPDATE tb_proses_rekondisi SET status_vendor='$status_vendor',
			status_wo = '$status_wo', catatan = '$catatan', final_check = '$final_check' 
			WHERE id_mobil='$id_mobil' AND nama_service = 'Pemolesan' ");
			return $res;
		}else {
			 $res = $this->db->query("UPDATE tb_proses_rekondisi SET 
			 	status_vendor	= '$status_vendor',
			 	status_wo 		= '$status_wo',
			 	catatan 		= '$catatan',
			 	final_check 	= '$final_check' 
			 	WHERE id_mobil='$id_mobil' AND nama_service='Pemolesan' ");
			 return $res;
		}
		//print_r($status_vendor);die;
		
	}

	function update_general1($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pengaktifan Unit (Penggantian Accu)' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pengaktifan Unit (Penggantian Accu)' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pengaktifan Unit (Penggantian Accu)' ");
		return $res;
		}
	}

	function update_general2($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pembersihan filter udara' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pembersihan filter udara' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pembersihan filter udara' ");
		return $res;
		}
	}

	function update_general3($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Engine Mounting' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Engine Mounting' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Engine Mounting' ");
		return $res;
		}
	}

	function update_general4($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Brake Pad' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Brake Pad' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Brake Pad' ");
		return $res;
		}
	}

	function update_general5($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Shock Braker' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Shock Braker' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Shock Braker' ");
		return $res;
		}
	}

	function update_general6($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oli (Oil Filter)' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oli (Oil Filter)' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oli (Oil Filter)' ");
		return $res;
		}
	}

	function update_general7($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oli (Engine Flush)' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oli (Engine Flush)' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oli (Engine Flush)' ");
		return $res;
		}
	}

	function update_general8($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Air Radiator (Pengurasan)' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Air Radiator (Pengurasan)' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Air Radiator (Pengurasan)' ");
		return $res;
		}
	}

	function update_general9($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oil Transmission' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oil Transmission' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Oil Transmission' ");
		return $res;
		}
	}

	function update_general10($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Freon' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Freon' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Freon' ");
		return $res;
		}
	}

	function update_general11($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian 4 Ban' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian 4 Ban' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian 4 Ban' ");
		return $res;
		}
	}

	function update_general12($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Fan Belt' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Fan Belt' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Penggantian Fan Belt' ");
		return $res;
		}
	}

	function update_general13($simpan_proses){
		$id_mobil	 	= $simpan_proses ['id_mobil'];
		$nama_service	= $simpan_proses ['nama_service'];
		$pengajuan_wo   = $simpan_proses ['pengajuan_wo'];
		$approval_wo 	= $simpan_proses ['approval_wo'];
		$vendor_proses 	= $simpan_proses ['vendor_proses'];
		$status_wo		= $simpan_proses ['status_wo'];
		$final_check 	= $simpan_proses ['final_check'];
		$catatan 		= $simpan_proses ['catatan'];

		if($status_wo == 'Reprosess'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pergantian Kampas Kopling' ");
		return $res;
		}else if($final_check == 'Tidak Selesai'){
			$vendor_proses  = 'Reprosess';
			$status_wo		= '-';
			$final_check	= '-';
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pergantian Kampas Kopling' ");
		return $res;
		}else{
			$res = $this->db->query(" UPDATE tb_proses_general SET 
			pengajuan_wo 	= '$pengajuan_wo',
			approval_wo 	= '$approval_wo',
			vendor_proses	= '$vendor_proses',
			status_wo		= '$status_wo',
			final_check		= '$final_check',
			catatan 		= '$catatan'
			WHERE id_mobil = '$id_mobil' AND nama_service ='Pergantian Kampas Kopling' ");
		return $res;
		}
	}


	function cek_data_rekon($id){
		$res = $this->db->query(" SELECT  count(0) as jumlah from tb_proses_rekondisi WHERE id_mobil = '$id'")->row()->jumlah;
		return $res;
	}

	function cek_data_general($id){
		$res = $this->db->query(" SELECT  count(0) as jumlah from tb_proses_general WHERE id_mobil = '$id'")->row()->jumlah;
		return $res;
	}

}
?>