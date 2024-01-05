<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('Auth_model');
	}

	public function index()
	{		
		if($this->session->userdata('status') == "login"){
			redirect(base_url("/dashboard"));
		}
		if (!isset($_POST['login'])) {
			return $this->load->view('login');
		}
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->Auth_model->validate($username,$password)){
			redirect(base_url('/dashboard'));
		}else{
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}
		$this->load->view('login');
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}


}
