<?php

class Tamanpustaka extends CI_Controller
{

    function __construct(){
		parent::__construct();		

        if($this->session->userdata('status') != "login"){
			redirect(base_url("/"));
		}
		$this->load->model('Buku_model');
        $this->load->model('Majalah_model');
	}

    public function index()
    {
        $this->load->view('Internal/header');
        $this->load->view('TamanPustaka/index');
        $this->load->view('Internal/footer');
    }

    public function buku()
    {
        $data['raw_data'] = $this->Buku_model->show_all_data();
        $this->load->view('Internal/header');
        $this->load->view('TamanPustaka/Buku/buku', $data);
        $this->load->view('Internal/footer');
    }

    public function majalah()
    {
        $data['raw_data'] = $this->Majalah_model->show_all_data();
        $this->load->view('Internal/header');
        $this->load->view('TamanPustaka/Majalah/majalah', $data);
        $this->load->view('Internal/footer');
    }

    public function uploadbuku()
    {
        if($this->session->userdata('peringkat') == "staff"){
			redirect(base_url("/dashboard"));
		}
        if ($this->input->post('upload')) {
            $data = array(); 

            $filenem = $this->upload_file('TamanPustaka/Buku');

            $nama = $this->input->post('nama');
            $penulis = $this->input->post('penulis');
            $penerbit = $this->input->post('penerbit');

            if (empty($nama) && empty($penulis) && empty($penerbit)) {
                $data['response'] = 'Gagal!, kolom nama,penulis dan penerbit kosong';

            }else if(empty($_FILES['file']['name'])){ 
                $data['response'] = 'Gagal!, File belum di pilih';

            }else if($filenem){
                $datainsert = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'penulis' => $penulis,
                    'penerbit' => $penerbit,
                    'file' => 'TamanPustaka/Buku/'.$filenem,
                    'tanggal' => date('Y-m-d')
                );
                $this->Buku_model->insert($datainsert);
                $data['response'] = 'successfully uploaded'; 
                redirect('/tamanpustaka/buku');
            }else{
                $data['response'] = 'Gagal memasukan data !';
            }
            $this->load->view('TamanPustaka/Buku/uploadbuku', $data);
        }else{
            $this->load->view('TamanPustaka/Buku/uploadbuku');
        }
    }

    public function uploadmajalah()
    {
        if($this->session->userdata('peringkat') == "staff"){
			redirect(base_url("/dashboard"));
		}
        if ($this->input->post('upload')) {
            $data = array(); 

            $filenem = $this->upload_file('TamanPustaka/Majalah');

            $nama = $this->input->post('nama');
            $edisi = $this->input->post('edisi');

            if (empty($nama) && empty($edisi)) {
                $data['response'] = 'Gagal!, kolom nama dan edisi kosong';

            }else if(empty($_FILES['file']['name'])){ 
                $data['response'] = 'Gagal!, File belum di pilih';

            }else if($filenem){
                $datainsert = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'edisi' => $edisi,
                    'file' => 'TamanPustaka/Majalah/'.$filenem,
                    'tanggal' => date('Y-m-d')
                );
                $this->Majalah_model->insert($datainsert);
                $data['response'] = 'successfully uploaded'; 
                redirect('/tamanpustaka/majalah');
            }else{
                $data['response'] = 'Gagal memasukan data !';
            }
            $this->load->view('TamanPustaka/Majalah/uploadmajalah', $data);
        }else{
            $this->load->view('TamanPustaka/Majalah/uploadmajalah');
        }
    }

    
   
    function upload_file($type){
        if($this->session->userdata('peringkat') == "staff"){
			redirect(base_url("/dashboard"));
		}
        
        $config['upload_path'] = 'uploads/'.$type.'/'; 
        $config['allowed_types'] = 'pdf'; 
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

    public function delete_data($type,$id){

        if($this->session->userdata('peringkat') != "admin"){
			redirect(base_url("/dashboard"));
		}

        if ($type === "Majalah") {
            $validasi = $this->Majalah_model->get_where($id);
            if (!empty($validasi)) {
                $this->Majalah_model->delete($id);
                redirect(base_url('tamanpustaka/majalah'));
            }else{
                echo "data tidak ada";
            }

        }else if ($type === "Buku") {
            $validasi = $this->Buku_model->get_where($id);
            if (!empty($validasi)) {
                $this->Buku_model->delete($id);
                redirect(base_url('tamanpustaka/buku'));
            }else{
                echo "data tidak ada";
            }
        }
        echo" ya";
    }
}
