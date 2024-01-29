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

	function edit_data($id){
		$data['validate'] = $this->Auth_model->cek_id($id);
		if ($data['validate']) {
			$data['type'] = "Edit";

			if($this->input->post('submit') != NULL ){
				$username	 	= $this->input->post('username');
				$password 		= $this->input->post('password');
				$verif_code 	= $this->input->post('verif_code');
				$peringkat 		= $this->input->post('peringkat');
				if (empty($password) || empty($peringkat) || empty($verif_code)) {
					$this->session->set_flashdata('message_login_error', 'Data yang dimasukan Kosong');
				}else{
					$dataupdate = array(
						'username' 			=> $username,
						'password' 			=> $password,
						'Verification_Code' => $verif_code,
						'peringkat' 		=> $peringkat
					);
					$this->Auth_model->update($id,$dataupdate);
					$this->session->set_flashdata('message_login_error', 'Berhasil');
					redirect('/man_user');
				}
			}
			
			$this->load->view('auth/manage', $data);
		}else{
			redirect(base_url('/'));
		}
		
	}
	function tambah_data(){
		if($this->input->post('submit') != NULL ){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$verif_code = $this->input->post('verif_code');
			$peringkat = $this->input->post('peringkat');
			if (empty($password) || empty($peringkat) || empty($verif_code) || empty($username)) {
				$this->session->set_flashdata('message_login_error', 'Data yang dimasukan Kosong');
			}else{
				$datainsert = array(
					'username' 			=> $username,
					'password' 			=> $password,
					'Verification_Code' => $verif_code,
					'peringkat' 		=> $peringkat
				);
				$this->Auth_model->insert($datainsert);
				$data['response'] = 'User Berhasil di tambahkan'; 
				redirect('/man_user');
			}
		}
		$this->load->view('auth/tambah');
	}

	function reset_password($verf){
		$verif_code = $this->input->post('verif_code');
		$data['validate'] = $this->Auth_model->valdas_code($verif_code);
		if($this->input->post('forgot') != NULL ){
			$password = $this->input->post('password');
			$verf2 = $this->input->post('verfcode');
			$dataupdate = array(
				'password' 			=> $password,
			);
			$this->Auth_model->recover($verf2,$dataupdate);
			echo $password."|".$verf2;
			$this->session->set_flashdata('message_login_error', 'password berhasil di reset');
			redirect('/');
		}else if ($data['validate']) {
			$this->load->view('auth/forgot', $data);
		}else{
			$this->session->set_flashdata('message_login_error', 'Activation Code Tidak Cocok');
			redirect('/');
		}
	}

	public function delete_data($id){
        $validasi = $this->Auth_model->cek_id($id);
        if (!empty($validasi)) {
            $this->Auth_model->delete($id);
            redirect(base_url('/man_user'));
        }else{
            echo "data tidak ada";
        }
    }
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}


}
