<?php

class Verifikasi extends CI_Controller
{
    function __construct(){
		parent::__construct();		

        if($this->session->userdata('status') != "login" || $this->session->userdata('peringkat') != "superadmin"){
			redirect(base_url("/"));
		}
		$this->load->model('Verifikasi_model');
	}

    public function index()
    {
        $data['Hukum'] = $this->Verifikasi_model->get_NV_data('tb_hukum');
        $data['Penanganan'] = $this->Verifikasi_model->get_NV_data('tb_penanganan');
        $data['Pencegahan'] = $this->Verifikasi_model->get_NV_data('tb_pencegahan');
        $data['Sdm'] = $this->Verifikasi_model->get_NV_data('tb_sdm');
        $this->load->helper('url');
        $this->load->view('Internal/header');
        $this->load->view('verifikasi',$data);
        $this->load->view('Internal/footer');
    }

    function hasil_verifikasi($type,$id,$devisi){
        switch ($devisi) {
            case 'Hukum':
                $table = 'tb_hukum';
            break;
            case 'Penanganan':
                $table = 'tb_penanganan';
            break;
            case 'Pencegahan':
                $table = 'tb_pencegahan';
            break;
            case 'Sdm':
                $table = 'tb_sdm';
            break;
        }
        $ArrUpdate = array(
            'Status' => urldecode($type)
        );
        $this->Verifikasi_model->update($id, $ArrUpdate,$table);
        redirect(base_url('/verifikasi'));
    }
}
