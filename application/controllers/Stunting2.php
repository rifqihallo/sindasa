<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stunting2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->load->model('Stunting_model');
        $this->load->model('Anak_model');
        $this->load->model('Gizi_model');
    }

    public function index()
    {
        $judul = [
            'title' => 'Manajemen Cek Stunting',
            'sub_title' => ''
        ];

        // $data['data'] = $this->db->get('cekstunting')->result_array();
        $data['data'] = $this->Stunting_model->tampilDataStunting();

        // $data = $this->db->query("SELECT cekstunting.*,DATE_FORMAT(tgl_cek_stunting,'%d-%m-%Y %H:%i:%s') AS Tanggal Cek Stunting FROM cekstunting ORDER BY id_cek DESC");

        $this->load->view('templates/header', $judul);
        $this->load->view('stunting2/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $data = $this->db->get_where('cekstunting', ['id_cek' => $id])->row_array();

        $this->db->where(['id_cek' => $id]);
        $this->db->delete('cekstunting');
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect(base_url('stunting2'));
    }

    public function tambah()
    {
        $this->form_validation->set_rules('id_anak', 'Nama Anak', 'required');
        // $this->form_validation->set_rules('id_anak', 'Umur', 'required');
        // $this->form_validation->set_rules('id_anak', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tb', 'Tinggi Badan', 'required|numeric|trim');
        $this->form_validation->set_rules('bb', 'Berat Badan', 'required|numeric|trim');
        // $this->form_validation->set_rules('tgl_cek_stunting', 'Tanggal Cek Stunting', 'required');
        // $this->form_validation->set_rules('status_anak', 'Status Anak', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Cek Status Anak',
                'sub_title' => ''
            ];

            $data['data'] = $this->Anak_model->tampilNama();
            // $data['anak'] = $this->Stunting_model->tampilDataStunting();
            $this->load->view('templates/header', $judul);
            $this->load->view('stunting2/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data_anak = $this->Anak_model->cek_anak($this->input->post('id_anak'))->row();

            $data_input = array(
                'id_anak' => $this->input->post('id_anak'),
                'tb' => $this->input->post('tb'),
                'bb' => $this->input->post('bb'),
                'status_anak' => ''
            );

            // Perhitungan Status Gizi
            $tb_m = $this->input->post('tb') / 100; // tb dikonversi dari cm ke m
            $perhitungan_imt = $this->input->post('bb') / ($tb_m * $tb_m); // imt anak = bb : tb^2

            // Status Gizi Anak Perempuan
            if ($data_anak->jk_anak == 'Perempuan') {
                $data_gizi = $this->Gizi_model->GiziPerempuan($data_anak->umur); // manggil umur
                $hasil = ($perhitungan_imt - $data_gizi->median); // IMT Anak - IMT Median
                if ($hasil < 0) { // jika hasil (IMT Anak - IMT Median) kurang dari 0
                    $hasil = $hasil / ($data_gizi->median - $data_gizi->min_satu); // rumus imt|u z-score = (IMT Anak - IMT Median) / (IMT Median - (-1SD))
                } else { // jika hasil (IMT Anak - IMT Median) lebih dari 0
                    $hasil = $hasil / ($data_gizi->plus_satu - $data_gizi->median); // rumus imt|u z-score = (IMT Anak - IMT Median) / ((+1SD) - IMT Median)
                }
                echo $hasil;
                if ($hasil < -3) {
                    $data_input['status_anak'] = 'Gizi Buruk (Severely Wasted)';
                } else if ($hasil >= -3 && $hasil < -2) {
                    $data_input['status_anak'] = 'Gizi Kurang (Wasted)';
                } else if ($hasil >= -2 && $hasil <= 1) {
                    $data_input['status_anak'] = 'Gizi Baik (Normal)';
                } else if ($hasil > 1 && $hasil <= 2) {
                    $data_input['status_anak'] = 'Beresiko Overweight';
                } else if ($hasil > 2 && $hasil <= 3) {
                    $data_input['status_anak'] = 'Gizi Lebih (Overweight)';
                } else if ($hasil > 3) {
                    $data_input['status_anak'] = 'Obesitas';
                }

                // Status Gizi Anak Laki-Laki
            } else {
                $data_gizi = $this->Gizi_model->GiziLakiLaki($data_anak->umur);
                $hasil = ($perhitungan_imt - $data_gizi->median);
                if ($hasil < 0) {
                    $hasil = $hasil / ($data_gizi->median - $data_gizi->min_satu);
                } else {
                    $hasil = $hasil / ($data_gizi->plus_satu - $data_gizi->median);
                }
                echo $hasil;
                if ($hasil < -3) {
                    $data_input['status_anak'] = 'Gizi Buruk (Severely Wasted)';
                } else if ($hasil >= -3 && $hasil < -2) {
                    $data_input['status_anak'] = 'Gizi Kurang (Wasted)';
                } else if ($hasil >= -2 && $hasil <= 1) {
                    $data_input['status_anak'] = 'Gizi Baik (Normal)';
                } else if ($hasil > 1 && $hasil <= 2) {
                    $data_input['status_anak'] = 'Beresiko Overweight';
                } else if ($hasil > 2 && $hasil <= 3) {
                    $data_input['status_anak'] = 'Gizi Lebih (Overweight)';
                } else if ($hasil > 3) {
                    $data_input['status_anak'] = 'Obesitas';
                }
            }

            $id_anak =  $this->input->post('id_anak');
            // $umur =  $this->input->post('umur');
            // $jk_anak = $this->input->post('jk_anak');
            $tb =  $this->input->post('tb');
            $bb =  $this->input->post('bb');
            // $tgl_cek_stunting =  $this->input->post('tgl_cek_stunting');
            // $status_anak =  $this->input->post('status_Anak');

            // $save = [
            //     'id_anak' => $id_anak,
            //     // 'umur' => $umur,
            //     // 'jk_anak' => $jk_anak,
            //     'tb' => $tb,
            //     'bb' => $bb,
            //     // 'tgl_cek_stunting' => $tgl_cek_stunting,
            //     // 'status_anak' => $status_anak,

            // ];

            $this->db->insert('cekstunting', $data_input);
            $this->session->set_flashdata('success', 'Status anak tersebut adalah <i>' . $data_input['status_anak'] . '</i>');
            redirect(base_url('stunting2'));
        }
    }
}
