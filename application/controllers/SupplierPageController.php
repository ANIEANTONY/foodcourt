<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierPageController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
		$this->load->library('session');
        $this->load->model('SuppliersModel');            
        } 

	public function index()
	{
		$this->load->view('supplier/login');
	}

	public function login()
	{
		$u=$this->input->post('login');
		$p=$this->input->post('password');
	
        $row = $this->SuppliersModel->getLoginSupplier($u,$p);
              
		if($row->num_rows() > 0)
			{
				$data  = $row->row_array();
        		$location  = $data['sup_location'];
				$name  = $data['sup_name'];

				$this->session->set_userdata('location', $location);
				$this->session->set_userdata('name', $name);

				$data['supplierOrder'] = $this->SuppliersModel->getSupplierOrder();
				$this->load->view('supplier/header');
				$this->load->view('supplier/supplierOrder', $data);
				$this->load->view('supplier/footer');
			}
			else
			{
                $data['error']="<h3 style='color:red'>Invalid login details</h3>";
                $this->load->view('supplier/login', $data);
            }			
		//$this->load->view('admin/login');
		// $this->load->view('admin/header');
        // $this->load->view('admin/index');
        // $this->load->view('admin/footer');
	}

	public function changeSupplierOrder($ordid)
	{
		$this->SuppliersModel->changeSupplierOrder($ordid);
		$data['supplierOrder'] = $this->SuppliersModel->getSupplierOrder();
		$this->load->view('supplier/header');
        $this->load->view('supplier/SupplierOrder',$data);
        $this->load->view('supplier/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('location');
		$this->session->unset_userdata('name');
		$this->session->sess_destroy();
		//$this->load->view('supplier/login');
		redirect('CustomerController');
	}
}
