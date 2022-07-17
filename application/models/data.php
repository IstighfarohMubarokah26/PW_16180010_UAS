<?php

class Data extends CI_Model {

    function getBarang($id= false) {

        if ($id == false) {
            $brg = $this->db->get('mbarang');

            return $brg->result_array();
        
        }
        else {
            $brg = $this->db->get_where('mbarang', ['id' => $id]);

            return $brg->row();
        }

    }
    
    function addBarang($data) {

       return $this->db->insert('mbarang', $data);

    }

    function removeBarang($id) {
        return $this->db->delete('mbarang', ['id' => $id]);
    }

    function updateBarang($data, $id) {
        return $this->db->update('mbarang', $data, ['id' => $id]);

    }
}