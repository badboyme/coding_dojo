<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{

		$data['title'] = 'Hello World';
		$this->load->view('templates/header', $data);
		$this->load->model('TalkToDb');
		$getProducts['showAll'] = $this->TalkToDb->get_products();

		// $this->load->model('TalkToDatabase');
		// $userId = $this->TalkToDatabase->get_login_id($email);

		// var_dump($getProducts);
		$this->load->view('products', $getProducts);
		$this->load->view('templates/footer');
		// $this->session->sess_destroy();
	}
	public function cart()
	{

		$data['title'] = 'Cart';
		$this->load->view('templates/header', $data);
		$this->load->model('TalkToDb');
		$getProducts['showAll'] = $this->TalkToDb->get_products();	
		$this->load->view('templates/footer');

		$quantity = $this->input->post("quantity"); 
		$products_id = $this->input->post("products_id"); 

				$newOrder = array(
					'quantity' => $quantity,
					'products_id' => $products_id
				);
		// var_dump($getProducts);
		// var_dump($newOrder);
		$this->session->set_userdata($newOrder);
		$getProductsId['productById'] = $this->TalkToDb->products_id($products_id);
		
		$this->load->view('cart', $getProductsId);

		var_dump($getProductsId);
				
		// die();	
		// $store_cart = $this->TalkToDb->store_cart($newOrder);

	}
	public function check_out()
	{
		$name = $this->input->post("name");
		$address = $this->input->post("address");
		$card = $this->input->post("card");

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("name", "first name", "required");
		$this->form_validation->set_rules("address", "Adress", "required");
		$this->form_validation->set_rules("card", "Credit card", "required");

		if ($this->form_validation->run() == FALSE)
		{
			echo "no";
			// $this->load->view('myform');
		}
		else
		{
			
			$this->load->model('TalkToDb');
			$quantity = $this->session->userdata('quantity');
			$products_id = $this->session->userdata('products_id');
			$session_id = $this->session->userdata('session_id');

				$toTheCart = array(
					'quantity' => $quantity,
					'products_id' => $products_id,
					'session_id' => $session_id
				);
			$store_cart = $this->TalkToDb->store_cart($toTheCart);
			var_dump($toTheCart);
			die();






		}

	}

}