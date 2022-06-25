<?php

class Posyandu_model extends CI_Model
{
  public function tampilPosyandu()
  {
    $this->db->select('*');
    $this->db->from('posyandu');
    $this->db->order_by('nama_posyandu', 'ASC'); //Urutin data berdasarkan nama A->Z
    $query = $this->db->get();
    return $query->result_array();
  }

  public function tampilDataPosyandu()
  {
    $this->db->select('*');
    $this->db->from('posyandu');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function tampilDataUserPosyandu()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('posyandu', 'user.id_posyandu = posyandu.id_posyandu');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_id($id)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('posyandu', 'user.id_posyandu = posyandu.id_posyandu');
    $this->db->where('user.id_user', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
}
