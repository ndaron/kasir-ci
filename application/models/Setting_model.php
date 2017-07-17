<?php 

class setting_model1 extends CI_Model{	
public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	function tampil_data_menu {		
		return $this->db->('daftar_menu');
	}
	
}
?>