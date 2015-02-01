<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
	if ($this->session->userdata('counter')) 
	{
		$counter = $this->session->userdata('counter');
		$this->session->set_userdata('counter', $counter+1);

	}
	else
	{
		$counter = $this->session->set_userdata('counter', 1);
	}

	function generateRandomString($length = 12) 
	{
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	}

	$randomWord = generateRandomString();

	// rtrim(base64_encode(md5(microtime())),"=");

	// var_dump($randomWord);
	$data = [];
	$data["counter"] = $this->session->userdata('counter');
	$data["randomWord"] = $randomWord;
	$this->load->view('index_page', $data);


		// $this->load->view('index_page', array('counter'=>$this->session->userdata('counter'), $randomWord = array('randomWord'=>$this->session->userdata('randomWord')));

	}

}

//end of main controller