<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'total_pelanggan' => $this->m_admin->total_pelanggan(),
			'total_produk' => $this->m_admin->total_produk(),
			'total_pembayaran' => $this->m_admin->total_transaksi(),
			'total_pesanan' => $this->m_admin->total_pesanan(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function lokasi()
	{
		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('kota', 'Kota', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon Untuk Diisi'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Setting',
				'lokasi' => $this->m_admin->data_lokasi(),
				'grafik' => $this->m_transaksi->grafik(),
				'isi' => 'layout/backend/lokasi/v_lokasi_toko'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id' => 1,
				'lokasi' => $this->input->post('kota'),
				'nama_toko' => $this->input->post('nama_toko'),
				'alamat' => $this->input->post('alamat'),
			);
			$this->m_admin->update($data);
			$this->session->set_flashdata('pesan', 'Lokasi Toko berhasil di update');
			redirect('admin/lokasi');
		}
	}

	public function pelanggan()
	{
		$data = array(
			'title' => 'Data Pelanggan',
			'pelanggan' => $this->m_admin->pelanggan(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'layout/backend/pelanggan/v_pelanggan'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//crud user
	public function add_pelanggan()
	{
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'alamat' => $this->input->post('alamat'),
			'kode_pos' => $this->input->post('kode_pos'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->m_admin->add_pelanggan($data);
		$this->session->set_flashdata('pesan', 'Data Berasil Ditambah');
		redirect('admin/pelanggan');
	}

	public function update_pelanggan($id_pelanggan = NULL)
	{
		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'alamat' => $this->input->post('alamat'),
			'kode_pos' => $this->input->post('kode_pos'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->m_admin->update_pelanggan($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
		redirect('admin/pelanggan');
	}

	public function delete_pelanggan($id_pelanggan = NULL)
	{
		$data = array(
			'id_pelanggan' => $id_pelanggan,
		);
		$this->m_admin->delete_pelanggan($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('admin/pelanggan');
	}

	//Pemilik
	public function pemilik()
	{
		$data = array(
			'title' => 'Data Pemilik',
			'user' => $this->m_admin->pemilik(),
			'pemilik' => $this->m_admin->pemilik(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'layout/backend/pemilik/v_pemilik'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function update_pemilik($id_pemilik = NULL)
	{
		$data = array(
			'id_pemilik' => $id_pemilik,
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'kode_post' => $this->input->post('kode_post'),
			'alamat' => $this->input->post('alamat'),
		);
		$this->m_admin->update_pemilik($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
		redirect('admin/pemilik');
	}
	//admin
	public function user()
	{
		$data = array(
			'title' => 'Data Admin',
			'user' => $this->m_admin->user(),
			'pemilik' => $this->m_admin->pemilik(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'layout/backend/user/v_user'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	//crud user
	public function add()
	{
		$data = array(
			'nama_admin' => $this->input->post('nama_admin'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'kode_post' => $this->input->post('kode_post'),
			'alamat' => $this->input->post('alamat'),
		);
		$this->m_admin->add($data);
		$this->session->set_flashdata('pesan', 'Data Berasil Ditambah');
		redirect('admin/user');
	}

	public function update($id_user = NULL)
	{
		$data = array(
			'id_user' => $id_user,
			'nama_admin' => $this->input->post('nama_admin'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'kode_post' => $this->input->post('kode_post'),
			'alamat' => $this->input->post('alamat'),
		);
		$this->m_admin->update_user($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
		redirect('admin/user');
	}

	public function delete($id_user = NULL)
	{
		$data = array(
			'id_user' => $id_user,
		);
		$this->m_admin->delete_user($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('admin/user');
	}
}
