<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('items', $formArray);
    }

    public function getMenu() {
        $result = $this->db->get('items')->result_array();
        return $result;
    }

    public function getSingleitem($id) {
        $this->db->where('i_id', $id);
        $item = $this->db->get('items')->row_array();
        return $item;
    }

    public function update($id, $formArray) {
        $this->db->where('i_id', $id);
        $this->db->update('items', $formArray);
    } 

    public function delete($id) {
        $this->db->where('i_id',$id);
        $this->db->delete('items');
    }

    public function countitem() {
        $query = $this->db->get('items');
        return $query->num_rows();
    }

    public function getitems($id) {
        $this->db->where('cafe_id', $id);
        $item = $this->db->get('items')->result_array();
        return $item;
    }
}
