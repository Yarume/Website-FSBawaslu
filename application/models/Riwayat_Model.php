<?php

class Riwayat_Model extends CI_Model
{
    private $_tables = 'tb_logfile';

    function getAlllogFile()
    {
        $query = $this->db->get($this->_tables);
        return $query->result();
    }
    function insert($data)
    {
        return $this->db->insert($this->_tables, $data);
    }
    function get_where($id,$divisi){
        $query = $this->db->where('divisi_no',$id)->where('divisi',$divisi)->get($this->_tables);
        return $query->result();
    }
}
