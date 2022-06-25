<?php

class Anak_model extends CI_Model
{
    public function tampilDataAnak()
    {
        $this->db->select('*');
        $this->db->from('anak');
        $this->db->order_by('nama_anak', 'ASC'); //Urutin data berdasarkan nama anak dari A->Z
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tampilNama()
    {
        return $this->db->get('anak')->result_array();
    }

    public function tampilIndex($id)
    {
        // $this->db->select('*');
        // $this->db->from('anak');
        $this->db->join('cekstunting', 'cekstunting.id_cek = anak.id_anak');
        $query = $this->db->get();
        return $query->result();
        // return $this->db->query("SELECT * FROM anak WHERE id_anak");
    }

    public function cek_anak($id)
    {
        return $this->db->get_where('anak', array('id_anak' => $id));
    }
}
