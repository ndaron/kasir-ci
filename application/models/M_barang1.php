<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_barang1 extends CI_Model{

	private $primary_key = 'kd_menu';
	private $table_name	= 'daftar_menu';

	public function __construct()
	{
	
		parent::__construct();
	
	}

	public function get() 
	{
	  	
	  	$this->db->select('id_barang,nama_barang');

		return $this->db->get($this->table_name)->result();
	
	}

	public function get_by_id($id)
	{
	  
	  	$this->db->where($this->primary_key,$id); 
	  
	  	return $this->db->get($this->table_name)->row();
	
	}

}