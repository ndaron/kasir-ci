<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function template($data = array(), $return = FALSE, $layout = FALSE)
    {
        //ndek kene bersifat global, iso gawe model pisan, misal gawe category atau model seng dipanggil di semua halaman
        $data['PAGE'] = !isset($data['PAGE']) ? '' : $data['PAGE'];
        if ( !$layout )
        {
            $layout = 'template/layout'; // template default lek kosong nyelok layout
        }

        if ($return)
        {
            return $this->load->view($layout, $data, $return);
        }
        $this->load->view($layout, $data);
    }
    
    //function template_admin() //iso gawe ngene pisan kari ngopi

}