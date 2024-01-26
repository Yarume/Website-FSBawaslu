<?php

class Pencegahan_model extends CI_Model
{
    private $_tables = 'tb_pencegahan';

    function getAllPencegahan()
    {
        if($this->session->userdata('peringkat') == "guest")
            $query = $this->db->where('Status','Valid')->get($this->_tables);
        else 
            $query = $this->db->get($this->_tables);
        return $query->result();
    }
    function get_NV_data(){
        $query = $this->db->where('Status','Butuh Validasi')->get($this->_tables);
        return $query->result();
    }
    function get_where($id){
        $query = $this->db->where('No',$id)->get($this->_tables);
        return $query->result();
    }
    function insert($data)
    {
        return $this->db->insert($this->_tables, $data);
    }

    function update($id,$data)
    {
        $this->db->where('No', $id);
        return $this->db->update($this->_tables, $data);
    }

    function delete($id)
    {
        return $this->db->delete($this->_tables, array("No" => $id));
    }
    function count_data(){
        return $this->db->where('Status','Valid')->from($this->_tables)->count_all_results();
    }
}
