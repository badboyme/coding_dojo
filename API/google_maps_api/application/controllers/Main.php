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
		$this->load->view('home');
	}
	public function direction()
	{
		$origin = $this->input->post("origin");
		$destination = $this->input->post('destination');
		
		$key = "AIzaSyACKu2zbhutfN2s_MQSY0npa3wLy_wEljs";

		$url = "https://maps.googleapis.com/maps/api/directions/json?origin="
				. urlencode($origin)
				. "&destination="
				. urlencode($destination)
				. "&key=" . $key;

		$html = file_get_contents($url);

		$this->output->set_content_type('application/json')->set_output($html);

	}
}
// http://localhost:8888/?fromCity=los+angeles&toCity=san+francisco&format=json

// http://localhost:8888/main/direction?fromCity=hi&toCity=fd&format=json

// https://maps.googleapis.com/maps/api/directions/json?origin=Toronto&destination=Montreal&key=API_KEY
