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
	}	

	function products_id($products_id)
	{
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($products_id))->row_array();
	}
	function get_cart()
	{
		return $this->db->query("SELECT products.description, products.price, sum(quantity) AS 'quantity', orders.id AS 'order_id'
		FROM orders
		left JOIN products
		ON products.id = orders.products_id
		GROUP BY products.id;")->result_array();

	}

	function store_cart($toTheCart)
	{

		$query = "INSERT INTO orders (products_id, quantity, created_at, updated_at) VALUES (?,?,?,?)";
		$values = array($toTheCart['products_id'], $toTheCart['quantity'], date('Y-m-d h:i:s'), date('Y-m-d h:i:s')); 	

		return $this->db->query($query, $values);
		// var_dump($toTheCart);
		// var_dump($query);
		die();
		// redirect('main');
	}

	function delete($deletedOrder)
	{

		$query = "DELETE FROM orders WHERE orders.id = $deletedOrder;";
		return $this->db->query($query);
		
		// echo "hi";
		// var_dump($deletedOrder);
		// die();
		// $this->db->delete('orders', $deletedOrder);
		// $this->db->delete();
		// $this->db->delete('orders', array('order_id' => $deletedOrder));

		// echo "hi";
		// var_dump($deletedOrder);
		// die();
	}

}