<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 
// Include library files 
require 'plugins/PHPMailer/Exception.php'; 
require 'plugins/PHPMailer/PHPMailer.php'; 
require 'plugins/PHPMailer/SMTP.php'; 

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
				$email 			= $this->input->post('email');
				$peringkat 		= $this->input->post('peringkat');
				if (empty($password) || empty($peringkat)) {
					$this->session->set_flashdata('message_login_error', 'Data yang dimasukan Kosong');
				}else{
					$dataupdate = array(
						'username' 			=> $username,
						'password' 			=> $password,
						'Verification_Code' => $verif_code,
						'Email' 			=> $email,
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
			$repassword = $this->input->post('password2');
			$verif_code = $this->input->post('verif_code');
			$email = $this->input->post('email');
			$peringkat = $this->input->post('peringkat');
			if (empty($password) || empty($peringkat) || empty($email) || empty($username)) {
				$this->session->set_flashdata('message_login_error', 'Data yang dimasukan Kosong');
			}else if($password != $repassword){
				$this->session->set_flashdata('message_login_error', 'Password tidak sama');
			}else{
				$datainsert = array(
					'username' 			=> $username,
					'password' 			=> $password,
					'Verification_Code' => $verif_code,
					'Email' 			=> $email,
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
		// $verif_code = $this->input->post('verif_code');
		$data['validate'] = $this->Auth_model->valdas_code($verf);
		if($this->input->post('forgot') != NULL ){
			$password = $this->input->post('password');
			$password1 = $this->input->post('password1');
			$verf2 = $this->input->get('vcode');
			if (($password == $password1) && !empty($password) && !empty($password1)) {
				$dataupdate = array(
					'password' 			=> $password,
				);
				$this->Auth_model->recover($verf,$dataupdate);
				echo $password."|".$verf;
				$this->session->set_flashdata('message_login_error', 'password berhasil di reset');
				redirect('/');
			}else{
				$this->session->set_flashdata('message_login_error', 'Password Tidak cocok, silahkan di input kembali');
				redirect($_SERVER['REQUEST_URI'], 'refresh'); 
			}
			
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

	function send_mail(){		
		$email = $this->input->post('email');
		$validasi = $this->Auth_model->check_email($email);
        if (!empty($validasi)) {
            $this->load->config('email');
			$this->load->library('email');

			$this->email->set_newline("\r\n");

			$this->email->from('mail@bawaslubali.ac.id', 'Bawaslu Bali'); 
			$this->email->to($email); 
		
			$this->email->subject('Recovery Code'); 

			$codegenerate = $this->generateRandomString();
			$bodyContent .= '<p>Verification Code : '.$codegenerate.'</p>';
			$bodyContent .= "<p><strong>".base_url('/')."activation/".$codegenerate."</strong></p>";
			$bodyContent .= "<p><a href='".base_url('/')."activation/".$codegenerate."' target='_blank' rel='noopener'>Link</a></p>";

			$this->email->message($bodyContent);
			
			// Send email 
			if(!$this->email->send()) { 
				show_error($this->email->print_debugger());
			} else { 
				$dataupdate = array(
					'Verification_Code' => $codegenerate,
				);
				$this->Auth_model->reset_verf($email,$dataupdate);
				$this->session->set_flashdata('message_login_error', 'Activation Code Sudah terkirim , Silahkan Cek email kamu');
				redirect('/');
			}
        }else{
			echo"babi";
            $this->session->set_flashdata('message_login_error', 'Email Tidak Ada');
			redirect('/');
        }
		
	}

	function generateRandomString() {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 15; $i++) {
			$randomString .= $characters[random_int(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}
