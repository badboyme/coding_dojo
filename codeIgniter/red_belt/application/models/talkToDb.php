<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TalkToDb extends CI_Model {

	public function register()
	{
		$name = $this->input->post('name');
		$alias = $this->input->post('alias');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$db = $this->input->post('db');

		$userInfo = array(
			'name' => $name,
			'alias' => $alias,
			'email' => $email,
			'password' => $password,
			'db' => $db
			);


		$this->session->set_userdata($userInfo);

		$query = "INSERT INTO users ( name, alias, email,password, db) VALUES (?,?,?,?,?)";
		return $this->db->query($query, $userInfo);	
	}

	public function get_login_id($email)
	{
		return $this->db->query('SELECT * FROM users WHERE email = ?', array($email))->row_array();
	}

		public function show_friends()
	{
		return $this->db->query("SELECT users.id as 'user', friendship.alias, friendship.id as 'friendId', friendship.name as 'friend'
			FROM users
			LEFT JOIN friendship ON friendship.users_id = users.id
			WHERE users.id = '1'")->result_array(); //fix bug reminder = pass user id
	}



	public function	user($user)
	{
		return $this->db->query("SELECT friendship.name, friendship.email, friendship.alias FROM friendship WHERE id = ?", array($user['friend_id']))->row_array();
	}

	public function delete($user)
	{
		return $this->db->query("DELETE FROM friendship WHERE friendship.id = ?", array($user['id']));

		// var_dump($user);
		// echo "hi";
		// die();
	}
	public function show_not_friends()
	{
		return $this->db->query("SELECT * FROM users")->row_array();
	}


}
