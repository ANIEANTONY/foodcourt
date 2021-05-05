<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        $this->load->database();
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('Product');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->Product->getRows();
        $data['cartItems'] = $this->cart->contents();
        // Load the product list view
        $this->load->view('customer/header',$data);
        $this->load->view('customer/products', $data);
        $this->load->view('customer/footer');
    }
    
    function addToCart($proID){

        if($this->session->userdata('userid') != FALSE)
            {
                    
        // Fetch specific product by ID
        $product = $this->Product->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['name'],
            'image' => $product['image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        //redirect('cart/');
        redirect('customer/Products/');
        }
        else
        {
            $product = $this->Product->getRows($proID);
            $data = array(
                'id'    => $product['id'],
                'qty'    => 1,
                'price'    => $product['price'],
                'name'    => $product['name'],
                'image' => $product['image']
            );
            $this->cart->insert($data);

            redirect('CustomerController/login');
        }
        
    }

    function viewProduct($prodId)
    {
        $data['product'] = $this->Product->getProduct($prodId);
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('customer/header',$data);
        $this->load->view('customer/view_product', $data);
        $this->load->view('customer/footer');
    }

    function searchProduct()
    {
        if($this->input->post('search_submit'))
		{
        $search=$this->input->post('search');
        	
        $data['products'] = $this->Product->searchProduct($search);
        $data['cartItems'] = $this->cart->contents();
        // Load the product list view
        $this->load->view('customer/header',$data);
        $this->load->view('customer/products', $data);
        $this->load->view('customer/footer');
        }
        else
        {
            $data['products'] = $this->Product->getRows();
            $data['cartItems'] = $this->cart->contents();
            // Load the product list view
            $this->load->view('customer/header',$data);
            $this->load->view('customer/products', $data);
            $this->load->view('customer/footer');
          }
    }

    function categoryProduct($category)
    {
        
        $data['products'] = $this->Product->getCategoryProduct($category);
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('customer/header',$data);
        $this->load->view('customer/products', $data);
        $this->load->view('customer/footer');
    }
    
}