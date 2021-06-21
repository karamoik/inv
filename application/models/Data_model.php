<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Model extends CI_Model
{



	public function login($nik, $pass)
	{
		$nik = $nik;
		$password = $pass;

		$this->db->select('userlog.nik, userlog.password, nama,jeniskelamin,umur,alamat,id_jabatan,id_divisi,no_telp');
		$this->db->from('karyawan');
		$this->db->join('userlog', 'userlog.nik=karyawan.nik');
		$this->db->where(array('userlog.nik' => $nik, 'userlog.password' => md5($password), 'id_jabatan' => 101, 'id_divisi' => 1001));
		$data_opr_cetak_sticker = $this->db->get()->result();
		if (count($data_opr_cetak_sticker) == true) {
			foreach ($data_opr_cetak_sticker as $opr_ctk_sticker) {
				$sesi = array(
					'nik' => $opr_ctk_sticker->nik, 'nama' => $opr_ctk_sticker->nama, 'jenis_kelamin' => $opr_ctk_sticker->jeniskelamin,
					'umur' => $opr_ctk_sticker->umur, 'alamat' => $opr_ctk_sticker->alamat, 'jabatan' => $opr_ctk_sticker->id_jabatan,
					'divisi' => $opr_ctk_sticker->id_divisi, 'no_telp' => $opr_ctk_sticker->no_telp, 'logged_in' => 'yes'
				);
				$session = $this->session->set_userdata($sesi);
				header("location:http://localhost/inv/Dashboard/opr_ctk_sticker");
			}
		} else {
			$this->db->select('userlog.nik, userlog.password,nama,jeniskelamin,umur,alamat,id_jabatan,id_divisi,no_telp');
			$this->db->from('karyawan');
			$this->db->join('userlog', 'userlog.nik=karyawan.nik');
			$this->db->where(array('userlog.nik' => $nik, 'userlog.password' => md5($password), 'id_jabatan' => 102, 'id_divisi' => 1001));
			$data_adm_cetak_sticker = $this->db->get()->result();
			if (count($data_adm_cetak_sticker) == true) {
				foreach ($data_adm_cetak_sticker as $adm_ctk_sticker) {
					$sesi = array(
						'nik' => $adm_ctk_sticker->nik, 'nama' => $adm_ctk_sticker->nama, 'jenis_kelamin' => $adm_ctk_sticker->jeniskelamin,
						'umur' => $adm_ctk_sticker->umur, 'alamat' => $adm_ctk_sticker->alamat, 'jabatan' => $adm_ctk_sticker->id_jabatan,
						'divisi' => $adm_ctk_sticker->id_divisi, 'no_telp' => $adm_ctk_sticker->no_telp, 'logged_in' => 'yes'
					);
					$session = $this->session->set_userdata($sesi);
					header("location:http://localhost/inv/Dashboard/adm_ctk_sticker");
				}
			} else {
				$this->db->select('userlog.nik, userlog.password,nama,jeniskelamin,umur,alamat,id_jabatan,id_divisi,no_telp');
				$this->db->from('karyawan');
				$this->db->join('userlog', 'userlog.nik=karyawan.nik');
				$this->db->where(array('userlog.nik' => $nik, 'userlog.password' => md5($password), 'id_jabatan' => 102, 'id_divisi' => 1002));
				$data_adm_gudang = $this->db->get()->result();
				if (count($data_adm_gudang) == true) {
					foreach ($data_adm_gudang as $adm_gudang) {
						$sesi = array(
							'nik' => $adm_gudang->nik, 'nama' => $adm_gudang->nama, 'jenis_kelamin' => $adm_gudang->jeniskelamin,
							'umur' => $adm_gudang->umur, 'alamat' => $adm_gudang->alamat, 'jabatan' => $adm_gudang->id_jabatan,
							'divisi' => $adm_gudang->id_divisi, 'no_telp' => $adm_gudang->no_telp, 'logged_in' => 'yes'
						);
						$session = $this->session->set_userdata($sesi);
						header("location:http://localhost/inv/Dashboard/adm_gudang");
					}
				} else {
					header("location:http://localhost/inv/");
				}
			}
		}
	}

	public function getListSticker()
	{
		$data_customer = $this->db->get('sticker')->result();
		return $data_customer;
	}
	public function input_jadwal_cetak_detail($id_sticker, $qty, $batch, $tgl, $order)
	{
		$data = array('id_sticker' => $id_sticker, 'qty_cetak' => $qty, 'no_batch' => $batch, 'tgl_kemas' => $tgl, 'no_order' => $order);
		$this->db->insert('jadwal_cetak', $data);
	}

	public function lihat_customer()
	{
		$data_customer = $this->db->get('master_customer')->result();
		return $data_customer;
	}
	public function input_jadwal_cetak($no_order, $nm_staf, $tgl)
	{
		$data = array('no_order' => $no_order, 'nm_staf' => $nm_staf, 'tggl_order' => $tgl);
		$this->db->insert('order', $data);
		// header("location:http://localhost/inv/Admin_Cetak/input_jadwal_cetak");

	}
	function tampil_jadwal_cetak($table)
	{
		// $this->db->select('sticker.nm_sticker, sticker.no_na, id_sticker, qty_cetak, no_batch, tgl_kemas,no_order');
		// $this->db->from('sticker');
		// $this->db->join('jadwal_cetak','sticker.kd_sticker=jadwal_cetak.id_sticker');
		// $this->db->join('jadwal_cetak','sticker.kd_sticker=jadwal_cetak.id_sticker');
		// $data=$this->db->get();

		$this->db->select('*');
		$this->db->from('order');
		$this->db->join('jadwal_cetak', 'order.no_order=jadwal_cetak.no_order', 'left');
		$this->db->where('jadwal_cetak.di_hapus', 0);
		$data = $this->db->get();
		return $data;
	}


	function lihat_order_selesai()
	{
		$this->db->select('*');
		$this->db->from('sticker');
		$this->db->join('jadwal_cetak', 'sticker.kd_sticker=jadwal_cetak.id_sticker');
		$data = $this->db->get()->result();
		return $data;
	}

	function tampil_input_hasil_cetak($table)
	{
		$this->db->select('sticker.nm_sticker, sticker.no_na, id_sticker, qty_cetak, no_batch, tgl_kemas, qty_dikerjakan, status');
		$this->db->from('sticker');
		$this->db->join('jadwal_cetak', 'sticker.kd_sticker=jadwal_cetak.id_sticker');
		$data = $this->db->get();
		return $data;
	}

	function tambah_master_sticker($id_sticker, $nama_sticker, $no_na)
	{
		$table = 'sticker';
		$data = array('kd_sticker' => $id_sticker, 'nm_sticker' => $nama_sticker, 'no_na' => $no_na);
		$get_value = $this->db->insert($table, $data);
		header("location:http://localhost/inv/Admin_Cetak/master_sticker");
	}
	function tampil_master_sticker($table)
	{
		$data = $this->db->get($table);
		return $data;
	}

	function tampil_stock_sticker()
	{
		$this->db->select('stock_gudang.kode_sticker, sticker.nm_sticker, sticker.no_na, stock_gudang.qty, stock_gudang.buffer_stock');
		$this->db->from('stock_gudang');
		$this->db->join('sticker', 'stock_gudang.kode_sticker=sticker.kd_sticker');
		$data = $this->db->get()->result();
		return $data;
	}
	function tambah_hasil_cetak($no_batch)
	{
		$this->db->select('*');
		$this->db->from('sticker');
		$this->db->join('jadwal_cetak', 'sticker.kd_sticker=jadwal_cetak.id_sticker');
		$this->db->where(array('no_batch' => $no_batch));
		$data = $this->db->get("", 1)->result();
		return $data;
	}
	function proses_tambah_hasil_cetak($jumlah_cetak, $no_batch)
	{
		$this->db->set('qty_dikerjakan', $jumlah_cetak);
		$this->db->where('no_batch', $no_batch);
		$this->db->update('jadwal_cetak');

		$this->db->where('no_batch', $no_batch);
		$cek = $this->db->get('jadwal_cetak')->row();
		if ($cek) {
			if ($jumlah_cetak >= $cek->qty_cetak) {
				$this->db->set('status', 1);
				$this->db->where('no_batch', $no_batch);
				$this->db->update('jadwal_cetak');
			}
		}
		header('location:http://localhost/inv/OperatorCetak/input_qty_dikerjakan');
	}
}
