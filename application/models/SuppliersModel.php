<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuppliersModel extends CI_Model 
{
    function getSuppliers()
    {
        $query= $this->db->get('supplier');
        return $query->result();
    }

    function addSupplier($data)
    {
        $this->db->insert('supplier', $data);
    }

    function editSupplier($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('supplier', $data);
    }

    function getSupplier($id)
    {
        $this->db->where('id', $id);
        $query= $this->db->get('supplier');
        return $query->result();
    }

    function deleteSupplier($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('supplier');
    }

    function getLoginSupplier($user, $pass)
    {
        $query = $this->db->get_where('supplier', array('sup_name' => $user, 'sup_phone' => $pass));
        //$result = $query->num_rows();
        return $query;
    }

    function getSupplierOrder()
    {
        $this->db->select('order_items.order_id, order_items.id, products.name, order_items.quantity, order_items.sub_total, customers.name as cust_name, customers.email, customers.phone, customers.address,customers.location,order_items.status ');
        $this->db->from('products');
        $this->db->join('order_items', 'products.id = order_items.product_id');
        $this->db->join('orders', 'order_items.order_id = orders.id');
        $this->db->join('customers', 'orders.customer_id = customers.id');
        $this->db->join('supplier', 'customers.location = supplier.sup_location');
        $this->db->where('supplier.sup_location', $this->session->userdata('location'));
        $query = $this->db->get();
        return $query->result();
    }

    function ChangeSupplierOrder($id)
    {
        $this->db->set('status', '0');
        $this->db->where('id', $id);
        $this->db->update('order_items');
    }
}