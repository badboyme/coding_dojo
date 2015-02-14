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
		$data['title'] = 'Books review';
		$this->load->view('templates/s_header', $data);
		$this->load->view('s_home');
		$this->load->view('templates/s_footer');
		$this->session->sess_destroy();
		
	}
	public function register()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('alias', 'Alias', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[8]');
		
		if ($this->form_validation->run() === TRUE)
		{	
			$this->load->model('talkToDb');
			$this->talkToDb->register($this->input->post());
			$this->session->set_flashdata("login_error1", "Please login");

			redirect('/books');
		}
		else 
		{
			$this->session->set_flashdata("login_error", "Invalid information please try again!");
			redirect('/');
		}
	}

	public function login()
	{

		$email = $this->input->post('l_email');
		$password = $this->input->post('l_password');

		$this->load->model('TalkToDb');
		$userId = $this->TalkToDb->get_login_id($email);
		
		if ($userId && $userId['password'] == $password) 
		{

			$user = array(
				'id' => $userId['id'],
				'name' => $userId['name'],
				'alias' => $userId['alias'],
				'email' => $userId['email'],
				'is_logged_in' => TRUE
			);

			$this->session->set_userdata($user);
			redirect("/books");
		}
		else
		{

			$this->session->set_flashdata("login_error1", "Invalid email or password please try again.");
			redirect("/");
		}
		
	}
}



