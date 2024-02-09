<?php

class Devisi_model extends CI_Model
{
    private $_tables = 'tb_devisi';
    private $_table_upfile = 'tb_upload_file';

    function show_all_data()
    {
        $query = $this->db
                    ->select('*')
                    ->get();
        return $query->result();
    }
    function show_data_type($type){
        $query = $this->db
                    ->select('*')
                    ->where('Type',$type)
                    ->from($this->_tables)
                    ->join($this->_table_upfile, ''.$this->_tables.'.File_id = '.$this->_table_upfile.'.id')
                    ->get();
        return $query->result();
    }
    function get_where($id,$type){
        $query = $this->db
                    ->select('*')
                    ->where(''.$this->_tables.'.Type', $type)
                    ->where(''.$this->_tables.'.No', $id)
                    ->from($this->_tables)
                    ->join($this->_table_upfile, ''.$this->_tables.'.File_id = '.$this->_table_upfile.'.id')
                    ->get();
        return $query->result();
    }
    function insert_devisi($data)
    {
        return $this->db->insert($this->_tables, $data);
    }
    function insert_upload_file($data)
    {
        $this->db->insert($this->_table_upfile, $data);
        return $this->db->insert_id();
    }
    function count_data_type($type){
        return $this->db->where('Status','Valid')->where('Type',$type)->from($this->_tables)->count_all_results();
    }
    function delete($dataid,$fileid)
    {
        $this->db->delete($this->_tables, array("No" => $dataid));
        $this->db->delete($this->_table_upfile, array("id" => $fileid));
    }
    function update_data($id,$data)
    {
        $this->db->where('No', $id);
        return $this->db->update($this->_tables, $data);
    }
    function update_file($id,$data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table_upfile, $data);
    }

}
