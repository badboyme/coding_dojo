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
		// $this->session->sess_destroy();
		// die();
		$this->load->model('Course');
		$data['title'] = 'Courses';
		$this->load->view('templates/header', $data);
		$ShowAll['ShowAll'] = $this->Course->get_all_courses();
		$this->load->view('home', $ShowAll);
		$this->load->view('templates/footer');
		
	}

	public function destroy($id)
	{
		// $this->load->model('Course');		
		$data['title'] = 'Destroy';
		$this->load->view('templates/header', $data);
		// $courseId = $this->Course->get_course_by_id($id);
		$this->load->view('destroy', $courseId);
		$this->load->view('templates/footer');
	}

	public function show($id)
	{
		$this->load->model('Course');
		$course = $this->Course->get_course_by_id($id);
		$this->load->view('home');
	}



	public function add()
	{
		$name = $this->input->post("name"); 
		$description = $this->input->post("description"); 
		// call validation
		$this->load->library('form_validation');	
		$this->form_validation->set_rules('name', 'name', 'required|min_length[15]');
		$this->form_validation->set_rules('description', 'description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect('/');
		}
		else
		{			
			$this->load->model('Course');			
			$course_datail = array(
					'title' => $name,
					'description' => $description
				);
			$add_course = $this->Course->add_course($course_datail);
			
			redirect('/');
		}
	}
}
