<?php

class Gizi_model extends CI_Model
{
    public function GiziLakiLaki($umur)
    {
        return $this->db->get_where(
            'gizilk',
            array(
                'umur' => $umur
            )
        )->row();
    }

    public function GiziPerempuan($umur)
    {
        return $this->db->get_where(
            'gizipr',
            array(
                'umur' => $umur
            )
        )->row();
    }
}
