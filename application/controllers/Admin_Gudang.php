<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Gudang extends CI_Controller {


  public function index()
	{
		if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
			header("location:http://localhost/inv/Dashboard/opr_ctk_sticker");
		}else if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
			header("location:http://localhost/inv/Dashboard/adm_ctk_sticker");
		}else if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
			header("location:http://localhost/inv/Dashboard/adm_gudang");
		}else{
		$this->load->view('Authentikasi/login_view');
	}
}
public function input_model_sticker(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
  	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('admingudang/tambah_model_sticker');
    $this->load->view('template/footer');
  }else{
    header("location:http://localhost/inv/");
  }
  }
}
public function stock_gudang(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
    	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
    $broadcast['stock_sticker']=$this->Data_model->tampil_stock_sticker();
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('admingudang/stock_sticker',$broadcast);
    $this->load->view('template/footer');

  }else{
    header("location:http://localhost/inv/");
  }
  }
}
public function sticker_masuk(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
    	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('admingudang/sticker_masuk');
    $this->load->view('template/footer');

  }else{
    header("location:http://localhost/inv/");
  }
  }
}
public function input_sticker_masuk(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
    	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
      $kode_sticker=$this->input->post('kode_sticker');
      $qty=$this->input->post('qty');
      $$this->Data_model->input_sticker_masuk($kode_sticker,$qty);
  }else{
    header("location:http://localhost/inv/");
  }
  }
}

public function sticker_keluar(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){
    	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('admingudang/sticker_keluar');
    $this->load->view('template/footer');

  }else{
    header("location:http://localhost/inv/");
  }
  }
}



}
