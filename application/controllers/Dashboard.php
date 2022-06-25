<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');

        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url('auth/login'));
        }
    }

    public function index()
    {
        $judul = [
            'title' => 'Dashboard',
            'sub_title' => ''
        ];

        // $data['status'] = $this->Dashboard_model->total_gizi_buruk();

        // SELECT sum(jumlah) FROM (pendapatan)WHERE((Month(tgl)=1)AND (YEAR(tgl)=2014))),0) AS `Januari`

        // $gizi_buruk = $this->db->query('SELECT * FROM cekstunting WHERE status_anak="Gizi Buruk (Severely Wasted)"')->num_rows();
        // $gizi_kurang = $this->db->query('SELECT * FROM cekstunting WHERE status_anak="Gizi Kurang (Wasted)"')->num_rows();

        // $data['status'] = [$gizi_buruk, $gizi_kurang];



        $januari = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="1"')->num_rows();
        $februari = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="2"')->num_rows();
        $maret = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="3"')->num_rows();
        $april = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="4"')->num_rows();
        $mei = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="5"')->num_rows();
        $juni = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="6"')->num_rows();
        $juli = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="7"')->num_rows();
        $agustus = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="8"')->num_rows();
        $september = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="9"')->num_rows();
        $oktober = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="10"')->num_rows();
        $november = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="11"')->num_rows();
        $desember = $this->db->query('SELECT * FROM cekstunting WHERE month(tgl_cek_stunting)="12"')->num_rows();

        $data['gizi_buruk'] = [$januari, $februari, $maret, $april, $mei, $juni, $juli, $agustus, $september, $oktober, $november, $desember];

        $data2['statusAnak'] = $this->db->query('SELECT status_anak FROM cekstunting ORDER BY status_anak DESC LIMIT 1')->result_array();
        if ($data2['statusAnak'] == null) {
            $data2['statusAnak'] = 0;
        }

        $this->load->view('templates/header', $judul);
        $this->load->view('dashboard/index', $data2);
        $this->load->view('templates/footer');
    }
}
