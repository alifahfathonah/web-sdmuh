<?php

class M_data extends CI_Model
{
    public function dataMapel()
    {
        $this->db->select('*');
        $this->db->from('mapel');
        $query = $this->db->get();
        return $query->result();
    }

    public function dataFasilitas()
    {
        $this->db->select('*');
        $this->db->from('fasilitas');
        $query = $this->db->get();
        return $query->result();
    }

    public function dataEvent()
    {
        $this->db->select('*');
        $this->db->from('event');
        $query = $this->db->get();
        return $query->result();
    }
}
