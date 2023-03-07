<?php

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Kelurahan Palmerah';
        $this->load->view('templates/header', $data);
        $this->load->view('User/laporan/index');
        $this->load->view('templates/footer');
    }
}
