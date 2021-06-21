<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title']='Aplikasi Inventory Sticker';?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
		if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
			header("location:http://localhost/inv/Dashboard/opr_ctk_sticker");
		}else if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
			header("location:http://localhost/inv/Dashboard/adm_ctk_sticker");
		}else if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
			header("location:http://localhost/inv/Dashboard/adm_gudang");
		}else{
		$data['title']='Aplikasi Inventory Sticker';?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
		$this->load->view('Authentikasi/login_view');
	}
}

	public function login(){

		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('password','PASSWORD','required');
		if($this->form_validation->run()==false){
			header("location:http://localhost/inv/");
		}else{
			$nik =$this->input->post('nik');
			$password =$this->input->post('password');
			$this->Data_model->login($nik,$password);
		}
	}
	public function logout(){
		echo $this->session->unset_userdata(array('nik','nama','jenis_kelamin',
								'umur','alamat','jabatan',
								'divisi','no_telp','logged_in'=>'yes'));
	header("location:http://localhost/inv/");
	}
}
