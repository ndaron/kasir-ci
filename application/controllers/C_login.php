<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller
{
       function __construct()
     {

      parent::__construct();
        // session_start();
     }
  
        public function index()
        {
              if ( isset($_SESSION['username']) ) { 
                 redirect('login');
              }
               
              $this->load->library('form_validation'); 
              $this->form_validation->set_rules('username', 'Username', 'required'); 
              $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]'); 
              if ( $this->form_validation->run() == TRUE ) { 
                 $this->load->model('m_user'); // 
                 $result = $this->m_user->cek_user_login( 
                             $this->input->post('username'),  
                             $this->input->post('password') 
                          );
                  
                             
                        if ( $result == TRUE) { 
                                $_SESSION['username'] = $this->input->post('username'); 
                                redirect('c_home');
                        }
              }  
               
                $this->load->view('login'); 
        }
         
        public function logout() 
        {
             session_destroy(); 
             $this->index();
        }
}