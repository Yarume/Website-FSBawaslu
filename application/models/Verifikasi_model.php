<?php

class Verifikasi_model extends CI_Model
{

    function get_NV_data($table){
        $query = $this->db->where('Status','Butuh Validasi')->get($table);
        return $query->result();
    }

    function update($id,$data,$devisi)
    {
        $this->db->where('No', $id);
        return $this->db->update($devisi, $data);
    }

}
