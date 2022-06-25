<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function index()
    {

        $judul = [
            'title' => 'Galeri',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('galeri')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('galeri/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('galeri', ['id_galeri' => $id])->row_array();

        unlink("./assets/galeri/" . $data['gambar']);

        $this->db->where(['id_galeri' => $id]);
        $this->db->delete('galeri');
        $this->session->set_flashdata('success', '<strong>Berhasil Dihapus!</strong>');
        redirect(base_url('galeri'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('judul_galeri', 'judul_galeri', 'required|trim');
        $this->form_validation->set_rules('deskripsi_galeri', 'deskripsi_galeri', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Tambah Galeri',
                'sub_title' => ''
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('galeri/tambah');
            $this->load->view('templates/footer');
        } else {
            $judul_galeri =  $this->input->post("judul_galeri", TRUE);
            $deskripsi_galeri =  $this->input->post("deskripsi_galeri", TRUE);


            $config['upload_path']          = './assets/galeri';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $data = array('upload_data' => $this->upload->data());
                $gambar = $data['upload_data']['file_name'];

                $save = [
                    'judul_galeri' => $judul_galeri,
                    'deskripsi_galeri' => $deskripsi_galeri,
                    'gambar' => $gambar,

                ];

                $this->db->insert('galeri', $save);
                $this->session->set_flashdata('success', '<strong>Berhasil Ditambahkan!</strong>');
                redirect(base_url("galeri"));
            }
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('judul_galeri', 'judul_galeri', 'required|trim');
        $this->form_validation->set_rules('deskripsi_galeri', 'deskripsi_galeri', 'required|trim');



        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Edit Galeri',
                'sub_title' => ' '
            ];

            $data['galeri'] = $this->db->get_where('galeri', ['id_galeri' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('galeri/edit', $data);
            $this->load->view('templates/footer');
        } else {
            // $data = $this->db->get_where('galeri', ['id_galeri' => $id])->row_array();
            // unlink("./uploads/gambar/" . $data['gambar']);

            $judul_galeri =  $this->input->post("judul_galeri", TRUE);
            $deskripsi_galeri =  $this->input->post("deskripsi_galeri", TRUE);


            $config['upload_path']          = './assets/galeri';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data = $this->db->get_where('galeri', ['id_galeri' => $id])->row_array();
                unlink("./assets/galeri/" . $data['gambar']);

                $data = array('upload_data' => $this->upload->data());
                $gambar = $data['upload_data']['file_name'];

                $update = [
                    'judul_galeri' => $judul_galeri,
                    'deskripsi_galeri' => $deskripsi_galeri,
                    'gambar' => $gambar,


                ];

                $this->db->where('id_galeri', $id);
                $this->db->update('galeri', $update);

                $this->session->set_flashdata('success', '<strong>Berhasil Diperbarui!</strong>');
                redirect(base_url("galeri"));
            } else {
                $update = [
                    'judul_galeri' => $judul_galeri,
                    'deskripsi_galeri' => $deskripsi_galeri,


                ];

                $this->db->where('id_galeri', $id);
                $this->db->update('galeri', $update);

                $this->session->set_flashdata('success', '<strong>Berhasil Diperbarui!</strong>');
                redirect(base_url("galeri"));
            }
        }
    }
}
