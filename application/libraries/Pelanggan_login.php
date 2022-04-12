<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_login
{
	protected $ci;
	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->m_auth->user_login($username, $password);
		if ($cek) {
			$id_pelanggan = $cek->id_pelanggan();
			$nama_pelanggan = $cek->nama_pelanggan();
			$username = $cek->username();
			$password = $cek->password();
			$no_tlpn = $cek->no_tlpn();

			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('password', $password);
			$this->ci->session->set_userdata('no_tlpn', $no_tlpn);

			redirect('home');
		} else {
			$this->ci->session->set_flashdata('pesan', 'Username atau Password salah');
			redirect('auth/user_login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username') == '') {
			$this->ci->session->set_flashdata('pesan', 'Anda Belum Login!!!');
			redirect('pelanggan/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('id_pelanggan');
		$this->ci->session->unset_userdata('nama_pelanggan');
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('password');
		$this->ci->session->unset_userdata('no_tlpn');
		$this->ci->session->set_flashdata('pesan', 'Berhasil Logout');
		redirect('pelanggan/login');
	}
}
