<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class TalkToDatabase extends CI_model
{
	function add_user($add_user)
	{
		$query = "INSERT INTO user (email, first_name, last_name, password, created_at, updated_ad) VALUES (?,?,?,?,?,?)";
		$values = array($add_user['email'], $add_user['first_name'], $add_user['last_name'], $add_user['password'], date('Y-m-d, h:i:s'), date('Y-m-d, h:i:s')); 
		return $this->db->query($query, $values);
	}	

	function get_login_id($email)
	{
		return $this->db->query('SELECT * FROM user WHERE email = ?', array($email))->row_array();
	}
}
