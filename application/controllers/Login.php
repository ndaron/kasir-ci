<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model('m_login');
        $this->load->library('session');
    }

    function index(){
        $this->load->view('login');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("admin",$where);
        if($cek ){


            $data_session = array('username' => $cek[0]->username, 'level' => $cek[0]->level, 'status' => 'login');

            $this->session->set_userdata($data_session);


            if ($this->session->userdata('level')=='admin'){
                redirect('admin');

            }elseif ($this->session->userdata('level')=='kasir'){

                redirect('kasir');
            }



        }else{
            redirect('login');
        }
    }

    public function keluar(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/login'));
    }


    function p_login(){
        $this->load->view('V_log_pelayan');

    }


    function aksi_p_login(){
        $nama = $this->input->post('nama');

        $where = array(
            'nama' => $nama,

        );
        $cek = $this->m_login->cek_login("persons",$where);
        if($cek ){


            $data_session = array('nama' => $cek[0]->nama, 'status' => 'login');

            $this->session->set_userdata($data_session);



                redirect('m_pelayan');





        }else{
            redirect('login/p_login');
        }

    }


    public function keluar_pelayan(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/login/p_login'));
    }

}