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
		//see if "goldCounter" session exist in the session
		$goldCounter = $this->session->userdata('goldCounter');
		$this->session->set_userdata('goldCounter', $goldCounter + rand(10, 20));
		// $event_log = ['You entered the Farm! ' . date("F j, Y, ")];
		// $_SESSION['mainLog'][] = $event_log;
		// var_dump($event_log);		
		redirect('home');
		
	}
	public function cave()
	{
		$goldCounter = $this->session->userdata('goldCounter');
		$this->session->set_userdata('goldCounter', $goldCounter + rand(5, 10));		
		redirect('home');

	}
	public function house()
	{
		$goldCounter = $this->session->userdata('goldCounter');
		$this->session->set_userdata('goldCounter', $goldCounter + rand(2, 5));
		redirect('home');
	}
	public function casino()
	{
		$goldCounter = $this->session->userdata('goldCounter');
		$this->session->set_userdata('goldCounter', $goldCounter + rand(-50, 50));
		redirect('home');
	}


}