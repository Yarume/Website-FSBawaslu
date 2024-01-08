<?php

class Sdm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sdm_model');
        $this->load->model('Riwayat_Model');

        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("/"));
		}
    }

    public function index()
    {
        $data['raw_data'] = $this->Sdm_model->getAllSdm();
        $data['title'] = 'Data File Divisi SDM, Organisasi, Pendidikan & Pelatihan';
        $data['divisi'] = 'sdm';
        $this->load->view('Internal/header');
        $this->load->view('Divisi/index', $data);
        $this->load->view('Internal/footer');
    }

    public function upload_data()
    {
        if($this->session->userdata('peringkat') == "guest"){
			redirect(base_url("/dashboard"));
		}
        if ($this->input->post('upload')) {
            $data = array(); 

            $filenem = $this->upload_file();

            $kode = $this->input->post('kode');
            $uraian = $this->input->post('uraian');
            $link = $this->input->post('link');
            $suadmin = ($this->session->userdata('peringkat') == "superadmin");

            if (empty($kode) && empty($uraian)) {
                $data['response'] = 'Gagal!, kolom kode dan uraian kosong';

            }else if(empty($_FILES['file']['name'])){ 
                $data['response'] = 'Gagal!, File belum di pilih';

            }else if($filenem){
                $datainsert = array(
                    'username' => $this->session->userdata('username'),
                    'Tanggal' => date('Y-m-d'),
                    'Kode' => $kode,
                    'Uraian' => $uraian,
                    'File' => 'Sdm/'.$filenem,
                    'link' => $link,
                    'Status' => ($suadmin ? 'Valid' : 'Butuh Validasi')
                );
                $this->Sdm_model->insert($datainsert);
                $data['response'] = 'successfully uploaded'; 
                redirect('/Sdm');
            }else{
                $data['response'] = 'Gagal memasukan data !';
            }
            $this->load->view('Divisi/upload', $data);
        }else{
            $this->load->view('Divisi/upload');
        }
    }

    public function edit_data($id){
        if($this->session->userdata('peringkat') == "guest"){
			redirect(base_url("/dashboard"));
		}
        $validasi = $this->Sdm_model->get_where($id);
        $riwayat_data = $this->Riwayat_Model->get_where($id,'Sdm');
        if (!empty($validasi)) {
            $data['dataedit'] = $validasi[0];
            $data['riwayat'] = $riwayat_data;
            
            if($this->input->post('update') != NULL ){ 
                $kode = $this->input->post('kode');
                $uraian = $this->input->post('uraian');
                $link = $this->input->post('link');
                $suadmin = ($this->session->userdata('peringkat') == "superadmin");
                if (!empty($_FILES['file']['name'])) {
                    $filenem = $this->upload_file();
                    $ArrUpdate = array(
                        'Kode' => $kode,
                        'Uraian' => $uraian,
                        'File' => 'Sdm/'.$filenem,
                        'link' => $link,
                        'Catatan' => '',
                        'Status' => ($suadmin ? 'Valid' : 'Butuh Validasi')
                    );
                    $riwayat = array(
                        'username' => $this->session->userdata('username'),
                        'divisi' => 'Sdm',
                        'divisi_no' => $id,
                        'kode' => $kode,
                        'nama_file' => 'Sdm/'.$filenem
                    );
                    $this->Riwayat_Model->insert($riwayat);
                }else{
                    $ArrUpdate = array(
                        'Kode' => $kode,
                        'Uraian' => $uraian,
                        'link' => $link,
                        'Catatan' => '',
                        'Status' => ($suadmin ? 'Valid' : 'Butuh Validasi')
                    );
                }
                $this->Sdm_model->update($id, $ArrUpdate);
                redirect(base_url('/Sdm'));
            }
            //load view
            $this->load->view('Internal/header');
            $this->load->view('Divisi/edit',$data);
            $this->load->view('Internal/footer');
        }else{
            echo "data tidak ada";
        }
    }
    public function delete_data($id){
        $validasi = $this->Sdm_model->get_where($id);
        if (!empty($validasi)) {
            $this->Sdm_model->delete($id);
            redirect(base_url('/Sdm'));
        }else{
            echo "data tidak ada";
        }
    }

    function upload_file(){
        if($this->session->userdata('peringkat') == "guest"){
			redirect(base_url("/dashboard"));
		}
        
        $config['upload_path'] = 'uploads/Sdm/'; 
        $config['allowed_types'] = 'pdf|jpg|jpeg|png'; 
        $config['max_size'] = '5000'; // max_size in kb 
        $config['file_name'] = $_FILES['file']['name']; 

        $this->load->library('upload',$config); 
        if($this->upload->do_upload('file')){ 
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name']; 
            return $filename;
        }else{ 
            return FALSE;
        } 
                
    }
}
