<?php
class Auth_model extends CI_Model
{
	private $_table = "user";
	
    function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function validate($username,$password){
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$query = $this->cek_login($this->_table,$where);
		$query2 = $query->result_array();
		if(!$query->num_rows()){
			return FALSE;
		}
		$data_session = array(
			'username' => $username,
			'status' => "login",
			'peringkat' => $query2[0]['peringkat']
			);
			$this->session->set_userdata($data_session);
		return TRUE;
	}

	function valdas_code($id){
		$query = $this->db->select('username,password,Verification_Code')->where('Verification_Code',$id)->get($this->_table);
        return $query->result();
	}

	function show_data_user(){
		$query = $this->db->select('user_id,username,peringkat,Verification_Code,email')->get($this->_table);
		return $query->result();
	}
	
	function cek_id($id){
		$query = $this->db->select('user_id,username,password,peringkat,Verification_Code,email')->where('user_id',$id)->get($this->_table);
        return $query->result();
	}

	function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    function update($id,$data)
    {
        $this->db->where('user_id', $id);
        return $this->db->update($this->_table, $data);
    }

	function recover($id,$data)
    {
        $this->db->where('Verification_Code', $id);
        return $this->db->update($this->_table, $data);
    }
	function reset_verf($id,$data)
    {
        $this->db->where('email', $id);
        return $this->db->update($this->_table, $data);
    }
    function delete($id)
    {
        return $this->db->delete($this->_table, array("user_id" => $id));
    }

	function check_email($email){
		$query = $this->db->select('email')->where('email',$email)->get($this->_table);
        return $query->result();
	}

	

}
