<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model 
{
    function getAdmin($user, $pass)
    {
        $query = $this->db->get_where('admin', array('admin_name' => $user, 'admin_password' => $pass));
        //$result = $query->num_rows();
        return $query;
    }

    function getMonthOrders()
    {
        //$query = $this->db->query('select year(created) as year, month(created) as month, sum() as total_amount from amount_table group by year(date), month(date)');
        $query = $this->db->get_where('orders', array('Month(created)' => date('m')));
        $result = $query->num_rows();
        return $result;
    }

    function getTotalUsers()
    {
        $query = $this->db->get('users');
        $result = $query->num_rows();
        return $result;
    }

    function getTotalOrders()
    {
        $query = $this->db->get('orders');
        $result = $query->num_rows();
        return $result;
    }

    function getTotalProducts()
    {
        $query = $this->db->get('products');
        $result = $query->num_rows();
        return $result;
    }

}