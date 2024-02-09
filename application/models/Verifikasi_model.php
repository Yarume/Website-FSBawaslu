<?php

class Verifikasi_model extends CI_Model
{
    private $_tables = 'tb_devisi';
    private $_table_upfile = 'tb_upload_file';

    function get_NV_data($type){
        $query = $this->db
                    ->select('*')
                    ->where('Type',$type)
                    ->where('Status','Butuh Validasi')
                    ->from($this->_tables)
                    ->join($this->_table_upfile, ''.$this->_tables.'.File_id = '.$this->_table_upfile.'.id')
                    ->get();
        return $query->result();
    }

    function update($id,$data,$devisi)
    {
        $this->db->where('No', $id);
        return $this->db->update($this->_tables, $data);
    }

}
