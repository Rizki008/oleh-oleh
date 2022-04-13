<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{

	public function simpan_transaksi($data)
	{
		$this->db->insert('transaksi', $data);
	}

	public function simpan_rinci($data_rinci)
	{
		$this->db->insert('rinci_transaksi', $data_rinci);
	}
}
