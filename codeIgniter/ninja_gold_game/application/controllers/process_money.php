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

		date_default_timezone_set("America/Los_Angeles"); 
		$date = date('h:i a - n/j/Y', time());

		//see if "goldCounter" session exist in the session
		$goldCounter = $this->session->userdata('goldCounter');
		$farmGold = rand(10, 20);
		$this->session->set_userdata('goldCounter', $goldCounter + $farmGold);
		
		$activities = $this->session->userdata('LogMessages');
		$activities[] = '<p class="text-primary">Earned ' . $farmGold . ' golds from the Farm! ' . $date . '<p>';
		$this->session->set_userdata('LogMessages' , $activities );

		redirect('home');
		
	}
	public function cave()
	{
		date_default_timezone_set("America/Los_Angeles"); 
		$date = date('h:i a - n/j/Y', time());

		$goldCounter = $this->session->userdata('goldCounter');
		$caveGold = rand(5, 10);
		$this->session->set_userdata('goldCounter', $goldCounter + $caveGold);		
		
		$activities = $this->session->userdata('LogMessages');
		$activities[] = '<p class="text-primary">Earned ' . $caveGold . ' golds from the Cave! ' . $date . '<p>';
		$this->session->set_userdata('LogMessages', $activities);
		redirect('home');

	}
	public function house()
	{

		date_default_timezone_set("America/Los_Angeles"); 
		$date = date('h:i a - n/j/Y', time());

		$goldCounter = $this->session->userdata('goldCounter');
		$houseGold = rand(2, 5);
		$this->session->set_userdata('goldCounter', $goldCounter + $houseGold);

		$activities = $this->session->userdata('LogMessages');
		$activities[] = '<p class="text-primary">Earned ' . $houseGold . ' golds from the House! ' . $date . '<p>';
		$this->session->set_userdata('LogMessages', $activities);
		

		redirect('home');
	}
	public function casino()
	{
		date_default_timezone_set("America/Los_Angeles"); 
		$date = date('h:i a - n/j/Y', time());

		$goldCounter = $this->session->userdata('goldCounter');
		$casinoGold = rand(-50, 50);
		if ($casinoGold > 0) 
		{
			$goldWarning = "<p class='text-primary'>Earned to the casino and won";
		}
		else
		{
			$goldWarning = "<p class='text-danger'>Ouch! Entered to the casino and lost ";
		}

		$this->session->set_userdata('goldCounter', $goldCounter + rand(-50, 50));
		
		$activities = $this->session->userdata('LogMessages');
		$activities[] = $goldWarning .' '. $casinoGold . ' golds! ' . $date . '<p>';
		$this->session->set_userdata('LogMessages', $activities);

		redirect('home');
	}
		public function reset()
	{
		$this->session->set_userdata('goldCounter' , 0);
		// $this->session->set_userdata('LogMessages' , 0);
		redirect('home');
	}


}