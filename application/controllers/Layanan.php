<?php

class Layanan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Kelurahan Palmerah | Layanan';
        $this->load->view('templates/header', $data);
        $this->load->view('User/layanan/index');
        $this->load->view('templates/footer');
    }
}
