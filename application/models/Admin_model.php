<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function getByUsername($username) {

        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row_array();
        return $admin;
    }
    
    public function getAllOrders() {
        $this->db->order_by('o_id','DESC');
        $this->db->select('o_id, i_name, quantity, price, status, date, username, address');
        $this->db->from('user_orders');
        $this->db->join('users', 'users.u_id = user_orders.u_id');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getcafReport() {
        $this->db->group_by('u.cafe_id');
        $this->db->select('u.cafe_id, name, price, success-date');
        $this->db->select_sum('price');
        $this->db->from('user_orders as u');
        $this->db->join('cafes as co', 'co.cafe_id = u.cafe_id');
        $result = $this->db->get()->result();
        return $result;
    }

    public function itemReport() {
        $query = $this->db->query('SELECT i_id, i_name, 
        SUM(quantity) AS qty
        FROM user_orders
        GROUP BY i_id
        ORDER BY SUM(quantity) DESC');
        return $query->result();
    }

    public function mostOrderditems() {
        $sql = 'SELECT u.cafe_id, r.name, u.price, u.i_name, 
        MAX(u.quantity) AS quantity, 
        SUM(price) AS total
        FROM user_orders AS u
        INNER JOIN cafes as co
        ON u.cafe_id = co.cafe_id
        GROUP BY u.cafe_id';

        $query = $this->db->query($sql);
        return $query->result();
    }
}
