<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_home');
	}

	public function index()
	{
		$data = array(
			'title' => 'Toko Oleh-Oleh',
			'produk' => $this->m_produk->produk(),
			'diskon' => $this->m_produk->diskon(),
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_home->kategori($id_kategori);
		$data = array(
			'title' => $kategori->nama_kategori,
			'produk' => $this->m_home->produk_all($id_kategori),
			'isi' => 'layout/frontend/kategori/v_kategori_produk'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}



	public function detail_produk($id_produk)
	{
		$data = array(
			'title' => 'Detail Produk',
			'produk' => $this->m_home->detail_produk($id_produk),
			'related_products' => $this->m_home->related_products($id_produk),
			'isi' => 'layout/frontend/detail/v_detail'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}
