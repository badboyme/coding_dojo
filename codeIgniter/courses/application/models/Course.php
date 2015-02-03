<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Course extends CI_model
{
	
	function get_all_courses()
	{
		return $this->db->query("SELECT * FROM courses")->result_array();
	}

	function get_course_by_id($course_id)
	{
		return $this->db->query("SELECT * FROM courses WHERE id= ?");
	}

	function add_course($course)
	{
		// date_default_timezone_set("America/Los_Angeles"); 
		// // echo "UTC:".time();
		// $date = date('l \t\h\e jS h:i a', time());
		// $currentTime['time'] = array('value'=>$date);
		$query = "INSERT INTO courses (name, description, created_at) VALUES (?,?,?)";
		$values = array($course['title'], $course['description'], date('Y-m-d, h:i:s'));
		return $this->db->query($query, $values);		
	}
}

