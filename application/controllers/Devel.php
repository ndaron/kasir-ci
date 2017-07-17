<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devel extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model', 'daftar_menu');
    }

    public function index()
    {
        $data['PAGE'] = 'devel/index'; //lokasi view
        $data['PAGE_TITLE'] = "test coy";
        $data['variable'] = "xyz"; //pasang datane podo ae
        $this->template($data, false, 'template/layout_admin'); //iki nyelok file template layout adminambil template bukan load view
    }

}