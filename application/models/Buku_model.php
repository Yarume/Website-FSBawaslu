<?php

class Buku_model extends CI_Model
{
    private $_tables = 'tb_buku';

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
    function count_data(){
        return $this->db->where('Status','Valid')->from($this->_tables)->count_all_results();
    }
}
