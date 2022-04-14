<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	public function produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->where('stock>=1');
		$this->db->order_by('id_produk', 'desc');
		$this->db->limit(20);
		return $this->db->get()->result();
	}

	public function kategori_produk()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get()->result();
	}

	public function detail_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->where('id_produk', $id_produk);

		return $this->db->get()->row();
	}

	public function gambar_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->result();
	}

	public function kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id_kategori);
		return $this->db->get()->row();
	}

	public function produk_all($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->where('produk.id_kategori', $id_kategori);
		return $this->db->get()->result();
	}

	public function related_products($id_produk)
	{
		return $this->db->where(array('id_produk !=' => $id_produk))->limit(4)->get('produk')->result();
	}
}
