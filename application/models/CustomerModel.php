<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model 
{
    function registerUser($data)
    {
        $this->db->insert('users', $data);
    }

    function getUser($user, $pass)
    {
        $query = $this->db->get_where('users', array('user_name' => $user, 'user_password' => $pass));
        //$result = $query->num_rows();
        return $query;
    }

    function getUserOrders($id)
    {
        $this->db->select('user_order_items.order_id, user_order_items.id, products.name, user_order_items.quantity, user_order_items.sub_total, user_order_items.status');
        $this->db->from('products');
        $this->db->join('user_order_items', 'products.id = user_order_items.product_id');
        $this->db->join('orders', 'user_order_items.order_id = orders.id');
        $this->db->join('users', 'user_order_items.user_id = users.id');
        $this->db->where('users.id', $this->session->userdata('userid'));
        //$this->db->where('tv.id', $id);
        //$this->db->order_by('order_items.order_id');
        $query = $this->db->get();
        //print_r($query->result());
        //exit;
        return $query->result();
    }

}