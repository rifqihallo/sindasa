<?php

class Cek_model extends CI_Model
{
  public function ambil_data_anak()
  {
    return $this->db->get("anak")->result();
  }

  public function ambil_keyword($keyword)
  {
    $this->db->select('*');
    $this->db->from('cekstunting');
    $this->db->join('anak', 'cekstunting.id_anak = anak.id_anak');
    $this->db->like('nama_anak', $keyword);
    $this->db->order_by('tgl_cek_stunting', 'DESC'); //Urutin data berdasarkan tgl_cek_Stunting yg terbaru
    return $this->db->get()->result_array();
    // $query = $this->db->get_where('cekstunting', ['id_cek' => $keyword])->row_array();
    // return $query;
  }
}
