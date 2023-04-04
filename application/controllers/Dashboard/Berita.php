<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        is_admin();
    }

    public function index()
    {
        $data['judul'] = "Berita";
		$data['active'] = 'berita';
		$data['activee'] = 'berita';

		$data['berita'] = $this->m_crud->read('tbl_berita');
        
        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar_admin', $data);
        $this->load->view('dashboard/templates/topbar', $data);
        $this->load->view("dashboard/berita/index", $data);
        $this->load->view('dashboard/templates/footer', $data);
    }

    function form(){
		
        is_admin();

		$data['judul'] = 'Tambah Berita';
        $data['active'] = 'berita';
        $data['activee'] = 'berita';

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar_admin', $data);
        $this->load->view('dashboard/templates/topbar', $data);
        $this->load->view("dashboard/berita/form", $data);
        $this->load->view('dashboard/templates/footer', $data);
		
	}

    function tambah(){

		$default_img = "default.jpg";
        $data['active'] = 'berita';
        $data['activee'] = 'berita';

        $berita['title']     	= $_POST['title'];
        $berita['desc']  	    = $_POST['desc'];
        $berita['category']     = $_POST['category'];

        $upload_photo= $_FILES['photo']['name'];

         if ($upload_photo) {
             $config['allowed_types'] = 'gif|jpg|png';
             $config['max_size']      = '2048';
             $config['upload_path'] = './assets/img/berita/';

             $this->load->library('upload', $config);
             $this->upload->initialize($config); 

             if ($this->upload->do_upload('photo')) {
                $old_file = $berita['tbl_warga']['photo'];
                if ($old_file != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/berita/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('photo', $new_file);
            } else {
               var_dump($this->upload->display_errors());
            }
         }

        $this->m_crud->save('tbl_berita', $berita);
        $this->session->set_flashdata('sukses', 'Buat Surat Sukses!');
        redirect(base_url("dashboard/berita"));
	}

    function detail($id){

		$title['judul'] = "Detail Berita";
		$title['active'] = 'berita';
		$title['activee'] = 'berita';

		$detail = $this->m_crud->readBy('tbl_berita', array('id'=>$id));
		$data['detail'] = $detail[0];
		$data['judul'] = $title['judul'];

		$this->load->view('dashboard/templates/header', $title);
        $this->load->view('dashboard/templates/sidebar_admin', $title);
        $this->load->view('dashboard/templates/topbar', $data);
        $this->load->view("dashboard/berita/detail", $data);
        $this->load->view('dashboard/templates/footer', $data);
	}

    function update($id){
        
        is_admin();
        
        $data['berita'] = $this->m_crud->readBy('tbl_berita', array('id'=>$id))[0];

        $data['judul'] = 'Edit Berita';
        $data['active'] = 'berita';
        $data['activee'] = 'berita';

        $data['d_category'] = CAT;

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar_admin', $data);
        $this->load->view('dashboard/templates/topbar', $data);
		$this->load->view('dashboard/berita/edit', $data);
        $this->load->view('dashboard/templates/footer', $data);
	}

	function edit_berita($id){

        $data['judul'] = 'Ubah Berita';
        // $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

        $default_img = "default.jpg";
        $data['active'] = 'berita';
        $data['activee'] = 'berita';
		// $id =  array('id'=>$id);

        $config['upload_path']   = "./assets/img/profile/";
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']      = 2048;
        
        $data = array(
            'title' => $this->input->post('title'),
            'desc' => $this->input->post('desc'),
            'category' => $this->input->post('category'),
        );

        $upload_photo= $_FILES['photo']['name'];

         if ($upload_photo) {
             $config['allowed_types'] = 'gif|jpg|png';
             $config['max_size']      = '2048';
             $config['upload_path'] = './assets/img/berita/';

             $this->load->library('upload', $config);
             $this->upload->initialize($config); 

             if ($this->upload->do_upload('photo')) {
                $old_file = $data['tbl_warga']['photo'];
                if ($old_file != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/berita/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('photo', $new_file);
            } else {
               var_dump($this->upload->display_errors());
            }
         }

        $this->db->update('tbl_berita', $data, array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been changed</div>');
        redirect(base_url("dashboard/berita/detail/$id"));

    }
	function hapus($id){
		$pesan = $this->m_crud->hard_delete('tbl_berita', array('id'=>$id));
		redirect(base_url("dashboard/berita"));
	}
    
}