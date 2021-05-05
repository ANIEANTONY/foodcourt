<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

    public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        $this->load->model('UsersModel');            
        }   

	public function index()
	{
        $data['users'] = $this->UsersModel->getUsers();
		$this->load->view('admin/header');
        $this->load->view('admin/users',$data);
        $this->load->view('admin/footer');
	}

	public function deleteUser($userid)
	{
		$this->UsersModel->deleteUser($userid);
		$data['users'] = $this->UsersModel->getUsers();
		$this->load->view('admin/header');
        $this->load->view('admin/users',$data);
        $this->load->view('admin/footer');
	}
}
