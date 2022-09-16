<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan_masuk');
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Pemesanan',
			'pesanan' => $this->m_pesanan_masuk->pesanan(),
			'diproses' => $this->m_pesanan_masuk->pesanan_diproses(),
			'dikirim' => $this->m_pesanan_masuk->pesanan_dikirim(),
			'selesai' => $this->m_pesanan_masuk->pesanan_selesai(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'layout/backend/transaksi/v_transaksi'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function proses($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'status_order' => 1
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di proses');
		redirect('transaksi');
	}

	public function batal($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'catatan' => $this->input->post('catatan'),
			'status_order' => 4
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Batalkan');
		redirect('transaksi');
	}

	public function kirim($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'nama_pengirim' => $this->input->post('nama_pengirim'),
			'status_order' => 2
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di kirim');
		redirect('transaksi');
	}

	public function detail($no_order)
	{
		$data = array(
			'title' => 'Pesanan',
			'pesanan_detail' => $this->m_transaksi->pesanan_detail($no_order),
			'diproses_pesanan' => $this->m_pesanan_masuk->diproses_pesanan(),
			'proses_kirim' => $this->m_pesanan_masuk->proses_kirim(),
			'isi' =>  'layout/backend/transaksi/v_detail'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
}
