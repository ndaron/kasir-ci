<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {



    public function index()
    {
        $this->load->model('M_menu');
        $this->load->model('transaksi_model');

        $data['menu'] = $this->M_menu->get();

        $this->load->view('V_delivery',$data);

    }

    public function getbarang($id)
    {

        $this->load->model('M_menu');

        $menu = $this->M_menu->get_by_id($id);

        if ($menu) {

            if ($menu->menu == '0') {
                $disabled = '';
                $info_stok = '<span class="help-block badge" id="reset" 
					          style="background-color: #d9534f;">
					          stok habis</span>';
            }else{
                $disabled = '';
                $info_stok = '<span class="help-block badge" id="reset" 
					          style="background-color: #5cb85c;">stok : '
                    .$menu->menu.'</span>';
            }

            echo '<div class="control-group">
				      <label class="control-label " 
				      	for="menu">Menu :</label>
				      <div class="controls">
				        <input type="text" class="form-control reset" 
				        	name="menu" id="menu" 
				        	value="'.$menu->menu.'"
				        	readonly="readonly">
				      </div>
				    </div>
					<div class="control-group">
				      <label class="control-label "                      
				      	for="tipe">Tipe :</label>
				      <div class="controls">
				        <input type="text" class="form-control reset" 
				        	name="tipe" id="tipe" 
				        	value="'.$menu->tipe.'"
				        	readonly="readonly">
				      </div> 
				    </div>
				    <div class="control-group">
				      <label class="control-label " 
				      	for="harga">Harga (Rp) :</label>
				      <div class="controls">
				        <input type="text" class="form-control reset" id="harga" name="harga" 
				        	value="'.number_format( $menu->harga, 0 ,
                    '' , '.' ).'" readonly="readonly">
							 
				      </div>
				    </div>
				    <div class="control-group">
				      <label class="control-label " 
				      	for="jumlah">Jumlah :</label>
				      <div class="controls">
				        <input type="number" class="form-control reset" 
				        	name="jumlah" placeholder="Jumlah" autocomplete="off" 
				        	id="jml" onchange="subTotal(this.value)" 
				        	onkeyup="subTotal(this.value)" min="0"  
				        	max="'.$menu->menu.'" '.$disabled.'>
				      </div>
				    </div>';
        }else{

            echo '<div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="menu">Menu :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="menu" id="menu" 
				        	readonly="readonly">
				      </div>
				    </div>
					<div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="tipe">tipe :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="tipe" id="tipe" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="harga">Harga (Rp) :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="harga" id="harga" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="jumlah">Jumlah :</label>
				      <div class="col-md-4">
				        <input type="number" class="form-control reset" 
				        	autocomplete="off" onchange="subTotal(this.value)" 
				        	onkeyup="subTotal(this.value)" id="jumlah" min="0"  
				        	name="jumlah" placeholder="jumlah">
				      </div>
				    </div>';
        }

    }

    public function ajax_list_transaksi()
    {

        $data = array();

        $no = 1;

        foreach ($this->cart->contents() as $items){

            $row = array();
            $row[] = $no;
            $row[] = $items["tgl"];
            $row[] = $items["id"];
            $row[] = $items["name"];
            $row[] = $items["tipee"];
            $row[] = 'Rp. ' . number_format( $items['price'],
                    0 , '' , '.' ) . ',-';
            $row[] = $items["qty"];
            $row[] = 'Rp. ' . number_format( $items['subtotal'],
                    0 , '' , '.' ) . ',-';

            //add html for action
            $row[] = '<a 
				href="javascript:void()" style="color:rgb(255,128,128);
				text-decoration:none" onclick="deletemenu('
                ."'".$items["rowid"]."'".','."'".$items['subtotal'].
                "'".')"> <i class="fa fa-close"></i> Delete</a>';

            $data[] = $row;
            $no++;
        }

        $output = array(
            "data" => $data
        );
        //output to json format
        echo json_encode($output);
    }

    public function addmenu()
    {

        $data = array(
            'tgl' => $this->input->post('tgl_transaksi'),
            'id' => $this->input->post('kd_menu'),
            'name' => $this->input->post('menu'),
            'tipee' => $this->input->post('tipe'),
            'price' => str_replace('.', '', $this->input->post('harga')),
            'qty' => $this->input->post('jumlah')
        );
        $insert = $this->cart->insert($data);
        echo json_encode($insert);

    }

    public function savemenu()
    {

        $data = array(
            'tgl' => $this->input->post('tgl_transaksi'),
            'id' => $this->input->post('kd_menu'),
            'name' => $this->input->post('menu'),
            'tipee' => $this->input->post('tipe'),
            'price' => str_replace('.', '', $this->input->post('harga')),
            'qty' => $this->input->post('jumlah'),
            'sub_total' => $this->input->post('sub_total')
        );

        $insert = $this->transaksi_model->save($data);
        echo json_encode(array("status" => TRUE));
        redirect('kasir/index');

    }

    public function deletemenu($rowid)
    {

        $this->cart->update(array(
            'rowid'=>$rowid,
            'qty'=>0,));
        echo json_encode(array("status" => TRUE));
    }
}