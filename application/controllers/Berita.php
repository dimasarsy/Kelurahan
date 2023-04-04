<?php

class Berita extends CI_Controller
{   public function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->library('session');
    }
    
    public function index()
    {
        $data['judul'] = 'Berita';
        $data['active'] = 'berita';
        $data['berita'] = $this->m_crud->read('tbl_berita');

        $this->load->view('templates/header', $data);
        $this->load->view('User/berita/index', $data);
        $this->load->view('templates/footer');

    }
    public function detail($id)
    {
        $title['judul'] = "Detail Berita";
		$data['active'] = 'berita';

        $this->db->select("*");
        $this->db->from("tbl_berita");
        $this->db->limit(3);
        $this->db->order_by('date',"desc");
        $this->db->where('id !=' , $id);

        $query = $this->db->get();
        $data['berita'] = $query->result();

		$detail = $this->m_crud->readBy('tbl_berita', array('id'=>$id));
		$data['detail'] = $detail[0];
		$data['judul'] = $title['judul'];

        $this->load->view('templates/header', $data);
        $this->load->view('User/berita/detail',$data);
        $this->load->view('templates/footer');
    }
}