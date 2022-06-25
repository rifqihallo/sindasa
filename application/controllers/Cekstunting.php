<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cekstunting extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cek_model', 'cek');
  }

  public function index()
  {
    $judul = [
      'title' => 'Cek Status',
      'sub_title' => ''
    ];

    $this->load->view('frontend/header2', $judul);
    $this->load->view('frontend/cekhasil');
    $this->load->view('frontend/footer2');
  }

  public function cari()
  {
    $judul = [
      'title' => 'Hasil Status',
      'sub_title' => ''
    ];

    $keyword = $this->input->post('keyword');
    $data['data'] = $this->cek->ambil_keyword($keyword);

    $this->load->view('frontend/header2', $judul);
    $this->load->view('frontend/result', $data);
    $this->load->view('frontend/footer2');
  }
}
