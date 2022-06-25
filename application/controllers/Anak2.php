<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anak2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        // $this->load->model('Anak_model', 'anak');
    }

    public function index()
    {

        $judul = [
            'title' => 'Manajemen Data Anak',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('anak')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('anak2/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('anak', ['id_anak' => $id])->row_array();

        $this->db->where(['id_anak' => $id]);
        $this->db->delete('anak');
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect(base_url('anak2'));
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|regex_match[/^([a-z ])+$/i]|trim');
        $this->form_validation->set_rules('nama_anak', 'Nama Anak', 'required|regex_match[/^([a-z ])+$/i]|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|max_length[13]|numeric|trim');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('jk_anak', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('tb', 'Tinggi Badan', 'required|numeric|trim');
        // $this->form_validation->set_rules('bb', 'Berat Badan', 'required|numeric|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Tambah Data Anak',
                'sub_title' => ''
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('anak2/tambah');
            $this->load->view('templates/footer');
        } else {
            $nama_ibu =  $this->input->post('nama_ibu');
            $nama_anak =  $this->input->post('nama_anak');
            $no_hp =  $this->input->post('no_hp');
            $tmpt_lahir =  $this->input->post('tmpt_lahir');
            $tgl_lahir =  $this->input->post('tgl_lahir');
            $umur =  $this->input->post('umur');
            $jk_anak = $this->input->post('jk_anak');
            $alamat =  $this->input->post('alamat');
            // $tb =  $this->input->post('tb');
            // $bb =  $this->input->post('bb');

            $save = [
                'nama_ibu' => $nama_ibu,
                'nama_anak' => $nama_anak,
                'no_hp' => $no_hp,
                'tmpt_lahir' => $tmpt_lahir,
                'tgl_lahir' => date('d-m-Y', strtotime($tgl_lahir)),
                'umur' => $umur,
                'jk_anak' => $jk_anak,
                'alamat' => $alamat,
                // 'tb' => $tb,
                // 'bb' => $bb

            ];

            $this->db->insert('anak', $save);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
            redirect(base_url('anak2'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|regex_match[/^([a-z ])+$/i]|trim');
        $this->form_validation->set_rules('nama_anak', 'Nama Anak', 'required|regex_match[/^([a-z ])+$/i]|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|max_length[13]|numeric|trim');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('jk_anak', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('tb', 'Tinggi Badan', 'required|numeric|trim');
        // $this->form_validation->set_rules('bb', 'Berat Badan', 'required|numeric|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title'     => 'Edit Data Anak',
                'sub_title' => ''
            ];

            $data['anak'] = $this->db->get_where('anak', ['id_anak' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('anak2/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_ibu =  $this->input->post('nama_ibu');
            $nama_anak =  $this->input->post('nama_anak');
            $no_hp =  $this->input->post('no_hp');
            $tmpt_lahir =  $this->input->post('tmpt_lahir');
            $tgl_lahir =  $this->input->post('tgl_lahir');
            $umur =  $this->input->post('umur');
            $jk_anak =  $this->input->post('jk_anak');
            $alamat =  $this->input->post('alamat');
            // $tb =  $this->input->post('tb');
            // $bb =  $this->input->post('bb');

            $update = [
                'nama_ibu' => $nama_ibu,
                'nama_anak' => $nama_anak,
                'no_hp' => $no_hp,
                'tmpt_lahir' => $tmpt_lahir,
                'tgl_lahir' => date('d-m-Y', strtotime($tgl_lahir)),
                'umur' => $umur,
                'jk_anak' => $jk_anak,
                'alamat' => $alamat,
                // 'tb' => $tb,
                // 'bb' => $bb,
            ];

            $this->db->where('id_anak', $id);
            $this->db->update('anak', $update);

            $this->session->set_flashdata('success', 'Data berhasil diperbarui!');
            redirect(base_url('anak2'));
        }
    }
}
