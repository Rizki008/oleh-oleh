<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_lokasi_ongkir extends CI_Model
{

	public function lokasi()
	{
		$this->db->select('*');
		$this->db->from('lokasi');
		$this->db->order_by('id_lokasi', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('lokasi', $data);
	}

	public function update($data)
	{
		$this->db->where('id_lokasi', $data['id_lokasi']);
		$this->db->update('lokasi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_lokasi', $data);
		$this->db->delete('lokasi');
	}

	public function alamat()
	{
		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = alamat.id_pelanggan', 'left');
		$this->db->where('pelanggan.id_pelanggan', $this->session->userdata('id_pelanggan'));
		return $this->db->get()->result();
	}
}
