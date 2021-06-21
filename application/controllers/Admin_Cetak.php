<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Cetak extends CI_Controller {


  public function index()
	{
    	$data['title']='Aplikasi Inventory Sticker <link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO">';
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
  public function master_sticker(){
      if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
      	$data['title']='Aplikasi Inventory Sticker<link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO">';
      $broadcast['data']=$this->Data_model->tampil_master_sticker('sticker')->result();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar.php');
      $this->load->view('admincetak/master_sticker',$broadcast);
      $this->load->view('template/footer');
    }else{
      header("location:http://localhost/inv/");
    }
 }
  public function master_sticker_proses(){
      $id_sticker=$this->input->post('id_sticker');
      $nama_sticker=$this->input->post('nama_sticker');
      $no_na=$this->input->post('no_na');
      $this->Data_model->tambah_master_sticker($id_sticker,$nama_sticker,$no_na);
  }


  public function input_jadwal_cetak(){
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
        $data['title']='Aplikasi Inventory Sticker<link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO">';
      $broadcast['data']=$this->Data_model->tampil_jadwal_cetak('jadwal_cetak')->result();
      $broadcast['list_sticker'] = $this->Data_model->getListSticker();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar.php');
      $this->load->view('admincetak/form_input_jadwal_cetak',$broadcast);
      $this->load->view('template/footer');
    }else{
      header("location:http://localhost/inv/");
    }
  }

  public function input_jadwal_cetak_proses(){
    $id_sticker=$this->input->post('id_sticker');
    $tgl_order=$this->input->post('tgl_order');
    $jml_cetak=$this->input->post('jml_ctk');
    $this->Data_model->input_jadwal_cetak($id_sticker,$jml_cetak,$tgl_order);
    echo $id_sticker;
  }

  public function input_jadwal_cetak_detail(){
    $id_sticker=$this->input->post('id_sticker');
    $qty=$this->input->post('qty');
    $batch=$this->input->post('batch');
    $tgl=$this->input->post('tgl');
    $no_order=$this->input->post('no_order');
    $this->Data_model->input_jadwal_cetak_detail($id_sticker,$qty,$batch,$tgl,$no_order);
  }

  public function hapus_jadwal($value='')
  {
    $this->db->set('di_hapus', 1);
    $this->db->where('no_batch', $value);
    $this->db->update('jadwal_cetak');
  }

  public function lihat_master_customer(){
      if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
      	$data['title']='Aplikasi Inventory Sticker <link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO">';
      $broadcast['data_cus']=$this->Data_model->lihat_customer();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar.php');
      $this->load->view('admincetak/daftar_customer',$broadcast);
      $this->load->view('template/footer');

    }else{
      header("location:http://localhost/inv/");
    }
  }
  public function order_selesai(){
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
    	$data['title']='Aplikasi Inventory Sticker <link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO">';
    // $broadcast['ky']=$this->Data_model->lihat_order_selesai('jadwal_cetak');
    $broadcast['ky']=$this->Data_model->tampil_jadwal_cetak('jadwal_cetak')->result();

    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('admincetak/order_selesai',$broadcast);
    $this->load->view('template/footer');
  }
}



 public function stock_gudang()
{
    if($this->session->userdata('logged_in')=='yes' and $this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){
    	$data['title']='Aplikasi Inventory Sticker <link rel="shortcut icon" href="<?php echo base_url()?>assets/favbi.ICO">';
    $broadcast['stock_sticker']=$this->Data_model->tampil_stock_sticker();
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar.php');
    $this->load->view('admincetak/stock_sticker',$broadcast);
    $this->load->view('template/footer');

  }else{
    header("location:http://localhost/inv/");
  }
}

}
