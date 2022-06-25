<?php

class Stunting_model extends CI_Model
{
  public function tampilDataStunting()
  {
    $this->db->select('*');
    $this->db->from('cekstunting');
    $this->db->join('anak', 'cekstunting.id_anak = anak.id_anak');
    $this->db->order_by('tgl_cek_stunting', 'DESC'); //Urutin data berdasarkan tgl_cek_Stunting yg terbaru
    $query = $this->db->get();
    return $query->result_array();
  }

  public function tampilId($id)
  {
    $this->db->select('*');
    $this->db->from('cekstunting');
    $this->db->join('anak', 'cekstunting.id_anak = anak.id_anak');
    $query = $this->db->get_where('cekstunting', ['id_cek' => $id])->row_array();
    return $query->result_array();
  }
}
