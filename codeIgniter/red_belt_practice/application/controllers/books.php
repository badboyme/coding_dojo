<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		if($this->session->userdata('is_logged_in') === TRUE)
 		{		
		$userInfo = $this->session->userdata;
		 		}
 		else 
 		{
 			redirect("/");	
		}	

	}
	public function index()
	{
		// if($this->session->userdata('is_logged_in') === TRUE)
 	// 	{
 			$data['title'] = 'Books review';
			$this->load->view('templates/s_header', $data);
			$this->load->view('books');
			$this->load->view('templates/s_footer');
            // echo "hi";        
 	// 	}
 	// 	else 
 	// 	{
 	// 		redirect("/");	
		// }	


	}
	public function add()
	{
		$data['title'] = 'Add';
		$this->load->view('templates/s_header', $data);
		$this->load->view('add');
		$this->load->view('templates/s_footer');

	}
	public function add_book()
	{	
		var_dump($this->input->post());	
		echo "redirect ton books";
	}
	public function show_book()
	{
		$data['title'] = 'Show books';
		$this->load->view('templates/s_header', $data);
		$this->load->view('show_book');
		$this->load->view('templates/footer');
	}
	public function submit_review()
	{
		var_dump($this->input->post());
	}

	public function user()
	{
		$data['title'] = 'User';
		$this->load->view('templates/s_header', $data);
		$this->load->view('user');
		$this->load->view('templates/footer');	
	}

}