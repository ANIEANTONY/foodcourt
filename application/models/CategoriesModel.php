<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesModel extends CI_Model 
{
    function getCategories()
    {
        $query= $this->db->get('category');
        return $query->result();
    }

    function addCategory($data)
    {
        $this->db->insert('category', $data);
    }

    function editCategory($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('category', $data);
    }

    function getCategory($id)
    {
        $this->db->where('id', $id);
        $query= $this->db->get('category');
        return $query->result();
    }

    function deleteCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }

}