<?php
include_once('Admin.php');
class Invoice_retur extends Admin {
	function __construct() {
		parent::__construct();
		$this->load->model('invoice_retur_model');
		$this->load->model('master_workshop_model');
		$this->load->model('savings_transaction_model');
		
	}

	function index() {
		$date		 = date('Y-m-1');
		$post		 = $this->input->post();
		$id_workshop = $this->user['id_workshop'];
		$arrWorkshop = $this->master_workshop_model->data();
		$is_admin	 = ($this->user['id_privilege'] == Admin::ADMINISTRATOR);

		if(isset($post['search'])){
			$id_workshop = $post['id_workshop'];
			$date 		 = date('Y-m-1', strtotime($post['bulan']));
		}
		$data = $this->invoice_retur_model->data_invoice_retur($date, $id_workshop, $is_admin);

		$this->load->view('/header');
		$this->load->view('/invoice_retur/index', Array('id_workshop'=>$id_workshop, 'arrWorkshop'=>$arrWorkshop, 'date'=>$date, 'data'=>$data));		
		$this->load->view('/footer');		
	}

	function detail($id = ''){
		if($id === '')
			return redirect('/Invoice_retur/');
		
		$data = $this->invoice_retur_model->detail($id);
		
		$this->load->view('/header');
		$this->load->view('/invoice_retur/detail', Array('data'=>$data));		
		$this->load->view('/footer');
	}
	
	function invoice_retur_add(){
		$post = $this->input->post();
		$user_id = $this->user['id'];
		if(isset($post['simpan'])){
			$res = $this->invoice_retur_model->save_invoice_retur($post);
			if($res){
				$get_token = $this->savings_transaction_model->$get_token();
				$api_pengembalian = $this->savings_transaction_model->pengembalian_saldo_etaxi($get_token, $post);
				if($api_pengembalian){
					?>
					<script type="text/javascript">
						alert("Saldo Tabungan Etaxi berhasil di kembalikan!!");
						window.location = "<?php echo site_url('/Invoice_retur/');?>";
					</script>
					<?php
				}else{
					?>
					<script type="text/javascript">
						alert("Gagal Mengirim Data ke Etaxi!!");
						window.location = "<?php echo site_url('/Invoice_retur/');?>";
					</script>
					<?php
				}
			}else{
				?>
				<script type="text/javascript">
					alert("Save Invoice Workorder Retur Gagal!!");
					window.location = "<?php echo site_url('/Invoice_retur/');?>";
				</script>
				<?php
			}
		}
		$arrWorkshop = $this->master_workshop_model->data();
		$idWorkshop  = $this->user['id_workshop'];
		
		$this->load->view('/header');
		$this->load->view('/invoice_retur/invoice_retur_add', Array('user_id' => $user_id));
		$this->load->view('/footer');
	}
	
}