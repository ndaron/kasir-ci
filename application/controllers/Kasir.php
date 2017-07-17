<?php

class Kasir extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }
    function index(){
        $this->load->view('V_kasir');
    }

    function data_p_makanan(){
        $this->load->view('V_data_p_makanan');
    }

    function data_p_delivery(){
        $this->load->view('V_data_p_delivery');
    }

    function data_p_tempat(){
        $this->load->view('V_data_p_tempat');
    }
}