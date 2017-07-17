<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayan extends CI_Controller {

	function index(){
		$this->load->view('V_log_pelayan');
	}

}