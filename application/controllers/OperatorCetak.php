<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorCetak extends CI_Controller {


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
public function input_hasil_cetak(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
  	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('operator/form_input_jadwal_cetak');
    $this->load->view('template/footer');
  }else{
    header("location:http://localhost/inv/");
  }
  }
}

public function lihat_order_selesai(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
    	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
      $brodacast['data']=$this->Data_model->tampil_jadwal_cetak('jadwal_cetak')->result();
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('operator/daftar_order_selesai',$brodacast);
    $this->load->view('template/footer');

    }else{
    header("location:http://localhost/inv/");
    }
  }
}
public function input_qty_dikerjakan(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
  	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
    $broadcast['data']=$this->Data_model->tampil_jadwal_cetak('jadwal_cetak')->result();
    $this->load->view('template/header',$broadcast);
    $this->load->view('template/sidebar.php');
    $this->load->view('operator/input_qty_dikerjakan');
    $this->load->view('template/footer');
    }else{
    header("location:http://localhost/inv/");
    }
  }
}
public function tambah_hasil_cetak($no_batch){
  {

    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
    	$data['title']='Aplikasi Inventory Sticker'?><link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO"> <?php ;
    $broadcast['data_tambah']=$this->Data_model->tambah_hasil_cetak($no_batch);
    $this->load->view('template/header');
    $this->load->view('template/sidebar.php');
    $this->load->view('operator/tambah',$broadcast);
    $this->load->view('template/footer');

    }else{
    header("location:http://localhost/inv/");
    }
  }
}
public function proses_tambah_hasil_cetak(){
  {
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){
    $jumlah_cetak=$this->input->post('jml_ctk');
    $no_batch=$this->input->post('no_batch');
    $this->Data_model->proses_tambah_hasil_cetak($jumlah_cetak,$no_batch);

    }else{
    header("location:http://localhost/inv/");
    }
  }
}


}
