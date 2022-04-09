<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data = array(
			'title' => 'Toko Oleh-Oleh',
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}
