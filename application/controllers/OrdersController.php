<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdersController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        $this->load->model('OrdersModel');            
        } 

	public function index()
	{
		$data['orders'] = $this->OrdersModel->getOrders();
		$this->load->view('admin/header');
        $this->load->view('admin/orders',$data);
        $this->load->view('admin/footer');
	}

	public function deleteOrder($ordid)
	{
		$this->OrdersModel->deleteOrder($ordid);
		$data['orders'] = $this->OrdersModel->getOrders();
		$this->load->view('admin/header');
        $this->load->view('admin/orders',$data);
        $this->load->view('admin/footer');
	}

}