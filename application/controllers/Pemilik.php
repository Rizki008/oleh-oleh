<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'total_pelanggan' => $this->m_admin->total_pelanggan(),
			'total_produk' => $this->m_admin->total_produk(),
			'total_pembayaran' => $this->m_admin->total_transaksi(),
			'total_pesanan' => $this->m_admin->total_pesanan(),
			'grafik' => $this->m_admin->grafik_produk(),
			'isi' => 'v_pemilik'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	//pemilik
	public function pemilik_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diiis'));

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->pemilik_login->login($username, $password);
		} else {
			$data = array(
				'title' => 'Login Pemilik',
			);
			$this->load->view('v_login_pemilik', $data, FALSE);
		}
	}

	public function logout_pemilik()
	{
		$this->pemilik_login->logout();
	}

	//user
	public function user()
	{
		$data = array(
			'title' => 'Data User',
			'user' => $this->m_admin->user(),
			'pemilik' => $this->m_admin->pemilik(),
			'isi' => 'layout/pemilik/user/v_user'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	//crud user
	public function add()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
		$this->m_admin->add($data);
		$this->session->set_flashdata('pesan', 'Data Berasil Ditambah');
		redirect('pemilik/user');
	}

	public function update($id_user = NULL)
	{
		$data = array(
			'id_user' => $id_user,
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->m_admin->update_user($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
		redirect('pemilik/user');
	}

	public function delete($id_user = NULL)
	{
		$data = array(
			'id_user' => $id_user,
		);
		$this->m_admin->delete_user($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('pemilik/user');
	}
}
