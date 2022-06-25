<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posyandu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Posyandu_model');
  }

  public function index()
  {

    $judul = [
      'title' => 'List Posyandu',
      'sub_title' => ''
    ];

    $data['data'] = $this->Posyandu_model->tampilPosyandu();

    $this->load->view('templates/header', $judul);
    $this->load->view('posyandu/index', $data);
    $this->load->view('templates/footer');
  }

  public function hapus($id)
  {

    $data = $this->db->get_where('posyandu', ['id_posyandu' => $id])->row_array();

    $this->db->where(['id_posyandu' => $id]);
    $this->db->delete('posyandu');
    $this->session->set_flashdata('success', '<strong>Berhasil Dihapus!</strong>');
    redirect(base_url('posyandu'));
  }

  public function tambah()
  {

    $this->form_validation->set_rules('nama_posyandu', 'nama_posyandu', 'required|trim');
    $this->form_validation->set_rules('alamat_posyandu', 'alamat_posyandu', 'required|trim');
    $this->form_validation->set_rules('penanggung_jawab', 'penanggung_jawab', 'required|trim');


    if ($this->form_validation->run() == FALSE) {
      $judul = [
        'title' => 'Tambah Posyandu',
        'sub_title' => ''
      ];
      $this->load->view('templates/header', $judul);
      $this->load->view('posyandu/tambah');
      $this->load->view('templates/footer');
    } else {
      $nama_posyandu =  $this->input->post("nama_posyandu", TRUE);
      $alamat_posyandu =  $this->input->post("alamat_posyandu", TRUE);
      $penanggung_jawab = $this->input->post("penanggung_jawab", TRUE);

      $save = [
        'nama_posyandu ' => $nama_posyandu,
        'alamat_posyandu' => $alamat_posyandu,
        'penanggung_jawab' => $penanggung_jawab,

      ];

      $this->db->insert('posyandu', $save);
      $this->session->set_flashdata('success', '<strong>Berhasil Ditambahkan!</strong>');
      redirect(base_url("posyandu"));
    }
  }

  public function edit($id)
  {
    $this->form_validation->set_rules('nama_posyandu', 'nama_posyandu', 'required|trim');
    $this->form_validation->set_rules('alamat_posyandu', 'alamat_posyandu', 'required|trim');
    $this->form_validation->set_rules('penanggung_jawab', 'penanggung_jawab', 'required|trim');



    if ($this->form_validation->run() == FALSE) {
      $judul = [
        'title' => 'Edit Posyandu',
        'sub_title' => ' '
      ];

      $data['posyandu'] = $this->db->get_where('posyandu', ['id_posyandu' => $id])->row_array();
      $this->load->view('templates/header', $judul);
      $this->load->view('posyandu/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $nama_posyandu =  $this->input->post("nama_posyandu", TRUE);
      $alamat_posyandu =  $this->input->post("alamat_posyandu", TRUE);
      $penanggung_jawab = $this->input->post("penanggung_jawab", TRUE);


      $update = [
        'nama_posyandu ' => $nama_posyandu,
        'alamat_posyandu' => $alamat_posyandu,
        'penanggung_jawab' => $penanggung_jawab,
      ];

      $this->db->where('id_posyandu', $id);
      $this->db->update('posyandu', $update);

      $this->session->set_flashdata("success", "<strong>Data berhasil diperbarui!</strong>");
      redirect(base_url("posyandu"));
    }
  }
}
