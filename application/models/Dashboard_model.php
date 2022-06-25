<?php

class Dashboard_model extends CI_Model
{
    public function user()
    {
        return $this->db->get("user")->result_array();
    }

    public function total_gizi_buruk()
    {
        // $this->db->select('*');
        // $this->db->from('cekstunting');
        // $this->db->where('status_anak' == 'Gizi Buruk (Severely Wasted)');
        // $query = $this->db->get();
        // return $query->num_rows();

        $query = $this->db->query('SELECT * FROM cekstunting WHERE status_anak = "Gizi Buruk (Severely Wasted)"');
        echo $query->num_rows();


        // $this->db->join('anak', 'anak.id_anak = cekstunting.id_anak');
        // $query = $this->db->where('status_anak', 'Gizi Buruk (Severely Wasted)')->num_rows();
        // return $query->result_array();
        // $query = $this->db->query('SELECT * FROM cekstunting WHERE status_anak = "Gizi Buruk (Severely Wasted)"');
        // $gizi_buruk = $query->num_rows();
        // return $gizi_buruk->result_array();
        // $count = $gizi_buruk['COUNT(*)'];
    }
}
