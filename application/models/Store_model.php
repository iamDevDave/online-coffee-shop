<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Store_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('cafes', $formArray);
    }

    public function getStores() {
        $result = $this->db->get('cafes')->result_array();
        return $result;
    }

    public function getStore($id) {
        $this->db->where('cafe_id', $id);
        $store = $this->db->get('cafes')->row_array();
        return $store;
    }

    public function update($id, $formArray) {
        $this->db->where('cafe_id', $id);
        $this->db->update('cafes', $formArray);
    } 

    public function delete($id) {
        $this->db->where('cafe_id',$id);
        $this->db->delete('cafes');
    }

    public function countStore() {
        $query = $this->db->get('cafes');
        return $query->num_rows();
    }

    public function getResInfo() {
        $this->db->select('*');
        $this->db->from('cafes');
        $this->db->join('shop_category','cafes.c_id = shop_category.c_id');
        $result = $this->db->get()->result_array();
        return $result;
    }

}
