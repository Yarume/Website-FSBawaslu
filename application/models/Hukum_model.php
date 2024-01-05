<?php

class Hukum_model extends CI_Model
{
    private $_tables = 'tb_hukum';

    function getAllHukum()
    {
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
}
