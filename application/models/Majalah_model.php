<?php

class Majalah_model extends CI_Model
{
    private $_tables = 'tb_majalah';

    function show_all_data()
    {
        $query = $this->db->get($this->_tables);
        return $query->result();
    }
    function get_where($id){
        $query = $this->db->where('id',$id)->get($this->_tables);
        return $query->result();
    }
    function insert($data)
    {
        return $this->db->insert($this->_tables, $data);
    }
}
