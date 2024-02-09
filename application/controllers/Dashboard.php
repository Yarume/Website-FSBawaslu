<?php


class Dashboard extends CI_Controller
{
    function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');

		$this->load->model('Devisi_model');
		
		$this->load->model('Buku_model');
		$this->load->model('Majalah_model');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("/"));
		}
		
	}
	function index(){
		$data['Hukum'] 				= $this->Devisi_model->show_data_type('hukum');
        $data['Penanganan'] 		= $this->Devisi_model->show_data_type('penanganan');
        $data['Pencegahan'] 		= $this->Devisi_model->show_data_type('pencegahan');
        $data['Sdm'] 				= $this->Devisi_model->show_data_type('sdm');

		$data['Buku'] 				= $this->Buku_model->show_all_data();
		$data['Majalah']			= $this->Majalah_model->show_all_data();

		$data['count_hukum'] 		= $this->Devisi_model->count_data_type('hukum');
		$data['count_penanganan'] 	= $this->Devisi_model->count_data_type('penanganan');
		$data['count_pencegahan'] 	= $this->Devisi_model->count_data_type('pencegahan');
		$data['count_sdm'] 			= $this->Devisi_model->count_data_type('sdm');

		$this->load->view('Internal/header');
        $this->load->view('Internal/dashboard',$data);
        $this->load->view('Internal/footer');
	}

	function flip_book(){
		$url = $_GET['url'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 	$data = curl_exec($ch);
	 	curl_close($ch);
	 	$data1 = "base64,".base64_encode($data);
		echo $data1;
	}
	function generateRandomString() {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 50; $i++) {
			$randomString .= $characters[random_int(0, $charactersLength - 1)];
		}
		echo $randomString;
	}

	function testing(){
		$data = $this->Devisi_model->get_where(1,'hukum');
		echo $data[0]->Catatan;
	}
}
