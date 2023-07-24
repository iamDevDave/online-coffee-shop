<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class item extends CI_Controller {

    function __construct(){
        parent::__construct();
        //Load cart libraray
        $this->load->library('cart');
    }

    public function list($id) {
        $this->load->model('Menu_model');
        $items = $this->Menu_model->getitems($id);

        $this->load->model('Store_model');
        $caf = $this->Store_model->getStore($id);

        $data['items'] = $items;
        $data['caf'] = $caf;
        $this->load->view('front/partials/header');
        $this->load->view('front/item', $data);
        $this->load->view('front/partials/footer');
    }

    public function addToCart($id) {
        $this->load->model('Menu_model');
        $items = $this->Menu_model->getSingleitem($id);
        $data = array (
            'id'    => $items['i_id'],
            'cafe_id'  => $items['cafe_id'],
            'qty'   =>1,
            'price' => $items['price'],
            'name' => $items['name'],
            'image' => $items['img']
        );
        $this->cart->insert($data);
        redirect(base_url(). 'cart/index');
    }
}