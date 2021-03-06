<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class customers_m extends CI_Model
{
	public function get($id = NULL)
	{
		$this->db->select('*');
		$this->db->from('customers');
		if ($id != NULL) {
			$this->db->where('customers_id', $id);
		}
		$post = $this->db->get();
		return $post;
	}

	public function ai_code()
	{
		$query = $this->db->query("SELECT MAX(customers_uniq) as customers_uniq from customers");
		$hasil = $query->row();
		return $hasil->customers_uniq;
	}

	public function add($post)
	{
		$params['customers_uniq']       = $post['customers_uniq'];
		$params['name_customers']       = $post['name_customers'];
		$params['gander_customers']     = $post['gander_customers'];
		$params['phone_customers']      = $post['phone_customers'];
		$params['address_customers']    = $post['address_customers'];

		$this->db->insert('customers', $params);
	}


	public function edit($post)
	{
		$params['name_customers']       = $post['name_customers'];
		$params['gander_customers']     = $post['gander_customers'];
		$params['phone_customers']      = $post['phone_customers'];
		$params['address_customers']    = $post['address_customers'];
		$params['updated']              = date('Y-m-d H:i:s');

		$this->db->where('customers_id', $post['customers_id']);
		$this->db->update('customers', $params);
	}

	public function del($post)
	{
		$this->db->where('customers_id', $post);
		$this->db->delete('customers');
	}
}
