<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TalkToDb extends CI_Model {

	public function register()
	{
		$name = $this->input->post('name');
		$alias = $this->input->post('alias');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$userInfo = array(
			'name' => $name,
			'alias' => $alias,
			'email' => $email,
			'password' => $password,
			'created_at' =>date('Y-m-d h:i:s'),
			'updated_at' => date('Y-m-d h:i:s')
			);
		$this->session->set_userdata($userInfo);

		$query = "INSERT INTO users ( name, alias, email,password, created_at, updated_at) VALUES (?,?,?,?,?,?)";
		return $this->db->query($query, $userInfo);	
	}
	function get_login_id($email)
	{
		return $this->db->query('SELECT * FROM users WHERE email = ?', array($email))->row_array();
	}
	

}

/* End of file talkToDb.php */
/* Location: ./application/models/talkToDb.php */