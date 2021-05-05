<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdersModel extends CI_Model 
{
    function getOrders()
    {
        $this->db->select('order_items.order_id, order_items.id, products.name, order_items.quantity, order_items.sub_total, customers.name as cust_name, customers.email, customers.phone, customers.address, order_items.status, customers.location');
        $this->db->from('products');
        $this->db->join('order_items', 'products.id = order_items.product_id');
        $this->db->join('orders', 'order_items.order_id = orders.id');
        $this->db->join('customers', 'orders.customer_id = customers.id');
        //$this->db->where('tv.id', $id);
        //$this->db->order_by('order_items.order_id');
        $query = $this->db->get();
        //print_r($query->result());
        //exit;
        return $query->result();
    }

    function deleteOrder($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('order_items');
    }
}