<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lokasi');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Lokasi',
			'provinsi' => $this->m_lokasi->provinsi(),
			'kabupaten' => $this->m_lokasi->kabupaten(),
			'isi' => 'layout/backend/lokasi/v_lokasi'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'provinsi' => $this->input->post('provinsi'),
		);
		$this->m_lokasi->add_provinsi($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
		redirect('lokasi');
	}

	//Update one item
	public function update($id_provinsi = NULL)
	{
		$data = array(
			'id_provinsi' => $id_provinsi,
			'provinsi' => $this->input->post('provinsi'),
		);
		$this->m_lokasi->edit_provinsi($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
		redirect('lokasi');
	}

	//Delete one item
	public function delete($id_provinsi = NULL)
	{
		$data = array(
			'id_provinsi' => $id_provinsi,
		);
		$this->m_lokasi->delete_provinsi($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('lokasi');
	}

	public function add_kabupaten()
	{
		$this->form_validation->set_rules('kabupaten', 'Nama Kabupaten', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('id_provinsi', 'Nama Kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'provinsi' => $this->m_lokasi->kabupaten(),
			);
		} else {
			$data = array(
				'kabupaten' => $this->input->post('kabupaten'),
				'id_provinsi' => $this->input->post('id_provinsi'),
			);
			$this->m_lokasi->add_kabupaten($data);
			$this->session->set_flashdata('pesan', 'kabupaten Berhasil Ditambahkan!!!');
			redirect('lokasi');
		}
	}
	public function update_kabupaten($id_kabupaten = NULL)
	{

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'provinsi' => $this->m_lokasi->provinsi(),
			);
		} else {
			$data = array(
				'id_kabupaten' => $id_kabupaten,
				'id_provinsi' => $this->input->post('id_provinsi'),
				'kabupaten' => $this->input->post('kabupaten'),
			);
			$this->m_lokasi->edit_kabupaten($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
			redirect('lokasi');
		}
	}

	public function delete_kabupaten($id_kabupaten = NULL)
	{
		$data = array(
			'id_kabupaten' => $id_kabupaten
		);
		$this->m_lokasi->delete_kabupaten($data);
		$this->session->set_flashdata('pesan', 'kabupaten Berhasil Didelet!!!');
		redirect('lokasi');
	}
}

/* End of file Lokasi.php */
