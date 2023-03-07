<?php

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Tentang Kelurahan Palmerah';
        $this->load->view('templates/header', $data);
        $this->load->view('User/about/index');
        $this->load->view('templates/footer');
    }
}
