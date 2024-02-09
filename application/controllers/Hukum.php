<?php

class Hukum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Devisi_model');
        $this->load->model('Riwayat_Model');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("/"));
		}
        $this->_type = 'hukum';
    }

    public function index()
    {
        $data['raw_data'] = $this->Devisi_model->show_data_type($this->_type);
        $data['title'] = 'Data File Divisi Hukum & Penyelesaian Sengketa';
        $data['divisi'] = $this->_type;
        $this->load->view('Internal/header');
        $this->load->view('Divisi/index', $data);
        $this->load->view('Internal/footer');
    }

    public function edit_data($id){
        if($this->session->userdata('peringkat') == "staff"){
			redirect(base_url("/dashboard"));
		}
        $validasi = $this->Devisi_model->get_where($id,$this->_type);
        $riwayat_data = $this->Riwayat_Model->get_where($id,$this->_type);
        if (!empty($validasi)) {
            $data['dataedit'] = $validasi[0];
            $data['riwayat'] = $riwayat_data;
            
            if($this->input->post('update') != NULL ){ 
                $kode = $this->input->post('kode');
                $uraian = $this->input->post('uraian');
                $link = $this->input->post('link');

                $suadmin = ($this->session->userdata('peringkat') == "admin");

                //filesystem
                $isfile = (empty($_FILES['file']['name']));
                $filenem = $this->upload_file();
                if (!$isfile) {
                    $fileupload = array(
                        'File' => 'Hukum/'.$filenem,
                        'Link' => $link
                    );
                }else{
                    $fileupload = array(
                        'Link' => $link
                    );
                }
                $this->Devisi_model->update_file($validasi[0]->File_id,$fileupload);

                //dataupdate
                $ArrUpdate = array(
                    'Kode' => $kode,
                    'Uraian' => $uraian,
                    'Catatan' => '',
                    'Status' => ($suadmin ? 'Valid' : 'Butuh Validasi')
                );
                $riwayat = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'divisi' => $this->_type,
                    'divisi_no' => $id,
                    'kode' => $kode,
                    'nama_file' => 'Hukum/'.$filenem
                );
                $this->Devisi_model->update_data($id, $ArrUpdate);

                $this->Riwayat_Model->insert($riwayat);
                redirect(base_url('/Hukum'));
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
        if($this->session->userdata('peringkat') != "admin"){
			redirect(base_url("/dashboard"));
		}

        $validasi = $this->Devisi_model->get_where($id,$this->_type);

        if (!empty($validasi)) {
            $fileid = $validasi[0]->File_id;
            $this->Devisi_model->delete($id,$fileid);
            redirect(base_url('/Hukum'));
        }else{
            echo "data tidak ada";
        }

    }
    function upload_data(){
        if($this->session->userdata('peringkat') == "staff"){
			redirect(base_url("/dashboard"));
		}
        if ($this->input->post('upload')) {
            $data = array(); 

            $filenem = $this->upload_file();

            $kode = $this->input->post('kode');
            $uraian = $this->input->post('uraian');
            $link = $this->input->post('link');
            $suadmin = ($this->session->userdata('peringkat') == "admin");
            if (empty($kode) && empty($uraian)) {
                $data['response'] = 'Gagal!, kolom kode dan uraian kosong';

            }else if(empty($_FILES['file']['name'])){ 
                $data['response'] = 'Gagal!, File belum di pilih';

            }else if($filenem){
                $fileupload = array(
                    'File' => 'Hukum/'.$filenem,
                    'Link' => $link
                );
                $fileid = $this->Devisi_model->insert_upload_file($fileupload);
                $datainsert = array(
                    'Type' => $this->_type,
                    'user_id' => $this->session->userdata('user_id'),
                    'Tanggal' => date('Y-m-d'),
                    'Kode' => $kode,
                    'Uraian' => $uraian,
                    'File_id' => $fileid,
                    'Status' => ($suadmin ? 'Valid' : 'Butuh Validasi')
                );
                $this->Devisi_model->insert_devisi($datainsert);
                $data['response'] = 'successfully uploaded'; 
                redirect('/hukum');
            }else{
                $data['response'] = 'Gagal memasukan data !';
            }
            $this->load->view('Divisi/upload',$data);
        }else{
            $this->load->view('Divisi/upload');
        }
    }
    
    function upload_file(){
        if($this->session->userdata('peringkat') == "staff"){
			redirect(base_url("/dashboard"));
		}
        
        $config['upload_path'] = 'uploads/Hukum/'; 
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
