<?php

class Barang extends CI_Controller {

    function index() {

        $data['mbarang'] = $this->data->getBarang();


        $this->load->view('data_barang', $data);
    }

    function tambah() {
        $this->load->view('form_tambah');
    }

    function proses_tambah () {

        $data['id']     = $this->input->post('id');
        $data['name']   = $this->input->post('name');
        $data['qty']    = $this->input->post('qty');
        $data['price']  = $this->input->post('price');

       $simpan = $this->data->addBarang($data);

       if ($simpan) {
        redirect('barang/index');
       }

    }
    function hapus($id){
        $hapus = $this->data->removeBarang($id);

        if($hapus) {
            redirect('barang/index');
        }
    }
    function edit($id) {
        $data['mbarang'] = $this->data->getBarang($id);

        $this->load->view('form_edit', $data);
    }

    function proses_update() {

        $id             = $this->input->post('id');
        $data['name']   = $this->input->post('name');
        $data['qty']    = $this->input->post('qty');
        $data['price']  = $this->input->post('price');

        $update = $this->data->updateBarang($data, $id);

        if ($update) {
            redirect('barang/index');
        }

    }
}