<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        $this->load->model('AdminModel');   
		$this->load->library('session');         
        } 

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login()
	{
		$u=$this->input->post('login');
		$p=$this->input->post('password');
	
        $row = $this->AdminModel->getAdmin($u,$p);
              
		if($row->num_rows() > 0)
			{
				$data  = $row->row_array();
        		$userid  = $data['id'];
                $username  = $data['admin_name'];

				$this->session->set_userdata('userid', $userid);
                $this->session->set_userdata('username', $username);

				$data['totalusers'] = $this->AdminModel->getTotalUsers();
				$data['totalorders'] = $this->AdminModel->getTotalOrders();
				$data['totalproducts'] = $this->AdminModel->getTotalProducts();
				$data['monthorder'] = $this->AdminModel->getMonthOrders();

				$this->load->view('admin/header');
				$this->load->view('admin/index',$data);
				$this->load->view('admin/footer');
			}
			else
			{
                $data['error']="<h3 style='color:red'>Invalid login details</h3>";
                $this->load->view('admin/login', $data);
            }			
		//$this->load->view('admin/login');
		// $this->load->view('admin/header');
        // $this->load->view('admin/index');
        // $this->load->view('admin/footer');
	}

	public function dashboard()
	{
		$data['totalusers'] = $this->AdminModel->getTotalUsers();
		$data['totalorders'] = $this->AdminModel->getTotalOrders();
		$data['totalproducts'] = $this->AdminModel->getTotalProducts();
		$data['monthorder'] = $this->AdminModel->getMonthOrders();

		$this->load->view('admin/header');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer');
	}

	public function logout()
	{
		//$this->load->view('admin/login');
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('username');
        $this->session->sess_destroy();		
		redirect('CustomerController');
	}
}
