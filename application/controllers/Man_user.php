<?php

class Man_user extends CI_Controller
{
    function index(){
        $this->load->view('Internal/header');
        $this->load->view('man_user');
        $this->load->view('Internal/footer');
    }

    function tambah_user(){
        $this->load->view('tambah_user');
    }
}