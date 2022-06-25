<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Posyandu_model');
    }

    public function index()
    {

        $judul = [
            'title' => 'Manajemen Akun',
            'sub_title' => ''
        ];

        // $data['data'] = $this->db->get('user')->result_array();
        $data['data'] = $this->Posyandu_model->tampilDataUserPosyandu();
        $this->load->view('templates/header', $judul);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $data = $this->db->get_where('user', ['id_user' => $id])->row_array();

        unlink("./assets/profil/" . $data['photo']);

        $this->db->where(['id_user' => $id]);
        $this->db->delete('user');
        $this->session->set_flashdata('success', "<strong>Data berhasil dihapus!</strong>");
        redirect(base_url('user'));
    }

    public function tambah()
    {
        // $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('role', 'Hak Akses', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required|regex_match[/^([a-z ])+$/i]');
        $this->form_validation->set_rules('id_posyandu', 'Asal Posyandu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Tambah Akun',
                'sub_title' => ''
            ];

            $data['data'] = $this->Posyandu_model->tampilPosyandu();

            $this->load->view('templates/header', $judul);
            $this->load->view('user/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $username   = $this->input->post('username');
            $password = $this->input->post('password');
            $role = $this->input->post('role');
            $nama_user = $this->input->post('nama_user');
            $id_posyandu = $this->input->post('id_posyandu');

            // get foto
            $config['upload_path'] = './assets/profil';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = '2048';  //2MB max
            // $config['max_width'] = '800'; // pixel
            // $config['max_height'] = '800'; // pixel
            // $config['file_name'] = $_FILES['photo']['name'];
            $this->load->library('upload', $config);

            // $this->upload->initialize($config);

            if ($this->upload->do_upload('photo')) {

                $data = array('upload_data' => $this->upload->data());
                $photo = $data['upload_data']['file_name'];

                $save = [
                    'nama_user'      => $nama_user,
                    'username'       => $username,
                    'password'       => $password,
                    'role'           => $role,
                    'photo'          => $photo,
                    'id_posyandu'    => $id_posyandu

                ];

                $this->db->insert('user', $save);
                $this->session->set_flashdata('success', "<strong>Data berhasil ditambah!</strong>");
                redirect(base_url('user'));
            }
        }
    }

    public function edit($id)
    {
        // $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('role', 'Hak Akses', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required|regex_match[/^([a-z ])+$/i]');
        $this->form_validation->set_rules('id_posyandu', 'Asal Posyandu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Edit Akun',
                'sub_title' => ''
            ];

            $data['user'] = $this->Posyandu_model->get_id($id);
            $data['data_banyak'] = $this->Posyandu_model->tampilDataPosyandu();

            $this->load->view('templates/header', $judul);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $username   = $this->input->post('username');
            $password = $this->input->post('password');
            $role = $this->input->post('role');
            $nama_user = $this->input->post('nama_user');
            $id_posyandu = $this->input->post('id_posyandu');

            // $path = './assets/img/';

            // $kondisi = array('id' => $id);

            // get foto
            $config['upload_path'] = './assets/profil';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = '2048';  //2MB max
            // $config['max_width'] = '800'; // pixel
            // $config['max_height'] = '800'; // pixel
            // $config['file_name'] = $_FILES['photo']['name'];
            $this->load->library('upload', $config);

            // $this->upload->initialize($config);

            if ($this->upload->do_upload('photo')) {
                $data = $this->db->get_where('user', ['id_user' => $id])->row_array();
                unlink("./assets/profil/" . $data['photo']);

                $data = array('upload_data' => $this->upload->data());
                $photo = $data['upload_data']['file_name'];

                $update = [
                    'nama_user'      => $nama_user,
                    'username'       => $username,
                    'password'       => $password,
                    'role'           => $role,
                    'photo'          => $photo,
                    'id_posyandu'    => $id_posyandu
                ];

                $this->db->where('id_user', $id);
                $this->db->update('user', $update);

                $this->session->set_flashdata('success', "<strong>Data berhasil diperbarui!<strong>");
                redirect(base_url('user'));
            } else {
                $update = [
                    'nama_user'      => $nama_user,
                    'username'       => $username,
                    'password'       => $password,
                    'role'           => $role,
                    'id_posyandu'    => $id_posyandu
                ];

                $this->db->where('id_user', $id);
                $this->db->update('user', $update);

                $this->session->set_flashdata('success', "<strong>Data berhasil diperbarui</strong>");
                redirect(base_url('user'));
            }
        }
    }
}
