<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LocationsController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        //$this->load->model('SuppliersModel');
		$this->load->model('LocationModel');            
        } 

	public function index()
	{
		$data['locations'] = $this->LocationModel->getLocations();
		$this->load->view('admin/header');
        $this->load->view('admin/locations',$data);
        $this->load->view('admin/footer');
	}

    public function addLocation()
	{
		if($this->input->post('loc_submit'))
		      {
		        $name=$this->input->post('loc_name');
            	$add=$this->input->post('loc_address');

                	$data = array(
						'loc_name' => $name,
						'loc_address' => $add
					);

                    $this->LocationModel->addLocation($data);

					$data['locations'] = $this->LocationModel->getLocations();					
					$this->load->view('admin/header');
					$this->load->view('admin/locations',$data);
					$this->load->view('admin/footer');    
                }            
        
          else
          {
			//$data['location'] = $this->LocationModel->getLocations();
            $this->load->view('admin/header');
        	$this->load->view('admin/add_location');
        	$this->load->view('admin/footer');
          }         
	}

    public function editLocation($locid)
	{
		if($this->input->post('loc_submit'))
		      {
		        $name=$this->input->post('loc_name');            	
            	$add=$this->input->post('loc_address');

                	$data = array(
						'loc_name' => $name,                        
						'loc_address' => $add                        
					);

                    $this->LocationModel->editLocation($data, $locid);

					$data['locations'] = $this->LocationModel->getLocations();					
					$this->load->view('admin/header');
					$this->load->view('admin/locations',$data);
					$this->load->view('admin/footer');    
                }            
        
          else
          {
			//$data['location'] = $this->LocationModel->getLocations();
            $data['location'] = $this->LocationModel->getLocation($locid);
            $this->load->view('admin/header');
        	$this->load->view('admin/edit_location', $data);
        	$this->load->view('admin/footer');
          }         
	}

    public function deleteLocation($locid)
	{
		$this->LocationModel->deleteLocation($locid);
		$data['locations'] = $this->LocationModel->getLocations();
		$this->load->view('admin/header');
        $this->load->view('admin/locations',$data);
        $this->load->view('admin/footer');
	}
}