<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}

	public function index()
	{
		$data = array(
			'title' => 'Toko Oleh-Oleh',
			'produk' => $this->m_produk->produk(),
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function detail_produk($id_produk)
	{
		$data = array(
			'title' => 'Detail Produk',
			'gambar' => $this->m_home->gambar_produk($id_produk),
			'produk' => $this->m_home->detail_produk($id_produk),
			// 'related_products' => $this->m_home->related_products($id_produk),
			// 'reviews' => $this->m_home->reviews($id_produk),
			'isi' => 'layout/frontend/detail/v_detail_produk'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}
