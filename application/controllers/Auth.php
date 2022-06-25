<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        if ($this->session->userdata('id_user') == TRUE) {
            redirect(base_url("dashboard"));
        }
    }

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $user =  $this->input->post("username", TRUE);
            $pass =  $this->input->post("password", TRUE);

            $where = [
                'username' => $user,
                'password' => $pass
            ];

            $cek = $this->auth->cek_pengguna($where)->num_rows();

            if ($cek <= 0) {
                $this->session->set_flashdata('gagal', 'Username atau Password Anda Salah!');
                redirect(base_url("auth/login"));
            } else {
                $cek_akun = $this->auth->cek_akun($where)->row_array();
                $id_user = $cek_akun["id_user"];
                $role = $cek_akun["role"];

                $data_session = array(
                    'id_user' => $id_user,
                    'role' => $role
                );

                $this->session->set_userdata($data_session);

                redirect(base_url("dashboard"));
            }
        }
    }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect(base_url('auth/login'));
    // }
}
