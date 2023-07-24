<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('Menu_model');
		$item = $this->Menu_model->getMenu();
		$data['items'] = $item;
		$this->load->view('front/partials/header');
		$this->load->view('front/home', $data);
		$this->load->view('front/partials/footer');
	}

	
    
}