<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuppliersController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        $this->load->model('SuppliersModel');
		$this->load->model('LocationModel');            
        } 

	public function index()
	{
		$data['suppliers'] = $this->SuppliersModel->getSuppliers();
		$this->load->view('admin/header');
        $this->load->view('admin/suppliers',$data);
        $this->load->view('admin/footer');
	}

    public function addSupplier()
	{
		if($this->input->post('sup_submit'))
		      {
		        $name=$this->input->post('sup_name');
            	$phone=$this->input->post('sup_phone');
            	$add=$this->input->post('sup_address');
                $loc=$this->input->post('sup_location');

                	$data = array(
						'sup_name' => $name,
                        'sup_phone' => $phone,
						'sup_address' => $add,
                        'sup_location' => $loc
					);

                    $this->SuppliersModel->addSupplier($data);

					$data['suppliers'] = $this->SuppliersModel->getSuppliers();					
					$this->load->view('admin/header');
					$this->load->view('admin/suppliers',$data);
					$this->load->view('admin/footer');    
                }            
        
          else
          {
			$data['location'] = $this->LocationModel->getLocations();
            $this->load->view('admin/header');
        	$this->load->view('admin/add_supplier', $data);
        	$this->load->view('admin/footer');
          }         
	}

    public function editSupplier($supid)
	{
		if($this->input->post('sup_submit'))
		      {
		        $name=$this->input->post('sup_name');
            	$phone=$this->input->post('sup_phone');
            	$add=$this->input->post('sup_address');
                $loc=$this->input->post('sup_location');

                	$data = array(
						'sup_name' => $name,
                        'sup_phone' => $phone,
						'sup_address' => $add,
                        'sup_location' => $loc
					);

                    $this->SuppliersModel->editSupplier($data, $supid);

					$data['suppliers'] = $this->SuppliersModel->getSuppliers();					
					$this->load->view('admin/header');
					$this->load->view('admin/suppliers',$data);
					$this->load->view('admin/footer');    
                }            
        
          else
          {
			$data['location'] = $this->LocationModel->getLocations();
            $data['supplier'] = $this->SuppliersModel->getSupplier($supid);
            $this->load->view('admin/header');
        	$this->load->view('admin/edit_supplier', $data);
        	$this->load->view('admin/footer');
          }         
	}

    public function deleteSupplier($supid)
	{
		$this->SuppliersModel->deleteSupplier($supid);
		$data['suppliers'] = $this->SuppliersModel->getSuppliers();
		$this->load->view('admin/header');
        $this->load->view('admin/Suppliers',$data);
        $this->load->view('admin/footer');
	}
}