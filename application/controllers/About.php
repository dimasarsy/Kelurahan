<?php

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'About';
        $data['active'] = 'about';

        $this->load->view('templates/header', $data);
        $this->load->view('User/about/index');
        $this->load->view('templates/footer');
    }
}