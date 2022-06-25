<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gizipr2 extends CI_Controller
{

  public function index()
  {

    $judul = [
      'title' => 'Tabel Gizi Anak Perempuan',
      'sub_title' => ''
    ];

    $data['data'] = $this->db->get('gizipr')->result_array();
    $this->load->view('templates/header', $judul);
    $this->load->view('gizipr2/index', $data);
    $this->load->view('templates/footer');
  }

  public function hapus($id)
  {

    $data = $this->db->get_where('gizipr', ['id_gizipr' => $id])->row_array();

    $this->db->where(['id_gizipr' => $id]);
    $this->db->delete('gizipr');
    $this->session->set_flashdata('success', '<strong>Berhasil Dihapus!</strong>');
    redirect(base_url('gizipr2'));
  }

  public function tambah()
  {

    $this->form_validation->set_rules('umur', 'umur', 'required|trim');
    $this->form_validation->set_rules('min_tiga', 'min_tiga', 'required|trim');
    $this->form_validation->set_rules('min_dua', 'min_dua', 'required|trim');
    $this->form_validation->set_rules('min_satu', 'min_satu', 'required|trim');
    $this->form_validation->set_rules('median', 'median', 'required|trim');
    $this->form_validation->set_rules('plus_satu', 'plus_satu', 'required|trim');
    $this->form_validation->set_rules('plus_dua', 'plus_dua', 'required|trim');
    $this->form_validation->set_rules('plus_tiga', 'plus_tiga', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $judul = [
        'title' => 'Tambah Tabel Gizi Anak Perempuan',
        'sub_title' => ''
      ];
      $this->load->view('templates/header', $judul);
      $this->load->view('gizipr2/tambah');
      $this->load->view('templates/footer');
    } else {
      $umur =  $this->input->post('umur', TRUE);
      $min_tiga =  $this->input->post('min_tiga', TRUE);
      $min_dua = $this->input->post('min_dua', TRUE);
      $min_satu =  $this->input->post('min_satu', TRUE);
      $median =  $this->input->post('median', TRUE);
      $plus_satu = $this->input->post('plus_satu', TRUE);
      $plus_dua = $this->input->post('plus_dua', TRUE);
      $plus_tiga = $this->input->post('plus_tiga', TRUE);

      $save = [
        'umur ' => $umur,
        'min_tiga' => $min_tiga,
        'min_dua' => $min_dua,
        'min_satu ' => $min_satu,
        'median' => $median,
        'plus_satu' => $plus_satu,
        'plus_dua' => $plus_dua,
        'plus_tiga' => $plus_tiga,
      ];

      $this->db->insert('gizipr', $save);
      $this->session->set_flashdata('success', '<strong>Berhasil Ditambahkan!</strong>');
      redirect(base_url('gizipr2'));
    }
  }

  public function edit($id)
  {
    $this->form_validation->set_rules('umur', 'umur', 'required|trim');
    $this->form_validation->set_rules('min_tiga', 'min_tiga', 'required|trim');
    $this->form_validation->set_rules('min_dua', 'min_dua', 'required|trim');
    $this->form_validation->set_rules('min_satu', 'min_satu', 'required|trim');
    $this->form_validation->set_rules('medium', 'medium', 'required|trim');
    $this->form_validation->set_rules('plus_satu', 'plus_satu', 'required|trim');
    $this->form_validation->set_rules('plus_dua', 'plus_dua', 'required|trim');
    $this->form_validation->set_rules('plus_tiga', 'plus_tiga', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $judul = [
        'title' => 'Edit Tabel Gizi Anak Perempuan',
        'sub_title' => ' '
      ];

      $data['gizipr'] = $this->db->get_where('gizipr', ['id_gizipr' => $id])->row_array();
      $this->load->view('templates/header', $judul);
      $this->load->view('gizipr2/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $umur =  $this->input->post('umur', TRUE);
      $min_tiga =  $this->input->post('min_tiga', TRUE);
      $min_dua = $this->input->post('min_dua', TRUE);
      $min_satu =  $this->input->post('min_satu', TRUE);
      $median =  $this->input->post('median', TRUE);
      $plus_satu = $this->input->post('plus_satu', TRUE);
      $plus_dua = $this->input->post('plus_dua', TRUE);
      $plus_tiga = $this->input->post('plus_tiga', TRUE);

      $update = [
        'umur ' => $umur,
        'min_tiga' => $min_tiga,
        'min_dua' => $min_dua,
        'min_satu ' => $min_satu,
        'median' => $median,
        'plus_satu' => $plus_satu,
        'plus_dua' => $plus_dua,
        'plus_tiga' => $plus_tiga,
      ];

      $this->db->where('id_gizipr', $id);
      $this->db->update('gizipr', $update);

      $this->session->set_flashdata('success', '<strong>Data berhasil diperbarui!</strong>');
      redirect(base_url('gizipr2'));
    }
  }
}
