<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model 
{
    function getUsers()
    {
        $query= $this->db->get('users');
        return $query->result();
    }

    function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}