<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lokasi');
		$this->load->model('m_pelanggan');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('no_tlpn', 'No Tlpn', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Registrasi Pelanggan',
				// 'provinsi' => $this->m_lokasi->provinsi(),
				'isi' => 'layout/frontend/register/v_register'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_pelanggan' => $this->input->post('nama_pelanggan'),
				// 'id_kabupaten' => $this->input->post('kabupaten'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'no_tlpn' => $this->input->post('no_tlpn'),
				'kode_pos' => $this->input->post('kode_pos'),
				'alamat' => $this->input->post('alamat'),
			);
			$this->m_pelanggan->insert($data);
			$this->session->set_flashdata('pesan', 'Registrasi Berhasil, Silahkan Untuk Login');
			redirect('pelanggan/login');
		}
	}

	// public function kabupaten()
	// {
	// 	$provinsi = $this->input->post('id_provinsi');
	// 	$kabupaten = $this->m_pelanggan->kabupaten($provinsi);
	// 	echo json_encode($kabupaten);
	// }
	// public function kecamatan()
	// {
	// 	$kabupaten = $this->input->post('id_kabupaten');
	// 	$kecamatan = $this->m_pelanggan->kabupaten($kabupaten);
	// 	echo json_encode($kecamatan);
	// }
	// public function desa()
	// {
	// 	$kecamatan = $this->input->post('id_kecamatan');
	// 	$desa = $this->m_pelanggan->kabupaten($kecamatan);
	// 	echo json_encode($desa);
	// }

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diisi'));


		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->pelanggan_login->login($username, $password);
		} else {
			$data = array(
				'title' => 'Masuk Pelanggan',
				'isi' => 'layout/frontend/login/v_login'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		}
	}

	public function logout()
	{
		$this->pelanggan_login->logout();
	}

	public function add_alamat()
	{
		$this->form_validation->set_rules('nama2', 'Nama Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('no_tlpn2', 'No Tlpn', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('kode_post2', 'Kode Pos', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('alamat2', 'Alamat', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Alamat Baru',
				'isi' => 'layout/frontend/cart/v_alamat'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_pelanggan' => $this->session->userdata('id_pelanggan'),
				'nama2' => $this->input->post('nama2'),
				'no_tlpn2' => $this->input->post('no_tlpn2'),
				'kode_post2' => $this->input->post('kode_post2'),
				'alamat2' => $this->input->post('alamat2'),
			);
			$this->m_pelanggan->insert_alamat($data);
			$this->session->set_flashdata('pesan', 'Alamat Berhasil Ditambah');
			redirect('belanja/cekout');
		}
	}
}
