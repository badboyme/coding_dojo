<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{
		$data['title'] = 'Hello World';
		$this->load->view('templates/header', $data);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function welcome()
	{
		$data['title'] = 'Hello World';
		$this->load->view('templates/header', $data);
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}
}