<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class TalkToDb extends CI_model
{
	function get_products()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
		// $query = "SELECT * FROM products";
		// return $this->db->query($query);
		var_dump($query);

		// $query = "INSERT INTO user (email, first_name, last_name, password, created_at, updated_ad) VALUES (?,?,?,?,?,?)";
		// $values = array($newOrder['email'], $add_user['first_name'], $add_user['last_name'], $add_user['password'], date('Y-m-d, h:i:s'), date('Y-m-d, h:i:s')); 
		// return $this->db->query($query, $values);

	}	

	function products_id($products_id)
	{
		// return $this->db->query("SELECT * FROM products WHERE id= ?");
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($products_id))->row_array();
		// echo "test";
		// return $this->db->query("SELECT * FROM products")->result_array();
	}

	function store_cart($toTheCart)
	{
		// 		var_dump($toTheCart);
		// 		var_dump($_POST);
		// echo "hi";
		// die();
		$quantity = $this->session->userdata('quantity');
		$products_id = $this->session->userdata('products_id');
		$session_id = $this->session->userdata('session_id');

			$toTheCart = array(
				'quantity' => $quantity,
				'products_id' => $products_id,
				'session_id' => $session_id
			);
		$store_cart = $this->TalkToDb->store_cart($toTheCart);
			
		$query = "INSERT INTO users (name, address, card) VALUES (?,?,?)";
		$values = array(array['name'], array['address'], array['card'];
			return $this->db->query($query, $values);
		echo "hi";
			die();	

		$query = "INSERT INTO orders (products_id, quantity, created_at, updated_at, users_id) VALUES (?,?,?,?,?)";
		$values = array($toTheCart['products_id'], $toTheCart['quantity'], date('Y-m-d h:i:s'), date('Y-m-d h:i:s'), $toTheCart['session_id']); 
		var_dump($toTheCart);
		var_dump($_POST);
		die();	

		// return $this->db->query($query, $values);
		// redirect('main');
	}
}