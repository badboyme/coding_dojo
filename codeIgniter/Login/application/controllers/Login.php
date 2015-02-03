<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
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
		if ($this->session->userdata('is_logged_in') === TRUE) 
		{
			
		}
		else
		{
			redirect('/');
		}
	}

	public function register()
	{
		$first_name = $this->input->post("first_name");
		$last_name = $this->input->post("last_name");
		$email = $this->input->post("email");
		$password = $this->input->post("password");


		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules("first_name", "first name", "required");
		$this->form_validation->set_rules("last_name", "last name", "required");
		$this->form_validation->set_rules("email", "email", "required");
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[8]');

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata("login_error1", "Invalid information please try again!");
			redirect('/');
		}
		else
		{
			$this->load->model('TalkToDatabase');
			$userInfo = array(
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'password' => $password
				);

			$add_user = $this->TalkToDatabase->add_user($userInfo);
			$this->session->set_flashdata("success", "You are successfully registered. Please login now!");
			redirect('/');
		}
	}
	public function user_login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('TalkToDatabase');
		$userId = $this->TalkToDatabase->get_login_id($email);
		
		if ($userId && $userId['password'] == $password) 
		{

			$user = array(
				'first_name' => $userId['first_name'],
				'last_name' => $userId['last_name'],
				'email' => $userId['email'],
				'password' => $userId['password'],
				'is_logged_in' => true
				);
		
			$this->session->set_userdata($user);
			redirect("/login/welcome");
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password.");
			redirect("/");
		}
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}