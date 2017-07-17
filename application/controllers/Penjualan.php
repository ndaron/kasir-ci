<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('penjualan_model','penjualan');
		$this->load->model('menu_model');
		$this->load->model('setting_model1');
	}

	public function index()
	{		
		$this->load->helper('url');
		$this->data['menu'] = $this->setting_model1->tampil_data_menu();
		$this->load->view('penjualan_view',$this->data);
	}

	public function ajax_list()
	{	
		$list = $this->penjualan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->menu;
			$row[] = $person->tipe;
			$row[] = $person->harga;
			$row[] = $person->jumlah;
			$row[] = $person->total_harga;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->kd_penjualan."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->kd_penjualan."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->penjualan->count_all(),
						"recordsFiltered" => $this->penjualan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->penjualan->get_by_id($id);
		echo json_encode($data);
	}
	

	public function ajax_add()
	{
		
		$data = array(
				'menu' => $this->input->post('menu'),
				'jumlah' => $this->input->post('jumlah')
				
			);
		
		$insert = $this->penjualan->save($data);
		echo json_encode(array("status" => TRUE));
		
	}

	public function ajax_update()
	{
		$data = array(
				'menu' => $this->input->post('menu'),
				'jumlah' => $this->input->post('jumlah')
			);
		$this->penjualan->update(array('kd_penjualan' => $this->input->post('kd_penjualan')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->penjualan->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
