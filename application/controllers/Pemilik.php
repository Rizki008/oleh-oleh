<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi' => 'v_pemilik'
        );
        $this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
    }
    //pemilik
    public function pemilik_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diiis'));

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->pemilik_login->login($username, $password);
        } else {
            $data = array(
                'title' => 'Login Pemilik',
            );
            $this->load->view('v_login_pemilik', $data, FALSE);
        }
    }

    public function logout_pemilik()
    {
        $this->pemilik_login->logout();
    }
}
