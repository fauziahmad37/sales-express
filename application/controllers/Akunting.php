<?php
include_once('Admin.php');
class Akunting extends Admin {
	function __construct() {
		parent::__construct();		
		$this->load->model('akunting_model');
		$this->load->model('master_workshop_model');
	}
	
	function index(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		$id_status_invoice = '0,1';
		$_SESSION['id_car'] = false;
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
			$id_status_invoice =$post['id_status_invoice'];
		}
		
		$arrWorkshop = $this->master_workshop_model->data();		
		$data = $this->akunting_model->data_new($date, $dateakhir, $id_workshop,$id_status_invoice);
		$dataUser = $this->cac_user_model->data();
		$grand_total = $this->akunting_model->grand_total($date, $dateakhir, $id_workshop,$id_status_invoice);
		
		$this->load->view('/header');
		$this->load->view('/akunting/index_akunting', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir,'id_status_invoice' => $id_status_invoice,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'dataUser' => $dataUser, 'grand_total' => $grand_total));		
		$this->load->view('/footer');
	}
	
	function detail_pembayaran(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$dateakhir = date('Y-m-t');
		$id_status_invoice = '0,1';
		$_SESSION['id_car'] = false;
		
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-d', strtotime($post['bulan']));
			$dateakhir = date('Y-m-d', strtotime($post['bulanakhir']));
			$id_status_invoice =$post['id_status_invoice'];
		}
		
		$arrWorkshop = $this->master_workshop_model->data();		
		$data = $this->akunting_model->detail_pembayaran($date, $dateakhir, $id_workshop,$id_status_invoice);
		$total_part = $this->akunting_model->total_part($date, $dateakhir, $id_workshop,$id_status_invoice);
		$total_service = $this->akunting_model->total_service($date, $dateakhir, $id_workshop,$id_status_invoice);
		$dataUser = $this->cac_user_model->data();
		
		$this->load->view('/header');
		$this->load->view('/akunting/detail_pembayaran', Array('data' => $data, 'date' => $date, 'dateakhir' => $dateakhir,'id_status_invoice' => $id_status_invoice,
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'dataUser' => $dataUser, 'total_part' => $total_part, 'total_service'=>$total_service));		
		$this->load->view('/footer');
	}

// ===================================================================================================================================================================	
// ======================================================== REKAPITULASI PENERIMAAN DAN PENGELUARAN BARANG ===========================================================	
// ===================================================================================================================================================================	

	function laporan_stok(){
		$id_workshop = $this->user['id_workshop'];
		$post = $this->input->post();
		$date = date('Y-m-1');
		
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			//$date = ($post['bulan']);
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->akunting_model->laporan_stock($date, $id_workshop);
		$total_qty = $this->akunting_model->total_qty($date, $id_workshop);
		$grand_total_qty = $this->akunting_model->grand_total_qty($date, $id_workshop);
		
		$this->load->view('/header');
		$this->load->view('/akunting/laporan_stok', Array('id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'date' => $date, 'data' => $data,
			'total_qty' => $total_qty, 'grand_total_qty' => $grand_total_qty));		
		$this->load->view('/footer');
	}

//////////////////////////////////////////////////// LAPORAN BULANAN //////////////////////////////////////////

	function laporan_bulanan($date1 = '', $date2 = ''){
		$post = $post = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		$awal = date('Y-m-d');
		$akhir = date('Y-m-d');
		
		if(isset($post['search'])){
			$awal = $post['date1'];
			$akhir = $post['date2'];
			
			$date1 = $awal.' 00:00:00';
			$date2 = $akhir.' 23:00:00';
			$id_workshop = $post['id_workshop'];
			
			$data = $this->akunting_model->laporan_bulanan($date1, $date2, $id_workshop);
			$data2 = $this->akunting_model->sum_laporan_bulanan1($date1, $date2, $id_workshop);
			$data3 = $this->akunting_model->sum_wo_category($date1, $date2, $id_workshop);
			$data4 = $this->akunting_model->sum_qty_by_type($date1, $date2, $id_workshop);
			//print_r($data3);die();
		}else{
			$data = $this->akunting_model->laporan_bulanan($date1, $date2,$id_workshop);
			$data2 = $this->akunting_model->sum_laporan_bulanan1($date1, $date2, $id_workshop);
			$data3 = $this->akunting_model->sum_wo_category($date1, $date2, $id_workshop);
			$data4 = $this->akunting_model->sum_qty_by_type($date1, $date2, $id_workshop);
		}
		$arrWorkshop = $this->master_workshop_model->data();
		
		$this->load->view('/header');
		$this->load->view('/akunting/laporan_bulanan', Array('arrWorkshop' => $arrWorkshop, 'data' => $data, 
							'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'awal'=>$awal, 'akhir'=>$akhir, 'id_workshop'=>$id_workshop));
		$this->load->view('/footer');
	}
	
	
// ==========================================================================================================================================================
// ============================================================== DETAIL REKAPITULASI PENERIMAAN DAN PENGELUARAN BARANG =====================================
// ==========================================================================================================================================================
	
	function laporan_stok_detail(){
		$id_workshop = $this->user['id_workshop'];
		$post = $this->input->post();
		$date = date('Y-m-1');
		
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
			//print_r($date);die();
		}
		
		$arrWorkshop = $this->master_workshop_model->data();
		$data = $this->akunting_model->laporan_stock_detail($date, $id_workshop);
		$total_qty_detail = $this->akunting_model->total_qty_detail($date, $id_workshop);
		
		$this->load->view('/header');
		$this->load->view('/akunting/laporan_stok_detail', Array('id_workshop' => $id_workshop, 'arrWorkshop' => $arrWorkshop, 'date' => $date, 'data' => $data,
			'total_qty_detail' => $total_qty_detail));		
		$this->load->view('/footer');
	}
	
// ==========================================================================================================================================
// ============================================ TRANSAKSI PEMOTONGAN TABUNGAN SIMTAX ========================================================
// ==========================================================================================================================================

	function transaksi_pemotongan_tabungan(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$dataUser = $this->cac_user_model->data();
		$data = $this->akunting_model->pemotongan_tabungan_simtax($date, $id_workshop);
		
		$this->load->view('/header');
		$this->load->view('/akunting/transaksi_pemotongan_tabungan', Array('date' => $date, 
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'dataUser' => $dataUser, 'data' => $data));		
		$this->load->view('/footer');
	}
	
// ==========================================================================================================================================
// ============================================ REKAPITULASI PENGELUARAN BARANG =============================================================
// ==========================================================================================================================================

	function rekapitulasi_pengeluaran_barang(){
		$id_workshop = $this->user['id_workshop'];
		$date = date('Y-m-1');
		$post = $this->input->post();
		if(isset($post['search']))
		{
			$id_workshop = $post['id_workshop'];
			$date = date('Y-m-1', strtotime($post['bulan']));
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$dataUser = $this->cac_user_model->data();
		$data = $this->akunting_model->rekapitulasi_pengeluaran_barang($date, $id_workshop);
		
		$this->load->view('/header');
		$this->load->view('/akunting/rekapitulasi_pengeluaran_barang', Array('date' => $date, 
			'arrWorkshop' => $arrWorkshop, 'id_workshop' => $id_workshop, 'dataUser' => $dataUser, 'data' => $data));		
		$this->load->view('/footer');
	}



}

?>