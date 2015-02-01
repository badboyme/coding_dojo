<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}
	public function index()
	{
		$data['title'] = 'Ninja Gold Game';
		$this->load->view('templates/header', $data);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function process_money()
	{
		echo "string";
		$this->load->view('home');
	}

}
