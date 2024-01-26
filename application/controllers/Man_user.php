<?php

class Man_user extends CI_Controller
{
    function __construct(){
		parent::__construct();
        if($this->session->userdata('status') != "login" || $this->session->userdata('peringkat') != "superadmin"){
			redirect(base_url("/"));
		}
		$this->load->model('Auth_model');
	}
    function index(){
        $data['showdata'] = $this->Auth_model->show_data_user();
        $this->load->view('Internal/header');
        $this->load->view('auth/man_user',$data);
        $this->load->view('Internal/footer');
    }

    function tambah_user(){
        $this->load->view('tambah_user');
    }
}