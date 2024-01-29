<?php

class Verifikasi extends CI_Controller
{
    function __construct(){
		parent::__construct();		

        if($this->session->userdata('status') != "login" || $this->session->userdata('peringkat') != "admin"){
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
    function tolak_catatan($id,$devisi){
        $this->load->model('Hukum_model');
        $this->load->model('Penanganan_model');
        $this->load->model('Pencegahan_model');
        $this->load->model('Sdm_model');
        switch ($devisi) {
            case 'Hukum':
                $raw = $this->Hukum_model->get_where($id);
                $data['data'] = $raw[0];
            break;
            case 'Penanganan':
                $raw = $this->Penanganan_model->get_where($id);
                $data['data'] = $raw[0];
            break;
            case 'Pencegahan':
                $raw = $this->Pencegahan_model->get_where($id);
                $data['data'] = $raw[0];
            break;
            case 'Sdm':
                $raw = $this->Sdm_model->get_where($id);
                $data['data'] = $raw[0];
            break;
        }
        if($this->input->post('tolak') != NULL ){
            $catatan = $this->input->post('catatan');
            if (empty($catatan)) {
                $data['response'] = "ERROR, Alasan / Catatan harus dilengkapi";
            }else{
                $this->hasil_verifikasi("Revisi",$id,$devisi,$catatan);

            }
        } 
        $this->load->view('tolak',$data);

    }
    function hasil_verifikasi($type,$id,$devisi,$catatan = ""){
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
            'Status' => urldecode($type),
            'Catatan' => $catatan
        );
        $this->Verifikasi_model->update($id, $ArrUpdate,$table);
        redirect(base_url('/verifikasi'));
    }
}
