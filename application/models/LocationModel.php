<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LocationModel extends CI_Model 
{
    function getLocations()
    {
        $query= $this->db->get('location');
        return $query->result();
    }

    function addLocation($data)
    {
        $this->db->insert('location', $data);
    }

    function editLocation($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('location', $data);
    }

    function getLocation($id)
    {
        $this->db->where('id', $id);
        $query= $this->db->get('location');
        return $query->result();
    }

    function deleteLocation($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('location');
    }

}