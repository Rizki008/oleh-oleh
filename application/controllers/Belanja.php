<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
		// $this->load->model('m_chatting');
		$this->load->model('m_lokasi_ongkir');
	}

	public function index()
	{
		if (empty($this->cart->contents())) {
			redirect('home');
		}
		$data = array(
			'title' => 'Produk',
			'isi' => 'layout/frontend/cart/v_cart'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$redirect_page =  $this->input->post('redirect_page');
		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => $this->input->post('qty'),
			'price'   => $this->input->post('price'),
			'name'    => $this->input->post('name'),
		);

		$this->cart->insert($data);
		redirect($redirect_page, 'refresh');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('belanja');
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid' => $items['rowid'],
				'qty'   => $this->input->post($i . '[qty]'),
			);
			$this->cart->update($data);
			$i++;
		}
		$this->session->set_flashdata('pesan', 'Berhasil Diupdate');
		redirect('belanja');
	}

	public function clear()
	{
		$this->cart->destroy();
		redirect('belanja');
	}

	public function cekout()
	{
		//proteksi halaman
		$this->pelanggan_login->proteksi_halaman();

		$this->form_validation->set_rules('provinsi', 'Provinsi Penerima', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('kota', 'Kota Penerima', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('expedisi', 'Expedisi', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('paket', 'Paket', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Langsung Beli',
				// 'lokasi' => $this->m_lokasi_ongkir->lokasi(),
				'alamat' => $this->m_lokasi_ongkir->alamat(),
				'isi' => 'layout/frontend/cart/v_cekouth'
			);
			// $this->load->view('layout/frontend/v_wrapper', $data, FALSE);

			$this->load->view('layout/frontend/cart/v_cekouth', $data, FALSE);
		} else {

			$alamat2 = 'alamat2';
			$alamat2 = $this->input->post('alamat2');
			//simpan ke tabel transaksi
			if ($alamat2 == 'alamat2') {
				$data = array(
					'id_pelanggan' => $this->session->userdata('id_pelanggan'),
					// 'id_lokasi' => $this->input->post('id_lokasi'),
					'no_order' => $this->input->post('no_order'),
					'tgl_order' => date('Y-m-d'),
					'provinsi' => $this->input->post('provinsi'),
					'kota' => $this->input->post('kota'),
					'paket' => $this->input->post('paket'),
					'expedisi' => $this->input->post('expedisi'),
					'estimasi' => $this->input->post('estimasi'),
					'ongkir' => $this->input->post('ongkir'),
					'berat' => $this->input->post('berat'),
					'grand_total' => $this->input->post('grand_total'),
					'total_bayar' => $this->input->post('total_bayar'),
					'status_bayar' => '0',
					'status_order' => '0',
					'catatan' => $this->input->post('catatan'),
					'nama_pelanggan' => $this->input->post('nama_pelanggan'),
					'no_tlpn' => $this->input->post('no_tlpn'),
					'alamat' => $this->input->post('alamat'),
					'kode_pos' => $this->input->post('kode_pos'),
					'alamat2' => $this->input->post('alamat2'),
				);
				$this->m_transaksi->simpan_transaksi($data);

				//simpan ke tabel rinci transaksi
				$i = 1;
				foreach ($this->cart->contents() as $item) {
					$data_rinci = array(
						'no_order' => $this->input->post('no_order'),
						'id_produk' => $item['id'],
						'qty' => $this->input->post('qty' . $i++),
					);

					$this->m_transaksi->simpan_rinci($data_rinci);
				}
				$this->session->set_flashdata('pesan', 'Pesanan Berhasil Diproses');
				$this->cart->destroy();
				redirect('pesanan');
			} else {
				$data = array(
					'id_pelanggan' => $this->session->userdata('id_pelanggan'),
					'no_order' => $this->input->post('no_order'),
					'tgl_order' => date('Y-m-d'),
					'provinsi' => $this->input->post('provinsi'),
					'kota' => $this->input->post('kota'),
					'paket' => $this->input->post('paket'),
					'expedisi' => $this->input->post('expedisi'),
					'estimasi' => $this->input->post('estimasi'),
					'ongkir' => $this->input->post('ongkir'),
					'berat' => $this->input->post('berat'),
					'grand_total' => $this->input->post('grand_total'),
					'total_bayar' => $this->input->post('total_bayar'),
					'status_bayar' => '0',
					'status_order' => '0',
					'catatan' => $this->input->post('catatan'),
				);
				$this->m_transaksi->simpan_transaksi($data);

				//simpan ke tabel rinci transaksi
				$i = 1;
				foreach ($this->cart->contents() as $item) {
					$data_rinci = array(
						'no_order' => $this->input->post('no_order'),
						'id_produk' => $item['id'],
						'qty' => $this->input->post('qty' . $i++),
					);

					$this->m_transaksi->simpan_rinci($data_rinci);
				}
				$this->session->set_flashdata('pesan', 'Pesanan Berhasil Diproses');
				$this->cart->destroy();
				redirect('pesanan');
			}
		}
	}
}
