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
}
