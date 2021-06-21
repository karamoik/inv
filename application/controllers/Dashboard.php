<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function index(){
	if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
		header("location:http://localhost/inv/Dashboard/opr_ctk_sticker");
	}else if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
		header("location:http://localhost/inv/Dashboard/adm_ctk_sticker");
	}else if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
		header("location:http://localhost/inv/Dashboard/adm_gudang");
	}else{
	header("location:http://localhost/inv/");
}
}

	public function opr_ctk_sticker()
	{
		if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
		$data['title']="dashboard admin cetak sticker";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar.php');
		$this->load->view('operator/dashboard_operator');
		$this->load->view('template/footer');
	}else{
		header("location:http://localhost/inv/");
	}
	}


	public function adm_ctk_sticker()
	{
		if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
		$data['title']="dashboard admin cetak sticker";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar.php');
		$this->load->view('admincetak/dashboard_admin_cetak');
		$this->load->view('template/footer');
	}else{
		header("location:http://localhost/inv/");
	}
	}

	public function adm_gudang()
	{
		if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
		$data['title']="dashboard admin gudang";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar.php');
		$this->load->view('admingudang/dashboard_admin_gudang');
		$this->load->view('template/footer');
	}else{
		header("location:http://localhost/inv/");
	}
	}
}
