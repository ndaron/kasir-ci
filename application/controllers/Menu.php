<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model','daftar_menu');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('tampilan_menu');
	}

	public function ajax_list()
	{
		$list = $this->daftar_menu->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->menu;
			$row[] = $person->tipe;
			$row[] = $person->harga;
			

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->kd_menu."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->kd_menu."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->daftar_menu->count_all(),
						"recordsFiltered" => $this->daftar_menu->count_filtered(),
						"data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->daftar_menu->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_add()
	{
		$data = array(
				'menu' => $this->input->post('menu'),
				'tipe' => $this->input->post('tipe'),
				'harga'=> $this->input->post('harga')
				
			);
		$insert = $this->daftar_menu->save($data);
		echo json_encode(array("status" => true));
	}

	public function ajax_update()
	{
		$data = array(
				'menu' => $this->input->post('menu'),
				'tipe' => $this->input->post('tipe'),
				'harga' => $this->input->post('harga')
			);
		$this->daftar_menu->update(array('kd_menu' => $this->input->post('kd_menu')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->daftar_menu->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
