<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_kategori');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Produk',
			'produk' => $this->m_produk->produk(),
			'isi' => 'layout/backend/produk/v_produk'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('berat', 'Berat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('product_unit', 'Satuan Berat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('harga', 'Harga', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('stock', 'Stock', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('required' => '%s Mohon Untuk Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Tambah Produk',
					'kategori' => $this->m_kategori->kategori(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'layout/backend/produk/v_add'
				);
				$this->load->view('layout/backend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'berat' => $this->input->post('berat'),
					'product_unit' => $this->input->post('product_unit'),
					'harga' => $this->input->post('harga'),
					'stock' => $this->input->post('stock'),
					'deskripsi' => $this->input->post('deskripsi'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_produk->add($data);
				$this->session->set_flashdata('pesan', 'Produk Berhasil Ditambah');
				redirect('produk');
			}
		}
		$data = array(
			'title' => 'Tambah Produk',
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'layout/backend/produk/v_add'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function update($id_produk = NULL)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('berat', 'Berat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('product_unit', 'Satuan Berat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('harga', 'Harga', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('stock', 'Stock', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('required' => '%s Mohon Untuk Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Update Produk',
					'kategori' => $this->m_kategori->kategori(),
					'produk' => $this->m_produk->detail($id_produk),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'layout/backend/produk/v_edit'
				);
				$this->load->view('layout/backend/v_wrapper', $data, FALSE);
			} else {
				$produk = $this->m_produk->detail($id_produk);
				if ($produk->gambar !== "") {
					unlink('./assets/gambar/' . $produk->gambar);
				}
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_produk' => $id_produk,
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'berat' => $this->input->post('berat'),
					'harga' => $this->input->post('harga'),
					'product_unit' => $this->input->post('product_unit'),
					'stock' => $this->input->post('stock'),
					'deskripsi' => $this->input->post('deskripsi'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_produk->update($data);
				$this->session->set_flashdata('pesan', 'Produk Berhasil Diupdate');
				redirect('produk');
			}
			$data = array(
				'id_produk' => $id_produk,
				'nama_produk' => $this->input->post('nama_produk'),
				'id_kategori' => $this->input->post('id_kategori'),
				'berat' => $this->input->post('berat'),
				'harga' => $this->input->post('harga'),
				'product_unit' => $this->input->post('product_unit'),
				'stock' => $this->input->post('stock'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
			$this->m_produk->update($data);
			$this->session->set_flashdata('pesan', 'Produk Berhasil Diupdate');
			redirect('produk');
		}
		$data = array(
			'title' => 'Update Produk',
			'kategori' => $this->m_kategori->kategori(),
			'produk' => $this->m_produk->detail($id_produk),
			'isi' => 'layout/backend/produk/v_edit'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function delete($id_produk = null)
	{
		$produk = $this->m_produk->detail($id_produk);
		if ($produk->gambar !== "") {
			unlink('./assets/gambar/' . $produk->gambar);
		}

		$data = array(
			'id_produk' => $id_produk,
		);
		$this->m_produk->delete($data);
		$this->session->set_flashdata('pesan', 'Produk Berhasil Dihapus');
		redirect('produk');
	}

	public function diskon($id_produk = NULL)
	{
		$data = array(
			'id_produk' => $id_produk,
			'nama_diskon' => $this->input->post('nama_diskon'),
			'diskon' => $this->input->post('diskon'),
		);
		$this->m_produk->update($data);
		$this->session->set_flashdata('pesan', 'Diskon Berhasil Diupdate');
		redirect('produk');
	}
}
