<?php

class Home_model extends CI_Model
{
    public function ambil_data_galeri()
    {
        return $this->db->get("galeri", 3)->result_array(); //ini untuk menampilkan galeri hanya 3 data
    }

    public function popup($id)
    {
        return $this->db->get_where('galeri', ['id_galeri' => $id])->row_array();
    }

    // public function popup($id)
    // {
    //     $popup = $this->input->post('popup');

    //     $this->db->set('galeri', $popup);

    //     $this->db->where('id_galeri', $id);
    // }
}
