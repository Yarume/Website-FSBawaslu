<?php

class Verifikasi extends CI_Controller
{
    function __construct(){
		parent::__construct();		

        if($this->session->userdata('status') != "login" || $this->session->userdata('peringkat') != "admin"){
			redirect(base_url("/"));
		}
		$this->load->model('Verifikasi_model');
        $this->load->model('Devisi_model');
	}

    public function index()
    {
        $data['Hukum'] = $this->Verifikasi_model->get_NV_data('hukum');
        $data['Penanganan'] = $this->Verifikasi_model->get_NV_data('penanganan');
        $data['Pencegahan'] = $this->Verifikasi_model->get_NV_data('pencegahan');
        $data['Sdm'] = $this->Verifikasi_model->get_NV_data('sdm');
        $this->load->helper('url');
        $this->load->view('Internal/header');
        $this->load->view('verifikasi',$data);
        $this->load->view('Internal/footer');
    }

    function tolak_catatan($id,$devisi){
        $devisi = strtolower($devisi);
        $raw = $this->Devisi_model->get_where($id,$devisi);
        $data['data'] = $raw[0];
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
        $ArrUpdate = array(
            'Status' => urldecode($type),
            'Catatan' => $catatan
        );
        $this->Verifikasi_model->update($id, $ArrUpdate,strtolower($devisi));
        redirect(base_url('/verifikasi'));
    }
}
