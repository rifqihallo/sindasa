<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home_model', 'home');
  }

  public function index()
  {
    $judul = [
      'title' => 'Galeri',
      'sub_title' => ''
    ];

    $data['galeri'] = $this->db->get('galeri')->result_array();
    $this->load->view('frontend/header2', $judul);
    $this->load->view('frontend/galeri', $data);
    $this->load->view('frontend/footer2', $data);
  }
}
