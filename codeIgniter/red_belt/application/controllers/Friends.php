<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class friends extends CI_Controller {

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
		$data['title'] = 'Friends';
		$this->load->view('templates/s_header', $data);
		$this->load->view('templates/s_footer');
		$userdata = $this->session->userdata;
		// $this->load->model('talkToDb');
		// $friens_list = $this->talkToDb->show_friends();
		// $this->session->set_userdata('user' , $userdata );

		
		$this->load->model('talkToDb');
		$friens_list = $this->talkToDb->show_friends();
		$not_friends[] = $this->talkToDb->show_not_friends();
		// var_dump($not_friends);

		// var_dump($friens_list);

		$this->load->view('friends', array('chicken' => $friens_list));
		// var_dump($friens_list);

	}

	public function delete($id)
	{
	
		$user = array(
			'id' => $id
		);
		$this->load->model('talkToDb');
		$deleteUser = $this->talkToDb->delete($user);
		redirect('/friends');
		// var_dump($user);
	}

	public function user($friend_id)
	{
		$data['title'] = 'User';
		$this->load->view('templates/s_header', $data);
		$this->load->view('templates/s_footer');

		$user = array(
			'friend_id' => $friend_id
			);
		$this->load->model('talkToDb');
		$userInfo = $this->talkToDb->user($user);

		$this->load->view('user', $userInfo);

	}

}
