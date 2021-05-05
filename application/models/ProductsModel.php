<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsModel extends CI_Model 
{
    function getProducts()
    {
        $query= $this->db->get('products');
        return $query->result();
    }

    function addProduct($data)
    {
        $this->db->insert('products', $data);
    }

    function editProduct($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }

    function getProduct($id)
    {
        $this->db->where('id', $id);
        $query= $this->db->get('products');
        return $query->result();
    }

    function deleteProduct($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }
}