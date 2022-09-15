<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function total_produk()
	{
		return $this->db->get('produk')->num_rows();
	}

	public function total_pesanan()
	{
		$this->db->where('status_order=0');
		return $this->db->get('transaksi')->num_rows();
	}

	public function total_pelanggan()
	{
		return $this->db->get('pelanggan')->num_rows();
	}

	public function total_transaksi()
	{
		$this->db->from('transaksi');
		$this->db->where('status_bayar=1');
		return $this->db->get()->num_rows();
	}

	public function data_setting()
	{
		$this->db->select('*');
		$this->db->from('setting');
		$this->db->where('id', 1);
		return $this->db->get()->row();
	}

	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('setting', $data);
	}

	public function grafik()
	{
		$this->db->select('*');
		return $this->db->get('transaksi')->result();
	}

	public function data_grafik($data)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where($data);
		$this->db->group_by('produk');
		return $this->db->get()->result();
	}

	public function get_produk()
	{
		$this->db->select('distinct(nama_produk)');
	}

	public function data_stock()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('rinci_transaksi', 'produk.id_produk=rinci_transaksi.id_produk', 'left');
		$this->db->where('stock <=100');
		$this->db->order_by('stock', 'desc');
		return $this->db->get()->result();
	}

	public function status_transaksi()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		//$this->db->where('status_order=1');
		$this->db->where('status_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function status_transaksi_selesai()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		//$this->db->where('status_order=1');
		$this->db->where('status_order=3');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	//lokasi
	public function data_lokasi()
	{
		$this->db->select('*');
		$this->db->from('lokasi_toko');
		$this->db->where('id', 1);
		return $this->db->get()->row();
	}
	public function update($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('lokasi_toko', $data);
	}

	public function pelanggan()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->order_by('id_pelanggan', 'desc');
		return $this->db->get()->result();
	}
	public function user()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->order_by('id_user', 'desc');
		return $this->db->get()->result();
	}
	public function pemilik()
	{
		$this->db->select('*');
		$this->db->from('pemilik');
		$this->db->order_by('id_pemilik', 'desc');
		return $this->db->get()->result();
	}
	public function update_pemilik($data)
	{
		$this->db->where('id_pemilik', $data['id_pemilik']);
		$this->db->update('pemilik', $data);
	}

	public function add($data)
	{
		$this->db->insert('admin', $data);
	}
	public function update_user($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('admin', $data);
	}
	public function delete_user($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('admin');
	}
	public function add_pelanggan($data)
	{
		$this->db->insert('pelanggan', $data);
	}
	public function update_pelanggan($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$this->db->update('pelanggan', $data);
	}
	public function delete_pelanggan($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$this->db->delete('pelanggan');
	}

	public function grafik_produk()
	{
		$this->db->select_sum('qty');
		$this->db->select('produk.nama_produk');
		//$this->db->select('rinci_transaksi.qty');
		$this->db->from('rinci_transaksi');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->group_by('rinci_transaksi.id_produk');
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}
}
