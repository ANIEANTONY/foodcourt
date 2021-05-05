<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        $this->load->model('CategoriesModel');            
        } 

	public function index()
	{
		$data['categories'] = $this->CategoriesModel->getCategories();
		$this->load->view('admin/header');
        $this->load->view('admin/categories',$data);
        $this->load->view('admin/footer');
	}

    public function addCategory()
	{
		if($this->input->post('cat_submit'))
		      {
		        $name=$this->input->post('cat_name');
            	//$type=$this->input->post('cat_type');
            	$desc=$this->input->post('cat_desc');

                	$data = array(
						'cat_name' => $name,
                        //'cat_type' => $type,
						'cat_description' => $desc
					);

                    $this->CategoriesModel->addCategory($data);

					$data['categories'] = $this->CategoriesModel->getCategories();					
					$this->load->view('admin/header');
					$this->load->view('admin/categories',$data);
					$this->load->view('admin/footer');    
                }            
        
          else
          {
            $this->load->view('admin/header');
        	$this->load->view('admin/add_category');
        	$this->load->view('admin/footer');
          }         
	}

    public function editCategory($catid)
	{
		if($this->input->post('cat_submit'))
		      {
		        $name=$this->input->post('cat_name');
            	//$type=$this->input->post('cat_type');
            	$desc=$this->input->post('cat_desc');

                	$data = array(
						'cat_name' => $name,
                        //'cat_type' => $type,
						'cat_description' => $desc
					);

                    $this->CategoriesModel->editCategory($data, $catid);

					$data['categories'] = $this->CategoriesModel->getCategories();					
					$this->load->view('admin/header');
					$this->load->view('admin/categories',$data);
					$this->load->view('admin/footer');    
                }            
        
          else
          {
            $data['category'] = $this->CategoriesModel->getCategory($catid);
            $this->load->view('admin/header');
        	$this->load->view('admin/edit_category', $data);
        	$this->load->view('admin/footer');
          }         
	}

    public function deleteCategory($catid)
	{
		$this->CategoriesModel->deleteCategory($catid);
		$data['categories'] = $this->CategoriesModel->getCategories();
		$this->load->view('admin/header');
        $this->load->view('admin/categories',$data);
        $this->load->view('admin/footer');
	}
}