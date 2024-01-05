<?php

class Dashboard extends CI_Controller
{
    function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');

		$this->load->model('Hukum_model');
		$this->load->model('Penanganan_model');
		$this->load->model('Pencegahan_model');
		$this->load->model('Sdm_model');
		$this->load->model('Buku_model');
		$this->load->model('Majalah_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("/"));
		}
		
	}
	function index(){
		$data['Hukum'] = $this->Hukum_model->getAllHukum();
        $data['Penanganan'] = $this->Penanganan_model->getAllPenanganan();
        $data['Pencegahan'] = $this->Pencegahan_model->getAllPencegahan();
        $data['Sdm'] = $this->Sdm_model->getAllSdm();
		$data['Buku'] = $this->Buku_model->show_all_data();
		$data['Majalah'] = $this->Majalah_model->show_all_data();
		$this->load->view('Internal/header');
        $this->load->view('Internal/dashboard',$data);
        $this->load->view('Internal/footer');
	}
}
