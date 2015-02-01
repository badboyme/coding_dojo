<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process_money extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();

	}

	public function farm()
	{
			//see if "counter" session exist in the session
		// if($this->session->userdata('counter'))
		// {
		// 	$counter = $this->session->userdata('counter');
		// 	$this->session->set_userdata('counter', $counter+1);
		// }
		// else
		// {
		// 	$this->session->set_userdata('counter', 1);
		// }
		// echo $counter;

		// $this->load->view('result', array("counter"=>$this->session->userdata('counter')));

	}


}