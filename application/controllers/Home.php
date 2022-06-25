<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model', 'home');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $judul = [
            'title' => 'Home - Sindasa',
            'sub_title' => ''
        ];

        // $data['galeri'] = $this->db->get('galeri')->result_array();
        $data['galeri_lp'] = $this->home->ambil_data_galeri();

        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/home', $data);
        $this->load->view('frontend/footer', $data);
    }

    // public function popup()
    // {
    //     $judul = [
    //         'title' => 'Galeri',
    //         'sub_title' => ''
    //     ];

    //     $data['popup'] = $this->home->popup();

    //     $this->load->view('frontend/header', $judul);
    //     $this->load->view('frontend/home', $data);
    //     $this->load->view('frontend/footer', $data);
    // }
}
