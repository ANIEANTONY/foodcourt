<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        $this->load->library('cart');
        $this->load->model('CustomerModel');  
        $this->load->model('product'); 
        $this->load->model('Product');  

        $this->load->library('session');       
        } 

	public function index()
	{
        $data['products'] = $this->product->getRows();
        $data['cartItems'] = $this->cart->contents();
		$this->load->view('customer/index',$data);
	}

    public function register()
	{
        if($this->input->post('register'))
		      {
		        $name=$this->input->post('user_name');
                $pass=$this->input->post('password');
                $email=$this->input->post('email');
            	$phone=$this->input->post('phone');
            	$add=$this->input->post('address');

                	$data = array(
						'user_name' => $name,
                        'user_password' => $pass,
                        'user_email' => $email,
                        'user_phone' => $phone,
						'user_address' => $add                        
					);

                    $this->CustomerModel->registerUser($data);
					
					$this->load->view('customer/header');   
		            $this->load->view('customer/login');
                    $this->load->view('customer/footer');    
                }            
        
          else
          {
        $this->load->view('customer/header');   
		$this->load->view('customer/register');
        $this->load->view('customer/footer');
          }
	}

    public function login()
	{
        if($this->input->post('login'))
		{
        $u=$this->input->post('user_name');
		$p=$this->input->post('password');
        	
        $row = $this->CustomerModel->getUser($u,$p);
              
		if($row->num_rows() > 0)
			{
                $data  = $row->row_array();
        		$userid  = $data['id'];
                $username  = $data['user_name'];

				$this->session->set_userdata('userid', $userid);
                $this->session->set_userdata('username', $username);

                if($this->cart->total_items() > 0)  
                {
                    redirect('customer/cart');
                }
                else
                {
                    
                    $data['cartItems'] = $this->cart->contents();  
		            $this->load->view('customer/index', $data);
                }
            }
        else
			{
                $data['error']="<h3 style='color:red'>Invalid login details</h3>";
                $this->load->view('customer/header');
                $this->load->view('customer/login', $data);
                $this->load->view('customer/footer');
            }
        }
        else
          {
        $this->load->view('customer/header');   
		$this->load->view('customer/login');
        $this->load->view('customer/footer');
          }

	}

    public function myAccount()
	{
        $data['userorders'] = $this->CustomerModel->getUserOrders($this->session->userdata('userid'));
        $data['cartItems'] = $this->cart->contents();

        $this->load->view('customer/header');
		$this->load->view('customer/myaccount',$data);
        $this->load->view('customer/footer');
	}


    public function gallery(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->Product->getRows();
        $data['cartItems'] = $this->cart->contents();
        // Load the product list view
      
        $this->load->view('customer/header',$data);   
		$this->load->view('customer/gallery',$data);
        $this->load->view('customer/footer');
    }
    public function contactus(){
        $this->load->view('customer/header');   
		$this->load->view('customer/contactus');
        $this->load->view('customer/footer');
    }

    public function aboutus(){
        $this->load->view('customer/header');   
		$this->load->view('customer/aboutus');
        $this->load->view('customer/footer');
    }

    public function logout()
	{
        $this->session->unset_userdata('userid');
        $this->session->sess_destroy();
		$this->load->view('customer/index');
	}
	
}
